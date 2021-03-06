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
$title          = "FVWM - Man page - FvwmGtk";
$heading        = "FVWM - Man page - FvwmGtk";
$link_name      = "Man page";
$link_picture   = "pictures/icons/doc_manpages";
$parent_site    = "documentation";
$child_sites    = array();
$requested_file = basename(my_get_global("PHP_SELF", "SERVER"));
$this_site      = "manpages_stable_FvwmGtk";

//--------------------------------------------------------------------
// load the layout file
//--------------------------------------------------------------------
if(!isset($site_has_been_loaded)) {
	$site_has_been_loaded = "true";
	include_once(sec_filename($layout_file));
	exit();
}
?>

<?php decoration_window_start("Manual page for FvwmGtk in stable branch (2.6.4)"); ?>

<H1>FvwmGtk</H1>
Section: Fvwm Modules (1)<BR>Updated: (not released yet) (2.6.4)<BR><A HREF="#index">This page contents</A>
 - <a href="<?php echo conv_link_target('./');?>">Return to main index</A><HR>


<A NAME="lbAB">&nbsp;</A>
<H2>NAME</H2>

<B><u>FvwmGtk</u></B> - the fvwm GTK module
<A NAME="lbAC">&nbsp;</A>
<H2>SYNOPSIS</H2>

<B><u>FvwmGtk</u></B> is spawned by fvwm, so no command line invocation will work.
From within the<TT>&nbsp;</TT>fvwm's configuration file, <B><u>FvwmGtk</u></B> is spawned as follows:<BR>


<P>


<blockquote><PRE>Module FvwmGtk [ name ]</PRE></blockquote>
<P>



or from within an fvwm pop-up menu:


<P>


<blockquote><PRE>DestroyMenu Module-Popup
AddToMenu   Module-Popup &quot;Modules&quot; Title
AddToMenu   Module-Popup &quot;Gtk&quot; Module FvwmGtk [ name ]</PRE></blockquote>
<P>



<P>
<A NAME="lbAD">&nbsp;</A>
<H2>DESCRIPTION</H2>

The <B><u>FvwmGtk</u></B> module implements GTK-based alternatives to the
GUI elements in fvwm, namely the builtin menus and the FvwmForm dialogs.
<P>
<A NAME="lbAE">&nbsp;</A>
<H2>INVOCATION</H2>

No command line invocation is possible.
<B><u>FvwmGtk</u></B> must be invoked by the
<B><a href="<?php echo conv_link_target('./fvwm.php');?>">fvwm</a></B> window manager.
When invoked with the optional <I>name</I> argument, <I>name</I>
is used to find configuration commands and configuration files
instead of &quot;FvwmGtk&quot;.
<P>
<A NAME="lbAF">&nbsp;</A>
<H2>CONFIGURATION OPTIONS</H2>

<B><u>FvwmGtk</u></B> only has options to define the content of the menus and dialogs.
This includes the labels and pixmaps to show; configuration of the appearance
must be done through the GTK rc file mechanism.
<P>
<B><u>FvwmGtk</u></B> gets config info from <B><a href="<?php echo conv_link_target('./fvwm.php');?>">fvwm</a></B>'s module configuration
database (see
<I><a href="<?php echo conv_link_target('./fvwm.php');?>">fvwm</a></I>(1),

section
<B>MODULE COMMANDS</B>)

when it starts up.
In addition, <B><u>FvwmGtk</u></B> accepts commands from fvwm and its modules as
it runs.
<P>
If the optional <I>name</I> is used to start FvwmGtk, <I>name</I> is used
in all commands, messages, menus and forms generated by FvwmGtk and in the
configuration file name.  Unlike other fvwm modules, there is little reason
to use the optional name.
<P>
All dialogs and menus have to be defined through configuration commands
before they can be used. A dialog or menu is invoked by sending its name
to FvwmGtk. For menus, you also send the button which is to be used.


<P>


<blockquote><PRE>        SendToModule FvwmGtk menu-example 1
        SendToModule FvwmGtk dialog-example</PRE></blockquote>
<P>



<P>
<A NAME="lbAG">&nbsp;</A>
<H2>MENUS</H2>

The following commands define menus. For all arguments named &quot;label&quot;
in the following menu commands, FvwmGtk looks for embedded ampersands
in the same way fvwm does for its menus.
<P>
<DL COMPACT>
<DT>*FvwmGtk: Menu <B>name</B><DD>
Instructs <B><u>FvwmGtk</u></B> to append subsequent items to the menu named
by the argument. Note that you can &quot;reopen&quot; a menu and continue to append
to it. It is also possible to redefine a menu from scratch, see
*FvwmGtk: Destroy.
<P>
<DT>*FvwmGtk: Title <B>label</B> [ <B>icon</B> [ <B>r_label</B> ] ]<DD>
Appends a title to the currently open menu. If the optional argument
is given, it should be the name of an xpm file in the ImagePath. The
icon will appear to the left of the text. If FvwmGtk has been compiled
with imlib support, icon can of any image format imlib can read. The label
can contain an ampersand to mark the following character as an accelerator to
be underlined. Underlined accelerators work in the same way as they do in fvwm
native menus. If r_label is given, it will be right-justified.
<P>
<DT>*FvwmGtk: Item <B>label</B> <B>action</B> [ <B>icon</B> [ <B>r_label</B> ] ]<DD>
Appends an item to the currently open menu. The first argument is the
text that will appear in the item, the second argument will be sent to
fvwm when the item is activated. If the optional argument is given, it
should be the name of an xpm file in the ImagePath. The icon will appear
to the left of the text. The label can contain an ampersand
to mark the following character as an accelerator to be underlined.
Underlined accelerators work in the same way as they do in fvwm native menus.
If r_label is given, it will be right-justified.
<P>
<DT>*FvwmGtk: Submenu <B>label</B> <B>name</B> [ <B>icon</B> ]<DD>
Appends an item to the currently open menu. The first argument is the
text that will appear in the item, the second argument is the name of
the sub menu that will be opened when the item is selected. If the sub menu
doesn't exist yet, it will be created. If the optional argument is given,
it should be the name of an xpm file in the ImagePath. The icon will
appear to the left of the text. The label can contain an ampersand
to mark the following character as an accelerator to be underlined.
Underlined accelerators work in the same way as they do in fvwm native menus.
<P>
<DT>*FvwmGtk: Tearoff<DD>
Appends a special tear-off item. Activating it turns the menu into
a permanent window; activating it once more makes the menu disappear again.
<P>
</DL>
<A NAME="lbAH">&nbsp;</A>
<H2>WINDOW LISTS</H2>

<P>
Window lists are special dynamically created menus. They offer a list of all
windows managed by fvwm and send &quot;WindowListFunc&quot; back to fvwm within the
window context of the selected window. WindowListFunc is the same function
that is also used by fvwm for its builtin window list.
<P>
<DL COMPACT>
<DT>*FvwmGtk: WindowList <B>name</B> [ <B>option</B>... ]<DD>
Creates a window-list bound to <B>name</B>. The window-list will be
formatted according to the given options. Currently supported are
the following options which have the same meaning as for the fvwm's
builtin window list:
&quot;NoGeometry&quot;, &quot;NoMiniIcon&quot;, &quot;UseIconName&quot;, &quot;Desk &lt;desk&gt;&quot;, &quot;CurrentDesk&quot;,
&quot;Icons/NoIcons/OnlyIcons&quot;, &quot;Sticky/NoSticky/OnlySticky&quot;,
&quot;Normal/NoNormal/OnlyNormal&quot;, &quot;NoDeskSort&quot;, &quot;Alphabetic&quot;,
&quot;Function &lt;func&gt;&quot;.
The following options are new: &quot;Title &lt;label&gt; &lt;icon&gt; &lt;r_label&gt;&quot;.
Additionally, you can specify a name pattern to match the name or
icon name of the listed windows.
<P>
<P>
</DL>
<A NAME="lbAI">&nbsp;</A>
<H2>DIALOGS</H2>

Dialogs consist of hierarchically organized widgets. Widgets are either
composite, ie they can contain one or more other widgets, or atomic.
Composite widgets are defined by a pair of commands denoting the start
and end of the list of child widgets. Atomic widgets are defined by
single commands. Some widgets request data from the user. These are
all given names which can be used to refer to the data.
<P>
The commands for widgets have the common form:
<P>
*FvwmGtk: <I>Widget</I> <I>widget-specific args</I> [ -- <I>general-args</I> ]
<P>
where the following arguments may be specified after the double hyphen:
can-default, default, focus, expand, fill and an integer argument padding.
<P>
<I>can-default</I> means that the widget may become the default widget
of the dialog (ie the one being activated if the user immediately presses
Return).
<P>
<I>default</I> means that the widget is the initial default widget.
<P>
<I>focus</I> means that the widget initially has the keyboard focus.
<P>
<I>expand</I>, <I>fill</I>, <I>padding</I> are relevant if the widget
is part of a row or column (see the GTK documentation).
<P>
The following paragraphs explain only the widget-specific arguments.
<P>
<DL COMPACT>
<DT>*FvwmGtk: Dialog <B>name</B> <B>title</B> [ <B>center</B> ]<DD>
Starts or reopens a dialog named by the first argument. <B>title</B>
is used as the window title. If the optional argument <B>center</B> is given,
the dialog will be mapped at the center of the screen. Otherwise it
will be mapped at the mouse position.
<P>
A dialog has one child widget.
<P>
<DT>*FvwmGtk: Box [ <B>vertical</B> ] [ <B>homogeneous</B> ] [ <B>spacing</B> [ <B>border</B> ] ]<DD>
<DT>*FvwmGtk: EndBox<DD>
Start and end a composite widget which is used to group a number of child
widgets in a row or column. The arguments influence the placement of the child
widgets (for information about their meaning, see the GTK documentation).
<P>
<DT>*FvwmGtk: Frame <B>label</B> [ <B>border</B> ]<DD>
<DT>*FvwmGtk: EndFrame<DD>
Start and end a composite widget which draws a frame labeled by the given
label around a single child widget. The optional argument determines
the separation between the frame and the child.
<P>
<DT>*FvwmGtk: Label <B>label</B><DD>
Adds a label widget.
<P>
<DT>*FvwmGtk: Entry <B>name</B> [ <B>initial-value</B> ]<DD>
Adds a widget which allows the user to enter a string. If given, the
<B>initial-value</B> is displayed initially. The actual string can
be referred to by <B>name</B>.
<P>
<DT>*FvwmGtk: Button <B>label</B> <B>cmd</B> ...<DD>
Adds a button widget with the given label which will trigger the given
commands when pressed. Commands can contain references to the values
of widgets in the form $(name). These references are replaced by the actual
values. The replacement is done recursively, ie the values can again
contain references.
<P>
Commands can be strings to send to fvwm, system commands starting with
and exclamation sign (which is stripped before execution) or the special
command &quot;close&quot; to close the current dialog.
<P>
<DT>*FvwmGtk: CheckButton <B>name</B> <B>label</B> <B>on-value</B> <B>off-value</B> [ <B>on</B> ]<DD>
Adds a check button widget with the given label. The value referred to
by <B>name</B> will be either <B>on-value</B> or <B>off-value</B>, depending
on the state of the check button. The initial state is off, unless
the optional argument is given.
<P>
<DT>*FvwmGtk: RadioGroup <B>name</B><DD>
<DT>*FvwmGtk: EndRadioGroup<DD>
Start and end a composite widget which groups a number of mutually
exclusive radio buttons. The value of the enables radio button can be
referred to by <B>name</B>. Grouping radio buttons in this way doesn't
influence their geometry. You can put a radio group in a row or column
or even distribute it across several rows to determine the geometry.
<P>
<DT>*FvwmGtk: RadioButton <B>label</B> <B>on-value</B> [ <B>on</B> ]<DD>
Adds a radio button with the given label. Its initial state is off, unless
the optional argument is given. There should probably be exactly one <B>on</B>
radio button in a radio group. A radio button must be child of a radio group
in order to be able to access its value.
<P>
<DT>*FvwmGtk: Notebook <B>label</B><DD>
Opens a new notebook page with the given label. If there is already an open
notebook, the page is appended to it. Otherwise a new notebook is created. A
notebook page is a composite widget that expects one child.
<P>
<DT>*FvwmGtk: EndNotebook<DD>
Closes a notebook widget.
<P>
<DT>*FvwmGtk: Color <B>name</B> [ <B>initial-value</B> ]<DD>
Adds a color selector whose initial color is specified by <B>initial-value</B>
and whose value can be referred to by <B>name</B>. The <B>initial-value</B>
can be any color specification that is accepted by XParseColor. The returned
color specifications are always of the form &quot;rgb:rrrr/gggg/bbbb&quot;.
<P>
<DT>*FvwmGtk: Scale <B>name</B> [ <B>vertical</B> ] <B>value</B> <B>lower</B><DD>
<B>upper</B> <B>inc</B> <B>page-inc</B> <B>page-size</B> [ <B>digits</B> ]&quot;
Adds a scale.
<P>
<DT>*FvwmGtk: SpinButton <B>name</B> <B>value</B> <B>lower</B><DD>
<B>upper</B> <B>inc</B> <B>page-inc</B> <B>page-size</B> <B>climb-rate</B> [
<B>digits</B> ]&quot;
Adds a spin button.
<P>
<DT>*FvwmGtk: OptionMenu <B>name</B><DD>
<DT>*FvwmGtk: EndOptionMenu<DD>
<DT>*FvwmGtk: Item <B>label</B> <B>value</B> [ <B>on</B> ]<DD>
Can be used to create option menus.
<P>
<P>
</DL>
<A NAME="lbAJ">&nbsp;</A>
<H2>COMMON CONFIGURATION</H2>

The following commands can be used for menus and dialogs.
<P>
<DL COMPACT>
<DT>*FvwmGtk: Separator<DD>
Appends a separator to the currently open menu, row or column.
<P>
<DT>*FvwmGtk: Destroy <B>name</B><DD>
Destroys the specified menu or dialog.
<P>
<DT>*FvwmGtk: RCFile <B>file</B><DD>
Note that this command should be issued before defining any menus
or dialog. Hint for GNOME users: If you add instances of this command for the
standard GNOME rc files, switching themes via the control-center will
apply to FvwmGtk widgets as well, giving a very integrated appearance
of the desktop.
<P>
<DT>*FvwmGtk: IconSize [ <B>width</B> <B>height</B> ]<DD>
If FvwmGtk has been compiled with imlib support, icons will be scaled
to the size set by this command. Omitting the arguments disables scaling.
Note that there is currently no way to change the amount of room left
free for icons, thus using a width of more than 20 will not be very
useful.
<P>
</DL>
<A NAME="lbAK">&nbsp;</A>
<H2>COMMANDS</H2>

To invoke one of the previously defined menus or dialogs, use the fvwm
command <I>SendToModule</I>.
<P>
<DL COMPACT>
<DT>SendToModule FvwmGtk <B>name</B> <B>button</B><DD>
makes <B><u>FvwmGtk</u></B> pop up the menu or dialog named by the first argument.
The second argument is the button that will be used for menu selection.
For dialogs and menus which are not popped up from a button press, you can
omit the button.
Examples:


<P>


<blockquote><PRE>Mouse 3 R A SendToModule FvwmGtk Window-Ops 3
Key F10 R A SendToModule FvwmGtk Applications-Menu
Mouse 1 R A SendToModule FvwmGtk Quit-Verify-Dialog</PRE></blockquote>
<P>



<P>
</DL>
<A NAME="lbAL">&nbsp;</A>
<H2>AUTHOR</H2>

<I>Matthias Clasen</I> &lt;<A HREF="mailto:clasen@mathematik.uni-freiburg.de">clasen@mathematik.uni-freiburg.de</A>&gt;
<P>
<A NAME="lbAM">&nbsp;</A>
<H2>ACKNOWLEDGMENTS</H2>

The gtkpixmapmenuitem code and the code for underline accelerators is
taken from libgnomeui.
<P>
<A NAME="lbAN">&nbsp;</A>
<H2>BUGS</H2>

The builtin menus offer many features which the GTK menus currently
don't have. None of the features of the builtin window-list have
been implemented.
<P>
<P>

<HR>
<A NAME="index">&nbsp;</A><H2>Index</H2>
<DL>
<DT><A HREF="#lbAB">NAME</A><DD>
<DT><A HREF="#lbAC">SYNOPSIS</A><DD>
<DT><A HREF="#lbAD">DESCRIPTION</A><DD>
<DT><A HREF="#lbAE">INVOCATION</A><DD>
<DT><A HREF="#lbAF">CONFIGURATION OPTIONS</A><DD>
<DT><A HREF="#lbAG">MENUS</A><DD>
<DT><A HREF="#lbAH">WINDOW LISTS</A><DD>
<DT><A HREF="#lbAI">DIALOGS</A><DD>
<DT><A HREF="#lbAJ">COMMON CONFIGURATION</A><DD>
<DT><A HREF="#lbAK">COMMANDS</A><DD>
<DT><A HREF="#lbAL">AUTHOR</A><DD>
<DT><A HREF="#lbAM">ACKNOWLEDGMENTS</A><DD>
<DT><A HREF="#lbAN">BUGS</A><DD>
</DL>
<HR>
This document was created by
<A HREF="/cgi-bin/man/man2html">man2html</A>,
using the manual pages.<BR>
Time: 18:21:01 GMT, September 30, 2011


<?php decoration_window_end(); ?>

<!-- Automatically generated by manpages2php on 30-Sep-2011 -->
