<?php
function wpdt_get_category_nodelist($args){	
	global $wpdb;	
	extract($args, EXTR_SKIP);			
	$idcount = 1;
	$nodelist = array();
	$catids = array();
	$catresults = get_categories(array(
		'orderby' => $sortby, 'order' => $sort_order, 'taxonomy' => $taxonomy,
		'hide_empty' => $hide_empty, 'include_last_update_time' => $include_last_update_time, 'hierarchical' => 1, 
		'exclude' => $exclude, 'include' => $include, 'number' => $number, 'pad_counts' => $pad_counts, 'child_of' => $child_of
//		'parent' => $parent
	));			
	foreach ($catresults as $cat){						
		$nodelist[$idcount] = array( 
			'id' => -$cat->cat_ID, 
			'pid' => -$cat->category_parent,					 
			'url' => get_category_link($cat->term_id),
			'name' => ($showcount) ? strip_tags($cat->name ." ({$cat->count})") : strip_tags($cat->name),
			'title' => strip_tags($cat->description)			
		);// <span class='dtcount'>($postcount)</span>
		$catids[$cat->cat_ID] = array('posts_returned' => 0, 'count' => $cat->count); //save the ID, post-counter and actual post count in case we're asked to limit the tree and needs to know how much we've kept back
		$idcount++;		
	}	
	//categories can be arranged arbitrarily, and with some creative exlusion/inclusion, you'll easily create a tree without a single page connecting to root or a even parent.		
	foreach($nodelist as $key => $node){ //thus this step to fixup any orphans.
		if($node['pid'] == 0){continue;} //connected to root.
		$hasparent = false;			
		foreach($nodelist as $potential_parent){
			if($potential_parent['id'] == $node['pid']){					
				$hasparent = true; break;
			}
		}
		if(!$hasparent){$nodelist[$key]['pid'] = 0;	} //connect orphans to root.
	}				
	if(!$listposts || !count($nodelist)){ //it's either empty or we don't need to list posts. Either way - skip the rest.		
		return $nodelist;
	}	
	unset($catresults);
	$postexclusions = wpdt_build_exclude_statement($postexclude, $wpdb->posts.'.ID');		
	$catexclusions = wpdt_build_exclude_statement($exclude, $wpdb->terms.'.term_id');	
	$groupby = (!$allowdupes) ? " GROUP BY {$wpdb->posts}.ID ": '';	
	$unions = array();	
	$query = "(SELECT {$wpdb->posts}.ID AS 'ID', {$wpdb->posts}.post_title AS 'post_title', {$wpdb->terms}.term_id AS 'catid' 
				 FROM {$wpdb->posts}, {$wpdb->terms}, {$wpdb->term_relationships}, {$wpdb->term_taxonomy} 
				 WHERE {$wpdb->term_relationships}.object_id = {$wpdb->posts}.ID
				 AND {$wpdb->term_taxonomy}.taxonomy = 'category' 
				 AND {$wpdb->term_relationships}.term_taxonomy_id = {$wpdb->term_taxonomy}.term_taxonomy_id 
				 AND {$wpdb->term_taxonomy}.term_id = {$wpdb->terms}.term_id 	 
				 /*category-id*/
				 AND {$wpdb->posts}.post_status = 'publish' 
				 AND {$wpdb->posts}.post_type = 'post' 
				{$catexclusions} 				
				{$postexclusions} 
				{$groupby} 
				ORDER BY {$wpdb->posts}.{$cpsortby} {$cpsortorder}
				/*limit*/)";		
	if($limit_posts > 0){ //selecting subsets of subsets: http://www.mysqlperformanceblog.com/2006/08/10/using-union-to-implement-loose-index-scan-to-mysql/		
		foreach($catids as $catid => $count){
			$unions[] = str_replace('/*category-id*/', " AND {$wpdb->term_taxonomy}.term_id = {$catid} ", str_replace('/*limit*/', " LIMIT {$limit_posts}", $query));			
		}			
		$query = implode(' UNION ALL ', $unions);
		unset($unions);
	}	
	$postresults = (array)$wpdb->get_results($query);		
	foreach($postresults as $postresult){
		if(!isset($catids[$postresult->catid])){
			continue;
		}
		$text = strip_tags(apply_filters('the_title', $postresult->post_title));		
		$url = esc_url(get_permalink($postresult->ID));
		$catids[$postresult->catid]['posts_returned'] += 1; //add 
		$nodelist[$idcount] = array(
			'id' => $postresult->ID, 
			'pid' => -$postresult->catid, 
			'name' => $text, 
			'url' => $url, 
			'title' => ''
		);
		$idcount++;	
	}		
	if($limit_posts > 0){ //add the "Show more"-links, if we've limited the tree length
		$show_more = ($more_link) ? $more_link : "Show more (%excluded%)...";
		foreach($catids as $catid => $count){
			$excluded = $count['count']-$count['posts_returned'];
			if($excluded > 0){				
				$nodelist[$idcount++] = array(
					'id' => "'{$idcount}'", //a string, to avoid ID-trampling.
					'pid' => -$catid, 
					'name' => esc_html__(str_replace('%excluded%', $excluded, $show_more), 'wpdtree'), //add category count? 
					'url' => get_category_link($catid), 
					'title' => esc_attr__('Browse all posts in '.get_cat_name($catid), 'wpdtree')
				);				
			}
		}	
	}	
	unset($catids);
	unset($postresults);
	// Support for "Advanced Post Types Order" plugin
	// Only when sorting posts by menu order, like in free plugin
	// Added by sydcode (August 2013)
	if(!defined('APTO_SLUG') || $cpsortby != 'menu_order' || APTO_SLUG != 'advanced-post-types-order') {
		return $nodelist;
	}
	// Check table exists
	$apto_table = $wpdb->prefix . 'apto';
	$table_exists = $wpdb->get_var("SHOW TABLES LIKE '{$apto_table}'");
	if(!$table_exists){
		return $nodelist;
	}
	// Find category nodes
	foreach($nodelist as $node) {
		if($node['pid'] > 0){
			continue;
		}
		// Get ordered posts for each category node
		$term_id = abs($node['id']);
		$sql = "SELECT post_id FROM {$apto_table} 
			WHERE taxonomy = 'category' AND post_type = 'post' 
			AND term_id = %d			
			ORDER BY id {$cpsortorder}
		";
		$apto_posts = $wpdb->get_results($wpdb->prepare($sql, $term_id), ARRAY_A);
		if(empty($apto_posts)) {
			continue;
		}
		// Search for matching posts in nodelist
		foreach ($apto_posts as $post1) {
			foreach ($nodelist as $key1 => $node1) {
				if ($node['id'] == $node1['pid'] && $post1['post_id'] == $node1['id']) {
					// Move post to end of nodelist
					$item = $nodelist[$key1];
					unset($nodelist[$key1]);
					array_push($nodelist, $item); 
					break;
				}
			}
		}
	}
	return $nodelist;
}
?>