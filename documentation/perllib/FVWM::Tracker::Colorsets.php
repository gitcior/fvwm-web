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
$title          = "FVWM - Perl library - FVWM::Tracker::Colorsets";
$heading        = "FVWM - Perl library - FVWM::Tracker::Colorsets";
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
	include(sec_filename($layout_file));
	exit();
}
?>

<?php decoration_window_start("Manual page for FVWM::Tracker::Colorsets in unstable branch (2.5.8)"); ?>

<H1>FVWM::Tracker::Colorsets</H1>
Section: FVWM Perl library (3)<BR>Updated: 2003-10-26<BR>Source: <a href="ftp://ftp.fvwm.org/pub/fvwm/devel/sources/perllib/FVWM/Tracker/Colorsets.pm">FVWM/Tracker/Colorsets.pm</a><br>
<A HREF="#index">This page contents</A>
 - <a href="./">Return to main index</A><HR>

<A NAME="lbAB">&nbsp;</A>
<H2>DESCRIPTION</H2>

<A NAME="ixAAC"></A>
This is a subclass of <B><a href="<?php echo conv_link_target('./FVWM::Tracker.php');?>">FVWM::Tracker</a></B> that enables to read the colorset
definitions.
<P>

This tracker defines the following observable:
<P>

<blockquote><pre>    &quot;colorset changed&quot;</pre></blockquote>
<P>

that is notified using 2 additional parameters: colorset number and
old colorset data hash ref.
<A NAME="lbAC">&nbsp;</A>
<H2>SYNOPSYS</H2>

<A NAME="ixAAD"></A>
Using <B><a href="<?php echo conv_link_target('./FVWM::Module.php');?>">FVWM::Module</a></B> <TT>$module</TT> object:
<P>

<blockquote><pre>    my $csTracker = $module-&gt;track(&quot;Colorsets&quot;);
    my $csHash = $csTracker-&gt;data;
    my $cs2_fg = $csHash-&gt;{2}-&gt;{fg} || 'black';
    my $cs5_bg = $csTracker-&gt;data(5)-&gt;{bg} || 'gray';</pre></blockquote>
<P>

<blockquote><pre>    $csTracker-&gt;observe(sub {
        my ($module, $tracker, $data, $num, $oldHash) = @_;
        my $newHash = $data-&gt;{$num};</pre></blockquote>
<P>

<blockquote><pre>        if ($oldHash-&gt;{pixmap} == 0 &amp;&amp; $newHash-&gt;{pixmap}) {
            my $pixmapType = $newHash-&gt;{pixmap_type};
            my $pixmapName = ($tracker-&gt;PIXMAP_TYPES)[$pixmapType];
            $module-&gt;debug(&quot;Colorset: $num, Pixmap type: $pixmapName&quot;);
        }
    };</pre></blockquote>
<A NAME="lbAD">&nbsp;</A>
<H2>OVERRIDDEN METHODS</H2>

<A NAME="ixAAE"></A>
<DL COMPACT>
<DT><B>data</B> [<I>colorset-num</I>]<DD>
<A NAME="ixAAF"></A>
Returns either array ref of colorset hash refs, or one hash ref if
<I>colorset-num</I> is given. The hash keys are listed in <FONT>CS_FIELDS</FONT>, the
constant of this class.
<DT><B>dump</B> [<I>colorset-num</I>]<DD>
<A NAME="ixAAG"></A>
Works similarly to <B>data</B>, but returns debug line(s) for one or all colorsets.
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
Time: 00:48:59 GMT, November 01, 2003


<?php decoration_window_end(); ?>

<!-- Automatically generated by perllib2php on 01-Nov-2003 -->
