<?php
/** Kabyle (Taqbaylit)
 *
 * See MessagesQqq.php for message documentation incl. usage of parameters
 * To improve a translation please visit http://translatewiki.net
 *
 * @ingroup Language
 * @file
 *
 * @author Agurzil
 * @author Agzennay
 * @author Azwaw
 * @author Mmistmurt
 * @author MoubarikBelkasim
 * @author Teak
 * @author Urhixidur
 */

$namespaceNames = array(
	NS_MEDIA            => 'Media',
	NS_SPECIAL          => 'Uslig',
	NS_TALK             => 'Mmeslay',
	NS_USER             => 'Amseqdac',
	NS_USER_TALK        => 'Amyannan_umsqedac',
	NS_PROJECT_TALK     => 'Amyannan_n_$1',
	NS_FILE             => 'Tugna',
	NS_FILE_TALK        => 'Amyannan_n_tugna',
	NS_MEDIAWIKI        => 'MediaWiki',
	NS_MEDIAWIKI_TALK   => 'Amyannan_n_MediaWiki',
	NS_TEMPLATE         => 'Talɣa',
	NS_TEMPLATE_TALK    => 'Amyannan_n_talɣa',
	NS_HELP             => 'Tallat',
	NS_HELP_TALK        => 'Amyannan_n_tallat',
	NS_CATEGORY         => 'Taggayt',
	NS_CATEGORY_TALK    => 'Amyannan_n_taggayt',
);

$namespaceAliases = array(
	'Talγa'            => NS_TEMPLATE,
	'Amyannan_n_talγa' => NS_TEMPLATE_TALK,
);

$messages = array(
# User preference toggles
'tog-underline'               => 'Derrer izdayen:',
'tog-highlightbroken'         => 'Ssken izdayen imerẓa <a href="" class="new">akkagi</a> (neɣ: akkagi<a href="" class="internal">?</a>).',
'tog-justify'                 => 'Err tehri ger wawalen kif-kif',
'tog-hideminor'               => 'Ffer ibeddlen ifessasen deg yibeddlen imaynuten',
'tog-hidepatrolled'           => 'Ffer ibeddlen iεessan deg yibeddlen imaynuten',
'tog-newpageshidepatrolled'   => 'Ffer isebtaren iɛessan gar umuɣ n isebtaren imaynuten',
'tog-extendwatchlist'         => 'Ssemɣer umuɣ n uɛessi iwakken ad muqleɣ akk n wayen zemreɣ ad beddleɣ',
'tog-usenewrc'                => 'Sselhu ibeddlen ifessasen (JavaScript)',
'tog-numberheadings'          => 'Izwal ɣur-sen imḍanen mebla ma serseɣ-iten',
'tog-showtoolbar'             => 'Ssken tanuga n dduzan n ubeddel (JavaScript)',
'tog-editondblclick'          => 'Beddel isebtar mi wekkiɣ snat n tikwal (JavaScript)',
'tog-editsection'             => 'Eǧǧ abeddel n umur s yizdayen [beddel]',
'tog-editsectiononrightclick' => 'Eǧǧ abeddel n umur mi wekkiɣ ɣef uyeffus<br /> ɣef yizwal n umur (JavaScript)',
'tog-showtoc'                 => 'Ssken agbur (i isebtar i yesɛan kter n 3 izwalen)',
'tog-rememberpassword'        => 'Cfu ɣef yisem n umseqdac inu di uselkim-agi (i afellay n $1 {{PLURAL:$1|ass|ussan}})',
'tog-watchcreations'          => 'Rnu isebtar i xelqeɣ deg wumuɣ n uɛessi inu',
'tog-watchdefault'            => 'Rnu isebtar i ttbeddileɣ deg wumuɣ n uɛessi inu',
'tog-watchmoves'              => 'Rnu isebtar i smimḍeɣ deg wumuɣ n uɛessi inu',
'tog-watchdeletion'           => 'Rnu isebtar i mḥiɣ deg wumuɣ n uɛessi inu',
'tog-minordefault'            => 'Rcem akk ibeddlen am ibeddlen ifessasen d ameslugen',
'tog-previewontop'            => 'Ssken pre-timeẓriwt uqbel tankult ubeddel',
'tog-previewonfirst'          => 'Ssken pre-timeẓriwt akk d ubeddel amezwaru',
'tog-nocache'                 => 'Ekkes lkac n usebter',
'tog-enotifwatchlistpages'    => "Azen-iyi-d e-mail m'ara yettubeddel asebter i ttɛassaɣ",
'tog-enotifusertalkpages'     => 'Azen-iyi-d e-mail asmi sɛiɣ izen amaynut',
'tog-enotifminoredits'        => 'Azen-iyi-d e-mail ma llan ibeddlen ifessasen',
'tog-enotifrevealaddr'        => 'Ssken e-mail inu asmi yettwazen email n talɣut',
'tog-shownumberswatching'     => 'Ssken geddac yellan n yimseqdacen iɛessasen',
'tog-oldsig'                  => 'Azmul yellan :',
'tog-fancysig'                => 'ǧǧ azmul am yettili (war azday awurman)',
'tog-externaleditor'          => 'Sseqdec ambeddel n berra d ameslugen',
'tog-externaldiff'            => 'Sseqdec ambeddel n berra iwakken ad ẓreɣ imgerraden',
'tog-showjumplinks'           => 'Eǧǧ izdayen "neggez ar"',
'tog-uselivepreview'          => 'Sseqdec pre-timeẓriwt taǧiḥbuṭ (JavaScript) (Experimental)',
'tog-forceeditsummary'        => 'Ini-iyi-d mi sskecmeɣ agzul amecluc',
'tog-watchlisthideown'        => 'Ffer ibeddlen inu seg wumuɣ n uɛessi inu',
'tog-watchlisthidebots'       => 'Ffer ibeddlen n iboṭiyen seg wumuɣ n uɛessi inu',
'tog-watchlisthideminor'      => 'Ffer ibeddlen ifessasen seg wumuɣ n uɛessi inu',
'tog-watchlisthideliu'        => 'Ffer ibeddlen n iseqdacen yelan deg umuɣ n tiḍefri',
'tog-watchlisthideanons'      => 'Ffer ibeddlen n iseqdacen udrigen deg umuɣ n tiḍefri',
'tog-watchlisthidepatrolled'  => 'Ffer ibeddlen iɛessan deg umuɣ n tiḍefri',
'tog-nolangconversion'        => 'Kkes abeddel n yimeskilen',
'tog-ccmeonemails'            => 'Azen-iyi-d email n wayen uzneɣ i imseqdacen wiyaḍ',
'tog-diffonly'                => 'Ur temliḍ-iyi-d ara ayen yellan seddaw imgerraden',
'tog-showhiddencats'          => 'Beqqeḍ taggayin yeffren',
'tog-norollbackdiff'          => 'Ur beqqeḍ ara "diff" ma yella usemmet',

'underline-always'  => 'Daymen',
'underline-never'   => 'Abaden',
'underline-default' => 'Browser/Explorateur ameslugen',

# Font style option in Special:Preferences
'editfont-style'     => 'Aɣanib n tasefsit n taɣzut ubeqqeḍ :',
'editfont-default'   => 'Tasefsit n iminig s lexṣas',
'editfont-monospace' => 'Tasefsit s lqedd usbiḍ',
'editfont-sansserif' => 'Tasefsit "Sans-serif"',
'editfont-serif'     => 'Tasefsit "Serif"',

# Dates
'sunday'        => 'Ačer',
'monday'        => 'Arim',
'tuesday'       => 'Aram',
'wednesday'     => 'Ahad',
'thursday'      => 'Amhad',
'friday'        => 'Sem',
'saturday'      => 'Sed',
'sun'           => 'Ače',
'mon'           => 'Ari',
'tue'           => 'Ara',
'wed'           => 'Aha',
'thu'           => 'Amh',
'fri'           => 'Sem',
'sat'           => 'Sed',
'january'       => 'Yennayer',
'february'      => 'Furar',
'march'         => 'Meɣres',
'april'         => 'Yebrir',
'may_long'      => 'Mayu',
'june'          => 'Yunyu',
'july'          => 'Yulyu',
'august'        => 'Ɣuct',
'september'     => 'Ctamber',
'october'       => 'Tuber',
'november'      => 'Wamber',
'december'      => 'Dujamber',
'january-gen'   => 'Yennayer',
'february-gen'  => 'Furar',
'march-gen'     => 'Meɣres',
'april-gen'     => 'Yebrir',
'may-gen'       => 'Mayu',
'june-gen'      => 'Yunyu',
'july-gen'      => 'Yulyu',
'august-gen'    => 'Ɣuct',
'september-gen' => 'Ctamber',
'october-gen'   => 'Tuber',
'november-gen'  => 'Wamber',
'december-gen'  => 'Dujamber',
'jan'           => 'Yen',
'feb'           => 'Fur',
'mar'           => 'Meɣ',
'apr'           => 'Yeb',
'may'           => 'May',
'jun'           => 'Yun',
'jul'           => 'Yul',
'aug'           => 'Ɣuc',
'sep'           => 'Cta',
'oct'           => 'Tub',
'nov'           => 'Wam',
'dec'           => 'Duj',

# Categories related messages
'pagecategories'                 => '{{PLURAL:$1|Taggayt|Taggayin}}',
'category_header'                => 'Imagraden deg taggayt "$1"',
'subcategories'                  => 'Taggayin tizellumin',
'category-media-header'          => 'Media deg taggayt "$1"',
'category-empty'                 => "''Taggayt-agi d tilemt.''",
'hidden-categories'              => '{{PLURAL:$1|Taggayt yeffren|Taggayin yeffren}}',
'hidden-category-category'       => 'Taggayin yeffren',
'category-subcat-count'          => 'Taggayt agi tesɛa {{PLURAL:$2|adu-taggayt|$2 adu-taggayin, ɣef ayed {{PLURAL:$1|t-agi|t-igi $1}}}} ddaw agi.',
'category-subcat-count-limited'  => 'Taggayt agi tesɛa {{PLURAL:$1|adu-taggayt agi|tid $1 adu-taggayin agi}} ddaw-agi.',
'category-article-count'         => 'Taggayt agi tesɛa {{PLURAL:$2|asebter agi|$2 isebtaren, ɣef ayed {{PLURAL:$1|t-agi|t-igi $1}} ddaw-agi}}.',
'category-article-count-limited' => '{{PLURAL:$1|Asebter agi yella|$1 isebtar agi llan}} deg taggayt agi.',
'category-file-count'            => 'Taggayt agi tesɛa {{PLURAL:$2|afaylu agi|$2 ifuyla, ɣef ayed {{PLURAL:$1|t-agi|t-igi $1}} ddaw-agi}}.',
'category-file-count-limited'    => '{{PLURAL:$1|Afaylu agi yella|$1 ifuyla agi llan}} deg taggayt agi.',
'listingcontinuesabbrev'         => 'asartu',
'index-category'                 => 'Isebtar s umatar',
'noindex-category'               => 'Asebter agi ur d-yerna ara deg umatar',
'broken-file-category'           => 'Isebtar s iseɣwan n ifuyla iṛzan',

'about'         => 'Awal ɣef...',
'article'       => 'Ayen yella deg usebter',
'newwindow'     => '(teldi deg ttaq amaynut)',
'cancel'        => 'Eǧǧ-it am yella',
'moredotdotdot' => 'Ugar...',
'mypage'        => 'Asebter inu',
'mytalk'        => 'Amyannan inu',
'anontalk'      => 'Amyannan n IP-yagi',
'navigation'    => 'Ẓer isebtar',
'and'           => '&#32;u',

# Cologne Blue skin
'qbfind'         => 'Af',
'qbbrowse'       => 'Ẓer isebtar',
'qbedit'         => 'Beddel',
'qbpageoptions'  => 'Asebter-agi',
'qbpageinfo'     => 'Asatal',
'qbmyoptions'    => 'isebtar inu',
'qbspecialpages' => 'isebtar usligen',
'faq'            => 'Isteqsiyen',
'faqpage'        => 'Project:Isteqsiyen',

# Vector skin
'vector-action-addsection'       => 'Rnud ameggay',
'vector-action-delete'           => 'Mḥu',
'vector-action-move'             => 'Smimeḍ',
'vector-action-protect'          => 'Mmesten',
'vector-action-undelete'         => 'Uɣaled',
'vector-action-unprotect'        => 'Beddel amesten',
'vector-simplesearch-preference' => 'Sermed isumar n unadi i silɣen (i "Vector" kan)',
'vector-view-create'             => 'Snulfu',
'vector-view-edit'               => 'Ẓẓiẓreg',
'vector-view-history'            => 'Ẓeṛ amazray',
'vector-view-view'               => 'Ɣer',
'vector-view-viewsource'         => 'Ẓer aɣbalu',
'actions'                        => 'Tigawtin',
'namespaces'                     => 'Talluntin n isemawen',
'variants'                       => 'Tineḍwa',

'errorpagetitle'    => 'Agul',
'returnto'          => 'Uɣal ar $1.',
'tagline'           => 'Seg {{SITENAME}}',
'help'              => 'Tallat',
'search'            => 'Nadi',
'searchbutton'      => 'Nadi',
'go'                => 'Ẓer',
'searcharticle'     => 'Ẓer',
'history'           => 'Amezruy n usebter',
'history_short'     => 'Amezruy',
'updatedmarker'     => 'yettubeddel segmi tarzeft taneggarut inu',
'printableversion'  => 'Tasiwelt iwakken ad timprimiḍ',
'permalink'         => 'Azday ur yettbeddil ara',
'print'             => 'Siggez',
'view'              => 'Ẓeṛ',
'edit'              => 'Beddel',
'create'            => 'Snulfu',
'editthispage'      => 'Beddel asebter-agi',
'create-this-page'  => 'Snulfu asebter-agi',
'delete'            => 'Mḥu',
'deletethispage'    => 'Mḥu asebter-agi',
'undelete_short'    => 'Fakk amḥay n {{PLURAL:$1|yiwen ubeddel|$1 yibeddlen}}',
'viewdeleted_short' => 'Ẓeṛ {{PLURAL:$1|yiwen abeddel yettumḥan|$1 Ibeddlen yettumḥan}}',
'protect'           => 'Ḥrez',
'protect_change'    => 'beddel tiḥḥerzi',
'protectthispage'   => 'Ḥrez asebter-agi',
'unprotect'         => 'Beddel amesten',
'unprotectthispage' => 'Beddel amesten n usebter-agi',
'newpage'           => 'Asebter amaynut',
'talkpage'          => 'Mmeslay ɣef usebter-agi',
'talkpagelinktext'  => 'Mmeslay',
'specialpage'       => 'Asebter uslig',
'personaltools'     => 'Dduzan inu',
'postcomment'       => 'Azen awennit',
'articlepage'       => 'Ẓer ayen yellan deg usebter',
'talk'              => 'Amyannan',
'views'             => 'Tuẓrin',
'toolbox'           => 'Dduzan',
'userpage'          => 'Ẓer asebter n wemseqdac',
'projectpage'       => 'Ẓer asebter n usenfar',
'imagepage'         => 'Ẓer asebter n tugna',
'mediawikipage'     => 'Ẓer asebter n izen',
'templatepage'      => 'Ẓer asebter n talɣa',
'viewhelppage'      => 'Ẓer asebter n tallat',
'categorypage'      => 'Ẓer asebter n taggayin',
'viewtalkpage'      => 'Ẓer amyannan',
'otherlanguages'    => 'S tutlayin tiyaḍ',
'redirectedfrom'    => '(Yettusmimeḍ seg $1)',
'redirectpagesub'   => 'Asebter usemmimeḍ',
'lastmodifiedat'    => 'Tikkelt taneggarut i yettubeddel asebter-agi $2, $1.',
'viewcount'         => 'Asebter-agi yettwakcem {{PLURAL:$1|yiwet tikelt|$1 tikwal}}.',
'protectedpage'     => 'Asebter yettwaḥerzen',
'jumpto'            => 'Neggez ar:',
'jumptonavigation'  => 'ẓer isebtar',
'jumptosearch'      => 'anadi',
'view-pool-error'   => 'Suref-aɣ, iqeddacen iwziren tura.
Aṭas iseqdacen tnadin ad ẓṛen asebter agi.
Ilaq ad arǧuḍ imir uqbel ad εreḍeḍ tikkelt nniḍen .

$1',
'pool-timeout'      => 'Amenḍar iɛedda deg taganit n uzekṛun',
'pool-queuefull'    => 'Adras n umahil yečuṛ',
'pool-errorunknown' => 'Anezri warisem',

# All link text and link target definitions of links into project namespace that get used by other message strings, with the exception of user group pages (see grouppage) and the disambiguation template definition (see disambiguations).
'aboutsite'            => 'Awal ɣef {{SITENAME}}',
'aboutpage'            => 'Project:Awal ɣef...',
'copyright'            => 'Tzemreḍ ad twaliḍ ayen yella deg $1.',
'copyrightpage'        => '{{ns:project}}:Izerfanɣel',
'currentevents'        => 'Isallen',
'currentevents-url'    => 'Project:Isallen',
'disclaimers'          => 'Iɣtalen',
'disclaimerpage'       => 'Project:Iɣtalen',
'edithelp'             => 'Tallat deg ubeddel',
'edithelppage'         => 'Help:Abeddel',
'helppage'             => 'Help:Agbur',
'mainpage'             => 'Asebter amenzawi',
'mainpage-description' => 'Asebter amenzawi',
'policy-url'           => 'Project:Ilugan',
'portal'               => 'Awwur n timetti',
'portal-url'           => 'Project:Awwur n timetti',
'privacy'              => 'Tudert tusligt',
'privacypage'          => 'Project:Tudert tusligt',

'badaccess'        => 'Agul n turagt',
'badaccess-group0' => 'Ur tettalaseḍ ara ad texedmeḍ tigawt i tseqsiḍ.',
'badaccess-groups' => 'Tigawt id steqsiḍ t-uffar kan i iseqdacen n {{PLURAL:$2|ugraw|igrawen}} : $1.',

'versionrequired'     => 'Yessefk ad tesɛiḍ tasiwelt $1 n MediaWiki',
'versionrequiredtext' => 'Yessefk ad tesɛiḍ tasiwelt $1 n MediaWiki iwakken ad tesseqdceḍ asebter-agi. Ẓer [[Special:Version|tasiwelt n usebter]].',

'ok'                      => 'Seɣbel',
'retrievedfrom'           => 'Yettwaddem seg "$1"',
'youhavenewmessages'      => 'Ɣur-k $1 ($2).',
'newmessageslink'         => 'Izen amaynut',
'newmessagesdifflink'     => 'Abeddel aneggaru',
'youhavenewmessagesmulti' => 'Tesɛiḍ iznan imaynuten deg $1',
'editsection'             => 'beddel',
'editold'                 => 'beddel',
'viewsourceold'           => 'ẓeṛ aɣbalu',
'editlink'                => 'beddel',
'viewsourcelink'          => 'ẓeṛ aɣbalu',
'editsectionhint'         => 'Beddel amur: $1',
'toc'                     => 'Agbur',
'showtoc'                 => 'Ssken',
'hidetoc'                 => 'Ffer',
'collapsible-collapse'    => 'Seggelmes',
'collapsible-expand'      => 'Beqqeḍ',
'thisisdeleted'           => 'Ẓer neɣ err $1 am yella?',
'viewdeleted'             => 'Ẓer $1?',
'restorelink'             => '{{PLURAL:$1|Yiwen abeddel yettumḥan|$1 Ibeddlen yettumḥan}}',
'feedlinks'               => 'Asuddem:',
'feed-invalid'            => 'Anaw n usuddem mačči ṣaḥiḥ.',
'feed-unavailable'        => 'Isuddman RSS ur yestufan ara',
'site-rss-feed'           => 'Asuddem RSS n $1',
'site-atom-feed'          => 'Taneflit Atom n $1',
'page-rss-feed'           => 'Asuddem RSS n « $1 »',
'page-atom-feed'          => 'Taneflit Atom n "$1"',
'red-link-title'          => '$1 (ulac asebter)',
'sort-descending'         => 'Afran akaray',
'sort-ascending'          => 'Afran aseffes',

# Short words for each namespace, by default used in the namespace tab in monobook
'nstab-main'      => 'Amagrad',
'nstab-user'      => 'Asebter n wemseqdac',
'nstab-media'     => 'Asebter n media',
'nstab-special'   => 'Asebter uslig',
'nstab-project'   => 'Awal ɣef...',
'nstab-image'     => 'Afaylu',
'nstab-mediawiki' => 'Izen',
'nstab-template'  => 'Talɣa',
'nstab-help'      => 'Tallat',
'nstab-category'  => 'Taggayt',

# Main script and global functions
'nosuchaction'      => 'Tigawt ulac-itt',
'nosuchactiontext'  => 'Wiki ur teɛqil ara tigawt-nni n URL',
'nosuchspecialpage' => 'Asebter uslig am wagi ulac-it.',
'nospecialpagetext' => 'Tseqsiḍ ɣef usebter uslig ulac-it, tzemreḍ ad tafeḍ isebtar usligen n ṣṣeḥ deg [[Special:SpecialPages|wumuɣ n isebtar usligen]].',

# General errors
'error'                => 'Agul',
'databaseerror'        => 'Agul n database',
'dberrortext'          => 'Yella ugul n tseddast deg database.
Waqila yella bug deg software.
Query n database taneggarut hatt:
<blockquote><tt>$1</tt></blockquote>
seg tawuri  "<tt>$2</tt>".
MySQL yerra-d agul "<tt>$3: $4</tt>".',
'dberrortextcl'        => 'Yella ugul n tseddast deg database.
Query n database taneggarut hatt:
"$1"
seg tawuri "$2".
MySQL yerra-d agul "$3: $4"',
'laggedslavemode'      => 'Aɣtal: Ahat asebter ur yesɛi ara akk ibeddlen imaynuten.',
'readonly'             => 'Database d tamsekkert',
'enterlockreason'      => 'Ini ayɣer tsekkreḍ database, ini daɣen melmi ara ad ifukk asekker',
'readonlytext'         => 'Database d tamsekkert, ahat tettuseggem, qrib ad tuɣal-d.

Win (anedbal) isekker-itt yenna-d: $1',
'missing-article'      => 'Taffa n isefka ur t-ufa ara aḍris n yiwen usebter ilaq at af, s-isem « $1 » $2.

Umata, wagi yeḍra mi neḍfeṛ azday ɣer yiwen diff aqbur naɣ ɣer amazray n usebter yemḥan.

Ma mačči d-tajṛut agi, ihi d-taniwit deg uhil.
Ilaq ad εeggenem yiwen [[Special:ListUsers/sysop|anedbal]] war ad ttum asefkem URL n uzday.',
'missingarticle-rev'   => '(uṭṭun n lqem : $1)',
'missingarticle-diff'  => '(Diff: $1, $2)',
'readonly_lag'         => 'Database d tamsekkert (weḥdes) axaṭer kra n serveur ɛeṭṭlen',
'internalerror'        => 'Agul zdaxel',
'internalerror_info'   => 'Anezri agensan : $1',
'fileappenderrorread'  => 'Ulamek an ɣeṛ « $1 »  mi taguri',
'fileappenderror'      => 'Ulamek an seffes « $1 » ar « $2 ».',
'filecopyerror'        => 'Ur yezmir ara ad yexdem alsaru n ufaylu "$1" ar "$2".',
'filerenameerror'      => 'Ur yezmir ara ad ibeddel isem ufaylu "$1" ar "$2".',
'filedeleteerror'      => 'Ur yezmir ara ad yemḥu afaylu "$1".',
'directorycreateerror' => 'Ulamek an snulfu akaram « $1 ».',
'filenotfound'         => 'Ur yezmir ara ad yaf afaylu "$1".',
'fileexistserror'      => 'Ulamek an aru afaylu « $1 » : afaylu agi yesnulfad yakan.',
'unexpected'           => 'Agul: "$1"="$2".',
'formerror'            => 'Agul: ur yezmir ara ad yazen talɣa',
'badarticleerror'      => 'Ur yezmir ara ad yexdem tigawt-agi deg usebter-agi.',
'cannotdelete'         => 'Ulamek ad yemḥu asebter naɣ afaylu « $1 ».
Ahat amdan wayeḍ yemḥa-t.',
'badtitle'             => 'Azwel ur yelhi',
'badtitletext'         => 'Asebter i testeqsiḍ fell-as mačči ṣaḥiḥ, d ilem, neɣ yella ugul deg wezday seg wikipedia s tutlayt tayeḍ neɣ deg wezday n wiki nniḍen. Ahat tesɛa asekkil ur yezmir ara ad yettuseqdac deg wezwel.',
'perfcached'           => 'Talɣut deg ukessar seg lkac u waqila mačči d tasiwelt taneggarut.',
'perfcachedts'         => 'Talɣut deg ukessar seg lkac, tasiwelt taneggarut n wass $1.',
'querypage-no-updates' => 'Ibeddlen n usebter-agi ur ttbanen ara tura. Tilɣa ines qrib a d-banen.',
'wrong_wfQuery_params' => 'Imsektayen mačči ṣaḥiḥ deg wfQuery()<br />
Tawuri: $1<br />
Query: $2',
'viewsource'           => 'Ẓer aɣbalu',
'viewsourcefor'        => 'n $1',
'actionthrottled'      => 'Tigawt tesɛa talast',
'actionthrottledtext'  => 'Iwakken an ewwet mgal tira yerkan (SPAM), tigawt agi tesɛa talast n amḍan n tikwalt deg akud awezzlan. talast agi t-ɛedda.
Ɛred tikkelt nniḍen deg kra n dqiqa.',
'protectedpagetext'    => 'Asebter-agi d amsekker.',
'viewsourcetext'       => 'Tzemreḍ ad twaliḍ u txedmeḍ alsaru n uɣbalu n usebter-agi:',
'protectedinterface'   => 'Asebter-agi d amsekker axaṭer yettuseqdac i weḍris n software.',
'editinginterface'     => "'''Aɣtal:''' Aqla-k tettbeddileḍ asebter i yettuseqdac i weḍris n software. Tagmett n software i tt-ẓren yimseqdacen wiyaḍ ad tbeddel akk d ibeddlen inek.",
'sqlhidden'            => '(Query n SQL tettwaffer)',
'cascadeprotected'     => 'Asebter-agi yegdel axaṭer yettusekcem deg {{PLURAL:$1|asebter yegdelen agi|isebtar yegdelen agi}} s Taxtiṛit « amesten s uceṛcuṛ » isermeden :
$2',
'namespaceprotected'   => "Ur tesɛiḍ ara turagt iwakken ad beddeleḍ isebtar n tallunt n isemawen \"'''\$1'''\".",
'customcssprotected'   => 'Ur tesɛiḍ ara turagt iwakken ad beddeleḍ asebter agi n CSS, acku tesɛa iɣewwaren n yiwen useqdac nniḍen.',
'customjsprotected'    => 'Ur tesɛiḍ ara turagt iwakken ad beddeleḍ asebter agi n Javascript, acku tesɛa iɣewwaren n yiwen useqdac nniḍen.',
'ns-specialprotected'  => 'Ur t-zemred ara ad beddeleḍ isebtar usligen',
'titleprotected'       => "Azwel agi yegdel deg usnulfu ɣef [[User:$1|$1]].
Taɣẓint id yenna : ''$2''",

# Virus scanner
'virus-badscanner'     => "Yir tawila : anafraḍ n infafaden warisem : ''$1''",
'virus-scanfailed'     => 'Abrir n unadi (tangalt $1)',
'virus-unknownscanner' => 'amgelanfafad warisem :',

# Login and logout pages
'logouttext'                 => "'''Tura tesensereḍ.'''

Tzemreḍ ad tesseqdceḍ {{SITENAME}} d udrig, [[Special:UserLogin|ad tkecmeḍ daɣen]] s yisem n wemseqdac inek (neɣ nniḍen).
Kra n isebtar zemren ad sskanen belli mazal-ik s yisem n wemseqdac inek armi temḥuḍ lkac.",
'welcomecreation'            => '== Anṣuf yisek (yisem), $1 ! ==

Amiḍan ik (im) yesnulfad.
Ur tettuḍ ara ad tbeddleḍ [[Special:Preferences|isemyifiyen inek (inem) ɣef {{SITENAME}}]].',
'yourname'                   => 'Isem n wemseqdac',
'yourpassword'               => 'Awal n tbaḍnit',
'yourpasswordagain'          => 'Ɛiwed ssekcem awal n tbaḍnit',
'remembermypassword'         => 'Cfu ɣef wawal n tbaḍnit inu di uselkim-agi (i afellay n $1 {{PLURAL:$1|ass|ussan}})',
'securelogin-stick-https'    => 'Qqim uqqin s HTTPS sakin tuqqna',
'yourdomainname'             => 'Taɣult inek',
'externaldberror'            => 'Yella ugul aberrani n database neɣ ur tettalaseḍ ara ad tbeddleḍ isem an wemseqdac aberrani inek.',
'login'                      => 'Kcem',
'nav-login-createaccount'    => 'Kcem / Xleq isem n wemseqdac',
'loginprompt'                => 'Yessefk ad teǧǧiḍ ikukiyen (cookies) iwakken ad tkecmeḍ ar {{SITENAME}}.',
'userlogin'                  => 'Kcem / Xleq isem n wemseqdac',
'userloginnocreate'          => 'Qqen',
'logout'                     => 'Ffeɣ',
'userlogout'                 => 'Ffeɣ',
'notloggedin'                => 'Ur tekcimeḍ ara',
'nologin'                    => "Ur tesɛiḍ ara isem n umseqdac? '''$1'''.",
'nologinlink'                => 'Xleq isem n wemseqdac',
'createaccount'              => 'Xleq isem n wemseqdac',
'gotaccount'                 => "Tesɛiḍ yagi isem n wemseqdac? '''$1'''.",
'gotaccountlink'             => 'Kcem',
'userlogin-resetlink'        => 'Ettuḍ tilɣa n tuqqna ?',
'createaccountmail'          => 's e-mail',
'createaccountreason'        => 'Ayɣer',
'badretype'                  => 'Awal n tbaḍnit amezwaru d wis sin mačči d kif-kif.',
'userexists'                 => 'Isem n wemseqdac yeddem-as amdan wayeḍ. Fren yiwen nniḍen.',
'loginerror'                 => 'Agul n ukcam',
'createaccounterror'         => 'Ulamek ad nesnulfu amiḍan : $1',
'nocookiesnew'               => 'Isem n wemseqdac-agi yettwaxleq, meɛna ur tekcimeḍ ara. {{SITENAME}} yesseqdac ikukiyen (cookies) iwakken ad tkecmeḍ. Tekseḍ ikukiyen-nni. Eǧǧ-aten, umbeɛd kecm s yisem n wemseqdac akk d wawal n tbaḍnit inek.',
'nocookieslogin'             => '{{SITENAME}} yesseqdac ikukiyen (cookies) iwakken ad tkecmeḍ. Tekseḍ ikukiyen-nni. Eǧǧ-aten iwakken ad tkecmeḍ.',
'nocookiesfornew'            => 'Amiḍan n useqdac ur d-isnulfu ara, acku ur nezmer ara an sulu azar-is.
Selken ma sermedeḍ "cookies", sismeḍ asebter dɣa εreḍ tikkelt nniḍen.',
'noname'                     => 'Ur tefkiḍ ara isem n wemseqdac ṣaḥiḥ.',
'loginsuccesstitle'          => 'Tkecmeḍ !',
'loginsuccess'               => "'''Tkecmeḍ ar {{SITENAME}} s yisem n wemseqdac \"\$1\".'''",
'nosuchuser'                 => 'Aseqdac « $1 » ulac-it d-agi.
Ssenqed tira n yisem-nni, naɣ [[Special:UserLogin/signup|snulfu-d amiḍan amaynut]].',
'nosuchusershort'            => 'Ulac isem n wemseqdac s yisem "$1". Ssenqed tira n yisem-nni.',
'nouserspecified'            => 'Yessefk ad tefkeḍ isem n wemseqdac.',
'login-userblocked'          => 'Aseqdac agi i sewḥel. Tuqqna t-ugwi.',
'wrongpassword'              => 'Awal n tbaḍnit ɣaleṭ. Ɛreḍ daɣen.',
'wrongpasswordempty'         => 'Awal n tbaḍnit ulac-it. Ɛreḍ daɣen.',
'passwordtooshort'           => 'Awal-ik (im) n uɛaddi ilaq ad i sɛu adday {{PLURAL:$1|1 asekkil|$1 isekkilen}}.',
'password-name-match'        => 'Ilaq awal n uɛaddi ad yili imeẓli s-isem n useqdac.',
'password-login-forbidden'   => 'aseqdac agi d awal n uɛaddi agi d-izenbigen.',
'mailmypassword'             => 'Awal n tbaḍnit n e-mail',
'passwordremindertitle'      => 'Asmekti n wawal n tbaḍnit seg {{SITENAME}}',
'passwordremindertext'       => 'Amdan (waqila d kečč/kem, seg tansa IP $1) yesteqsa iwakken a nazen
Awal n uɛaddi amaynut i {{SITENAME}} ($4). Awal n uɛaddi i wemseqdac "$2" yuɣal-d tura "$3".
Mliḥ lukan tkecmeḍ u tbeddleḍ Awal n uɛaddi tura.
Tasewti n awal agi n uɛaddi amaynut ad yaweḍ deg {{PLURAL:$5|yiwen ass|$5 ussan}}

Lukan mačči d kečč i yesteqsan naɣ tecfiḍ ɣef awal n uɛaddi, tzemreḍ ad tkemmleḍ mebla ma tbeddleḍ awal n uɛaddi.',
'noemail'                    => '"$1" ur yesɛi ara email.',
'noemailcreate'              => 'Ilaq ad efkeḍ tansa e-mail i sɛan aseɣbel.',
'passwordsent'               => 'Awal n tbaḍnit amaynut yettwazen i emal inek, aylaw n "$1".
G leɛnaya-k, kcem tikelt nniḍen yis-s.',
'blocked-mailpassword'       => 'Tansa n IP inek tɛekkel, ur tezmireḍ ara ad txedmeḍ abeddel,
ur tezmireḍ ara ad tesɛuḍ awal n tbaḍnit i tettuḍ.',
'eauthentsent'               => 'Yiwen e-mail yettwazen-ak iwakken ad tsenteḍ.
Qbel kulci, ḍfer ayen yenn-ak deg e-mail,
iwakken ad tbeyyneḍ belli tansa n email inek.',
'throttled-mailpassword'     => 'Asmekti n wawal n uɛaddi yettwazen yagi deg {{PLURAL:$1|asrag agi aneggaru| $1 isragen agi ineggura}}. Asmekti n wawal n uɛaddi yettwazen tikelt kan mkul $1 swayeɛ. deg {{PLURAL:$1|asrag|azilal n $1 isragen}}.',
'mailerror'                  => 'Agul asmi yettwazen e-mail: $1',
'acct_creation_throttle_hit' => 'Amdan i seqdacen tansa IP inek/inem yesnulfud {{PLURAL:$1|yiwen amiḍan|$1 imiḍanen}} deg 24 izragen agi ineggura, negweḍ ar talast n turagt deg azilal agi n wakud.',
'emailauthenticated'         => 'Tansa e-mail inek/inem tesesteb ass n $2 af $3.',
'emailnotauthenticated'      => 'Tansa e-mail inek mazal ur tettuɛqel. Ḥedd e-mail ur ttwazen i ulaḥedd n iḍaɣaren-agi.',
'noemailprefs'               => 'Efk tansa e-mail iwakken ad leḥḥun iḍaɣaren-nni.',
'emailconfirmlink'           => 'Sentem tansa e-mail inek',
'invalidemailaddress'        => 'Tansa e-mail-agi ur telhi, ur tesɛi ara taseddast n lɛali. Ssekcem tansa e-mail s taseddast n lɛali neɣ ur tefkiḍ acemma.',
'accountcreated'             => 'Isem n wemseqdac yettwaxleq',
'accountcreatedtext'         => 'Isem n wemseqdac i $1 yettwaxleq.',
'createaccount-title'        => 'Asnulfu n umiḍan i {{SITENAME}}',
'createaccount-text'         => 'Albeɛḍ yesnulfu-d amiḍan i tansa e-amil inek/inem ɣef {{SITENAME}} ($4) s-isem n-useqdac « $2 », s awal n uɛaddi « $3 ».
Ilaq tura ad lldiḍ taɣimit dɣa ad beddeleḍ awal ik/im n uɛaddi.',
'usernamehasherror'          => 'Isem n useqdac ur yezmer ara ad i sɛu  isekkilen n ugeddeḥ',
'login-throttled'            => 'Tɛerdeḍ ad qqeneḍ aṭas tiqwal deg dqiqat agi iɛddan.
Ilaq ad rǧuḍ ciṭaḥ uqbel ad ɛerdeḍ tikkelt nniḍen.',
'login-abort-generic'        => 'Taremt ik/im n tuqqna tebrir',
'loginlanguagelabel'         => 'Tutlayt: $1',
'suspicious-userlogout'      => 'Asuter n usenser yugwi acku yella ugur s iminig naɣ s tazarkatut n uqeddac proxy.',

# E-mail sending
'php-mail-error-unknown' => 'anezri warisem deg tawuri mail() n PHP',

# Change password dialog
'resetpass'                 => 'Beddel awal n uɛaddi',
'resetpass_announce'        => 'Tkecmeḍ s ungal yettwazen-ak s e-mail (ungal-nni qrib yemmut). Iwekken tkemmleḍ, yessefk ad textareḍ awal n tbaḍnit amaynut dagi:',
'resetpass_text'            => '<!-- Rnu aḍris dagi -->',
'resetpass_header'          => 'Beddel awal n uɛassi n umiḍan',
'oldpassword'               => 'Awal n tbaḍnit aqdim:',
'newpassword'               => 'Awal n tbaḍnit amaynut:',
'retypenew'                 => 'Ɛiwed ssekcem n tbaḍnit amaynut:',
'resetpass_submit'          => 'Eg awal n tbaḍnit u kcem',
'resetpass_success'         => 'Awal n tbaḍnit yettubeddel! Qrib ad tkecmeḍ...',
'resetpass_forbidden'       => 'Ur zemreḍ ara ad beddeleḍ awalen n uɛaddi',
'resetpass-no-info'         => 'Ilaq ad qqeneḍ iwakken ad ẓṛeḍ asebter agi.',
'resetpass-submit-loggedin' => 'Beddel awal n uɛaddi',
'resetpass-submit-cancel'   => 'Semmewet',
'resetpass-wrong-oldpass'   => 'Awal n uɛaddi ur i seɣbel ara.
Ahat ilaq ad beddeleḍ awal ik/im n uɛaddi naɣ ad ssutereḍ awal n uɛaddi amaynut.',
'resetpass-temp-password'   => 'Awal n uɛaddi amakud',

# Special:PasswordReset
'passwordreset'          => 'Awennez tikkelt nniḍen n awal uɛaddi',
'passwordreset-text'     => 'Ččur tiferkit agi iwakken ad eṭṭfeḍ tirawt n usmekti  deg-es tilɣa n umiḍan inek/inem.',
'passwordreset-legend'   => 'Awennez tikkelt nniḍen n awal uɛaddi',
'passwordreset-disabled' => 'Awennez n awal uɛaddi yensa deg uwiki agi.',
'passwordreset-pretext'  => '{{PLURAL:$1||Sekcem aferdis n isefka ddaw agi}}',
'passwordreset-username' => 'Isem n useqdac',
'passwordreset-domain'   => 'Talɣut :',
'passwordreset-email'    => 'Tansa e-mail :',

# Edit page toolbar
'bold_sample'     => 'Aḍris aberbuz',
'bold_tip'        => 'Aḍris aberbuz',
'italic_sample'   => 'Aḍris aṭalyani',
'italic_tip'      => 'Aḍris aṭalyani',
'link_sample'     => 'Azwel n uzday',
'link_tip'        => 'Azday zdaxel',
'extlink_sample'  => 'http://www.example.com azwel n uzday',
'extlink_tip'     => 'Azday aberrani (cfu belli yessefk at tebduḍ s http://)',
'headline_sample' => 'Aḍris n uzwel azellum',
'headline_tip'    => 'Aswir 2 n uzwel azellum',
'nowiki_sample'   => 'Sideff da tirra bla taseddast(formatting) n wiki',
'nowiki_tip'      => 'Ttu taseddast n wiki',
'image_sample'    => 'Amedya.jpg',
'image_tip'       => 'Tugna yettussekcmen',
'media_sample'    => 'Amedya.ogg',
'media_tip'       => 'Azday n ufaylu media',
'sig_tip'         => 'Azmul inek s uzemz',
'hr_tip'          => 'Ajerriḍ aglawan (ur teččerɛiḍ ara)',

# Edit pages
'summary'                          => 'Agzul:',
'subject'                          => 'Asentel/Azwel azellum:',
'minoredit'                        => 'Wagi d abeddel afessas',
'watchthis'                        => 'Ɛass asebter-agi',
'savearticle'                      => 'Beddel asebter',
'preview'                          => 'Pre-Ẓer',
'showpreview'                      => 'Ssken pre-timeẓriwt',
'showlivepreview'                  => 'Pre-timeẓriwt taǧiḥbuṭ',
'showdiff'                         => 'Ssken ibeddlen',
'anoneditwarning'                  => "'''Aɣtal:''' Ur tkecmiḍ ara. Tansa IP inek ad tettusmekti deg umezruy n usebter-agi.",
'missingsummary'                   => "'''Ur tettuḍ ara:''' Ur tefkiḍ ara azwel i ubeddel inek. Lukan twekkiḍ ''Smekti'' tikelt nniḍen, abeddel inek ad yettusmekti mebla azwel.",
'missingcommenttext'               => 'Ssekcem awennit deg ukessar.',
'missingcommentheader'             => "'''Ur tettuḍ ara:''' Ur tefkiḍ ara azwel-azellum i ubeddel inek. Lukan twekkiḍ ''Smekti'' tikelt nniḍen, abeddel inek ad yettusmekti mebla azwel-azellum.",
'summary-preview'                  => 'Pre-timeẓriwt n ugzul:',
'subject-preview'                  => 'Pre-timeẓriwt asentel/azwel azellum:',
'blockedtitle'                     => 'Amseqdac iɛekkel',
'blockedtext'                      => "'''Amiḍan ik n useqdac neɣ tansa n IP sewḥlen.'''

Asewḥel yetwexdem af $1
Taɣẓint id yenna : ''$2''.

* Tazzwara n usewḥel : $8
* Taggara n usewḥel : $6
* Amiḍan i sewḥlen : $7.


Tzemreḍ ad tmeslayeḍ s $1 neɣ [[{{MediaWiki:Grouppage-sysop}}|anedbal]] nniḍen iwakken ad tsmelayem ɣef uɛekkil-nni.
Lukan ur tefkiḍ ara email saḥih deg [[Special:Preferences|isemyifiyen n wemseqdac]], ur tezmireḍ ara ad tazneḍ email.
Tansa n IP inek n tura d $3, ID n uɛekkil d #$5.
Smekti-ten u fka-ten i unedbal-nni.",
'autoblockedtext'                  => "Tansa IP inek/inem tesewḥel s-uwurman acku d-aseqdac nniḍen i ttisexdmen. Ladɣa ula d-aseqdac agi, isewḥel-it $1.

Taɣẓint id yenna : ''$2''.

* Tazzwara n usewḥel : $8
* Taggara n usewḥel : $6
* Amiḍan i sewḥlen : $7.


Tzemreḍ ad tmeslayeḍ s $1 neɣ [[{{MediaWiki:Grouppage-sysop}}|anedbal]] nniḍen iwakken ad tsmelayem ɣef uɛekkil-nni.
Lukan ur tefkiḍ ara email saḥih deg [[Special:Preferences|isemyifiyen n wemseqdac]], ur tezmireḍ ara ad tazneḍ email.
Tansa n IP inek n tura d $3, ID n uɛekkil d #$5.
Smekti-ten u fka-ten i unedbal-nni.",
'blockedoriginalsource'            => "Aɣablu n '''$1''' hat deg ukessar:",
'blockededitsource'                => "Aḍris n '''ubeddel inek''' i '''$1''' hat deg ukessar:",
'whitelistedittitle'               => 'Yessefk ad tkecmeḍ iwakken ad tbeddleḍ',
'whitelistedittext'                => 'Yessefk ad $1 iwakken ad tbeddleḍ isebtar.',
'confirmedittext'                  => 'Yessefk ad tsentmeḍ tansa e-mail inek uqbel abeddel. Xtar tansa e-mail di [[Special:Preferences|isemyifiyen n wemseqdac]].',
'nosuchsectiontitle'               => 'Ulamek an af tigezmi',
'nosuchsectiontext'                => 'Tɛerḍeḍ ad tbeddleḍ tigezmi ur llan ara.',
'loginreqtitle'                    => 'Yessefk ad tkecmeḍ',
'loginreqlink'                     => 'Kcem',
'loginreqpagetext'                 => 'Yessefk $1 iwakken ad teẓriḍ isebtar wiyaḍ.',
'accmailtitle'                     => 'Awal n tbaḍnit yettwazen.',
'accmailtext'                      => 'Awal n tbaḍnit n "$1" yettwazen ar $2.',
'newarticle'                       => '(Amaynut)',
'newarticletext'                   => 'Tḍefreḍ azday ɣer usebter mazal ur yettwaxleq ara.
Akken ad txelqeḍ asebter-nni, aru deg tenkult i tella deg ukessar
(ẓer [[{{MediaWiki:Helppage}}|asebter n tallat]] akken ad tessneḍ kter).
Ma tɣelṭeḍ, wekki kan ɣef tqeffalt "Back/Précédent" n browser/explorateur inek.',
'anontalkpagetext'                 => "----''Wagi d asebter n umyennan n wemseqdac adrig. Ihi, yessef ad as nefk ID, nesseqdac tansa IP ines akken a t-neɛqel. Tansa IP nni ahat tettuseqdac sɣur aṭṭas n yimdanen. Lukan ula d kečč aqla-k amseqdac adrig u ur tebɣiḍ ara ad tettwabcreḍ izen am wigini, ihi [[Special:UserLogin|xleq isem n wemseqdac neɣ kcem]].''",
'noarticletext'                    => 'Ulac aḍris deg usebter-agi, tzemreḍ ad [[Special:Search/{{PAGENAME}}|tnadiḍ ɣef wezwel n usebter-agi]] deg isebtar wiyaḍ neɣ [{{fullurl:{{FULLPAGENAME}}|action=edit}} tettbeddileḍ asebter-agi].',
'clearyourcache'                   => "'''Tamawt:''' Beɛd asmekti, ahat yessefk ad temḥuḍ lkac n browser/explorateur inek akken teẓriḍ ibeddlen. '''Mozilla / Firefox / Safari:''' qqim twekkiḍ ''Shift'' u wekki ɣef ''Reload/Recharger'', neɣ wekki ɣef ''Ctrl-Shift-R'' (''Cmd-Shift-R'' deg Apple Mac); '''IE:''' qqim twekkiḍ ɣef ''Ctrl'' u wekki ɣef ''Refresh/Actualiser'', neɣ wekki ɣef ''Ctrl-F5''; '''Konqueror:''': wekki kan ɣef taqeffalt ''Reload'', neɣ wekki ɣef ''F5''; '''Opera''' yessefk ad tesseqdceḍ ''Tools→Preferences/Outils→Préférences'' akken ad temḥud akk lkac.",
'usercssyoucanpreview'             => "'''Tixidest:''' Sseqdec taqeffalt 'Ssken pre-timeẓriwt' iwakken ad tɛerḍeḍ CSS amynut inek uqbel ad tesmektiḍ.",
'userjsyoucanpreview'              => "'''Tixidest:''' Sseqdec taqeffalt 'Ssken pre-timeẓriwt' iwakken ad tɛerḍeḍ JS amynut inek uqbel ad tesmektiḍ.",
'usercsspreview'                   => "'''Smekti belli aql-ak twaliḍ CSS inek kan, mazal ur yettusmekti ara!'''",
'userjspreview'                    => "'''Smekti belli aql-ak tɛerḍeḍ JavaScript inek kan, mazal ur yettusmekti ara!'''",
'sitecsspreview'                   => "'''Smekti belli aql-ak tɛerḍeḍ asebter CSS agi inek kan.'''
'''Mazal ur yettusmekti ara!'''",
'sitejspreview'                    => "'''Smekti belli aql-ak tɛerḍeḍ angal agi JavaScript inek kan.'''
'''Mazal ur yettusmekti ara!'''",
'userinvalidcssjstitle'            => '\'\'\'Aɣtal:\'\'\' Aglim "$1" ulac-it. Ur tettuḍ ara belli isebtar ".css" d ".js" i txedmeḍ sseqdacen azwel i yesɛan isekkilen imecṭuḥen, s umedya: {{ns:user}}:Foo/vector.css akk d {{ns:user}}:Foo/Vector.css.',
'updated'                          => '(Yettubeddel)',
'note'                             => "'''Tamawt:'''",
'previewnote'                      => "'''Ttagi d azar-timeẓriwt kan, ibeddlen mazal ur ttusmektin ara!'''

'''Cfut, ttagi d azar-timeẓriwt kan.'''
Ibeddlen mazal ur ttusmektin ara!",
'previewconflict'                  => 'Pre-timeẓriwt-agi tesskan aḍris i yellan deg usawen lemmer tebɣiḍ a tt-tesmektiḍ.',
'session_fail_preview'             => "'''Suref-aɣ! ur nezmir ara a nesmekti abeddil inek axaṭer yella ugur.
G leɛnayek ɛreḍ tikelt nniḍen. Lukan mazal yella ugur, ffeɣ umbeɛd kcem.'''",
'session_fail_preview_html'        => "'''Suref-aɣ! ur nezmir ara a nesmekti abeddel inek axaṭer yella ugur.'''

''Awaṭer wiki-yagi teǧǧa HTML, teffer pre-timeẓriwt akken teǧǧanez antag n JavaScript.''

'''Lukan abeddel agi d aḥeqqani, g leɛnayek ɛreḍ tikelt nniḍen.. Lukan mazal yella ugur, ffeɣ umbeɛd kcem.'''",
'editing'                          => 'Abeddel n $1',
'editingsection'                   => 'Abeddel n $1 (amur)',
'editingcomment'                   => 'Abeddel n $1 (awennit)',
'editconflict'                     => 'Amennuɣ deg ubeddel: $1',
'explainconflict'                  => "Amdan nniḍen ibeddel asebter-agi asmi telliḍ tettbeddileḍ.
Aḍris deg usawen yesɛa asebter am yella tura.
Ibeddlen inek ahaten deg ukessar.
Yesfek ad txelṭeḍ ibeddlen inek akk d usebter i yellan.
'''Ala''' aḍris deg usawen i yettusmekta asmi twekkiḍ \"{{int:savearticle}}\".",
'yourtext'                         => 'Aḍris inek',
'storedversion'                    => 'Tasiwelt yettusmketen',
'nonunicodebrowser'                => "'''AƔTAL: Browser/Explorateur inek ur yebil ara unicode. Nexdem akken ad tzemreḍ ad tbeddleḍ mebla amihi: isekkilin i mačči ASCII ttbanen deg tankult ubeddel s ungilen hexadecimal.'''",
'editingold'                       => "'''AƔTAL: Aqlak tettbeddileḍ tasiwelt taqdimt n usebter-agi.
Ma ara t-tesmektiḍ, akk ibeddlen i yexdmen seg tasiwelt-agi ruḥen.'''",
'yourdiff'                         => 'Imgerraden',
'copyrightwarning'                 => "Ssen belli akk tikkin deg {{SITENAME}} hatent ttwaznen seddaw $2 (Ẓer $1 akken ad tessneḍ kter). Lukan ur tebɣiḍ ara aru inek yettubeddel neɣ yettwazen u yettwaru deg imkanen nniḍen, ihi ur t-tazneḍ ara dagi.<br />
Aqlak teggaleḍ belli tureḍ wagi d kečč, neɣ teddmiḍ-t seg taɣult azayez neɣ iɣbula tilelliyin.
'''UR TEFKIḌ ARA AXDAM S COPYRIGHT MEBLA TURAGT!'''",
'copyrightwarning2'                => "Ssen belli akk tikkin deg {{SITENAME}} zemren ad ttubeddlen neɣ ttumḥan sɣur imdanen wiyaḍ. Lukan ur tebɣiḍ ara aru inek yettubeddel neɣ yettwazen u yettwaru deg imkanen nniḍen, ihi ur t-tazneḍ ara dagi.<br />
Aqlak teggaleḍ belli tureḍ wagi d kečč, neɣ teddmiḍ-t seg taɣult azayez neɣ iɣbula tilelliyin (ẓer $1 akken ad tessneḍ kter).
'''UR TEFKIḌ ARA AXDAM S COPYRIGHT MEBLA TURAGT!'''",
'longpageerror'                    => "'''AGUL: Aḍris i tefkiḍ yesɛa $1 kB/ko, tiddi-yagi kter n $2 kB/ko, ur yezmir ara ad yesmekti.'''",
'readonlywarning'                  => "'''AƔTAL: Database d tamsekker akken ad teddwaxdem,
ihi ur tezmireḍ ara ad tesmektiḍ ibeddlen inek tura. Smekti aḍris inek
deg afaylu nniḍen akken tesseqdceḍ-it umbeɛd.'''",
'protectedpagewarning'             => "'''AƔTAL:  Asebter-agi yettwaḥrez, ala inedbalen zemren a t-beddlen'''",
'semiprotectedpagewarning'         => "'''Tamawt:''' Asebter-agi yettwaḥrez, ala imseqdacen i yesɛan isem n wemseqdac zemren a t-beddlen.",
'cascadeprotectedwarning'          => "'''Aɣtal:''' Asebter-agi iɛekkel iwakken ad zemren ala inedbalen a t-beddlen, axaṭer yettwassekcem deg isebtar i yettwaḥerzen agi (acercur):",
'templatesused'                    => '{{PLURAL:$1|Talɣa i seqdacen|Tilɣatin i seqdacen}} deg usebter agi :',
'templatesusedpreview'             => 'Talɣiwin ttuseqdacen deg pre-timeẓriwt-agi:',
'templatesusedsection'             => '{{PLURAL:$1|Talɣa i seqdacen|Tilɣatin i seqdacen}} deg tigezmi agi :',
'template-protected'               => '(yettwaḥrez)',
'template-semiprotected'           => '(nnefṣ-yettwaḥrez)',
'hiddencategories'                 => 'Asebter agi yella deg {{PLURAL:$1|Taggayt i ffren|Tiggayin i ffren}} agi :',
'edittools'                        => '<!-- Aḍris yettbanen-d seddaw talɣa n ubeddil d uzen. -->',
'nocreatetitle'                    => 'Axleq n isebtar meḥdud',
'nocreatetext'                     => 'Adeg n internet agi iḥedded axleq n isebtar imaynuten.
Tzemreḍ a d-uɣaleḍ u tbeddleḍ asebter i yellan, neɣ ad [[Special:UserLogin|tkecmeḍ neɣ ad txelqeḍ isem n wemseqdac]].',
'permissionserrors'                => 'Anezri n turagt',
'permissionserrorstext'            => 'Ur tesɛiḍ ara turagt iwakken ad xedmeḍ wayagi i {{PLURAL:$1|taɣẓint|tiɣẓinin}} agi :',
'permissionserrorstext-withaction' => 'Ur sɛiḍ ara ttesriḥ af $2, i {{PLURAL:$1|taɣẓint|tiɣẓinin}} agi :',
'recreate-moveddeleted-warn'       => "'''Ɣur-wet : asebter agi i tebɣam ad snulfum, yetwekkes uqbel.'''

Ilaq ad snulfum asebter agi haca ma i xater. Aɣmis n isebtaren i twekkesen yella ddaw-agi :",
'moveddeleted-notice'              => 'Asebter agi yetwekkes. Aɣmis n isebtaren i twekkesen yella ddaw agi.',

# Parser/template warnings
'post-expand-template-inclusion-warning'  => 'Ɣur-wet : Asebter agi yesɛa aṭas tilɣatin. Kra n tilɣatin ur zemrent ara ad seqdacent.',
'post-expand-template-inclusion-category' => 'Isebtaren i sɛan aṭas tilɣatin',
'post-expand-template-argument-warning'   => "'''Ɣur-wet''' : Asebter agi yesɛa tuccḍa deg aɣewwar n yiwet talɣa.",
'post-expand-template-argument-category'  => 'Isebtaren i sɛan iɣewwaren n talɣa ur skazelen ara',

# "Undo" feature
'undo-success' => 'Tzemreḍ ad tessefsuḍ abeddil. Ssenqed asidmer akken ad tessneḍ ayen tebɣiḍ ad txdmeḍ d ṣṣeḥ, umbeɛd smekti ibeddlen u tkemmleḍ ad tessefsuḍ abeddil.',
'undo-failure' => 'Ur yezmir ara ad issefu abeddel axaṭer yella amennuɣ abusari deg ubeddel.',
'undo-summary' => 'Ssefsu tasiwelt $1 sɣur [[Special:Contributions/$2|$2]] ([[User talk:$2|Meslay]])',

# Account creation failure
'cantcreateaccounttitle' => 'Ur yezmir ara ad yexleq isem n wemseqdac',

# History pages
'viewpagelogs'           => 'Ẓer aɣmis n usebter-agi',
'nohistory'              => 'Ulac amezruy n yibeddlen i usebter-agi.',
'currentrev'             => 'Tasiwelt n tura',
'currentrev-asof'        => 'Azmez n lqem taneggarut d  $1',
'revisionasof'           => 'Tasiwelt n wass $1',
'revision-info'          => 'Tasiwelt n wass $1 sɣur $2',
'previousrevision'       => '←Tasiwelt taqdimt',
'nextrevision'           => 'Tasiwelt tamaynut→',
'currentrevisionlink'    => 'Tasiwelt n tura',
'cur'                    => 'tura',
'next'                   => 'ameḍfir',
'last'                   => 'amgirred',
'page_first'             => 'amezwaru',
'page_last'              => 'aneggaru',
'histlegend'             => 'Axtiri n umgerrad: rcem tankulin akken ad teẓreḍ imgerraden ger tisiwal u wekki ɣef enter/entrée neɣ ɣef taqeffalt deg ukessar.<br />
Tabadut: (tura) = amgirred akk d tasiwelt n tura,
(amgirred) = amgirred akk d tasiwelt ssabeq, M = abeddel afessas.',
'history-fieldset-title' => 'Inig deg umazray',
'history-show-deleted'   => 'Ekkes kan',
'histfirst'              => 'Tikkin timezwura',
'histlast'               => 'Tikkin tineggura',
'historysize'            => '({{PLURAL:$1|1 atamḍan|$1 itamḍanen}})',
'historyempty'           => '(amecluc)',

# Revision feed
'history-feed-title'          => 'Amezruy n tsiwelt',
'history-feed-description'    => 'Amezruy n tsiwelt n usebter-agi deg wiki',
'history-feed-item-nocomment' => '$1 deg $2',
'history-feed-empty'          => 'Asebter i tebɣiḍ ulac-it.
Ahat yettumḥa neɣ yettbeddel isem-is.
Ɛreḍ [[Special:Search|ad tnadiḍ deg wiki]] ɣef isebtar imaynuten.',

# Revision deletion
'rev-deleted-comment'         => '(agzul n taẓrigt yettwakes)',
'rev-deleted-user'            => '(isem n wemseqdac yettwakes)',
'rev-deleted-event'           => '(asekcem yettwakkes)',
'rev-deleted-text-permission' => "Lqem n usebter agi '''tetwesfeḍ'''.
Tilɣa llant deg [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} uɣmis n usfeḍ].",
'rev-deleted-text-unhide'     => "Lqem n usebter agi '''tetwesfeḍ'''.
Tilɣa llant deg [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} uɣmis n usfeḍ].
Tzemreḍ meqqar [$1 ad ẓṛeḍ lqem agi]  ma tebɣiḍ",
'rev-suppressed-text-unhide'  => "Lqem n usebter agi '''tetwekkes'''.
Tilɣa llant deg [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} uɣmis n umḥu].
Tzemreḍ meqqar [$1 ad ẓṛeḍ lqem agi]  ma tebɣiḍ",
'rev-deleted-text-view'       => "Lqem n usebter agi '''tetwesfeḍ'''.
Tzemreḍ att ẓṛeḍ ; tilɣa llant deg [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} uɣmis n usfeḍ].",
'rev-suppressed-text-view'    => "Lqem n usebter agi '''tetwekkes'''.
Tzemreḍ att ẓṛeḍ ; tilɣa llant deg [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} uɣmis n umḥu].",
'rev-deleted-no-diff'         => "Ur tzemreḍ ara ad ẓṛeḍ \"diff\" agi acku yiwet n lqem-is '''tetwesfeḍ'''.
Tilɣa llant deg [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} uɣmis n usfeḍ].",
'rev-suppressed-no-diff'      => "Ur tzemreḍ ara ad ẓṛeḍ \"diff\" agi acku yiwet n lqem-is '''tetwekkes'''.",
'rev-deleted-unhide-diff'     => "Yiwen lqem n tameẓla agi '''yetwesfeḍ'''.
Tilɣa llant deg [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} uɣmis n usfeḍ].
Tzemreḍ meqqar [$1 ad ẓṛeḍ tameẓla agi] ma tebɣiḍ",
'rev-suppressed-unhide-diff'  => "Yiwen lqem n tameẓla agi '''yetwekkes'''.
Tilɣa llant deg [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} uɣmis n umḥu].
Tzemreḍ meqqar [$1 ad ẓṛeḍ tameẓla agi] ma tebɣiḍ",
'rev-deleted-diff-view'       => "Yiwen lqem n \"diff\" agi '''yetwekkes'''.
Tzemreḍ att ẓṛeḍ ; tilɣa llant deg [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} uɣmis n umḥu].",
'rev-suppressed-diff-view'    => "Yiwen lqem n \"diff\" agi '''yetwesfeḍ'''.
Tzemreḍ att ẓṛeḍ ; tilɣa llant deg [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} uɣmis n usfeḍ].",
'rev-delundel'                => 'ssken/ffer',
'rev-showdeleted'             => 'Ssken',
'revisiondelete'              => 'Mḥu/kkes amḥay tisiwal',
'revdelete-nooldid-title'     => 'Lqem asaḍas ur i ɣbel ara',
'revdelete-nooldid-text'      => 'Ur textareḍ ara lqem nnican akken ad txedmeḍ tawuri fell-as.',
'revdelete-show-file-submit'  => 'Ih',
'revdelete-selected'          => "'''{{PLURAL:$2|Tasiwelt tettwafren|Tisiwal ttwafernen}} n [[:$1]]'''",
'logdelete-selected'          => "'''{{PLURAL:$1|Tamirt n uɣmis tettwafren|Isallen n uɣmis ttwafernen}}:'''",
'revdelete-text'              => 'Ileqman d tidyanin yettumḥan ad qqimen deg umezruy n usebter dɣa deg iɣmisen, maca agbur nsen ur i sɛu ara tuffart i uzayez."
Inedbalen wiyaḍ deg {{SITENAME}} zemren ad ẓṛen imuren i yettwafren u zemren a ten-mḥan, ḥaca ma llan icekkilen.',
'revdelete-legend'            => 'Sbebd akref n tamuɣli',
'revdelete-hide-text'         => 'Ffer aḍris n tsiwelt',
'revdelete-hide-image'        => 'Ffer ayen yellan deg ufaylu',
'revdelete-hide-name'         => 'Ffer tigawt d nnican',
'revdelete-hide-comment'      => 'Ffer abeddel n uwennit',
'revdelete-hide-user'         => 'Ffer Isem n wemseqdac/IP n umeskar',
'revdelete-hide-restricted'   => 'Mḥu isefka agi i inedbalen d yimdanen wiyaḍ',
'revdelete-radio-set'         => 'Ih',
'revdelete-radio-unset'       => 'Ala',
'revdelete-suppress'          => 'Kkes talɣut seg inedbalen d yimdanen wiyaḍ',
'revdelete-unsuppress'        => 'Kkes icekkilen ɣef tisiwal i yuɣalen-d',
'revdelete-log'               => 'Ayɣer',
'revdelete-submit'            => 'Snes {{PLURAL:$1|i tacaggart i tettwafren|i ticggarin i tettwafren}}',
'revdelete-logentry'          => 'asekkud n tasiwelt tettubeddel i  [[$1]]',
'logdelete-logentry'          => 'asekkud n tamirt tettubeddel i [[$1]]',
'revdelete-success'           => "''Asekkud n ileqman yemucce war uguren.'''",
'logdelete-success'           => "'''Asekkud n tamirt yettuxdem.'''",
'revdel-restore'              => 'beddel timezrit',
'revdel-restore-deleted'      => 'allas iqḍeεen',
'revdel-restore-visible'      => 'allas i nezmer an ẓeṛ',
'pagehist'                    => 'Amezruy n usebter',
'revdelete-uname'             => 'isem n useqdac',
'revdelete-log-message'       => '$1 i $2 {{PLURAL:$2|lqem|ileqman}}',

# History merging
'mergehistory-reason' => 'Ayɣer',

# Merge log
'revertmerge' => 'Fru',

# Diffs
'history-title'           => 'Tiẓṛi tiss sint umezruy n "$1"',
'difference'              => '(Imgerraden ger tisiwal)',
'lineno'                  => 'Ajerriḍ $1:',
'compareselectedversions' => 'Ẓer imgerraden ger tisiwal i textareḍ',
'editundo'                => 'ssefsu',
'diff-multi'              => '({{PLURAL:$1|Yiwet tasiwelt tabusarit|$1 n tisiwal tibusarin}} af {{PLURAL:$2|amseqdac|$2 imseqdacen}} {{PLURAL:$1|ur ttumlal ara|ur ttumlalent ara}})',

# Search results
'searchresults'                    => 'Igmad n unadi',
'searchresults-title'              => 'Igmad n unadi i "$1"',
'searchresulttext'                 => 'Akken ad tessneḍ amek ara tnadiḍ deg {{SITENAME}}, ẓer [[{{MediaWiki:Helppage}}|{{int:help}}]].',
'searchsubtitle'                   => "Tnadiḍ ɣef '''[[:$1]]'''",
'searchsubtitleinvalid'            => "Tnadiḍ ɣef '''$1'''",
'titlematches'                     => 'Ayen yecban azwel n umegrad',
'notitlematches'                   => 'Ulac ayen yecban azwel n umegrad',
'textmatches'                      => 'Ayen yecban azwel n usebter',
'notextmatches'                    => 'ulac ayen yecban azwel n usebter',
'prevn'                            => '{{PLURAL:$1|$1}} ssabeq',
'nextn'                            => '{{PLURAL:$1|$1}} ameḍfir',
'prevn-title'                      => '$1 {{PLURAL:$1|agmud n uqbel|igmad n uqbel}}',
'nextn-title'                      => '$1 {{PLURAL:$1|agmud n sakin|igmad n sakin}}',
'shown-title'                      => 'Beqqeḍ $1 {{PLURAL:$1|agmud|igmad}} s usebter',
'viewprevnext'                     => 'Ẓer ($1 {{int:pipe-separator}} $2) ($3).',
'searchmenu-exists'                => "'''Yella asebter s isem \"[[:\$1]]\" deg wiki agi.'''",
'searchmenu-new'                   => "'''Snulfud asebter « [[:$1|$1]] » deg wiki agi !'''",
'searchhelp-url'                   => 'Help:Agbur',
'searchprofile-articles'           => 'Isebtaren n ugbur',
'searchprofile-project'            => 'Isebtaren n tallat dɣa n usenfa',
'searchprofile-images'             => 'Agetmedia',
'searchprofile-everything'         => 'Akk',
'searchprofile-advanced'           => 'Anadi anemhal',
'searchprofile-articles-tooltip'   => 'Nadi deg $1',
'searchprofile-project-tooltip'    => 'Nadi deg $1',
'searchprofile-images-tooltip'     => 'Nadi  ifuyla agetmedia',
'searchprofile-everything-tooltip' => 'Nadi deg akk usmel (ula deg isebtaren n umyannan)',
'searchprofile-advanced-tooltip'   => 'Fren ideggen n isemawen i unadi',
'search-result-size'               => '$1 ({{PLURAL:$2|1 awal|$2 awalen}})',
'search-result-category-size'      => '$1 {{PLURAL:$1|amseqdac|imseqdacen}} $2 ({{PLURAL:$2|adu-taggayt|adu-tiggayin}}, $3 {{PLURAL:$3|afaylu|ifuyla}})',
'search-redirect'                  => '(asemmimeḍ $1)',
'search-section'                   => '(tigezmi $1)',
'search-suggest'                   => 'D awal $1 i tnadiḍ ?',
'search-relatedarticle'            => 'Amassaɣ',
'searchrelated'                    => 'ineqqes',
'searchall'                        => 'akk',
'showingresults'                   => "Tamuli n {{PLURAL:$1|'''Yiwen''' wegmud|'''$1''' n yigmad}} seg  #'''$2'''.",
'showingresultsnum'                => "Tamuli n {{PLURAL:$3|'''Yiwen''' wegmud|'''$3''' n yigmad}} seg  #'''$2'''.",
'showingresultsheader'             => "{{PLURAL:$5|Agmud '''$1'''|Igmad '''$1–$2'''}} n '''$3''' i '''$4'''",
'nonefound'                        => "'''Tamawt''': S umata, asmi ur tufiḍ acemma
d ilmen awalen am \"ala\" and \"seg\",
awalen-agi mačči deg tasmult, neɣ tefkiḍ kter n yiwen n wawal (ala isebtar
i yesɛan akk awalen i banen-d).",
'search-nonefound'                 => 'Ulac igmad i usuter agi.',
'powersearch'                      => 'Nadi',
'searchdisabled'                   => 'Anadi deg {{SITENAME}} yettwakkes. Tzemreḍ ad tnadiḍ s Google. Meɛna ur tettuḍ ara, tasmult n google taqdimt.',

# Quickbar
'qbsettings'               => 'Tanuga taǧiḥbuṭ',
'qbsettings-none'          => 'Ulaḥedd',
'qbsettings-fixedleft'     => 'Aẓelmaḍ',
'qbsettings-fixedright'    => 'Ayeffus',
'qbsettings-floatingleft'  => 'Tufeg aẓelmaḍ',
'qbsettings-floatingright' => 'Tufeg ayeffus',

# Preferences page
'preferences'               => 'Isemyifiyen',
'mypreferences'             => 'Isemyifiyen inu',
'prefsnologin'              => 'Ur tekcimeḍ ara',
'prefsnologintext'          => 'Yessefk ad [[Special:UserLogin|tkecmeḍ]] iwakken textareḍ isemyifiyen inek.',
'changepassword'            => 'Beddel awal n tbaḍnit',
'prefs-skin'                => 'Aglim',
'skin-preview'              => 'Pre-timeẓriwt',
'datedefault'               => 'Ur sɛiɣ ara asemyifi',
'prefs-datetime'            => 'Azemz d ukud',
'prefs-personal'            => 'Profile n wemseqdac',
'prefs-rc'                  => 'Ibeddlen imaynuten',
'prefs-watchlist'           => 'Umuɣ n uɛessi',
'prefs-watchlist-days'      => 'Geddac n wussan yessefk ad banen deg wumuɣ n uɛessi:',
'prefs-watchlist-edits'     => 'Geddac n yibeddlen yessefk ad banen deg wumuɣ n uɛessi ameqqran:',
'prefs-misc'                => 'Isemyifiyen wiyaḍ',
'prefs-resetpass'           => 'Beddel awal n uɛaddi',
'saveprefs'                 => 'Smekti',
'resetprefs'                => 'Reset/réinitialiser isemyifiyen',
'prefs-editing'             => 'Abedddil',
'rows'                      => 'Ijerriḍen:',
'columns'                   => 'Tigejda:',
'searchresultshead'         => 'Anadi',
'resultsperpage'            => 'Geddac n tiririyin i mkul asebter:',
'recentchangescount'        => 'Geddac n izwal deg ibeddilen imaynuten:',
'savedprefs'                => 'Isemyifiyen inek yettusmektan.',
'timezonelegend'            => 'Iẓḍi n ukud',
'localtime'                 => 'Akud inek',
'timezoneoffset'            => 'Amgirred n ukud',
'servertime'                => 'Akud n server',
'guesstimezone'             => 'Sseqdec azal n browser/explorateur',
'timezoneregion-america'    => 'Tamrikt',
'timezoneregion-antarctica' => 'Antarktik',
'timezoneregion-arctic'     => 'Arktik',
'timezoneregion-asia'       => 'Asya',
'timezoneregion-atlantic'   => "Agaraw At'lasi",
'timezoneregion-australia'  => 'Usṭralya',
'timezoneregion-europe'     => 'Turuft',
'allowemail'                => 'Eǧǧ imseqdacen wiyaḍ a k-aznen email',
'defaultns'                 => 'Nadi deg yismawen n taɣult s umeslugen:',
'default'                   => 'ameslugen',
'prefs-files'               => 'Ifayluwen',
'youremail'                 => 'E-mail *:',
'username'                  => 'Isem n wemseqdac:',
'uid'                       => 'Amseqdac ID:',
'yourrealname'              => 'Isem n ṣṣeḥ *:',
'yourlanguage'              => 'Tutlayt:',
'yourvariant'               => 'Ameskil:',
'yournick'                  => 'Isem wis sin (mačči d amenṣib):',
'badsig'                    => 'Azmul mačči d ṣaḥiḥ; Ssenqed tags n HTML.',
'prefs-help-realname'       => '* Isem n ṣṣeḥ (am tebɣiḍ): ma textareḍ a t-tefkeḍ, ad yettuseqdac iwakken ad snen medden anwa yura tikkin inek.',
'prefs-help-email'          => '* E-mail (am tebɣiḍ): Teǧǧi imseqdacen wiyaḍ a k-aznen email mebla ma ẓren tansa email inek.',
'prefs-help-email-others'   => 'Zemreḍ ad eǧǧeḍ wiyeḍ nniḍen ak(akem) cceqɛen izen deg usebter-ik (im) n umyannan war ad effekeḍ tamagit-ik (im).',

# User rights
'userrights'               => 'Laɛej iserfan n wemseqdac',
'userrights-lookup-user'   => 'Laɛej iderman n yimseqdacen',
'userrights-user-editname' => 'Ssekcem isem n wemseqdac:',
'editusergroup'            => 'Beddel iderman n yimseqdacen',
'editinguser'              => "Abeddel n wemseqdac '''[[User:$1|$1]]''' ([[User talk:$1|{{int:talkpagelinktext}}]] | [[Special:Contributions/$1|{{int:contribslink}}]])",
'userrights-editusergroup' => 'Beddel iderman n wemseqdac',
'saveusergroups'           => 'Smekti iderman n yimseqdacen',
'userrights-groupsmember'  => 'Amaslad deg:',
'userrights-reason'        => 'Ayɣer',

# Groups
'group'       => 'Adrum:',
'group-sysop' => 'Inedbalen',
'group-all'   => '(akk)',

'group-sysop-member' => 'Anedbal',

'grouppage-sysop' => '{{ns:project}}:Inedbalen',

# User rights log
'rightslog'      => 'Aɣmis n yizerfan n wemseqdac',
'rightslogtext'  => 'Wagi d aɣmis n yibeddlen n yizerfan n wemseqdac',
'rightslogentry' => 'Yettubeddel izerfan n wemseqdac $1 seg $2 ar $3',
'rightsnone'     => '(ulaḥedd)',

# Associated actions - in the sentence "You do not have permission to X"
'action-edit' => 'beddel asebter agi',

# Recent changes
'nchanges'                          => '$1 {{PLURAL:$1|Abeddel|Ibeddlen}}',
'recentchanges'                     => 'Ibeddlen imaynuten',
'recentchanges-legend'              => 'Tifranin n ibeddilen imaynuten',
'recentchangestext'                 => 'Ḍfer ibeddilen imaynuten n {{SITENAME}}.',
'recentchanges-feed-description'    => 'Ḍfer ibeddilen imaynuten n wiki-yagi deg usuddem-agi.',
'recentchanges-label-newpage'       => 'Abeddel agi ad yesnulfu asebter amaynut',
'recentchanges-label-minor'         => 'Wagi d-abeddel amectuḥ',
'recentchanges-label-bot'           => 'D-arubut id yeseqdacen abeddel agi',
'recentchanges-label-unpatrolled'   => 'Abeddel agi mazal yesɛa aselken.',
'rcnote'                            => "Deg ukessar {{PLURAL:$1|yella '''yiwen''' ubeddel aneggaru|llan '''$1''' n yibeddlen ineggura}} deg {{PLURAL:$2|wass aneggaru|'''$2''' wussan ineggura}}, deg uzemz $5 ass n $4.",
'rcnotefrom'                        => "Deg ukessar llan ibeddlen seg wasmi '''$2''' (ar '''$1''').",
'rclistfrom'                        => 'Ssken ibeddlen imaynuten seg $1',
'rcshowhideminor'                   => '$1 ibeddlen ifessasen',
'rcshowhidebots'                    => '$1 irubuten',
'rcshowhideliu'                     => '$1 n yimseqdacen i ikecmen',
'rcshowhideanons'                   => '$1 n yimseqdacen udrigen',
'rcshowhidepatr'                    => '$1 n yibeddlen yettwassenqden',
'rcshowhidemine'                    => '$1 ibeddlen inu',
'rclinks'                           => 'Ssken $1 n yibeddlen ineggura di $2 n wussan ineggura<br />$3',
'diff'                              => 'amgirred',
'hist'                              => 'Amezruy',
'hide'                              => 'Ffer',
'show'                              => 'Ssken',
'minoreditletter'                   => 'm',
'newpageletter'                     => 'N',
'boteditletter'                     => 'b',
'number_of_watching_users_pageview' => '[$1 aɛessas/iɛessasen]',
'rc_categories'                     => 'Ḥedded i taggayin (ferreq s "|")',
'rc_categories_any'                 => 'Ulayɣer',
'rc-enhanced-expand'                => 'Ẓeṛ tilɣa (yeḥwaǧ JavaScript)',
'rc-enhanced-hide'                  => 'Ffer tilɣa',

# Recent changes linked
'recentchangeslinked'          => 'Ibeddlen imaynuten n isebtar myezdin',
'recentchangeslinked-feed'     => 'Ibeddlen imaynuten n isebtar myezdin',
'recentchangeslinked-toolbox'  => 'Ibeddlen imaynuten n isebtar myezdin',
'recentchangeslinked-title'    => 'Tiḍefri n isebtaren iqqenen ar « $1 »',
'recentchangeslinked-noresult' => 'Ulac abeddel deg isebtar myezdin deg tawala i textareḍ.',
'recentchangeslinked-summary'  => "Asebter uslig agi i sekned ibeddlen imaynuten ɣef isebtaren iqqenen. Isebtaren n [[Special:Watchlist|umuɣ n uḍfar]] llan s '''ufuyan'''.",
'recentchangeslinked-page'     => 'Isen n usebter :',
'recentchangeslinked-to'       => 'Beqqeḍ ibeddilen n isebtareb i sɛan azday ɣer asebter nni wala anemgal',

# Upload
'upload'                      => 'Azen afaylu',
'uploadbtn'                   => 'Azen afaylu',
'reuploaddesc'                => 'Uɣal-d ar talɣa n tuznin.',
'uploadnologin'               => 'Ur tekcimeḍ ara',
'uploadnologintext'           => 'Yessefk [[Special:UserLogin|ad tkecmeḍ]]
iwakken ad tazneḍ afaylu.',
'upload_directory_read_only'  => 'Weserver/serveur Web ur yezmir ara ad yaru deg ($1).',
'uploaderror'                 => 'Agul deg usekcam',
'uploadtext'                  => "Sseqdec talɣa deg ukessar akken ad tazeneḍ tugnawin, akken ad teẓred neɣ ad tnadiḍ tugnawin yettwaznen, ruḥ ɣer [[Special:FileList|umuɣ n usekcam n tugnawin]], Amezruy n usekcam d umḥay hatent daɣen deg [[Special:Log/upload|amezruy n usekcam]].

Akken ad tessekcmeḍ tugna deg usebter, seqdec azay am wagi
'''<nowiki>[[</nowiki>{{ns:file}}<nowiki>:Afaylu.jpg]]</nowiki>''',
'''<nowiki>[[</nowiki>{{ns:file}}<nowiki>:Afaylu.png|aḍris]]</nowiki>''' neɣ
'''<nowiki>[[</nowiki>{{ns:media}}<nowiki>:Afaylu.ogg]]</nowiki>''' akken ad iruḥ wezday qbala ar ufaylu.",
'uploadlog'                   => 'amezruy n usekcam',
'uploadlogpage'               => 'Amezruy n usekcam',
'uploadlogpagetext'           => 'Deg ukessar, yella wumuɣ n usekcam n ufayluwen imaynuten.',
'filename'                    => 'Isem n ufaylu',
'filedesc'                    => 'Agzul',
'fileuploadsummary'           => 'Agzul:',
'filestatus'                  => 'Aẓayer n copyright:',
'filesource'                  => 'Seg way yekka',
'uploadedfiles'               => 'Ifuyla yettwaznen',
'ignorewarning'               => 'Ttu aɣtal u smekti afaylu',
'ignorewarnings'              => 'Ttu iɣtalen',
'illegalfilename'             => 'Isem n ufaylu "$1" yesɛa isekkilen ur tettalaseḍ ara a ten-tesseqdceḍ deg yizwal n isebtar. G leɛnayek beddel isem n ufaylu u azen-it tikkelt nniḍen.',
'badfilename'                 => 'Isem ufaylu yettubeddel ar "$1".',
'filetype-badmime'            => 'Ur tettalaseḍ ara ad tazneḍ ufayluwen n anaw n MIME "$1".',
'filetype-missing'            => 'Afaylu ur yesɛi ara taseggiwit (am ".jpg").',
'large-file'                  => 'Ilaq tiddi n ufayluwen ur tettili kter n $1; tiddi n ufaylu-agi $2.',
'largefileserver'             => 'Afaylu meqqer aṭṭas, server ur t-yeqbil ara.',
'emptyfile'                   => 'Afaylu i tazneḍ d ilem. Waqila tɣelṭeḍ deg isem-is. G leɛnayek ssenqed-it.',
'fileexists'                  => 'Afaylu s yisem-agi yewǧed yagi, ssenqed <strong>[[:$1]]</strong> ma telliḍ mačči meḍmun akken a t-tbeddleḍ.
[[$1|thumb]]',
'fileexists-extension'        => 'Afaylu s yisem-agi yewǧed: [[$2|thumb]]
* Isem n ufaylu i tazneḍ: <strong>[[:$1]]</strong>
* Isem n ufaylu i yewǧed: <strong>[[:$2]]</strong>
Amgirred i yella kan deg isekkilen imecṭuḥen/imeqqranen deg taseggiwit (am ".jpg"/".jPg"). G leɛnayek ssenqed-it.',
'fileexists-thumbnail-yes'    => "Iban-d belli tugna-nni d tugna tamecṭuht n tugna nniḍen ''(thumbnail)''. [[$1|thumb]]
G leɛnayek ssenqed tugna-agi <strong>[[:$1]]</strong>.
Ma llant kif-kif ur tt-taznepd ara.",
'file-thumbnail-no'           => "Isem n tugna yebda s <strong>$1</strong>. Waqila tugna-nni d tugna tamecṭuht n tugna nniḍen ''(thumbnail)''.
Ma tesɛiḍ tugna-nni s resolution tameqqrant, azen-it, ma ulac beddel isem-is.",
'fileexists-forbidden'        => 'Tugna s yisem kif-kif tewǧed yagi; g leɛnayek uɣal u beddel isem-is. [[File:$1|thumb|center|$1]]',
'fileexists-shared-forbidden' => 'Tugna s yisem kif-kif tewǧed yagi; g leɛnayek uɣal u beddel isem-is. [[File:$1|thumb|center|$1]]',
'uploadwarning'               => 'Aɣtal deg wazan n ufayluwen',
'savefile'                    => 'Smekti afaylu',
'uploadedimage'               => '"[[$1]]" yettwazen',
'uploaddisabled'              => 'Suref-aɣ, azen n ufayluwen yettwakkes',
'uploaddisabledtext'          => 'Azen n ufayluwen yettwakkes deg wiki-yagi',
'uploadscripted'              => 'Afaylu-yagi yesɛa angal n HTML/script i yexdem agula deg browser/explorateur.',
'uploadvirus'                 => 'Afaylu-nni yesɛa anfafad asenselkim (virus)! Ẓer kter: $1',
'sourcefilename'              => 'And yella afyalu',
'destfilename'                => 'Anda iruḥ afaylu',
'watchthisupload'             => 'Ɛass asebter-agi',
'filewasdeleted'              => 'Afaylu s yisem-agi yettwazen umbeɛd yettumḥa. Ssenqed $1 qbel ad tazniḍ tikelt nniḍen.',
'upload-success-subj'         => 'Azen yekfa',

'upload-proto-error'      => 'Agul deg protokol',
'upload-proto-error-text' => 'Assekcam yenṭerr URL i yebdan s <code>http://</code> neɣ <code>ftp://</code>.',
'upload-file-error'       => 'Agul zdaxel',
'upload-file-error-text'  => 'Agul n daxel yeḍran asmi yeɛreḍ ad yexleq afaylu temporaire deg server.  G leɛnayek, meslay akk d unedbal n system.',
'upload-misc-error'       => 'Agul mačči mechur asmi yettwazen ufaylu',
'upload-misc-error-text'  => 'Agul mačči mechur teḍra asmi yettwazen afaylu.  G leɛnayek sseqed belli URL d ṣaḥiḥ u ɛreḍ tikelt nniḍen.  Ma yella daɣen wagul, mmeslay akk d unedbal n system.',

# Some likely curl errors. More could be added from <http://curl.haxx.se/libcurl/c/libcurl-errors.html>
'upload-curl-error6'       => 'Ur yezmir ara ad yessglu URL',
'upload-curl-error6-text'  => 'Ur yezmir ara ad yessglu URL.  Ssenqed URL-nni.',
'upload-curl-error28'      => 'Yekfa wakud n wazen n ufaylu',
'upload-curl-error28-text' => 'Adeg n internet-agi iɛetṭel aṭas. G leɛnayek ssenqed adeg-nni, ggun cwiṭ umbeɛd ɛreḍ tikelt nniḍen.',

'license'            => 'Turagt',
'license-header'     => 'Turagt',
'nolicense'          => 'Ur textareḍ acemma',
'upload_source_url'  => ' (URL saḥiḥ)',
'upload_source_file' => ' (afaylu deg uselkim inek)',

# Special:ListFiles
'listfiles_search_for'  => 'Nadi ɣef yisem n tugna:',
'imgfile'               => 'afaylu',
'listfiles'             => 'Umuɣ n tugniwin',
'listfiles_date'        => 'Azemz',
'listfiles_name'        => 'Isem',
'listfiles_user'        => 'Amseqdac',
'listfiles_size'        => 'Tiddi (bytes/octets)',
'listfiles_description' => 'Aglam',

# File description page
'file-anchor-link'          => 'Afaylu',
'filehist'                  => 'Amazray n tugna',
'filehist-help'             => 'Senned ɣef yiwen azmez d usrag iwakken ad ẓṛeḍ afaylu aken yella deg imir nni.',
'filehist-revert'           => 'Uɣal ar tasiwelt ssabeq',
'filehist-current'          => 'Lux a',
'filehist-datetime'         => 'Azmez/Asrag',
'filehist-thumb'            => 'Tugna tamecṭuḥt',
'filehist-thumbtext'        => 'Tugna tamectuḥt i lqem n $1',
'filehist-user'             => 'Amseqdac',
'filehist-dimensions'       => 'Iseggiwen',
'filehist-comment'          => 'Awennit',
'imagelinks'                => 'Izdayen',
'linkstoimage'              => '{{PLURAL:$1|Asebter agi teseqdac|$1 isebtaren agi teseqdacen}} afaylu agi :',
'nolinkstoimage'            => 'Ulaḥedd seg isebtar sɛan azday ar afaylu-agi.',
'sharedupload'              => 'Afaylu-yagi yettuseqdac sɣur wiki tiyaḍ.',
'sharedupload-desc-here'    => 'Afaylu agi yusad seg : $1. Ahat yeseqdec deg isenfaṛen nniḍen.
Aglam-is ɣef [$2 asebter n aglam] ye beqqeḍ ddaw-agi.',
'uploadnewversion-linktext' => 'tazneḍ tasiwelt tamaynut n ufaylu-yagi',

# MIME search
'mimesearch'         => 'Anadi n MIME',
'mimesearch-summary' => 'Asebter-agi yeǧǧa astay n ifayluwen n unaw n MIME ines. Asekcem: ayen yella/anaw azellum, e.g. <code>tugna/jpeg</code>.',
'mimetype'           => 'Anaw n MIME:',
'download'           => 'Ddem-it ɣer uselkim inek',

# Unwatched pages
'unwatchedpages' => 'Isebtar mebla iɛessasen',

# List redirects
'listredirects' => 'Umuɣ isemmimḍen',

# Unused templates
'unusedtemplates'     => 'Talɣiwin mebla aseqdac',
'unusedtemplatestext' => 'Asebter-agi yesɛa umuɣ n akk isebtar n isem n taɣult s yisem "talɣa" iwumi ulac-iten deg ḥedd asebter. Ur tettuḍ ara ad tessenqdeḍ isebtar n talɣa wiyaḍ qbel ad temḥuḍ.',
'unusedtemplateswlh'  => 'izdayen wiyaḍ',

# Random page
'randompage'         => 'Asebter menwala',
'randompage-nopages' => 'Ulac isebtar deg isem n taɣult agi.',

# Random redirect
'randomredirect' => 'Asemmimeḍ menwala',

# Statistics
'statistics'              => 'Tisnaddanin',
'statistics-header-users' => 'Tisnaddanin n wemseqdac',
'statistics-mostpopular'  => 'isebtar mmeẓren aṭṭas',

'disambiguations'      => 'isebtar n usefham',
'disambiguationspage'  => 'Template:Asefham',
'disambiguations-text' => "Isebtar-agi sɛan azday ɣer '''usebter n usefham'''. Yessefk ad sɛun azday ɣer wezwel ṣaḥiḥ mačči ɣer usebter n usefham.",

'doubleredirects'     => 'Asemmimeḍ yeḍra snat tikwal',
'doubleredirectstext' => 'Mkull ajerriḍ yesɛa azday ɣer asmimeḍ amezwaru akk d wis sin, ajerriḍ amezwaru n uḍris n usebter wis sin daɣen, iwumi yefkan asmimeḍ ṣaḥiḥ i yessefk ad sɛan isebtar azday ɣur-s.',

'brokenredirects'        => 'Isemmimḍen imerẓa',
'brokenredirectstext'    => 'Isemmimḍen-agi sɛan izdayen ar isebtar ulac-iten:',
'brokenredirects-edit'   => 'beddel',
'brokenredirects-delete' => 'mḥu',

'withoutinterwiki'         => 'isebtar mebla izdayen ar isebtar n wikipedia s tutlayin tiyaḍ',
'withoutinterwiki-summary' => 'isebtar-agi ur sɛan ara izdayen ar isebtar n wikipedia s tutlayin tiyaḍ:',

# Miscellaneous special pages
'nbytes'                  => '$1 {{PLURAL:$1|byte/octet|bytes/octets}}',
'ncategories'             => '$1 {{PLURAL:$1|Taggayt|Taggayin}}',
'nlinks'                  => '$1 {{PLURAL:$1|azday|izdayen}}',
'nmembers'                => '$1 {{PLURAL:$1|amaslad|imasladen}}',
'nrevisions'              => '$1 {{PLURAL:$1|tasiwelt|tisiwal}}',
'nviews'                  => '$1 {{PLURAL:$1|timeẓriwt|tuẓrin}}',
'specialpage-empty'       => 'Asebter-agi d ilem.',
'lonelypages'             => 'isebtar igujilen',
'lonelypagestext'         => 'isebtar-agi ur myezdin ara seg isebtar wiyaḍ deg wiki-yagi.',
'uncategorizedpages'      => 'isebtar mebla taggayt',
'uncategorizedcategories' => 'Taggayin mebla taggayt',
'uncategorizedimages'     => 'Tugna mebla taggayt',
'uncategorizedtemplates'  => 'Talɣiwin mebla taggayt',
'unusedcategories'        => 'Taggayin ur nettwaseqdac ara',
'unusedimages'            => 'Ifayluwin ur nettwaseqdac ara',
'popularpages'            => 'Isebtar iɣerfanen',
'wantedcategories'        => 'Taggayin mmebɣant',
'wantedpages'             => 'Isebtar mmebɣan',
'mostlinked'              => 'Isebtar myezdin aṭas',
'mostlinkedcategories'    => 'Taggayin myezdint aṭas',
'mostcategories'          => 'Isebtar i yesɛan aṭṭas taggayin',
'mostimages'              => 'Tugniwin myezdin aṭas',
'mostrevisions'           => 'Isebtar i yettubedlen aṭas',
'prefixindex'             => 'Akk isebtaren s yisekkilen imezwura',
'shortpages'              => 'isebtar imecṭuḥen',
'longpages'               => 'Isebtar imeqqranen',
'deadendpages'            => 'isebtar mebla izdayen',
'deadendpagestext'        => 'isebtar-agi ur sɛan ara azday ɣer isebtar wiyaḍ deg wiki-yagi.',
'protectedpages'          => 'isebtar yettwaḥerzen',
'protectedpagestext'      => 'isebtar-agi yettwaḥerzen seg ubeddel neɣ asemmimeḍ',
'protectedpagesempty'     => 'isebtar-agi ttwaḥerzen s imsektayen -agi.',
'listusers'               => 'Umuɣ n yimseqdacen',
'newpages'                => 'isebtar imaynuten',
'newpages-username'       => 'Isem n wemseqdac:',
'ancientpages'            => 'isebtar iqdimen',
'move'                    => 'Smimeḍ',
'movethispage'            => 'Smimeḍ asebter-agi',
'unusedimagestext'        => 'Ssen belli ideggen n internet sɛan izdayen ɣer tugna-agi s URL n qbala, ɣas akken tugna-nni hatt da.',
'unusedcategoriestext'    => 'Taggayin-agi weǧden meɛna ulac isebtar neɣ taggayin i sseqdacen-iten.',
'notargettitle'           => 'Ulac nnican',
'notargettext'            => 'Ur textareḍ ara asebter d nnican neɣ asebter n wemseqdac d nnican.',
'pager-newer-n'           => '{{PLURAL:$1|amaynut|$1 imaynuten}}',
'pager-older-n'           => '{{PLURAL:$1|aqbur|$1 iqburen}}',

# Book sources
'booksources'               => 'Iɣbula n yidlisen',
'booksources-search-legend' => 'Nadi ɣef iɣbula n yidlisen',
'booksources-go'            => 'Ruḥ',
'booksources-text'          => 'Deg ukessar, yella wumuɣ n yizdayen iberraniyen izzenzen idlisen (imaynuten akk d weqdimen), yernu ahat sɛan kter talɣut ɣef idlisen i tettnadiḍ fell-asen:',

# Special:Log
'specialloguserlabel'  => 'Amseqdac:',
'speciallogtitlelabel' => 'Azwel:',
'log'                  => 'Aɣmis',
'all-logs-page'        => 'Akk iɣmisen',
'alllogstext'          => 'Ssken akk iɣmisen n {{SITENAME}}.
Tzemreḍ ad textareḍ cwiṭ seg-sen ma tebɣiḍ.',
'logempty'             => 'Ur yufi ara deg uɣmis.',
'log-title-wildcard'   => 'Nadi ɣef izwal i yebdan s uḍris-agi',

# Special:AllPages
'allpages'          => 'Akk isebtar',
'alphaindexline'    => '$1 ar $2',
'nextpage'          => 'Asebter ameḍfir ($1)',
'prevpage'          => 'Asebter ssabeq ($1)',
'allpagesfrom'      => 'Ssken isebtar seg:',
'allarticles'       => 'Akk imagraden',
'allinnamespace'    => 'Akk isebtar ($1 isem n taɣult)',
'allnotinnamespace' => 'Akk isebtar (mačči deg $1 isem n taɣult)',
'allpagesprev'      => 'Ssabeq',
'allpagesnext'      => 'Ameḍfir',
'allpagessubmit'    => 'Ruḥ',
'allpagesprefix'    => 'Ssken isebtar s uzwir:',
'allpagesbadtitle'  => 'Azwel n usebter mačči ṣaḥiḥ neɣ yesɛa azwir inter-wiki. Waqila yesɛa isekkilen ur ttuseqdacen ara deg izwal.',
'allpages-bad-ns'   => '{{SITENAME}} ur yesɛi ara isem n taɣult "$1".',

# Special:Categories
'categories'         => 'Taggayin',
'categoriespagetext' => 'Llant taggayin-agi deg wiki-yagi.
[[Special:UnusedCategories|Unused categories]] are not shown here.
Also see [[Special:WantedCategories|wanted categories]].',

# Special:LinkSearch
'linksearch-line' => '$1 yeqqen seg $2',

# Special:ListUsers
'listusersfrom'      => 'Ssken imseqdacen seg:',
'listusers-submit'   => 'Ssken',
'listusers-noresult' => 'Ur yufi ḥedd (amseqdac).',

# Special:Log/newusers
'newuserlogpage' => 'Aɣmis n isnulfan n  imiḍanen n imseqdacen',

# Special:ListGroupRights
'listgrouprights-members' => '(umuɣ n imseqdacen)',

# E-mail user
'mailnologin'     => 'Ur yufi ḥedd (tansa)',
'mailnologintext' => 'Yessefk ad [[Special:UserLogin|tkecmeḍ]] u tesɛiḍ tansa e-mail ṭaṣhiḥt deg [[Special:Preferences|isemyifiyen]] inek
iwakken ad tazneḍ email i imseqdacen wiyaḍ.',
'emailuser'       => 'Azen e-mail i wemseqdac-agi',
'emailpage'       => 'Azen e-mail i wemseqdac',
'emailpagetext'   => 'Lukan amseqdac-agi yefka-d tansa n email ṣaḥiḥ
deg imsifiyen ines, talɣa deg ukessar a t-tazen izen.
Tansa n email i tefkiḍ deg imisifyen inek ad tban-d
deg « Expéditeur» n izen inek iwakken amseqdac-nni yezmer a k-yerr.',
'usermailererror' => 'Yella ugul deg uzwel n email:',
'defemailsubject' => 'e-mail n {{SITENAME}}',
'noemailtitle'    => 'E-mail ulac-it',
'noemailtext'     => 'Amseqdac-agi ur yefki ara e-mail ṣaḥiḥ, neɣ ur yebɣi ara e-mailiyen seg medden.',
'emailfrom'       => 'Seg',
'emailto'         => 'i',
'emailsubject'    => 'Asentel',
'emailmessage'    => 'Izen',
'emailsend'       => 'Azen',
'emailccme'       => 'Azen-iyi-d e-mail n ulsaru n izen inu.',
'emailccsubject'  => 'Alsaru n izen inek i $1: $2',
'emailsent'       => 'E-mail yettwazen',
'emailsenttext'   => 'Izen n e-mail inek yettwazen.',

# Watchlist
'watchlist'            => 'Umuɣ n uɛessi inu',
'mywatchlist'          => 'Umuɣ n uɛessi inu',
'watchlistfor2'        => 'I $1 $2',
'nowatchlist'          => 'Umuɣ n uɛessi inek d ilem.',
'watchlistanontext'    => 'G leɛnaya-k $1 iwakken ad twalaḍ neɣ tbeddleḍ iferdas deg wumuɣ n uɛessi inek.',
'watchnologin'         => 'Ur tekcimeḍ ara',
'watchnologintext'     => 'Yessefk ad [[Special:UserLogin|tkecmeḍ]] iwakken ad tbeddleḍ umuɣ n uɛessi inek.',
'addedwatchtext'       => "Asebter \"[[:\$1]]\" yettwarnu deg [[Special:Watchlist|wumuɣ n uɛessi]] inek.
Ma llan ibeddlen deg usebter-nni neɣ deg usbtar umyennan ines, ad banen dagi,
Deg [[Special:RecentChanges|wumuɣ n yibeddlen imaynuten]] ad banen s '''yisekkilen ibberbuzen''' (akken ad teẓriḍ).

Ma tebɣiḍ ad tekkseḍ asebter seg wumuɣ n uɛessi inek, wekki ɣef \"Fakk aɛessi\".",
'removedwatchtext'     => 'Asebter "[[:$1]]" yettwakkes seg wumuɣ n uɛessi inek.',
'watch'                => 'Ɛass',
'watchthispage'        => 'Ɛass asebter-agi',
'unwatch'              => 'Fakk aɛassi',
'unwatchthispage'      => 'Fakk aɛassi',
'notanarticle'         => 'Mačči d amagrad',
'watchnochange'        => 'Ulaḥedd n yiferdas n wumuɣ n uɛessi inek ma yettubeddel deg tawala i textareḍ.',
'watchlist-details'    => 'ttɛassaɣ {{PLURAL:$1|$1 usebter|$1 n isebtaren}} mebla isebtaren "amyannan".',
'wlheader-enotif'      => '* Yeǧǧa Email n talɣut.',
'wlheader-showupdated' => "* Isebtar ttubeddlen segwasmi tkecmeḍ tikelt taneggarut ttbanen-d s '''uḍris aberbuz'''",
'watchmethod-recent'   => 'yessenqed ibeddlen imaynuten n isebtar i ttɛasseɣ',
'watchmethod-list'     => 'yessenqed isebtar i ttɛassaɣ i ibeddlen imaynuten',
'watchlistcontains'    => 'Umuɣ n uɛessi inek ɣur-s $1 n {{PLURAL:$1|usebter|isebtar}}.',
'iteminvalidname'      => "Agnu akk d uferdis '$1', isem mačči ṣaḥiḥ...",
'wlnote'               => "Deg ukessar {{PLURAL:$1|yella yiwen ubeddel aneggaru|llan '''$1''' n yibeddlen ineggura}} deg {{PLURAL:$2|saɛa taneggarut|'''$2''' swayeɛ tineggura}}.",
'wlshowlast'           => 'Ssken $1 n swayeɛ $2 n wussan neɣ $3 ineggura',
'watchlist-options'    => 'Tifranin n umuɣ n uɛessi',

# Displayed when you click the "watch" button and it is in the process of watching
'watching'   => 'Ad iɛass...',
'unwatching' => 'Ad ifukk aɛessi...',

'enotif_mailer'                => 'Email n talɣut n {{SITENAME}}',
'enotif_reset'                 => 'Rcem akk isebtar mmeẓren',
'enotif_newpagetext'           => 'Wagi d asebter amaynut.',
'enotif_impersonal_salutation' => 'Amseqdac n {{SITENAME}}',
'changed'                      => 'yettubeddel',
'created'                      => 'yettwaxleq',
'enotif_subject'               => 'Asebter $PAGETITLE n {{SITENAME}} $CHANGEDORCREATED sɣur $PAGEEDITOR',
'enotif_lastvisited'           => 'Ẓer $1 i akk ibeddlen segwasmi tkecmeḍ tikelt taneggarut.',
'enotif_lastdiff'              => 'Ẓer $1 akken ad tmuqleḍ abeddel.',
'enotif_body'                  => 'Ay $WATCHINGUSERNAME,

Asebter n {{SITENAME}} $PAGETITLE $CHANGEDORCREATED deg wass $PAGEEDITDATE sɣur $PAGEEDITOR, ẓer $PAGETITLE_URL i tasiwelt n tura.

$NEWPAGE

Abeddel n wegzul: $PAGESUMMARY $PAGEMINOREDIT

Meslay akk d ambeddel:
email: $PAGEEDITOR_EMAIL
wiki: $PAGEEDITOR_WIKI

Ur yelli ara email n talɣut asmi llan ibeddlen deg usebter ala lukan teẓreḍ asebter-nni. Tzemreḍ ad terreḍ i zero email n talɣut i akk isebraen i tettɛasseḍ.

             email n talɣut n {{SITENAME}}

--
Akken ad tbeddleḍ n wumuɣ n uɛessi inek settings, ruḥ ɣer
{{canonicalurl:{{#special:EditWatchlist}}}}

Tadhelt:
{{canonicalurl:{{MediaWiki:Helppage}}}}',

# Delete
'deletepage'      => 'Mḥu asebter',
'confirm'         => 'Sentem',
'excontent'       => "Ayen yella: '$1'",
'excontentauthor' => "Ayen yella: '$1' ('[[Special:Contributions/$2|$2]]' kan i yekken deg-s)",
'exbeforeblank'   => "Ayen yella uqbal ma yettumḥa: '$1'",
'exblank'         => 'asebter yella d ilem',
'historywarning'  => 'Ɣur-wet : Asebter i ara temḥuḍ yesɛa amezruy s azal alemmas n $1 {{PLURAL:$1|lqem|ileqman}} :',
'actioncomplete'  => 'Axdam yekfa',
'actionfailed'    => 'Tigawt agi texser',
'deletedtext'     => '"$1" yettumḥa.
Ẓer $2 i aɣmis n yimḥayin imaynuten.',
'deletedarticle'  => '"[[$1]]" yettumḥa',
'dellogpage'      => 'Aɣmis n umḥay',
'dellogpagetext'  => 'Deg ukessar, yella wumuɣ n yimḥayin imaynuten.',
'deletionlog'     => 'Aɣmis n umḥay',
'reverted'        => 'Asuɣal i tasiwel taqdimt',
'deletecomment'   => 'Ayɣer',

# Rollback
'rollbacklink' => 'semmet',
'cantrollback' => 'Ur yezmir ara ad yessuɣal; yella yiwen kan amseqdac iwumi ibeddel/yexleq asebter-agi.',
'editcomment'  => "Agzul n ubeddel yella: \"''\$1''\".",
'revertpage'   => 'Yessuɣal ibeddlen n [[Special:Contributions/$2|$2]] ([[User talk:$2|Meslay]]); yettubeddel ɣer tasiwelt taneggarut n [[User:$1|$1]]',

# Edit tokens
'sessionfailure' => 'Yella ugul akk d takmect inek;
Axdam-agi yebṭel axaṭer waqila yella wemdan nniḍen i yeddem isem n wemseqdac inek.
G leɛnayek wekki ɣef taqeffalt "Back/Précédent" n browser/explorateur inek, umbeɛd wekki ɣef "Actualiser/reload" akk ad tɛerḍeḍ tikelt nniḍen.',

# Protect
'protectlogpage'          => 'Aɣmis n wemḥay',
'protectedarticle'        => '"[[$1]]" yettwaḥrez',
'protect-title'           => 'Ad yeḥrez "$1"',
'prot_1movedto2'          => '[[$1]] yettusmimeḍ ar [[$2]]',
'protect-legend'          => 'Sentem tiḥḥerzi',
'protect-default'         => '(ameslugen)',
'protect-level-sysop'     => 'Inedbalen kan',
'protect-summary-cascade' => 'acercur',
'protect-expiring'        => 'yemmut deg $1 (UTC)',
'restriction-type'        => 'Turagt',
'minimum-size'            => 'Tiddi minimum',

# Restrictions (nouns)
'restriction-edit' => 'Beddel',
'restriction-move' => 'Smimeḍ',

# Undelete
'viewdeletedpage'        => 'Ẓer isebtar yettumḥan',
'undeletelink'           => 'ẓeṛ/uɣaled',
'undeleteviewlink'       => 'ẓeṛ',
'undeletecomment'        => 'Taɣẓint :',
'undelete-header'        => 'Ẓer [[Special:Log/delete|aɣmis n umḥay]] i isebtar ttumḥan tura.',
'undelete-search-box'    => 'Nadi ɣef isebtar yettumḥan',
'undelete-search-prefix' => 'Ssken isebtar i yebdan s:',
'undelete-search-submit' => 'Nadi',
'undelete-no-results'    => 'Ur yufi ara ulaḥedd n wawalen i tnadiḍ ɣef isebtar deg iɣbaren.',

# Namespace form on various pages
'namespace'      => 'Isem n taɣult:',
'invert'         => 'Snegdam ayen textareḍ',
'blanknamespace' => '(Amenzawi)',

# Contributions
'contributions'       => 'Tikkin n wemseqdac',
'contributions-title' => 'Umuɣ n tikkin n umseqdac $1',
'mycontris'           => 'Tikkin inu',
'contribsub2'         => 'n $1 ($2)',
'nocontribs'          => 'Ur yufi ara abddel i tebɣiḍ.',
'uctop'               => '(taneggarut)',
'month'               => 'Seg uggur (d wid uqbel) :',
'year'                => 'Seg useggwas (d wid uqbel) :',

'sp-contributions-newbies'     => 'Ssken tikkin n yimseqdacen imaynuten kan',
'sp-contributions-newbies-sub' => 'I yisem yimseqdacen imaynuten',
'sp-contributions-blocklog'    => 'Aɣmis n uɛeṭṭil',
'sp-contributions-uploads'     => 'izdamen',
'sp-contributions-logs'        => 'iɣmisen',
'sp-contributions-talk'        => 'Mmeslay',
'sp-contributions-userrights'  => 'Laɛej iserfan n umseqdac',
'sp-contributions-search'      => 'Nadi i tikkin',
'sp-contributions-username'    => 'Tansa IP neɣ isem n wemseqdac:',
'sp-contributions-toponly'     => 'Sekned kan imagraden i beddeleɣ nekk d-aneggaru',
'sp-contributions-submit'      => 'Nadi',

# What links here
'whatlinkshere'            => 'Ayen i d-yettawi ɣer da',
'whatlinkshere-title'      => 'Isebtaren i sɛan azday ɣer « $1 »',
'whatlinkshere-page'       => 'Asebter :',
'linkshere'                => "Isebtar-agi sɛan azday ɣer '''[[:$1]]''':",
'nolinkshere'              => "Ulac asebter i yesɛan azday ɣer '''[[:$1]]'''.",
'nolinkshere-ns'           => "Ulac asebter i yesɛan azday ɣer '''[[:$1]]''' deg yisem n taɣult i textareḍ.",
'isredirect'               => 'Asebter n usemmimeḍ',
'istemplate'               => 'asekcam',
'isimage'                  => 'azday ɣer afaylu',
'whatlinkshere-prev'       => '{{PLURAL:$1|ssabeq|$1 ssabeq}}',
'whatlinkshere-next'       => '{{PLURAL:$1|ameḍfir|$1 imeḍfiren}}',
'whatlinkshere-links'      => '← izdayen',
'whatlinkshere-hideredirs' => '$1 aceggeε ɣer',
'whatlinkshere-hidetrans'  => '$1 aseddu',
'whatlinkshere-hidelinks'  => '$1 izdayen',
'whatlinkshere-hideimages' => '$1 tugniwin i qqenen',
'whatlinkshere-filters'    => 'Tistaytin',

# Block/unblock
'blockip'                     => 'Ɛekkel amseqdac',
'ipadressorusername'          => 'Tansa IP neɣ isem n wemseqdac',
'ipbreason'                   => 'Ayɣer',
'ipbsubmit'                   => 'Ɛekkel amseqdac-agi',
'ipboptions'                  => '2 isragen:2 hours,1 ass:1 day,3 ussan:3 days,1 imalas:1 week,2  imulas:2 weeks,1 aggur:1 month,3 igguren:3 months,6 igguren:6 months,1 aseggwas:1 year,afdi:infinite',
'ipbotheroption'              => 'nniḍen',
'badipaddress'                => 'Tansa IP mačči d ṣaḥiḥ',
'ipblocklist'                 => 'imseqdacen isewḥelen',
'ipblocklist-submit'          => 'Nadi',
'blocklink'                   => 'ɛekkel',
'unblocklink'                 => 'ekkes asewḥel',
'change-blocklink'            => 'beddel asewḥel',
'contribslink'                => 'tikkin',
'blocklogpage'                => 'Aɣmis n isewḥelen',
'blocklogentry'               => 'yesewḥel [[$1]] ; alama : $2 $3',
'block-log-flags-anononly'    => 'Imseqdacen udrigen kan',
'block-log-flags-nocreate'    => 'asnulfu n umiḍan yessegdel',
'proxyblockreason'            => 'Tansa n IP inek teɛkel axaṭer nettat "open proxy". G leɛnayek, meslay akk d provider inek.',
'proxyblocksuccess'           => 'D ayen.',
'sorbsreason'                 => 'Tansa IP inek/inem tella deg yiwen umuɣ am "open proxy" deg DNSBL yettuseqdac deg {{SITENAME}}.',
'sorbs_create_account_reason' => 'Tansa IP inek/inem tella deg yiwen umuɣ am "open proxy" deg DNSBL yettuseqdac deg {{SITENAME}}.
Ur tezmireḍ ara ad snulfuḍ amiḍan.',

# Developer tools
'lockdb' => 'Sekker database',

# Move page
'move-page-legend'        => 'Smimeḍ asebter',
'movepagetext'            => "Mi tedsseqdceḍ talɣa deg ukessar ad ibddel isem n usebter, yesmimeḍ akk umezruy-is ɣer isem amaynut.
Azwel aqdim ad yuɣal azady n wesmimeḍ ɣer azwel amaynut.
Izdayen ɣer azwel aqdim ur ttubeddlen ara;
ssenqd-iten u ssenqed izdayen n snat d tlata tikkwal.
D kečč i yessefk a ten-yessenqed.

Meɛna, ma yella amagrad deg azwel amaynut neɣ azday n wamsmimeḍ mebla amezruy, asebter-inek '''ur''' yettusmimeḍ '''ara'''.
Yernu, tzemreḍ ad tesmimeḍ asebter ɣer isem-is aqdim ma tɣelṭeḍ.",
'movepagetalktext'        => "Asebter \"Amyannan\" yettusmimeḍ ula d netta '''ma ulac:'''
*Yella asebter \"Amyannan\" deg isem amaynut, neɣ
*Trecmeḍ tankult deg ukessar.

Lukan akka, yessefk a t-tedmeḍ weḥdek.",
'movearticle'             => 'Smimeḍ asebter',
'movenologin'             => 'Ur tekcimeḍ ara',
'movenologintext'         => 'Yessefk ad tesɛuḍ isem n wemseqdac u [[Special:UserLogin|tkecmeḍ]]
iwakken ad tesmimḍeḍ asebter.',
'newtitle'                => 'Ar azwel amaynut',
'move-watch'              => 'Ɛass asebter-agi',
'movepagebtn'             => 'Smimeḍ asebter',
'pagemovedsub'            => 'Asemmimeḍ yekfa',
'articleexists'           => 'Yella yagi yisem am wagi, neɣ
isem ayen textareḍ mačči d ṣaḥiḥ.
Xtar yiwen nniḍen.',
'talkexists'              => "'''Asemmimeḍ n usebter yekfa, meɛna asebter n umyannan ines ur yettusemmimeḍ ara axaṭer yella yagi yiwen s yisem kif-kif. G leɛnayek, xdem-it weḥd-ek.'''",
'movedto'                 => 'yettusmimeḍ ar',
'movetalk'                => 'Smimeḍ asebter n umyannan (n umagrad-nni)',
'1movedto2'               => '[[$1]] yettusmimeḍ ar [[$2]]',
'1movedto2_redir'         => '[[$1]] yettusmimeḍ ar [[$2]] s redirect',
'movelogpage'             => 'Aɣmis n usemmimeḍ',
'movelogpagetext'         => 'Akessar yella wumuɣ n isebtar yettusmimeḍen.',
'movereason'              => 'Ayɣer',
'revertmove'              => 'Uɣal ar tasiwelt ssabeq',
'delete_and_move'         => 'Mḥu u smimeḍ',
'delete_and_move_text'    => '==Amḥay i tebɣiḍ==

Anda tebɣiḍ tesmimeḍ "[[:$1]]" yella yagi. tebɣiḍ ad temḥuḍ iwakken yeqqim-d wemkan i usmimeḍ?',
'delete_and_move_confirm' => 'Ih, mḥu asebter',
'delete_and_move_reason'  => 'Mḥu iwakken yeqqim-d wemkan i usmimeḍ',
'selfmove'                => 'Izwal amezwaru d uneggaru kif-kif; ur yezmir ara ad yesmimeḍ asebter ɣur iman-is.',

# Export
'export'            => 'Ssufeɣ isebtar',
'exportcuronly'     => 'Ssekcem tasiwelt n tura kan, mačči akk amezruy-is',
'export-submit'     => 'Ssufeɣ',
'export-addcattext' => 'Rnu isebtar seg taggayt:',
'export-addcat'     => 'Rnu',

# Namespace 8 related
'allmessages'               => 'Izen n system',
'allmessagesname'           => 'Isem',
'allmessagesdefault'        => 'Aḍris ameslugen',
'allmessagescurrent'        => 'Aḍris n tura',
'allmessagestext'           => 'Wagi d-umuɣ n inzan yestufan deg tallunt MediaWiki.
Ẓeṛ [//www.mediawiki.org/wiki/Localisation MediaWiki Localisation] dɣa [//translatewiki.net translatewiki.net] ma tebɣiḍ ad ɛiweneḍ i usideg imcettel n MediaWiki.',
'allmessagesnotsupportedDB' => "'''{{ns:special}}:Allmessages''' ut yezmir ara ad yettuseqdac axaṭer '''\$wgUseDatabaseMessages''' yettwakkes.",
'allmessages-language'      => 'Tutlayt :',
'allmessages-filter-submit' => 'Ruḥ',

# Thumbnails
'thumbnail-more'  => 'Ssemɣer',
'filemissing'     => 'Afaylu ulac-it',
'thumbnail_error' => 'Agul asmi yexleq tugna tamecṭuḥt: $1',

# Special:Import
'import'                     => 'Ssekcem isebtar',
'importinterwiki'            => 'Assekcem n transwiki',
'import-interwiki-history'   => 'Xdem alsaru n akk tisiwal umezruy n usebter-agi',
'import-interwiki-submit'    => 'Ssekcem',
'import-interwiki-namespace' => 'Azen isebtar ar isem n taɣult:',
'import-upload-filename'     => 'Isem n ufaylu :',
'import-comment'             => 'Awennit :',
'importstart'                => 'Asekcem n isebtar...',
'import-revision-count'      => '$1 {{PLURAL:$1|tasiwelt|tisiwal}}',
'importnopages'              => 'Ulac isebtar iwakken ad ttussekcmen.',
'importfailed'               => 'Asekcem yexser: $1',
'importunknownsource'        => 'Anaw n uɣbalu n usekcem mačči d mechur',
'importcantopen'             => 'Ur yezmir ara ad yexdem asekcem n ufaylu',
'importbadinterwiki'         => 'Azday n interwiki ur yelhi',
'importnotext'               => 'D ilem neɣ ulac aḍris',
'importsuccess'              => 'Asekcem yekfa !',
'importhistoryconflict'      => 'Amennuɣ ger tisiwal n umezruy (ahat asebter-agi yettwazen yagi)',
'importnosources'            => 'Asekcam n transwiki ur yexdim ara u amezruy n usekcam yettwakkes.',
'importnofile'               => 'ulaḥedd afaylu usekcam ur yettwazen.',

# Import log
'importlogpage'                    => 'Aɣmis n usekcam',
'importlogpagetext'                => 'Adeblan n usekcam n isebtar i yesɛan amezruy ubeddel seg wiki tiyaḍ.',
'import-logentry-upload'           => 'Yessekcem [[$1]] s usekcam n ufaylu',
'import-logentry-upload-detail'    => '$1 {{PLURAL:$1|lqem|ileqman}}',
'import-logentry-interwiki'        => '$1 s transwiki',
'import-logentry-interwiki-detail' => '$1 {{PLURAL:$1|lqem|ileqman}} seg $2',

# Tooltip help for the actions
'tooltip-pt-userpage'             => 'Asebter n umseqdac inu',
'tooltip-pt-anonuserpage'         => 'Asebter n wemseqdac n IP wukud tekkiḍ',
'tooltip-pt-mytalk'               => 'Asebter n umyannan inu',
'tooltip-pt-anontalk'             => 'Amyannan ɣef yibeddlen n tansa ip-yagi',
'tooltip-pt-preferences'          => 'Isemyifiyen inu',
'tooltip-pt-watchlist'            => 'Umuɣ n uɛessi n isebtar i ttɛessaɣ',
'tooltip-pt-mycontris'            => 'Umuɣ n tikkin inu',
'tooltip-pt-login'                => 'Lukan tkecmeḍ xir, meɛna am tebɣiḍ.',
'tooltip-pt-anonlogin'            => 'Lukan tkecmeḍ xir, meɛna am tebɣiḍ.',
'tooltip-pt-logout'               => 'Ffeɣ',
'tooltip-ca-talk'                 => 'Amyannan ɣef wayen yella deg usebter',
'tooltip-ca-edit'                 => 'Tzemreḍ ad tbeddleḍ asebter-agi. Sseqdec pre-timeẓriwt qbel.',
'tooltip-ca-addsection'           => 'Rnu awennit i amyannan-agi.',
'tooltip-ca-viewsource'           => 'Asebter-agi yettwaḥrez. Tzemreḍ ad twaliḍ aɣbalu-ines.',
'tooltip-ca-history'              => 'Tisiwal ssabeq n usebter-agi.',
'tooltip-ca-protect'              => 'Ḥrez asebter-agi',
'tooltip-ca-delete'               => 'Mḥu asebter-agi',
'tooltip-ca-undelete'             => 'Err akk ibeddlen n usebter-agi i yellan uqbel ad yettwamḥu usebter',
'tooltip-ca-move'                 => 'Smimeḍ asebter-agi',
'tooltip-ca-watch'                => 'Rnu asebter-agi i wumuɣ n uɛessi inek',
'tooltip-ca-unwatch'              => 'Kkes asebter-agi seg wumuɣ n uɛessi inek',
'tooltip-search'                  => 'Nadi {{SITENAME}}',
'tooltip-search-go'               => 'Ṛuḥ ɣer usebter i sɛan isem agi ma yella.',
'tooltip-search-fulltext'         => 'Nadi isebtar i sɛan aḍris agi',
'tooltip-p-logo'                  => 'Asebter amenzawi',
'tooltip-n-mainpage'              => 'Ẓer asebter amenzawi',
'tooltip-n-mainpage-description'  => 'Rzu asebter amenzawi',
'tooltip-n-portal'                => 'Ɣef usenfar, ayen tzemrḍ ad txedmeḍ, anda tafeḍ tiɣawsiwin',
'tooltip-n-currentevents'         => 'Af ayen yeḍran tura',
'tooltip-n-recentchanges'         => 'Umuɣ n yibeddlen imaynuten deg wiki.',
'tooltip-n-randompage'            => 'Ẓer asebter menwala',
'tooltip-n-help'                  => 'Amkan ideg tafeḍ.',
'tooltip-t-whatlinkshere'         => 'Umuɣ n akk isebtar i yesɛan azday ar dagi',
'tooltip-t-recentchangeslinked'   => 'Ibeddlen imaynuten deg isebtar myezdin seg usebter-agi',
'tooltip-feed-rss'                => 'RSS feed n usebter-agi',
'tooltip-feed-atom'               => 'Atom feed n usebter-agi',
'tooltip-t-contributions'         => 'Ẓer umuɣ n tikkin n wemseqdac-agi',
'tooltip-t-emailuser'             => 'Azen e-mail i wemseqdac-agi',
'tooltip-t-upload'                => 'Azen ifuyla',
'tooltip-t-specialpages'          => 'Umuɣ n akk isebtar usligen',
'tooltip-t-print'                 => 'Lqem tasiggezt n usebter agi',
'tooltip-t-permalink'             => 'Azday ameɣlal ɣer lqem agi n usebter',
'tooltip-ca-nstab-main'           => 'Ẓer ayen yellan deg usebter',
'tooltip-ca-nstab-user'           => 'Ẓer asebter n wemseqdac',
'tooltip-ca-nstab-media'          => 'Ẓer asebter n media',
'tooltip-ca-nstab-special'        => 'Wagi d asebter uslig, ur tezmireḍ ara a t-tbeddleḍ',
'tooltip-ca-nstab-project'        => 'Ẓer asebter n usenfar',
'tooltip-ca-nstab-image'          => 'Ẓer asebter n tugna',
'tooltip-ca-nstab-mediawiki'      => 'Ẓer izen n system',
'tooltip-ca-nstab-template'       => 'Ẓer talɣa',
'tooltip-ca-nstab-help'           => 'Ẓer asebter n tallat',
'tooltip-ca-nstab-category'       => 'Ẓer asebter n taggayt',
'tooltip-minoredit'               => 'Wagi d abeddel afessas',
'tooltip-save'                    => 'Smekti ibeddlen inek',
'tooltip-preview'                 => 'G leɛnaya-k, pre-ẓer ibeddlen inek uqbel ad tesmektiḍ!',
'tooltip-diff'                    => 'Ssken ayen tbeddleḍ deg uḍris.',
'tooltip-compareselectedversions' => 'Ẓer amgirred ger snat tisiwlini (i textareḍ) n usebter-agi.',
'tooltip-watch'                   => 'Rnu asebter-agi i wumuɣ n uɛessi inu',
'tooltip-recreate'                => 'Ɛiwed xleq asebter ɣas akken yettumḥu',
'tooltip-rollback'                => '« Semmet » yesemmet s-yiwen asenned akk d-acu amseqdac aneggaru yebeddel deg usebter',
'tooltip-undo'                    => '« Ssefsu » yesemmet abeddel agi dɣa i ldi asfaylu n ubeddel deg uskar n azaraskan. I ɛemmed an uɣal ar lqem n uqbel dɣa an rnu taɣẓint deg tanaka n ugzul.',
'tooltip-summary'                 => 'Sekcem agzul awezzlan',

# Attribution
'anonymous'        => '{{PLURAL:$1|Aseqdac udrig|Iseqdacen udrigen}} ɣef {{SITENAME}}',
'siteuser'         => '{{SITENAME}} amseqdac $1',
'lastmodifiedatby' => 'Tikkelt taneggarut asmi yettubeddel asebter-agi $2, $1 sɣur $3.',
'othercontribs'    => 'Tikkin ɣef umahil n $1.',
'others'           => 'wiyaḍ',
'siteusers'        => '{{PLURAL:$2|aseqdac|iseqdacen}} $1 n {{SITENAME}}',
'creditspage'      => 'Win ixedmen asebter',
'nocredits'        => 'Ulac talɣut ɣef wayen ixedmen asebter-agi.',

# Spam protection
'spamprotectiontitle' => 'Aḥraz amgel "Spam"',
'spamprotectiontext'  => "Asebter i tebɣiḍ ad tesmektiḍ iɛekkel-it ''aḥraz mgel \"Spam\"''. Ahat yella wezday aberrani.",
'spamprotectionmatch' => 'Aḍris-agi ur t-iɛeǧ \'\'"aḥraz mgel "Spam"\'\': $1',
'spam_reverting'      => 'Asuɣal i tasiwel taneggarut i ur tesɛi ara izdayen ɣer $1',
'spam_blanking'       => 'Akk tisiwal sɛan izdayen ɣer $1, ad yemḥu',

# Patrolling
'markaspatrolleddiff'                 => 'Rcem "yettwassenqden"',
'markaspatrolledtext'                 => 'Rcem amagrad-agi "yettwassenqden"',
'markedaspatrolled'                   => 'Rcem belli yettwasenqed',
'markedaspatrolledtext'               => 'Lqem i textareḍ n [[:$1]] tettwassenqed.',
'rcpatroldisabled'                    => 'Yettwakkes asenqad n ibeddlen imaynuten',
'rcpatroldisabledtext'                => 'Yettwakkes asenqad n ibeddlen imaynuten',
'markedaspatrollederror'              => 'Ur yezmir ara ad yercem "yettwassenqden"',
'markedaspatrollederrortext'          => 'Yessefk ad textareḍ tasiwelt akken a tt-trecmeḍ "yettwassenqden".',
'markedaspatrollederror-noautopatrol' => 'Ur tezmireḍ ara ad trecmeḍ ibeddilen inek "yettwassenqden".',

# Patrol log
'patrol-log-page' => 'Aɣmis n usenqad',
'patrol-log-line' => 'Yercem tasiwelt $1 n $2 "yettwassenqden" $3',
'patrol-log-auto' => '(otomatik)',

# Image deletion
'deletedrevision' => 'Tasiwelt taqdimt $1 tettumḥa.',

# Browsing diffs
'previousdiff' => '← Amgirred ssabeq',
'nextdiff'     => 'Amgirred ameḍfir →',

# Media information
'mediawarning'   => "'''Ɣuṛ-wet''': tawsit agi n ufaylu tezmer at sɛu angal aḥraymi.
Lukan a t-tesseqdceḍ yezmer ad yexsser aselkim inek/inem.",
'imagemaxsize'   => "Tiddi tafellayt n tugniwin :<br />''(i isebtar n weglam ufaylu)''",
'thumbsize'      => 'Tiddi n tugna tamecṭuḥt:',
'file-info'      => 'tiddi n ufaylu: $1, anaw n MIME: $2',
'file-info-size' => '$1 × $2 pixel, tiddi n ufaylu: $3, anaw n MIME: $4',
'file-nohires'   => '<small>Ulac resolution i tameqqrant fell-as.</small>',
'svg-long-desc'  => 'Afaylu SVG, tabadut n $1 × $2 pixel, lqedd : $3',
'show-big-image' => 'Resolution tameqqrant',

# Special:NewFiles
'newimages'             => 'Umuɣ n ifayluwen imaynuten',
'imagelisttext'         => "Deg ukessar yella wumuɣ n '''$1''' {{PLURAL:$1|ufaylu|yifayluwen}} $2.",
'noimages'              => 'Tugna ulac-itt.',
'ilsubmit'              => 'Nadi',
'bydate'                => 's uzemz',
'sp-newimages-showfrom' => 'Beqqeḍ ifuyla imaynuten seg $1 ar $2',

# Bad image list
'bad_image_list' => 'Amasal d-wagi :

Ala umuɣen n ismiwar (i bdun s *) ddemen s amiḍan. Azday amezwaru n ujerriḍ ilaq ad yilli win n tugna icmeten.
Izdayen nniḍen ɣef yiwen ajerriḍ llan d tisuraf, am isebtar ɣef anta tugna tezmer at illi.',

# Metadata
'metadata'        => 'Adferisefka',
'metadata-help'   => 'Afaylu agi, yesɛa tilɣa tisutay, ahat d-tamsaknewt id ernan tilɣa agi. Ma afaylu yebeddel seg addad-is amezwaru, ahat kra n tilɣa ur zemrent ara ad illint d-timekdant s-ufaylu amiran.',
'metadata-fields' => 'Urtan n adferisefka n tugniwin yellan deg umuɣ n izen agi, ad seddun deg usebter n aglam n tugna mi ṭabla n adferisefka at illi tesemẓi. Urtan nniḍen ad illin ffren m-ulac.
* make
* model
* datetimeoriginal
* exposuretime
* fnumber
* isospeedratings
* focallength
* artist
* copyright
* imagedescription
* gpslatitude
* gpslongitude
* gpsaltitude',

# EXIF tags
'exif-imagewidth' => 'Tehri',

'exif-meteringmode-255' => 'Nniḍen',

# Pseudotags used for GPSSpeedRef
'exif-gpsspeed-k' => 'Kilometr deg ssaɛa',

# External editor support
'edit-externally'      => 'Beddel afaylu-yagi s usnas aberrani.',
'edit-externally-help' => 'Ẓer [//www.mediawiki.org/wiki/Manual:External_editors taknut] iwakken ad tessneḍ kter.',

# 'all' in various places, this might be different for inflected languages
'watchlistall2' => 'akk',
'namespacesall' => 'akk',
'monthsall'     => 'akk',

# E-mail address confirmation
'confirmemail'            => 'Sentem tansa n e-mail',
'confirmemail_noemail'    => 'Ur tesɛiḍ ara tansa n email ṣaḥiḥ deg [[Special:Preferences|isemyifiyen n wemseqdac]] inek.',
'confirmemail_text'       => '{{SITENAME}} yeḥweǧ aseɣbel n tansa e-mail inek/inem uqbel ad sexdemeḍ tanfa n tirawt.
Seqdec taqeffalt ddaw-agi iwakken ad cegɛeḍ e-mail n uragag ar tansa e-mail inek/inem.
Tirawt at sɛu azday deg-es tangalt. Tzemreḍ at seqdeceḍ tikkelt kan deg talast n ukud ;
llid azday agi deg iminig iwakken ad sergegeḍ tansa e-mail inek/inem.',
'confirmemail_pending'    => 'Yettwazen-ak yagi ungal n usentem; lukan txelqeḍ isem wemseqdac tura kan,
ahat yessefk ad tegguniḍ cwiṭ qbel ad tɛreḍeḍ ad testeqsiḍ ɣef ungal amaynut.',
'confirmemail_send'       => 'Azen-iyi-d angal n usentem s e-mail iwakken ad snetmeɣ.',
'confirmemail_sent'       => 'E-mail yettwazen iwakken ad tsentmeḍ.',
'confirmemail_oncreate'   => 'Angal n usentem yettwazen ar tansa n e-mail inek.
Yessefk ad tesseqdceḍ angal-agi iwakken ad tkecmeḍ, meɛna yessefk a t-tefkeḍ
iwakken ad xedmen yiḍaɣaren n email deg wiki-yagi.',
'confirmemail_sendfailed' => '{{SITENAME}} ur yezmir ara ad yazen asentem n email.
Ssenqed tansa n email inek.

Ahil n uzzun n e-mail yuɣal-d s-izen agi : $1',
'confirmemail_invalid'    => 'Angal n usentem mačči ṣaḥiḥ. Waqila yemmut.',
'confirmemail_needlogin'  => 'Yessefk $1 iwakken tesnetmeḍ tansa n email inek.',
'confirmemail_success'    => 'Tansa e-mail inek/inem tergeg.
Tura tzemreḍ ad [[Special:UserLogin|qqeneḍ]].',
'confirmemail_loggedin'   => 'Asentem n tansa n email inek yekfa tura.',
'confirmemail_error'      => 'Yella ugur s usmekti n usentem inek.',
'confirmemail_subject'    => 'Asentem n tansa n email seg {{SITENAME}}',
'confirmemail_body'       => 'Amdan, ahat d kečč/kem, seg tansa IP $1,
yexleq amiḍan "$2" s tansa n e-mail deg {{SITENAME}}.

Iwakken ad sergegeḍ amiḍan agi d-win-inek/inem dɣa iwakken
an sermed tiwura n tirawt deg {{SITENAME}},
ilaq ad lkemeḍ aseɣwen agi deg iminig :

$3

Ma mačči d *kečč/kem*, ilaq ad lkemeḍ aseɣwen agi deg iminig :

$5

Angal n usentem-agi ad yemmut ass $4.',

# Scary transclusion
'scarytranscludedisabled' => '[Yettwakkes assekcam n isebtar seg wiki tiyaḍ]',
'scarytranscludefailed'   => '[Ur yezmir ara a d-yawi talɣa n $1]',
'scarytranscludetoolong'  => '[URL agi uffay aṭas]',

# Trackbacks
'trackbackbox'      => 'Izdayen n zdeffir n umagrad-agi:<br />
$1',
'trackbackremove'   => '([$1 Mḥu])',
'trackbacklink'     => 'Azday n zdeffir',
'trackbackdeleteok' => 'Azday n zdeffir yettumḥa.',

# Delete conflict
'deletedwhileediting' => 'Aɣtal: Asebter-agi yettumḥa qbel ad tebdiḍ a t-tbeddleḍ!',
'confirmrecreate'     => "Amseqdac [[User:$1|$1]] ([[User talk:$1|Meslay]]) yemḥu asebter-agi beɛd ad tebdiḍ abeddel axaṭer:
: ''$2''
G leɛnaya-k sentem belli ṣaḥḥ tebɣiḍ ad tɛiwedeḍ axlaq n usebter-agi.",
'recreate'            => 'Ɛiwed xleq',

# action=purge
'confirm_purge_button' => 'Seɣbel',
'confirm-purge-top'    => 'Mḥu lkac n usebter-agi?',

# action=watch/unwatch
'confirm-watch-button'   => 'Seɣbel',
'confirm-unwatch-button' => 'Seɣbel',

# Multipage image navigation
'imgmultipageprev' => '← asebter ssabeq',
'imgmultipagenext' => 'asebter ameḍfir →',
'imgmultigo'       => 'Ruḥ!',

# Table pager
'ascending_abbrev'         => 'asawen',
'descending_abbrev'        => 'akessar',
'table_pager_next'         => 'Asebtar ameḍfir',
'table_pager_prev'         => 'Asebtar ssabeq',
'table_pager_first'        => 'Asebtar amezwaru',
'table_pager_last'         => 'Asebtar aneggaru',
'table_pager_limit'        => 'Ssken $1 n yiferdas di mkul asebtar',
'table_pager_limit_submit' => 'Ruḥ',
'table_pager_empty'        => 'Ulac igmad',

# Auto-summaries
'autosumm-blank'   => 'Yekkes akk aḍris seg usebter',
'autosumm-replace' => "Ibeddel asebtar s '$1'",
'autoredircomment' => 'Asemmimeḍ ar [[$1]]',
'autosumm-new'     => 'Asebtar amaynut: $1',

# Size units
'size-bytes'     => '$1 B/O',
'size-kilobytes' => '$1 KB/KO',
'size-megabytes' => '$1 MB/MO',
'size-gigabytes' => '$1 GB/GO',

# Live preview
'livepreview-loading' => 'Assisi…',
'livepreview-ready'   => 'Assisi… D ayen!',
'livepreview-failed'  => 'Pre-timeẓriwt taǧiḥbuṭ texser!
Ɛreḍ pre-timeẓriwt tamagnut.',
'livepreview-error'   => 'Pre-timeẓriwt taǧiḥbuṭ texser: $1 "$2"
Ɛreḍ pre-timeẓriwt tamagnut.',

# Friendlier slave lag warnings
'lag-warn-normal' => 'Ibeddelen n ddaw n $1 {{PLURAL:$1|tasint|tisinin}} ur ttbanen ara deg umuɣ-agi.',
'lag-warn-high'   => 'Acku af talalut taxatart n uqeddac n taffa n isefka, ibeddelen n ddaw n $1 {{PLURAL:$1|tasint|tisinin}} ur ttbanen ara deg umuɣ-agi.',

# Watchlist editor
'watchlistedit-numitems'       => 'Mebla isebtar "Amyannan", umuɣ n uɛessi inek ɣur-s {{PLURAL:$1|1 wezwel|$1 yizwalen}}.',
'watchlistedit-noitems'        => 'Umuɣ n uɛessi inek ur yesɛi ḥedd izwal.',
'watchlistedit-normal-title'   => 'Beddel umuɣ n uɛessi',
'watchlistedit-normal-legend'  => 'Kkes izwal seg wumuɣ n uɛessi',
'watchlistedit-normal-explain' => 'Izwal deg wumuɣ n uɛessi ttbanen-d deg ukessar. Akken ad tekkseḍ yiwen wezwel, wekki ɣef tenkult i zdat-s, umbeɛd wekki ɛef "Kkes izwal". Tzemreḍ daɣen [[Special:EditWatchlist/raw|ad tbeddleḍ umuɣ n uɛessi (raw)]].',
'watchlistedit-normal-submit'  => 'Kkes izwal',
'watchlistedit-normal-done'    => '{{PLURAL:$1|1 wezwel yettwakkes|$1 yizwal ttwakksen}} seg wumuɣ n uɛessi inek:',
'watchlistedit-raw-title'      => 'Beddel umuɣ n uɛessi (raw)',
'watchlistedit-raw-legend'     => 'Beddel umuɣ n uɛessi (raw)',
'watchlistedit-raw-titles'     => 'Izwal:',
'watchlistedit-raw-done'       => 'Umuɣ n uɛessi inek yettubeddel.',
'watchlistedit-raw-added'      => '{{PLURAL:$1|1 wezwel |$1 yizwal}} nnernan:',
'watchlistedit-raw-removed'    => '{{PLURAL:$1|1 wezwel yettwakkes|$1 yizwal ttwakksen}}:',

# Watchlist editing tools
'watchlisttools-view' => 'Umuɣ n uɛessi',
'watchlisttools-edit' => 'Ẓer u beddel umuɣ n uɛessi',
'watchlisttools-raw'  => 'Beddel umuɣ n uɛessi (raw)',

# Core parser functions
'duplicate-defaultsort' => 'Ɣur-wet : tasarut n ufran m-ulac « $2 » atsefεej tasarut n uqbel « $1 ».',

# Special:Version
'version'              => 'Tasiwelt',
'version-specialpages' => 'isebtar usligen',

# Special:SpecialPages
'specialpages' => 'isebtar usligen',

# External image whitelist
'external_image_whitelist' => ' #Eǧǧ ajeṛṛiḍ agi aken yella.<pre>
#Inid tifersa n tinfaliyin timeɣẓanin (ala tama yellan gar //) ddaw-agi.
#Ad qqenen s URL n tugniwin timniriyin.
#Tid i qqenen ad beqqeḍent am tugniwin, m-ulac ad i beqqeḍ kan azday ɣer tugna.
#Ijeṛṛiḍen i bdun s yiwen # ad ilin εqelen am iwenniten.
#Umuɣ agi ur yeseqdac ara aselken n isekkilen.

#Ger akk tifersa n tinfaliyin timeɣẓanin nnig ajeṛṛiḍ  agi. Eǧǧ ajeṛṛiḍ agi aken yella.</pre>',

# Special:Tags
'tag-filter' => 'Astay n [[Special:Tags|ticraḍ]] :',

);
