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
$title          = "FVWM - Man page - fvwm-convert-2.4";
$heading        = "FVWM - Man page - fvwm-convert-2.4";
$link_name      = "Man page";
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
	include_once(sec_filename($layout_file));
	exit();
}
?>

<?php decoration_window_start("Manual page for fvwm-convert-2.4 in unstable branch (2.5.8)"); ?>

<H1>FVWM-CONVERT-2.4</H1>
Section: FVWM Utilities (1)<BR>Updated: 25 April 2002<BR><A HREF="#index">This page contents</A>
 - <a href="<?php echo conv_link_target('./');?>">Return to main index</A><HR>

<A NAME="lbAB">&nbsp;</A>
<H2>NAME</H2>

<P>
fvwm-convert-2.4 - convert FVWM 2.2.x configuration file to FVWM 2.4 syntax
<A NAME="lbAC">&nbsp;</A>
<H2>SYNOPSIS</H2>

<P>
<B><u>fvwm-convert-2.4</u></B>

[<I>source</I>]

[<I>dest</I>]

<A NAME="lbAD">&nbsp;</A>
<H2>DESCRIPTION</H2>

<P>
<B><u>fvwm-convert-2.4</u></B>

converts an FVWM 2.2.x configuration file into an FVWM 2.4
compatible syntax.  It is not suitable to convert older 1.x
configuration files.  Please use
<B><a href="<?php echo conv_link_target('./fvwm-convert-2.2.php');?>">fvwm-convert-2.2</a></B>

to convert these to the 2.2.x format first.
<P>

By default,
<B><u>fvwm-convert-2.4</u></B>

converts
<I>~/.fvwm2rc,</I>

saving the results in
<I>~/.fvwm/.fvwm2rc.</I>

You must create the
<I>~/.fvwm</I>

directory before running this command.
Starting with the 2.4 release, the directory
<I>~/.fvwm</I>

is the default location for fvwm user configuration files.
Different source and destination files may be given.
If the destination file already exists, this program exits.
While the program runs it will generate a temporary file with
the same name as the destination file with the suffix &quot;.pass1&quot;
added.
<P>

<B><u>fvwm-convert-2.4</u></B>

makes the following changes:
<DL COMPACT>
<DT><B>PixmapPath/IconPath</B>

<DD>
In fvwm 2.4, the PixmapPath and IconPath commands are replaced by
the ImagePath command.  In addition, the ImagePath can be compiled into
fvwm.
<B><u>fvwm-convert-2.4</u></B>

changes the PixmapPath and IconPath commands
to ImagePath commands and removes any directories that are compiled
into fvwm.
Paths starting with a dollar sign are also removed.
<DT><B>ModulePath</B>

<DD>
In fvwm 2.4, the ModulePath is compiled into fvwm.
<B><u>fvwm-convert-2.4</u></B>

removes any ModulePath commands it finds.
If you are using your own modules, (not the ones that come with fvwm),
you will have to fix your configuration file after using
<B><u>fvwm-convert-2.4</u></B>.

<DT><B>HilightColor</B>

<DD>
In fvwm 2.4, the HighlightColor command is replaced by a Style command
using the HilightFore and HilightBack arguments.
<B><u>fvwm-convert-2.4</u></B>

makes these changes.
<DT><B>HilightColorset</B>

<DD>
In fvwm 2.4, the HighlightColorset command that was present in some of the
2.3.x beta releases is replaced by a Style command
using the HilightColorset style.
<B><u>fvwm-convert-2.4</u></B>

makes these changes.
<DT><B>WindowShadeAnimate</B>

<DD>
In fvwm 2.4, the WindowShadeAnimate command is replaced by the
WindowShadeSteps Style option.
<B><u>fvwm-convert-2.4</u></B>

makes this change.
<DT><B>WindowFont</B>

<DD>
In fvwm 2.4, the WindowFont command is replaced by a Style command
using the Font argument.
<B><u>fvwm-convert-2.4</u></B>

makes this change.
<DT><B>ColorLimit</B>

<DD>
In fvwm 2.4, the ColorLimit command is automatic.  If you have a limited
colormap, color limiting is the default.
<B><u>fvwm-convert-2.4</u></B>

removes any ColorLimit command that it finds.
<DT><B>GlobalOpts</B>

<DD>
The GlobalOpts command is converted to
<B>Style</B>

options and the
<B>BugOpts</B>

command.  Some options can not be converted automatically, though.
<DT><B>Read</B>

<DD>
Prints a message identifying any read commands found.  The files
being read may need to be converted also.
<DT><B>Placement Styles</B>

<DD>
Any of the old placement Styles found in the file can not be
converted automatically.  Instead,
<B><u>fvwm-convert-2.4</u></B>

prints a warning.  For details about the conversion, please refer to
the &quot;Window manager placement&quot; section of the fvwm man page.
<DT><B>FvwmConfig and FvwmPipe</B>

<DD>
These modules are no longer a part of the fvwm distribution.
<B><u>fvwm-convert-2.4</u></B>

prints a warning if these modules are found in the file.
<DT><B>FvwmButtons panels</B>

<DD>
The syntax of panels in FvwmButtons has changed.  The conversion
can not be done automatically.
<B><u>fvwm-convert-2.4</u></B>

prints a message when it encounters a potential panel definition.
For details about the conversion, please refer to the
&quot;CONVERTING OLD PANEL CONFIGURATIONS&quot; section of the FvwmButtons
man page.
</DL>
<A NAME="lbAE">&nbsp;</A>
<H2>BUGS</H2>

<P>
You need Perl to be installed.
<P>
<I>WindowFont</I>

and
<I>HilightColor</I>

commands embedded in functions are not found.
If you have either of these commands in functions, they are not detected.
<P>
Known bugs can be found in the fvwm bug tracking system (accessible
from the fvwm home page).
<P>
Bug reports can be sent to the fvwm-workers mailing list (see the
<I>FAQ</I>).

<P>
<A NAME="lbAF">&nbsp;</A>
<H2>AUTHOR</H2>

Dan Espen &lt;<A HREF="mailto:despen@telcordia.com">despen@telcordia.com</A>&gt;.
<P>

<HR>
<A NAME="index">&nbsp;</A><H2>Index</H2>
<DL>
<DT><A HREF="#lbAB">NAME</A><DD>
<DT><A HREF="#lbAC">SYNOPSIS</A><DD>
<DT><A HREF="#lbAD">DESCRIPTION</A><DD>
<DT><A HREF="#lbAE">BUGS</A><DD>
<DT><A HREF="#lbAF">AUTHOR</A><DD>
</DL>
<HR>
This document was created by
man2html,
using the manual pages.<BR>
Time: 00:48:09 GMT, November 01, 2003


<?php decoration_window_end(); ?>

<!-- Automatically generated by manpages2php on 01-Nov-2003 -->
