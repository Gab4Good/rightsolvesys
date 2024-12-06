<?php
ini_set("include_path", '/home/ctliehfj/php:' . ini_get("include_path"));

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

function filter_string_polyfill(string $string): string
{
    $str = preg_replace('/\x00|<[^>]*>?/', '', $string);
    return str_replace(["'", '"'], ['&#39;', '&#34;'], $str);
}

$mail = new PHPMailer; 
//$mail->SMTPDebug = 3;      // Enable verbose debug output
$mail->isSMTP();     // Set mailer to use SMTP
$mail->Host = 'smtp.zoho.com;lim108.truehost.cloud';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;   // Enable SMTP authentication
$mail->Username = 'engage@rightsolvesys.com';     // SMTP username
$mail->Password = '';              // SMTP password
$mail->SMTPSecure = 'tls';        // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;      // TCP port to connect to or 25 for non secure
$mail->setFrom('engage@rightsolvesys.com', 'rightsolvesys.com');
$mail->addAddress('engage@rightsolvesys.com', 'RightSolve Help Desk');     // Add a recipient
$mail->addReplyTo('engage@rightsolvesys.com', 'RightSolve Help Desk');
$mail->isHTML(false);            // Set email format to HTML
$mail->Subject = 'Message from website visitor';

if (isset($_POST["inputEmail"])) {
    
  if ($_POST["inputEmail"] != '' && $_POST["firstName"] != '' && $_POST["lastName"] != '' && $_POST["phone"] != '' && $_POST["msgTextarea"] != '') {
		
	$SenderEmail= filter_input(INPUT_POST, "inputEmail", FILTER_SANITIZE_EMAIL);
	$firstName= filter_string_polyfill($_POST["firstName"]);
	$lastName= filter_string_polyfill($_POST["lastName"]);
	$phone= filter_string_polyfill($_POST["phone"]);
    $message= filter_string_polyfill($_POST["msgTextarea"]);
    $mailBody="Name: $firstName . '' . $lastName\r\nEmail: $SenderEmail\r\Phone: $phone\r\nVisitor Message: $message";
    
	$mail->Body    = $mailBody;
	if(!$mail->send()) {
		echo '<script>alert("Sorry! We could not send your message at this time. Please try again later.")</script>';
		$mail->ErrorInfo;
	} else {
		echo '<script>alert("Thank you! Your message has been sent.\r\n A member of the team will respond soon.")</script>';
	}

} else {
echo '<script>alert("Please review your entries and try again. All fields are required!")</script>';
}

}

?>

<!DOCTYPE html>
<html lang="en-US" class="no-js scheme_default">
<head>

<style id='wp-emoji-styles-inline-css' type='text/css'>
	img.wp-smiley, img.emoji {
		display: inline !important;
		border: none !important;
		box-shadow: none !important;
		height: 1em !important;
		width: 1em !important;
		margin: 0 0.07em !important;
		vertical-align: -0.1em !important;
		background: none !important;
		padding: 0 !important;
	}
</style>

<link rel='stylesheet' id='wp-block-library-css' href='wp-includes/css/dist/block-library/style.min84fc.css?ver=6.4.3' type='text/css' media='all' />

<style id='classic-theme-styles-inline-css' type='text/css'>
/*! This file is auto-generated */
.wp-block-button__link{color:#fff;background-color:#32373c;border-radius:9999px;box-shadow:none;text-decoration:none;padding:calc(.667em + 2px) calc(1.333em + 2px);font-size:1.125em}.wp-block-file__button{background:#32373c;color:#fff;text-decoration:none}
</style>

<style id='global-styles-inline-css' type='text/css'>
body{--wp--preset--color--black: #000000;--wp--preset--color--cyan-bluish-gray: #abb8c3;--wp--preset--color--white: #ffffff;--wp--preset--color--pale-pink: #f78da7;--wp--preset--color--vivid-red: #cf2e2e;--wp--preset--color--luminous-vivid-orange: #ff6900;--wp--preset--color--luminous-vivid-amber: #fcb900;--wp--preset--color--light-green-cyan: #7bdcb5;--wp--preset--color--vivid-green-cyan: #00d084;--wp--preset--color--pale-cyan-blue: #8ed1fc;--wp--preset--color--vivid-cyan-blue: #0693e3;--wp--preset--color--vivid-purple: #9b51e0;--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg,rgba(6,147,227,1) 0%,rgb(155,81,224) 100%);--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg,rgb(122,220,180) 0%,rgb(0,208,130) 100%);--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg,rgba(252,185,0,1) 0%,rgba(255,105,0,1) 100%);--wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg,rgba(255,105,0,1) 0%,rgb(207,46,46) 100%);--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg,rgb(238,238,238) 0%,rgb(169,184,195) 100%);--wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg,rgb(74,234,220) 0%,rgb(151,120,209) 20%,rgb(207,42,186) 40%,rgb(238,44,130) 60%,rgb(251,105,98) 80%,rgb(254,248,76) 100%);--wp--preset--gradient--blush-light-purple: linear-gradient(135deg,rgb(255,206,236) 0%,rgb(152,150,240) 100%);--wp--preset--gradient--blush-bordeaux: linear-gradient(135deg,rgb(254,205,165) 0%,rgb(254,45,45) 50%,rgb(107,0,62) 100%);--wp--preset--gradient--luminous-dusk: linear-gradient(135deg,rgb(255,203,112) 0%,rgb(199,81,192) 50%,rgb(65,88,208) 100%);--wp--preset--gradient--pale-ocean: linear-gradient(135deg,rgb(255,245,203) 0%,rgb(182,227,212) 50%,rgb(51,167,181) 100%);--wp--preset--gradient--electric-grass: linear-gradient(135deg,rgb(202,248,128) 0%,rgb(113,206,126) 100%);--wp--preset--gradient--midnight: linear-gradient(135deg,rgb(2,3,129) 0%,rgb(40,116,252) 100%);--wp--preset--font-size--small: 13px;--wp--preset--font-size--medium: 20px;--wp--preset--font-size--large: 36px;--wp--preset--font-size--x-large: 42px;--wp--preset--spacing--20: 0.44rem;--wp--preset--spacing--30: 0.67rem;--wp--preset--spacing--40: 1rem;--wp--preset--spacing--50: 1.5rem;--wp--preset--spacing--60: 2.25rem;--wp--preset--spacing--70: 3.38rem;--wp--preset--spacing--80: 5.06rem;--wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);--wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);--wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);--wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);--wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);}:where(.is-layout-flex){gap: 0.5em;}:where(.is-layout-grid){gap: 0.5em;}body .is-layout-flow > .alignleft{float: left;margin-inline-start: 0;margin-inline-end: 2em;}body .is-layout-flow > .alignright{float: right;margin-inline-start: 2em;margin-inline-end: 0;}body .is-layout-flow > .aligncenter{margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > .alignleft{float: left;margin-inline-start: 0;margin-inline-end: 2em;}body .is-layout-constrained > .alignright{float: right;margin-inline-start: 2em;margin-inline-end: 0;}body .is-layout-constrained > .aligncenter{margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > :where(:not(.alignleft):not(.alignright):not(.alignfull)){max-width: var(--wp--style--global--content-size);margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > .alignwide{max-width: var(--wp--style--global--wide-size);}body .is-layout-flex{display: flex;}body .is-layout-flex{flex-wrap: wrap;align-items: center;}body .is-layout-flex > *{margin: 0;}body .is-layout-grid{display: grid;}body .is-layout-grid > *{margin: 0;}:where(.wp-block-columns.is-layout-flex){gap: 2em;}:where(.wp-block-columns.is-layout-grid){gap: 2em;}:where(.wp-block-post-template.is-layout-flex){gap: 1.25em;}:where(.wp-block-post-template.is-layout-grid){gap: 1.25em;}.has-black-color{color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-color{color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-color{color: var(--wp--preset--color--white) !important;}.has-pale-pink-color{color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-color{color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-color{color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-color{color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-color{color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-color{color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-color{color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-color{color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-color{color: var(--wp--preset--color--vivid-purple) !important;}.has-black-background-color{background-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-background-color{background-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-background-color{background-color: var(--wp--preset--color--white) !important;}.has-pale-pink-background-color{background-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-background-color{background-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-background-color{background-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-background-color{background-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-background-color{background-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-background-color{background-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-background-color{background-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-background-color{background-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-background-color{background-color: var(--wp--preset--color--vivid-purple) !important;}.has-black-border-color{border-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-border-color{border-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-border-color{border-color: var(--wp--preset--color--white) !important;}.has-pale-pink-border-color{border-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-border-color{border-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-border-color{border-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-border-color{border-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-border-color{border-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-border-color{border-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-border-color{border-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-border-color{border-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-border-color{border-color: var(--wp--preset--color--vivid-purple) !important;}.has-vivid-cyan-blue-to-vivid-purple-gradient-background{background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;}.has-light-green-cyan-to-vivid-green-cyan-gradient-background{background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;}.has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;}.has-luminous-vivid-orange-to-vivid-red-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;}.has-very-light-gray-to-cyan-bluish-gray-gradient-background{background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;}.has-cool-to-warm-spectrum-gradient-background{background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;}.has-blush-light-purple-gradient-background{background: var(--wp--preset--gradient--blush-light-purple) !important;}.has-blush-bordeaux-gradient-background{background: var(--wp--preset--gradient--blush-bordeaux) !important;}.has-luminous-dusk-gradient-background{background: var(--wp--preset--gradient--luminous-dusk) !important;}.has-pale-ocean-gradient-background{background: var(--wp--preset--gradient--pale-ocean) !important;}.has-electric-grass-gradient-background{background: var(--wp--preset--gradient--electric-grass) !important;}.has-midnight-gradient-background{background: var(--wp--preset--gradient--midnight) !important;}.has-small-font-size{font-size: var(--wp--preset--font-size--small) !important;}.has-medium-font-size{font-size: var(--wp--preset--font-size--medium) !important;}.has-large-font-size{font-size: var(--wp--preset--font-size--large) !important;}.has-x-large-font-size{font-size: var(--wp--preset--font-size--x-large) !important;}
.wp-block-navigation a:where(:not(.wp-element-button)){color: inherit;}
:where(.wp-block-post-template.is-layout-flex){gap: 1.25em;}:where(.wp-block-post-template.is-layout-grid){gap: 1.25em;}
:where(.wp-block-columns.is-layout-flex){gap: 2em;}:where(.wp-block-columns.is-layout-grid){gap: 2em;}
.wp-block-pullquote{font-size: 1.5em;line-height: 1.6;}
</style>

<link data-minify="1" rel='stylesheet' id='engitech-flaticon-font-css' href='wp-content/cache/min/4/engitech/wp-content/themes/engitech/css/flaticon8a0e.css?ver=1701759025' type='text/css' media='all' />
<link data-minify="1" rel='stylesheet' id='slick-slider-css' href='wp-content/cache/min/4/engitech/wp-content/themes/engitech/css/slick8a0e.css?ver=1701759025' type='text/css' media='all' />
<link data-minify="1" rel='stylesheet' id='slick-theme-css' href='wp-content/cache/min/4/engitech/wp-content/themes/engitech/css/slick-theme8a0e.css?ver=1701759025' type='text/css' media='all' />
<link data-minify="1" rel='stylesheet' id='engitech-style-css' href='wp-content/cache/min/4/engitech/wp-content/themes/engitech/style8a0e.css?ver=1701759025' type='text/css' media='all' />
<link data-minify="1" rel='stylesheet' id='engitech-preload-css' href='wp-content/cache/min/4/engitech/wp-content/themes/engitech/css/royal-preload8a0e.css?ver=1701759025' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-post-2274-css' href='wp-content/uploads/sites/4/elementor/css/post-2274f990.css?ver=1703559836' type='text/css' media='all' />


<meta name="generator" content="Elementor 3.16.6; features: e_dom_optimization, e_optimized_assets_loading, additional_custom_breakpoints; settings: css_print_method-external, google_font-enabled, font_display-auto">
<meta name="generator" content="Powered by Slider Revolution 6.6.11 - responsive, Mobile-Friendly Slider Plugin for WordPress with comfortable drag and drop interface." />

<link rel="stylesheet" href="css/eng_style.css">

	<script>
		window.addEventListener('DOMContentLoaded', function() {
			
			if (window.matchMedia('(max-width: 767px)').matches) {
				// Remove desktop images
				var desktopImages = document.querySelectorAll('.dsk');
				desktopImages.forEach(imgElement => {
					imgElement.remove();
				});
			} 
		});
	  </script>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="format-detection" content="telephone=no">
<link rel="profile" href="http://gmpg.org/xfn/11">

<title>RightSolve Systems | Purpose-perfect IT Solutions</title>

<meta name='robots' content='noindex, nofollow' />
<link rel='dns-prefetch' href='http://fonts.googleapis.com/' />
			<meta property="og:type" content="website" />
			<meta property="og:site_name" content="RightSolve Systems" />
			<meta property="og:description" content="Golf Course &amp; Playing Ground WordPress Theme" />
							<meta property="og:image" content="wp-content/uploads/2022/06/logo-dark.png" />
				<script type="text/javascript">
/* <![CDATA[ */
window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/svg\/","svgExt":".svg","source":{"concatemoji":"https:\/\/golfclub.themerex.net\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.4.3"}};
/*! This file is auto-generated */
!function(i,n){var o,s,e;function c(e){try{var t={supportTests:e,timestamp:(new Date).valueOf()};sessionStorage.setItem(o,JSON.stringify(t))}catch(e){}}function p(e,t,n){e.clearRect(0,0,e.canvas.width,e.canvas.height),e.fillText(t,0,0);var t=new Uint32Array(e.getImageData(0,0,e.canvas.width,e.canvas.height).data),r=(e.clearRect(0,0,e.canvas.width,e.canvas.height),e.fillText(n,0,0),new Uint32Array(e.getImageData(0,0,e.canvas.width,e.canvas.height).data));return t.every(function(e,t){return e===r[t]})}function u(e,t,n){switch(t){case"flag":return n(e,"\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f","\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f")?!1:!n(e,"\ud83c\uddfa\ud83c\uddf3","\ud83c\uddfa\u200b\ud83c\uddf3")&&!n(e,"\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f","\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f");case"emoji":return!n(e,"\ud83e\udef1\ud83c\udffb\u200d\ud83e\udef2\ud83c\udfff","\ud83e\udef1\ud83c\udffb\u200b\ud83e\udef2\ud83c\udfff")}return!1}function f(e,t,n){var r="undefined"!=typeof WorkerGlobalScope&&self instanceof WorkerGlobalScope?new OffscreenCanvas(300,150):i.createElement("canvas"),a=r.getContext("2d",{willReadFrequently:!0}),o=(a.textBaseline="top",a.font="600 32px Arial",{});return e.forEach(function(e){o[e]=t(a,e,n)}),o}function t(e){var t=i.createElement("script");t.src=e,t.defer=!0,i.head.appendChild(t)}"undefined"!=typeof Promise&&(o="wpEmojiSettingsSupports",s=["flag","emoji"],n.supports={everything:!0,everythingExceptFlag:!0},e=new Promise(function(e){i.addEventListener("DOMContentLoaded",e,{once:!0})}),new Promise(function(t){var n=function(){try{var e=JSON.parse(sessionStorage.getItem(o));if("object"==typeof e&&"number"==typeof e.timestamp&&(new Date).valueOf()<e.timestamp+604800&&"object"==typeof e.supportTests)return e.supportTests}catch(e){}return null}();if(!n){if("undefined"!=typeof Worker&&"undefined"!=typeof OffscreenCanvas&&"undefined"!=typeof URL&&URL.createObjectURL&&"undefined"!=typeof Blob)try{var e="postMessage("+f.toString()+"("+[JSON.stringify(s),u.toString(),p.toString()].join(",")+"));",r=new Blob([e],{type:"text/javascript"}),a=new Worker(URL.createObjectURL(r),{name:"wpTestEmojiSupports"});return void(a.onmessage=function(e){c(n=e.data),a.terminate(),t(n)})}catch(e){}c(n=f(s,u,p))}t(n)}).then(function(e){for(var t in e)n.supports[t]=e[t],n.supports.everything=n.supports.everything&&n.supports[t],"flag"!==t&&(n.supports.everythingExceptFlag=n.supports.everythingExceptFlag&&n.supports[t]);n.supports.everythingExceptFlag=n.supports.everythingExceptFlag&&!n.supports.flag,n.DOMReady=!1,n.readyCallback=function(){n.DOMReady=!0}}).then(function(){return e}).then(function(){var e;n.supports.everything||(n.readyCallback(),(e=n.source||{}).concatemoji?t(e.concatemoji):e.wpemoji&&e.twemoji&&(t(e.twemoji),t(e.wpemoji)))}))}((window,document),window._wpemojiSettings);
/* ]]> */
</script>
<link property="stylesheet" rel='stylesheet' id='trx_demo_icons-css' href='wp-content/plugins/trx_demo/css/font-icons/css/trx_demo_icons.css' type='text/css' media='all' />
<link property="stylesheet" rel='stylesheet' id='n7-golf-club-fontello-css' href='wp-content/themes/n7-golf-club/skins/default/css/font-icons/css/fontello.css' type='text/css' media='all' />
<link property="stylesheet" rel='stylesheet' id='sbi_styles-css' href='wp-content/plugins/instagram-feed/css/sbi-styles.minfc7a.css?ver=6.0.6' type='text/css' media='all' />
<style id='wp-emoji-styles-inline-css' type='text/css'>

	img.wp-smiley, img.emoji {
		display: inline !important;
		border: none !important;
		box-shadow: none !important;
		height: 1em !important;
		width: 1em !important;
		margin: 0 0.07em !important;
		vertical-align: -0.1em !important;
		background: none !important;
		padding: 0 !important;
	}
</style>
<link property="stylesheet" rel='stylesheet' id='wp-block-library-css' href='wp-includes/css/dist/block-library/style.min84fc.css?ver=6.4.3' type='text/css' media='all' />

<style id='classic-theme-styles-inline-css' type='text/css'>
/*! This file is auto-generated */
.wp-block-button__link{color:#fff;background-color:#32373c;border-radius:9999px;box-shadow:none;text-decoration:none;padding:calc(.667em + 2px) calc(1.333em + 2px);font-size:1.125em}.wp-block-file__button{background:#32373c;color:#fff;text-decoration:none}
</style>
<style id='global-styles-inline-css' type='text/css'>
body{--wp--preset--color--black: #000000;--wp--preset--color--cyan-bluish-gray: #abb8c3;--wp--preset--color--white: #ffffff;--wp--preset--color--pale-pink: #f78da7;--wp--preset--color--vivid-red: #cf2e2e;--wp--preset--color--luminous-vivid-orange: #ff6900;--wp--preset--color--luminous-vivid-amber: #fcb900;--wp--preset--color--light-green-cyan: #7bdcb5;--wp--preset--color--vivid-green-cyan: #00d084;--wp--preset--color--pale-cyan-blue: #8ed1fc;--wp--preset--color--vivid-cyan-blue: #0693e3;--wp--preset--color--vivid-purple: #9b51e0;--wp--preset--color--bg-color: #FFFFFF;--wp--preset--color--bd-color: #DBD9D7;--wp--preset--color--text-dark: #1D1A0C;--wp--preset--color--text-light: #9A9694;--wp--preset--color--text-link: #07d368;--wp--preset--color--text-hover: #1BA25B;--wp--preset--color--text-link-2: #A6985B;--wp--preset--color--text-hover-2: #908246;--wp--preset--color--text-link-3: #9AA65B;--wp--preset--color--text-hover-3: #818D44;--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg,rgba(6,147,227,1) 0%,rgb(155,81,224) 100%);--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg,rgb(122,220,180) 0%,rgb(0,208,130) 100%);--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg,rgba(252,185,0,1) 0%,rgba(255,105,0,1) 100%);--wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg,rgba(255,105,0,1) 0%,rgb(207,46,46) 100%);--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg,rgb(238,238,238) 0%,rgb(169,184,195) 100%);--wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg,rgb(74,234,220) 0%,rgb(151,120,209) 20%,rgb(207,42,186) 40%,rgb(238,44,130) 60%,rgb(251,105,98) 80%,rgb(254,248,76) 100%);--wp--preset--gradient--blush-light-purple: linear-gradient(135deg,rgb(255,206,236) 0%,rgb(152,150,240) 100%);--wp--preset--gradient--blush-bordeaux: linear-gradient(135deg,rgb(254,205,165) 0%,rgb(254,45,45) 50%,rgb(107,0,62) 100%);--wp--preset--gradient--luminous-dusk: linear-gradient(135deg,rgb(255,203,112) 0%,rgb(199,81,192) 50%,rgb(65,88,208) 100%);--wp--preset--gradient--pale-ocean: linear-gradient(135deg,rgb(255,245,203) 0%,rgb(182,227,212) 50%,rgb(51,167,181) 100%);--wp--preset--gradient--electric-grass: linear-gradient(135deg,rgb(202,248,128) 0%,rgb(113,206,126) 100%);--wp--preset--gradient--midnight: linear-gradient(135deg,rgb(2,3,129) 0%,rgb(40,116,252) 100%);--wp--preset--font-size--small: 13px;--wp--preset--font-size--medium: 20px;--wp--preset--font-size--large: 36px;--wp--preset--font-size--x-large: 42px;--wp--preset--spacing--20: 0.44rem;--wp--preset--spacing--30: 0.67rem;--wp--preset--spacing--40: 1rem;--wp--preset--spacing--50: 1.5rem;--wp--preset--spacing--60: 2.25rem;--wp--preset--spacing--70: 3.38rem;--wp--preset--spacing--80: 5.06rem;--wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);--wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);--wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);--wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);--wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);}:where(.is-layout-flex){gap: 0.5em;}:where(.is-layout-grid){gap: 0.5em;}body .is-layout-flow > .alignleft{float: left;margin-inline-start: 0;margin-inline-end: 2em;}body .is-layout-flow > .alignright{float: right;margin-inline-start: 2em;margin-inline-end: 0;}body .is-layout-flow > .aligncenter{margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > .alignleft{float: left;margin-inline-start: 0;margin-inline-end: 2em;}body .is-layout-constrained > .alignright{float: right;margin-inline-start: 2em;margin-inline-end: 0;}body .is-layout-constrained > .aligncenter{margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > :where(:not(.alignleft):not(.alignright):not(.alignfull)){max-width: var(--wp--style--global--content-size);margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > .alignwide{max-width: var(--wp--style--global--wide-size);}body .is-layout-flex{display: flex;}body .is-layout-flex{flex-wrap: wrap;align-items: center;}body .is-layout-flex > *{margin: 0;}body .is-layout-grid{display: grid;}body .is-layout-grid > *{margin: 0;}:where(.wp-block-columns.is-layout-flex){gap: 2em;}:where(.wp-block-columns.is-layout-grid){gap: 2em;}:where(.wp-block-post-template.is-layout-flex){gap: 1.25em;}:where(.wp-block-post-template.is-layout-grid){gap: 1.25em;}.has-black-color{color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-color{color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-color{color: var(--wp--preset--color--white) !important;}.has-pale-pink-color{color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-color{color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-color{color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-color{color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-color{color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-color{color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-color{color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-color{color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-color{color: var(--wp--preset--color--vivid-purple) !important;}.has-black-background-color{background-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-background-color{background-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-background-color{background-color: var(--wp--preset--color--white) !important;}.has-pale-pink-background-color{background-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-background-color{background-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-background-color{background-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-background-color{background-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-background-color{background-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-background-color{background-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-background-color{background-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-background-color{background-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-background-color{background-color: var(--wp--preset--color--vivid-purple) !important;}.has-black-border-color{border-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-border-color{border-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-border-color{border-color: var(--wp--preset--color--white) !important;}.has-pale-pink-border-color{border-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-border-color{border-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-border-color{border-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-border-color{border-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-border-color{border-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-border-color{border-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-border-color{border-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-border-color{border-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-border-color{border-color: var(--wp--preset--color--vivid-purple) !important;}.has-vivid-cyan-blue-to-vivid-purple-gradient-background{background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;}.has-light-green-cyan-to-vivid-green-cyan-gradient-background{background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;}.has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;}.has-luminous-vivid-orange-to-vivid-red-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;}.has-very-light-gray-to-cyan-bluish-gray-gradient-background{background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;}.has-cool-to-warm-spectrum-gradient-background{background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;}.has-blush-light-purple-gradient-background{background: var(--wp--preset--gradient--blush-light-purple) !important;}.has-blush-bordeaux-gradient-background{background: var(--wp--preset--gradient--blush-bordeaux) !important;}.has-luminous-dusk-gradient-background{background: var(--wp--preset--gradient--luminous-dusk) !important;}.has-pale-ocean-gradient-background{background: var(--wp--preset--gradient--pale-ocean) !important;}.has-electric-grass-gradient-background{background: var(--wp--preset--gradient--electric-grass) !important;}.has-midnight-gradient-background{background: var(--wp--preset--gradient--midnight) !important;}.has-small-font-size{font-size: var(--wp--preset--font-size--small) !important;}.has-medium-font-size{font-size: var(--wp--preset--font-size--medium) !important;}.has-large-font-size{font-size: var(--wp--preset--font-size--large) !important;}.has-x-large-font-size{font-size: var(--wp--preset--font-size--x-large) !important;}
.wp-block-navigation a:where(:not(.wp-element-button)){color: inherit;}
:where(.wp-block-post-template.is-layout-flex){gap: 1.25em;}:where(.wp-block-post-template.is-layout-grid){gap: 1.25em;}
:where(.wp-block-columns.is-layout-flex){gap: 2em;}:where(.wp-block-columns.is-layout-grid){gap: 2em;}
.wp-block-pullquote{font-size: 1.5em;line-height: 1.6;}
</style>
<link property="stylesheet" rel='stylesheet' id='booked-tooltipster-css' href='wp-content/plugins/quickcal/assets/js/tooltipster/css/tooltipster9b70.css?ver=3.3.0' type='text/css' media='all' />
<link property="stylesheet" rel='stylesheet' id='booked-tooltipster-theme-css' href='wp-content/plugins/quickcal/assets/js/tooltipster/css/themes/tooltipster-light9b70.css?ver=3.3.0' type='text/css' media='all' />
<link property="stylesheet" rel='stylesheet' id='trx_demo_panels-css' href='wp-content/plugins/trx_demo/css/trx_demo_panels.css' type='text/css' media='all' />
<link property="stylesheet" rel='preload' as='font' type='font/woff2' crossorigin='anonymous' id='tinvwl-webfont-font-css' href='wp-content/plugins/ti-woocommerce-wishlist/assets/fonts/tinvwl-webfontffc1.woff2?ver=xu2uyi'  media='all' />
<link property="stylesheet" rel='stylesheet' id='elementor-frontend-css' href='wp-content/plugins/elementor/assets/css/frontend.minf3df.css?ver=3.7.2' type='text/css' media='all' />
<style id='elementor-frontend-inline-css' type='text/css'>
.elementor-kit-15{--e-global-color-primary:#6EC1E4;--e-global-color-secondary:#54595F;--e-global-color-text:#7A7A7A;--e-global-color-accent:#61CE70;--e-global-color-61c01e98:#4054B2;--e-global-color-69bf31ed:#23A455;--e-global-color-7a1ccbe5:#000;--e-global-color-13ed1179:#FFF;--e-global-typography-primary-font-family:"Roboto";--e-global-typography-primary-font-weight:600;--e-global-typography-secondary-font-family:"Roboto Slab";--e-global-typography-secondary-font-weight:400;--e-global-typography-text-font-family:"Roboto";--e-global-typography-text-font-weight:400;--e-global-typography-accent-font-family:"Roboto";--e-global-typography-accent-font-weight:500;}.elementor-section.elementor-section-boxed > .elementor-container{max-width:1320px;}.e-container{--container-max-width:1320px;}.elementor-widget:not(:last-child){margin-bottom:0px;}.elementor-element{--widgets-spacing:0px;}.sc_layouts_title_caption{display:var(--page-title-display);}@media(max-width:1024px){.elementor-section.elementor-section-boxed > .elementor-container{max-width:1024px;}.e-container{--container-max-width:1024px;}}@media(max-width:767px){.elementor-section.elementor-section-boxed > .elementor-container{max-width:767px;}.e-container{--container-max-width:767px;}}
.elementor-18349 .elementor-element.elementor-element-2300b1a{z-index:1;}.elementor-18349 .elementor-element.elementor-element-2f98621:not(.elementor-motion-effects-element-type-background), .elementor-18349 .elementor-element.elementor-element-2f98621 > .elementor-motion-effects-container > .elementor-motion-effects-layer{background-color:#F8F8F4;}.elementor-18349 .elementor-element.elementor-element-2f98621{transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;}.elementor-18349 .elementor-element.elementor-element-2f98621 > .elementor-background-overlay{transition:background 0.3s, border-radius 0.3s, opacity 0.3s;}.elementor-18349 .elementor-element.elementor-element-c55826d{--spacer-size:50px;}.elementor-18349 .elementor-element.elementor-element-a7ddda9 .sc_item_title_text{-webkit-text-stroke-width:0px;}.elementor-18349 .elementor-element.elementor-element-a7ddda9 .sc_item_title_text2{-webkit-text-stroke-width:0px;}.elementor-18349 .elementor-element.elementor-element-bf4edfa{--spacer-size:40px;}.elementor-18349 .elementor-element.elementor-element-a6de75b .sc_item_title_text{-webkit-text-stroke-width:0px;}.elementor-18349 .elementor-element.elementor-element-a6de75b .sc_item_title_text2{-webkit-text-stroke-width:0px;}.elementor-18349 .elementor-element.elementor-element-d32eefa{--spacer-size:50px;}.elementor-18349 .elementor-element.elementor-element-0c8e452{--spacer-size:50px;}.elementor-18349 .elementor-element.elementor-element-5496878{text-align:left;}.elementor-18349 .elementor-element.elementor-element-0ce8e8e{color:#FFFFFF;width:340px;max-width:340px;bottom:0px;}.elementor-18349 .elementor-element.elementor-element-0ce8e8e > .elementor-widget-container{padding:50px 20px 65px 50px;background-color:#19140F;}body:not(.rtl) .elementor-18349 .elementor-element.elementor-element-0ce8e8e{right:0px;}body.rtl .elementor-18349 .elementor-element.elementor-element-0ce8e8e{left:0px;}.elementor-18349 .elementor-element.elementor-element-dc197d3{color:#FFFFFF;width:100%;max-width:100%;}.elementor-18349 .elementor-element.elementor-element-dc197d3 > .elementor-widget-container{padding:40px 20px 40px 40px;background-color:#19140F;}.elementor-bc-flex-widget .elementor-18349 .elementor-element.elementor-element-b0d9b41.elementor-column .elementor-column-wrap{align-items:center;}.elementor-18349 .elementor-element.elementor-element-b0d9b41.elementor-column.elementor-element[data-element_type="column"] > .elementor-column-wrap.elementor-element-populated > .elementor-widget-wrap{align-content:center;align-items:center;}.elementor-18349 .elementor-element.elementor-element-b0d9b41 > .elementor-element-populated.elementor-column-wrap{padding:0% 0% 0% 18%;}.elementor-18349 .elementor-element.elementor-element-b0d9b41 > .elementor-element-populated.elementor-widget-wrap{padding:0% 0% 0% 18%;}.elementor-18349 .elementor-element.elementor-element-1b0727e .sc_item_title_text{-webkit-text-stroke-width:0px;}.elementor-18349 .elementor-element.elementor-element-1b0727e .sc_item_title_text2{-webkit-text-stroke-width:0px;}.elementor-18349 .elementor-element.elementor-element-8e55de0{--spacer-size:30px;}.elementor-18349 .elementor-element.elementor-element-f484ce4{--divider-border-style:solid;--divider-border-width:1px;}.elementor-18349 .elementor-element.elementor-element-f484ce4 .elementor-divider-separator{width:100%;}.elementor-18349 .elementor-element.elementor-element-f484ce4 .elementor-divider{padding-top:25px;padding-bottom:25px;}.elementor-18349 .elementor-element.elementor-element-dc59d2d{--spacer-size:40px;}.elementor-18349 .elementor-element.elementor-element-1b596d9{--spacer-size:50px;}.elementor-18349 .elementor-element.elementor-element-e906230 .sc_item_title_text{-webkit-text-stroke-width:0px;}.elementor-18349 .elementor-element.elementor-element-e906230 .sc_item_title_text2{-webkit-text-stroke-width:0px;}.elementor-18349 .elementor-element.elementor-element-1838128{--spacer-size:50px;}.elementor-18349 .elementor-element.elementor-element-a834c66 .sc_item_title_text{-webkit-text-stroke-width:0px;}.elementor-18349 .elementor-element.elementor-element-a834c66 .sc_item_title_text2{-webkit-text-stroke-width:0px;}.elementor-18349 .elementor-element.elementor-element-2117a32{--spacer-size:40px;}.elementor-18349 .elementor-element.elementor-element-6d3f01c .sc_item_title_text{-webkit-text-stroke-width:0px;}.elementor-18349 .elementor-element.elementor-element-6d3f01c .sc_item_title_text2{-webkit-text-stroke-width:0px;}.elementor-18349 .elementor-element.elementor-element-31d184b{--spacer-size:70px;}.elementor-18349 .elementor-element.elementor-element-08297ce:not(.elementor-motion-effects-element-type-background), .elementor-18349 .elementor-element.elementor-element-08297ce > .elementor-motion-effects-container > .elementor-motion-effects-layer{background-color:#F8F8F4;}.elementor-18349 .elementor-element.elementor-element-08297ce{transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;}.elementor-18349 .elementor-element.elementor-element-08297ce > .elementor-background-overlay{transition:background 0.3s, border-radius 0.3s, opacity 0.3s;}.elementor-18349 .elementor-element.elementor-element-a02fd50{--spacer-size:50px;}.elementor-18349 .elementor-element.elementor-element-82fd67f:not(.elementor-motion-effects-element-type-background), .elementor-18349 .elementor-element.elementor-element-82fd67f > .elementor-motion-effects-container > .elementor-motion-effects-layer{background-color:#F8F8F4;}.elementor-18349 .elementor-element.elementor-element-82fd67f{transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;}.elementor-18349 .elementor-element.elementor-element-82fd67f > .elementor-background-overlay{transition:background 0.3s, border-radius 0.3s, opacity 0.3s;}.elementor-18349 .elementor-element.elementor-element-ceb0f34 .sc_item_title_text{-webkit-text-stroke-width:0px;}.elementor-18349 .elementor-element.elementor-element-ceb0f34 .sc_item_title_text2{-webkit-text-stroke-width:0px;}.elementor-18349 .elementor-element.elementor-element-c848c22{--spacer-size:50px;}.elementor-18349 .elementor-element.elementor-element-fcfe6a8{--spacer-size:50px;}.elementor-18349 .elementor-element.elementor-element-58bd062:not(.elementor-motion-effects-element-type-background), .elementor-18349 .elementor-element.elementor-element-58bd062 > .elementor-motion-effects-container > .elementor-motion-effects-layer{background-color:#F8F8F4;}.elementor-18349 .elementor-element.elementor-element-58bd062{transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;}.elementor-18349 .elementor-element.elementor-element-58bd062 > .elementor-background-overlay{transition:background 0.3s, border-radius 0.3s, opacity 0.3s;}.elementor-18349 .elementor-element.elementor-element-3c94adb{--spacer-size:50px;}.elementor-18349 .elementor-element.elementor-element-8bc8dd3:not(.elementor-motion-effects-element-type-background), .elementor-18349 .elementor-element.elementor-element-8bc8dd3 > .elementor-motion-effects-container > .elementor-motion-effects-layer{background-color:#F8F8F4;}.elementor-18349 .elementor-element.elementor-element-8bc8dd3{transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;}.elementor-18349 .elementor-element.elementor-element-8bc8dd3 > .elementor-background-overlay{transition:background 0.3s, border-radius 0.3s, opacity 0.3s;}.elementor-18349 .elementor-element.elementor-element-6bb145a .sc_item_title_text{-webkit-text-stroke-width:0px;}.elementor-18349 .elementor-element.elementor-element-6bb145a .sc_item_title_text2{-webkit-text-stroke-width:0px;}.elementor-18349 .elementor-element.elementor-element-dc8ff1c:not(.elementor-motion-effects-element-type-background), .elementor-18349 .elementor-element.elementor-element-dc8ff1c > .elementor-motion-effects-container > .elementor-motion-effects-layer{background-color:#F8F8F4;}.elementor-18349 .elementor-element.elementor-element-dc8ff1c{transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;}.elementor-18349 .elementor-element.elementor-element-dc8ff1c > .elementor-background-overlay{transition:background 0.3s, border-radius 0.3s, opacity 0.3s;}.elementor-18349 .elementor-element.elementor-element-20b2b3b{--spacer-size:50px;}.elementor-18349 .elementor-element.elementor-element-bb31028:not(.elementor-motion-effects-element-type-background) > .elementor-column-wrap, .elementor-18349 .elementor-element.elementor-element-bb31028 > .elementor-column-wrap > .elementor-motion-effects-container > .elementor-motion-effects-layer{background-color:#19140F;}.elementor-18349 .elementor-element.elementor-element-bb31028 > .elementor-element-populated{transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;}.elementor-18349 .elementor-element.elementor-element-bb31028 > .elementor-element-populated > .elementor-background-overlay{transition:background 0.3s, border-radius 0.3s, opacity 0.3s;}.elementor-18349 .elementor-element.elementor-element-bb31028 > .elementor-element-populated.elementor-column-wrap{padding:0% 12% 0% 12%;}.elementor-18349 .elementor-element.elementor-element-bb31028 > .elementor-element-populated.elementor-widget-wrap{padding:0% 12% 0% 12%;}.elementor-18349 .elementor-element.elementor-element-c8b8e34{--spacer-size:50px;}.elementor-18349 .elementor-element.elementor-element-606cfc7 .sc_item_title_text{-webkit-text-stroke-width:0px;}.elementor-18349 .elementor-element.elementor-element-606cfc7 .sc_item_title_text2{-webkit-text-stroke-width:0px;}.elementor-18349 .elementor-element.elementor-element-4f23cfd{--spacer-size:45px;}.elementor-18349 .elementor-element.elementor-element-7b68d7c .sc_item_title_text{-webkit-text-stroke-width:0px;}.elementor-18349 .elementor-element.elementor-element-7b68d7c .sc_item_title_text2{-webkit-text-stroke-width:0px;}.elementor-18349 .elementor-element.elementor-element-6145b94{--spacer-size:80px;}.elementor-bc-flex-widget .elementor-18349 .elementor-element.elementor-element-63da9e5.elementor-column .elementor-column-wrap{align-items:center;}.elementor-18349 .elementor-element.elementor-element-63da9e5.elementor-column.elementor-element[data-element_type="column"] > .elementor-column-wrap.elementor-element-populated > .elementor-widget-wrap{align-content:center;align-items:center;}.elementor-18349 .elementor-element.elementor-element-63da9e5:not(.elementor-motion-effects-element-type-background) > .elementor-column-wrap, .elementor-18349 .elementor-element.elementor-element-63da9e5 > .elementor-column-wrap > .elementor-motion-effects-container > .elementor-motion-effects-layer{background-image:url("wp-content/uploads/2022/06/image-24-copyright.jpg");background-position:center left;background-repeat:no-repeat;background-size:cover;}.elementor-18349 .elementor-element.elementor-element-63da9e5 > .elementor-element-populated{transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;}.elementor-18349 .elementor-element.elementor-element-63da9e5 > .elementor-element-populated > .elementor-background-overlay{transition:background 0.3s, border-radius 0.3s, opacity 0.3s;}.elementor-18349 .elementor-element.elementor-element-48afad0 .elementor-icon-wrapper{text-align:center;}.elementor-18349 .elementor-element.elementor-element-48afad0.elementor-view-stacked .elementor-icon{background-color:#FFFFFF;color:#000000;}.elementor-18349 .elementor-element.elementor-element-48afad0.elementor-view-framed .elementor-icon, .elementor-18349 .elementor-element.elementor-element-48afad0.elementor-view-default .elementor-icon{color:#FFFFFF;border-color:#FFFFFF;}.elementor-18349 .elementor-element.elementor-element-48afad0.elementor-view-framed .elementor-icon, .elementor-18349 .elementor-element.elementor-element-48afad0.elementor-view-default .elementor-icon svg{fill:#FFFFFF;}.elementor-18349 .elementor-element.elementor-element-48afad0.elementor-view-framed .elementor-icon{background-color:#000000;}.elementor-18349 .elementor-element.elementor-element-48afad0.elementor-view-stacked .elementor-icon svg{fill:#000000;}.elementor-18349 .elementor-element.elementor-element-48afad0.elementor-view-stacked .elementor-icon:hover{background-color:#3DB772;color:#FFFFFF;}.elementor-18349 .elementor-element.elementor-element-48afad0.elementor-view-framed .elementor-icon:hover, .elementor-18349 .elementor-element.elementor-element-48afad0.elementor-view-default .elementor-icon:hover{color:#3DB772;border-color:#3DB772;}.elementor-18349 .elementor-element.elementor-element-48afad0.elementor-view-framed .elementor-icon:hover, .elementor-18349 .elementor-element.elementor-element-48afad0.elementor-view-default .elementor-icon:hover svg{fill:#3DB772;}.elementor-18349 .elementor-element.elementor-element-48afad0.elementor-view-framed .elementor-icon:hover{background-color:#FFFFFF;}.elementor-18349 .elementor-element.elementor-element-48afad0.elementor-view-stacked .elementor-icon:hover svg{fill:#FFFFFF;}.elementor-18349 .elementor-element.elementor-element-48afad0 .elementor-icon{font-size:22px;padding:31px;}.elementor-18349 .elementor-element.elementor-element-48afad0 .elementor-icon i, .elementor-18349 .elementor-element.elementor-element-48afad0 .elementor-icon svg{transform:rotate(0deg);}.elementor-18349 .elementor-element.elementor-element-8d77a64{padding:20px 0px 20px 0px;}.elementor-18349 .elementor-element.elementor-element-41ab255{--spacer-size:50px;}.elementor-18349 .elementor-element.elementor-element-603eb8f{--spacer-size:50px;}.elementor-18349 .elementor-element.elementor-element-3445215 .sc_item_title_text{-webkit-text-stroke-width:0px;}.elementor-18349 .elementor-element.elementor-element-3445215 .sc_item_title_text2{-webkit-text-stroke-width:0px;}.elementor-18349 .elementor-element.elementor-element-e1d021f{--spacer-size:45px;}.elementor-18349 .elementor-element.elementor-element-0e49f98 .sc_item_title_text{-webkit-text-stroke-width:0px;}.elementor-18349 .elementor-element.elementor-element-0e49f98 .sc_item_title_text2{-webkit-text-stroke-width:0px;}.elementor-18349 .elementor-element.elementor-element-a79a36a{--spacer-size:60px;}.elementor-18349 .elementor-element.elementor-element-f934fa6{--spacer-size:50px;}.elementor-18349 .elementor-element.elementor-element-d434355 > .elementor-container > .elementor-row > .elementor-column > .elementor-column-wrap > .elementor-widget-wrap{align-content:center;align-items:center;}.elementor-18349 .elementor-element.elementor-element-7f2562b .sc_googlemap{width:100%;height:840px;}.elementor-18349 .elementor-element.elementor-element-7f2562b .sc_item_title_text{-webkit-text-stroke-width:0px;}.elementor-18349 .elementor-element.elementor-element-7f2562b .sc_item_title_text2{-webkit-text-stroke-width:0px;}.elementor-18349 .elementor-element.elementor-element-3363377:not(.elementor-motion-effects-element-type-background) > .elementor-column-wrap, .elementor-18349 .elementor-element.elementor-element-3363377 > .elementor-column-wrap > .elementor-motion-effects-container > .elementor-motion-effects-layer{background-color:#F8F8F4;}.elementor-18349 .elementor-element.elementor-element-3363377 > .elementor-element-populated{transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;}.elementor-18349 .elementor-element.elementor-element-3363377 > .elementor-element-populated > .elementor-background-overlay{transition:background 0.3s, border-radius 0.3s, opacity 0.3s;}.elementor-18349 .elementor-element.elementor-element-3363377 > .elementor-element-populated.elementor-column-wrap{padding:0% 12% 0% 15%;}.elementor-18349 .elementor-element.elementor-element-3363377 > .elementor-element-populated.elementor-widget-wrap{padding:0% 12% 0% 15%;}.elementor-18349 .elementor-element.elementor-element-2175bad{--spacer-size:50px;}.elementor-18349 .elementor-element.elementor-element-1b13b01 .sc_item_title_text{-webkit-text-stroke-width:0px;}.elementor-18349 .elementor-element.elementor-element-1b13b01 .sc_item_title_text2{-webkit-text-stroke-width:0px;}.elementor-18349 .elementor-element.elementor-element-b11ba31{--spacer-size:30px;}.elementor-18349 .elementor-element.elementor-element-5b516db{--spacer-size:50px;}@media(max-width:1024px){.elementor-18349 .elementor-element.elementor-element-d32eefa > .elementor-widget-container{margin:-30px 0px 0px 0px;}.elementor-18349 .elementor-element.elementor-element-e2d23c0 > .elementor-element-populated.elementor-column-wrap{padding:0px 0px 0px 0px;}.elementor-18349 .elementor-element.elementor-element-e2d23c0 > .elementor-element-populated.elementor-widget-wrap{padding:0px 0px 0px 0px;}.elementor-18349 .elementor-element.elementor-element-5496878{text-align:left;}.elementor-18349 .elementor-element.elementor-element-b0d9b41 > .elementor-element-populated.elementor-column-wrap{padding:0% 0% 0% 8%;}.elementor-18349 .elementor-element.elementor-element-b0d9b41 > .elementor-element-populated.elementor-widget-wrap{padding:0% 0% 0% 8%;}.elementor-18349 .elementor-element.elementor-element-31d184b{--spacer-size:50px;}.elementor-18349 .elementor-element.elementor-element-c848c22{--spacer-size:32px;}.elementor-18349 .elementor-element.elementor-element-fcfe6a8{--spacer-size:33px;}.elementor-18349 .elementor-element.elementor-element-c8b8e34{--spacer-size:0px;}.elementor-18349 .elementor-element.elementor-element-63da9e5:not(.elementor-motion-effects-element-type-background) > .elementor-column-wrap, .elementor-18349 .elementor-element.elementor-element-63da9e5 > .elementor-column-wrap > .elementor-motion-effects-container > .elementor-motion-effects-layer{background-position:center center;}.elementor-18349 .elementor-element.elementor-element-e1d021f{--spacer-size:35px;}.elementor-18349 .elementor-element.elementor-element-a79a36a{--spacer-size:40px;}.elementor-18349 .elementor-element.elementor-element-3363377 > .elementor-element-populated.elementor-column-wrap{padding:0% 10% 0% 10%;}.elementor-18349 .elementor-element.elementor-element-3363377 > .elementor-element-populated.elementor-widget-wrap{padding:0% 10% 0% 10%;}}@media(max-width:767px){.elementor-18349 .elementor-element.elementor-element-d32eefa > .elementor-widget-container{margin:-20px 0px 0px 0px;}.elementor-18349 .elementor-element.elementor-element-b0d9b41 > .elementor-element-populated.elementor-column-wrap{padding:30px 0px 0px 0px;}.elementor-18349 .elementor-element.elementor-element-b0d9b41 > .elementor-element-populated.elementor-widget-wrap{padding:30px 0px 0px 0px;}.elementor-18349 .elementor-element.elementor-element-2117a32{--spacer-size:30px;}.elementor-18349 .elementor-element.elementor-element-31d184b{--spacer-size:33px;}.elementor-18349 .elementor-element.elementor-element-c848c22{--spacer-size:30px;}.elementor-18349 .elementor-element.elementor-element-fcfe6a8{--spacer-size:0px;}.elementor-18349 .elementor-element.elementor-element-56053f9 > .elementor-widget-container{margin:20px 0px 0px 0px;}.elementor-18349 .elementor-element.elementor-element-c8b8e34{--spacer-size:0px;}.elementor-18349 .elementor-element.elementor-element-4f23cfd{--spacer-size:35px;}.elementor-18349 .elementor-element.elementor-element-63da9e5 > .elementor-element-populated.elementor-column-wrap{padding:75px 0px 75px 0px;}.elementor-18349 .elementor-element.elementor-element-63da9e5 > .elementor-element-populated.elementor-widget-wrap{padding:75px 0px 75px 0px;}.elementor-18349 .elementor-element.elementor-element-48afad0 .elementor-icon{font-size:16px;}.elementor-18349 .elementor-element.elementor-element-a79a36a{--spacer-size:20px;}.elementor-18349 .elementor-element.elementor-element-3363377 > .elementor-element-populated.elementor-column-wrap{padding:0% 6% 0% 6%;}.elementor-18349 .elementor-element.elementor-element-3363377 > .elementor-element-populated.elementor-widget-wrap{padding:0% 6% 0% 6%;}}@media(min-width:768px){.elementor-18349 .elementor-element.elementor-element-d8203c0{width:34%;}.elementor-18349 .elementor-element.elementor-element-b0fea7c{width:42.332%;}.elementor-18349 .elementor-element.elementor-element-e3243e6{width:23%;}.elementor-18349 .elementor-element.elementor-element-3a85d31{width:34%;}.elementor-18349 .elementor-element.elementor-element-c410646{width:66%;}}@media(max-width:1024px) and (min-width:768px){.elementor-18349 .elementor-element.elementor-element-3a85d31{width:15%;}.elementor-18349 .elementor-element.elementor-element-c410646{width:100%;}.elementor-18349 .elementor-element.elementor-element-f4ba30e{width:100%;}.elementor-18349 .elementor-element.elementor-element-3363377{width:100%;}}
</style>
<link property="stylesheet" rel='stylesheet' id='trx_addons-css' href='wp-content/plugins/trx_addons/css/styles.css' type='text/css' media='all' />
<link property="stylesheet" rel='stylesheet' id='trx_addons-sc_googlemap-css' href='wp-content/plugins/trx_addons/components/shortcodes/googlemap/googlemap.css' type='text/css' media='all' />
<link property="stylesheet" rel='stylesheet' id='trx_addons-sc_googlemap-responsive-css' href='wp-content/plugins/trx_addons/components/shortcodes/googlemap/googlemap.responsive.css' type='text/css' media='(max-width:1023px)' />
<link property="stylesheet" rel='stylesheet' id='trx_addons-mouse-helper-css' href='wp-content/plugins/trx_addons/addons/mouse-helper/mouse-helper.css' type='text/css' media='all' />
<link property="stylesheet" rel='stylesheet' id='trx_addons-cpt_services-css' href='wp-content/plugins/trx_addons/components/cpt/services/services.css' type='text/css' media='all' />
<link property="stylesheet" rel='stylesheet' id='trx_addons-cpt_testimonials-css' href='wp-content/plugins/trx_addons/components/cpt/testimonials/testimonials.css' type='text/css' media='all' />
<link property="stylesheet" rel='stylesheet' id='trx_addons-sc_blogger-css' href='wp-content/plugins/trx_addons/components/shortcodes/blogger/blogger.css' type='text/css' media='all' />
<link property="stylesheet" rel='stylesheet' id='trx_addons-sc_icons-css' href='wp-content/plugins/trx_addons/components/shortcodes/icons/icons.css' type='text/css' media='all' />

<style id="elementor-post-18621">.elementor-18621 .elementor-element.elementor-element-2bc9874 > .elementor-container > .elementor-row > .elementor-column > .elementor-column-wrap > .elementor-widget-wrap{align-content:center;align-items:center;}.elementor-18621 .elementor-element.elementor-element-2bc9874:not(.elementor-motion-effects-element-type-background), .elementor-18621 .elementor-element.elementor-element-2bc9874 > .elementor-motion-effects-container > .elementor-motion-effects-layer{background-color:#FFFFFF;}.elementor-18621 .elementor-element.elementor-element-2bc9874{transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;padding:25px 50px 25px 50px;}.elementor-18621 .elementor-element.elementor-element-2bc9874 > .elementor-background-overlay{transition:background 0.3s, border-radius 0.3s, opacity 0.3s;}.elementor-18621 .elementor-element.elementor-element-8c303e4 .logo_image{max-height:85px;}.elementor-18621 .elementor-element.elementor-element-9bf0ed4 > .elementor-widget-container{margin:1px 0px 0px 8px;}.elementor-18621 .elementor-element.elementor-element-97e5537 .elementor-icon-wrapper{text-align:center;}.elementor-18621 .elementor-element.elementor-element-97e5537 .elementor-icon i, .elementor-18621 .elementor-element.elementor-element-97e5537 .elementor-icon svg{transform:rotate(0deg);}.elementor-18621 .elementor-element.elementor-element-97e5537 > .elementor-widget-container{margin:0px 0px -3px 5px;}.elementor-18621 .elementor-element.elementor-element-3ae6683 > .elementor-container > .elementor-row > .elementor-column > .elementor-column-wrap > .elementor-widget-wrap{align-content:center;align-items:center;}.elementor-18621 .elementor-element.elementor-element-3ae6683{transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;}.elementor-18621 .elementor-element.elementor-element-3ae6683 > .elementor-background-overlay{transition:background 0.3s, border-radius 0.3s, opacity 0.3s;}.elementor-18621 .elementor-element.elementor-element-cc9744b .logo_image{max-height:50px;}.elementor-18621 .elementor-element.elementor-element-6db96a1 > .elementor-element-populated{transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;}.elementor-18621 .elementor-element.elementor-element-6db96a1 > .elementor-element-populated > .elementor-background-overlay{transition:background 0.3s, border-radius 0.3s, opacity 0.3s;}.elementor-18621 .elementor-element.elementor-element-c87fe2d{z-index:30;}.elementor-18621 .elementor-element.elementor-element-eab0f26 > .elementor-widget-container{margin:1px 0px 0px 0px;}.elementor-18621 .elementor-element.elementor-element-284cb5d > .elementor-widget-container{margin:0px 0px 0px 0px;}@media(max-width:767px){.elementor-18621 .elementor-element.elementor-element-ad3a195{width:50%;}.elementor-18621 .elementor-element.elementor-element-6db96a1{width:50%;}}</style>
<style id="elementor-post-17907">.elementor-17907 .elementor-element.elementor-element-3002112{--spacer-size:112px;}.elementor-17907 .elementor-element.elementor-element-678227b .logo_image{max-height:85px;}.elementor-17907 .elementor-element.elementor-element-678227b > .elementor-widget-container{margin:-10px 0px 0px 0px;}.elementor-17907 .elementor-element.elementor-element-893d886 .sc_item_title_text{-webkit-text-stroke-width:0px;}.elementor-17907 .elementor-element.elementor-element-893d886 .sc_item_title_text2{-webkit-text-stroke-width:0px;}.elementor-17907 .elementor-element.elementor-element-e27d59a{--spacer-size:20px;}.elementor-17907 .elementor-element.elementor-element-e6d4252{--spacer-size:25px;}.elementor-17907 .elementor-element.elementor-element-9ace7eb{--spacer-size:33px;}.elementor-17907 .elementor-element.elementor-element-01fb277 .sc_item_title_text{-webkit-text-stroke-width:0px;}.elementor-17907 .elementor-element.elementor-element-01fb277 .sc_item_title_text2{-webkit-text-stroke-width:0px;}.elementor-17907 .elementor-element.elementor-element-3407239{--spacer-size:20px;}.elementor-17907 .elementor-element.elementor-element-cbf8c68 .sc_item_title_text{-webkit-text-stroke-width:0px;}.elementor-17907 .elementor-element.elementor-element-cbf8c68 .sc_item_title_text2{-webkit-text-stroke-width:0px;}.elementor-17907 .elementor-element.elementor-element-5d59745{--spacer-size:85px;}.elementor-17907 .elementor-element.elementor-element-6e5f57b{--divider-border-style:solid;--divider-border-width:1px;}.elementor-17907 .elementor-element.elementor-element-6e5f57b .elementor-divider-separator{width:100%;}.elementor-17907 .elementor-element.elementor-element-6e5f57b .elementor-divider{padding-top:10px;padding-bottom:10px;}.elementor-17907 .elementor-element.elementor-element-eae54d0{--spacer-size:19px;}.elementor-17907 .elementor-element.elementor-element-44ca617{--spacer-size:25px;}@media(max-width:1024px) and (min-width:768px){.elementor-17907 .elementor-element.elementor-element-47c11eb{width:23%;}.elementor-17907 .elementor-element.elementor-element-0f1ba52{width:25%;}.elementor-17907 .elementor-element.elementor-element-887c61b{width:20%;}.elementor-17907 .elementor-element.elementor-element-a503a79{width:32%;}}@media(max-width:1024px){.elementor-17907 .elementor-element.elementor-element-3002112{--spacer-size:80px;}.elementor-17907 .elementor-element.elementor-element-5d59745{--spacer-size:60px;}}@media(max-width:767px){.elementor-17907 .elementor-element.elementor-element-3002112{--spacer-size:60px;}.elementor-17907 .elementor-element.elementor-element-678227b > .elementor-widget-container{margin:0px 0px 25px 0px;}.elementor-17907 .elementor-element.elementor-element-e6d4252{--spacer-size:15px;}.elementor-17907 .elementor-element.elementor-element-9ace7eb{--spacer-size:20px;}.elementor-17907 .elementor-element.elementor-element-01fb277 > .elementor-widget-container{padding:35px 0px 0px 0px;}.elementor-17907 .elementor-element.elementor-element-cbf8c68 > .elementor-widget-container{padding:35px 0px 0px 0px;}.elementor-17907 .elementor-element.elementor-element-5d59745{--spacer-size:40px;}}</style>
<style id="elementor-post-4509">.elementor-4509 .elementor-element.elementor-element-67b4187 > .elementor-container > .elementor-row > .elementor-column > .elementor-column-wrap > .elementor-widget-wrap{align-content:space-between;align-items:space-between;}.elementor-4509 .elementor-element.elementor-element-1c135e79 .logo_image{max-height:70px;}.elementor-4509 .elementor-element.elementor-element-1c135e79 > .elementor-widget-container{margin:-18px 0px 15px 0px;}.elementor-4509 .elementor-element.elementor-element-6655a08c .sc_item_title_text{-webkit-text-stroke-width:0px;}.elementor-4509 .elementor-element.elementor-element-6655a08c .sc_item_title_text2{-webkit-text-stroke-width:0px;}.elementor-4509 .elementor-element.elementor-element-8d88f99{border-style:solid;border-width:1px 0px 0px 0px;border-color:#DDDDDD;transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;margin-top:15px;margin-bottom:0px;padding:45px 0px 0px 0px;}.elementor-4509 .elementor-element.elementor-element-8d88f99 > .elementor-background-overlay{transition:background 0.3s, border-radius 0.3s, opacity 0.3s;}.elementor-4509 .elementor-element.elementor-element-efdd0a4{--spacer-size:10px;}.elementor-4509 .elementor-element.elementor-element-013bb75{--spacer-size:5px;}</style>
<style id="elementor-post-7074">.elementor-7074 .elementor-element.elementor-element-91a3141:not(.elementor-motion-effects-element-type-background) > .elementor-column-wrap, .elementor-7074 .elementor-element.elementor-element-91a3141 > .elementor-column-wrap > .elementor-motion-effects-container > .elementor-motion-effects-layer{background-image:url("wp-content/uploads/2022/06/image-29-copyright.jpg");background-position:center center;background-repeat:no-repeat;background-size:cover;}.elementor-7074 .elementor-element.elementor-element-91a3141 > .elementor-element-populated{transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;}.elementor-7074 .elementor-element.elementor-element-91a3141 > .elementor-element-populated > .elementor-background-overlay{transition:background 0.3s, border-radius 0.3s, opacity 0.3s;}.elementor-7074 .elementor-element.elementor-element-637990e{--spacer-size:580px;}.elementor-bc-flex-widget .elementor-7074 .elementor-element.elementor-element-48d3da0.elementor-column .elementor-column-wrap{align-items:center;}.elementor-7074 .elementor-element.elementor-element-48d3da0.elementor-column.elementor-element[data-element_type="column"] > .elementor-column-wrap.elementor-element-populated > .elementor-widget-wrap{align-content:center;align-items:center;}.elementor-7074 .elementor-element.elementor-element-48d3da0 > .elementor-element-populated.elementor-column-wrap{padding:40px 62px 40px 62px;}.elementor-7074 .elementor-element.elementor-element-48d3da0 > .elementor-element-populated.elementor-widget-wrap{padding:40px 62px 40px 62px;}.elementor-7074 .elementor-element.elementor-element-9efa3b4 .sc_item_title_text{-webkit-text-stroke-width:0px;}.elementor-7074 .elementor-element.elementor-element-9efa3b4 .sc_item_title_text2{-webkit-text-stroke-width:0px;}.elementor-7074 .elementor-element.elementor-element-9efa3b4 > .elementor-widget-container{margin:-10px 0px 0px 0px;}.elementor-7074 .elementor-element.elementor-element-0f09534{--spacer-size:28px;}@media(max-width:1024px){.elementor-7074 .elementor-element.elementor-element-637990e{--spacer-size:250px;}.elementor-7074 .elementor-element.elementor-element-48d3da0 > .elementor-element-populated.elementor-column-wrap{padding:35px 30px 35px 30px;}.elementor-7074 .elementor-element.elementor-element-48d3da0 > .elementor-element-populated.elementor-widget-wrap{padding:35px 30px 35px 30px;}.elementor-7074 .elementor-element.elementor-element-9efa3b4 > .elementor-widget-container{margin:-5px 0px 0px 0px;}.elementor-7074 .elementor-element.elementor-element-0f09534{--spacer-size:14px;}}@media(max-width:767px){.elementor-7074 .elementor-element.elementor-element-637990e{--spacer-size:200px;}.elementor-7074 .elementor-element.elementor-element-48d3da0 > .elementor-element-populated.elementor-column-wrap{padding:25px 25px 25px 25px;}.elementor-7074 .elementor-element.elementor-element-48d3da0 > .elementor-element-populated.elementor-widget-wrap{padding:25px 25px 25px 25px;}.elementor-7074 .elementor-element.elementor-element-9efa3b4 > .elementor-widget-container{margin:0px 0px 0px 0px;}.elementor-7074 .elementor-element.elementor-element-0f09534{--spacer-size:6px;}}</style>
<style id='rs-plugin-settings-inline-css' type='text/css'>
		@media (max-width:1023px){.sldr-hide{display:none !important}}@media (max-width:1023px) and (min-width:769px){.sldr-title{font-size:46px !important;  line-height:40px !important}.sldr-button{line-height:44px !important;  padding-left:30px !important;  padding-right:30px !important}.sldr-mouse{transform:translate(0px,20px) !important}}@media (max-width:1440px) and (min-width:1439px){.slider-row-wrap{padding-left:75px !important}}@media (max-width:1439px) and (min-width:1280px){.slider-row-wrap{padding-left:11vw !important;  padding-left:calc( ( 102vw - var(--theme-var-page) - var(--theme-var-elm_gap_extended) ) / 2 ) !important}}@media (max-width:1279px) and (min-width:769px){.slider-row-wrap{padding-left:50px !important}}@media (max-width:899px) and (min-width:769px){.slider-row-wrap{padding-left:30px !important}}@media (max-width:1023px){.tp-bullets.bullets_dots_border_alt_2{transform:translate(-50%,-40px) !important}}
		#rev_slider_12_1_wrapper .bullets_dots_border_alt_2 .tp-bullet{width:10px;height:10px;position:absolute;background:transparent;border-radius:50%;cursor:pointer;box-sizing:content-box;  transition:.3s ease;  border:1px solid rgba(255,255,255,0.9)}#rev_slider_12_1_wrapper .bullets_dots_border_alt_2 .tp-bullet:before{content:'';  width:19px;  height:19px;  border:1px solid #ffffff;  background:transparent;  display:inline-block;  border-radius:50%;  position:relative;  top:50%;  left:50%;  transform:translate(-50%,-50%);  transition:.3s ease;  opacity:0}#rev_slider_12_1_wrapper .bullets_dots_border_alt_2 .tp-bullet.rs-touchhover,#rev_slider_12_1_wrapper .bullets_dots_border_alt_2 .tp-bullet.selected{transform:scale(0.8);background:#ffffff;  border-color:#ffffff}#rev_slider_12_1_wrapper .bullets_dots_border_alt_2 .tp-bullet.rs-touchhover:before,#rev_slider_12_1_wrapper .bullets_dots_border_alt_2 .tp-bullet.selected:before{opacity:1}
</style>
<style type="text/css">.trx_demo_inline_1484141394{color:#ffffff !important;border-color:#383e28 !important;background-color:#383e28 !important;}.trx_demo_inline_1476653508:hover{color:#ffffff !important;border-color:#262c18 !important;background-color:#262c18 !important;}.trx_demo_panels.open .trx_demo_panel_active .trx_demo_panel_footer .trx_demo_panel_button {
justify-content: center;}
.trx_demo_tabs_style_icons .trx_demo_tabs a > i {
color: #fff;}
</style>
<link href="https://fonts.googleapis.com/css?family=Roboto:400%7CDM+Sans:400%2C500%2C700&amp;display=swap" rel="stylesheet" property="stylesheet" media="all" type="text/css" >
<link property="stylesheet" rel='stylesheet' id='rs-plugin-settings-css' href='wp-content/plugins/revslider/public/assets/css/rs69f6d.css?ver=6.5.31' type='text/css' media='all' />
<link property="stylesheet" rel='stylesheet' id='n7-golf-club-skin-default-css' href='wp-content/themes/n7-golf-club/skins/default/css/style.css' type='text/css' media='all' />
<link property="stylesheet" rel='stylesheet' id='n7-golf-club-plugins-css' href='wp-content/themes/n7-golf-club/skins/default/css/plugins.css' type='text/css' media='all' />
<link property="stylesheet" rel='stylesheet' id='n7-golf-club-custom-css' href='wp-content/themes/n7-golf-club/skins/default/css/custom.css' type='text/css' media='all' />
<link property="stylesheet" rel='stylesheet' id='n7-golf-club-mailchimp-for-wp-css' href='wp-content/themes/n7-golf-club/skins/default/plugins/mailchimp-for-wp/mailchimp-for-wp.css' type='text/css' media='all' />
<link property="stylesheet" rel='stylesheet' id='trx_addons-mouse-helper-responsive-css' href='wp-content/plugins/trx_addons/addons/mouse-helper/mouse-helper.responsive.css' type='text/css' media='(max-width:1279px)' />
<link property="stylesheet" rel='stylesheet' id='n7-golf-club-responsive-css' href='wp-content/themes/n7-golf-club/skins/default/css/responsive.css' type='text/css' media='(max-width:1679px)' />
<script type="text/javascript" src="wp-includes/js/jquery/jquery.minf43b.js?ver=3.7.1" id="jquery-core-js"></script>
<script type="text/javascript" src="wp-includes/js/jquery/jquery-migrate.min5589.js?ver=3.4.1" id="jquery-migrate-js"></script>

<link rel="https://api.w.org/" href="wp-json/index.html" /><link rel="alternate" type="application/json" href="wp-json/wp/v2/pages/18349.json" />
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="xmlrpc0db0.html?rsd" />
<link rel="canonical" href="index.html" />
<link rel='shortlink' href='index.html' />
<link rel="alternate" type="application/json+oembed" href="wp-json/oembed/1.0/embedfc40.json?url=https%3A%2F%2Fgolfclub.themerex.net%2F" />
<link rel="alternate" type="text/xml+oembed" href="wp-json/oembed/1.0/embed1e7c?url=https%3A%2F%2Fgolfclub.themerex.net%2F&amp;format=xml" />
		<link rel="preload" href="wp-content/plugins/advanced-popups/fonts/advanced-popups-icons.woff" as="font" type="font/woff" crossorigin>
		<meta name="tec-api-version" content="v1"><meta name="tec-api-origin" content="https://golfclub.themerex.net"><link rel="alternate" href="wp-json/tribe/events/v1/index.html" />	<noscript><style>.woocommerce-product-gallery{ opacity: 1 !important; }</style></noscript>
	<meta name="generator" content="Powered by Slider Revolution 6.5.31 - responsive, Mobile-Friendly Slider Plugin for WordPress with comfortable drag and drop interface." />
<link rel="icon" href="wp-content/uploads/2022/06/cropped-favicon-120x120.png" sizes="32x32" />
<link rel="icon" href="wp-content/uploads/2022/06/cropped-favicon-300x300.png" sizes="192x192" />
<link rel="apple-touch-icon" href="wp-content/uploads/2022/06/cropped-favicon-300x300.png" />
<meta name="msapplication-TileImage" content="wp-content/uploads/2022/06/cropped-favicon-300x300.png" />
<script>function setREVStartSize(e){
			//window.requestAnimationFrame(function() {
				window.RSIW = window.RSIW===undefined ? window.innerWidth : window.RSIW;
				window.RSIH = window.RSIH===undefined ? window.innerHeight : window.RSIH;
				try {
					var pw = document.getElementById(e.c).parentNode.offsetWidth,
						newh;
					pw = pw===0 || isNaN(pw) || (e.l=="fullwidth" || e.layout=="fullwidth") ? window.RSIW : pw;
					e.tabw = e.tabw===undefined ? 0 : parseInt(e.tabw);
					e.thumbw = e.thumbw===undefined ? 0 : parseInt(e.thumbw);
					e.tabh = e.tabh===undefined ? 0 : parseInt(e.tabh);
					e.thumbh = e.thumbh===undefined ? 0 : parseInt(e.thumbh);
					e.tabhide = e.tabhide===undefined ? 0 : parseInt(e.tabhide);
					e.thumbhide = e.thumbhide===undefined ? 0 : parseInt(e.thumbhide);
					e.mh = e.mh===undefined || e.mh=="" || e.mh==="auto" ? 0 : parseInt(e.mh,0);
					if(e.layout==="fullscreen" || e.l==="fullscreen")
						newh = Math.max(e.mh,window.RSIH);
					else{
						e.gw = Array.isArray(e.gw) ? e.gw : [e.gw];
						for (var i in e.rl) if (e.gw[i]===undefined || e.gw[i]===0) e.gw[i] = e.gw[i-1];
						e.gh = e.el===undefined || e.el==="" || (Array.isArray(e.el) && e.el.length==0)? e.gh : e.el;
						e.gh = Array.isArray(e.gh) ? e.gh : [e.gh];
						for (var i in e.rl) if (e.gh[i]===undefined || e.gh[i]===0) e.gh[i] = e.gh[i-1];
											
						var nl = new Array(e.rl.length),
							ix = 0,
							sl;
						e.tabw = e.tabhide>=pw ? 0 : e.tabw;
						e.thumbw = e.thumbhide>=pw ? 0 : e.thumbw;
						e.tabh = e.tabhide>=pw ? 0 : e.tabh;
						e.thumbh = e.thumbhide>=pw ? 0 : e.thumbh;
						for (var i in e.rl) nl[i] = e.rl[i]<window.RSIW ? 0 : e.rl[i];
						sl = nl[0];
						for (var i in nl) if (sl>nl[i] && nl[i]>0) { sl = nl[i]; ix=i;}
						var m = pw>(e.gw[ix]+e.tabw+e.thumbw) ? 1 : (pw-(e.tabw+e.thumbw)) / (e.gw[ix]);
						newh =  (e.gh[ix] * m) + (e.tabh + e.thumbh);
					}
					var el = document.getElementById(e.c);
					if (el!==null && el) el.style.height = newh+"px";
					el = document.getElementById(e.c+"_wrapper");
					if (el!==null && el) {
						el.style.height = newh+"px";
						el.style.display = "block";
					}
				} catch(e){
					console.log("Failure at Presize of Slider:" + e)
				}
			//});
		  };</script>

<style type="text/css" id="trx_addons-inline-styles-inline-css">.trx_addons_inline_145654575 img.logo_image{max-height:85px;}.trx_addons_inline_1368703693{width:388px;}.trx_addons_inline_469852772 img.logo_image{max-height:70px;}.trx_addons_inline_1840673950 img.logo_image{max-height:50px;}.n7_golf_club_inline_627885254{background-image: url(wp-content/uploads/2022/06/image-30-copyright-890x664.jpg);}.n7_golf_club_inline_346020728{background-image: url(wp-content/uploads/2022/06/image-27-copyright-890x664.jpg);}.n7_golf_club_inline_624936568{background-image: url(wp-content/uploads/2022/06/image-25-copyright-890x664.jpg);}.trx_addons_inline_1096377498{width:100%;height:840px;}.trx_addons_inline_1795885851 img.logo_image{max-height:85px;}
</style>

<link rel="stylesheet" href="css/fontello-468343a9/css/fontello.css">
<link rel="stylesheet" href="css/fontello-468343a9/css/animation.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<script>function setREVStartSize(e){
			//window.requestAnimationFrame(function() {
				window.RSIW = window.RSIW===undefined ? window.innerWidth : window.RSIW;
				window.RSIH = window.RSIH===undefined ? window.innerHeight : window.RSIH;
				try {
					var pw = document.getElementById(e.c).parentNode.offsetWidth,
						newh;
					pw = pw===0 || isNaN(pw) || (e.l=="fullwidth" || e.layout=="fullwidth") ? window.RSIW : pw;
					e.tabw = e.tabw===undefined ? 0 : parseInt(e.tabw);
					e.thumbw = e.thumbw===undefined ? 0 : parseInt(e.thumbw);
					e.tabh = e.tabh===undefined ? 0 : parseInt(e.tabh);
					e.thumbh = e.thumbh===undefined ? 0 : parseInt(e.thumbh);
					e.tabhide = e.tabhide===undefined ? 0 : parseInt(e.tabhide);
					e.thumbhide = e.thumbhide===undefined ? 0 : parseInt(e.thumbhide);
					e.mh = e.mh===undefined || e.mh=="" || e.mh==="auto" ? 0 : parseInt(e.mh,0);
					if(e.layout==="fullscreen" || e.l==="fullscreen")
						newh = Math.max(e.mh,window.RSIH);
					else{
						e.gw = Array.isArray(e.gw) ? e.gw : [e.gw];
						for (var i in e.rl) if (e.gw[i]===undefined || e.gw[i]===0) e.gw[i] = e.gw[i-1];
						e.gh = e.el===undefined || e.el==="" || (Array.isArray(e.el) && e.el.length==0)? e.gh : e.el;
						e.gh = Array.isArray(e.gh) ? e.gh : [e.gh];
						for (var i in e.rl) if (e.gh[i]===undefined || e.gh[i]===0) e.gh[i] = e.gh[i-1];
											
						var nl = new Array(e.rl.length),
							ix = 0,
							sl;
						e.tabw = e.tabhide>=pw ? 0 : e.tabw;
						e.thumbw = e.thumbhide>=pw ? 0 : e.thumbw;
						e.tabh = e.tabhide>=pw ? 0 : e.tabh;
						e.thumbh = e.thumbhide>=pw ? 0 : e.thumbh;
						for (var i in e.rl) nl[i] = e.rl[i]<window.RSIW ? 0 : e.rl[i];
						sl = nl[0];
						for (var i in nl) if (sl>nl[i] && nl[i]>0) { sl = nl[i]; ix=i;}
						var m = pw>(e.gw[ix]+e.tabw+e.thumbw) ? 1 : (pw-(e.tabw+e.thumbw)) / (e.gw[ix]);
						newh =  (e.gh[ix] * m) + (e.tabh + e.thumbh);
					}
					var el = document.getElementById(e.c);
					if (el!==null && el) el.style.height = newh+"px";
					el = document.getElementById(e.c+"_wrapper");
					if (el!==null && el) {
						el.style.height = newh+"px";
						el.style.display = "block";
					}
				} catch(e){
					console.log("Failure at Presize of Slider:" + e)
				}
			//});
		  };</script>

<noscript><style id="rocket-lazyload-nojs-css">.rll-youtube-player, [data-lazy-src]{display:none !important;}</style></noscript>

</head>

<body class="home royal_preloader page-template-default page page-id-18349 wp-custom-logo theme-n7-golf-club hide_fixed_rows_enabled frontpage woocommerce-no-js tribe-no-js tinvwl-theme-style skin_default scheme_default blog_mode_front body_style_wide  is_stream blog_style_excerpt sidebar_hide expand_content remove_margins trx_addons_present header_type_custom header_style_header-custom-18621 header_position_over menu_side_none no_layout fixed_blocks_sticky elementor-default elementor-kit-15 elementor-page elementor-page-18349">

	<div id="royal_preloader" data-width="175" data-height="50" data-url="images/rightsolve_logo.png" data-color="#0a0f2b" data-bgcolor="#fff"></div>

	<div class="body_wrap" >

		<div class="page_wrap" >

							<a class="n7_golf_club_skip_link skip_to_content_link" href="#content_skip_link_anchor" tabindex="1">Skip to content</a>
								<a class="n7_golf_club_skip_link skip_to_footer_link" href="#footer_skip_link_anchor" tabindex="1">Skip to footer</a>

				<header class="top_panel top_panel_custom top_panel_custom_18621 top_panel_custom_main-dark-header				 without_bg_image">
			<div data-elementor-type="cpt_layouts" data-elementor-id="18621" class="elementor elementor-18621">
						<div class="elementor-inner">
				<div class="elementor-section-wrap">
									<section class="elementor-section elementor-top-section elementor-element elementor-element-2bc9874 elementor-section-full_width elementor-section-content-middle sc_layouts_row sc_layouts_row_type_compact scheme_dark sc_layouts_hide_on_mobile sc_layouts_hide_on_tablet elementor-section-height-default elementor-section-height-default sc_fly_static" data-id="2bc9874" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
						<div class="elementor-container elementor-column-gap-extended">
							<div class="elementor-row">
					<div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-850624c sc_layouts_column_align_left sc_layouts_column sc_inner_width_none sc_content_align_inherit sc_layouts_column_icons_position_left sc_fly_static" data-id="850624c" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="sc_layouts_item elementor-element elementor-element-8c303e4 sc_fly_static elementor-widget elementor-widget-trx_sc_layouts_logo" data-id="8c303e4" data-element_type="widget" data-widget_type="trx_sc_layouts_logo.default">
		
		<div class="elementor-widget-container">
			<a href="./"	class="sc_layouts_logo sc_layouts_logo_default trx_addons_inline_145654575" >
				<img class="logo_image"	src="images/rightsolve_logo.png"	srcset="images/rightsolve_logo.png 2x" alt="RightSolve Systems" width="84" height="84">
			</a>		
		</div>
				</div>
						</div>
					</div>
		</div>
		<div
		class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-c4f2039 sc_layouts_column_align_center sc_layouts_column sc_inner_width_none sc_content_align_inherit sc_layouts_column_icons_position_left sc_fly_static"
		data-id="c4f2039"
		data-element_type="column"
	>
		<div class="elementor-column-wrap elementor-element-populated">
			<div class="elementor-widget-wrap">
				<div
					class="sc_layouts_item elementor-element elementor-element-ee7dad4 sc_fly_static elementor-widget elementor-widget-trx_sc_layouts_menu"
					data-id="ee7dad4"
					data-element_type="widget"
					data-widget_type="trx_sc_layouts_menu.default"
				>
					<div class="elementor-widget-container">
						<nav class="sc_layouts_menu sc_layouts_menu_default sc_layouts_menu_dir_horizontal menu_hover_zoom_line" data-animation-in="fadeIn" data-animation-out="fadeOut">
							<ul id="menu_main" class="sc_layouts_menu_nav menu_main_nav">
								<li id="menu-item-18693" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-has-children menu-item-18693">
									<a href="./"><span>Home</span></a>
								</li>
								<li id="menu-item-18696" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-18696">
									<a href="about"><span>Who We Are</span></a>
								</li>
								<li id="menu-item-18704" class="columns-3 menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-18704">
									<a href="capabilities"><span>Capabilities</span></a>
									<ul class="sub-menu">
										<li id="menu-item-18711" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-18711">
											<a href="capabilities#softwaredevelopment"><span>Software Development</span></a>
											<ul class="sub-menu">
												<li id="menu-item-18718" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-18718">
													<a href="capabilities/customdev"><span>Custom Software Development</span></a>
												</li>
												<li id="menu-item-16934" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-16934">
													<a href="capabilities/commercial-software"><span>Commercial Software</span></a>
												</li>
												<li id="menu-item-18721" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-18721">
													<a href="capabilities/mobile-apps"><span>Mobile App Development</span></a>
												</li>
											</ul>
										</li>
										<li id="menu-item-18712" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-18712">
											<a href="capabilities#technologyconsultancy"><span>Technology Consultancy</span></a>
											<ul class="sub-menu">
												<li id="menu-item-18736" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-18736">
													<a href="capabilities/cloud-infrastructure"><span>Cloud Infrastructure Management</span></a>
												</li>
												<li id="menu-item-18742" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-18742">
													<a href="capabilities/cyber-sec"><span>Cybersecurity Consultancy</span></a>
												</li>
												<li id="menu-item-18741" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-18741">
													<a href="capabilities/it-advisory"><span>IT Advisory & Technical Support</span></a>
												</li>
											</ul>
										</li>
										<li id="menu-item-18713" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-18713">
											<a href="capabilities#brandvisibility"><span>Brand Visibility</span></a>
											<ul class="sub-menu">
												<li id="menu-item-18753" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-18753">
													<a href="capabilities/design-development"><span>Web Design & Development</span></a>
												</li>
												<li id="menu-item-18755" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-18755">
													<a href="capabilities/graphic-design"><span>Graphics Design and Brand Identity</span></a>
												</li>
												<li id="menu-item-18757" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-18757">
													<a href="capabilities/seo"><span>Search Engine Optimization</span></a>
												</li>
											</ul>
										</li>
									</ul>
								</li>
								<li id="menu-item-18709" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-18709">
									<a href="projects"><span>Projects</span></a>
								</li>
								<li id="menu-item-16936" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-16936">
									<a href="contacts"><span>Contacts</span></a>
								</li>
								<li id="menu-item-16936" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-16936">
									<a href="blog" target="_blank"><span>Blog</span></a>
								</li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</div>
			
				<div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-cab64dc sc_layouts_column_align_right sc_layouts_column sc_inner_width_none sc_content_align_inherit sc_layouts_column_icons_position_left sc_fly_static" data-id="cab64dc" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">

						<div class="sc_layouts_item elementor-element elementor-element-b7fbcbe sc_fly_static elementor-widget elementor-widget-trx_sc_layouts_cart" data-id="b7fbcbe" data-element_type="widget" data-widget_type="trx_sc_layouts_cart.default">
								<div class="octf_tools_bar__icon_src">
									
									<a style="color:white;" href="contacts/"><i class="fa-solid fa-headset"></i></a> 
									
								</div>
							</div>



				<div style="margin-left: 1.2em;" class="sc_layouts_item elementor-element elementor-element-9bf0ed4 sc_fly_static elementor-widget elementor-widget-trx_sc_layouts_search" data-id="9bf0ed4" data-element_type="widget" data-widget_type="trx_sc_layouts_search.default">
				<div class="elementor-widget-container">
			<div class="sc_layouts_search">
    <div class="search_modern">
        <span class="search_submit"></span>
        <div class="search_wrap">
            <div class="search_header_wrap"><img class="logo_image"
                            src="wp-content/uploads/2022/06/logo-white.png"
                                                            srcset="wp-content/uploads/2022/06/logo-white-retina.png 2x"                            alt="RightSolve Systems" width="84" height="84">                <a class="search_close"></a>
            </div>
            <div class="search_form_wrap">
                <form role="search" method="get" class="search_form" action="">
                    <input type="hidden" value="" name="post_types">
                    <input type="text" class="search_field" placeholder="Type words and hit enter" value="" name="s">
                    <button type="submit" class="search_submit"></button>
                                    </form>
            </div>
        </div>
        <div class="search_overlay"></div>
    </div>


</div><!-- /.sc_layouts_search -->		</div>
				</div>
				<div class="sc_layouts_item elementor-element elementor-element-97e5537 elementor-view-default sc_fly_static elementor-widget elementor-widget-icon" data-id="97e5537" data-element_type="widget" data-widget_type="icon.default">
				<div class="elementor-widget-container">
					<div class="elementor-icon-wrapper">
			<a class="elementor-icon" href="#panel-bar">
			<svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21"><g id="Right_Bar" data-name="Right Bar" transform="translate(-2124 -2665)"><g id="Ellipse_362" data-name="Ellipse 362" transform="translate(2124 2665)" fill="none" stroke-width="1.5"><circle cx="2.5" cy="2.5" r="2.5" stroke="none"></circle><circle cx="2.5" cy="2.5" r="1.75" fill="none"></circle></g><g id="Ellipse_363" data-name="Ellipse 363" transform="translate(2132 2665)" fill="none" stroke-width="1.5"><circle cx="2.5" cy="2.5" r="2.5" stroke="none"></circle><circle cx="2.5" cy="2.5" r="1.75" fill="none"></circle></g><g id="Ellipse_364" data-name="Ellipse 364" transform="translate(2140 2665)" fill="none" stroke-width="1.5"><circle cx="2.5" cy="2.5" r="2.5" stroke="none"></circle><circle cx="2.5" cy="2.5" r="1.75" fill="none"></circle></g><g id="Ellipse_365" data-name="Ellipse 365" transform="translate(2124 2673)" fill="none" stroke-width="1.5"><circle cx="2.5" cy="2.5" r="2.5" stroke="none"></circle><circle cx="2.5" cy="2.5" r="1.75" fill="none"></circle></g><g id="Ellipse_366" data-name="Ellipse 366" transform="translate(2132 2673)" fill="none" stroke-width="1.5"><circle cx="2.5" cy="2.5" r="2.5" stroke="none"></circle><circle cx="2.5" cy="2.5" r="1.75" fill="none"></circle></g><g id="Ellipse_367" data-name="Ellipse 367" transform="translate(2140 2673)" fill="none" stroke-width="1.5"><circle cx="2.5" cy="2.5" r="2.5" stroke="none"></circle><circle cx="2.5" cy="2.5" r="1.75" fill="none"></circle></g><g id="Ellipse_368" data-name="Ellipse 368" transform="translate(2124 2681)" fill="none" stroke-width="1.5"><circle cx="2.5" cy="2.5" r="2.5" stroke="none"></circle><circle cx="2.5" cy="2.5" r="1.75" fill="none"></circle></g><g id="Ellipse_369" data-name="Ellipse 369" transform="translate(2132 2681)" fill="none" stroke-width="1.5"><circle cx="2.5" cy="2.5" r="2.5" stroke="none"></circle><circle cx="2.5" cy="2.5" r="1.75" fill="none"></circle></g><g id="Ellipse_370" data-name="Ellipse 370" transform="translate(2140 2681)" fill="none" stroke-width="1.5"><circle cx="2.5" cy="2.5" r="2.5" stroke="none"></circle><circle cx="2.5" cy="2.5" r="1.75" fill="none"></circle></g></g></svg>			</a>
		</div>
				</div>
				</div>
						</div>
					</div>
		</div>
								</div>
					</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-3ae6683 elementor-section-content-middle sc_layouts_row sc_layouts_row_type_compact sc_layouts_hide_on_wide sc_layouts_hide_on_desktop sc_layouts_hide_on_notebook scheme_dark z-transform elementor-section-boxed elementor-section-height-default elementor-section-height-default sc_fly_static" data-id="3ae6683" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;none&quot;}">
						<div class="elementor-container elementor-column-gap-extended">
							<div class="elementor-row">
					<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-ad3a195 sc_inner_width_none sc_content_align_inherit sc_layouts_column_icons_position_left sc_fly_static" data-id="ad3a195" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="sc_layouts_item elementor-element elementor-element-cc9744b sc_fly_static elementor-widget elementor-widget-trx_sc_layouts_logo" data-id="cc9744b" data-element_type="widget" data-widget_type="trx_sc_layouts_logo.default">
				<div class="elementor-widget-container">
			<a href="./"	class="sc_layouts_logo sc_layouts_logo_default trx_addons_inline_1840673950" ><img class="logo_image" src="images/rightsolve_logo.png"
											srcset="images/rightsolve_logo.png 2x"
											alt="RightSolve Systems" width="84" height="84"></a>		</div>
				</div>
						</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-6db96a1 sc_layouts_column_align_right sc_layouts_column sc_inner_width_none sc_content_align_inherit sc_layouts_column_icons_position_left sc_fly_static" data-id="6db96a1" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;none&quot;}">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
								
						<div class="sc_layouts_item elementor-element elementor-element-b7fbcbe sc_fly_static elementor-widget elementor-widget-trx_sc_layouts_cart" data-id="b7fbcbe" data-element_type="widget" data-widget_type="trx_sc_layouts_cart.default">
							<div class="octf_tools_bar__icon_src">
								<i class="fa-solid fa-headset"></i>
							</div>
						</div>

				<div class="sc_layouts_item elementor-element elementor-element-eab0f26 sc_fly_static elementor-widget elementor-widget-trx_sc_layouts_search" data-id="eab0f26" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;none&quot;}" data-widget_type="trx_sc_layouts_search.default">
				<div class="elementor-widget-container">
			<div class="sc_layouts_search">
    <div class="search_modern">
        <span class="search_submit"></span>
        <div class="search_wrap">
            <div class="search_header_wrap"><img class="logo_image"
                            src="wp-content/uploads/2022/06/logo-white.png"
                                                            srcset="wp-content/uploads/2022/06/logo-white-retina.png 2x"                            alt="RightSolve Systems" width="84" height="84">                <a class="search_close"></a>
            </div>
            <div class="search_form_wrap">
                <form role="search" method="get" class="search_form" action="">
                    <input type="hidden" value="" name="post_types">
                    <input type="text" class="search_field" placeholder="Type words and hit enter" value="" name="s">
                    <button type="submit" class="search_submit"></button>
                                    </form>
            </div>
        </div>
        <div class="search_overlay"></div>
    </div>


</div><!-- /.sc_layouts_search -->		</div>
				</div>
				<div class="sc_layouts_item elementor-element elementor-element-284cb5d sc_fly_static elementor-widget elementor-widget-trx_sc_layouts_menu" data-id="284cb5d" data-element_type="widget" data-widget_type="trx_sc_layouts_menu.default">
				<div class="elementor-widget-container">
			<div class="sc_layouts_iconed_text sc_layouts_menu_mobile_button_burger sc_layouts_menu_mobile_button without_menu">
		<a class="sc_layouts_item_link sc_layouts_iconed_text_link" href="#">
			<span class="sc_layouts_item_icon sc_layouts_iconed_text_icon trx_addons_icon-menu"></span>
		</a>
		</div>		</div>
				</div>
						</div>
					</div>
		</div>
								</div>
					</div>
		</section>
									</div>
			</div>
					</div>
		</header>

<div class="menu_mobile_overlay scheme_dark"></div>
<div class="menu_mobile menu_mobile_fullscreen scheme_dark">
    <div class="menu_mobile_inner">
        <div class="menu_mobile_header_wrap">
            <a class="sc_layouts_logo" href="./"> <img src="wp-content/uploads/2022/06/logo-white.png" srcset="wp-content/uploads/2022/06/logo-white-retina.png 2x" alt="RightSolve Systems" width="84" height="84" /> </a>

            <a class="menu_mobile_close menu_button_close" tabindex="0"><span class="menu_button_close_text">Close</span><span class="menu_button_close_icon"></span></a>
        </div>
        <div class="menu_mobile_content_wrap content_wrap">
            <div class="menu_mobile_content_wrap_inner">
                <nav class="menu_mobile_nav_area" itemscope="itemscope" itemtype="https://schema.org/SiteNavigationElement">
                    <ul id="menu_mobile_1830746697">
                        <li id="menu_mobile-item-18693" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-18693">
                            <a href="./"><span>Home</span></a>
                        </li>
                        <li id="menu_mobile-item-18696" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-18696">
                            <a href="about"><span>Who We Are</span></a>
                        </li>
                        <li id="menu_mobile-item-18704" class="columns-3 menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-18704">
                            <a href="capabilities"><span>Capabilities</span></a>
                            <ul class="sub-menu">
                                <li id="menu_mobile-item-18711" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-18711">
                                    <a href="capabilities#softwaredevelopment"><span>Software Development</span></a>
                                    <ul class="sub-menu">
                                        <li id="menu_mobile-item-18718" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-18718">
                                            <a href="capabilities/customdev"><span>Custom Software Development</span></a>
                                        </li>
                                        <li id="menu_mobile-item-16934" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-16934">
                                            <a href="capabilities/commercial-software"><span>Commercial Software</span></a>
                                        </li>
                                        <li id="menu_mobile-item-18721" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-18721">
                                            <a href="capabilities/mobile-apps"><span>Mobile App Development</span></a>
                                        </li>
                                    </ul>
                                </li>
                                <li id="menu_mobile-item-18712" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-18712">
                                    <a href="capabilities#technologyconsultancy"><span>Technology Consultancy</span></a>
                                    <ul class="sub-menu">
                                        <li id="menu_mobile-item-18736" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-18736">
                                            <a href="capabilities/cloud-infrastructure"><span>Cloud Infrastructure Management</span></a>
                                        </li>
                                        <li id="menu_mobile-item-18742" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-18742">
                                            <a href="capabilities/cyber-sec"><span>Cybersecurity Consultancy</span></a>
                                        </li>
                                        <li id="menu_mobile-item-18741" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-18741">
                                            <a href="capabilities/it-advisory"><span>IT Advisory & Technical Support</span></a>
                                        </li>
                                    </ul>
                                </li>
                                <li id="menu_mobile-item-18713" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-18713">
                                    <a href="capabilities#brandvisibility"><span>Brand Visibility</span></a>
                                    <ul class="sub-menu">
                                        <li id="menu_mobile-item-18753" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-18753">
                                            <a href="capabilities/design-development"><span>Web Design & Development</span></a>
                                        </li>
                                        <li id="menu_mobile-item-18755" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-18755">
                                            <a href="capabilities/graphic-design"><span>Graphics Design and Brand Identity</span></a>
                                        </li>
                                        <li id="menu_mobile-item-18757" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-18757">
                                            <a href="capabilities/seo"><span>Search Engine Optimization</span></a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li id="menu_mobile-item-18709" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-18709">
                            <a href="projects"><span>Projects</span></a>
                        </li>
                        <li id="menu_mobile-item-16936" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-16936">
                            <a href="contacts"><span>Contacts</span></a>
                        </li>
                        <li id="menu_mobile-item-16936" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-16936">
                            <a href="blog" target="_blank"><span>Blog</span></a>
                        </li>
                    </ul>
                </nav>
                <div class="socials_mobile">
                    <a target="_blank" href="https://x.com/rightsolvesys" class="social_item social_item_style_icons sc_icon_type_icons social_item_type_icons">
                        <span class="social_icon social_icon_twitter-1"><i class="fa-brands fa-x-twitter"></i></span>
                    </a>
                    <a target="_blank" href="https://www.linkedin.com/company/rightsolvesys" class="social_item social_item_style_icons sc_icon_type_icons social_item_type_icons">
                        <span class="social_icon social_icon_linkedin"><span class="icon-linkedin"></span></span>
                    </a>
					<a target="_blank" href="https://www.youtube.com/@rightsolvesys" class="social_item social_item_style_icons sc_icon_type_icons social_item_type_icons">
						<span class="social_icon social_icon_youtube"><span class="icon-youtube"></span></span>
					</a>
                </div>
            </div>
        </div>
    </div>
</div>

			
			<div class="page_content_wrap">
								<div class="content_wrap">

					
					<div class="content">
						<a id="content_skip_link_anchor" class="n7_golf_club_skip_link_anchor" href="#"></a>
						
<article id="post-18349"
	class="post_item_single post_type_page post-18349 page type-page status-publish hentry">

	
	<div class="post_content entry-content">
				<div data-elementor-type="wp-page" data-elementor-id="18349" class="elementor elementor-18349">
						<div class="elementor-inner">
				<div class="elementor-section-wrap">


					<section class="elementor-section elementor-top-section elementor-element elementor-element-2300b1a elementor-section-boxed elementor-section-height-default elementor-section-height-default sc_fly_static" data-id="2300b1a" data-element_type="section">
						<div class="elementor-container elementor-column-gap-extended">
							<div class="elementor-row">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-72274cc sc_inner_width_none sc_content_align_inherit sc_layouts_column_icons_position_left sc_fly_static" data-id="72274cc" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-4957841 sc_fly_static elementor-widget elementor-widget-trx_widget_slider" data-id="4957841" data-element_type="widget" data-widget_type="trx_widget_slider.default">
				<div class="elementor-widget-container">
			<div class="widget_area sc_widget_slider">
				<aside class="widget widget_slider">			
					<div class="slider_wrap slider_engine_revo slider_alias_slider-1">
				<div class="wp-block-themepunch-revslider 0">
			<!-- START Slider 1 REVOLUTION SLIDER 6.5.31 -->
			<p class="rs-p-wp-fix"></p>
			<rs-module-wrap id="rev_slider_12_1_wrapper" data-source="gallery" style="visibility:hidden;background:transparent;padding:0;">
				<rs-module id="rev_slider_12_1" data-version="6.5.31">
					<rs-slides>
						<rs-slide style="position: absolute;" data-key="rs-30" data-title="Slide" data-thumb="wp-content/uploads/2022/07/slider1-image-1-copyright-50x100.jpg" data-anim="adpr:false;o:outin;" data-in="o:0;sx:0.85;sy:0.85;" data-out="x:(100%);">
							<img fetchpriority="high" decoding="async" alt="" title="slider1-image-1-copyright" width="1920" height="980" class="dsk rev-slidebg tp-rs-img rs-lazyload" data-lazyload="wp-content/uploads/2022/07/slider1-image-1-copyright.jpg" data-parallax="off" data-no-retina>
							<img fetchpriority="high" decoding="async" alt="" title="slider1-image-1-copyright" width="1920" height="980" class="mbl rev-slidebg tp-rs-img rs-lazyload" data-lazyload="wp-content/uploads/2022/07/slider1-image-1-copyright-mbl.jpg" data-parallax="off" data-no-retina>
							
<!--						--><rs-zone id="rrzm_30" class="rev_row_zone_middle" style="z-index: 15;"><!--

								--><rs-row
									id="slider-12-slide-30-layer-0" 
									class="slider-row"
									data-type="row"
									data-xy="xo:50px;yo:50px;"
									data-cbreak="nobreak"
									data-basealign="slide"
									data-wrpcls="slider-row-wrap"
									data-rsp_bd="off"
									data-margin="l:305,120,30,20;"
									data-frame_0="o:1;"
									data-frame_999="o:0;st:w;sR:8700;sA:9000;"
									style="z-index:1;"
								><!--
									--><rs-column
										id="slider-12-slide-30-layer-1" 
										data-type="column"
										data-xy="xo:50px;yo:50px;"
										data-text="l:35,25,15,15;"
										data-rsp_bd="off"
										data-column="w:100%;"
										data-frame_0="o:1;"
										data-frame_999="o:0;st:w;sR:8700;sA:9000;"
										style="z-index:2;width:100%;"
									><!--
										--><rs-layer
											id="slider-12-slide-30-layer-9" 
											data-type="text"
											data-xy="xo:0,36px,36px,36px;yo:0,429px,429px,429px;"
											data-text="w:normal;s:15,14,12,12;l:32,30,22,22;ls:1px;fw:500,700,700,400;"
											data-vbility="t,t,t,f"
											data-rsp_o="off"
											data-rsp_bd="off"
											data-disp="inline-block"
											data-frame_0="y:50;"
											data-frame_1="e:power4.out;st:800;sp:1100;sR:910;"
											data-frame_999="o:0;st:w;sR:6890;"
											style="z-index:3;font-family:'DM Sans';text-transform:uppercase;display:inline-block;will-change:transform;"
										>
										</rs-layer><!--

										--><rs-layer
											id="slider-12-slide-30-layer-12" 
											data-type="shape"
											data-xy="xo:50px,37px,19px,11px;yo:160px,120px,64px,39px;"
											data-text="w:normal;s:20,15,8,4;c:both;l:0,18,9,6;"
											data-flcr="c:both;"
											data-dim="w:100%;h:15px,14px,8px,0px;"
											data-rsp_o="off"
											data-rsp_bd="off"
											data-frame_999="o:0;st:w;sR:8700;"
											style="z-index:4;"
										> 
										</rs-layer><!--

										--><rs-layer
											id="slider-12-slide-30-layer-13" 
											class="sldr-title"
											data-type="text"
											data-xy="xo:0,35px,35px,35px;yo:0,281px,281px,281px;"
											data-text="w:normal;s:77,56,36,24;l:85,65,45,30;ls:-1px,-1px,-1px,0px;fw:700;"
											data-rsp_o="off"
											data-rsp_bd="off"
											data-disp="inline-block"
											data-frame_0="y:50;"
											data-frame_1="y:-1px;e:power4.out;st:980;sp:1100;sR:1090;"
											data-frame_999="o:0;st:w;sR:6710;"
											style="z-index:5;font-family:'DM Sans';display:inline-block;will-change:transform;"
										>Clever Solutions.<br /> Gratifying Results.<br />
 
										</rs-layer><!--

										--><rs-layer
											id="slider-12-slide-30-layer-15" 
											data-type="shape"
											data-xy="xo:50px,37px,19px,11px;yo:160px,120px,64px,39px;"
											data-text="w:normal;s:20,15,8,4;c:both;l:0,18,9,6;"
											data-flcr="c:both;"
											data-dim="w:100%;h:15px,16px,14px,0px;"
											data-rsp_o="off"
											data-rsp_bd="off"
											data-frame_999="o:0;st:w;sR:8700;"
											style="z-index:6;"
										> 
										</rs-layer><!--

										--><rs-layer
											id="slider-12-slide-30-layer-7" 
											data-type="text"
											data-xy="xo:0,36px,36px,36px;yo:0,429px,429px,429px;"
											data-text="w:normal;s:18,17,16,15;l:32,30,22,22;a:center;"
											data-vbility="t,t,t,f"
											data-rsp_o="off"
											data-rsp_bd="off"
											data-disp="inline-block"
											data-frame_0="y:100%;"
											data-frame_1="e:power4.out;st:1080;sp:1100;sR:1080;"
											data-frame_999="o:0;st:w;sR:6820;"
											style="z-index:7;font-family:'DM Sans';display:inline-block;will-change:transform;"
										>
										</rs-layer><!--

										--><rs-layer
											id="slider-12-slide-30-layer-11" 
											data-type="shape"
											data-xy="xo:50px,37px,19px,11px;yo:260px,195px,105px,64px;"
											data-text="w:normal;s:20,15,8,4;c:both;l:0,18,9,6;"
											data-flcr="c:both;"
											data-dim="w:100%;h:30px,24px,22px,17px;"
											data-rsp_o="off"
											data-rsp_bd="off"
											data-frame_999="o:0;st:w;sR:8700;"
											style="z-index:8;"
										> 
										</rs-layer>

											<rs-layer 
											id="slider-12-slide-30-layer-10" 
											class="sldr-button rev-btn" 
											data-type="button" 
											data-xy="xo:0,36px,36px,36px;yo:0,493px,493px,493px;" 
											data-text="w:normal;s:15,14,14,14;l:56,54,52,48;fw:700;a:center;" 
											data-dim="minh:0px,none,none,none;" 
											data-actions="o:simpleLink;a:document.location.href='contacts/';" 
											data-rsp_o="off" 
											data-rsp_bd="off" 
											data-disp="inline-block" 
											data-padding="r:40,40,36,26;b:1,2,2,2;l:40,40,36,26;" 
											data-frame_0="y:100%;" 
											data-frame_1="e:power4.out;st:1200;sp:1100;sR:1310;" 
											data-frame_999="o:0;st:w;sR:6490;" 
											data-frame_hover="rX:0deg;rY:0deg;c:#fff;bgc:#1ba25b;boc:#1f242e;bor:0px,0px,0px,0px;bos:solid;bow:0px,0px,0px,0px;e:power1.inOut;" 
											style="z-index:9;background-color:#07d368;font-family:'DM Sans';display:inline-block;will-change:transform;" 
											> 
											<a style="color:white;" href="contacts/">Schedule A Meeting</a> 
											</rs-layer>

										</rs-column><!--
								--></rs-row><!--
							--></rs-zone><!--
-->						</rs-slide>
						<rs-slide style="position: absolute;" data-key="rs-31" data-title="Slide" data-thumb="wp-content/uploads/2022/07/slider1-image-2-copyright-50x100.jpg" data-anim="adpr:false;o:outin;" data-in="o:0;sx:0.85;sy:0.85;" data-out="x:(100%);">
							<img decoding="async" alt="" title="slider1-image-2-copyright" width="1920" height="980" class="dsk rev-slidebg tp-rs-img rs-lazyload" data-lazyload="wp-content/uploads/2022/07/slider1-image-2-copyright.jpg" data-parallax="off" data-no-retina>
							<img decoding="async" alt="" title="slider1-image-2-copyright" width="1920" height="980" class="mbl rev-slidebg tp-rs-img rs-lazyload" data-lazyload="wp-content/uploads/2022/07/slider1-image-2-copyright-mbl.jpg" data-parallax="off" data-no-retina>

<!--						--><rs-zone id="rrzm_31" class="rev_row_zone_middle" style="z-index: 15;"><!--

								--><rs-row
									id="slider-12-slide-31-layer-0" 
									class="slider-row"
									data-type="row"
									data-xy="xo:50px;yo:50px;"
									data-cbreak="nobreak"
									data-basealign="slide"
									data-rsp_bd="off"
									data-frame_0="o:1;"
									data-frame_999="o:0;st:w;sR:8700;sA:9000;"
									style="z-index:1;"
								><!--
									--><rs-column
										id="slider-12-slide-31-layer-1" 
										data-type="column"
										data-xy="xo:50px;yo:50px;"
										data-text="l:35,25,15,15;a:center;"
										data-rsp_bd="off"
										data-column="w:100%;"
										data-frame_0="o:1;"
										data-frame_999="o:0;st:w;sR:8700;sA:9000;"
										style="z-index:2;width:100%;"
									><!--
										--><rs-layer
											id="slider-12-slide-31-layer-9" 
											data-type="text"
											data-xy="xo:0,36px,36px,36px;yo:0,429px,429px,429px;"
											data-text="w:normal;s:15,14,12,12;l:32,30,22,22;ls:1px;fw:500,700,700,400;a:center;"
											data-vbility="t,t,t,f"
											data-rsp_o="off"
											data-rsp_bd="off"
											data-disp="inline-block"
											data-frame_0="y:50;"
											data-frame_1="e:power4.out;st:800;sp:1100;sR:910;"
											data-frame_999="o:0;st:w;sR:6890;"
											style="z-index:3;font-family:'DM Sans';text-transform:uppercase;display:inline-block;will-change:transform;"
										>
										</rs-layer><!--

										--><rs-layer
											id="slider-12-slide-31-layer-12" 
											data-type="shape"
											data-xy="xo:50px,37px,19px,11px;yo:160px,120px,64px,39px;"
											data-text="w:normal;s:20,15,8,4;c:both;l:0,18,9,6;"
											data-flcr="c:both;"
											data-dim="w:100%;h:15px,14px,8px,0px;"
											data-rsp_o="off"
											data-rsp_bd="off"
											data-frame_999="o:0;st:w;sR:8700;"
											style="z-index:4;"
										> 
										</rs-layer><!--

										--><rs-layer
											id="slider-12-slide-31-layer-13" 
											class="sldr-title"
											data-type="text"
											data-xy="xo:0,35px,35px,35px;yo:0,281px,281px,281px;"
											data-text="w:normal;s:77,56,36,24;l:85,65,45,30;ls:-1px,-1px,-1px,0px;fw:700;a:center;"
											data-rsp_o="off"
											data-rsp_bd="off"
											data-disp="inline-block"
											data-frame_0="y:50;"
											data-frame_1="x:0px,0,0,0;y:-1px,0,0,0;e:power4.out;st:980;sp:1100;sR:1090;"
											data-frame_999="o:0;st:w;sR:6710;"
											style="z-index:5;font-family:'DM Sans';display:inline-block;will-change:transform;"
										>Rigorous Processes.<br />Reliable Systems.
										</rs-layer><!--

										--><rs-layer
											id="slider-12-slide-31-layer-21" 
											data-type="shape"
											data-xy="xo:50px,37px,19px,11px;yo:160px,120px,64px,39px;"
											data-text="w:normal;s:20,15,8,4;c:both;l:0,18,9,6;"
											data-flcr="c:both;"
											data-dim="w:100%;h:15px,14px,12px,0px;"
											data-rsp_o="off"
											data-rsp_bd="off"
											data-frame_999="o:0;st:w;sR:8700;"
											style="z-index:6;"
										> 
										</rs-layer><!--

										--><rs-layer
											id="slider-12-slide-31-layer-24" 
											data-type="text"
											data-xy="xo:0,36px,36px,36px;yo:0,429px,429px,429px;"
											data-text="w:normal;s:18,17,16,15;l:32,30,22,22;a:center;"
											data-vbility="t,t,t,f"
											data-rsp_o="off"
											data-rsp_bd="off"
											data-disp="inline-block"
											data-frame_0="y:100%;"
											data-frame_1="e:power4.out;st:1080;sp:1100;sR:1080;"
											data-frame_999="o:0;st:w;sR:6820;"
											style="z-index:7;font-family:'DM Sans';display:inline-block;will-change:transform;"
										>
										</rs-layer><!--

										--><rs-layer
											id="slider-12-slide-31-layer-11" 
											data-type="shape"
											data-xy="xo:50px,37px,19px,11px;yo:260px,195px,105px,64px;"
											data-text="w:normal;s:20,15,8,4;c:both;l:0,18,9,6;"
											data-flcr="c:both;"
											data-dim="w:100%;h:30px,24px,22px,17px;"
											data-rsp_o="off"
											data-rsp_bd="off"
											data-frame_999="o:0;st:w;sR:8700;"
											style="z-index:8;"
										> 
										</rs-layer><!--

										--><rs-layer
											id="slider-12-slide-31-layer-10" 
											class="sldr-button rev-btn"
											data-type="button"
											data-xy="xo:0,36px,36px,36px;yo:0,493px,493px,493px;"
											data-text="w:normal;s:15,14,14,14;l:56,54,52,48;fw:700;a:center;"
											data-dim="minh:0px,none,none,none;"
											data-actions="o:simpleLink;a:document.location.href='contacts/';" 
											data-rsp_o="off"
											data-rsp_bd="off"
											data-disp="inline-block"
											data-padding="r:40,40,36,26;b:1,2,2,2;l:40,40,36,26;"
											data-frame_0="y:100%;"
											data-frame_1="e:power4.out;st:1200;sp:1100;sR:1310;"
											data-frame_999="o:0;st:w;sR:6490;"
											data-frame_hover="rX:0deg;rY:0deg;c:#fff;bgc:#1ba25b;boc:#1f242e;bor:0px,0px,0px,0px;bos:solid;bow:0px,0px,0px,0px;e:power1.inOut;"
											style="z-index:9;background-color:#07d368;font-family:'DM Sans';display:inline-block;will-change:transform;"
										>
										
										<a style="color:white;" href="contacts/">Schedule A Meeting</a> 

										</rs-layer><!--
									--></rs-column><!--
								--></rs-row><!--
							--></rs-zone><!--
-->						</rs-slide>
						<rs-slide style="position: absolute;" data-key="rs-32" data-title="Slide" data-thumb="wp-content/uploads/2022/07/slider1-image-3-copyright-50x100.jpg" data-anim="adpr:false;o:outin;" data-in="o:0;sx:0.85;sy:0.85;" data-out="x:(100%);">
							<img decoding="async" alt="" title="slider1-image-3-copyright" width="1920" height="980" class="dsk rev-slidebg tp-rs-img rs-lazyload" data-lazyload="wp-content/uploads/2022/07/slider1-image-3-copyright.jpg" data-bg="p:center top;" data-parallax="off" data-no-retina>
							<img decoding="async" alt="" title="slider1-image-3-copyright" width="1920" height="980" class="mbl rev-slidebg tp-rs-img rs-lazyload" data-lazyload="wp-content/uploads/2022/07/slider1-image-3-copyright-mbl.jpg" data-bg="p:center top;" data-parallax="off" data-no-retina>

<!--						--><rs-zone id="rrzm_32" class="rev_row_zone_middle" style="z-index: 15;"><!--

								--><rs-row
									id="slider-12-slide-32-layer-0" 
									class="slider-row"
									data-type="row"
									data-xy="xo:50px;yo:50px;"
									data-cbreak="nobreak"
									data-basealign="slide"
									data-wrpcls="slider-row-wrap"
									data-rsp_bd="off"
									data-margin="l:305,120,30,20;"
									data-frame_0="o:1;"
									data-frame_999="o:0;st:w;sR:8700;sA:9000;"
									style="z-index:1;"
								><!--
									--><rs-column
										id="slider-12-slide-32-layer-1" 
										data-type="column"
										data-xy="xo:50px;yo:50px;"
										data-text="l:35,25,15,15;"
										data-rsp_bd="off"
										data-column="w:100%;"
										data-frame_0="o:1;"
										data-frame_999="o:0;st:w;sR:8700;sA:9000;"
										style="z-index:2;width:100%;"
									><!--
										--><rs-layer
											id="slider-12-slide-32-layer-9" 
											data-type="text"
											data-xy="xo:0,36px,36px,36px;yo:0,429px,429px,429px;"
											data-text="w:normal;s:15,14,12,12;l:32,30,22,22;ls:1px;fw:500,700,700,400;"
											data-vbility="t,t,t,f"
											data-rsp_o="off"
											data-rsp_bd="off"
											data-disp="inline-block"
											data-frame_0="y:50;"
											data-frame_1="e:power4.out;st:800;sp:1100;sR:910;"
											data-frame_999="o:0;st:w;sR:6890;"
											style="z-index:3;font-family:'DM Sans';text-transform:uppercase;display:inline-block;will-change:transform;"
										>
										</rs-layer><!--

										--><rs-layer
											id="slider-12-slide-32-layer-12" 
											data-type="shape"
											data-xy="xo:50px,37px,19px,11px;yo:160px,120px,64px,39px;"
											data-text="w:normal;s:20,15,8,4;c:both;l:0,18,9,6;"
											data-flcr="c:both;"
											data-dim="w:100%;h:15px,14px,8px,0px;"
											data-rsp_o="off"
											data-rsp_bd="off"
											data-frame_999="o:0;st:w;sR:8700;"
											style="z-index:4;"
										> 
										</rs-layer><!--

										--><rs-layer
											id="slider-12-slide-32-layer-13" 
											class="sldr-title"
											data-type="text"
											data-xy="xo:0,35px,35px,35px;yo:0,281px,281px,281px;"
											data-text="w:normal;s:77,56,36,24;l:85,65,45,30;ls:-1px,-1px,-1px,0px;fw:700;"
											data-rsp_o="off"
											data-rsp_bd="off"
											data-disp="inline-block"
											data-frame_0="y:50;"
											data-frame_1="x:0px,0,0,0;y:-1px,0,0,0;e:power4.out;st:980;sp:1100;sR:1090;"
											data-frame_999="o:0;st:w;sR:6710;"
											style="z-index:5;font-family:'DM Sans';display:inline-block;will-change:transform;"
										>Deep Insights.<br /> Winning Strategies.
										</rs-layer><!--

										--><rs-layer
											id="slider-12-slide-32-layer-15" 
											data-type="shape"
											data-xy="xo:50px,37px,19px,11px;yo:160px,120px,64px,39px;"
											data-text="w:normal;s:20,15,8,4;c:both;l:0,18,9,6;"
											data-flcr="c:both;"
											data-dim="w:100%;h:15px,16px,14px,0px;"
											data-rsp_o="off"
											data-rsp_bd="off"
											data-frame_999="o:0;st:w;sR:8700;"
											style="z-index:6;"
										> 
										</rs-layer><!--

										--><rs-layer
											id="slider-12-slide-32-layer-7" 
											data-type="text"
											data-xy="xo:0,36px,36px,36px;yo:0,429px,429px,429px;"
											data-text="w:normal;s:18,17,16,15;l:32,30,22,22;a:center;"
											data-vbility="t,t,t,f"
											data-rsp_o="off"
											data-rsp_bd="off"
											data-disp="inline-block"
											data-frame_0="y:100%;"
											data-frame_1="e:power4.out;st:1080;sp:1100;sR:1080;"
											data-frame_999="o:0;st:w;sR:6820;"
											style="z-index:7;font-family:'DM Sans';display:inline-block;will-change:transform;"
										>
										</rs-layer><!--

										--><rs-layer
											id="slider-12-slide-32-layer-11" 
											data-type="shape"
											data-xy="xo:50px,37px,19px,11px;yo:260px,195px,105px,64px;"
											data-text="w:normal;s:20,15,8,4;c:both;l:0,18,9,6;"
											data-flcr="c:both;"
											data-dim="w:100%;h:30px,24px,22px,17px;"
											data-rsp_o="off"
											data-rsp_bd="off"
											data-frame_999="o:0;st:w;sR:8700;"
											style="z-index:8;"
										> 
										</rs-layer><!--

										--><rs-layer
											id="slider-12-slide-32-layer-10" 
											class="sldr-button rev-btn"
											data-type="button"
											data-xy="xo:0,36px,36px,36px;yo:0,493px,493px,493px;"
											data-text="w:normal;s:15,14,14,14;l:56,54,52,48;fw:700;a:center;"
											data-dim="minh:0px,none,none,none;"
											data-actions="o:simpleLink;a:document.location.href='contacts/';" 
											data-rsp_o="off"
											data-rsp_bd="off"
											data-disp="inline-block"
											data-padding="r:40,40,36,26;b:1,2,2,2;l:40,40,36,26;"
											data-frame_0="y:100%;"
											data-frame_1="e:power4.out;st:1200;sp:1100;sR:1310;"
											data-frame_999="o:0;st:w;sR:6490;"
											data-frame_hover="rX:0deg;rY:0deg;c:#fff;bgc:#1ba25b;boc:#1f242e;bor:0px,0px,0px,0px;bos:solid;bow:0px,0px,0px,0px;e:power1.inOut;"
											style="z-index:9;background-color:#07d368;font-family:'DM Sans';display:inline-block;will-change:transform;"
										>
										
										<a style="color:white;" href="contacts/">Schedule A Meeting</a> 

										</rs-layer><!--
									--></rs-column><!--
								--></rs-row><!--
							--></rs-zone><!--
-->						</rs-slide>
					</rs-slides>
					<rs-static-layers><!--

							--><rs-layer
								id="slider-12-slide-12-layer-16" 
								class="rs-layer-static"
								data-type="image"
								data-xy="x:r;xo:70px,15px,15px,15px;y:m;"
								data-text="w:normal;s:20,15,8,4;l:0,18,9,6;"
								data-dim="w:['26px','26px','26px','26px'];h:['50px','50px','50px','50px'];"
								data-vbility="t,f,f,f"
								data-actions='o:click;a:jumptoslide;slide:next;'
								data-basealign="slide"
								data-rsp_o="off"
								data-rsp_bd="off"
								data-onslides="s:1;"
								data-frame_999="o:0;st:w;"
								style="z-index:9;cursor:pointer;"
							><img decoding="async" src="wp-content/plugins/revslider/public/assets/assets/dummy.png" alt="" class="tp-rs-img rs-lazyload" width="26" height="50" data-lazyload="wp-content/uploads/2021/11/nav-arrow.png" data-no-retina> 
							</rs-layer><!--

							--><rs-layer
								id="slider-12-slide-12-layer-17" 
								class="rs-layer-static"
								data-type="image"
								data-xy="xo:70px,15px,15px,15px;y:m;"
								data-text="w:normal;s:20,15,8,4;l:0,18,9,6;"
								data-dim="w:['26px','26px','26px','26px'];h:['50px','50px','50px','50px'];"
								data-vbility="t,f,f,f"
								data-actions='o:click;a:jumptoslide;slide:previous;'
								data-basealign="slide"
								data-rsp_o="off"
								data-rsp_bd="off"
								data-btrans="rZ:180;"
								data-onslides="s:1;"
								data-frame_999="o:0;st:w;"
								style="z-index:10;cursor:pointer;"
							><img decoding="async" src="wp-content/plugins/revslider/public/assets/assets/dummy.png" alt="" class="tp-rs-img rs-lazyload" width="26" height="50" data-lazyload="wp-content/uploads/2021/11/nav-arrow.png" data-no-retina> 
							</rs-layer><!--
					--></rs-static-layers>
				</rs-module>
				<script>
					setREVStartSize({c: 'rev_slider_12_1',rl:[1240,1460,785,500],el:[810,650,480,480],gw:[1920,1440,778,480],gh:[810,650,480,480],type:'standard',justify:'',layout:'fullscreen',offsetContainer:'',offset:'',mh:"450px"});if (window.RS_MODULES!==undefined && window.RS_MODULES.modules!==undefined && window.RS_MODULES.modules["revslider121"]!==undefined) {window.RS_MODULES.modules["revslider121"].once = false;window.revapi12 = undefined;if (window.RS_MODULES.checkMinimal!==undefined) window.RS_MODULES.checkMinimal()}
				</script>
			</rs-module-wrap>
			<!-- END REVOLUTION SLIDER -->
</div>			
</div>

			</aside></div>		</div>
				</div>
						</div>
					</div>
		</div>
								</div>
					</div>
		</section>


				<section class="elementor-section elementor-top-section elementor-element elementor-element-2f98621 elementor-section-stretched scheme_light elementor-section-boxed elementor-section-height-default elementor-section-height-default sc_fly_static" data-id="2f98621" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
						<div class="elementor-container elementor-column-gap-extended">
							<div class="elementor-row">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-c1a40c9 sc_inner_width_none sc_content_align_inherit sc_layouts_column_icons_position_left sc_fly_static" data-id="c1a40c9" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-c55826d sc_height_huge sc_fly_static elementor-widget elementor-widget-spacer" data-id="c55826d" data-element_type="widget" data-widget_type="spacer.default">
				<div class="elementor-widget-container">
					<div class="elementor-spacer">
			<div class="elementor-spacer-inner"></div>
		</div>
				</div>
				</div>
				<div class="elementor-element elementor-element-a7ddda9 sc_fly_static elementor-widget elementor-widget-trx_sc_title" data-id="a7ddda9" data-element_type="widget" data-widget_type="trx_sc_title.default">
		<div class="elementor-widget-container">
			<div class="sc_title color_style_link2 sc_title_default" >
				<span class="sc_item_subtitle sc_title_subtitle sc_align_center sc_item_subtitle_above sc_item_title_style_default">How we standout</span>
				<h1 class="sc_item_title sc_title_title sc_align_center sc_item_title_style_default sc_item_title_tag">
					<span class="sc_item_title_text">The RightSolve Tripod</span>
				</h1>
			</div>		
		</div>
				</div>

				<div class="elementor-element elementor-element-bf4edfa sc_height_small sc_fly_static elementor-widget elementor-widget-spacer" data-id="bf4edfa" data-element_type="widget" data-widget_type="spacer.default">
				<div class="elementor-widget-container">
				<div class="elementor-spacer">
					<div class="elementor-spacer-inner">						
					</div>
				</div>
				</div>
				</div>
				<div
				class="elementor-element elementor-element-a6de75b animation_type_sequental sc_fly_static elementor-invisible elementor-widget elementor-widget-trx_sc_icons"
				data-id="a6de75b"
				data-element_type="widget"
				data-settings='{"_animation":"n7-golf-club-fadeinup","_animation_delay":100}'
				data-widget_type="trx_sc_icons.default"
			>
				<div class="elementor-widget-container">
					<div class="sc_icons color_style_dark sc_icons_decoration sc_icons_size_medium sc_align_center">
						<div class="sc_icons_columns_wrap sc_item_columns trx_addons_columns_wrap columns_padding_bottom columns_in_single_row">
							<div class="trx_addons_column-1_3 trx_addons_column-1_2-tablet">
								<div class="sc_icons_item sc_icons_item_linked with_more">
									<div class="sc_icons_icon sc_icon_type_">
										<i class="fa-solid fa-users-gear"></i>
									</div>
									<div class="sc_icons_item_details">
										<h4 class="sc_icons_item_title">The People</h4>
										<div class="sc_icons_item_description"><span>To Bring Your Vision To Life</span></div>										
									</div>
								</div>
							</div>
							<div class="trx_addons_column-1_3 trx_addons_column-1_2-tablet">
								<div class="sc_icons_item sc_icons_item_linked with_more">
									<div class="sc_icons_icon sc_icon_type_">
										<i class="demo-icon icon-cog-alt"></i>
									</div>
									<div class="sc_icons_item_details">
										<h4 class="sc_icons_item_title">A Process</h4>
										<div class="sc_icons_item_description"><span>That Puts Your Goals First</span></div>
									</div>
								</div>
							</div>
							<div class="trx_addons_column-1_3 trx_addons_column-1_2-tablet">
								<div class="sc_icons_item sc_icons_item_linked with_more">
									<div class="sc_icons_icon sc_icon_type_">
										<i class="demo-icon icon-handshake-o"></i>
									</div>
									<div class="sc_icons_item_details">
										<h4 class="sc_icons_item_title">A Relationship</h4>
										<div class="sc_icons_item_description"><span>Based On Follow-Up And Follow-Through</span></div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /.sc_icons -->
				</div>
			</div>
			
				<div class="elementor-element elementor-element-d32eefa sc_height_huge sc_fly_static elementor-widget elementor-widget-spacer" data-id="d32eefa" data-element_type="widget" data-widget_type="spacer.default">
				<div class="elementor-widget-container">
					<div class="elementor-spacer">
			<div class="elementor-spacer-inner"></div>
		</div>
				</div>
				</div>
						</div>
					</div>
		</div>
								</div>
					</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-2fc4415 elementor-section-boxed elementor-section-height-default elementor-section-height-default sc_fly_static" data-id="2fc4415" data-element_type="section">
						<div class="elementor-container elementor-column-gap-extended">
							<div class="elementor-row">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-c29ef1c sc_inner_width_none sc_content_align_inherit sc_layouts_column_icons_position_left sc_fly_static" data-id="c29ef1c" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-0c8e452 sc_height_huge sc_fly_static elementor-widget elementor-widget-spacer" data-id="0c8e452" data-element_type="widget" data-widget_type="spacer.default">
				<div class="elementor-widget-container">
					<div class="elementor-spacer">
			<div class="elementor-spacer-inner"></div>
		</div>
				</div>
				</div>
						</div>
					</div>
		</div>
								</div>
					</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-0fd282f elementor-section-boxed elementor-section-height-default elementor-section-height-default sc_fly_static" data-id="0fd282f" data-element_type="section">
						<div class="elementor-container elementor-column-gap-extended">
							<div class="elementor-row">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-dbec0fe sc_inner_width_none sc_content_align_inherit sc_layouts_column_icons_position_left sc_fly_static" data-id="dbec0fe" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<section class="elementor-section elementor-inner-section elementor-element elementor-element-f21ec93 elementor-section-boxed elementor-section-height-default elementor-section-height-default sc_fly_static" data-id="f21ec93" data-element_type="section">
						<div class="elementor-container elementor-column-gap-extended">
							<div class="elementor-row">
					<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-e2d23c0 sc_inner_width_none sc_content_align_inherit sc_layouts_column_icons_position_left sc_fly_static" data-id="e2d23c0" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div data-parallax-params="{&quot;parallax&quot;:1,&quot;flow&quot;:&quot;entrance&quot;,&quot;crop&quot;:&quot;none&quot;,&quot;ease&quot;:&quot;power2&quot;,&quot;duration&quot;:0.5,&quot;delay&quot;:0,&quot;squeeze&quot;:1,&quot;text&quot;:&quot;block&quot;,&quot;text_separate&quot;:0,&quot;text_wrap&quot;:0,&quot;mouse&quot;:0,&quot;mouse_type&quot;:&quot;transform3d&quot;,&quot;mouse_tilt_amount&quot;:70,&quot;mouse_speed&quot;:10,&quot;mouse_z&quot;:&quot;&quot;,&quot;mouse_handler&quot;:&quot;row&quot;,&quot;range_start&quot;:0,&quot;range_end&quot;:40,&quot;sticky_offset&quot;:0,&quot;lag&quot;:0,&quot;x_start&quot;:0,&quot;x_start_unit&quot;:&quot;px&quot;,&quot;x_end&quot;:0,&quot;x_end_unit&quot;:&quot;px&quot;,&quot;y_start&quot;:62,&quot;y_start_unit&quot;:&quot;px&quot;,&quot;y_end&quot;:0,&quot;y_end_unit&quot;:&quot;px&quot;,&quot;scale_start&quot;:100,&quot;scale_end&quot;:100,&quot;rotate_start&quot;:0,&quot;rotate_end&quot;:0,&quot;opacity_start&quot;:0,&quot;opacity_end&quot;:1,&quot;crop_start&quot;:0,&quot;crop_end&quot;:100,&quot;range_start_tablet&quot;:0,&quot;range_end_tablet&quot;:40,&quot;sticky_offset_tablet&quot;:0,&quot;lag_tablet&quot;:0,&quot;x_start_tablet&quot;:0,&quot;x_start_tablet_unit&quot;:&quot;px&quot;,&quot;x_end_tablet&quot;:0,&quot;x_end_tablet_unit&quot;:&quot;px&quot;,&quot;y_start_tablet&quot;:62,&quot;y_start_tablet_unit&quot;:&quot;px&quot;,&quot;y_end_tablet&quot;:0,&quot;y_end_tablet_unit&quot;:&quot;px&quot;,&quot;scale_start_tablet&quot;:100,&quot;scale_end_tablet&quot;:100,&quot;rotate_start_tablet&quot;:0,&quot;rotate_end_tablet&quot;:0,&quot;opacity_start_tablet&quot;:0,&quot;opacity_end_tablet&quot;:1,&quot;crop_start_tablet&quot;:0,&quot;crop_end_tablet&quot;:100,&quot;range_start_mobile&quot;:0,&quot;range_end_mobile&quot;:40,&quot;sticky_offset_mobile&quot;:0,&quot;lag_mobile&quot;:0,&quot;x_start_mobile&quot;:0,&quot;x_start_mobile_unit&quot;:&quot;px&quot;,&quot;x_end_mobile&quot;:0,&quot;x_end_mobile_unit&quot;:&quot;px&quot;,&quot;y_start_mobile&quot;:62,&quot;y_start_mobile_unit&quot;:&quot;px&quot;,&quot;y_end_mobile&quot;:0,&quot;y_end_mobile_unit&quot;:&quot;px&quot;,&quot;scale_start_mobile&quot;:100,&quot;scale_end_mobile&quot;:100,&quot;rotate_start_mobile&quot;:0,&quot;rotate_end_mobile&quot;:0,&quot;opacity_start_mobile&quot;:0,&quot;opacity_end_mobile&quot;:1,&quot;crop_start_mobile&quot;:0,&quot;crop_end_mobile&quot;:100}" class="elementor-element elementor-element-5496878 sc_parallax sc_parallax_entrance sc_fly_static elementor-widget elementor-widget-image" data-id="5496878" data-element_type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
								<div class="elementor-image">
												<img decoding="async" src="wp-content/uploads/2022/07/image.jpg" title="image-1-copyright" alt="image-1-copyright" />														</div>
						</div>
				</div>
				<div data-parallax-params="{&quot;parallax&quot;:1,&quot;flow&quot;:&quot;entrance&quot;,&quot;crop&quot;:&quot;none&quot;,&quot;ease&quot;:&quot;power2&quot;,&quot;duration&quot;:0.5,&quot;delay&quot;:0,&quot;squeeze&quot;:1,&quot;text&quot;:&quot;block&quot;,&quot;text_separate&quot;:0,&quot;text_wrap&quot;:0,&quot;mouse&quot;:0,&quot;mouse_type&quot;:&quot;transform3d&quot;,&quot;mouse_tilt_amount&quot;:70,&quot;mouse_speed&quot;:10,&quot;mouse_z&quot;:&quot;&quot;,&quot;mouse_handler&quot;:&quot;row&quot;,&quot;range_start&quot;:0,&quot;range_end&quot;:13,&quot;sticky_offset&quot;:0,&quot;lag&quot;:0,&quot;x_start&quot;:0,&quot;x_start_unit&quot;:&quot;px&quot;,&quot;x_end&quot;:0,&quot;x_end_unit&quot;:&quot;px&quot;,&quot;y_start&quot;:41,&quot;y_start_unit&quot;:&quot;px&quot;,&quot;y_end&quot;:0,&quot;y_end_unit&quot;:&quot;px&quot;,&quot;scale_start&quot;:100,&quot;scale_end&quot;:100,&quot;rotate_start&quot;:0,&quot;rotate_end&quot;:0,&quot;opacity_start&quot;:0,&quot;opacity_end&quot;:1,&quot;crop_start&quot;:0,&quot;crop_end&quot;:100,&quot;range_start_tablet&quot;:0,&quot;range_end_tablet&quot;:13,&quot;sticky_offset_tablet&quot;:0,&quot;lag_tablet&quot;:0,&quot;x_start_tablet&quot;:0,&quot;x_start_tablet_unit&quot;:&quot;px&quot;,&quot;x_end_tablet&quot;:0,&quot;x_end_tablet_unit&quot;:&quot;px&quot;,&quot;y_start_tablet&quot;:41,&quot;y_start_tablet_unit&quot;:&quot;px&quot;,&quot;y_end_tablet&quot;:0,&quot;y_end_tablet_unit&quot;:&quot;px&quot;,&quot;scale_start_tablet&quot;:100,&quot;scale_end_tablet&quot;:100,&quot;rotate_start_tablet&quot;:0,&quot;rotate_end_tablet&quot;:0,&quot;opacity_start_tablet&quot;:0,&quot;opacity_end_tablet&quot;:1,&quot;crop_start_tablet&quot;:0,&quot;crop_end_tablet&quot;:100,&quot;range_start_mobile&quot;:0,&quot;range_end_mobile&quot;:13,&quot;sticky_offset_mobile&quot;:0,&quot;lag_mobile&quot;:0,&quot;x_start_mobile&quot;:0,&quot;x_start_mobile_unit&quot;:&quot;px&quot;,&quot;x_end_mobile&quot;:0,&quot;x_end_mobile_unit&quot;:&quot;px&quot;,&quot;y_start_mobile&quot;:41,&quot;y_start_mobile_unit&quot;:&quot;px&quot;,&quot;y_end_mobile&quot;:0,&quot;y_end_mobile_unit&quot;:&quot;px&quot;,&quot;scale_start_mobile&quot;:100,&quot;scale_end_mobile&quot;:100,&quot;rotate_start_mobile&quot;:0,&quot;rotate_end_mobile&quot;:0,&quot;opacity_start_mobile&quot;:0,&quot;opacity_end_mobile&quot;:1,&quot;crop_start_mobile&quot;:0,&quot;crop_end_mobile&quot;:100}" class="elementor-element elementor-element-0ce8e8e elementor-widget__width-initial elementor-absolute sc_layouts_hide_on_tablet sc_layouts_hide_on_mobile sc_parallax sc_parallax_entrance sc_fly_static elementor-widget elementor-widget-text-editor" data-id="0ce8e8e" data-element_type="widget" data-settings="{&quot;_position&quot;:&quot;absolute&quot;}" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
								<div class="elementor-text-editor elementor-clearfix">
				<h3><span style="color: #ffffff;">Technology Solutions Just As They Should Be</span></h3>
			</div>
						</div>
				</div>
				<div class="elementor-element elementor-element-dc197d3 elementor-widget__width-inherit sc_layouts_hide_on_wide sc_layouts_hide_on_desktop sc_layouts_hide_on_notebook sc_fly_static elementor-widget elementor-widget-text-editor" data-id="dc197d3" data-element_type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
								<div class="elementor-text-editor elementor-clearfix">
				<h3><span style="color: #ffffff;">Technology Solutions Just As They Should Be</span></h3>					</div>
						</div>
				</div>
						</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-b0d9b41 sc_inner_width_none sc_content_align_inherit sc_layouts_column_icons_position_left sc_fly_static" data-id="b0d9b41" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-1b0727e sc_fly_static elementor-widget elementor-widget-trx_sc_title" data-id="1b0727e" data-element_type="widget" data-widget_type="trx_sc_title.default">
				<div class="elementor-widget-container">
			<div		class="sc_title color_style_link2 sc_title_default" ><span class="sc_item_subtitle sc_title_subtitle sc_item_subtitle_above sc_item_title_style_default">The RightSolve Effect</span><h1 class="sc_item_title sc_title_title sc_item_title_style_default sc_item_title_tag"
			><span class="sc_item_title_text">Take Your Mission to the Next Level</span></h1>
			<div class="sc_item_descr sc_title_descr">
				<p>We are here to meet your highest expectations. Leverage Rightsolve to incorporate the best-fitting technology solutions to achieve your goals.</p>
</div></div>		</div>
				</div>
				<div class="elementor-element elementor-element-8e55de0 sc_height_small sc_fly_static elementor-widget elementor-widget-spacer" data-id="8e55de0" data-element_type="widget" data-widget_type="spacer.default">
				<div class="elementor-widget-container">
					<div class="elementor-spacer">
			<div class="elementor-spacer-inner"></div>
		</div>
				</div>
				</div>
				<div class="elementor-element elementor-element-81249e4 sc_fly_static elementor-widget elementor-widget-heading" data-id="81249e4" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<h5 class="elementor-heading-title elementor-size-default">
						<span style="font-weight: 400;  margin-right: 15px;">01.</span> Experienced Experts
					</h5>
				</div>
				</div>

				<div class="elementor-element elementor-element-f484ce4 elementor-widget-divider--view-line sc_fly_static elementor-widget elementor-widget-divider" data-id="f484ce4" data-element_type="widget" data-widget_type="divider.default">
				<div class="elementor-widget-container">
					<div class="elementor-divider">
						<span class="elementor-divider-separator"></span>
					</div>
				</div>
				</div>

				<div class="elementor-element elementor-element-6d303fe sc_fly_static elementor-widget elementor-widget-heading" data-id="6d303fe" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<h5 class="elementor-heading-title elementor-size-default">
						<span style="font-weight: 400;  margin-right: 15px;">02.</span>Certified Professionals
					</h5>
				</div>
				</div>
				
				<div class="elementor-element elementor-element-f484ce4 elementor-widget-divider--view-line sc_fly_static elementor-widget elementor-widget-divider" data-id="f484ce4" data-element_type="widget" data-widget_type="divider.default">
					<div class="elementor-widget-container">
						<div class="elementor-divider">
							<span class="elementor-divider-separator"></span>
						</div>
					</div>
					</div>
	
					<div class="elementor-element elementor-element-6d303fe sc_fly_static elementor-widget elementor-widget-heading" data-id="6d303fe" data-element_type="widget" data-widget_type="heading.default">
					<div class="elementor-widget-container">
						<h5 class="elementor-heading-title elementor-size-default">
							<span style="font-weight: 400;  margin-right: 15px;">03.</span>Compassionate Consultants
						</h5>
					</div>
					</div>
					
				<div class="elementor-element elementor-element-dc59d2d sc_height_small sc_fly_static elementor-widget elementor-widget-spacer" data-id="dc59d2d" data-element_type="widget" data-widget_type="spacer.default">
				<div class="elementor-widget-container">
					<div class="elementor-spacer">
			<div class="elementor-spacer-inner"></div>
		</div>
				</div>
				</div>
				<div class="elementor-element elementor-element-bcc98b5 sc_fly_static elementor-widget elementor-widget-trx_sc_button" data-id="bcc98b5" data-element_type="widget" data-widget_type="trx_sc_button.default">
				<div class="elementor-widget-container">
			<div	class="sc_item_button sc_button_wrap" ><a href="about" class="sc_button sc_button_default sc_button_size_normal sc_button_icon_left" ><span class="sc_button_text"><span class="sc_button_title">About Us</span></span></a></div>		</div>
				</div>
						</div>
					</div>
		</div>
								</div>
					</div>
		</section>
				<div class="elementor-element elementor-element-1b596d9 sc_height_huge sc_fly_static elementor-widget elementor-widget-spacer" data-id="1b596d9" data-element_type="widget" data-widget_type="spacer.default">
				<div class="elementor-widget-container">
					<div class="elementor-spacer">
			<div class="elementor-spacer-inner"></div>
		</div>
				</div>
				</div>
						</div>
					</div>
		</div>
								</div>
					</div>
		</section>

		<section
		class="elementor-section elementor-top-section elementor-element elementor-element-2eca9f8 elementor-section-full_width elementor-section-stretched elementor-section-height-default elementor-section-height-default sc_fly_static"
		data-id="2eca9f8"
		data-element_type="section"
		data-settings='{"stretch_section":"section-stretched"}'
	>
		<div class="elementor-container elementor-column-gap-no">
			<div class="elementor-row">
				<div
					class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-74bf412 sc_inner_width_none sc_content_align_inherit sc_layouts_column_icons_position_left sc_fly_static"
					data-id="74bf412"
					data-element_type="column"
				>
					<div class="elementor-column-wrap elementor-element-populated">
						<div class="elementor-widget-wrap">
							<div class="elementor-element elementor-element-e906230 sc_fly_static elementor-widget elementor-widget-trx_sc_services" data-id="e906230" data-element_type="widget" data-widget_type="trx_sc_services.default">
								<div class="elementor-widget-container">
									<div class="sc_services sc_services_strong sc_services_featured_top">
										<div class="sc_services_columns_wrap sc_item_columns sc_item_posts_container sc_item_columns_4 trx_addons_columns_wrap columns_in_single_row no_margin">
											<div class="trx_addons_column-1_3 trx_addons_column-1_1-tablet">
												<div
													data-post-id="18408"
													class="sc_services_item sc_item_container post_container with_content with_more with_image sc_services_item_featured_none post-18408 cpt_services type-cpt_services status-publish has-post-thumbnail hentry cpt_services_group-golf-cart"
												>
													<div class="sc_services_item_content" style="background-image: url(wp-content/uploads/2022/07/slider1-image-1-copyright2.jpg);">
														<div class="sc_services_item_content_inner">
															<div class="sc_services_item_content_inner_bottom">
																<h6 class="sc_services_item_title"><a href="capabilities#softwaredevelopment">Software Development</a></h6>
																<div class="sc_services_item_text"><p>Let's build the next game-changer</p></div>
																<div class="sc_services_item_button sc_item_button">
																	<a href="capabilities#softwaredevelopment" class="sc_services_item_more_link"> <span class="link_text">Read more</span><span class="link_icon"></span> </a>
																</div>
															</div>
														</div>
														<a class="sc_services_item_link" href="capabilities#softwaredevelopment"></a>
													</div>
												</div>
											</div>
											<div class="trx_addons_column-1_3 trx_addons_column-1_1-tablet">
												<div
													data-post-id="18411"
													class="sc_services_item sc_item_container post_container with_content with_more with_image sc_services_item_featured_none post-18411 cpt_services type-cpt_services status-publish has-post-thumbnail hentry cpt_services_group-golf-cart"
												>
													<div class="sc_services_item_content" style="background-image: url(wp-content/uploads/2022/07/slider1-image-1-copyright3.jpg);">
														<div class="sc_services_item_content_inner">
															<div class="sc_services_item_content_inner_bottom">
																<h6 class="sc_services_item_title"><a href="capabilities#technologyconsultancy">Technology Consultancy</a></h6>
																<div class="sc_services_item_text"><p>Leverage our expert experience, for good</p></div>
																<div class="sc_services_item_button sc_item_button">
																	<a href="capabilities#technologyconsultancy" class="sc_services_item_more_link"> <span class="link_text">Read more</span><span class="link_icon"></span> </a>
																</div>
															</div>
														</div>
														<a class="sc_services_item_link" href="capabilities#technologyconsultancy"></a>
													</div>
												</div>
											</div>
											<div class="trx_addons_column-1_3 trx_addons_column-1_1-tablet">
												<div data-post-id="18412" class="sc_services_item sc_item_container post_container with_content with_more with_image sc_services_item_featured_none post-18412 cpt_services type-cpt_services status-publish has-post-thumbnail hentry cpt_services_group-golf-cart"
												>
													<div class="sc_services_item_content" style="background-image: url(wp-content/uploads/2022/07/image-3-copyright.jpg);">
														<div class="sc_services_item_content_inner">
															<div class="sc_services_item_content_inner_bottom">
																<h6 class="sc_services_item_title"><a href="capabilities#brandvisibility">Brand Visibility</a></h6>
																<div class="sc_services_item_text"><p>Your brand is a gem, let's make it shine</p></div>
																<div class="sc_services_item_button sc_item_button">
																	<a href="capabilities#brandvisibility" class="sc_services_item_more_link"> <span class="link_text">Read more</span><span class="link_icon"></span> </a>
																</div>
															</div>
														</div>
														<a class="sc_services_item_link" href="capabilities#brandvisibility"></a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


<section
class="elementor-section elementor-top-section elementor-element elementor-element-2eca9f8 elementor-section-full_width elementor-section-stretched elementor-section-height-default elementor-section-height-default sc_fly_static"
data-id="2eca9f8"
data-element_type="section"
data-settings='{"stretch_section":"section-stretched"}'
>
<div id="page" class="site">
    <div id="content" class="site-content">
        <div data-elementor-type="wp-page" data-elementor-id="2274" class="elementor elementor-2274">
            <section
                class="elementor-section elementor-top-section elementor-element elementor-element-6bcc921 ot-traditional elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="6bcc921"
                data-element_type="section"
                data-settings='{"background_background":"classic"}'
            >
                <div class="elementor-container elementor-column-gap-extended">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-5dac1ca ot-flex-column-vertical" data-id="5dac1ca" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <section
                                class="elementor-section elementor-inner-section elementor-element elementor-element-7d3a849 elementor-section-full_width elementor-section-content-bottom ot-traditional elementor-section-height-default elementor-section-height-default"
                                data-id="7d3a849"
                                data-element_type="section"
                            >
                                <div class="elementor-container elementor-column-gap-no">
                                    <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-5ef010f ot-flex-column-vertical" data-id="5ef010f" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-3f51e83 elementor-widget elementor-widget-iheading" data-id="3f51e83" data-element_type="widget" data-widget_type="iheading.default">
                                                <div class="elementor-widget-container">
                                                    <div class="ot-heading">
                                                        <h2 class="main-heading">Some of Our Projects</h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-2b9ac69 ot-flex-column-vertical" data-id="2b9ac69" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-cd92efb elementor-widget elementor-widget-text-editor" data-id="cd92efb" data-element_type="widget" data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container">
                                                    Our Guiding Principle: If we must do it then we must do it right. No compromises!
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </section>

            <section
                class="elementor-section elementor-top-section elementor-element elementor-element-8ccf77c elementor-section-full_width ot-traditional elementor-section-height-default elementor-section-height-default"
                data-id="8ccf77c"
                data-element_type="section"
                data-settings='{"background_background":"classic"}'
            >
                <div class="elementor-container elementor-column-gap-extended">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-6f2d0db ot-flex-column-vertical" data-id="6f2d0db" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-9f67c6f elementor-widget elementor-widget-irprojects" data-id="9f67c6f" data-element_type="widget" data-widget_type="irprojects.default">
                                <div class="elementor-widget-container">
                                    <div class="project-slider" data-center="true" data-show="2" data-scroll="2" data-arrow="false" data-dots="true">
                                        <div class="project-item projects-style-2">
                                            <div class="projects-box">
                                                <div class="projects-thumbnail">
                                                    <a href="projects/rightview-service-station">
                                                        <img
                                                            decoding="async"
                                                            width="720"
                                                            height="520"
                                                            src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20720%20520'%3E%3C/svg%3E"
                                                            class="attachment-engitech-portfolio-thumbnail-carousel size-engitech-portfolio-thumbnail-carousel wp-post-image"
                                                            alt=""
                                                            data-lazy-src="images/project1-720x520.jpg"
                                                        />
                                                        <noscript>
                                                            <img
                                                                decoding="async"
                                                                width="720"
                                                                height="520"
                                                                src="images/project1-720x520.jpg"
                                                                class="attachment-engitech-portfolio-thumbnail-carousel size-engitech-portfolio-thumbnail-carousel wp-post-image"
                                                                alt=""
                                                            />
                                                        </noscript>
                                                        <span class="overlay"></span>
                                                    </a>
                                                </div>
                                                <div class="portfolio-info">
                                                    <div class="portfolio-info-inner">
                                                        <a class="btn-link" href="projects/rightview-service-station"><i class="flaticon-right-arrow-1"></i></a>
                                                        <h5><a href="projects/rightview-service-station">RightView Bulk Inventory Solution</a></h5>
                                                        <p class="portfolio-cates"><a href="capabilities#softwaredevelopment">Software Development</a><span>/</span><a href="capabilities/commercial-software">Commercial Software</a><span>/</span></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="project-item projects-style-2">
                                            <div class="projects-box">
                                                <div class="projects-thumbnail">
                                                    <a href="projects/igodoo-stores">
                                                        <img
                                                            decoding="async"
                                                            width="720"
                                                            height="520"
                                                            src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20720%20520'%3E%3C/svg%3E"
                                                            class="attachment-engitech-portfolio-thumbnail-carousel size-engitech-portfolio-thumbnail-carousel wp-post-image"
                                                            alt=""
                                                            data-lazy-src="images/project4-720x520.jpg"
                                                        />
                                                        <noscript>
                                                            <img
                                                                decoding="async"
                                                                width="720"
                                                                height="520"
                                                                src="images/project4-720x520.jpg"
                                                                class="attachment-engitech-portfolio-thumbnail-carousel size-engitech-portfolio-thumbnail-carousel wp-post-image"
                                                                alt=""
                                                            />
                                                        </noscript>
                                                        <span class="overlay"></span>
                                                    </a>
                                                </div>
                                                <div class="portfolio-info">
                                                    <div class="portfolio-info-inner">
                                                        <a class="btn-link" href="projects/igodoo-stores"><i class="flaticon-right-arrow-1"></i></a>
                                                        <h5><a href="projects/igodoo-stores">Igodo eCommerce Website</a></h5>
                                                        <p class="portfolio-cates"><a href="capabilities#brandvisibility">Brand Visibility</a><span>/</span><a href="capabilities/design-development">Web Design</a><span>/</span></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="project-item projects-style-2">
                                            <div class="projects-box">
                                                <div class="projects-thumbnail">
                                                    <a href="projects/benchuks-infosec-audit">
                                                        <img
                                                            decoding="async"
                                                            width="720"
                                                            height="520"
                                                            src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20720%20520'%3E%3C/svg%3E"
                                                            class="attachment-engitech-portfolio-thumbnail-carousel size-engitech-portfolio-thumbnail-carousel wp-post-image"
                                                            alt=""
                                                            data-lazy-src="images/project3-720x520.jpg"
                                                        />
                                                        <noscript>
                                                            <img
                                                                decoding="async"
                                                                width="720"
                                                                height="520"
                                                                src="images/project3-720x520.jpg"
                                                                class="attachment-engitech-portfolio-thumbnail-carousel size-engitech-portfolio-thumbnail-carousel wp-post-image"
                                                                alt=""
                                                            />
                                                        </noscript>
                                                        <span class="overlay"></span>
                                                    </a>
                                                </div>
                                                <div class="portfolio-info">
                                                    <div class="portfolio-info-inner">
                                                        <a class="btn-link" href="projects/benchuks-infosec-audit"><i class="flaticon-right-arrow-1"></i></a>
                                                        <h5><a href="projects/benchuks-infosec-audit">Benchuks Infosec Audit Project</a></h5>
                                                        <p class="portfolio-cates"><a href="capabilities#technologyconsultancy">Technology Consultancy</a><span>/</span><a href="capabilities/cyber-sec">Cybersecurity</a><span>/</span></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="project-item projects-style-2">
                                            <div class="projects-box">
                                                <div class="projects-thumbnail">
                                                    <a href="projects/rightview-logistics">
                                                        <img
                                                            decoding="async"
                                                            width="720"
                                                            height="520"
                                                            src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20720%20520'%3E%3C/svg%3E"
                                                            class="attachment-engitech-portfolio-thumbnail-carousel size-engitech-portfolio-thumbnail-carousel wp-post-image"
                                                            alt=""
                                                            data-lazy-src="images/project8-720x520.jpg"
                                                        />
                                                        <noscript>
                                                            <img
                                                                decoding="async"
                                                                width="720"
                                                                height="520"
                                                                src="images/project8-720x520.jpg"
                                                                class="attachment-engitech-portfolio-thumbnail-carousel size-engitech-portfolio-thumbnail-carousel wp-post-image"
                                                                alt=""
                                                            />
                                                        </noscript>
                                                        <span class="overlay"></span>
                                                    </a>
                                                </div>
                                                <div class="portfolio-info">
                                                    <div class="portfolio-info-inner">
                                                        <a class="btn-link" href="projects/rightview-logistics"><i class="flaticon-right-arrow-1"></i></a>
                                                        <h5><a href="projects/rightview-logistics">RightView Logistics System</a></h5>
                                                        <p class="portfolio-cates"><a href="capabilities#softwaredevelopment">Software Development</a><span>/</span><a href="capabilities/commercial-software">Commercial Software</a><span>/</span></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="project-item projects-style-2">
                                            <div class="projects-box">
                                                <div class="projects-thumbnail">
                                                    <a href="projects/alafric-website">
                                                        <img
                                                            decoding="async"
                                                            width="720"
                                                            height="520"
                                                            src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20720%20520'%3E%3C/svg%3E"
                                                            class="attachment-engitech-portfolio-thumbnail-carousel size-engitech-portfolio-thumbnail-carousel wp-post-image"
                                                            alt=""
                                                            data-lazy-src="images/project5-720x520.jpg"
                                                        />
                                                        <noscript>
                                                            <img
                                                                decoding="async"
                                                                width="720"
                                                                height="520"
                                                                src="images/project5-720x520.jpg"
                                                                class="attachment-engitech-portfolio-thumbnail-carousel size-engitech-portfolio-thumbnail-carousel wp-post-image"
                                                                alt=""
                                                            />
                                                        </noscript>
                                                        <span class="overlay"></span>
                                                    </a>
                                                </div>
                                                <div class="portfolio-info">
                                                    <div class="portfolio-info-inner">
                                                        <a class="btn-link" href="projects/alafric-website"><i class="flaticon-right-arrow-1"></i></a>
                                                        <h5><a href="projects/alafric-website">Alafric Consulting Website</a></h5>
                                                        <p class="portfolio-cates"><a href="capabilities#brandvisibility">Brand Visibility</a><span>/</span><a href="capabilities/design-development">Web Design</a><span>/</span></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section
                class="elementor-section elementor-top-section elementor-element elementor-element-1cd5b68 ot-traditional elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="1cd5b68"
                data-element_type="section"
                data-settings='{"background_background":"classic"}'
            >
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-cbe9230 ot-flex-column-vertical" data-id="cbe9230" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-f51dec4 elementor-widget elementor-widget-iheading" data-id="f51dec4" data-element_type="widget" data-widget_type="iheading.default">
                                <div class="elementor-widget-container">
                                    <div class="ot-heading">
                                        <h2 class="main-heading">
                                            We know Technology.
											<br/>
											Let's Make It Work For You.
                                        </h2>
                                    </div>
                                </div>
                            </div>
                            <section
                                class="elementor-section elementor-inner-section elementor-element elementor-element-af7edd2 elementor-section-full_width ot-traditional elementor-section-height-default elementor-section-height-default"
                                data-id="af7edd2"
                                data-element_type="section"
                            >
                                <div class="elementor-container elementor-column-gap-extended">
                                    <div class="elementor-column elementor-col-16 elementor-inner-column elementor-element elementor-element-b417c7d ot-flex-column-vertical" data-id="b417c7d" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-5e9ae08 elementor-widget elementor-widget-itechbox" data-id="5e9ae08" data-element_type="widget" data-widget_type="itechbox.default">
                                                <div class="elementor-widget-container">
                                                    <a class="tech-box" href="#" target="_blank">
                                                        <div class="icon-main">
                                                            <span class="flaticon-code-1"></span>
                                                        </div>
                                                        <h5>WEB</h5>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-column elementor-col-16 elementor-inner-column elementor-element elementor-element-0732a3d ot-flex-column-vertical" data-id="0732a3d" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-12b7dc9 elementor-widget elementor-widget-itechbox" data-id="12b7dc9" data-element_type="widget" data-widget_type="itechbox.default">
                                                <div class="elementor-widget-container">
                                                    <a class="tech-box" href="#">
                                                        <div class="icon-main">
                                                            <span class="flaticon-android"></span>
                                                        </div>
                                                        <h5>Android</h5>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-column elementor-col-16 elementor-inner-column elementor-element elementor-element-14aaae0 ot-flex-column-vertical" data-id="14aaae0" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-9abd6b3 elementor-widget elementor-widget-itechbox" data-id="9abd6b3" data-element_type="widget" data-widget_type="itechbox.default">
                                                <div class="elementor-widget-container">
                                                    <a class="tech-box" href="#">
                                                        <div class="icon-main">
                                                            <span class="flaticon-apple"></span>
                                                        </div>
                                                        <h5>IOS</h5>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-column elementor-col-16 elementor-inner-column elementor-element elementor-element-6f5c6bc ot-flex-column-vertical" data-id="6f5c6bc" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-ef02003 elementor-widget elementor-widget-itechbox" data-id="ef02003" data-element_type="widget" data-widget_type="itechbox.default">
                                                <div class="elementor-widget-container">
                                                    <a class="tech-box" href="#">
                                                        <div class="icon-main">
                                                            <span class="flaticon-iot"></span>
                                                        </div>
                                                        <h5>IOT</h5>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-column elementor-col-16 elementor-inner-column elementor-element elementor-element-fa8400f ot-flex-column-vertical" data-id="fa8400f" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-2744146 elementor-widget elementor-widget-itechbox" data-id="2744146" data-element_type="widget" data-widget_type="itechbox.default">
                                                <div class="elementor-widget-container">
                                                    <a class="tech-box" href="#">
                                                        <div class="icon-main">
                                                            <span class="flaticon-time-and-date"></span>
                                                        </div>
                                                        <h5>Wearalables</h5>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-column elementor-col-16 elementor-inner-column elementor-element elementor-element-3bcd13c ot-flex-column-vertical" data-id="3bcd13c" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-5a5d648 elementor-widget elementor-widget-itechbox" data-id="5a5d648" data-element_type="widget" data-widget_type="itechbox.default">
                                                <div class="elementor-widget-container">
                                                    <a class="tech-box" href="#">
                                                        <div class="icon-main">
                                                            <span class="flaticon-tv"></span>
                                                        </div>
                                                        <h5>TV</h5>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </section>

            <section
                class="elementor-section elementor-inner-section elementor-element elementor-element-f8ce257 elementor-section-full_width elementor-section-content-bottom ot-traditional elementor-section-height-default elementor-section-height-default"
                data-id="f8ce257"
                data-element_type="section"
                data-settings='{"background_background":"classic"}'
            >
                <div class="elementor-container elementor-column-gap-no">
                    <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-21c209f ot-flex-column-vertical" data-id="21c209f" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-1213f99 elementor-widget elementor-widget-iheading" data-id="1213f99" data-element_type="widget" data-widget_type="iheading.default">
                                <div class="elementor-widget-container">
                                    <div class="ot-heading">
                                        <span>Like what you see?</span>
                                        <h2 class="main-heading">Let's Build Your Website!</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-0ad2d07 ot-flex-column-vertical" data-id="0ad2d07" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div
                                class="elementor-element elementor-element-2e315e6 elementor-align-right elementor-mobile-align-left elementor-widget elementor-widget-button"
                                data-id="2e315e6"
                                data-element_type="widget"
                                data-widget_type="button.default"
                            >
                                <div class="elementor-widget-container">
                                    <div class="elementor-button-wrapper">
                                        <a class="elementor-button elementor-button-link elementor-size-md" href="contacts/">
                                            <span class="elementor-button-content-wrapper">
                                                <span class="elementor-button-text">contact us</span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <!-- #content -->
</div>
</section>

<!-- #page -->

				<section class="elementor-section elementor-top-section elementor-element elementor-element-eca2f45 elementor-section-full_width elementor-section-stretched elementor-section-height-default elementor-section-height-default sc_fly_static" data-id="eca2f45" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
						<div class="elementor-container elementor-column-gap-extended">
							<div class="elementor-row">
					<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-bb31028 scheme_dark sc_inner_width_none sc_content_align_inherit sc_layouts_column_icons_position_left sc_fly_static" data-id="bb31028" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-c8b8e34 sc_fly_static elementor-widget elementor-widget-spacer" data-id="c8b8e34" data-element_type="widget" data-widget_type="spacer.default">
				<div class="elementor-widget-container">
					<div class="elementor-spacer">
			<div class="elementor-spacer-inner"></div>
		</div>
				</div>
				</div>
				<div class="elementor-element elementor-element-22fef79 sc_height_huge sc_fly_static elementor-widget elementor-widget-spacer" data-id="22fef79" data-element_type="widget" data-widget_type="spacer.default">
				<div class="elementor-widget-container">
					<div class="elementor-spacer">
			<div class="elementor-spacer-inner"></div>
		</div>
				</div>
				</div>
				<div class="elementor-element elementor-element-606cfc7 sc_fly_static elementor-widget elementor-widget-trx_sc_title" data-id="606cfc7" data-element_type="widget" data-widget_type="trx_sc_title.default">
				<div class="elementor-widget-container">
			<div		class="sc_title sc_title_default" ><span class="sc_item_subtitle sc_title_subtitle sc_align_center sc_item_subtitle_above sc_item_title_style_default">Testimonials</span><h1 class="sc_item_title sc_title_title sc_align_center sc_item_title_style_default sc_item_title_tag"
			><span class="sc_item_title_text">What Happy Clients Say</span></h1></div>		</div>
				</div>
				<div class="elementor-element elementor-element-4f23cfd sc_height_small sc_fly_static elementor-widget elementor-widget-spacer" data-id="4f23cfd" data-element_type="widget" data-widget_type="spacer.default">
				<div class="elementor-widget-container">
					<div class="elementor-spacer">
			<div class="elementor-spacer-inner"></div>
		</div>
				</div>
				</div>
				<div class="elementor-element elementor-element-7b68d7c sc_fly_static elementor-widget elementor-widget-trx_sc_testimonials" data-id="7b68d7c" data-element_type="widget" data-widget_type="trx_sc_testimonials.default">
				<div class="elementor-widget-container">
			<div 		class="sc_testimonials sc_testimonials_simple"><div  class="sc_testimonials_slider sc_item_slider slider_swiper_outer slider_outer slider_outer_nocontrols slider_outer_pagination slider_outer_pagination_bullets slider_outer_pagination_pos_bottom_outside slider_outer_nocentered slider_outer_overflow_hidden slider_outer_one">
	<div  data-slides-per-view-breakpoints="{&quot;999999&quot;:1}" class="slider_container swiper-slider-container slider_swiper slider_noresize slider_nocontrols slider_pagination slider_pagination_bullets slider_pagination_pos_bottom_outside slider_nocentered slider_overflow_hidden slider_one" data-effect="slide" data-slides-min-width="290" data-pagination="bullets" data-direction="horizontal" data-mouse-wheel="0" data-autoplay="1" data-loop="1" data-free-mode="0" data-slides-centered="0" data-slides-overflow="0">
		<div class="slides slider-wrapper swiper-wrapper sc_item_columns_1"><div class="slider-slide swiper-slide"><div data-post-id="498" class="sc_testimonials_item sc_item_container post_container">
	<div class="sc_testimonials_item_content"><p>RightSolve focuses on providing the right solutions for their clients, rather than trying to sell them more than they need. They demonstrate a genuine understanding of our organization and customize their offerings to address our specific requirements.</p>
</div>
	<div class="sc_testimonials_item_author">
		<div class="sc_testimonials_item_author_data">
							<div class="sc_testimonials_item_author_avatar"><img loading="lazy" decoding="async" width="120" height="120" src="wp-content/uploads/2022/08/new-clients-2-copyright.png" class="attachment-n7-golf-club-thumb-tiny size-n7-golf-club-thumb-tiny wp-post-image" alt="James Lee" srcset="wp-content/uploads/2022/08/new-clients-2-copyright.png" /></div>
						<h4 class="sc_testimonials_item_author_title">Temple B. Chukwudike</h4>
			<div class="sc_testimonials_item_author_subtitle">Benchuks Media Hub </div>		</div>
	</div>
</div>
</div><div class="slider-slide swiper-slide"><div data-post-id="497" class="sc_testimonials_item sc_item_container post_container">
	<div class="sc_testimonials_item_content"><p>"Unlike some providers who simply quote a standard package and install it, RightSolve goes the extra mile. They actively work to ensure that the solution they recommend aligns with our true requirements, rather than just delivering what we initially requested."</p>
</div>
	<div class="sc_testimonials_item_author">
		<div class="sc_testimonials_item_author_data">
							<div class="sc_testimonials_item_author_avatar"><img loading="lazy" decoding="async" width="120" height="120" src="images/rentpadi_logo.png" class="attachment-n7-golf-club-thumb-tiny size-n7-golf-club-thumb-tiny wp-post-image" alt="George Gordon" srcset="images/rentpadi_logo.png" /></div>
						<h4 class="sc_testimonials_item_author_title">Celebrity Chiagoziem</h4>
			<div class="sc_testimonials_item_author_subtitle">Rentpadi Realtors</div>		</div>
	</div>
</div>
</div><div class="slider-slide swiper-slide"><div data-post-id="488" class="sc_testimonials_item sc_item_container post_container">
	<div class="sc_testimonials_item_content"><p>"RightSolve is consistently reliable - they never make exaggerated claims that they can't back up, and they always strive to surpass the expectations they set. You can count on them to deliver on their promises without any unpleasant surprises."</p>
</div>
	<div class="sc_testimonials_item_author">
		<div class="sc_testimonials_item_author_data">
							<div class="sc_testimonials_item_author_avatar"><img loading="lazy" decoding="async" width="120" height="120" src="images/busybrains_logo.png" class="attachment-n7-golf-club-thumb-tiny size-n7-golf-club-thumb-tiny wp-post-image" alt="Linda Moore" srcset="images/busybrains_logo.png" /></div>
						<h4 class="sc_testimonials_item_author_title">Sammie Agbo</h4>
			<div class="sc_testimonials_item_author_subtitle">BusyBrains Consultancy </div>		</div>
	</div>
</div>
</div></div></div><div class="slider_pagination_wrap swiper-pagination"></div></div></div><!-- /.sc_testimonials -->		</div>
				</div>
				<div class="elementor-element elementor-element-6145b94 sc_height_huge sc_fly_static elementor-widget elementor-widget-spacer" data-id="6145b94" data-element_type="widget" data-widget_type="spacer.default">
				<div class="elementor-widget-container">
					<div class="elementor-spacer">
			<div class="elementor-spacer-inner"></div>
		</div>
				</div>
				</div>
						</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-63da9e5 sc_inner_width_none sc_content_align_inherit sc_layouts_column_icons_position_left sc_fly_static" data-id="63da9e5" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
			<div class="elementor-column-wrap elementor-element-populated">
					</div>
		</div>
								</div>
					</div>
		</section>
		<section
		class="elementor-section elementor-top-section elementor-element elementor-element-8d77a64 elementor-section-boxed elementor-section-height-default elementor-section-height-default sc_fly_static"
		data-id="8d77a64"
		data-element_type="section"
	>
		<div class="elementor-container elementor-column-gap-default">
			<div class="elementor-row">
				<div
					class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-e73df66 sc_inner_width_none sc_content_align_inherit sc_layouts_column_icons_position_left sc_fly_static"
					data-id="e73df66"
					data-element_type="column"
				>
					<div class="elementor-column-wrap elementor-element-populated">
						<div class="elementor-widget-wrap">
							<div class="elementor-element elementor-element-41ab255 sc_height_medium sc_fly_static elementor-widget elementor-widget-spacer" data-id="41ab255" data-element_type="widget" data-widget_type="spacer.default">
								<div class="elementor-widget-container">
									<div class="elementor-spacer">
										<div class="elementor-spacer-inner"></div>
									</div>
								</div>
							</div>
							<div class="elementor-element elementor-element-b75ad5b sc_fly_static elementor-widget elementor-widget-trx_widget_slider" data-id="b75ad5b" data-element_type="widget" data-widget_type="trx_widget_slider.default">
								<div class="elementor-widget-container">
									<div class="widget_area sc_widget_slider">
										<aside class="widget widget_slider">
											<div class="slider_wrap slider_engine_swiper">
												<div
													class="slider_outer slider_swiper_outer slider_style_default slider_source_custom slider_outer_direction_horizontal slider_outer_multi slider_outer_nopagination slider_outer_nocontrols slider_outer_nocentered slider_outer_overflow_hidden slider_outer_titles_center slider_outer_height_auto"
												>
													<div
														class="slider_container slider_swiper swiper-slider-container slider_direction_horizontal slider_nopagination slider_multi slider_type_images slider_nocontrols slider_nocentered slider_overflow_hidden slider_titles_center slider_resize slider_swipe slider_height_auto"
														data-ratio="10:4"
														data-interval="7000"
														data-speed="600"
														data-effect="slide"
														data-pagination="bullets"
														data-direction="horizontal"
														data-slides-per-view="5"
														data-slides-space="0"
														data-slides-parallax="0"
														data-slides-centered="0"
														data-slides-overflow="0"
														data-mouse-wheel="0"
														data-autoplay="1"
														data-loop="1"
														data-free-mode="0"
														data-slides-min-width="220"
													>
														<div class="slider-wrapper swiper-wrapper">
															<div class="slider-slide swiper-slide" data-image="wp-content/uploads/2022/08/new-clients-1-copyright.png">
																<img decoding="async" src="wp-content/uploads/2022/08/new-clients-1-copyright.png" alt="" />
															</div>
															<div class="slider-slide swiper-slide" data-image="wp-content/uploads/2022/08/new-clients-2-copyright.png">
																<img decoding="async" src="wp-content/uploads/2022/08/new-clients-2-copyright.png" alt="" />
															</div>
															<div class="slider-slide swiper-slide" data-image="wp-content/uploads/2022/08/new-clients-3-copyright.png">
																<img decoding="async" src="wp-content/uploads/2022/08/new-clients-3-copyright.png" alt="" />
															</div>
															<div class="slider-slide swiper-slide" data-image="wp-content/uploads/2022/08/new-clients-4-copyright.png">
																<img decoding="async" src="wp-content/uploads/2022/08/new-clients-4-copyright.png" alt="" />
															</div>
															<div class="slider-slide swiper-slide" data-image="wp-content/uploads/2022/08/new-clients-5-copyright.png">
																<img decoding="async" src="wp-content/uploads/2022/08/new-clients-5-copyright.png" alt="" />
															</div>
															<div class="slider-slide swiper-slide" data-image="wp-content/uploads/2022/08/new-clients-6-copyright.png">
																<img decoding="async" src="wp-content/uploads/2022/08/new-clients-6-copyright.png" alt="" />
															</div>
														</div>
													</div>
												</div>
											</div>
										</aside>
									</div>
								</div>
							</div>
							<div class="elementor-element elementor-element-603eb8f sc_height_medium sc_fly_static elementor-widget elementor-widget-spacer" data-id="603eb8f" data-element_type="widget" data-widget_type="spacer.default">
								<div class="elementor-widget-container">
									<div class="elementor-spacer">
										<div class="elementor-spacer-inner"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

<section
    class="elementor-section elementor-top-section elementor-element elementor-element-619637d elementor-section-boxed elementor-section-height-default elementor-section-height-default sc_fly_static"
    data-id="619637d"
    data-element_type="section"
>
    <div class="elementor-container elementor-column-gap-extended">
        <div class="elementor-row">
            <div
                class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-0d4d69f sc_inner_width_none sc_content_align_inherit sc_layouts_column_icons_position_left sc_fly_static"
                data-id="0d4d69f"
                data-element_type="column"
            >
                <div class="elementor-column-wrap elementor-element-populated">
                    <div class="elementor-widget-wrap">
                        <div class="elementor-element elementor-element-3445215 sc_fly_static elementor-widget elementor-widget-trx_sc_title" data-id="3445215" data-element_type="widget" data-widget_type="trx_sc_title.default">
                            <div class="elementor-widget-container">
                                <div class="sc_title color_style_link2 sc_title_default">
                                    <span class="sc_item_subtitle sc_title_subtitle sc_align_center sc_item_subtitle_above sc_item_title_style_default">Our Blog</span>
                                    <h1 class="sc_item_title sc_title_title sc_align_center sc_item_title_style_default sc_item_title_tag"><span class="sc_item_title_text">Latest Articles & Tips</span></h1>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-e1d021f sc_height_small sc_fly_static elementor-widget elementor-widget-spacer" data-id="e1d021f" data-element_type="widget" data-widget_type="spacer.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-spacer">
                                    <div class="elementor-spacer-inner"></div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="elementor-element elementor-element-0e49f98 animation_type_sequental sc_style_default sc_fly_static elementor-invisible elementor-widget elementor-widget-trx_sc_blogger"
                            data-id="0e49f98"
                            data-element_type="widget"
                            data-settings='{"_animation":"n7-golf-club-fadeinup","_animation_delay":100}'
                            data-widget_type="trx_sc_blogger.default"
                        >
                            <div class="elementor-widget-container">
                                <div class="sc_blogger sc_blogger_portfolio sc_blogger_portfolio_default sc_item_filters_tabs_none alignnone">
                                    <div class="sc_blogger_content sc_item_content sc_item_posts_container posts_container portfolio_wrap portfolio_3 columns_wrap columns_padding_bottom columns_in_single_row">
                                        <div class="column-1_3">
                                            <article
                                                id="post-292"
                                                class="post_item post_item_container post_format_standard post_layout_portfolio post_layout_portfolio_3 post-292 post type-post status-publish format-standard has-post-thumbnail hentry category-essentials tag-featured tag-golfers"
                                            >
                                                <div class="post_featured with_thumb hover_info post_featured_bg" data-ratio="100:102">
                                                    <span class="post_thumb post_thumb_bg bg_in n7_golf_club_inline_627885254"></span>
                                                    <div class="mask"></div>
                                                    <div class="post_info">
                                                        <div class="post_descr">
                                                            <div class="post_meta">
                                                                <span class="post_meta_item post_categories cat_sep"><a href="https://rightsolvesys.com/blog/category/cybersecurity" rel="category tag">Cybersecurity</a></span>
                                                                <span class="post_meta_item post_date"><a href="https://rightsolvesys.com/blog/safeguarding-your-digital-world-the-importance-of-good-cyber-hygiene/">Nov 18, 2024</a></span>
                                                            </div>
                                                        </div>
                                                        <h4 class="post_title">
                                                            <a href="https://rightsolvesys.com/blog/safeguarding-your-digital-world-the-importance-of-good-cyber-hygiene/" target="_blank">
                                                                Safeguarding Your Digital World: The Importance of Good Cyber Hygiene
                                                            </a>
                                                            <span class="hover-arrow"></span>
                                                        </h4>
                                                        <a class="post_link" href="https://rightsolvesys.com/blog/safeguarding-your-digital-world-the-importance-of-good-cyber-hygiene/" target="_blank"></a>
                                                    </div>
                                                </div>
                                            </article>
                                        </div>
                                        <div class="column-1_3">
                                            <article
                                                id="post-298"
                                                class="post_item post_item_container post_format_standard post_layout_portfolio post_layout_portfolio_3 post-298 post type-post status-publish format-standard has-post-thumbnail hentry category-essentials tag-bag tag-featured tag-game tag-rules"
                                            >
                                                <div class="post_featured with_thumb hover_info post_featured_bg" data-ratio="100:102">
                                                    <span class="post_thumb post_thumb_bg bg_in n7_golf_club_inline_346020728"></span>
                                                    <div class="mask"></div>
                                                    <div class="post_info">
                                                        <div class="post_descr">
                                                            <div class="post_meta">
                                                                <span class="post_meta_item post_categories cat_sep"><a href="https://rightsolvesys.com/blog/category/productivity/" rel="category tag" target="_blank">Productivity</a></span>
                                                                <span class="post_meta_item post_date"><a href="https://rightsolvesys.com/blog/finding-the-perfect-device-a-guide-to-choosing-for-personal-and-business-use/" target="_blank">Nov 18, 2024</a></span>
                                                            </div>
                                                        </div>
                                                        <h4 class="post_title">
                                                            <a href="https://rightsolvesys.com/blog/finding-the-perfect-device-a-guide-to-choosing-for-personal-and-business-use/" target="_blank"> 
																Finding the Perfect Device: A Guide to Choosing for Personal and Business Use 
															</a>
                                                            <span class="hover-arrow"></span>
                                                        </h4>
                                                        <a class="post_link" href="https://rightsolvesys.com/blog/finding-the-perfect-device-a-guide-to-choosing-for-personal-and-business-use/" target="_blank"></a>
                                                    </div>
                                                </div>
                                            </article>
                                        </div>
                                        <div class="column-1_3">
                                            <article
                                                id="post-2599"
                                                class="post_item post_item_container post_format_standard post_layout_portfolio post_layout_portfolio_3 post-2599 post type-post status-publish format-standard has-post-thumbnail hentry category-essentials tag-featured tag-game tag-golf-hacks tag-round"
                                            >
                                                <div class="post_featured with_thumb hover_info post_featured_bg" data-ratio="100:102">
                                                    <span class="post_thumb post_thumb_bg bg_in n7_golf_club_inline_624936568"></span>
                                                    <div class="mask"></div>
                                                    <div class="post_info">
                                                        <div class="post_descr">
                                                            <div class="post_meta">
                                                                <span class="post_meta_item post_categories cat_sep"><a href="https://rightsolvesys.com/blog/category/specials/" rel="category tag" target="_blank">Special Features</a></span>
                                                                <span class="post_meta_item post_date"><a href="https://rightsolvesys.com/blog/boosting-brand-visibility-strategies-for-businesses-to-shine-online-in-2024/" target="_blank">Mar 27, 2024</a></span>
                                                            </div>
                                                        </div>
                                                        <h4 class="post_title">
                                                            <a href="https://rightsolvesys.com/blog/boosting-brand-visibility-strategies-for-businesses-to-shine-online-in-2024/" target="_blank"> 
																Boosting Brand Visibility: Strategies for Businesses to Shine Online
															</a>
                                                            <span class="hover-arrow"></span>
                                                        </h4>
                                                        <a class="post_link" href="https://rightsolvesys.com/blog/boosting-brand-visibility-strategies-for-businesses-to-shine-online-in-2024/" target="_blank"></a>
                                                    </div>
                                                </div>
                                            </article>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-a79a36a sc_fly_static elementor-widget elementor-widget-spacer" data-id="a79a36a" data-element_type="widget" data-widget_type="spacer.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-spacer">
                                    <div class="elementor-spacer-inner"></div>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-2c3194c sc_fly_static elementor-widget elementor-widget-trx_sc_button" data-id="2c3194c" data-element_type="widget" data-widget_type="trx_sc_button.default">
                            <div class="elementor-widget-container">
                                <div class="sc_item_button sc_button_wrap sc_align_center">
                                    <a href="blog" target="_blank" class="sc_button sc_button_default sc_button_size_normal sc_button_icon_left">
                                        <span class="sc_button_text"><span class="sc_button_title">View More Articles</span></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-f934fa6 sc_height_huge sc_fly_static elementor-widget elementor-widget-spacer" data-id="f934fa6" data-element_type="widget" data-widget_type="spacer.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-spacer">
                                    <div class="elementor-spacer-inner"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section
    class="elementor-section elementor-top-section elementor-element elementor-element-d434355 elementor-section-full_width elementor-section-content-middle elementor-section-stretched scheme_light elementor-section-height-default elementor-section-height-default sc_fly_static"
    data-id="d434355"
    data-element_type="section"
    data-settings='{"stretch_section":"section-stretched"}'
>
    <div class="elementor-container elementor-column-gap-no">
        <div class="elementor-row">
            <div
                class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-f4ba30e sc_inner_width_none sc_content_align_inherit sc_layouts_column_icons_position_left sc_fly_static"
                data-id="f4ba30e"
                data-element_type="column"
            >
                <div class="elementor-column-wrap elementor-element-populated">
                    <div class="elementor-widget-wrap">
                        <div class="elementor-element elementor-element-7f2562b sc_fly_static elementor-widget elementor-widget-trx_sc_googlemap" data-id="7f2562b" data-element_type="widget" data-widget_type="trx_sc_googlemap.default">
                            <div class="elementor-widget-container">
                                <div id="sc_googlemap_802469857_wrap" class="sc_googlemap_wrap">
                                    <div id="sc_googlemap_802469857" class="sc_item_content sc_map sc_googlemap sc_googlemap_default trx_addons_inline_1096377498" data-zoom="12" data-center="" data-style="extra" data-cluster-icon="">
                                        <iframe src="https://maps.google.com/maps?t=m&amp;output=embed&amp;iwloc=near&amp;z=12&amp;q=6.45763%2C7.51007" aria-label="One"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div
                class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-3363377 sc_inner_width_none sc_content_align_inherit sc_layouts_column_icons_position_left sc_fly_static"
                data-id="3363377"
                data-element_type="column"
                data-settings='{"background_background":"classic"}'
            >
                <div class="elementor-column-wrap elementor-element-populated">
                    <div class="elementor-widget-wrap">
                        <div
                            class="elementor-element elementor-element-2175bad sc_height_huge sc_layouts_hide_on_wide sc_layouts_hide_on_desktop sc_fly_static elementor-widget elementor-widget-spacer"
                            data-id="2175bad"
                            data-element_type="widget"
                            data-widget_type="spacer.default"
                        >
                            <div class="elementor-widget-container">
                                <div class="elementor-spacer">
                                    <div class="elementor-spacer-inner"></div>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-1b13b01 sc_fly_static elementor-widget elementor-widget-trx_sc_title" data-id="1b13b01" data-element_type="widget" data-widget_type="trx_sc_title.default">
                            <div class="elementor-widget-container">
                                <div class="sc_title color_style_link2 sc_title_default">
                                    <span class="sc_item_subtitle sc_title_subtitle sc_item_subtitle_above sc_item_title_style_default">Contact Us</span>
                                    <h1 class="sc_item_title sc_title_title sc_item_title_style_default sc_item_title_tag">
                                        <span class="sc_item_title_text">
                                            Any Questions? <br />
                                            Get in Touch!
                                        </span>
                                    </h1>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-b11ba31 sc_fly_static elementor-widget elementor-widget-spacer" data-id="b11ba31" data-element_type="widget" data-widget_type="spacer.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-spacer">
                                    <div class="elementor-spacer-inner"></div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="elementor-element elementor-element-375bf93 sc_fly_static elementor-widget elementor-widget-trx_sc_contact_form_7"
                            data-id="375bf93"
                            data-element_type="widget"
                            data-widget_type="trx_sc_contact_form_7.default"
                        >
                            <div class="elementor-widget-container">
                                <div role="form" class="wpcf7" id="wpcf7-f1266-p18349-o1" lang="en-US" dir="ltr">
                                    <div class="screen-reader-response">
                                        <p role="status" aria-live="polite" aria-atomic="true"></p>
                                        <ul></ul>
                                    </div>
                                    <form action="" method="post" class="wpcf7-form init" novalidate="novalidate" data-status="init">
                                        <div style="display: none;">
                                            <input type="hidden" name="_wpcf7" value="1266" />
                                            <input type="hidden" name="_wpcf7_version" value="5.6.2" />
                                            <input type="hidden" name="_wpcf7_locale" value="en_US" />
                                            <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f1266-p18349-o1" />
                                            <input type="hidden" name="_wpcf7_container_post" value="18349" />
                                            <input type="hidden" name="_wpcf7_posted_data_hash" value="" />
                                        </div>
                                        <div class="form-style-2">
                                            <div class="columns_wrap">
                                                <div class="column-1_2">
                                                    <span class="style-line">
                                                        <span class="wpcf7-form-control-wrap" data-name="firstName">
                                                            <input
                                                                type="text"
                                                                name="firstName"
                                                                value=""
                                                                size="40"
                                                                class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                                aria-required="true"
                                                                aria-invalid="false"
                                                                placeholder="First Name"
                                                            />
                                                        </span>
                                                    </span>
                                                </div>
                                                <div class="column-1_2">
                                                    <span class="style-line">
                                                        <span class="wpcf7-form-control-wrap" data-name="lastName">
                                                            <input
                                                                type="text"
                                                                name="lastName"
                                                                value=""
                                                                size="40"
                                                                class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                                aria-required="true"
                                                                aria-invalid="false"
                                                                placeholder="Last Name"
                                                            />
                                                        </span>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="columns_wrap">
                                                <div class="column-1_2">
                                                    <span class="style-line">
                                                        <span class="wpcf7-form-control-wrap" data-name="inputEmail">
                                                            <input
                                                                type="email"
                                                                name="inputEmail"
                                                                value=""
                                                                size="40"
                                                                class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email"
                                                                aria-required="true"
                                                                aria-invalid="false"
                                                                placeholder="Email"
                                                            />
                                                        </span>
                                                    </span>
                                                </div>
                                                <div class="column-1_2">
                                                    <span class="style-line">
                                                        <span class="wpcf7-form-control-wrap" data-name="phone">
                                                            <input
                                                                type="tel"
                                                                name="phone"
                                                                value=""
                                                                size="40"
                                                                class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel"
                                                                aria-required="true"
                                                                aria-invalid="false"
                                                                placeholder="Phone"
                                                            />
                                                        </span>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="columns_wrap margin-bottom">
                                                <div class="column-1_1">
                                                    <span class="style-line">
                                                        <span class="wpcf7-form-control-wrap" data-name="msgTextarea">
                                                            <textarea
                                                                name="msgTextarea"
                                                                cols="40"
                                                                rows="10"
                                                                class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required"
                                                                aria-required="true"
                                                                aria-invalid="false"
                                                                placeholder="Message"
                                                            ></textarea>
                                                        </span>
                                                    </span>
                                                </div>
                                            </div>
                                            <p><input type="submit" value="Get In Touch" class="wpcf7-form-control wpcf7-submit" /></p>
                                        </div>
                                        <div class="wpcf7-response-output" aria-hidden="true"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div
                            class="elementor-element elementor-element-5b516db sc_height_huge sc_layouts_hide_on_wide sc_layouts_hide_on_desktop sc_fly_static elementor-widget elementor-widget-spacer"
                            data-id="5b516db"
                            data-element_type="widget"
                            data-widget_type="spacer.default"
                        >
                            <div class="elementor-widget-container">
                                <div class="elementor-spacer">
                                    <div class="elementor-spacer-inner"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</div>
</div>
</div>
</div><!-- .entry-content -->

	
</article>
						</div>
											</div>
								</div>
							<a id="footer_skip_link_anchor" class="n7_golf_club_skip_link_anchor" href="#"></a>
				<footer class="footer_wrap footer_custom footer_custom_17907 footer_custom_footer-style-3						 scheme_dark						">
			<div data-elementor-type="cpt_layouts" data-elementor-id="17907" class="elementor elementor-17907">
						<div class="elementor-inner">
				<div class="elementor-section-wrap">
									<section class="elementor-section elementor-top-section elementor-element elementor-element-50306a3 scheme_dark elementor-section-boxed elementor-section-height-default elementor-section-height-default sc_fly_static" data-id="50306a3" data-element_type="section">
						<div class="elementor-container elementor-column-gap-extended">
							<div class="elementor-row">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-7ce1647 sc_inner_width_none sc_content_align_inherit sc_layouts_column_icons_position_left sc_fly_static" data-id="7ce1647" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="sc_layouts_item elementor-element elementor-element-3002112 sc_fly_static elementor-widget elementor-widget-spacer" data-id="3002112" data-element_type="widget" data-widget_type="spacer.default">
				<div class="elementor-widget-container">
					<div class="elementor-spacer">
			<div class="elementor-spacer-inner"></div>
		</div>
				</div>
				</div>
						</div>
					</div>
		</div>
								</div>
					</div>
		</section>

<section
    class="elementor-section elementor-top-section elementor-element elementor-element-e66f2b0 scheme_dark elementor-section-boxed elementor-section-height-default elementor-section-height-default sc_fly_static"
    data-id="e66f2b0"
    data-element_type="section"
>
    <div class="elementor-container elementor-column-gap-extended">
        <div class="elementor-row">
            <div
                class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-47c11eb sc_inner_width_none sc_content_align_inherit sc_layouts_column_icons_position_left sc_fly_static"
                data-id="47c11eb"
                data-element_type="column"
            >
                <div class="elementor-column-wrap elementor-element-populated">
                    <div class="elementor-widget-wrap">
                        <div
                            class="sc_layouts_item elementor-element elementor-element-678227b sc_fly_static elementor-widget elementor-widget-trx_sc_layouts_logo"
                            data-id="678227b"
                            data-element_type="widget"
                            data-widget_type="trx_sc_layouts_logo.default"
                        >
                            <div class="elementor-widget-container">
                                <a href="#" class="sc_layouts_logo sc_layouts_logo_default trx_addons_inline_1795885851">
                                    <img class="logo_image" src="wp-content/uploads/2022/06/logo-white.png" srcset="wp-content/uploads/2022/06/logo-white-retina.png 2x" alt="RightSolve Systems" width="84" height="84" />
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div
                class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-0f1ba52 sc_inner_width_none sc_content_align_inherit sc_layouts_column_icons_position_left sc_fly_static"
                data-id="0f1ba52"
                data-element_type="column"
            >
                <div class="elementor-column-wrap elementor-element-populated">
                    <div class="elementor-widget-wrap">
                        <div
                            class="sc_layouts_item elementor-element elementor-element-893d886 sc_fly_static elementor-widget elementor-widget-trx_sc_title"
                            data-id="893d886"
                            data-element_type="widget"
                            data-widget_type="trx_sc_title.default"
                        >
                            <div class="elementor-widget-container">
                                <div class="sc_title sc_title_default">
                                    <h6 class="sc_item_title sc_title_title sc_item_title_style_default sc_item_title_tag"><span class="sc_item_title_text">Office</span></h6>
                                </div>
                            </div>
                        </div>
                        <div class="sc_layouts_item elementor-element elementor-element-e27d59a sc_fly_static elementor-widget elementor-widget-spacer" data-id="e27d59a" data-element_type="widget" data-widget_type="spacer.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-spacer">
                                    <div class="elementor-spacer-inner"></div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="sc_layouts_item elementor-element elementor-element-16616f9 sc_fly_static elementor-widget elementor-widget-text-editor"
                            data-id="16616f9"
                            data-element_type="widget"
                            data-widget_type="text-editor.default"
                        >
                            <div class="elementor-widget-container">
                                <div class="elementor-text-editor elementor-clearfix">
                                    <p>
                                        Enugu, Nigeria —<br />
                                        1A, Chime Avenue, New Haven<br />
                                        Enugu 400102
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="sc_layouts_item elementor-element elementor-element-e6d4252 sc_fly_static elementor-widget elementor-widget-spacer" data-id="e6d4252" data-element_type="widget" data-widget_type="spacer.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-spacer">
                                    <div class="elementor-spacer-inner"></div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="sc_layouts_item elementor-element elementor-element-d7a179e sc_fly_static elementor-widget elementor-widget-text-editor"
                            data-id="d7a179e"
                            data-element_type="widget"
                            data-widget_type="text-editor.default"
                        >
                            <div class="elementor-widget-container">
                                <div class="elementor-text-editor elementor-clearfix">
                                    <p><a class="underline_anim" href="mailto:engage@rightsolvesys.com">engage@rightsolvesys.com</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="sc_layouts_item elementor-element elementor-element-9ace7eb sc_fly_static elementor-widget elementor-widget-spacer" data-id="9ace7eb" data-element_type="widget" data-widget_type="spacer.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-spacer">
                                    <div class="elementor-spacer-inner"></div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="sc_layouts_item elementor-element elementor-element-d696a0a sc_fly_static elementor-widget elementor-widget-text-editor"
                            data-id="d696a0a"
                            data-element_type="widget"
                            data-widget_type="text-editor.default"
                        >
                            <div class="elementor-widget-container">
                                <div class="elementor-text-editor elementor-clearfix">
                                    <p>
                                        <span class="trx_addons_alter_text"><a href="tel:+2347075511670">+234 707 551 1670</a></span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div
                class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-887c61b sc_inner_width_none sc_content_align_inherit sc_layouts_column_icons_position_left sc_fly_static"
                data-id="887c61b"
                data-element_type="column"
            >
                <div class="elementor-column-wrap elementor-element-populated">
                    <div class="elementor-widget-wrap">
                        <div
                            class="sc_layouts_item elementor-element elementor-element-01fb277 sc_fly_static elementor-widget elementor-widget-trx_sc_title"
                            data-id="01fb277"
                            data-element_type="widget"
                            data-widget_type="trx_sc_title.default"
                        >
                            <div class="elementor-widget-container">
                                <div class="sc_title sc_title_default">
                                    <h6 class="sc_item_title sc_title_title sc_item_title_style_default sc_item_title_tag"><span class="sc_item_title_text">Links</span></h6>
                                </div>
                            </div>
                        </div>
                        <div class="sc_layouts_item elementor-element elementor-element-3407239 sc_fly_static elementor-widget elementor-widget-spacer" data-id="3407239" data-element_type="widget" data-widget_type="spacer.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-spacer">
                                    <div class="elementor-spacer-inner"></div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="sc_layouts_item elementor-element elementor-element-1551b16 sc_fly_static elementor-widget elementor-widget-trx_widget_custom_links"
                            data-id="1551b16"
                            data-element_type="widget"
                            data-widget_type="trx_widget_custom_links.default"
                        >
                            <div class="elementor-widget-container">
                                <div class="widget_area sc_widget_custom_links">
                                    <aside class="widget widget_custom_links">
                                        <ul class="custom_links_list">
                                            <li class="custom_links_list_item">
                                                <a class="custom_links_list_item_link" href="./"><span class="custom_links_list_item_title">Home</span></a>
                                            </li>
                                            <li class="custom_links_list_item">
                                                <a class="custom_links_list_item_link" href="about"><span class="custom_links_list_item_title">Who We Are</span></a>
                                            </li>
                                            <li class="custom_links_list_item">
                                                <a class="custom_links_list_item_link" href="capabilities"><span class="custom_links_list_item_title">Capabilities</span></a>
                                            </li>
                                            <li class="custom_links_list_item">
                                                <a class="custom_links_list_item_link" href="projects"><span class="custom_links_list_item_title">Projects</span></a>
                                            </li>
                                            <li class="custom_links_list_item">
                                                <a class="custom_links_list_item_link" href="contacts"><span class="custom_links_list_item_title">Contacts</span></a>
                                            </li>
                                            <li class="custom_links_list_item">
                                                <a class="custom_links_list_item_link" href="blog" target="_blank"><span class="custom_links_list_item_title">Blog</span></a>
                                            </li>
                                        </ul>
                                    </aside>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div
                class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-a503a79 sc_inner_width_none sc_content_align_inherit sc_layouts_column_icons_position_left sc_fly_static"
                data-id="a503a79"
                data-element_type="column"
            >
                <div class="elementor-column-wrap elementor-element-populated">
                    <div class="elementor-widget-wrap">
                        <div
                            class="sc_layouts_item elementor-element elementor-element-cbf8c68 sc_fly_static elementor-widget elementor-widget-trx_sc_title"
                            data-id="cbf8c68"
                            data-element_type="widget"
                            data-widget_type="trx_sc_title.default"
                        >
                            <div class="elementor-widget-container">
                                <div class="sc_title sc_title_default">
                                    <h6 class="sc_item_title sc_title_title sc_item_title_style_default sc_item_title_tag"><span class="sc_item_title_text">Newsletter</span></h6>
                                </div>
                            </div>
                        </div>
                        <div class="sc_layouts_item elementor-element elementor-element-8172a0c sc_fly_static elementor-widget elementor-widget-shortcode" data-id="8172a0c" data-element_type="widget" data-widget_type="shortcode.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-shortcode">
                                    <script>
                                        (function () {
                                            window.mc4wp = window.mc4wp || {
                                                listeners: [],
                                                forms: {
                                                    on: function (evt, cb) {
                                                        window.mc4wp.listeners.push({
                                                            event: evt,
                                                            callback: cb,
                                                        });
                                                    },
                                                },
                                            };
                                        })();
                                    </script>
                                    <!-- Mailchimp for WordPress v4.8.7 - https://wordpress.org/plugins/mailchimp-for-wp/ -->
                                    <form id="style-9" class="mc4wp-form mc4wp-form-461" method="post" data-id="461" data-name="Subscribe">
                                        <div class="mc4wp-form-fields">
                                            <input type="email" name="EMAIL" placeholder="Enter Your Email Address" />
                                            <button>Subscribe</button>
                                            <input name="i_agree_privacy_policy" value="1" required="" type="checkbox" /><label>I agree to the <a href="privacy-policy" target="_blank">Privacy Policy</a>.</label>
                                        </div>
                                        <label style="display: none !important;">Leave this field empty if you're human: <input type="text" name="_mc4wp_honeypot" value="" tabindex="-1" autocomplete="off" /></label>
                                        <input type="hidden" name="_mc4wp_timestamp" value="1708385120" /><input type="hidden" name="_mc4wp_form_id" value="461" /><input type="hidden" name="_mc4wp_form_element_id" value="style-9" />
                                        <div class="mc4wp-response"></div>
                                    </form>
                                    <!-- / Mailchimp for WordPress Plugin -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section
    class="elementor-section elementor-top-section elementor-element elementor-element-95fe85a scheme_dark elementor-section-boxed elementor-section-height-default elementor-section-height-default sc_fly_static"
    data-id="95fe85a"
    data-element_type="section"
>
    <div class="elementor-container elementor-column-gap-extended">
        <div class="elementor-row">
            <div
                class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-03f9183 sc_inner_width_none sc_content_align_inherit sc_layouts_column_icons_position_left sc_fly_static"
                data-id="03f9183"
                data-element_type="column"
            >
                <div class="elementor-column-wrap elementor-element-populated">
                    <div class="elementor-widget-wrap">
                        <div class="sc_layouts_item elementor-element elementor-element-5d59745 sc_fly_static elementor-widget elementor-widget-spacer" data-id="5d59745" data-element_type="widget" data-widget_type="spacer.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-spacer">
                                    <div class="elementor-spacer-inner"></div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="sc_layouts_item elementor-element elementor-element-6e5f57b elementor-widget-divider--view-line sc_fly_static elementor-widget elementor-widget-divider"
                            data-id="6e5f57b"
                            data-element_type="widget"
                            data-widget_type="divider.default"
                        >
                            <div class="elementor-widget-container">
                                <div class="elementor-divider">
                                    <span class="elementor-divider-separator"> </span>
                                </div>
                            </div>
                        </div>
                        <div class="sc_layouts_item elementor-element elementor-element-eae54d0 sc_fly_static elementor-widget elementor-widget-spacer" data-id="eae54d0" data-element_type="widget" data-widget_type="spacer.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-spacer">
                                    <div class="elementor-spacer-inner"></div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="sc_layouts_item elementor-element elementor-element-35a3124 sc_fly_static elementor-widget elementor-widget-text-editor"
                            data-id="35a3124"
                            data-element_type="widget"
                            data-widget_type="text-editor.default"
                        >
                            <div class="elementor-widget-container">
                                <div class="elementor-text-editor elementor-clearfix"><a href="./" target="_blank" rel="noopener">RightSolve Systems Limited </a> © 2024. All Rights Reserved.</div>
                            </div>
                        </div>
                        <div class="sc_layouts_item elementor-element elementor-element-44ca617 sc_fly_static elementor-widget elementor-widget-spacer" data-id="44ca617" data-element_type="widget" data-widget_type="spacer.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-spacer">
                                    <div class="elementor-spacer-inner"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

	</div>
			</div>
					</div>
		</footer><!-- /.footer_wrap -->

			
		</div>

		
	</div>

	
	
		<script>
			window.RS_MODULES = window.RS_MODULES || {};
			window.RS_MODULES.modules = window.RS_MODULES.modules || {};
			window.RS_MODULES.waiting = window.RS_MODULES.waiting || [];
			window.RS_MODULES.defered = false;
			window.RS_MODULES.moduleWaiting = window.RS_MODULES.moduleWaiting || {};
			window.RS_MODULES.type = 'compiled';
		</script>
		<div class="sc_layouts_panel_hide_content"></div><div  id="panel-bar"		class="sc_layouts sc_layouts_panel sc_layouts_4509 sc_layouts_panel_right sc_layouts_effect_slide trx_addons_inline_1368703693"
		data-delay="0"
		 data-panel-position="right" data-panel-effect="slide" data-panel-class="trx_addons_inline_1368703693" ><div class="sc_layouts_panel_inner">		<div data-elementor-type="cpt_layouts" data-elementor-id="4509" class="elementor elementor-4509">
						<div class="elementor-inner">
				<div class="elementor-section-wrap">
									<section class="elementor-section elementor-top-section elementor-element elementor-element-67b4187 elementor-section-height-full elementor-section-items-stretch elementor-section-content-space-between scheme_default elementor-section-boxed elementor-section-height-default sc_fly_static" data-id="67b4187" data-element_type="section">
						<div class="elementor-container elementor-column-gap-extended">
							<div class="elementor-row">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-56dc68b6 sc_inner_width_none sc_content_align_inherit sc_layouts_column_icons_position_left sc_fly_static" data-id="56dc68b6" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-1c135e79 sc_fly_static elementor-widget elementor-widget-trx_sc_layouts_logo" data-id="1c135e79" data-element_type="widget" data-widget_type="trx_sc_layouts_logo.default">
				<div class="elementor-widget-container">
			<a href="#"
		class="sc_layouts_logo sc_layouts_logo_default trx_addons_inline_469852772" ><img class="logo_image"
					src="wp-content/uploads/2022/06/logo-dark.png"
											srcset="wp-content/uploads/2022/06/logo-dark-retina.png 2x"
											alt="RightSolve Systems" width="84" height="84"></a>		</div>
				</div>
				<div class="elementor-element elementor-element-6655a08c sc_fly_static elementor-widget elementor-widget-trx_sc_socials" data-id="6655a08c" data-element_type="widget" data-widget_type="trx_sc_socials.default">
				<div class="elementor-widget-container">
			<div class="sc_socials sc_socials_icons_names sc_align_left" >
		<div class="socials_wrap sc_item_content">
			<a target="_blank" href="https://x.com/rightsolvesys" class="social_item social_item_style_icons sc_icon_type_icons social_item_type_icons_names"> <span class="social_icon social_icon_twitter-1"><i class="fa-brands fa-x-twitter"></i></span><span class="social_name social_twitter-1">X</span> </a> <a target="_blank" href="https://www.linkedin.com/company/rightsolvesys" class="social_item social_item_style_icons sc_icon_type_icons social_item_type_icons_names"><span class="social_icon social_icon_linkedin"><span class="icon-linkedin"></span></span><span class="social_name social_linkedin">LinkedIn</span> </a> <a target="_blank" href="https://www.youtube.com/@rightsolvesys" class="social_item social_item_style_icons sc_icon_type_icons social_item_type_icons_names"><span class="social_icon social_icon_youtube"><span class="icon-youtube"></span></span><span class="social_name social_youtube">YouTube</span> </a>
		</div>
		</div>		
	</div>
				</div>
				<section class="elementor-section elementor-inner-section elementor-element elementor-element-8d88f99 elementor-section-boxed elementor-section-height-default elementor-section-height-default sc_fly_static" data-id="8d88f99" data-element_type="section">
						<div class="elementor-container elementor-column-gap-no">
							<div class="elementor-row">
					<div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-0671e65 sc_inner_width_none sc_content_align_inherit sc_layouts_column_icons_position_left sc_fly_static" data-id="0671e65" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-4f42819 sc_fly_static elementor-widget elementor-widget-heading" data-id="4f42819" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<h5 class="elementor-heading-title elementor-size-default"><a href="tel:18408412569">+234 707 551 1670</a></h5>		</div>
				</div>
				<div class="elementor-element elementor-element-efdd0a4 sc_fly_static elementor-widget elementor-widget-spacer" data-id="efdd0a4" data-element_type="widget" data-widget_type="spacer.default">
				<div class="elementor-widget-container">
					<div class="elementor-spacer">
			<div class="elementor-spacer-inner"></div>
		</div>
				</div>
				</div>
				<div class="elementor-element elementor-element-63068ae sc_fly_static elementor-widget elementor-widget-heading" data-id="63068ae" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<span class="elementor-heading-title elementor-size-default"><a href="mailto:engage@rightsolvesys.com">engage@rightsolvesys.com</a></span>		</div>
				</div>
				<div class="elementor-element elementor-element-013bb75 sc_fly_static elementor-widget elementor-widget-spacer" data-id="013bb75" data-element_type="widget" data-widget_type="spacer.default">
				<div class="elementor-widget-container">
					<div class="elementor-spacer">
			<div class="elementor-spacer-inner"></div>
		</div>
				</div>
				</div>
						</div>
					</div>
		</div>
								</div>
					</div>
		</section>
						</div>
					</div>
		</div>
								</div>
					</div>
		</section>
									</div>
			</div>
					</div>
		<a href="#" class="sc_layouts_panel_close trx_addons_button_close"><span class="sc_layouts_panel_close_icon trx_addons_button_close_icon"></span></a></div></div><div  id="go-video"		class="sc_layouts sc_layouts_popup"
		data-delay="0"
		 ><p><iframe title="McConnell Golf - Golf Course Promotion Video" data-src="https://player.vimeo.com/video/22029331?h=dfc72422ff&amp%3Bdnt=1&amp%3Bapp_id=122963&autoplay=1" width="1280" height="720" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe></p>
</div>

<a href="#" class="trx_addons_scroll_to_top trx_addons_icon-up scroll_to_top_style_default" title="Scroll to top"></a>			

			
					<script>
		( function ( body ) {
			'use strict';
			body.className = body.className.replace( /\btribe-no-js\b/, 'tribe-js' );
		} )( document.body );
		</script>
		<script>(function() {function maybePrefixUrlField() {
	if (this.value.trim() !== '' && this.value.indexOf('http') !== 0) {
		this.value = "http://" + this.value;
	}
}

var urlFields = document.querySelectorAll('.mc4wp-form input[type="url"]');
if (urlFields) {
	for (var j=0; j < urlFields.length; j++) {
		urlFields[j].addEventListener('blur', maybePrefixUrlField);
	}
}
})();</script><!-- Instagram Feed JS -->
<script type="text/javascript">
var sbiajaxurl = "wp-admin/admin-ajax.html";
</script>
<div class="trx_addons_mouse_helper trx_addons_mouse_helper_base trx_addons_mouse_helper_style_default trx_addons_mouse_helper_smooth trx_addons_mouse_helper_permanent"
				></div><script> /* <![CDATA[ */var tribe_l10n_datatables = {"aria":{"sort_ascending":": activate to sort column ascending","sort_descending":": activate to sort column descending"},"length_menu":"Show _MENU_ entries","empty_table":"No data available in table","info":"Showing _START_ to _END_ of _TOTAL_ entries","info_empty":"Showing 0 to 0 of 0 entries","info_filtered":"(filtered from _MAX_ total entries)","zero_records":"No matching records found","search":"Search:","all_selected_text":"All items on this page were selected. ","select_all_link":"Select all pages","clear_selection":"Clear Selection.","pagination":{"all":"All","next":"Next","previous":"Previous"},"select":{"rows":{"0":"","_":": Selected %d rows","1":": Selected 1 row"}},"datepicker":{"dayNames":["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"],"dayNamesShort":["Sun","Mon","Tue","Wed","Thu","Fri","Sat"],"dayNamesMin":["S","M","T","W","T","F","S"],"monthNames":["January","February","March","April","May","June","July","August","September","October","November","December"],"monthNamesShort":["January","February","March","April","May","June","July","August","September","October","November","December"],"monthNamesMin":["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],"nextText":"Next","prevText":"Prev","currentText":"Today","closeText":"Done","today":"Today","clear":"Clear"}};/* ]]> */ </script>

	<script type="text/javascript">
		(function () {
			var c = document.body.className;
			c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
			document.body.className = c;
		})();
	</script>
	<script>
		if(typeof revslider_showDoubleJqueryError === "undefined") {function revslider_showDoubleJqueryError(sliderID) {console.log("You have some jquery.js library include that comes after the Slider Revolution files js inclusion.");console.log("To fix this, you can:");console.log("1. Set 'Module General Options' -> 'Advanced' -> 'jQuery & OutPut Filters' -> 'Put JS to Body' to on");console.log("2. Find the double jQuery.js inclusion and remove it");return "Double Included jQuery Library";}}
</script>

<script type="text/javascript" src="wp-includes/js/jquery/ui/core.min3f14.js?ver=1.13.2" id="jquery-ui-core-js"></script>
<script type="text/javascript" defer="defer" src="wp-includes/js/jquery/ui/datepicker.min3f14.js?ver=1.13.2" id="jquery-ui-datepicker-js"></script>
<script type="text/javascript" id="jquery-ui-datepicker-js-after">
/* <![CDATA[ */
jQuery(function(jQuery){jQuery.datepicker.setDefaults({"closeText":"Close","currentText":"Today","monthNames":["January","February","March","April","May","June","July","August","September","October","November","December"],"monthNamesShort":["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],"nextText":"Next","prevText":"Previous","dayNames":["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"],"dayNamesShort":["Sun","Mon","Tue","Wed","Thu","Fri","Sat"],"dayNamesMin":["S","M","T","W","T","F","S"],"dateFormat":"M d, yy","firstDay":1,"isRTL":false});});
/* ]]> */
</script>
<script type="text/javascript" src="wp-content/plugins/quickcal/assets/js/spin.min7406.js?ver=2.0.1" id="booked-spin-js-js"></script>
<script type="text/javascript" src="wp-content/plugins/quickcal/assets/js/spin.jquery7406.js?ver=2.0.1" id="booked-spin-jquery-js"></script>
<script type="text/javascript" defer="defer" src="wp-content/plugins/quickcal/assets/js/tooltipster/js/jquery.tooltipster.min9b70.js?ver=3.3.0" id="booked-tooltipster-js"></script>
<script type="text/javascript" id="booked-functions-js-extra">
/* <![CDATA[ */
var booked_js_vars = {"ajax_url":"https:\/\/golfclub.themerex.net\/wp-admin\/admin-ajax.php","profilePage":"","publicAppointments":"","i18n_confirm_appt_delete":"Are you sure you want to cancel this appointment?","i18n_please_wait":"Please wait ...","i18n_wrong_username_pass":"Wrong username\/password combination.","i18n_fill_out_required_fields":"Please fill out all required fields.","i18n_guest_appt_required_fields":"Please enter your name to book an appointment.","i18n_appt_required_fields":"Please enter your name, your email address and choose a password to book an appointment.","i18n_appt_required_fields_guest":"Please fill in all \"Information\" fields.","i18n_password_reset":"Please check your email for instructions on resetting your password.","i18n_password_reset_error":"That username or email is not recognized.","nonce":"83dc406627"};
/* ]]> */
</script>
<script type="text/javascript" defer="defer" src="wp-content/plugins/quickcal/assets/js/functionscb18.js?ver=1.0.9" id="booked-functions-js"></script>
<script type="text/javascript" defer="defer" src="wp-content/plugins/advanced-popups/public/js/advanced-popups-publicc358.js?ver=1.1.3" id="advanced-popups-js"></script>
<script type="text/javascript" src="wp-includes/js/dist/vendor/wp-polyfill-inert.min0226.js?ver=3.1.2" id="wp-polyfill-inert-js"></script>
<script type="text/javascript" src="wp-includes/js/dist/vendor/regenerator-runtime.min6c85.js?ver=0.14.0" id="regenerator-runtime-js"></script>
<script type="text/javascript" src="wp-includes/js/dist/vendor/wp-polyfill.min2c7c.js?ver=3.15.0" id="wp-polyfill-js"></script>
<script type="text/javascript" id="contact-form-7-js-extra">
/* <![CDATA[ */
var wpcf7 = {"api":{"root":"https:\/\/golfclub.themerex.net\/wp-json\/","namespace":"contact-form-7\/v1"},"cached":"1"};
/* ]]> */
</script>
<script type="text/javascript" defer="defer" src="wp-content/plugins/contact-form-7/includes/js/index4c7e.js?ver=5.6.2" id="contact-form-7-js"></script>

<script type="text/javascript" id="trx_demo_panels-js-extra">
/* <![CDATA[ */
var TRX_DEMO_STORAGE = {"ajax_url":"https:\/\/golfclub.themerex.net\/wp-admin\/admin-ajax.php","ajax_nonce":"87c42a4fce","site_url":"https:\/\/golfclub.themerex.net","user_logged_in":"0","msg_ajax_error":"Invalid server response! Try again later.","tabs_delay":"3000"};
/* ]]> */
</script>
<script type="text/javascript" defer="defer" src="wp-content/plugins/trx_demo/js/trx_demo_panels.js" id="trx_demo_panels-js"></script>
<script type="text/javascript" src="wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.minf98d.js?ver=2.1.4-wc.6.8.2" id="js-cookie-js"></script>
<script type="text/javascript" id="trx_addons-js-extra">
/* <![CDATA[ */
var TRX_ADDONS_STORAGE = {"admin_mode":"","ajax_url":"https:\/\/golfclub.themerex.net\/wp-admin\/admin-ajax.php","ajax_nonce":"87c42a4fce","site_url":"https:\/\/golfclub.themerex.net","post_id":"18349","vc_edit_mode":"","is_preview":"","is_preview_gb":"","is_preview_elm":"","popup_engine":"magnific","scroll_progress":"hide","hide_fixed_rows":"1","smooth_scroll":"","animate_inner_links":"1","disable_animation_on_mobile":"","add_target_blank":"0","menu_collapse":"1","menu_collapse_icon":"trx_addons_icon-ellipsis-vert","menu_stretch":"1","resize_tag_video":"","resize_tag_iframe":"1","user_logged_in":"","theme_slug":"n7-golf-club","theme_bg_color":"#FFFFFF","theme_accent_color":"#07d368","page_wrap_class":".page_wrap","columns_wrap_class":"trx_addons_columns_wrap","columns_in_single_row_class":"columns_in_single_row","column_class_template":"trx_addons_column-$1_$2","email_mask":"^([a-zA-Z0-9_\\-]+\\.)*[a-zA-Z0-9_\\-]+@[a-zA-Z0-9_\\-]+(\\.[a-zA-Z0-9_\\-]+)*\\.[a-zA-Z0-9]{2,12}$","mobile_breakpoint_fixedrows_off":"768","mobile_breakpoint_fixedcolumns_off":"768","mobile_breakpoint_stacksections_off":"768","mobile_breakpoint_scroll_lag_off":"768","mobile_breakpoint_fullheight_off":"1025","mobile_breakpoint_mousehelper_off":"1025","msg_caption_yes":"Yes","msg_caption_no":"No","msg_caption_ok":"OK","msg_caption_apply":"Apply","msg_caption_cancel":"Cancel","msg_caption_attention":"Attention!","msg_caption_warning":"Warning!","msg_ajax_error":"Invalid server answer!","msg_magnific_loading":"Loading image","msg_magnific_error":"Error loading image","msg_magnific_close":"Close (Esc)","msg_error_like":"Error saving your like! Please, try again later.","msg_field_name_empty":"The name can't be empty","msg_field_email_empty":"Too short (or empty) email address","msg_field_email_not_valid":"Invalid email address","msg_field_text_empty":"The message text can't be empty","msg_search_error":"Search error! Try again later.","msg_send_complete":"Send message complete!","msg_send_error":"Transmit failed!","msg_validation_error":"Error data validation!","msg_name_empty":"The name can't be empty","msg_name_long":"Too long name","msg_email_empty":"Too short (or empty) email address","msg_email_long":"E-mail address is too long","msg_email_not_valid":"E-mail address is invalid","msg_text_empty":"The message text can't be empty","msg_copied":"Copied!","ajax_views":"","menu_cache":[".menu_mobile_inner nav > ul"],"login_via_ajax":"1","double_opt_in_registration":"1","msg_login_empty":"The Login field can't be empty","msg_login_long":"The Login field is too long","msg_password_empty":"The password can't be empty and shorter then 4 characters","msg_password_long":"The password is too long","msg_login_success":"Login success! The page should be reloaded in 3 sec.","msg_login_error":"Login failed!","msg_not_agree":"Please, read and check 'Terms and Conditions'","msg_password_not_equal":"The passwords in both fields are not equal","msg_registration_success":"Thank you for registering. Please confirm registration by clicking on the link in the letter sent to the specified email.","msg_registration_error":"Registration failed!","shapes_url":"https:\/\/golfclub.themerex.net\/wp-content\/themes\/n7-golf-club\/skins\/default\/trx_addons\/css\/shapes\/","mouse_helper_in_swiper_slider":"1","elementor_stretched_section_container":".page_wrap","pagebuilder_preview_mode":"","elementor_animate_items":".elementor-heading-title,.sc_item_subtitle,.sc_item_title,.sc_item_descr,.sc_item_posts_container + .sc_item_button,.sc_item_button.sc_title_button,nav > ul > li","elementor_breakpoints":{"desktop":999999,"tablet":1024,"mobile":767},"add_to_links_url":[{"mask":"elementor.com\/","link":"https:\/\/be.elementor.com\/visit\/?bta=2496&nci=5383&brand=elementor&utm_campaign=theme"},{"page":["admin.php?page=revslider","plugins.php"],"mask":"\/\/account.sliderrevolution.com\/portal","link":"https:\/\/themepunch.pxf.io\/4ekEVG"},{"page":["admin.php?page=revslider","plugins.php"],"mask":"\/\/account.sliderrevolution.com\/portal\/pricing","link":"https:\/\/themepunch.pxf.io\/KeRz5z"},{"page":["admin.php?page=revslider","plugins.php"],"mask":"sliderrevolution.com\/premium-slider-revolution","link":"https:\/\/themepunch.pxf.io\/9W1nyy"},{"page":["admin.php?page=revslider","plugins.php"],"mask":"\/\/support.sliderrevolution.com","link":"https:\/\/themepunch.pxf.io\/P0LbGq"},{"page":["admin.php?page=revslider","plugins.php"],"mask":"sliderrevolution.com\/help-center","link":"https:\/\/themepunch.pxf.io\/doXGdy"},{"page":["admin.php?page=revslider","plugins.php"],"mask":"sliderrevolution.com\/manual","link":"https:\/\/themepunch.pxf.io\/ZdkK3q"},{"page":["admin.php?page=revslider","plugins.php"],"mask":"sliderrevolution.com\/get-on-board-the-slider-revolution-dashboard","link":"https:\/\/themepunch.pxf.io\/QOqb1z"},{"page":["admin.php?page=revslider","plugins.php"],"mask":"sliderrevolution.com\/expand-possibilities-with-addons","link":"https:\/\/themepunch.pxf.io\/6baEN3"},{"page":["admin.php?page=revslider","plugins.php"],"mask":"sliderrevolution.com\/examples","link":"https:\/\/themepunch.pxf.io\/rnvXdB"},{"page":["admin.php?page=revslider","plugins.php"],"mask":"sliderrevolution.com\/pro-level-design-with-slider-revolution","link":"https:\/\/themepunch.pxf.io\/jWEmda"},{"page":["admin.php?page=revslider","plugins.php"],"mask":"sliderrevolution.com\/plugin-privacy-policy","link":"https:\/\/themepunch.pxf.io\/gbzGE0"},{"page":["admin.php?page=revslider","plugins.php"],"mask":"sliderrevolution.com\/faq\/why-was-my-slider-revolution-license-deactivated","link":"https:\/\/themepunch.pxf.io\/RyxbVy"},{"page":["admin.php?page=revslider","plugins.php"],"mask":"sliderrevolution.com\/faq\/updating-make-sure-clear-caches","link":"https:\/\/themepunch.pxf.io\/Yg5Nzq"},{"page":["admin.php?page=revslider","plugins.php"],"mask":"sliderrevolution.com\/faq\/where-to-find-purchase-code","link":"https:\/\/themepunch.pxf.io\/x9xZdO"},{"page":["admin.php?page=revslider","plugins.php"],"mask":"sliderrevolution.com\/documentation\/changelog","link":"https:\/\/themepunch.pxf.io\/EanyNn"},{"page":["admin.php?page=revslider","plugins.php"],"mask":"sliderrevolution.com\/documentation\/system-requirements\/","link":"https:\/\/themepunch.pxf.io\/LPv2kO"},{"page":["admin.php?page=revslider","plugins.php"],"mask":"sliderrevolution.com","link":"https:\/\/themepunch.pxf.io\/DVEORn"}],"animate_to_mc4wp_form_submitted":"1","msg_no_products_found":"No products found! Please, change query parameters and try again.","audio_effects_allowed":"0","bg_colors_selector":"body:not(.body_style_boxed) .page_content_wrap,body.body_style_boxed .page_wrap","mouse_helper":"1","mouse_helper_delay":"8","mouse_helper_centered":"0","msg_mouse_helper_anchor":"Scroll to","ai_helper_sc_igenerator_openai_sizes":[],"msg_ai_helper_download":"Download","msg_ai_helper_download_error":"Error","msg_ai_helper_download_expired":"The generated image cache timed out. The download link is no longer valid.<br>But you can still download the image by right-clicking on it and selecting \"Save Image As...\"","msg_ai_helper_igenerator_disabled":"Image generation is not available in edit mode!","portfolio_use_gallery":"","scroll_to_anchor":"0","update_location_from_anchor":"0","msg_sc_googlemap_not_avail":"Googlemap service is not available","msg_sc_googlemap_geocoder_error":"Error while geocode address","sc_icons_animation_speed":"50","msg_sc_osmap_not_avail":"OpenStreetMap service is not available","msg_sc_osmap_geocoder_error":"Error while geocoding address","osmap_tiler":"vector","osmap_tiler_styles":{"basic":{"title":"Basic","slug":"basic","url":"https:\/\/api.maptiler.com\/maps\/{style}\/style.json?key=C1rALu26mR1iTxEBrqQj","maxzoom":"18","token":""}},"osmap_attribution":"Map data \u00a9 <a href=\"https:\/\/www.openstreetmap.org\/\">OpenStreetMap<\/a> contributors","slider_round_lengths":"1"};
/* ]]> */
</script>
<script type="text/javascript" defer="defer" src="wp-content/plugins/trx_addons/js/scripts.js" id="trx_addons-js"></script>
<script type="text/javascript" defer="defer" src="wp-content/plugins/trx_addons/addons/mouse-helper/mouse-helper.js" id="trx_addons-mouse-helper-js"></script>
<script type="text/javascript" defer="defer" src="wp-content/plugins/trx_addons/components/cpt/layouts/shortcodes/menu/superfish.min.js" id="superfish-js"></script>

<script type="text/javascript" defer="defer" src="wp-content/plugins/trx_addons/js/swiper/swiper.min.js" id="swiper-js"></script>
<script type="text/javascript" src="wp-content/plugins/trx_addons/js/tweenmax/GSAP/3.12.2/gsap.min.js" id="tweenmax-js"></script>
<script type="text/javascript" id="n7-golf-club-init-js-extra">
/* <![CDATA[ */
var N7_GOLF_CLUB_STORAGE = {"ajax_url":"https:\/\/golfclub.themerex.net\/wp-admin\/admin-ajax.php","ajax_nonce":"87c42a4fce","site_url":"https:\/\/golfclub.themerex.net","theme_url":"https:\/\/golfclub.themerex.net\/wp-content\/themes\/n7-golf-club\/","site_scheme":"scheme_default","user_logged_in":"","mobile_layout_width":"768","mobile_device":"","mobile_breakpoint_underpanels_off":"768","mobile_breakpoint_fullheight_off":"1025","menu_side_stretch":"","menu_side_icons":"1","background_video":"","use_mediaelements":"1","resize_tag_video":"","resize_tag_iframe":"1","open_full_post":"","which_block_load":"article","admin_mode":"","msg_ajax_error":"Invalid server answer!","msg_i_agree_error":"Please accept the terms of our Privacy Policy.","toggle_title":"Filter by ","msg_copied":"Copied!","alter_link_color":"#07d368","mc4wp_msg_email_min":"Email address is too short (or empty)","mc4wp_msg_email_max":"Too long email address","button_hover":"default"};
/* ]]> */
</script>
<script type="text/javascript" defer="defer" src="wp-content/themes/n7-golf-club/js/scripts.js" id="n7-golf-club-init-js"></script>
<script type="text/javascript" defer="defer" src="wp-content/themes/n7-golf-club/skins/default/skin.js" id="n7-golf-club-skin-default-js"></script>
<script type="text/javascript" src="wp-content/plugins/elementor/assets/js/frontend-modules.minf3df.js?ver=3.7.2" id="elementor-frontend-modules-js"></script>
<script type="text/javascript" id="elementor-frontend-js-before">
/* <![CDATA[ */
var elementorFrontendConfig = {"environmentMode":{"edit":false,"wpPreview":false,"isScriptDebug":false},"i18n":{"shareOnFacebook":"Share on Facebook","shareOnTwitter":"Share on Twitter","pinIt":"Pin it","download":"Download","downloadImage":"Download image","fullscreen":"Fullscreen","zoom":"Zoom","share":"Share","playVideo":"Play Video","previous":"Previous","next":"Next","close":"Close"},"is_rtl":false,"breakpoints":{"xs":0,"sm":480,"md":768,"lg":1025,"xl":1440,"xxl":1600},"responsive":{"breakpoints":{"mobile":{"label":"Mobile","value":767,"default_value":767,"direction":"max","is_enabled":true},"mobile_extra":{"label":"Mobile Extra","value":880,"default_value":880,"direction":"max","is_enabled":false},"tablet":{"label":"Tablet","value":1024,"default_value":1024,"direction":"max","is_enabled":true},"tablet_extra":{"label":"Tablet Extra","value":1200,"default_value":1200,"direction":"max","is_enabled":false},"laptop":{"label":"Laptop","value":1366,"default_value":1366,"direction":"max","is_enabled":false},"widescreen":{"label":"Widescreen","value":2400,"default_value":2400,"direction":"min","is_enabled":false}}},"version":"3.7.2","is_static":false,"experimentalFeatures":{"e_import_export":true,"e_hidden_wordpress_widgets":true,"landing-pages":true,"elements-color-picker":true,"favorite-widgets":true,"admin-top-bar":true},"urls":{"assets":"https:\/\/golfclub.themerex.net\/wp-content\/plugins\/elementor\/assets\/"},"settings":{"page":[],"editorPreferences":[]},"kit":{"stretched_section_container":".page_wrap","active_breakpoints":["viewport_mobile","viewport_tablet"],"global_image_lightbox":"yes","lightbox_enable_counter":"yes","lightbox_enable_fullscreen":"yes","lightbox_enable_zoom":"yes","lightbox_enable_share":"yes","lightbox_title_src":"title","lightbox_description_src":"description"},"post":{"id":18349,"title":"N7%20Golf%20Club%20%E2%80%93%20Golf%20Course%20%26%20Playing%20Ground%20WordPress%20Theme","excerpt":"","featuredImage":false}};
/* ]]> */
</script>
<script type="text/javascript" src="wp-content/plugins/elementor/assets/js/frontend.minf3df.js?ver=3.7.2" id="elementor-frontend-js"></script>


<script id="rs-initialisation-scripts">
		var	tpj = jQuery;

		var	revapi12;

		if(window.RS_MODULES === undefined) window.RS_MODULES = {};
		if(RS_MODULES.modules === undefined) RS_MODULES.modules = {};
		RS_MODULES.modules["revslider121"] = {once: RS_MODULES.modules["revslider121"]!==undefined ? RS_MODULES.modules["revslider121"].once : undefined, init:function() {
			window.revapi12 = window.revapi12===undefined || window.revapi12===null || window.revapi12.length===0  ? document.getElementById("rev_slider_12_1") : window.revapi12;
			if(window.revapi12 === null || window.revapi12 === undefined || window.revapi12.length==0) { window.revapi12initTry = window.revapi12initTry ===undefined ? 0 : window.revapi12initTry+1; if (window.revapi12initTry<20) requestAnimationFrame(function() {RS_MODULES.modules["revslider121"].init()}); return;}
			window.revapi12 = jQuery(window.revapi12);
			if(window.revapi12.revolution==undefined){ revslider_showDoubleJqueryError("rev_slider_12_1"); return;}
			revapi12.revolutionInit({
					revapi:"revapi12",
					DPR:"dpr",
					sliderLayout:"fullscreen",
					visibilityLevels:"1240,1460,785,500",
					gridwidth:"1920,1440,778,480",
					gridheight:"810,650,480,480",
					minHeight:"450px",
					lazyType:"smart",
					perspective:600,
					perspectiveType:"global",
					editorheight:"810,650,480,480",
					responsiveLevels:"1240,1460,785,500",
					progressBar:{disableProgressBar:true},
					navigation: {
						wheelCallDelay:1000,
						onHoverStop:false,
						touch: {
							touchenabled:true,
							touchOnDesktop:true
						},
						bullets: {
							enable:true,
							tmp:"",
							style:"bullets_dots_border_alt_2",
							v_offset:60,
							space:17
						}
					},
					parallax: {
						levels:[1,2,3,4,5,6,7,8,9,10,12,15,17,20,25,30],
						type:"mouse",
						origo:"slidercenter",
						speed:0
					},
					viewPort: {
						global:true,
						globalDist:"-200px",
						enable:false
					},
					fallbacks: {
						allowHTML5AutoPlayOnAndroid:true
					},
			});
			
		}} // End of RevInitScript

		if (window.RS_MODULES.checkMinimal!==undefined) { window.RS_MODULES.checkMinimal();};
	</script>

<script>
	TRX_DEMO_STORAGE['tabs_layout'] = "	<div class=\"trx_demo_panels trx_demo_tabs_position_rc trx_demo_tabs_style_icons\" style=\"width:320px;\"> <div class=\"trx_demo_tabs\"> 				<a class=\"hint_left hint_big hint_slide\" href=\"contacts\" aria-label=\"Support Center\" 						data-type=\"link\" style=\"color:#ffffff;background-color:#07d368;\"></i><i class=\"demo-icon icon-lifebuoy\"></i></a><a class=\"hint_left hint_big hint_slide\" href=\"/\" aria-label=\"Documentation\" data-type=\"link\" style=\"color:#ffffff;background-color:#07d368;\"><i class=\"demo-icon icon-doc\"></i></a><a class=\"hint_left hint_big hint_slide\" href=\"./?notabs=1\" 												aria-label=\"Hide panel\" 						data-type=\"link\" 						style=\"color:#ffffff;background-color:#07d368;\" 					><i class=\"trx_demo_icon-browser\"></i></a>			</div>  			<div class=\"trx_demo_panels_wrap\"> 				<div id=\"panel_related-themes\" 							class=\"trx_demo_panel 									trx_demo_panel_products									trx_demo_panel_thumbs_animation_off									trx_demo_panel_layout_1col									trx_demo_panel_style_plain\" 							style=\"\" 					><div class=\"trx_demo_panel_header\"><h5 class=\"trx_demo_panel_title\" style=\"\">Our Bestsellers</h5></div><div class=\"trx_demo_panel_content\"><div class=\"trx_demo_panel_list\"><div class=\"trx_demo_panel_list_item trx_demo_featured\" data-filter-value=\"bestsellers,business,news-editorial\" data-search-value=\"qwery\"> 											<div class=\"trx_demo_panel_list_item_image_wrap\"> 																									<div class=\"trx_demo_panel_list_item_image trx_demo_panel_list_item_image_ratio_16_9\" 														style=\"background-image: url(wp-content/plugins/trx_demo/images/no-thumb.gif);background-position:center;background-repeat:no-repeat;background-size:cover;\" 														data-style=\"background-image: url(//themerex.net/wp-content/uploads/edd/2021/08/01_Qwery.png);\"> 															<a href=\"http://demo.themerex.net/?theme=qwery\" target=\"_blank\"></a> 													</div> 													<h6 class=\"trx_demo_panel_list_item_title\"> 													<a href=\"http://demo.themerex.net/?theme=qwery\" target=\"_blank\"><span class=\"trx_demo_panel_list_item_price\"><del>&#036;75</del>&nbsp;&#036;59</span>Qwery<span class=\"trx_demo_panel_list_item_terms\"><span class=\"trx_demo_panel_list_item_term\">Bestsellers</span><span class=\"trx_demo_panel_list_item_term\">Business</span><span class=\"trx_demo_panel_list_item_term\">News / Editorial</span></span></a> 												</h6> 																							</div> 										</div><div class=\"trx_demo_panel_list_item trx_demo_featured\" data-filter-value=\"bestsellers,blog-magazine,news-editorial\" data-search-value=\"kicker\"> 											<div class=\"trx_demo_panel_list_item_image_wrap\"> 																									<div class=\"trx_demo_panel_list_item_image trx_demo_panel_list_item_image_ratio_16_9\" 														style=\"background-image: url(wp-content/plugins/trx_demo/images/no-thumb.gif);background-position:center;background-repeat:no-repeat;background-size:cover;\" 														data-style=\"background-image: url(//themerex.net/wp-content/uploads/edd/2021/08/01_Kicker.png);\"> 															<a href=\"http://demo.themerex.net/?theme=kicker\" target=\"_blank\"></a> 													</div> 													<h6 class=\"trx_demo_panel_list_item_title\"> 													<a href=\"http://demo.themerex.net/?theme=kicker\" target=\"_blank\"><span class=\"trx_demo_panel_list_item_price\"><del>&#036;75</del>&nbsp;&#036;59</span>Kicker<span class=\"trx_demo_panel_list_item_terms\"><span class=\"trx_demo_panel_list_item_term\">Bestsellers</span><span class=\"trx_demo_panel_list_item_term\">Blog / Magazine</span><span class=\"trx_demo_panel_list_item_term\">News / Editorial</span></span></a> 												</h6> 																							</div> 										</div><div class=\"trx_demo_panel_list_item trx_demo_featured\" data-filter-value=\"bestsellers,health-beauty,news-editorial\" data-search-value=\"jacqueline\"> 											<div class=\"trx_demo_panel_list_item_image_wrap\"> 																									<div class=\"trx_demo_panel_list_item_image trx_demo_panel_list_item_image_ratio_16_9\" 														style=\"background-image: url(wp-content/plugins/trx_demo/images/no-thumb.gif);background-position:center;background-repeat:no-repeat;background-size:cover;\" 														data-style=\"background-image: url(//themerex.net/wp-content/uploads/edd/2017/09/Jacqueline_Home.jpg);\"> 															<a href=\"http://demo.themerex.net/?theme=jacqueline\" target=\"_blank\"></a> 													</div> 													<h6 class=\"trx_demo_panel_list_item_title\"> 													<a href=\"http://demo.themerex.net/?theme=jacqueline\" target=\"_blank\"><span class=\"trx_demo_panel_list_item_price\">&#036;79</span>Jacqueline<span class=\"trx_demo_panel_list_item_terms\"><span class=\"trx_demo_panel_list_item_term\">Bestsellers</span><span class=\"trx_demo_panel_list_item_term\">Health &amp; Beauty</span><span class=\"trx_demo_panel_list_item_term\">News / Editorial</span></span></a> 												</h6> 																							</div> 										</div><div class=\"trx_demo_panel_list_item trx_demo_featured\" data-filter-value=\"bestsellers,entertainment,news-editorial\" data-search-value=\"fc united\"> 											<div class=\"trx_demo_panel_list_item_image_wrap\"> 																									<div class=\"trx_demo_panel_list_item_image trx_demo_panel_list_item_image_ratio_16_9\" 														style=\"background-image: url(wp-content/plugins/trx_demo/images/no-thumb.gif);background-position:center;background-repeat:no-repeat;background-size:cover;\" 														data-style=\"background-image: url(//themerex.net/wp-content/uploads/edd/2019/07/fc-united_home.jpg);\"> 															<a href=\"http://demo.themerex.net/?theme=fc-united\" target=\"_blank\"></a> 													</div> 													<h6 class=\"trx_demo_panel_list_item_title\"> 													<a href=\"http://demo.themerex.net/?theme=fc-united\" target=\"_blank\"><span class=\"trx_demo_panel_list_item_price\">&#036;79</span>FC United<span class=\"trx_demo_panel_list_item_terms\"><span class=\"trx_demo_panel_list_item_term\">Bestsellers</span><span class=\"trx_demo_panel_list_item_term\">Entertainment</span><span class=\"trx_demo_panel_list_item_term\">News / Editorial</span></span></a> 												</h6> 																							</div> 										</div><div class=\"trx_demo_panel_list_item trx_demo_featured\" data-filter-value=\"portfolio\" data-search-value=\"helion\"> 											<div class=\"trx_demo_panel_list_item_image_wrap\"> 																									<div class=\"trx_demo_panel_list_item_image trx_demo_panel_list_item_image_ratio_16_9\" 														style=\"background-image: url(wp-content/plugins/trx_demo/images/no-thumb.gif);background-position:center;background-repeat:no-repeat;background-size:cover;\" 														data-style=\"background-image: url(//themerex.net/wp-content/uploads/edd/2020/01/Helion-home-min.jpg);\"> 															<a href=\"http://demo.themerex.net/?theme=helion\" target=\"_blank\"></a> 													</div> 													<h6 class=\"trx_demo_panel_list_item_title\"> 													<a href=\"http://demo.themerex.net/?theme=helion\" target=\"_blank\"><span class=\"trx_demo_panel_list_item_price\">&#036;69</span>Helion<span class=\"trx_demo_panel_list_item_terms\"><span class=\"trx_demo_panel_list_item_term\">Portfolio</span></span></a> 												</h6> 																							</div> 										</div><div class=\"trx_demo_panel_list_item trx_demo_featured\" data-filter-value=\"news-editorial\" data-search-value=\"blabber\"> 											<div class=\"trx_demo_panel_list_item_image_wrap\"> 																									<div class=\"trx_demo_panel_list_item_image trx_demo_panel_list_item_image_ratio_16_9\" 														style=\"background-image: url(wp-content/plugins/trx_demo/images/no-thumb.gif);background-position:center;background-repeat:no-repeat;background-size:cover;\" 														data-style=\"background-image: url(//themerex.net/wp-content/uploads/edd/2020/01/Blabber_home-min.jpg);\"> 															<a href=\"http://demo.themerex.net/?theme=blabber\" target=\"_blank\"></a> 													</div> 													<h6 class=\"trx_demo_panel_list_item_title\"> 													<a href=\"http://demo.themerex.net/?theme=blabber\" target=\"_blank\"><span class=\"trx_demo_panel_list_item_price\">&#036;69</span>Blabber<span class=\"trx_demo_panel_list_item_terms\"><span class=\"trx_demo_panel_list_item_term\">News / Editorial</span></span></a> 												</h6> 																							</div> 										</div><div class=\"trx_demo_panel_list_item trx_demo_featured\" data-filter-value=\"directory-listings\" data-search-value=\"alliance\"> 											<div class=\"trx_demo_panel_list_item_image_wrap\"> 																									<div class=\"trx_demo_panel_list_item_image trx_demo_panel_list_item_image_ratio_16_9\" 														style=\"background-image: url(wp-content/plugins/trx_demo/images/no-thumb.gif);background-position:center;background-repeat:no-repeat;background-size:cover;\" 														data-style=\"background-image: url(//themerex.net/wp-content/uploads/edd/2020/06/Alliance_Home.jpg);\"> 															<a href=\"http://demo.themerex.net/?theme=alliance\" target=\"_blank\"></a> 													</div> 													<h6 class=\"trx_demo_panel_list_item_title\"> 													<a href=\"http://demo.themerex.net/?theme=alliance\" target=\"_blank\"><span class=\"trx_demo_panel_list_item_price\">&#036;69</span>Alliance<span class=\"trx_demo_panel_list_item_terms\"><span class=\"trx_demo_panel_list_item_term\">Directory &amp; Listings</span></span></a> 												</h6> 																							</div> 										</div><div class=\"trx_demo_panel_list_item trx_demo_featured\" data-filter-value=\"health-beauty\" data-search-value=\"mystik\"> 											<div class=\"trx_demo_panel_list_item_image_wrap\"> 																									<div class=\"trx_demo_panel_list_item_image trx_demo_panel_list_item_image_ratio_16_9\" 														style=\"background-image: url(wp-content/plugins/trx_demo/images/no-thumb.gif);background-position:center;background-repeat:no-repeat;background-size:cover;\" 														data-style=\"background-image: url(//themerex.net/wp-content/uploads/edd/2020/01/Mystik-home-min.jpg);\"> 															<a href=\"http://demo.themerex.net/?theme=mystik\" target=\"_blank\"></a> 													</div> 													<h6 class=\"trx_demo_panel_list_item_title\"> 													<a href=\"http://demo.themerex.net/?theme=mystik\" target=\"_blank\"><span class=\"trx_demo_panel_list_item_price\">&#036;69</span>Mystik<span class=\"trx_demo_panel_list_item_terms\"><span class=\"trx_demo_panel_list_item_term\">Health &amp; Beauty</span></span></a> 												</h6> 																							</div> 										</div><div class=\"trx_demo_panel_list_item trx_demo_featured\" data-filter-value=\"travel\" data-search-value=\"briny\"> 											<div class=\"trx_demo_panel_list_item_image_wrap\"> 																									<div class=\"trx_demo_panel_list_item_image trx_demo_panel_list_item_image_ratio_16_9\" 														style=\"background-image: url(wp-content/plugins/trx_demo/images/no-thumb.gif);background-position:center;background-repeat:no-repeat;background-size:cover;\" 														data-style=\"background-image: url(//themerex.net/wp-content/uploads/edd/2020/01/Briny-home-min.jpg);\"> 															<a href=\"http://demo.themerex.net/?theme=briny\" target=\"_blank\"></a> 													</div> 													<h6 class=\"trx_demo_panel_list_item_title\"> 													<a href=\"http://demo.themerex.net/?theme=briny\" target=\"_blank\"><span class=\"trx_demo_panel_list_item_price\">&#036;75</span>Briny<span class=\"trx_demo_panel_list_item_terms\"><span class=\"trx_demo_panel_list_item_term\">Travel</span></span></a> 												</h6> 																							</div> 										</div><div class=\"trx_demo_panel_list_item trx_demo_featured\" data-filter-value=\"activism\" data-search-value=\"impacto patronus\"> 											<div class=\"trx_demo_panel_list_item_image_wrap\"> 																									<div class=\"trx_demo_panel_list_item_image trx_demo_panel_list_item_image_ratio_16_9\" 														style=\"background-image: url(wp-content/plugins/trx_demo/images/no-thumb.gif);background-position:center;background-repeat:no-repeat;background-size:cover;\" 														data-style=\"background-image: url(//themerex.net/wp-content/uploads/edd/2020/01/Impacto-Patronus-home-min.jpg);\"> 															<a href=\"http://demo.themerex.net/?theme=impacto-patronus\" target=\"_blank\"></a> 													</div> 													<h6 class=\"trx_demo_panel_list_item_title\"> 													<a href=\"http://demo.themerex.net/?theme=impacto-patronus\" target=\"_blank\"><span class=\"trx_demo_panel_list_item_price\">&#036;69</span>Impacto Patronus<span class=\"trx_demo_panel_list_item_terms\"><span class=\"trx_demo_panel_list_item_term\">Activism</span></span></a> 												</h6> 																							</div> 										</div><div class=\"trx_demo_panel_list_item trx_demo_featured\" data-filter-value=\"art\" data-search-value=\"ozeum\"> 											<div class=\"trx_demo_panel_list_item_image_wrap\"> 																									<div class=\"trx_demo_panel_list_item_image trx_demo_panel_list_item_image_ratio_16_9\" 														style=\"background-image: url(wp-content/plugins/trx_demo/images/no-thumb.gif);background-position:center;background-repeat:no-repeat;background-size:cover;\" 														data-style=\"background-image: url(//themerex.net/wp-content/uploads/edd/2020/01/ozeum_home.jpg);\"> 															<a href=\"http://demo.themerex.net/?theme=ozeum\" target=\"_blank\"></a> 													</div> 													<h6 class=\"trx_demo_panel_list_item_title\"> 													<a href=\"http://demo.themerex.net/?theme=ozeum\" target=\"_blank\"><span class=\"trx_demo_panel_list_item_price\">&#036;69</span>Ozeum<span class=\"trx_demo_panel_list_item_terms\"><span class=\"trx_demo_panel_list_item_term\">Art</span></span></a> 												</h6> 																							</div> 										</div><div class=\"trx_demo_panel_list_item trx_demo_featured\" data-filter-value=\"personal-blog-magazine\" data-search-value=\"gutentype\"> 											<div class=\"trx_demo_panel_list_item_image_wrap\"> 																									<div class=\"trx_demo_panel_list_item_image trx_demo_panel_list_item_image_ratio_16_9\" 														style=\"background-image: url(wp-content/plugins/trx_demo/images/no-thumb.gif);background-position:center;background-repeat:no-repeat;background-size:cover;\" 														data-style=\"background-image: url(//themerex.net/wp-content/uploads/edd/2018/08/gutentype-home.jpg);\"> 															<a href=\"http://demo.themerex.net/?theme=gutentype\" target=\"_blank\"></a> 													</div> 													<h6 class=\"trx_demo_panel_list_item_title\"> 													<a href=\"http://demo.themerex.net/?theme=gutentype\" target=\"_blank\"><span class=\"trx_demo_panel_list_item_price\">&#036;69</span>Gutentype<span class=\"trx_demo_panel_list_item_terms\"><span class=\"trx_demo_panel_list_item_term\">Personal</span></span></a> 												</h6> 																							</div> 										</div></div></div><div class=\"trx_demo_panel_footer\"><a class=\"trx_demo_panel_button sc_button theme_button trx_demo_inline_1484141394 trx_demo_inline_1476653508\" href=\"https://themeforest.net/item/qwery-multipurpose-business-wordpress-theme/29678687\" target=\"_blank\">Sale</a></div></div></div> 			<span class=\"trx_demo_button_close\"><span class=\"trx_demo_button_close_icon\"></span></span>  		</div>  		<div class=\"trx_demo_panels_mask\"></div> 		";
</script>

<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v84a3a4012de94ce1a686ba8c167c359c1696973893317" integrity="sha512-euoFGowhlaLqXsPWQ48qSkBSCFs3DPRyiwVu3FjR96cMPx+Fr+gpWRhIafcHwqwCqWS42RZhIudOvEI+Ckf6MA==" data-cf-beacon='{"rayId":"8587ca2c89d70bc0","b":1,"version":"2024.2.0","token":"dab7be3e6ab04952b40d6c8e93f6cc2a"}' crossorigin="anonymous"></script>

<style>
	body{--booked_button_color: #c5a48e;}
	
	.sc_layouts_menu_nav li.columns-3>ul>li {
		width: 33% !important;
	}
	
	.sc_layouts_row_type_compact .sc_layouts_cart .sc_layouts_cart_icon:before {
		position: relative;
		font-family: "fontello";
		content: '\e10d' !important;
	}
	
	div.octf_tools_bar__icon_src {
		display: inline-block;
		width: 45px;
		height: 45px;
		line-height: 53px;
		border-radius: 0!important;
		transition: opacity .2s ease;
		color: white;
		cursor: pointer;
	}
	
	div.octf_tools_bar__icon_src i {
		width: 1em;
		height: 1em;
		display: inline-block;
		font-size: 24px;
		fill: white;
	}
	
.search_modern .search_wrap {
    background-color: #181c2e;
}

.menu_mobile .menu_mobile_inner {
    background-color: #181c2e;
}

li ul:not(.sc_item_filters_tabs) {
    background-color: #181c2e !important;
}

.color_style_link2 .sc_item_subtitle {
    color: #212e7d !important;
}

.sc_icons_icon>i:before {
    font-size: 3.8em;
    line-height: 1.1em !important;
}

.sc_icons.color_style_dark .sc_icons_icon {
    color: #354188 !important;
}

.sc_icons .sc_icons_item_linked:hover .sc_icons_icon {
    color: #43baff !important;
}

@media (min-width: 768px) {
    .mbl {
      display: none !important;
    }
  }


@media only screen and (max-width: 767px) {
	.dsk {
		display: none !important;
	}
}


	</style>
	
	<script type="text/javascript" id="ppress-frontend-script-js-extra">
		/* <![CDATA[ */
		var pp_ajax_form = {"ajaxurl":"https:\/\/wpdemo.archiwp.com\/engitech\/wp-admin\/admin-ajax.php","confirm_delete":"Are you sure?","deleting_text":"Deleting...","deleting_error":"An error occurred. Please try again.","nonce":"d3eeb8581a","disable_ajax_form":"false","is_checkout":"0","is_checkout_tax_enabled":"0"};
		/* ]]> */
		</script>
		
		<script type="text/javascript" id="elementor-frontend-js-before">
		/* <![CDATA[ */
		var elementorFrontendConfig = {"environmentMode":{"edit":false,"wpPreview":false,"isScriptDebug":false},"i18n":{"shareOnFacebook":"Share on Facebook","shareOnTwitter":"Share on Twitter","pinIt":"Pin it","download":"Download","downloadImage":"Download image","fullscreen":"Fullscreen","zoom":"Zoom","share":"Share","playVideo":"Play Video","previous":"Previous","next":"Next","close":"Close","a11yCarouselWrapperAriaLabel":"Carousel | Horizontal scrolling: Arrow Left & Right","a11yCarouselPrevSlideMessage":"Previous slide","a11yCarouselNextSlideMessage":"Next slide","a11yCarouselFirstSlideMessage":"This is the first slide","a11yCarouselLastSlideMessage":"This is the last slide","a11yCarouselPaginationBulletMessage":"Go to slide"},"is_rtl":false,"breakpoints":{"xs":0,"sm":480,"md":768,"lg":1025,"xl":1440,"xxl":1600},"responsive":{"breakpoints":{"mobile":{"label":"Mobile Portrait","value":767,"default_value":767,"direction":"max","is_enabled":true},"mobile_extra":{"label":"Mobile Landscape","value":880,"default_value":880,"direction":"max","is_enabled":true},"tablet":{"label":"Tablet Portrait","value":1024,"default_value":1024,"direction":"max","is_enabled":true},"tablet_extra":{"label":"Tablet Landscape","value":1200,"default_value":1200,"direction":"max","is_enabled":true},"laptop":{"label":"Laptop","value":1366,"default_value":1366,"direction":"max","is_enabled":true},"widescreen":{"label":"Widescreen","value":2400,"default_value":2400,"direction":"min","is_enabled":false}}},"version":"3.16.6","is_static":false,"experimentalFeatures":{"e_dom_optimization":true,"e_optimized_assets_loading":true,"additional_custom_breakpoints":true,"landing-pages":true},"urls":{"assets":"https:\/\/wpdemo.archiwp.com\/engitech\/wp-content\/plugins\/elementor\/assets\/"},"swiperClass":"swiper-container","settings":{"page":[],"editorPreferences":[]},"kit":{"active_breakpoints":["viewport_mobile","viewport_mobile_extra","viewport_tablet","viewport_tablet_extra","viewport_laptop"],"global_image_lightbox":"yes","lightbox_enable_counter":"yes","lightbox_enable_fullscreen":"yes","lightbox_enable_zoom":"yes","lightbox_enable_share":"yes","lightbox_title_src":"title","lightbox_description_src":"description"},"post":{"id":2274,"title":"Engitech%20%E2%80%93%20IT%20Solutions%20Demo%20WordPress%20Theme","excerpt":"","featuredImage":false}};
		/* ]]> */
		</script>
		<script src="wp-content/cache/min/4/4f7bad3b53aa7c6c52f9e36b3566286c.js" data-minify="1" defer></script>
		
		<script>window.lazyLoadOptions=[{elements_selector:"img[data-lazy-src],.rocket-lazyload",data_src:"lazy-src",data_srcset:"lazy-srcset",data_sizes:"lazy-sizes",class_loading:"lazyloading",class_loaded:"lazyloaded",threshold:300,callback_loaded:function(element){if(element.tagName==="IFRAME"&&element.dataset.rocketLazyload=="fitvidscompatible"){if(element.classList.contains("lazyloaded")){if(typeof window.jQuery!="undefined"){if(jQuery.fn.fitVids){jQuery(element).parent().fitVids()}}}}}},{elements_selector:".rocket-lazyload",data_src:"lazy-src",data_srcset:"lazy-srcset",data_sizes:"lazy-sizes",class_loading:"lazyloading",class_loaded:"lazyloaded",threshold:300,}];window.addEventListener('LazyLoad::Initialized',function(e){var lazyLoadInstance=e.detail.instance;if(window.MutationObserver){var observer=new MutationObserver(function(mutations){var image_count=0;var iframe_count=0;var rocketlazy_count=0;mutations.forEach(function(mutation){for(var i=0;i<mutation.addedNodes.length;i++){if(typeof mutation.addedNodes[i].getElementsByTagName!=='function'){continue}
		if(typeof mutation.addedNodes[i].getElementsByClassName!=='function'){continue}
		images=mutation.addedNodes[i].getElementsByTagName('img');is_image=mutation.addedNodes[i].tagName=="IMG";iframes=mutation.addedNodes[i].getElementsByTagName('iframe');is_iframe=mutation.addedNodes[i].tagName=="IFRAME";rocket_lazy=mutation.addedNodes[i].getElementsByClassName('rocket-lazyload');image_count+=images.length;iframe_count+=iframes.length;rocketlazy_count+=rocket_lazy.length;if(is_image){image_count+=1}
		if(is_iframe){iframe_count+=1}}});if(image_count>0||iframe_count>0||rocketlazy_count>0){lazyLoadInstance.update()}});var b=document.getElementsByTagName("body")[0];var config={childList:!0,subtree:!0};observer.observe(b,config)}},!1)
		</script>
		<script data-no-minify="1" async src="wp-content/plugins/wp-rocket/assets/js/lazyload/17.8.3/lazyload.min.js"></script>
		
		<style id='wp-emoji-styles-inline-css' type='text/css'>
			.elementor-2274 .elementor-element.elementor-element-f8ce257 {
			transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
			margin-top: 0px !important;
			}

			.entry-content {
				padding: 0;
			}

			a:visited {
				color: #56c4e7;
			}

			.scheme_dark, body.scheme_dark {
				--theme-color-bg_color: #181c2e !important;
				--theme-color-bd_color: #1c2030 !important;
				--theme-color-alter_bg_color: #181c2e !important;
				--theme-color-alter_bg_hover: #1f2333 !important;
				--theme-color-alter_bd_color: #242836 !important;
				--theme-color-alter_bd_hover: #2c2f3b !important;
			}

			.elementor-18349 .elementor-element.elementor-element-bb31028:not(.elementor-motion-effects-element-type-background) > .elementor-column-wrap, .elementor-18349 .elementor-element.elementor-element-bb31028 > .elementor-column-wrap > .elementor-motion-effects-container > .elementor-motion-effects-layer {
    			background-color: #181c2e;
			}

			.elementor-18349 .elementor-element.elementor-element-0ce8e8e > .elementor-widget-container {
    			background-color: #181c2e;
			}

			.elementor-18349 .elementor-element.elementor-element-dc197d3 > .elementor-widget-container {
				background-color: #181c2e;
			}

			.projects-style-2 .projects-box .portfolio-info {
				background: #081f56 !important;
			}

			.slick-dots li.slick-active button:before {
				color: #081f56;
			}

			.project-slider .projects-box .portfolio-info h5 {
				font-size: 15px;
			}

			.projects-style-2 .projects-box .portfolio-info .portfolio-cates {
				font-size: 10px;
			}

			.elementor-18349 .elementor-element.elementor-element-63da9e5:not(.elementor-motion-effects-element-type-background) > .elementor-column-wrap, .elementor-18349 .elementor-element.elementor-element-63da9e5 > .elementor-column-wrap > .elementor-motion-effects-container > .elementor-motion-effects-layer {
				background-position: center right !important;
			}

			.n7_golf_club_inline_627885254 {
				background-image: url(images/image-30-copyright-890x664.jpg);
			}

			.n7_golf_club_inline_346020728 {
				background-image: url(images/image-31-copyright-890x664.jpg);
			}

			.n7_golf_club_inline_624936568 {
				background-image: url(images/image-32-copyright-890x664.jpg);
			}

			@media (max-width: 767px) {
				.elementor-18349 .elementor-element.elementor-element-b0d9b41 > .elementor-element-populated.elementor-column-wrap {
					padding: 30px !important;
				}

				.footer_wrap {
					padding: 30px !important;
				}

				
			.projects-style-2 .projects-box .portfolio-info .portfolio-cates {
				font-size: 9px;
			}
			}
		</style>
		
</body>

</html>
