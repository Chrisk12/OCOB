-- Based more or less on the public interwiki map from MeatballWiki
-- Default interwiki prefixes...

REPLACE INTO /*$wgDBprefix*/interwiki (iw_prefix,iw_url,iw_local) VALUES
('acronym','http://www.acronymfinder.com/~/search/af.aspx?string=exact&Acronym=$1',0),
('advogato','http://www.advogato.org/$1',0),
('arxiv','http://www.arxiv.org/abs/$1',0),
('c2find','http://c2.com/cgi/wiki?FindPage&value=$1',0),
('cache','http://www.google.com/search?q=cache:$1',0),
('commons','https://commons.wikimedia.org/wiki/$1',0),
('dictionary','http://www.dict.org/bin/Dict?Database=*&Form=Dict1&Strategy=*&Query=$1',0),
('docbook','http://wiki.docbook.org/$1',0),
('doi','http://dx.doi.org/$1',0),
('drumcorpswiki','http://www.drumcorpswiki.com/$1',0),
('dwjwiki','http://www.suberic.net/cgi-bin/dwj/wiki.cgi?$1',0),
('elibre','http://enciclopedia.us.es/index.php/$1',0),
('emacswiki','http://www.emacswiki.org/cgi-bin/wiki.pl?$1',0),
('foldoc','http://foldoc.org/?$1',0),
('foxwiki','http://fox.wikis.com/wc.dll?Wiki~$1',0),
('freebsdman','http://www.FreeBSD.org/cgi/man.cgi?apropos=1&query=$1',0),
('gej','http://www.esperanto.de/dej.malnova/aktivikio.pl?$1',0),
('gentoo-wiki','http://gentoo-wiki.com/$1',0),
('google','http://www.google.com/search?q=$1',0),
('googlegroups','http://groups.google.com/groups?q=$1',0),
('hammondwiki','http://www.dairiki.org/HammondWiki/$1',0),
('hrwiki','http://www.hrwiki.org/wiki/$1',0),
('imdb','http://www.imdb.com/find?q=$1&tt=on',0),
('jargonfile','http://sunir.org/apps/meta.pl?wiki=JargonFile&redirect=$1',0),
('kmwiki','http://kmwiki.wikispaces.com/$1',0),
('linuxwiki','http://linuxwiki.de/$1',0),
('lojban','http://www.lojban.org/tiki/tiki-index.php?page=$1',0),
('lqwiki','http://wiki.linuxquestions.org/wiki/$1',0),
('lugkr','http://www.lug-kr.de/wiki/$1',0),
('meatball','http://www.usemod.com/cgi-bin/mb.pl?$1',0),
('mediawikiwiki','https://www.mediawiki.org/wiki/$1',0),
('mediazilla','https://bugzilla.wikimedia.org/$1',0),
('memoryalpha','http://en.memory-alpha.org/wiki/$1',0),
('metawiki','http://sunir.org/apps/meta.pl?$1',0),
('metawikimedia','https://meta.wikimedia.org/wiki/$1',0),
('mozillawiki','http://wiki.mozilla.org/$1',0),
('mw','http://www.mediawiki.org/wiki/$1',0),
('oeis','http://oeis.org/$1',0),
('openwiki','http://openwiki.com/ow.asp?$1',0),
('ppr','http://c2.com/cgi/wiki?$1',0),
('pythoninfo','http://wiki.python.org/moin/$1',0),
('rfc','http://www.rfc-editor.org/rfc/rfc$1.txt',0),
('s23wiki','http://s23.org/wiki/$1',0),
('seattlewireless','http://seattlewireless.net/$1',0),
('senseislibrary','http://senseis.xmp.net/?$1',0),
('sourceforge','http://sourceforge.net/$1',0),
('sourcewatch','http://www.sourcewatch.org/index.php?title=$1',0),
('squeak','http://wiki.squeak.org/squeak/$1',0),
('tejo','http://www.tejo.org/vikio/$1',0),
('tmbw','http://www.tmbw.net/wiki/$1',0),
('tmnet','http://www.technomanifestos.net/?$1',0),
('theopedia','http://www.theopedia.com/$1',0),
('twiki','http://twiki.org/cgi-bin/view/$1',0),
('uea','http://uea.org/vikio/index.php/$1',0),
('unreal','http://wiki.beyondunreal.com/$1',0),
('usemod','http://www.usemod.com/cgi-bin/wiki.pl?$1',0),
('webseitzwiki','http://webseitz.fluxent.com/wiki/$1',0),
('wiki','http://c2.com/cgi/wiki?$1',0),
('wikia','http://www.wikia.com/wiki/$1',0),
('wikibooks','https://en.wikibooks.org/wiki/$1',0),
('wikif1','http://www.wikif1.org/$1',0),
('wikihow','http://www.wikihow.com/$1',0),
('wikinfo','http://wikinfo.co/English/index.php/$1',0),
('wikimedia','https://wikimediafoundation.org/wiki/$1',0),
('wikinews','https://en.wikinews.org/wiki/$1',0),
('wikipedia','https://en.wikipedia.org/wiki/$1',0),
('wikiquote','https://en.wikiquote.org/wiki/$1',0),
('wikisource','https://wikisource.org/wiki/$1',0),
('wikispecies','https://species.wikimedia.org/wiki/$1',0),
('wikiversity','https://en.wikiversity.org/wiki/$1',0),
('wikivoyage','https://en.wikivoyage.org/wiki/$1',0),
('wikt','https://en.wiktionary.org/wiki/$1',0),
('wiktionary','https://en.wiktionary.org/wiki/$1',0)
;
