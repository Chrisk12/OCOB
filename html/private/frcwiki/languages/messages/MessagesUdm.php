<?php
/** Udmurt (удмурт)
 *
 * To improve a translation please visit https://translatewiki.net
 *
 * @ingroup Language
 * @file
 *
 * @author Andrewboltachev
 * @author Kaganer
 * @author Udmwiki
 * @author ОйЛ
 * @author לערי ריינהארט
 */

$fallback = 'ru';

$namespaceNames = array(
	NS_MEDIA            => 'Медиа',
	NS_SPECIAL          => 'Панель',
	NS_TALK             => 'Вераськон',
	NS_USER             => 'Викиавтор',
	NS_USER_TALK        => 'Викиавтор_сярысь_вераськон',
	NS_PROJECT_TALK     => '$1_сярысь_вераськон',
	NS_FILE             => 'Файл',
	NS_FILE_TALK        => 'Файл_сярысь_вераськон',
	NS_MEDIAWIKI        => 'MediaWiki',
	NS_MEDIAWIKI_TALK   => 'MediaWiki_сярысь_вераськон',
	NS_TEMPLATE         => 'Шаблон',
	NS_TEMPLATE_TALK    => 'Шаблон_сярысь_вераськон',
	NS_HELP             => 'Валэктон',
	NS_HELP_TALK        => 'Валэктон_сярысь_вераськон',
	NS_CATEGORY         => 'Категория',
	NS_CATEGORY_TALK    => 'Категория_сярысь_вераськон',
);

$namespaceAliases = array(
	'Суред'                  => NS_FILE,
	'Суред_сярысь_вераськон' => NS_FILE_TALK,
);

// Remove Russian aliases
$namespaceGenderAliases = array();

$linkTrail = '/^([a-zа-яёӝӟӥӧӵ“»]+)(.*)$/sDu';
$linkPrefixCharset = '„«';
$fallback8bitEncoding = 'windows-1251';
$separatorTransformTable = array( ',' => "\xc2\xa0", '.' => ',' );

