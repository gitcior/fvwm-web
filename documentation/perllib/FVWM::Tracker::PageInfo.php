<?php
//--------------------------------------------------------------------
//-  File          : documentation/manpages/template.php
//-  Project       : FVWM Home Page
//-  Programmer    : Uwe Pross
//--------------------------------------------------------------------

// This is an autogenerated file, use perllib2php to create it.

//--------------------------------------------------------------------
// this manpages should not appear in the navigation structure
// so we hide its contents from navgen
//--------------------------------------------------------------------
if(isset($navigation_check)) return;

$rel_path = "./../..";

//--------------------------------------------------------------------
// load some global definitions
//--------------------------------------------------------------------
include_once("$rel_path/definitions.inc");

//--------------------------------------------------------------------
// Site definitions
//--------------------------------------------------------------------
$title          = "FVWM - Perl library - FVWM::Tracker::PageInfo";
$heading        = "FVWM - Perl library - FVWM::Tracker::PageInfo";
$link_name      = "Perl library";
$link_picture   = "pictures/icons/doc_manpages";
$parent_site    = "documentation";
$child_sites    = array();
$requested_file = basename(my_get_global("PHP_SELF", "SERVER"));
$this_site      = "manpages";

//--------------------------------------------------------------------
// load the layout file
//--------------------------------------------------------------------
if(!isset($site_has_been_loaded)) {
	$site_has_been_loaded = "true";
	if(isset($layout)) {
		$file = "$rel_path/layout_$layout.inc";
		if (file_exists($file)) $layout_file = $file;
	}
	include_once(sec_filename($layout_file));
	exit();
}
?>

<?php decoration_window_start("Manual page for FVWM::Tracker::PageInfo in unstable branch (2.5.8)"); ?>

<H1>FVWM::Tracker::PageInfo</H1>
Section: FVWM Perl library (3)<BR>Updated: 2003-10-26<BR>Source: <a href="ftp://ftp.fvwm.org/pub/fvwm/devel/sources/perllib/FVWM/Tracker/PageInfo.pm">FVWM/Tracker/PageInfo.pm</a><br>
<A HREF="#index">This page contents</A>
 - <a href="./">Return to main index</A><HR>

<A NAME="lbAB">&nbsp;</A>
<H2>DESCRIPTION</H2>

<A NAME="ixAAC"></A>
This is a subclass of <B><a href="<?php echo conv_link_target('./FVWM::Tracker.php');?>">FVWM::Tracker</a></B> that enables to read the current
page information.
<P>

This tracker defines the following observables:
<P>

<blockquote><pre>    &quot;desk/page changed&quot;,
    &quot;desk only changed&quot;,
    &quot;page only changed&quot;,</pre></blockquote>
<A NAME="lbAC">&nbsp;</A>
<H2>SYNOPSYS</H2>

<A NAME="ixAAD"></A>
Using <B><a href="<?php echo conv_link_target('./FVWM::Module.php');?>">FVWM::Module</a></B> <TT>$module</TT> object:
<P>

<blockquote><pre>    my $pageTracker = $module-&gt;track(&quot;PageInfo&quot;);
    my $pageHash = $pageTracker-&gt;data;
    my $currDesk = $pageHash-&gt;{'desk_n'};</pre></blockquote>
<A NAME="lbAD">&nbsp;</A>
<H2>OVERRIDDEN METHODS</H2>

<A NAME="ixAAE"></A>
<DL COMPACT>
<DT><B>data</B><DD>
<A NAME="ixAAF"></A>
Returns hash ref representing the current page/desk, with the following keys:


<P>


<blockquote><pre>    desk_n
    page_nx
    page_ny
    vp_x
    vp_y
    vp_width
    vp_height</pre></blockquote>
<DT><B>dump</B><DD>
<A NAME="ixAAG"></A>
Works similarly to <B>data</B>, but returns 2 debug lines representing
the current page data in the human readable format.
</DL>
<A NAME="lbAE">&nbsp;</A>
<H2>AUTHOR</H2>

<A NAME="ixAAH"></A>
Mikhael Goikhman &lt;<A HREF="mailto:migo@homemail.com">migo@homemail.com</A>&gt;.
<A NAME="lbAF">&nbsp;</A>
<H2>SEE ALSO</H2>

<A NAME="ixAAI"></A>
For more information, see <a href="<?php echo conv_link_target('./FVWM::Module.php');?>">FVWM::Module</a> and <a href="<?php echo conv_link_target('./FVWM::Tracker.php');?>">FVWM::Tracker</a>.
<P>

<HR>
<A NAME="index">&nbsp;</A><H2>Index</H2>
<DL>
<DT><A HREF="#lbAB">DESCRIPTION</A><DD>
<DT><A HREF="#lbAC">SYNOPSYS</A><DD>
<DT><A HREF="#lbAD">OVERRIDDEN METHODS</A><DD>
<DT><A HREF="#lbAE">AUTHOR</A><DD>
<DT><A HREF="#lbAF">SEE ALSO</A><DD>
</DL>
<HR>
This document was created by
man2html,
using the manual pages.<BR>
Time: 00:49:03 GMT, November 01, 2003


<?php decoration_window_end(); ?>

<!-- Automatically generated by perllib2php on 01-Nov-2003 -->
