<?php
/** Indonesian (Bahasa Indonesia)
 *
 * See MessagesQqq.php for message documentation incl. usage of parameters
 * To improve a translation please visit http://translatewiki.net
 *
 * @ingroup Language
 * @file
 *
 */

$separatorTransformTable = array( ',' => '.', '.' => ',' );

$namespaceNames = array(
	NS_MEDIA            => 'Media',
	NS_SPECIAL          => 'Istimewa',
	NS_TALK             => 'Pembicaraan',
	NS_USER             => 'Pengguna',
	NS_USER_TALK        => 'Pembicaraan_Pengguna',
	NS_PROJECT_TALK     => 'Pembicaraan_$1',
	NS_FILE             => 'Berkas',
	NS_FILE_TALK        => 'Pembicaraan_Berkas',
	NS_MEDIAWIKI        => 'MediaWiki',
	NS_MEDIAWIKI_TALK   => 'Pembicaraan_MediaWiki',
	NS_TEMPLATE         => 'Templat',
	NS_TEMPLATE_TALK    => 'Pembicaraan_Templat',
	NS_HELP             => 'Bantuan',
	NS_HELP_TALK        => 'Pembicaraan_Bantuan',
	NS_CATEGORY         => 'Kategori',
	NS_CATEGORY_TALK    => 'Pembicaraan_Kategori',
);

$namespaceAliases = array(
	'Gambar_Pembicaraan'    => NS_FILE_TALK,
	'MediaWiki_Pembicaraan' => NS_MEDIAWIKI_TALK,
	'Templat_Pembicaraan'   => NS_TEMPLATE_TALK,
	'Bantuan_Pembicaraan'   => NS_HELP_TALK,
	'Kategori_Pembicaraan'  => NS_CATEGORY_TALK,
	'Gambar'                => NS_FILE,
	'Pembicaraan_Gambar'    => NS_FILE_TALK,
	'Bicara'                => NS_TALK,
	'Bicara_Pengguna'       => NS_USER_TALK,
);

$bookstoreList = array(
	'AddALL' => 'http://www.addall.com/New/Partner.cgi?query=$1&type=ISBN',
	'Amazon.com' => 'http://www.amazon.com/exec/obidos/ISBN=$1',
	'Barnes & Noble' => 'http://search.barnesandnoble.com/bookSearch/isbnInquiry.asp?isbn=$1',
	'Bhinneka.com bookstore' => 'http://www.bhinneka.com/Buku/Engine/search.asp?fisbn=$1',
	'Gramedia Cyberstore (via Google)' => 'http://www.google.com/search?q=%22ISBN+:+$1%22+%22product_detail%22+site:www.gramediacyberstore.com+OR+site:www.gramediaonline.com+OR+site:www.kompas.com&hl=id',
	'PriceSCAN' => 'http://www.pricescan.com/books/bookDetail.asp?isbn=$1',
);

$magicWords = array(
	'redirect'                  => array( '0', '#ALIH', '#REDIRECT' ),
	'notoc'                     => array( '0', '__TANPADAFTARISI__', '__NIRDASI__', '__NOTOC__' ),
	'nogallery'                 => array( '0', '__TANPAGALERI__', '__NIRGAL__', '__NOGALLERY__' ),
	'forcetoc'                  => array( '0', '__PAKSADAFTARISI__', '__PAKSADASI__', '__FORCETOC__' ),
	'toc'                       => array( '0', '__DAFTARISI__', '__DASI__', '__TOC__' ),
	'noeditsection'             => array( '0', '__TANPASUNTINGANBAGIAN__', '__NIRSUBA__', '__NOEDITSECTION__' ),
	'currentmonth'              => array( '1', 'BULANKINI', 'BULANKINI2', 'BUKIN', 'BUKIN2', 'CURRENTMONTH', 'CURRENTMONTH2' ),
	'currentmonth1'             => array( '1', 'BULANKINI1', 'BUKIN1', 'CURRENTMONTH1' ),
	'currentmonthname'          => array( '1', 'NAMABULANKINI', 'NAMBUKIN', 'CURRENTMONTHNAME' ),
	'currentmonthnamegen'       => array( '1', 'NAMAJENDERBULANKINI', 'NAMJENBUKIN', 'CURRENTMONTHNAMEGEN' ),
	'currentmonthabbrev'        => array( '1', 'NAMASINGKATBULANKINI', 'BULANINISINGKAT', 'NAMSINGBUKIN', 'CURRENTMONTHABBREV' ),
	'currentday'                => array( '1', 'HARIKINI', 'HARKIN', 'CURRENTDAY' ),
	'currentday2'               => array( '1', 'HARIKINI2', 'HARKIN2', 'CURRENTDAY2' ),
	'currentdayname'            => array( '1', 'NAMAHARIKINI', 'NAMHARKIN', 'CURRENTDAYNAME' ),
	'currentyear'               => array( '1', 'TAHUNKINI', 'TAKIN', 'CURRENTYEAR' ),
	'currenttime'               => array( '1', 'WAKTUKINI', 'WAKIN', 'CURRENTTIME' ),
	'currenthour'               => array( '1', 'JAMKINI', 'JAKIN', 'CURRENTHOUR' ),
	'localmonth'                => array( '1', 'BULANLOKAL', 'BULANLOKAL2', 'BULOK', 'BULOK2', 'LOCALMONTH', 'LOCALMONTH2' ),
	'localmonth1'               => array( '1', 'BULANLOKAL1', 'BULOK1', 'LOCALMONTH1' ),
	'localmonthname'            => array( '1', 'NAMABULANLOKAL', 'NAMBULOK', 'LOCALMONTHNAME' ),
	'localmonthnamegen'         => array( '1', 'NAMAJENDERBULANLOKAL', 'NAMJENBULOK', 'LOCALMONTHNAMEGEN' ),
	'localmonthabbrev'          => array( '1', 'NAMASINGKATBULANLOKAL', 'NAMSINGBULOK', 'LOCALMONTHABBREV' ),
	'localday'                  => array( '1', 'HARILOKAL', 'HALOK', 'LOCALDAY' ),
	'localday2'                 => array( '1', 'HARILOKAL2', 'HALOK2', 'LOCALDAY2' ),
	'localdayname'              => array( '1', 'NAMAHARILOKAL', 'NAMHALOK', 'LOCALDAYNAME' ),
	'localyear'                 => array( '1', 'TAHUNLOKAL', 'TALOK', 'LOCALYEAR' ),
	'localtime'                 => array( '1', 'WAKTULOKAL', 'WALOK', 'LOCALTIME' ),
	'localhour'                 => array( '1', 'JAMLOKAL', 'JALOK', 'LOCALHOUR' ),
	'numberofpages'             => array( '1', 'JUMLAHHALAMAN', 'JUMMAN', 'NUMBEROFPAGES' ),
	'numberofarticles'          => array( '1', 'JUMLAHARTIKEL', 'JUMKEL', 'NUMBEROFARTICLES' ),
	'numberoffiles'             => array( '1', 'JUMLAHBERKAS', 'JUMKAS', 'NUMBEROFFILES' ),
	'numberofusers'             => array( '1', 'JUMLAHPENGGUNA', 'JUMPENG', 'NUMBEROFUSERS' ),
	'numberofactiveusers'       => array( '1', 'JUMLAHPENGGUNAAKTIF', 'JUMPENGTIF', 'NUMBEROFACTIVEUSERS' ),
	'numberofedits'             => array( '1', 'JUMLAHSUNTINGAN', 'JUMTING', 'NUMBEROFEDITS' ),
	'numberofviews'             => array( '1', 'JUMLAHTAMPILAN', 'JUMTAM', 'NUMBEROFVIEWS' ),
	'pagename'                  => array( '1', 'NAMAHALAMAN', 'NAMMAN', 'PAGENAME' ),
	'pagenamee'                 => array( '1', 'NAMAHALAMANE', 'NAMMANE', 'PAGENAMEE' ),
	'namespace'                 => array( '1', 'RUANGNAMA', 'RUNAM', 'NAMESPACE' ),
	'namespacee'                => array( '1', 'RUANGNAMAE', 'RUNAME', 'NAMESPACEE' ),
	'talkspace'                 => array( '1', 'RUANGBICARA', 'RUBIR', 'TALKSPACE' ),
	'talkspacee'                => array( '1', 'RUANGBICARAE', 'RUBIRE', 'TALKSPACEE' ),
	'subjectspace'              => array( '1', 'RUANGUTAMA', 'RUANGARTIKEL', 'RUTAMA', 'RUTIKEL', 'SUBJECTSPACE', 'ARTICLESPACE' ),
	'subjectspacee'             => array( '1', 'RUANGUTAMAE', 'RUANGARTIKELE', 'RUTAMAE', 'RUKELE', 'SUBJECTSPACEE', 'ARTICLESPACEE' ),
	'fullpagename'              => array( '1', 'NAMAHALAMANLENGKAP', 'NAMALENGKAPHALAMAN', 'NAMMANKAP', 'FULLPAGENAME' ),
	'fullpagenamee'             => array( '1', 'AMAHALAMANLENGKAPE', 'NAMALENGKAPHALAMANE', 'NAMMANKAPE', 'FULLPAGENAMEE' ),
	'subpagename'               => array( '1', 'NAMASUBHALAMAN', 'NAMAUPAHALAMAN', 'NAMUMAN', 'SUBPAGENAME' ),
	'subpagenamee'              => array( '1', 'NAMASUBHALAMANE', 'NAMAUPAHALAMANE', 'NAMUMANE', 'SUBPAGENAMEE' ),
	'basepagename'              => array( '1', 'NAMAHALAMANDASAR', 'NAMADASARHALAMAN', 'NAMMANSAR', 'BASEPAGENAME' ),
	'basepagenamee'             => array( '1', 'NAMAHALAMANDASARE', 'NAMADASARHALAMANE', 'NAMMANSARE', 'BASEPAGENAMEE' ),
	'talkpagename'              => array( '1', 'NAMAHALAMANBICARA', 'NAMMANBIR', 'TALKPAGENAME' ),
	'talkpagenamee'             => array( '1', 'NAMAHALAMANBICARAE', 'NAMMANBIRE', 'TALKPAGENAMEE' ),
	'subjectpagename'           => array( '1', 'NAMAHALAMANUTAMA', 'NAMAHALAMANARTIKEL', 'NAMMANTAMA', 'NAMMANTIKEL', 'SUBJECTPAGENAME', 'ARTICLEPAGENAME' ),
	'subjectpagenamee'          => array( '1', 'NAMAHALAMANUTAMAE', 'NAMAHALAMANARTIKELE', 'NAMMANTAMAE', 'NAMMANTIKELE', 'SUBJECTPAGENAMEE', 'ARTICLEPAGENAMEE' ),
	'msg'                       => array( '0', 'PSN:', 'PESAN:', 'MSG:' ),
	'subst'                     => array( '0', 'GNT:', 'GANTI:', 'TUKAR:', 'SUBST:' ),
	'msgnw'                     => array( '0', 'TPL:', 'MSGNW:' ),
	'img_thumbnail'             => array( '1', 'jmpl', 'jempol', 'mini', 'miniatur', 'thumbnail', 'thumb' ),
	'img_manualthumb'           => array( '1', 'jmpl=$1', 'jempol=$1', 'mini=$1', 'miniatur=$1', 'thumbnail=$1', 'thumb=$1' ),
	'img_right'                 => array( '1', 'ka', 'kanan', 'right' ),
	'img_left'                  => array( '1', 'ki', 'kiri', 'left' ),
	'img_none'                  => array( '1', 'nir', 'tanpa', 'none' ),
	'img_center'                => array( '1', 'pus', 'pusat', 'center', 'centre' ),
	'img_framed'                => array( '1', 'bing', 'bingkai', 'framed', 'enframed', 'frame' ),
	'img_frameless'             => array( '1', 'nirbing', 'tanpabingkai', 'frameless' ),
	'img_lang'                  => array( '1', 'bhs=$1', 'lang=$1' ),
	'img_page'                  => array( '1', 'hal=$1', 'halaman=$1', 'hal_$1', 'halaman_$1', 'page=$1', 'page $1' ),
	'img_upright'               => array( '1', 'lurus', 'lurus=$1', 'lurus_$1', 'tegak', 'tegak=$1', 'tegak_$1', 'upright', 'upright=$1', 'upright $1' ),
	'img_border'                => array( '1', 'tepi', 'batas', 'border' ),
	'img_baseline'              => array( '1', 'gada', 'garis_dasar', 'baseline' ),
	'img_sub'                   => array( '1', 'upa', 'sub' ),
	'img_top'                   => array( '1', 'atas', 'top' ),
	'img_text_top'              => array( '1', 'atek', 'atas-teks', 'text-top' ),
	'img_middle'                => array( '1', 'tengah', 'middle' ),
	'img_bottom'                => array( '1', 'bawah', 'bottom' ),
	'img_text_bottom'           => array( '1', 'batek', 'bawah-teks', 'text-bottom' ),
	'img_link'                  => array( '1', 'pra=$1', 'pranala=$1', 'link=$1' ),
	'img_alt'                   => array( '1', 'al=$1', 'alternatif=$1', 'alt=$1' ),
	'sitename'                  => array( '1', 'NAMASITUS', 'NAMSIT', 'SITENAME' ),
	'ns'                        => array( '0', 'RN:', 'RUNAM:', 'NS:' ),
	'localurl'                  => array( '0', 'URLLOKAL', 'LOCALURL:' ),
	'localurle'                 => array( '0', 'URLLOKALE', 'LOCALURLE:' ),
	'server'                    => array( '0', 'PELADEN', 'SERVER' ),
	'servername'                => array( '0', 'NAMAPELADEN', 'NAMASERVER', 'NAMPEL', 'SERVERNAME' ),
	'scriptpath'                => array( '0', 'LOKASISKRIP', 'SCRIPTPATH' ),
	'grammar'                   => array( '0', 'TATABAHASA:', 'TASA:', 'GRAMMAR:' ),
	'gender'                    => array( '0', 'JANTINA:', 'GENDER:' ),
	'notitleconvert'            => array( '0', '__TANPAKONVERSIJUDUL__', '__NIRKODUL__', '__NOTITLECONVERT__', '__NOTC__' ),
	'nocontentconvert'          => array( '0', '__TANPAKONVERSIISI__', '__NIRKOSI__', '__NOCONTENTCONVERT__', '__NOCC__' ),
	'currentweek'               => array( '1', 'MINGGUKINI', 'MIKIN', 'CURRENTWEEK' ),
	'currentdow'                => array( '1', 'HARIDALAMMINGGU', 'HADAMI', 'CURRENTDOW' ),
	'localweek'                 => array( '1', 'MINGGULOKAL', 'MIKAL', 'LOCALWEEK' ),
	'localdow'                  => array( '1', 'HARIDALAMMINGGULOKAL', 'HADAMIKAL', 'LOCALDOW' ),
	'revisionid'                => array( '1', 'IDREVISI', 'IREV', 'REVISIONID' ),
	'revisionday'               => array( '1', 'HARIREVISI', 'HAREV', 'REVISIONDAY' ),
	'revisionday2'              => array( '1', 'HARIREVISI2', 'HAREV2', 'REVISIONDAY2' ),
	'revisionmonth'             => array( '1', 'BULANREVISI', 'BUREV', 'REVISIONMONTH' ),
	'revisionmonth1'            => array( '1', 'BULANREVISI1', 'REVISIONMONTH1' ),
	'revisionyear'              => array( '1', 'TAHUNREVISI', 'TAREV', 'REVISIONYEAR' ),
	'revisiontimestamp'         => array( '1', 'STEMPELWAKTUREVISI', 'REKAMWAKTUREVISI', 'REVISIONTIMESTAMP' ),
	'revisionuser'              => array( '1', 'PENGGUNAREVISI', 'REVISIONUSER' ),
	'plural'                    => array( '0', 'JAMAK:', 'PLURAL:' ),
	'fullurl'                   => array( '0', 'URLLENGKAP:', 'FULLURL:' ),
	'fullurle'                  => array( '0', 'URLLENGKAPE', 'FULLURLE:' ),
	'lcfirst'                   => array( '0', 'AKC:', 'AWALKECIL:', 'LCFIRST:' ),
	'ucfirst'                   => array( '0', 'ABS:', 'AWALBESAR:', 'UCFIRST:' ),
	'lc'                        => array( '0', 'KC:', 'KECIL:', 'HURUFKECIL:', 'LC:' ),
	'uc'                        => array( '0', 'BS:', 'BESAR:', 'HURUFBESAR:', 'UC:' ),
	'raw'                       => array( '0', 'MENTAH:', 'RAW:' ),
	'displaytitle'              => array( '1', 'JUDULTAMPILAN', 'JUTAM', 'DISPLAYTITLE' ),
	'rawsuffix'                 => array( '1', 'M', 'R' ),
	'newsectionlink'            => array( '1', '__PRANALABAGIANBARU__', '__PRABABA__', '__NEWSECTIONLINK__' ),
	'nonewsectionlink'          => array( '1', '_TANPAPRANALABAGIANBARU__', '__NIRPRABABA__', '__NONEWSECTIONLINK__' ),
	'currentversion'            => array( '1', 'VERSIKINI', 'VERKIN', 'CURRENTVERSION' ),
	'urlencode'                 => array( '0', 'KODEURL:', 'KODU:', 'URLENCODE:' ),
	'anchorencode'              => array( '0', 'KODEJANGKAR', 'KOJANG', 'ANCHORENCODE' ),
	'currenttimestamp'          => array( '1', 'STEMPELWAKTUKINI', 'STEMWAKIN', 'CURRENTTIMESTAMP' ),
	'localtimestamp'            => array( '1', 'STEMPELWAKTULOKAL', 'STEMWAKAL', 'LOCALTIMESTAMP' ),
	'directionmark'             => array( '1', 'MARKAARAH', 'MARRAH', 'DIRECTIONMARK', 'DIRMARK' ),
	'language'                  => array( '0', '#BAHASA:', '#BHS:', '#LANGUAGE:' ),
	'contentlanguage'           => array( '1', 'BAHASAISI', 'BHSISI', 'BASI', 'CONTENTLANGUAGE', 'CONTENTLANG' ),
	'pagesinnamespace'          => array( '1', 'HALAMANDIRUANGNAMA:', 'HALDIRN', 'PAGESINNAMESPACE:', 'PAGESINNS:' ),
	'numberofadmins'            => array( '1', 'JUMLAHADMIN', 'JUMLAHPENGURUS', 'JUMAD', 'JURUS', 'NUMBEROFADMINS' ),
	'formatnum'                 => array( '0', 'FORMATANGKA', 'FORANG', 'FORMATNUM' ),
	'padleft'                   => array( '0', 'ISIKIRI', 'IKI', 'PADLEFT' ),
	'padright'                  => array( '0', 'ISIKANAN', 'IKA', 'PADRIGHT' ),
	'special'                   => array( '0', 'istimewa', 'spesial', 'special' ),
	'defaultsort'               => array( '1', 'URUTANBAKU:', 'UBUR:', 'DEFAULTSORT:', 'DEFAULTSORTKEY:', 'DEFAULTCATEGORYSORT:' ),
	'filepath'                  => array( '0', 'LOKASIBERKAS:', 'LOBER:', 'FILEPATH:' ),
	'tag'                       => array( '0', 'kata_kunci', 'takun', 'tag' ),
	'hiddencat'                 => array( '1', '__KATEGORITERSEMBUNYI__', '__KATSEM__', '__HIDDENCAT__' ),
	'pagesincategory'           => array( '1', 'HALAMANDIKATEGORI', 'HALDIKAT', 'PAGESINCATEGORY', 'PAGESINCAT' ),
	'pagesize'                  => array( '1', 'BESARHALAMAN', 'BESMAN', 'PAGESIZE' ),
	'index'                     => array( '1', '__INDEKS__', '__INDEX__' ),
	'noindex'                   => array( '1', '__TANPAINDEKS__', '__NIRDEKS__', '__NOINDEX__' ),
	'numberingroup'             => array( '1', 'JUMLAHDIKELOMPOK', 'JULDIPOK', 'NUMBERINGROUP', 'NUMINGROUP' ),
	'staticredirect'            => array( '1', '__PENGALIHANSTATIK__', '__PENGALIHANSTATIS__', '__PETIK__', '__PETIS__', '__STATICREDIRECT__' ),
	'protectionlevel'           => array( '1', 'TINGKATPERLINDUNGAN', 'TIPER', 'PROTECTIONLEVEL' ),
	'formatdate'                => array( '0', 'formattanggal', 'formatdate', 'dateformat' ),
	'pagesincategory_all'       => array( '0', 'semua', 'all' ),
	'pagesincategory_pages'     => array( '0', 'halaman', 'pages' ),
	'pagesincategory_files'     => array( '0', 'berkas', 'files' ),
);

$specialPageAliases = array(
	'Activeusers'               => array( 'Pengguna_aktif', 'PenggunaAktif' ),
	'Allmessages'               => array( 'Pesan_sistem', 'PesanSistem' ),
	'Allpages'                  => array( 'Daftar_halaman', 'DaftarHalaman' ),
	'Ancientpages'              => array( 'Halaman_lama', 'HalamanLama' ),
	'Badtitle'                  => array( 'Judul_yang_buruk' ),
	'Blankpage'                 => array( 'Halaman_kosong', 'HalamanKosong' ),
	'Block'                     => array( 'Blokir_pengguna', 'BlokirPengguna' ),
	'Booksources'               => array( 'Sumber_buku', 'SumberBuku' ),
	'BrokenRedirects'           => array( 'Pengalihan_rusak', 'PengalihanRusak' ),
	'Categories'                => array( 'Daftar_kategori', 'DaftarKategori', 'Kategori' ),
	'ChangeEmail'               => array( 'Ganti_surel', 'GantiSurel' ),
	'ChangePassword'            => array( 'Ganti_sandi', 'GantiSandi' ),
	'ComparePages'              => array( 'Bandingkan_halaman', 'BandingkanHalaman' ),
	'Confirmemail'              => array( 'Konfirmasi_surel', 'KonfirmasiSurel' ),
	'Contributions'             => array( 'Kontribusi_pengguna', 'KontribusiPengguna', 'Kontribusi' ),
	'CreateAccount'             => array( 'Buat_akun', 'BuatAkun' ),
	'Deadendpages'              => array( 'Halaman_buntu', 'HalamanBuntu' ),
	'DeletedContributions'      => array( 'Kontribusi_yang_dihapus', 'KontribusiDihapus' ),
	'DoubleRedirects'           => array( 'Pengalihan_ganda', 'PengalihanGanda' ),
	'EditWatchlist'             => array( 'Sunting_daftar_pantauan' ),
	'Emailuser'                 => array( 'Surel_pengguna', 'SurelPengguna' ),
	'ExpandTemplates'           => array( 'Kembangkan_templat', 'KembangkanTemplat' ),
	'Export'                    => array( 'Ekspor_halaman', 'Ekspor' ),
	'Fewestrevisions'           => array( 'Perubahan_tersedikit', 'PerubahanTersedikit' ),
	'FileDuplicateSearch'       => array( 'Pencarian_berkas_duplikat', 'PencarianBerkasDuplikat' ),
	'Filepath'                  => array( 'Lokasi_berkas', 'Lokasi_arsip', 'LokasiArsip' ),
	'Import'                    => array( 'Impor_halaman', 'Impor' ),
	'Invalidateemail'           => array( 'Batalkan_validasi_surel', 'BatalkanValidasiSurel' ),
	'BlockList'                 => array( 'Daftar_pemblokiran', 'DaftarPemblokiran' ),
	'LinkSearch'                => array( 'Pranala_luar', 'PranalaLuar', 'Pencarian_pranala', 'PencarianPranala' ),
	'Listadmins'                => array( 'Daftar_pengurus', 'DaftarPengurus' ),
	'Listbots'                  => array( 'Daftar_bot', 'DaftarBot' ),
	'Listfiles'                 => array( 'Daftar_berkas', 'DaftarBerkas' ),
	'Listgrouprights'           => array( 'Daftar_hak_kelompok', 'DaftarHakKelompok', 'DaftarHak' ),
	'Listredirects'             => array( 'Daftar_pengalihan', 'DaftarPengalihan' ),
	'Listusers'                 => array( 'Daftar_pengguna', 'DaftarPengguna' ),
	'Lockdb'                    => array( 'Kunci_basis_data', 'KunciBasisData' ),
	'Log'                       => array( 'Catatan' ),
	'Lonelypages'               => array( 'Halaman_yatim', 'Halaman_tak_bertuan', 'HalamanYatim', 'HalamanTakBertuan' ),
	'Longpages'                 => array( 'Halaman_panjang', 'HalamanPanjang' ),
	'MergeHistory'              => array( 'Riwayat_penggabungan', 'RiwayatPenggabungan' ),
	'MIMEsearch'                => array( 'Pencarian_MIME', 'PencarianMIME' ),
	'Mostcategories'            => array( 'Kategori_terbanyak', 'KategoriTerbanyak' ),
	'Mostimages'                => array( 'Berkas_paling_digunakan', 'BerkasPalingDigunakan' ),
	'Mostinterwikis'            => array( 'Interwiki_terbanyak', 'InterwikiTerbanyak' ),
	'Mostlinked'                => array( 'Halaman_paling_digunakan', 'HalamanPalingDigunakan' ),
	'Mostlinkedcategories'      => array( 'Kategori_paling_digunakan', 'KategoriPalingDigunakan' ),
	'Mostlinkedtemplates'       => array( 'Templat_paling_digunakan', 'TemplatPalingDigunakan' ),
	'Mostrevisions'             => array( 'Perubahan_terbanyak', 'PerubahanTerbanyak' ),
	'Movepage'                  => array( 'Pindahkan_halaman', 'PindahkanHalaman' ),
	'Mycontributions'           => array( 'Kontribusi_saya', 'KontribusiSaya' ),
	'Mypage'                    => array( 'Halaman_saya', 'HalamanSaya' ),
	'Mytalk'                    => array( 'Pembicaraan_saya', 'PembicaraanSaya' ),
	'Myuploads'                 => array( 'Unggahan_saya' ),
	'Newimages'                 => array( 'Berkas_baru', 'BerkasBaru' ),
	'Newpages'                  => array( 'Halaman_baru', 'HalamanBaru' ),
	'PasswordReset'             => array( 'Reset_sandi', 'ResetSandi' ),
	'PermanentLink'             => array( 'Pranala_permanen' ),
	'Popularpages'              => array( 'Halaman_populer', 'HalamanPopuler' ),
	'Preferences'               => array( 'Preferensi' ),
	'Prefixindex'               => array( 'Indeks_awalan', 'IndeksAwalan' ),
	'Protectedpages'            => array( 'Halaman_yang_dilindungi', 'HalamanDilindungi' ),
	'Protectedtitles'           => array( 'Judul_yang_dilindungi', 'JudulDilindungi' ),
	'Randompage'                => array( 'Halaman_sembarang', 'HalamanSembarang' ),
	'RandomInCategory'          => array( 'Sembarang_di_kategori', 'SembarangDiKategori' ),
	'Randomredirect'            => array( 'Pengalihan_sembarang', 'PengalihanSembarang' ),
	'Recentchanges'             => array( 'Perubahan_terbaru', 'PerubahanTerbaru', 'RC', 'PT' ),
	'Recentchangeslinked'       => array( 'Perubahan_terkait', 'PerubahanTerkait' ),
	'Revisiondelete'            => array( 'Hapus_revisi', 'HapusRevisi' ),
	'Search'                    => array( 'Pencarian', 'Cari' ),
	'Shortpages'                => array( 'Halaman_pendek', 'HalamanPendek' ),
	'Specialpages'              => array( 'Halaman_istimewa', 'HalamanIstimewa' ),
	'Statistics'                => array( 'Statistik' ),
	'Tags'                      => array( 'Tag' ),
	'Unblock'                   => array( 'Pembatalan_pemblokiran', 'PembatalanPemblokiran' ),
	'Uncategorizedcategories'   => array( 'Kategori_tak_terkategori', 'KategoriTakTerkategori' ),
	'Uncategorizedimages'       => array( 'Berkas_tak_terkategori', 'BerkasTakTerkategori' ),
	'Uncategorizedpages'        => array( 'Halaman_tak_terkategori', 'HalamanTakTerkategori' ),
	'Uncategorizedtemplates'    => array( 'Templat_tak_terkategori', 'TemplatTakTerkategori' ),
	'Undelete'                  => array( 'Pembatalan_penghapusan', 'PembatalanPenghapusan' ),
	'Unlockdb'                  => array( 'Buka_kunci_basis_data', 'BukaKunciBasisData' ),
	'Unusedcategories'          => array( 'Kategori_kosong', 'KategoriKosong', 'Kategori_tak_terpakai', 'KategoriTakTerpakai' ),
	'Unusedimages'              => array( 'Berkas_tak_terpakai', 'BerkasTakTerpakai', 'Berkas_tak_digunakan', 'BerkasTakDigunakan' ),
	'Unusedtemplates'           => array( 'Templat_tak_terpakai', 'TemplatTakTerpakai' ),
	'Unwatchedpages'            => array( 'Halaman_tak_terpantau', 'HalamanTakTerpantau' ),
	'Upload'                    => array( 'Pengunggahan', 'Pemuatan', 'Unggah' ),
	'Userlogin'                 => array( 'Masuk_log', 'MasukLog' ),
	'Userlogout'                => array( 'Keluar_log', 'KeluarLog' ),
	'Userrights'                => array( 'Hak_pengguna', 'HakPengguna' ),
	'Version'                   => array( 'Versi' ),
	'Wantedcategories'          => array( 'Kategori_yang_diinginkan', 'KategoriDiinginkan' ),
	'Wantedfiles'               => array( 'Berkas_yang_diinginkan', 'BerkasDiinginkan' ),
	'Wantedpages'               => array( 'Halaman_yang_diinginkan', 'HalamanDiinginkan' ),
	'Wantedtemplates'           => array( 'Templat_yang_diinginkan', 'TemplatDiinginkan' ),
	'Watchlist'                 => array( 'Daftar_pantauan', 'DaftarPantauan' ),
	'Whatlinkshere'             => array( 'Pranala_balik', 'PranalaBalik' ),
	'Withoutinterwiki'          => array( 'Tanpa_interwiki', 'TanpaInterwiki' ),
);

$datePreferences = array(
	'default',
	'dmy',
	'ymd',
	'ISO 8601',
);

$defaultDateFormat = 'dmy';

$dateFormats = array(
	'dmy time' => 'H.i',
	'dmy date' => 'j F Y',
	'dmy both' => 'j F Y H.i',

	'ymd time' => 'H.i',
	'ymd date' => 'Y F j',
	'ymd both' => 'Y F j H.i',
);

