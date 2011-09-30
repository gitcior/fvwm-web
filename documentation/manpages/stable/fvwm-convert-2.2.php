<?php
//--------------------------------------------------------------------
//-  File          : documentation/manpages/template.php
//-  Project       : FVWM Home Page
//-  Programmer    : Uwe Pross
//--------------------------------------------------------------------

// This is an autogenerated file, use manpages2php to create it.

//--------------------------------------------------------------------
// this manpages should not appear in the navigation structure
// so we hide its contents from navgen
//--------------------------------------------------------------------
if(isset($navigation_check)) return;

$rel_path = "../../..";

//--------------------------------------------------------------------
// load some global definitions
//--------------------------------------------------------------------
include_once("$rel_path/definitions.inc");

//--------------------------------------------------------------------
// Site definitions
//--------------------------------------------------------------------
$title          = "FVWM - Man page - fvwm-convert-2.2";
$heading        = "FVWM - Man page - fvwm-convert-2.2";
$link_name      = "Man page";
$link_picture   = "pictures/icons/doc_manpages";
$parent_site    = "documentation";
$child_sites    = array();
$requested_file = basename(my_get_global("PHP_SELF", "SERVER"));
$this_site      = "manpages_stable_fvwm-convert-2.2";

//--------------------------------------------------------------------
// load the layout file
//--------------------------------------------------------------------
if(!isset($site_has_been_loaded)) {
	$site_has_been_loaded = "true";
	include_once(sec_filename($layout_file));
	exit();
}
?>

<?php decoration_window_start("Manual page for fvwm-convert-2.2 in stable branch (2.6.4)"); ?>

<H1>fvwm-convert-2.2</H1>
Section: Fvwm Modules (1)<BR>Updated: (not released yet) (2.6.4)<BR><A HREF="#index">This page contents</A>
 - <a href="<?php echo conv_link_target('./');?>">Return to main index</A><HR>

<A NAME="lbAB">&nbsp;</A>
<H2>NAME</H2>

fvwm-convert-2.2 - convert fvwm 1.xx configuration file to fvwm 2.xx style
<A NAME="lbAC">&nbsp;</A>
<H2>SYNOPSIS</H2>

<B><u>fvwm-convert-2.2</u></B>

[<I>source</I>]

[<I>dest</I>]

<A NAME="lbAD">&nbsp;</A>
<H2>DESCRIPTION</H2>

<B><u>fvwm-convert-2.2</u></B>

is a simple program that tries to convert an fvwm 1.xx configuration
file into an fvwm 2.xx compatible format.  It is not perfect,
especially with regards to Mouse and Key commands, but it provides a
basically-working <I>.fvwm2rc</I> file which can be further modified at
leisure.
<P>

By default, the program will convert <I>~/.fvwmrc</I>, saving the
results in <I>~/.fvwm2rc</I>.  Different source and destination files
may be given, with a destination of `-' meaning standard output.  If
the destination file already exists, it will be backed up first to
<I>~/.fvwm2rc.bak</I> (with whatever the destination file is called
replacing <I>~/.fvwm2rc</I>).
<A NAME="lbAE">&nbsp;</A>
<H2>COMPATIBILITY</H2>

In the past this utility was called
<I>fvwmrc_convert</I>.

<A NAME="lbAF">&nbsp;</A>
<H2>AUTHOR</H2>

This manual page was written by Julian Gilbey &lt;<A HREF="mailto:jdg@debian.org">jdg@debian.org</A>&gt;.
<P>

<HR>
<A NAME="index">&nbsp;</A><H2>Index</H2>
<DL>
<DT><A HREF="#lbAB">NAME</A><DD>
<DT><A HREF="#lbAC">SYNOPSIS</A><DD>
<DT><A HREF="#lbAD">DESCRIPTION</A><DD>
<DT><A HREF="#lbAE">COMPATIBILITY</A><DD>
<DT><A HREF="#lbAF">AUTHOR</A><DD>
</DL>
<HR>
This document was created by
<A HREF="/cgi-bin/man/man2html">man2html</A>,
using the manual pages.<BR>
Time: 18:21:01 GMT, September 30, 2011


<?php decoration_window_end(); ?>

<!-- Automatically generated by manpages2php on 30-Sep-2011 -->
