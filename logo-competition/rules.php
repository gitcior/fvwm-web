<?php
//--------------------------------------------------------------------
//-  File          : @FILENAME@
//-  Project       : FVWM Home page
//-  Programmer    : Logo Competitor
//-  Last modified : <08.04.2003 22:32:52 logo>
//--------------------------------------------------------------------

$rel_path = "..";

//--------------------------------------------------------------------
// load some global definitions
//--------------------------------------------------------------------
include("$rel_path/definitions.inc");

//--------------------------------------------------------------------
// Site definitions
//--------------------------------------------------------------------
$title          = "FVWM - Logo Competition Rules";
$link_name      = "Logo Competition Rules";
$link_picture   = "pictures/icons/default";
$parent_site    = "news";
$child_sites    = array();
$requested_file = basename(my_get_global("PHP_SELF", "SERVER"));
$this_site      = "logo_competition_rules";

//--------------------------------------------------------------------
// check if we should stop here
//--------------------------------------------------------------------
if (strlen("$navigation_check") > 0) return;

//--------------------------------------------------------------------
// load the layout file
//--------------------------------------------------------------------
if (strlen("$site_has_been_loaded") == 0) {
	$site_has_been_loaded = "true";
	if (strlen($layout) > 0) {
		$file = "$rel_path/layout_$layout.inc";
		if (file_exists($file)) $layout_file = $file;
	}
	include(sec_filename($layout_file));
	exit();
}
?>

<?php decoration_window_start("Competition Rules"); ?>
<h1>The FVWM Logo Competition</h1>

<p>FVWM stands for F? Virtual Window Manager (see FAQ to get an idea
what F? may mean).  Historically, fvwm had no good logo, but this
is going to be changed.  With your help.

<h2>Competition Schedule</h2>

<table cellspacing=5 border=1>
<tr>
	<th>Date
		<th>Description
<tr>
	<td>15-Apr-2003 / 10-Aug-2003
		<td>Logo contributions are accepted.
<tr>
	<td>15-Aug-2003 / 30-Aug-2003
		<td>The winning logo is elected.
<tr>
	<td>31-Aug-2003
		<td>The winning logo is proclaimed.
</table>

<h2>How your logo should look like</h2>

<ul>
	<li>The name "fvwm" must appear in the logo, without a version
	number (i.e. *not* as "fvwm2").

	<li>We want to use your logo in different formats.  The actual size
	will depend on the logo.
	<ul>
		<li>On the fvwm web site (about 200x120, full colour)
		<li>As a banner for fvwm startup (about 300x180, 256 colours)
		<li>As a banner with only black and white (about 300x180)
		<li>Running up the left side of a menu (about 24x64, low color)
	</ul>

	<li>You do not need to make all these different images yourself.
	Just draw a big image with all the colours you like and we will
	take care of the smaller versions.  Of course you may do that
	yourself too - your choice.

	<li>What you should keep in mind is that the banners will be
	converted to XPM format and put in the distribution.  They
	should look good on any background and not occupy more than 40Kb
	after compression.

	<li>Logos can be submitted in either XPM or PNG format.
</ul>

<h2>Contributing your logo</h2>

<ul>
	<li>Everybody may submit any number of logos by posting a url to the
	work or sending the images themselves as attachment (preferably
	compressed) to email address <b>fvwm-logo@lists.sf.net</b>.

	<li>The contributed logos are exhibited at
	<a href="http://fvwm.org/logo-competition/">http://fvwm.org/logo-competition/</a>

	<li>Logos not created by the submitter or logos with illegal,
	discriminating or otherwise offensive contents, at the
	discretion of the fvwm developers, can not be accepted.
</ul>

<h2>Copyrights and License</h2>

<ul>
	<li>The artist retains full copyright of his or her work.

	<li>By submitting a logo to the competition, the artist accepts that
	the logo is converted into XPM format (if necessary) and
	distributed under the terms of the GNU General Public License.
</ul>

<h2>There can be only one</h2>

<ul>
	<li>In the election phase, one voting email per person can be sent to
	<b>fvwm-logo@lists.sf.net</b>.

	<li>You can give one or no votes for each logo. The email should
	contain a list of logos for which you vote.  Give a vote for
	each logo you would enjoy to see as the official fvwm logo.

	<li>The web interface is available too.

	<li>The logo with the most votes wins.  It requires an easy email
	confirmation (using a mere reply) to disallow multiple voting.

	<li>The above voting mode is meant to determine the logo that is
	accepted by the broadest range of users and not disliked strogly
	by a large fraction of fvwm users.
</ul>

<h2>Gimme the Prize</h2>

	The prize for the new official fvwm logo is 100 Euro or the same
	amount in any other currency.

<?php decoration_window_end(); ?>