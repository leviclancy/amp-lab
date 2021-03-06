<? // Set a default language, either hard-coded or via a COOKIE or REQUEST value
$language_default = "en";
$text_direction_default = "ltr"; ?>

<!-- Open document -->
<!doctype html> <html amp lang='<? echo $language_default; ?>'>   
	
<!-- Open HTML head -->
<head> <meta charset='utf-8'>

<!-- AMP JS -->
<script async src='https://cdn.ampproject.org/v0.js'></script>

<!-- AMP boilerplate code -->
<style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style><noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>

<!-- Define viewport for AMP -->
<meta name='viewport' content='width=device-width,minimum-scale=1,initial-scale=1'>

<!-- AMP elements -->
<script async custom-element="amp-form" src="https://cdn.ampproject.org/v0/amp-form-0.1.js"></script> <!-- AMP form -->
<script async custom-element="amp-bind" src="https://cdn.ampproject.org/v0/amp-bind-0.1.js"></script> <!-- AMP bind -->
<script async custom-element="amp-fx-collection" src="https://cdn.ampproject.org/v0/amp-fx-collection-0.1.js"></script> <!-- AMP parallax -->

<!-- Set up HTML -->
<title>AMP Lab @narrative.fyi</title>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
<meta name='theme-color' content='#000'>
<base href='/' />

<!-- Must define canonical url for AMP, after seeting up the base URL -->
<link rel='canonical' href='https://amp-lab.narrative.fyi'>

<!-- Custom CSS -->
<style amp-custom>
	<? include_once('style.css'); ?>
	      
	.left-to-right {
		text-align: left;
	      	direct: ltr;
	      }
	      
	.right-to-left {
		text-align: right;
	      	direction: rtl;
	      }
	      
	</style>

</head>
	
<body>

<amp-state id='translatableElements'><script type='application/json'>
	<? // We are going to load the translatable elements as an <amp-state> and as a programmatic array

	// First, get the JSON file
	$translatable_elements = file_get_contents('translatable-elements.json', FILE_USE_INCLUDE_PATH);
	 // Echo it into the <amp-state>
	echo $translatable_elements;		    
	// Make it into an array for setting initial values programmatically
	$translatable_elements = json_decode($translatable_elements, TRUE);
	?>
	</script></amp-state>
								    
<amp-img src='https://alisha.narrative.fyi/?action=image&image_id=7682855652963924732419395587719478664129' layout='responsive' width='1.858' height='1' amp-fx='parallax' data-parallax-factor='1.3'></amp-img>

<div id='block-intro'>

<h1 amp-fx='parallax' data-parallax-factor='1.3'>AMP Lab by narrative.fyi</h1>

<p amp-fx='parallax' data-parallax-factor='1.2'>Chonan! (Kurdish <i>Hello, folks</i></i>) We are excited to show you live examples of the subject matter in our talk from 2019's Google AMP conference. Check it out below, and get in touch for any questions. Contact information is avaialable at <a href="https://narrative.fyi">narrative.fyi</a>.</p>

<p amp-fx='parallax' data-parallax-factor='1.15'>Go to <a href='https://github.com/leviclancy/amp-lab/'>github.com/leviclancy/amp-lab/</a> to view the code.</p>

<div id='block-intro-line' amp-fx='parallax' data-parallax-factor='1.05'><span></span></div>

</div>

<div id='block-language-switching'>

<h2 class='<? echo $text_direction_default ?>' [class]="selectedDirection" [text]="translatableElements['language-switching'][selectedLanguage]"><? echo $translatable_elements['language-switching'][$language_default] ?></h2>

<p class='<? echo $text_direction_default ?>' [class]="selectedDirection" [text]="translatableElements['language-paragraph-one'][selectedLanguage]"><? echo $translatable_elements['language-paragraph-one'][$language_default] ?></p>

<div id='language-switching-buttons'>
<span class='material-icons'>language</span>
<span role='button' tabindex='0' on="tap: AMP.setState({selectedLanguage: 'en', selectedDirection: 'left-to-right'})">English</span>
<!-- <span role='button' tabindex='0' on="tap: AMP.setState({selectedLanguage: 'ku', selectedDirection: 'right-to-left'})">كوردی</span> -->
<span role='button' tabindex='0' on="tap: AMP.setState({selectedLanguage: 'ar', selectedDirection: 'right-to-left'})">عربي</span>
</div>	

<div id='direction-switching-buttons'>
<span class='material-icons' role='button' tabindex='0' on="tap: AMP.setState({selectedDirection: 'left-to-right', selectedLanguage: selectedLanguage || '<? echo $language_default ?>'})">format_textdirection_l_to_r</span>
<span class='material-icons' role='button' tabindex='0' on="tap: AMP.setState({selectedDirection: 'right-to-left', selectedLanguage: selectedLanguage || '<? echo $language_default ?>'})">format_textdirection_r_to_l</span>
</div>
	
<span id='button-alignment'>
<span id='home-button' class='<? echo $text_direction_default ?>' [class]="selectedDirection" [text]="translatableElements['home'][selectedLanguage]"><? echo $translatable_elements['home'][$language_default] ?></span>	
<span id='sign-in-button' class='<? echo $text_direction_default ?>' [class]="selectedDirection" [text]="translatableElements['sign-in'][selectedLanguage]"><? echo $translatable_elements['sign-in'][$language_default] ?></span>
</span>

<p class='<? echo $text_direction_default ?>' [class]="selectedDirection" [text]="translatableElements['language-paragraph-two'][selectedLanguage]"><? echo $translatable_elements['language-paragraph-two'][$language_default] ?></p>

</div>

<div id='block-amp-list'>

<h2>AMP listing whenever possible!</h2>
	
<p>Using &lt;amp-list&gt; you can easily process forms, load page content, and more without forcing a refresh of the page. Also, less content is ultimately sent over bandwith — and any interruption to the network results in a graceful error message so that the user can try again later.</p>

</div>

<div id='block-amp-form'>

<h2>AMP form responsiveness</h2>

<p>By using &lt;amp-form&gt; you gain a component that brings you close to production quality. With built-in handling for error messages and an approach that transmits content without forcing a page refresh, using &lt;amp-form&gt; provides a more elegant approach that benefits people whose connections may be severely disrupted.</p>
	
</div>
	
</body>

</html>
