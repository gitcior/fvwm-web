<?php
//--------------------------------------------------------------------
//-  File          : index.php
//-  Project       : FVWM Home Page
//-  Date          : Fri Mar 14 21:32:08 2003
//-  Programmer    : Uwe Pross
//--------------------------------------------------------------------

// disabled by uwp
return;

if(!isset($rel_path)) $rel_path = "./..";

//--------------------------------------------------------------------
// load some global definitions
//--------------------------------------------------------------------
$theme = "birthday";
if(!isset($navigation_check)) include_once("$rel_path/definitions.inc");

//--------------------------------------------------------------------
// Site definitions
//--------------------------------------------------------------------
$title          = "Happy Birthday FVWM!";
$heading        = '<img src="happy_birthday3.gif" width="582" height="63" border="0" alt="Happy Birthday FVWM!">';
$link_name      = "FVWM Birthday";
$link_picture   = "pictures/icons/birthday";
$parent_site    = "news";
$child_sites    = array();
//  RBW...
//  Must be able to cope with register_globals = off.
//$requested_file = basename(my_get_global("PHP_SELF", &$_SERVER));
$requested_file = basename(my_get_global("PHP_SELF", "SERVER"));

$this_site      = "birthday";

//--------------------------------------------------------------------
// check if we should stop here
//--------------------------------------------------------------------
if(isset($navigation_check)) return;

//--------------------------------------------------------------------
// load the layout file
//--------------------------------------------------------------------
if(!isset($site_has_been_loaded)) {
  $site_has_been_loaded = "true";
  include_once(sec_filename($layout_file));
  exit();
}
?>

<?php 
decoration_window_start("Celebrate 10 years of FVWM"); 
?> 

    <img src="birthday_celebration3.gif" width="670" height="64" border="0" alt="The FVWM Birthday Celebration">

  <p>
  On the 1st of June, 1993, the first version of fvwm, venerable
  grandfather of many other window managers, first saw the light
  of day.  Robert Nation, the original author, bundled the initial
  release with rxvt, his still widely used terminal program.
  After all these years, fvwm still stands strong.
  </p>
  
  <h3>Join the fvwm birthday party!</h3>
  
    <ul>
	<li>Send your congratulations to the fvwm@fvwm.org mailing list.
	<blockquote>
	  If you are or have been a user of fvwm, please tell us when
	  you first used fvwm, how long you have been using it and
	  whether you are still using it.
	</blockquote>
      </li>
      
    <li>Learn more about <a href="<?php echo conv_link_target('../history.php');?>">fvwm's history</a> and its
	<a href="<?php echo conv_link_target('../authors/pictures/index.php');?>">authors and users</a>.</li>
      
    <li>Fvwm needs a new, shiny logo.  Participate in the fvwm logo
	competition or check out the 
	<a href="<?php echo conv_link_target('../logo-competition/index.php');?>">contributed logos</a>. 
	The best logo wins 100 Euro.</li>
      
    <li>Chat with developers and users via IRC on
	<ul>
	  <li>English channel: #fvwm on freenode
	    <blockquote>
	      See <a href="http://freenode.net/irc_servers.shtml">http://freenode.net/irc_servers.shtml</a> for a list of
	      freenode servers.
	    </blockquote>
	  </li>
          
	  <li>German channel:  +fvwm.de on <a href="irc://irc.tu-ilmenau.de/%23fvwm">IRCnet</a>
	    <blockquote>
	    See <a href="http://ircnet.org@irc.tu-ilmenau.de/all_servers/">http://ircnet.org@irc.tu-ilmenau.de/all_servers/</a> for
	      a list of IRCnet servers.
	    </blockquote>
	  </li>
	</ul>
	A good time to visit the channels is between 16:00 and
	22:00 Greenwich Mean Time
      </li>
    <li>Help us stabilize the beta code,
	try <a href="<?php echo conv_link_target('../download/');?>">2.5.7</a>.

    </ul>
    
<?php 
decoration_window_end(); 
?> 
