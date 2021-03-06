<?php
//--------------------------------------------------------------------
//-  File          : @FILENAME@
//-  Project       : FVWM Home page
//-  Programmer    : Logo Competitor
//--------------------------------------------------------------------

//--------------------------------------------------------------------
// check if we should stop here
//--------------------------------------------------------------------
if(isset($navigation_check)) return;

$rel_path = "../../..";

//--------------------------------------------------------------------
// load some global definitions
//--------------------------------------------------------------------
include_once($rel_path."/definitions.inc");

//--------------------------------------------------------------------
// Site definitions
//--------------------------------------------------------------------
$title          = "FVWM - Logo Competition - Phil Harper logos";
$link_name      = "Logo Competition";
$link_picture   = "pictures/icons/logo_competition";
$parent_site    = "news";
$child_sites    = array();
$requested_file = basename(my_get_global("PHP_SELF", "SERVER"));
$this_site      = "logo_competition";

//--------------------------------------------------------------------
// load the layout file
//--------------------------------------------------------------------
if(!isset($site_has_been_loaded)) {
	$site_has_been_loaded = "true";
	include_once(sec_filename($layout_file));
	exit();
}

if( file_exists("./../color_select.inc") ) include_once("./../color_select.inc");
?>

<?php decoration_window_start('By
<a href="http://www.biggyp.tk/">Phil Harper</a>', "100%", ""); 
// From: "Phil Harper" <philharper@hotmail.com>
?>

    <p>I've got some submissions for the contest, tiger might get resubmitted
      when I've worked out how to draw stripes on the tale that don't look crap. :)
    </p>
<p class=centered>
<img src="feeble.png" width="199" height="191" align="middle">
<img src="tiger.png" width="249" height="231" align="middle"></p>

<p><i>[update]</i> After much GIMPing around I've got a pretty good fake fur
look, more realistic ears and half decent tail, enjoy.</p>

<p class=centered>
<img src="fakefur.png" width="175" height="175" align="middle">
<img src="tiger2.png" width="270" height="246" align="middle"></p>

<p>Plain versions.</p>

<p class=centered>
<img src="plain.png" width="174" height="177" align="middle">
<img src="black.png" width="174" height="177" align="middle"></p>

<p>This seems to lend itself to wallpaper more than a logo, hmmm, I might try
that later...

Disclaimer: 100% Synthetic, no tigers were harmed during the production of
this logo. ;)</p>

<p class=centered>
<img src="tigerskin5.png" width="399" height="176" align="middle"></p>

<p>hi, here's yet another logo design, it's done entirely in SVG and it's
really the first time i've used Sodipodi for anything i've shown to
people(that a good enough excuse?). i thought i'd better do something more
logo'ish since the competition is getting very impressive.</p>

<p class=centered>
<img src="fvwmpower2.png" width="485" height="304" align="middle"></p>

<p class=centered>
<img src="fvwmboxes3.png" width="660" height="500" align="middle"></p>

<p class=centered>
<img src="fvwmboxes4bw.png" width="581" height="151" align="middle"></p>

<p class=centered>
<img src="fvwmbevel.png" align="middle">
</p>

<p class=centered>
<img src="fvwmvert.png" align="middle">
</p>

<p class=centered>
<img src="fvwmporthole.png" align="middle">
</p>



<p>More FVWM related art by this <a href="http://gug.sunsite.dk/gallery.php?artist=123">artist</a>:
<ul>
  <li>
    <a href="http://fvwm-themes.sf.net/backgrounds/">
    <img src="TigerSkin_FVWM_Wallpaper-thumb.png" align="middle">
    TigerSkin FVWM Wallpaper (GPL'd source)
    </a>
  <li>
    <a href="http://gug.sunsite.dk/pictures/1051903001.png">
    <img src="TigerSkin_FVWM_Black_Wallpaper-thumb.png" align="middle">
    TigerSkin FVWM Wallpaper (Black Stripes)
    </a>
  <li>
    <a href="http://www.deviantart.com/deviation/1814563">
    <img src="SynthSkin_FVWM_Wallpaper-thumb.png" align="middle">
    SynthSkin FVWM Wallpaper on deviantART
    </a>
  <li>
    <a href="http://gug.sunsite.dk/pictures/1051839576.png">
    <img src="SynthSkin_Variation_Wallpaper-thumb.png" align="middle">
    Another Skin Variation Wallpaper
    </a>
</ul>
</p>

<?php decoration_window_end(); ?>

<p>Return to <a href="<?php echo conv_link_target('../../logos_new.php');?>">index</a>.</p>
