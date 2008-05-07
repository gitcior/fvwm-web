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
$title          = "FVWM - Man page - FvwmIconBox";
$heading        = "FVWM - Man page - FvwmIconBox";
$link_name      = "Man page";
$link_picture   = "pictures/icons/doc_manpages";
$parent_site    = "documentation";
$child_sites    = array();
$requested_file = basename(my_get_global("PHP_SELF", "SERVER"));
$this_site      = "manpages_unstable_FvwmIconBox";

//--------------------------------------------------------------------
// load the layout file
//--------------------------------------------------------------------
if(!isset($site_has_been_loaded)) {
	$site_has_been_loaded = "true";
	include_once(sec_filename($layout_file));
	exit();
}
?>

<?php decoration_window_start("Manual page for FvwmIconBox in unstable branch (2.5.26)"); ?>

<H1>FvwmIconBox</H1>
Section: Fvwm Modules (1)<BR>Updated: 7 May 208 (2.5.26)<BR><A HREF="#index">This page contents</A>
 - <a href="<?php echo conv_link_target('./');?>">Return to main index</A><HR>


<A NAME="lbAB">&nbsp;</A>
<H2>NAME</H2>

FvwmIconBox - the fvwm icon box module
<A NAME="lbAC">&nbsp;</A>
<H2>SYNOPSIS</H2>

<B><u>FvwmIconBox</u></B> [<I>name</I>]
<P>
FvwmIconBox is spawned by fvwm, so no command line invocation will work.
<P>
<A NAME="lbAD">&nbsp;</A>
<H2>DESCRIPTION</H2>

The FvwmIconBox module provides an icon manager. The user can do
operations, like iconify and de-iconify, for each icon shown in the
module via mouse and keyboard.
<P>
<A NAME="lbAE">&nbsp;</A>
<H2>COPYRIGHTS</H2>

The FvwmIconBox program is original work of Nobutaka Suzuki.
<P>
Copyright 1994, Nobutaka Suzuki. No guarantees or warranties or anything
are provided or implied in any way whatsoever. Use this program at your
own risk. Permission to use this program for any purpose is given,
as long as the copyright is kept intact.
<P>
<P>
<A NAME="lbAF">&nbsp;</A>
<H2>INITIALIZATION</H2>

During initialization, <I>FvwmIconBox</I> gets config info from <B><a href="<?php echo conv_link_target('./fvwm.php');?>">fvwm</a></B>'s
module configuration database (see
<I><a href="<?php echo conv_link_target('./fvwm.php');?>">fvwm</a></I>(1),

section
<B>MODULE COMMANDS</B>).

<P>
If the FvwmIconBox executable is linked to another name, i.e. ln -s
FvwmIconBox MoreIconBox, then another module called MoreIconBox can be
started, with a completely different configuration than FvwmIconBox,
simply by changing the keyword  FvwmIconBox to MoreIconBox. This way
multiple clutter-reduction programs can be used.
<P>
<A NAME="lbAG">&nbsp;</A>
<H2>INVOCATION</H2>

FvwmIconBox can be invoked by binding the action 'Module
FvwmIconBox' to a menu or key-stroke in the .fvwm2rc file.
Fvwm will search directory specified in the ModulePath configuration
option to attempt to locate FvwmIconBox.
<P>
<A NAME="lbAH">&nbsp;</A>
<H2>CONFIGURATION OPTIONS</H2>

FvwmIconBox shows icons only if NoIcon is applied. Note that the
NoIcon attribute should be set after the Icon attribute specification.
Otherwise the icon-box module might become nothing but an empty-box
module. The module reads the same .fvwm2rc file as fvwm reads when it
starts up, and looks for lines as listed below:
<P>
<DL COMPACT>
<DT>*FvwmIconBox: Fore <I>color</I><DD>
Tells the module to use <I>color</I> instead of white for the window
foreground. This option affects only the foreground color of
background_bitmap specified in *FvwmIconBox: Pixmap option described
below.
<P>
<DT>*FvwmIconBox: Colorset <I>colorset</I><DD>
Tells the module to use colorset (See FvwmTheme) in place of Fore and
Back.
<P>
<DT>*FvwmIconBox: IconColorset <I>colorset</I><DD>
Tells the module to use colorset (See FvwmTheme) in place of IconFore
and IconBack.
<P>
<DT>*FvwmIconBox: IconHiColorset <I>colorset</I><DD>
Tells the module to use colorset (See FvwmTheme) in place of IconHiFore
and IconHiBack.
<P>
<DT>*FvwmIconBox: Back <I>color</I><DD>
Tells the module to use <I>color</I> instead of black for the window
background.
<P>
<DT>*FvwmIconBox: IconFore <I>color</I><DD>
Tells the module to use <I>color</I> instead of black for non-selected
icon text.
<P>
<DT>*FvwmIconBox: IconBack <I>color</I><DD>
Tells the module to use <I>color</I> instead of white for the
non-selected icon background.
<P>
<DT>*FvwmIconBox: IconHiFore <I>color</I><DD>
Tells the module to use <I>color</I> instead of black for selected icon
text.
<P>
<DT>*FvwmIconBox: IconHiBack <I>color</I><DD>
Tells the module to use <I>color</I> instead of white for the selected
icon background.
<P>
<DT>*FvwmIconBox: Pixmap <I>pixmap</I><DD>
Tells the module to use <I>pixmap</I> for the window background_pixmap.
<P>
<DT>*FvwmIconBox: Font <I>fontname</I><DD>
Tells the module to use <I>fontname</I> instead of fixed for text.
<P>
<DT>*FvwmIconBox: SortIcons <I>option</I><DD>
Tells the module to sort all icons in the icon box in alphabetical order.
<I>option</I> can be <I>WindowName</I>, <I>IconName</I>, <I>ResClass</I>,
and <I>ResName</I>. For example, specifying <I>ResClass</I> means that
icons are sorted by using their resource-class strings. If
<I>option</I> is <I>ResClass</I> or <I>ResName</I>, an icon having no
XA_WM_CLASS property is considered to be the &quot;smallest&quot; element.
<P>
<DT>*FvwmIconBox: Padding <I>number</I><DD>
Specifies the number of pixels between icons. The default value is 5.
<P>
<DT>*FvwmIconBox: SBWidth <I>number</I><DD>
Specifies the width of horizontal and vertical scrollbars. The default
value is 9.
<P>
<DT>*FvwmIconBox: Placement <I>primary</I> <I>secondary</I><DD>
Specifies icon placement policy. <I>primary</I> and <I>secondary</I> can
be <I>Top</I>, <I>Bottom</I>, <I>Left</I> and <I>Right</I>. The following
eight combinations are available:
<PRE>

<I>primary</I>      <I>secondary</I>

 Left         Top
 Left         Bottom
 Right        Top
 Right        Bottom
 Top          Left
 Top          Right
 Bottom       Left
 Bottom       Right

</PRE>

<B></B><I>Top</I>:

Icons are placed from top to bottom.
<P>
<B></B><I>Bottom</I>:

Icons are placed from bottom to top.
<P>
<B></B><I>Left</I>:

Icons are placed from left to right.
<P>
<B></B><I>Right</I>:

Icons are placed from right to left.
<P>
For example, when the placement is &quot;Left Top&quot;, icons are placed from
left to right, and new rows are added from top to bottom. The default
vale is &quot;Left Bottom&quot;.
<P>
<DT>*FvwmIconBox: UseSkipList<DD>
Tells FvwmIconBox to not show the windows that are listed on a WindowListSkip
line in the configuration file.
<P>
<DT>*FvwmIconBox: Lines<DD>
Specifies the number of icons placed in a line. If <I>primary</I> is
Left or Right, this value specifies the number of columns.
If <I>primary</I> is Top or Bottom, this value specifies the number of
rows. For example, seven icons are placed in a row if
*FvwmIconBox: Lines is 7 and *FvwmIconBox: Placement is &quot;Left Top&quot;.
The default value is 6.
<P>
<DT>*FvwmIconBox: HideSC <I>direction</I><DD>
Specifies the un-displayed scroll bar . <I>Direction</I> can be
either <I>Horizontal</I> or <I>Vertical</I>.
<P>
<DT>*FvwmIconBox: Geometry <I>&lt;width&gt;x&lt;height&gt;{+-}&lt;X&gt;{+-}&lt;Y&gt;</I><DD>
Specifies the location and/or size of FvwmIconBox.
<I>width</I> and <I>height</I> are measured in icons, not pixels.
The default value is 6x1+0+0.
<P>
<DT>*FvwmIconBox: MaxIconSize <I>&lt;width&gt;x&lt;height&gt;</I><DD>
Specifies the maximum size of icon bitmap. A bitmap larger than
this size is clipped to this size. The default value is 48x48. In
particular, if the height is 0, then icon bitmaps are not displayed and
only icon labels are drawn.
<P>
<DT>*FvwmIconBox: Mouse <I>Button</I> <I>Action</I> <I>Response[, Response]</I><DD>
Tells the module to do <I>Response</I> when <I>Action</I> is done on
button <I>Button</I>. Available <I>Response</I>s are built-in commands
in Fvwm (e.g. Iconify, Delete, Focus) and available <I>Action</I>s
are Click and DoubleClick.
<P>
<DT>*FvwmIconBox: Key <I>Key</I> <I>Response[, Response]</I><DD>
Tells the module to do <I>Response</I> when <I>Key</I> is pressed.
Available <I>Response</I>s are, besides Fvwm built-in commands, the
following six FvwmIconBox built-in commands: <I>Next</I>, <I>Prev</I>,
<I>Left</I>, <I>Right</I>, <I>Up</I>, and <I>Down</I>.
<P>
<B></B><I>Next</I>:

Change the hilighted icon to the next.
<P>
<B></B><I>Prev</I>:

Change the hilighted icon to the previous.
<P>
<B></B><I>Left</I>:

Move the slider of the horizontal scrollbar to left. Icons move
to right accordingly.
<P>
<B></B><I>Right</I>:

Move the slider of the horizontal scrollbar to right. Icons move
to left accordingly.
<P>
<B></B><I>Up</I>:

Move the slider of the vertical scrollbar to up. Icons move to
down accordingly.
<P>
<B></B><I>Down</I>:

Move the slider of the vertical scrollbar to down. Icons move to
up accordingly.
<P>
<DT>*FvwmIconBox: <I>windowname</I> <I>bitmap-file</I><DD>
Specifies the bitmap to be displayed in the icon box for <I>windowname</I>.
This option &quot;overrides&quot; bitmap files specified in Style command.
<I>Windowname</I> can be window name, class name, or resource name.
<I>Windowname</I>  can contain &quot;*&quot; and &quot;?&quot; like Fvwm configuration
file. The <I>bitmap-file</I> is either  the full  path name to a bitmap
file, or a file in the ImagePath. If <I>bitmap-file</I> is
specified to be &quot;-&quot;, the icon for a window corresponding to
<I>windowname</I> is not shown in the icon box.
<P>
<DT>*FvwmIconBox: SetWMIconSize<DD>
Tells the module to set XA_WM_ICON_SIZE property of the root window
at the size which the module want icon windows to have. If you show
icon windows on not the root window but the module, it would be
better to specify this option.
<P>
<DT>*FvwmIconBox: HilightFocusWin<DD>
Tells the module to hilight the icon of the window which has the
keyboard focus. The fore/back colors of the hilighted icon are those
specified in the *FvwmIconBox: IconHiFore and *FvwmIconBox: IconHiBack
commands, respectively.
<P>
<DT>*FvwmIconBox: Resolution <I>resolution</I><DD>
If <I>resolution</I> is Desk, then the module shows only the icons on
the current desk.  Currently, Desk is the only value <I>resolution</I>
can take :)
<P>
<DT>*FvwmIconBox: FrameWidth <I>width1</I> <I>width2</I><DD>
Specifies the frame-width of the module. <I>Width1</I> corresponds to
the width from the outer-border to the scroll-bar, and,  <I>width2</I>
corresponds to the width from the scroll-bar to the internal-window
displaying icons. The default values are 8 and 6, respectively.
<P>
<DT>*FvwmIconBox: NoIconAction <I>action</I><DD>
Tells FvwmIconBox to do <I>action</I> is when a NoIcon style window is
iconified or de-iconified. Relevant coordinates are appended to <I>action</I> so
that the icon can be traced to an FvwmIconBox button. An example action
is &quot;*FvwmIconBox: NoIconAction SendToModule FvwmAnimate animate&quot;. A blank or null
action turns this feature off.
<P>
<DT>*FvwmIconBox: NoIconifiedParentheses<DD>
Tells FvwmIconBox to not enclose the title of an iconified window within
parantheses.
<P>
<DT>*FvwmIconBox: NormalTitleRelief <I>num</I><DD>
Sets the width in pixels of the relief that is put around icon titles for
windows that are not iconified. The default if this option is not specified is
2 pixels.
<P>
<DT>*FvwmIconBox: IconifiedTitleRelief <I>num</I><DD>
Sets the width in pixels of the relief that is put around icon titles for
windows that are iconified. The default if this option is not specified is
2 pixels.
<P>
<DT>*FvwmIconBox: NormalTitleInvertedRelief<DD>
This option makes the relief around titles of uniconified windows to appear
pressed in. The default is a relief that makes the label look raised from
the background (unless a relief width of 0 pixels is specified, see above).
<P>
<DT>*FvwmIconBox: IconifiedTitleInvertedRelief<DD>
This option makes the relief around titles of iconified windows to appear
pressed in.
<P>
</DL>
<A NAME="lbAI">&nbsp;</A>
<H2>SAMPLE CONFIGURATION</H2>

The following are excepts from a .fvwm2rc file which describe
FvwmIconBox initialization commands:
<PRE>

############################################################
# Note that icons are shown in the module
#    only if NoIcon attribute is applied.
Style   &quot;*&quot;     NoIcon

############################################################
*FvwmIconBox: IconBack    #cfcfcf
*FvwmIconBox: IconHiFore  black
*FvwmIconBox: IconHiBack  LightSkyBlue
*FvwmIconBox: Back        #5f9ea0
#*FvwmIconBox: Fore       blue
*FvwmIconBox: Geometry    5x1+0+0
*FvwmIconBox: MaxIconSize 64x38
*FvwmIconBox: Font        -adobe-helvetica-medium-r-*-*-12-*-*-*-*-*-*-*
*FvwmIconBox: SortIcons   IconName
#*FvwmIconBox: SortIcons  ResClass
*FvwmIconBox: Padding     4
*FvwmIconBox: FrameWidth  9 7
*FvwmIconBox: Lines       10
*FvwmIconBox: SBWidth     11
*FvwmIconBox: Placement   Left Top
*FvwmIconBox: Pixmap      fvwm.xpm
#*FvwmIconBox: HideSC     Horizontal
*FvwmIconBox: SetWMIconSize
*FvwmIconBox: HilightFocusWin
#*FvwmIconBox: Resolution Desk

*FvwmIconBox: NoIconAction SendToModule FvwmAnimate animate

#
# mouse bindings
#
*FvwmIconBox: Mouse       1       Click           RaiseLower
*FvwmIconBox: Mouse       1       DoubleClick     Iconify
*FvwmIconBox: Mouse       2       Click           Iconify -1, Focus
*FvwmIconBox: Mouse       3       Click           Module FvwmIdent
#
# Key bindings
#
*FvwmIconBox: Key         r       RaiseLower
*FvwmIconBox: Key         space   Iconify
*FvwmIconBox: Key         d       Close
#
# FvwmIconBox built-in functions
#
*FvwmIconBox: Key         n       Next
*FvwmIconBox: Key         p       Prev
*FvwmIconBox: Key         h       Left
*FvwmIconBox: Key         j       Down
*FvwmIconBox: Key         k       Up
*FvwmIconBox: Key         l       Right
#
# Icon file specifications
#
# Mostly, you don't have to specify icon files, as FvwmIconBox now
# reads icon files specified in Style commands.
#
*FvwmIconBox:  &quot;Fvwm*&quot;  -

</PRE>

<P>
<A NAME="lbAJ">&nbsp;</A>
<H2>AUTHOR</H2>

Nobutaka Suzuki (<A HREF="mailto:nobuta-s@is.aist-nara.ac.jp">nobuta-s@is.aist-nara.ac.jp</A>).
<P>
<P>

<HR>
<A NAME="index">&nbsp;</A><H2>Index</H2>
<DL>
<DT><A HREF="#lbAB">NAME</A><DD>
<DT><A HREF="#lbAC">SYNOPSIS</A><DD>
<DT><A HREF="#lbAD">DESCRIPTION</A><DD>
<DT><A HREF="#lbAE">COPYRIGHTS</A><DD>
<DT><A HREF="#lbAF">INITIALIZATION</A><DD>
<DT><A HREF="#lbAG">INVOCATION</A><DD>
<DT><A HREF="#lbAH">CONFIGURATION OPTIONS</A><DD>
<DT><A HREF="#lbAI">SAMPLE CONFIGURATION</A><DD>
<DT><A HREF="#lbAJ">AUTHOR</A><DD>
</DL>
<HR>
This document was created by
<A HREF="/cgi-bin/man/man2html">man2html</A>,
using the manual pages.<BR>
Time: 07:25:47 GMT, May 07, 2008


<?php decoration_window_end(); ?>

<!-- Automatically generated by manpages2php on 07-May-2008 -->
