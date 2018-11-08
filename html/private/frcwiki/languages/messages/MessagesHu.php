<?php
/** Hungarian (magyar)
 *
 * To improve a translation please visit https://translatewiki.net
 *
 * @ingroup Language
 * @file
 *
 */

$namespaceNames = array(
	NS_MEDIA            => 'Média',
	NS_SPECIAL          => 'Speciális',
	NS_TALK             => 'Vita',
	NS_USER             => 'Szerkesztő',
	NS_USER_TALK        => 'Szerkesztővita',
	NS_PROJECT_TALK     => '$1-vita',
	NS_FILE             => 'Fájl',
	NS_FILE_TALK        => 'Fájlvita',
	NS_MEDIAWIKI        => 'MediaWiki',
	NS_MEDIAWIKI_TALK   => 'MediaWiki-vita',
	NS_TEMPLATE         => 'Sablon',
	NS_TEMPLATE_TALK    => 'Sablonvita',
	NS_HELP             => 'Segítség',
	NS_HELP_TALK        => 'Segítségvita',
	NS_CATEGORY         => 'Kategória',
	NS_CATEGORY_TALK    => 'Kategóriavita',
);

$namespaceAliases = array(
	'Kép' => NS_FILE,
	'Képvita' => NS_FILE_TALK,
	'User_vita'      => NS_USER_TALK,
	'$1_vita'        => NS_PROJECT_TALK,
	'Kép_vita'       => NS_FILE_TALK,
	'MediaWiki_vita' => NS_MEDIAWIKI_TALK,
	'Sablon_vita'    => NS_TEMPLATE_TALK,
	'Segítség_vita'  => NS_HELP_TALK,
	'Kategória_vita' => NS_CATEGORY_TALK,
);

$fallback8bitEncoding = "iso8859-2";
$separatorTransformTable = array( ',' => "\xc2\xa0", '.' => ',' );

$specialPageAliases = array(
	'Activeusers'               => array( 'Aktív_felhasználók', 'Aktív_szerkesztők' ),
	'Allmessages'               => array( 'Rendszerüzenetek' ),
	'Allpages'                  => array( 'Az_összes_lap_listája' ),
	'Ancientpages'              => array( 'Régóta_nem_változott_szócikkek' ),
	'Badtitle'                  => array( 'Hibás_címek' ),
	'Blankpage'                 => array( 'Üres_lap' ),
	'Block'                     => array( 'Blokkolás' ),
	'Booksources'               => array( 'Könyvforrások' ),
	'BrokenRedirects'           => array( 'Nem_létező_lapra_mutató_átirányítások', 'Hibás_átirányítások' ),
	'Categories'                => array( 'Kategóriák' ),
	'ChangePassword'            => array( 'Jelszócsere' ),
	'ComparePages'              => array( 'Lapok_összehasonlítása' ),
	'Confirmemail'              => array( 'Emailcím_megerősítése' ),
	'Contributions'             => array( 'Szerkesztő_közreműködései' ),
	'CreateAccount'             => array( 'Szerkesztői_fiók_létrehozása', 'Felhasználói_fiók_létrehozása' ),
	'Deadendpages'              => array( 'Zsákutcalapok' ),
	'DeletedContributions'      => array( 'Törölt_szerkesztések' ),
	'DoubleRedirects'           => array( 'Kettős_átirányítások', 'Dupla_átirányítások' ),
	'EditWatchlist'             => array( 'Figyelőlista_szerkesztése' ),
	'Emailuser'                 => array( 'E-mail_küldése', 'E-mail_küldése_ezen_szerkesztőnek' ),
	'ExpandTemplates'           => array( 'Sablonok_kibontása' ),
	'Export'                    => array( 'Lapok_exportálása' ),
	'Fewestrevisions'           => array( 'Legkevesebbet_szerkesztett_lapok' ),
	'FileDuplicateSearch'       => array( 'Duplikátumok_keresése' ),
	'Filepath'                  => array( 'Fájl_elérési_útja', 'Fájl_elérési_út' ),
	'Import'                    => array( 'Lapok_importálása' ),
	'Invalidateemail'           => array( 'E-mail_cím_érvénytelenítése' ),
	'BlockList'                 => array( 'Blokkolt_IP-címek_listája' ),
	'LinkSearch'                => array( 'Hivatkozás_keresés' ),
	'Listadmins'                => array( 'Adminisztrátorok', 'Adminisztrátorok_listája', 'Sysopok' ),
	'Listbots'                  => array( 'Botok', 'Botok_listája' ),
	'Listfiles'                 => array( 'Fájlok_listája', 'Képek_listája', 'Fájllista', 'Képlista' ),
	'Listgrouprights'           => array( 'Szerkesztői_csoportok_jogai' ),
	'Listredirects'             => array( 'Átirányítások_listája' ),
	'Listusers'                 => array( 'Szerkesztők_listája', 'Szerkesztők', 'Felhasználók' ),
	'Lockdb'                    => array( 'Adatbázis_lezárása' ),
	'Log'                       => array( 'Rendszernaplók', 'Naplók', 'Napló' ),
	'Lonelypages'               => array( 'Árva_lapok', 'Magányos_lapok' ),
	'Longpages'                 => array( 'Hosszú_lapok' ),
	'MergeHistory'              => array( 'Laptörténetek_egyesítése', 'Laptörténet-egyesítés' ),
	'MIMEsearch'                => array( 'Keresés_MIME-típus_alapján' ),
	'Mostcategories'            => array( 'Legtöbb_kategóriába_tartozó_lapok' ),
	'Mostimages'                => array( 'Legtöbbet_használt_fájlok', 'Legtöbbet_használt_képek' ),
	'Mostlinked'                => array( 'Legtöbbet_hivatkozott_lapok' ),
	'Mostlinkedcategories'      => array( 'Legtöbbet_hivatkozott_kategóriák' ),
	'Mostlinkedtemplates'       => array( 'Legtöbbet_hivatkozott_sablonok' ),
	'Mostrevisions'             => array( 'Legtöbbet_szerkesztett_lapok' ),
	'Movepage'                  => array( 'Lap_átnevezése' ),
	'Mycontributions'           => array( 'Közreműködéseim' ),
	'Mypage'                    => array( 'Lapom', 'Userlapom' ),
	'Mytalk'                    => array( 'Vitám', 'Vitalapom', 'Uservitalapom' ),
	'Myuploads'                 => array( 'Saját_feltöltéseim' ),
	'Newimages'                 => array( 'Új_fájlok', 'Új_képek', 'Új_képek_galériája' ),
	'Newpages'                  => array( 'Új_lapok' ),
	'PasswordReset'             => array( 'Jelszó_helyreállítása' ),
	'Popularpages'              => array( 'Népszerű_lapok', 'Népszerű_oldalak' ),
	'Preferences'               => array( 'Beállításaim' ),
	'Prefixindex'               => array( 'Keresés_előtag_szerint' ),
	'Protectedpages'            => array( 'Védett_lapok' ),
	'Protectedtitles'           => array( 'Védett_címek' ),
	'Randompage'                => array( 'Lap_találomra' ),
	'Randomredirect'            => array( 'Átirányítás_találomra' ),
	'Recentchanges'             => array( 'Friss_változtatások' ),
	'Recentchangeslinked'       => array( 'Kapcsolódó_változtatások' ),
	'Revisiondelete'            => array( 'Változat_törlése' ),
	'Search'                    => array( 'Keresés' ),
	'Shortpages'                => array( 'Rövid_lapok' ),
	'Specialpages'              => array( 'Speciális_lapok' ),
	'Statistics'                => array( 'Statisztika', 'Statisztikák' ),
	'Tags'                      => array( 'Címkék' ),
	'Unblock'                   => array( 'Blokkolás_feloldása' ),
	'Uncategorizedcategories'   => array( 'Kategorizálatlan_kategóriák' ),
	'Uncategorizedimages'       => array( 'Kategorizálatlan_fájlok', 'Kategorizálatlan_képek' ),
	'Uncategorizedpages'        => array( 'Kategorizálatlan_lapok' ),
	'Uncategorizedtemplates'    => array( 'Kategorizálatlan_sablonok' ),
	'Undelete'                  => array( 'Törölt_lapváltozatok_visszaállítása' ),
	'Unlockdb'                  => array( 'Adatbázis_lezárás_feloldása' ),
	'Unusedcategories'          => array( 'Nem_használt_kategóriák' ),
	'Unusedimages'              => array( 'Nem_használt_képek' ),
	'Unusedtemplates'           => array( 'Nem_használt_sablonok' ),
	'Unwatchedpages'            => array( 'Nem_figyelt_lapok' ),
	'Upload'                    => array( 'Feltöltés' ),
	'Userlogin'                 => array( 'Belépés' ),
	'Userlogout'                => array( 'Kilépés' ),
	'Userrights'                => array( 'Szerkesztők_jogai', 'Szerkesztői_jogok', 'Szerkesztőjogok', 'Szerkesztő_jogai' ),
	'Version'                   => array( 'Névjegy', 'Verziószám', 'Verzió' ),
	'Wantedcategories'          => array( 'Keresett_kategóriák' ),
	'Wantedfiles'               => array( 'Keresett_fájlok' ),
	'Wantedpages'               => array( 'Keresett_lapok' ),
	'Wantedtemplates'           => array( 'Keresett_sablonok' ),
	'Watchlist'                 => array( 'Figyelőlistám' ),
	'Whatlinkshere'             => array( 'Mi_hivatkozik_erre' ),
	'Withoutinterwiki'          => array( 'Nyelvközi_hivatkozás_nélküli_lapok', 'Wikiközi_hivatkozás_nélküli_lapok', 'Interwikilinkek_nélküli_lapok' ),
);

$datePreferences = array(
	'ymd',
	'ISO 8601',
);

$defaultDateFormat = 'ymd';

$dateFormats = array(
	'ymd time' => 'H:i',
	'ymd date' => 'Y. F j.',
	'ymd both' => 'Y. F j., H:i',

	'ISO 8601 time' => 'xnH:xni:xns',
	'ISO 8601 date' => 'xnY-xnm-xnd',
	'ISO 8601 both' => 'xnY-xnm-xnd"T"xnH:xni:xns',
);

$magicWords = array(
	'redirect'                  => array( '0', '#ÁTIRÁNYÍTÁS', '#REDIRECT' ),
	'notoc'                     => array( '0', '__NINCSTARTALOMJEGYZÉK__', '__NINCSTJ__', '__NOTOC__' ),
	'nogallery'                 => array( '0', '__NINCSGALÉRIA__', '__NOGALLERY__' ),
	'forcetoc'                  => array( '0', '__LEGYENTARTALOMJEGYZÉK__', '__LEGYENTJ__', '__FORCETOC__' ),
	'toc'                       => array( '0', '__TARTALOMJEGYZÉK__', '__TJ__', '__TOC__' ),
	'noeditsection'             => array( '0', '__NINCSSZERKESZTÉS__', '__NINCSSZERK__', '__NOEDITSECTION__' ),
	'currentmonth'              => array( '1', 'HÓNAP', 'CURRENTMONTH', 'CURRENTMONTH2' ),
	'currentmonth1'             => array( '1', 'HÓNAP1', 'CURRENTMONTH1' ),
	'currentmonthname'          => array( '1', 'HÓNAPNEVE', 'CURRENTMONTHNAME' ),
	'currentmonthabbrev'        => array( '1', 'HÓNAPRÖVID', 'CURRENTMONTHABBREV' ),
	'currentday'                => array( '1', 'MAINAP', 'CURRENTDAY' ),
	'currentday2'               => array( '1', 'MAINAP2', 'CURRENTDAY2' ),
	'currentdayname'            => array( '1', 'MAINAPNEVE', 'CURRENTDAYNAME' ),
	'currentyear'               => array( '1', 'ÉV', 'CURRENTYEAR' ),
	'currenttime'               => array( '1', 'IDŐ', 'CURRENTTIME' ),
	'currenthour'               => array( '1', 'ÓRA', 'CURRENTHOUR' ),
	'localmonth'                => array( '1', 'HELYIHÓNAP', 'LOCALMONTH', 'LOCALMONTH2' ),
	'localmonth1'               => array( '1', 'HELYIHÓNAP1', 'LOCALMONTH1' ),
	'localmonthname'            => array( '1', 'HELYIHÓNAPNÉV', 'LOCALMONTHNAME' ),
	'localmonthabbrev'          => array( '1', 'HELYIHÓNAPRÖVIDÍTÉS', 'LOCALMONTHABBREV' ),
	'localday'                  => array( '1', 'HELYINAP', 'LOCALDAY' ),
	'localday2'                 => array( '1', 'HELYINAP2', 'LOCALDAY2' ),
	'localdayname'              => array( '1', 'HELYINAPNEVE', 'LOCALDAYNAME' ),
	'localyear'                 => array( '1', 'HELYIÉV', 'LOCALYEAR' ),
	'localtime'                 => array( '1', 'HELYIIDŐ', 'LOCALTIME' ),
	'localhour'                 => array( '1', 'HELYIÓRA', 'LOCALHOUR' ),
	'numberofpages'             => array( '1', 'OLDALAKSZÁMA', 'LAPOKSZÁMA', 'NUMBEROFPAGES' ),
	'numberofarticles'          => array( '1', 'SZÓCIKKEKSZÁMA', 'NUMBEROFARTICLES' ),
	'numberoffiles'             => array( '1', 'FÁJLOKSZÁMA', 'KÉPEKSZÁMA', 'NUMBEROFFILES' ),
	'numberofusers'             => array( '1', 'SZERKESZTŐKSZÁMA', 'NUMBEROFUSERS' ),
	'numberofactiveusers'       => array( '1', 'AKTÍVSZERKESZTŐKSZÁMA', 'NUMBEROFACTIVEUSERS' ),
	'numberofedits'             => array( '1', 'SZERKESZTÉSEKSZÁMA', 'NUMBEROFEDITS' ),
	'numberofviews'             => array( '1', 'MEGTEKINTÉSEKSZÁMA', 'NUMBEROFVIEWS' ),
	'pagename'                  => array( '1', 'OLDALNEVE', 'PAGENAME' ),
	'pagenamee'                 => array( '1', 'OLDALNEVEE', 'PAGENAMEE' ),
	'namespace'                 => array( '1', 'NÉVTERE', 'NAMESPACE' ),
	'namespacee'                => array( '1', 'NÉVTEREE', 'NAMESPACEE' ),
	'talkspace'                 => array( '1', 'VITATERE', 'TALKSPACE' ),
	'talkspacee'                => array( '1', 'VITATEREE', 'TALKSPACEE' ),
	'subjectspace'              => array( '1', 'SZÓCIKKNÉVTERE', 'SUBJECTSPACE', 'ARTICLESPACE' ),
	'subjectspacee'             => array( '1', 'SZÓCIKKNÉVTEREE', 'SUBJECTSPACEE', 'ARTICLESPACEE' ),
	'fullpagename'              => array( '1', 'LAPTELJESNEVE', 'FULLPAGENAME' ),
	'fullpagenamee'             => array( '1', 'LAPTELJESNEVEE', 'FULLPAGENAMEE' ),
	'subpagename'               => array( '1', 'ALLAPNEVE', 'SUBPAGENAME' ),
	'subpagenamee'              => array( '1', 'ALLAPNEVEE', 'SUBPAGENAMEE' ),
	'basepagename'              => array( '1', 'ALAPLAPNEVE', 'BASEPAGENAME' ),
	'basepagenamee'             => array( '1', 'ALAPLAPNEVEE', 'BASEPAGENAMEE' ),
	'talkpagename'              => array( '1', 'VITALAPNEVE', 'TALKPAGENAME' ),
	'talkpagenamee'             => array( '1', 'VITALAPNEVEE', 'TALKPAGENAMEE' ),
	'subjectpagename'           => array( '1', 'SZÓCIKKNEVE', 'SUBJECTPAGENAME', 'ARTICLEPAGENAME' ),
	'subjectpagenamee'          => array( '1', 'SZÓCIKKNEVEE', 'SUBJECTPAGENAMEE', 'ARTICLEPAGENAMEE' ),
	'msg'                       => array( '0', 'ÜZENET:', 'ÜZ:', 'MSG:' ),
	'subst'                     => array( '0', 'BEILLESZT:', 'BEMÁSOL:', 'SUBST:' ),
	'img_thumbnail'             => array( '1', 'bélyegkép', 'bélyeg', 'miniatűr', 'thumbnail', 'thumb' ),
	'img_manualthumb'           => array( '1', 'bélyegkép=$1', 'bélyeg=$1', 'miniatűr=$1', 'thumbnail=$1', 'thumb=$1' ),
	'img_right'                 => array( '1', 'jobb', 'jobbra', 'right' ),
	'img_left'                  => array( '1', 'bal', 'balra', 'left' ),
	'img_none'                  => array( '1', 'semmi', 'none' ),
	'img_center'                => array( '1', 'közép', 'középre', 'center', 'centre' ),
	'img_framed'                => array( '1', 'keretezett', 'keretes', 'keretben', 'kerettel', 'framed', 'enframed', 'frame' ),
	'img_frameless'             => array( '1', 'keretnélküli', 'frameless' ),
	'img_page'                  => array( '1', 'oldal=$1', 'oldal $1', 'page=$1', 'page $1' ),
	'img_upright'               => array( '1', 'fennjobbra', 'fennjobbra=$1', 'fennjobbra $1', 'upright', 'upright=$1', 'upright $1' ),
	'img_border'                => array( '1', 'keret', 'border' ),
	'img_baseline'              => array( '1', 'alapvonal', 'baseline' ),
	'img_sub'                   => array( '1', 'ai', 'alsóindex', 'sub' ),
	'img_super'                 => array( '1', 'fi', 'felsőindex', 'super', 'sup' ),
	'img_top'                   => array( '1', 'fenn', 'fent', 'top' ),
	'img_text_top'              => array( '1', 'szöveg-fenn', 'szöveg-fent', 'text-top' ),
	'img_middle'                => array( '1', 'vközépen', 'vközépre', 'middle' ),
	'img_bottom'                => array( '1', 'lenn', 'lent', 'bottom' ),
	'img_text_bottom'           => array( '1', 'szöveg-lenn', 'szöveg-lent', 'text-bottom' ),
	'sitename'                  => array( '1', 'WIKINEVE', 'SITENAME' ),
	'ns'                        => array( '0', 'NÉVTÉR:', 'NS:' ),
	'localurl'                  => array( '0', 'HELYIURL:', 'LOCALURL:' ),
	'localurle'                 => array( '0', 'HELYIURLE:', 'LOCALURLE:' ),
	'server'                    => array( '0', 'SZERVER', 'KISZOLGÁLÓ', 'SERVER' ),
	'servername'                => array( '0', 'SZERVERNEVE', 'KISZOLGÁLÓNEVE', 'SERVERNAME' ),
	'grammar'                   => array( '0', 'NYELVTAN:', 'GRAMMAR:' ),
	'currentweek'               => array( '1', 'HÉT', 'CURRENTWEEK' ),
	'currentdow'                => array( '1', 'HÉTNAPJA', 'CURRENTDOW' ),
	'localweek'                 => array( '1', 'HELYIHÉT', 'LOCALWEEK' ),
	'localdow'                  => array( '1', 'HELYIHÉTNAPJA', 'LOCALDOW' ),
	'revisionid'                => array( '1', 'VÁLTOZATAZON', 'VÁLTOZATAZONOSÍTÓ', 'REVISIONID' ),
	'revisionday'               => array( '1', 'VÁLTOZATNAPJA', 'REVISIONDAY' ),
	'revisionday2'              => array( '1', 'VÁLTOZATNAPJA2', 'REVISIONDAY2' ),
	'revisionmonth'             => array( '1', 'VÁLTOZATHÓNAPJA', 'REVISIONMONTH' ),
	'revisionyear'              => array( '1', 'VÁLTOZATÉVE', 'REVISIONYEAR' ),
	'revisiontimestamp'         => array( '1', 'VÁLTOZATIDŐBÉLYEG', 'VÁLTOZATIDEJE', 'REVISIONTIMESTAMP' ),
	'revisionuser'              => array( '1', 'VÁLTOZATSZERKESZTŐJE', 'REVISIONUSER' ),
	'plural'                    => array( '0', 'TÖBBESSZÁM:', 'PLURAL:' ),
	'fullurl'                   => array( '0', 'TELJESURL:', 'FULLURL:' ),
	'fullurle'                  => array( '0', 'TELJESURLE:', 'FULLURLE:' ),
	'lcfirst'                   => array( '0', 'KISKEZDŐ:', 'KISKEZDŐBETŰ:', 'LCFIRST:' ),
	'ucfirst'                   => array( '0', 'NAGYKEZDŐ:', 'NAGYKEZDŐBETŰ:', 'UCFIRST:' ),
	'lc'                        => array( '0', 'KISBETŰ:', 'KISBETŰK:', 'KB:', 'KISBETŰS:', 'LC:' ),
	'uc'                        => array( '0', 'NAGYBETŰ:', 'NAGYBETŰK', 'NB:', 'NAGYBETŰS:', 'UC:' ),
	'displaytitle'              => array( '1', 'MEGJELENÍTENDŐCÍM', 'CÍM', 'DISPLAYTITLE' ),
	'newsectionlink'            => array( '1', '__ÚJSZAKASZHIV__', '__ÚJSZAKASZLINK__', '__NEWSECTIONLINK__' ),
	'nonewsectionlink'          => array( '1', '__NINCSÚJSZAKASZHIV__', '__NINCSÚJSZAKASZLINK__', '__NONEWSECTIONLINK__' ),
	'currentversion'            => array( '1', 'JELENLEGIVÁLTOZAT', 'CURRENTVERSION' ),
	'urlencode'                 => array( '0', 'URLKÓDOLVA:', 'URLENCODE:' ),
	'anchorencode'              => array( '0', 'HORGONYKÓDOLVA', 'ANCHORENCODE' ),
	'currenttimestamp'          => array( '1', 'IDŐBÉLYEG', 'CURRENTTIMESTAMP' ),
	'localtimestamp'            => array( '1', 'HELYIIDŐBÉLYEG', 'LOCALTIMESTAMP' ),
	'directionmark'             => array( '1', 'IRÁNYJELZŐ', 'DIRECTIONMARK', 'DIRMARK' ),
	'language'                  => array( '0', '#NYELV:', '#LANGUAGE:' ),
	'contentlanguage'           => array( '1', 'TARTALOMNYELVE', 'TARTNYELVE', 'CONTENTLANGUAGE', 'CONTENTLANG' ),
	'pagesinnamespace'          => array( '1', 'OLDALAKNÉVTÉRBEN:', 'OLDALAKNBEN:', 'PAGESINNAMESPACE:', 'PAGESINNS:' ),
	'numberofadmins'            => array( '1', 'ADMINOKSZÁMA', 'NUMBEROFADMINS' ),
	'formatnum'                 => array( '0', 'FORMÁZOTTSZÁM', 'SZÁMFORMÁZÁS', 'SZÁMFORM', 'FORMATNUM' ),
	'special'                   => array( '0', 'speciális', 'special' ),
	'defaultsort'               => array( '1', 'RENDEZÉS:', 'KULCS:', 'DEFAULTSORT:', 'DEFAULTSORTKEY:', 'DEFAULTCATEGORYSORT:' ),
	'filepath'                  => array( '0', 'ELÉRÉSIÚT:', 'FILEPATH:' ),
	'hiddencat'                 => array( '1', '__REJTETTKAT__', '__REJTETTKATEGÓRIA__', '__HIDDENCAT__' ),
	'pagesincategory'           => array( '1', 'LAPOKAKATEGÓRIÁBAN', 'PAGESINCATEGORY', 'PAGESINCAT' ),
	'pagesize'                  => array( '1', 'LAPMÉRET', 'PAGESIZE' ),
	'noindex'                   => array( '1', '__NINCSINDEX__', '__NOINDEX__' ),
	'numberingroup'             => array( '1', 'CSOPORTTAGOK', 'NUMBERINGROUP', 'NUMINGROUP' ),
	'staticredirect'            => array( '1', '__ÁLLANDÓÁTIRÁNYÍTÁS__', '__STATIKUSÁTIRÁNYÍTÁS__', '__STATICREDIRECT__' ),
	'protectionlevel'           => array( '1', 'VÉDELMISZINT', 'PROTECTIONLEVEL' ),
	'formatdate'                => array( '0', 'dátumformázás', 'formatdate', 'dateformat' ),
);

$linkTrail = '/^([a-záéíóúöüőűÁÉÍÓÚÖÜŐŰ]+)(.*)$/sDu';

