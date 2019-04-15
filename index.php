<? $translatable_elements = file_get_contents('translatable_elements.json', FILE_USE_INCLUDE_PATH); ?>

<!-- Open document -->
<!doctype html> <html amp lang='en'>

<!-- Open HTML head -->
<head> <meta charset='utf-8'>

<!-- AMP JS -->
<script async src='https://cdn.ampproject.org/v0.js'></script>

<!-- Must define canonical url for amp -->
<link rel='canonical' href='https://amp-lab.narrative.fyi>

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

<!-- Custom CSS -->
<style amp-custom>
	<? include_once('style.css'); ?>
	</style>

</head>
	
<body>
	
<amp-state id=’translatableElements’>

	</amp-state>

<amp-img src='https://alisha.narrative.fyi/?action=image&image_id=7477454261341342759467916895795542287694' layout='responsive' width='1.858' height='1' amp-fx='parallax' data-parallax-factor='1.3'></amp-img>

<div id='block-intro'>

<h1>AMP Lab by narrative.fyi</h1>

<p>Chonan! (Kurdish <i>Hello, folks</i></i>) We are excited to show you live examples of the subject matter in our talk from 2019's Google AMP conference. Check it out below, and get in touch for any questions. Contact information is avaialable at <a href-"https://narrative.fyi">narrative.fyi</a>.</p>

<p>View the source code at <a href='https://github.com/leviclancy/amp-lab/'>github.com/leviclancy/amp-lab/</a> to peek under the hood.</p>

</div>

<div id='block-language-switching'>

<h2>Language switching!</h2>

<p>Language is one of the most fundamental boundaries for many war-impacted people, who often have the least access to English-learning institutions.</p>

<div id='language-switching-buttons'>
<span class='material-icons'>language</span>
<span>English</span>
<span>كوردی</span>
<span>عربي</span>
</div>

<div id='direction-switching-buttons'>
<span class='material-icons'>format_align_justify</span>
<span class='material-icons'>format_textdirection_l_to_r</span>
<span class='material-icons'>format_textdirection_r_to_l</span>
</div>

<span>Home</span>

<span>Sign in</span>
	
<p>And yes, this scales elegantly. We have had success with full-site implementation of this. You can opt to write a function to output the binding, or hard-write it into each p, span, button, or other HTML element.</p>

</div>

<div id='block-amp-list'>

<h2>AMP listing whenever possible!</h2>

</div>

<div id='block-amp-form'>

<h2>AMP form responsiveness</h2>

</div>
	
</body>

</html>
