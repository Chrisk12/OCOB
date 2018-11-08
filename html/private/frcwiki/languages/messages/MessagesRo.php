<?php
/** Romanian (română)
 *
 * To improve a translation please visit https://translatewiki.net
 *
 * @ingroup Language
 * @file
 *
 * @author AdiJapan
 * @author Cin
 * @author Danutz
 * @author Emily
 * @author Firilacroco
 * @author Geitost
 * @author Gutza
 * @author KlaudiuMihaila
 * @author Laurap
 * @author Malafaya
 * @author Memo18
 * @author Mihai
 * @author Minisarm
 * @author Misterr
 * @author SCriBu
 * @author Silviubogan
 * @author Stelistcristi
 * @author Strainu
 * @author TTO
 * @author Urhixidur
 * @author לערי ריינהארט
 */

$separatorTransformTable = array( ',' => ".", '.' => ',' );

$magicWords = array(
	'redirect'                  => array( '0', '#REDIRECTEAZA', '#REDIRECT' ),
	'notoc'                     => array( '0', '__FARACUPRINS__', '__NOTOC__' ),
	'nogallery'                 => array( '0', '__FARAGALERIE__', '__NOGALLERY__' ),
	'forcetoc'                  => array( '0', '__FORTEAZACUPRINS__', '__FORCETOC__' ),
	'toc'                       => array( '0', '__CUPRINS__', '__TOC__' ),
	'noeditsection'             => array( '0', '__FARAEDITSECTIUNE__', '__NOEDITSECTION__' ),
	'currentmonth'              => array( '1', 'NUMARLUNACURENTA', 'CURRENTMONTH', 'CURRENTMONTH2' ),
	'currentmonth1'             => array( '1', 'LUNACURENTA1', 'CURRENTMONTH1' ),
	'currentmonthname'          => array( '1', 'NUMELUNACURENTA', 'CURRENTMONTHNAME' ),
	'currentmonthnamegen'       => array( '1', 'NUMELUNACURENTAGEN', 'CURRENTMONTHNAMEGEN' ),
	'currentmonthabbrev'        => array( '1', 'LUNACURENTAABREV', 'CURRENTMONTHABBREV' ),
	'currentday'                => array( '1', 'NUMARZIUACURENTA', 'CURRENTDAY' ),
	'currentday2'               => array( '1', 'NUMARZIUACURENTA2', 'CURRENTDAY2' ),
	'currentdayname'            => array( '1', 'NUMEZIUACURENTA', 'CURRENTDAYNAME' ),
	'currentyear'               => array( '1', 'ANULCURENT', 'CURRENTYEAR' ),
	'currenttime'               => array( '1', 'TIMPULCURENT', 'CURRENTTIME' ),
	'currenthour'               => array( '1', 'ORACURENTA', 'CURRENTHOUR' ),
	'localmonth'                => array( '1', 'LUNALOCALA', 'LUNALOCALA2', 'LOCALMONTH', 'LOCALMONTH2' ),
	'localmonth1'               => array( '1', 'LUNALOCALA1', 'LOCALMONTH1' ),
	'localmonthname'            => array( '1', 'NUMELUNALOCALA', 'LOCALMONTHNAME' ),
	'localmonthnamegen'         => array( '1', 'NUMELUNALOCALAGEN', 'LOCALMONTHNAMEGEN' ),
	'localmonthabbrev'          => array( '1', 'LUNALOCALAABREV', 'LOCALMONTHABBREV' ),
	'localday'                  => array( '1', 'ZIUALOCALA', 'LOCALDAY' ),
	'localday2'                 => array( '1', 'ZIUALOCALA2', 'LOCALDAY2' ),
	'localdayname'              => array( '1', 'NUMEZIUALOCALA', 'LOCALDAYNAME' ),
	'localyear'                 => array( '1', 'ANULLOCAL', 'LOCALYEAR' ),
	'localtime'                 => array( '1', 'TIMPULLOCAL', 'LOCALTIME' ),
	'localhour'                 => array( '1', 'ORALOCALA', 'LOCALHOUR' ),
	'numberofpages'             => array( '1', 'NUMARDEPAGINI', 'NUMBEROFPAGES' ),
	'numberofarticles'          => array( '1', 'NUMARDEARTICOLE', 'NUMBEROFARTICLES' ),
	'numberoffiles'             => array( '1', 'NUMARDEFISIERE', 'NUMBEROFFILES' ),
	'numberofusers'             => array( '1', 'NUMARDEUTILIZATORI', 'NUMBEROFUSERS' ),
	'numberofactiveusers'       => array( '1', 'NUMARDEUTILIZATORIACTIVI', 'NUMBEROFACTIVEUSERS' ),
	'numberofedits'             => array( '1', 'NUMARDEMODIFICARI', 'NUMBEROFEDITS' ),
	'numberofviews'             => array( '1', 'NUMARDEVIZUALIZARI', 'NUMBEROFVIEWS' ),
	'pagename'                  => array( '1', 'NUMEPAGINA', 'PAGENAME' ),
	'pagenamee'                 => array( '1', 'NUMEEPAGINA', 'PAGENAMEE' ),
	'namespace'                 => array( '1', 'SPATIUDENUME', 'NAMESPACE' ),
	'namespacee'                => array( '1', 'SPATIUUDENUME', 'NAMESPACEE' ),
	'talkspace'                 => array( '1', 'SPATIUDEDISCUTIE', 'TALKSPACE' ),
	'talkspacee'                => array( '1', 'SPATIUUDEDISCUTIE', 'TALKSPACEE' ),
	'subjectspace'              => array( '1', 'SPATIUSUBIECT', 'SPATIUARTICOL', 'SUBJECTSPACE', 'ARTICLESPACE' ),
	'subjectspacee'             => array( '1', 'SPATIUUSUBIECT', 'SPATIUUARTICOL', 'SUBJECTSPACEE', 'ARTICLESPACEE' ),
	'fullpagename'              => array( '1', 'NUMEPAGINACOMPLET', 'FULLPAGENAME' ),
	'fullpagenamee'             => array( '1', 'NUMEEPAGINACOMPLET', 'FULLPAGENAMEE' ),
	'subpagename'               => array( '1', 'NUMESUBPAGINA', 'SUBPAGENAME' ),
	'subpagenamee'              => array( '1', 'NUMEESUBPAGINA', 'SUBPAGENAMEE' ),
	'basepagename'              => array( '1', 'NUMEDEBAZAPAGINA', 'BASEPAGENAME' ),
	'basepagenamee'             => array( '1', 'NUMEEDEBAZAPAGINA', 'BASEPAGENAMEE' ),
	'talkpagename'              => array( '1', 'NUMEPAGINADEDISCUTIE', 'TALKPAGENAME' ),
	'talkpagenamee'             => array( '1', 'NUMEEPAGINADEDISCUTIE', 'TALKPAGENAMEE' ),
	'subjectpagename'           => array( '1', 'NUMEPAGINASUBIECT', 'NUMEPAGINAARTICOL', 'SUBJECTPAGENAME', 'ARTICLEPAGENAME' ),
	'subjectpagenamee'          => array( '1', 'NUMEEPAGINASUBIECT', 'NUMEEPAGINAARTICOL', 'SUBJECTPAGENAMEE', 'ARTICLEPAGENAMEE' ),
	'msg'                       => array( '0', 'MSJ:', 'MSG:' ),
	'msgnw'                     => array( '0', 'MSJNOU:', 'MSGNW:' ),
	'img_thumbnail'             => array( '1', 'miniatura', 'mini', 'thumbnail', 'thumb' ),
	'img_manualthumb'           => array( '1', 'miniatura=$1', 'mini=$1', 'thumbnail=$1', 'thumb=$1' ),
	'img_right'                 => array( '1', 'dreapta', 'right' ),
	'img_left'                  => array( '1', 'stanga', 'left' ),
	'img_none'                  => array( '1', 'nu', 'none' ),
	'img_center'                => array( '1', 'centru', 'center', 'centre' ),
	'img_framed'                => array( '1', 'cadru', 'framed', 'enframed', 'frame' ),
	'img_frameless'             => array( '1', 'faracadru', 'frameless' ),
	'img_page'                  => array( '1', 'pagina=$1', 'pagina $1', 'page=$1', 'page $1' ),
	'img_upright'               => array( '1', 'dreaptasus', 'dreaptasus=$1', 'dreaptasus $1', 'upright', 'upright=$1', 'upright $1' ),
	'img_border'                => array( '1', 'chenar', 'border' ),
	'img_baseline'              => array( '1', 'linia_de_bază', 'baseline' ),
	'img_sub'                   => array( '1', 'indice', 'sub' ),
	'img_super'                 => array( '1', 'exponent', 'super', 'sup' ),
	'img_top'                   => array( '1', 'sus', 'top' ),
	'img_text_top'              => array( '1', 'text-sus', 'text-top' ),
	'img_middle'                => array( '1', 'mijloc', 'middle' ),
	'img_bottom'                => array( '1', 'jos', 'bottom' ),
	'img_text_bottom'           => array( '1', 'text-jos', 'text-bottom' ),
	'img_link'                  => array( '1', 'legătură=$1', 'link=$1' ),
	'sitename'                  => array( '1', 'NUMESITE', 'SITENAME' ),
	'ns'                        => array( '0', 'SN:', 'NS:' ),
	'localurl'                  => array( '0', 'URLLOCAL:', 'LOCALURL:' ),
	'localurle'                 => array( '0', 'URLLOCALE:', 'LOCALURLE:' ),
	'servername'                => array( '0', 'NUMESERVER', 'SERVERNAME' ),
	'scriptpath'                => array( '0', 'CALESCRIPT', 'SCRIPTPATH' ),
	'grammar'                   => array( '0', 'GRAMATICA:', 'GRAMMAR:' ),
	'gender'                    => array( '0', 'GEN:', 'GENDER:' ),
	'notitleconvert'            => array( '0', '__FARACONVERTIRETITLU__', '__FCT__', '__NOTITLECONVERT__', '__NOTC__' ),
	'nocontentconvert'          => array( '0', '__FARACONVERTIRECONTINUT__', '__FCC__', '__NOCONTENTCONVERT__', '__NOCC__' ),
	'currentweek'               => array( '1', 'SAPTAMANACURENTA', 'CURRENTWEEK' ),
	'localweek'                 => array( '1', 'SAPTAMANALOCALA', 'LOCALWEEK' ),
	'revisionid'                => array( '1', 'IDREVIZIE', 'REVISIONID' ),
	'revisionday'               => array( '1', 'ZIREVIZIE', 'REVISIONDAY' ),
	'revisionday2'              => array( '1', 'ZIREVIZIE2', 'REVISIONDAY2' ),
	'revisionmonth'             => array( '1', 'LUNAREVIZIE', 'REVISIONMONTH' ),
	'revisionyear'              => array( '1', 'ANREVIZIE', 'REVISIONYEAR' ),
	'revisiontimestamp'         => array( '1', 'STAMPILATIMPREVIZIE', 'REVISIONTIMESTAMP' ),
	'revisionuser'              => array( '1', 'UTILIZATORREVIZIE', 'REVISIONUSER' ),
	'fullurl'                   => array( '0', 'URLCOMPLET:', 'FULLURL:' ),
	'fullurle'                  => array( '0', 'URLCOMPLETE:', 'FULLURLE:' ),
	'lcfirst'                   => array( '0', 'MINUSCULAPRIMA:', 'LCFIRST:' ),
	'ucfirst'                   => array( '0', 'MAJUSCULAPRIMA:', 'UCFIRST:' ),
	'lc'                        => array( '0', 'MINUSCULA:', 'LC:' ),
	'uc'                        => array( '0', 'MAJUSCULA:', 'UC:' ),
	'raw'                       => array( '0', 'BRUT:', 'RAW:' ),
	'displaytitle'              => array( '1', 'ARATATITLU', 'DISPLAYTITLE' ),
	'newsectionlink'            => array( '1', '__LEGATURASECTIUNENOUA__', '__NEWSECTIONLINK__' ),
	'nonewsectionlink'          => array( '1', '__FARALEGATURASECTIUNENOUA__', '__NONEWSECTIONLINK__' ),
	'currentversion'            => array( '1', 'VERSIUNECURENTA', 'CURRENTVERSION' ),
	'urlencode'                 => array( '0', 'CODIFICAREURL:', 'URLENCODE:' ),
	'anchorencode'              => array( '0', 'CODIFICAREANCORA', 'ANCHORENCODE' ),
	'currenttimestamp'          => array( '1', 'STAMPILATIMPCURENT', 'CURRENTTIMESTAMP' ),
	'localtimestamp'            => array( '1', 'STAMPILATIMPLOCAL', 'LOCALTIMESTAMP' ),
	'directionmark'             => array( '1', 'SEMNDIRECTIE', 'DIRECTIONMARK', 'DIRMARK' ),
	'language'                  => array( '0', '#LIMBA:', '#LANGUAGE:' ),
	'contentlanguage'           => array( '1', 'LIMBACONTINUT', 'CONTENTLANGUAGE', 'CONTENTLANG' ),
	'pagesinnamespace'          => array( '1', 'PANIGIINSPATIULDENUME:', 'PAGINIINSN:', 'PAGESINNAMESPACE:', 'PAGESINNS:' ),
	'numberofadmins'            => array( '1', 'NUMARADMINI', 'NUMBEROFADMINS' ),
	'formatnum'                 => array( '0', 'FORMATNR', 'FORMATNUM' ),
	'defaultsort'               => array( '1', 'SORTAREIMPLICITA:', 'CHEIESORTAREIMPLICITA:', 'CATEGORIESORTAREIMPLICITA:', 'DEFAULTSORT:', 'DEFAULTSORTKEY:', 'DEFAULTCATEGORYSORT:' ),
	'filepath'                  => array( '0', 'CALEAFISIERULUI:', 'FILEPATH:' ),
	'tag'                       => array( '0', 'eticheta', 'tag' ),
	'hiddencat'                 => array( '1', '__ASCUNDECAT__', '__HIDDENCAT__' ),
	'pagesincategory'           => array( '1', 'PAGINIINCATEGORIE', 'PAGINIINCAT', 'PAGESINCATEGORY', 'PAGESINCAT' ),
	'pagesize'                  => array( '1', 'MARIMEPAGINA', 'PAGESIZE' ),
	'noindex'                   => array( '1', '__FARAINDEX__', '__NOINDEX__' ),
	'numberingroup'             => array( '1', 'NUMARINGRUP', 'NUMINGRUP', 'NUMBERINGROUP', 'NUMINGROUP' ),
	'staticredirect'            => array( '1', '__REDIRECTIONARESTATICA__', '__STATICREDIRECT__' ),
	'protectionlevel'           => array( '1', 'NIVELPROTECTIE', 'PROTECTIONLEVEL' ),
	'formatdate'                => array( '0', 'formatdata', 'dataformat', 'formatdate', 'dateformat' ),
);

$namespaceNames = array(
	NS_MEDIA            => 'Media',
	NS_SPECIAL          => 'Special',
	NS_TALK             => 'Discuție',
	NS_USER             => 'Utilizator',
	NS_USER_TALK        => 'Discuție_Utilizator',
	NS_PROJECT_TALK     => 'Discuție_$1',
	NS_FILE             => 'Fișier',
	NS_FILE_TALK        => 'Discuție_Fișier',
	NS_MEDIAWIKI        => 'MediaWiki',
	NS_MEDIAWIKI_TALK   => 'Discuție_MediaWiki',
	NS_TEMPLATE         => 'Format',
	NS_TEMPLATE_TALK    => 'Discuție_Format',
	NS_HELP             => 'Ajutor',
	NS_HELP_TALK        => 'Discuție_Ajutor',
	NS_CATEGORY         => 'Categorie',
	NS_CATEGORY_TALK    => 'Discuție_Categorie',
);

$namespaceAliases = array(
	'Discuţie'            => NS_TALK,
	'Discuţie_Utilizator' => NS_USER_TALK,
	'Discuţie_$1'         => NS_PROJECT_TALK,
	'Imagine'             => NS_FILE,
	'Discuţie_Imagine'    => NS_FILE_TALK,
	'Fişier'              => NS_FILE,
	'Discuţie_Fişier'     => NS_FILE_TALK,
	'Discuţie_MediaWiki'  => NS_MEDIAWIKI_TALK,
	'Discuţie_Format'     => NS_TEMPLATE_TALK,
	'Discuţie_Ajutor'     => NS_HELP_TALK,
	'Discuţie_Categorie'  => NS_CATEGORY_TALK,
);

$specialPageAliases = array(
	'Activeusers'               => array( 'Utilizatori_activi' ),
	'Allmessages'               => array( 'Toate_mesajele' ),
	'Allpages'                  => array( 'Toate_paginile' ),
	'Ancientpages'              => array( 'Pagini_vechi' ),
	'Blankpage'                 => array( 'Pagină_goală' ),
	'Block'                     => array( 'Blochează_IP' ),
	'Booksources'               => array( 'Referințe_în_cărți' ),
	'BrokenRedirects'           => array( 'Redirectări_invalide' ),
	'Categories'                => array( 'Categorii' ),
	'ChangePassword'            => array( 'Resetează_parola' ),
	'Confirmemail'              => array( 'Confirmă_email' ),
	'Contributions'             => array( 'Contribuții' ),
	'CreateAccount'             => array( 'Înregistrare' ),
	'Deadendpages'              => array( 'Pagini_fără_legături' ),
	'DeletedContributions'      => array( 'Contribuții_șterse' ),
	'DoubleRedirects'           => array( 'Redirectări_duble' ),
	'Emailuser'                 => array( 'Email_utilizator' ),
	'Export'                    => array( 'Exportă' ),
	'Fewestrevisions'           => array( 'Revizii_puține' ),
	'FileDuplicateSearch'       => array( 'Căutare_fișier_duplicat' ),
	'Filepath'                  => array( 'Cale_fișier' ),
	'Import'                    => array( 'Importă' ),
	'Invalidateemail'           => array( 'Invalidează_email' ),
	'BlockList'                 => array( 'Listă_IP_blocat' ),
	'LinkSearch'                => array( 'Căutare_legături' ),
	'Listadmins'                => array( 'Listă_administratori' ),
	'Listbots'                  => array( 'Listă_roboți' ),
	'Listfiles'                 => array( 'Listă_fișiere' ),
	'Listgrouprights'           => array( 'Listă_drepturi_grup' ),
	'Listredirects'             => array( 'Listă_redirectări' ),
	'Listusers'                 => array( 'Listă_utilizatori' ),
	'Lockdb'                    => array( 'Blochează_BD' ),
	'Log'                       => array( 'Jurnal', 'Jurnale' ),
	'Lonelypages'               => array( 'Pagini_orfane' ),
	'Longpages'                 => array( 'Pagini_lungi' ),
	'MergeHistory'              => array( 'Istoria_combinărilor' ),
	'MIMEsearch'                => array( 'Căutare_MIME' ),
	'Mostcategories'            => array( 'Categorii_multe' ),
	'Mostimages'                => array( 'Imagini_multe' ),
	'Mostlinked'                => array( 'Legături_multe' ),
	'Mostlinkedcategories'      => array( 'Categorii_des_folosite' ),
	'Mostlinkedtemplates'       => array( 'Formate_des_folosite' ),
	'Mostrevisions'             => array( 'Revizii_multe' ),
	'Movepage'                  => array( 'Mută_pagina' ),
	'Mycontributions'           => array( 'Contribuțiile_mele' ),
	'Mypage'                    => array( 'Pagina_mea' ),
	'Mytalk'                    => array( 'Discuțiile_mele' ),
	'Newimages'                 => array( 'Imagini_noi' ),
	'Newpages'                  => array( 'Pagini_noi' ),
	'PasswordReset'             => array( 'Resetare_parolă' ),
	'Popularpages'              => array( 'Pagini_populare' ),
	'Preferences'               => array( 'Preferințe' ),
	'Prefixindex'               => array( 'Index' ),
	'Protectedpages'            => array( 'Pagini_protejate' ),
	'Protectedtitles'           => array( 'Titluri_protejate' ),
	'Randompage'                => array( 'Aleatoriu', 'Pagină_aleatorie' ),
	'Randomredirect'            => array( 'Redirectare_aleatorie' ),
	'Recentchanges'             => array( 'Schimbări_recente' ),
	'Recentchangeslinked'       => array( 'Modificări_corelate' ),
	'Revisiondelete'            => array( 'Şterge_revizie' ),
	'Search'                    => array( 'Căutare' ),
	'Shortpages'                => array( 'Pagini_scurte' ),
	'Specialpages'              => array( 'Pagini_speciale' ),
	'Statistics'                => array( 'Statistici' ),
	'Tags'                      => array( 'Etichete' ),
	'Uncategorizedcategories'   => array( 'Categorii_necategorizate' ),
	'Uncategorizedimages'       => array( 'Imagini_necategorizate' ),
	'Uncategorizedpages'        => array( 'Pagini_necategorizate' ),
	'Uncategorizedtemplates'    => array( 'Formate_necategorizate' ),
	'Undelete'                  => array( 'Restaurează' ),
	'Unlockdb'                  => array( 'Deblochează_BD' ),
	'Unusedcategories'          => array( 'Categorii_nefolosite' ),
	'Unusedimages'              => array( 'Imagini_nefolosite' ),
	'Unusedtemplates'           => array( 'Formate_nefolosite' ),
	'Unwatchedpages'            => array( 'Pagini_neurmărite' ),
	'Upload'                    => array( 'Încărcare' ),
	'Userlogin'                 => array( 'Autentificare' ),
	'Userlogout'                => array( 'Ieșire' ),
	'Userrights'                => array( 'Drepturi_utilizator' ),
	'Version'                   => array( 'Versiune' ),
	'Wantedcategories'          => array( 'Categorii_dorite' ),
	'Wantedfiles'               => array( 'Fișiere_dorite' ),
	'Wantedpages'               => array( 'Pagini_dorite', 'Legături_invalide' ),
	'Wantedtemplates'           => array( 'Formate_dorite' ),
	'Watchlist'                 => array( 'Pagini_urmărite' ),
	'Whatlinkshere'             => array( 'Ce_se_leagă_aici' ),
	'Withoutinterwiki'          => array( 'Fără_legături_interwiki' ),
);

$datePreferences = false;
$defaultDateFormat = 'dmy';
$dateFormats = array(
	'dmy time' => 'H:i',
	'dmy date' => 'j F Y',
	'dmy both' => 'j F Y H:i',
);

$fallback8bitEncoding = 'iso8859-2';

$linkTrail = '/^([a-zăâîşţșțĂÂÎŞŢȘȚ]+)(.*)$/sDu';
