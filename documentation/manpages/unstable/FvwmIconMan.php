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
if (strlen("$navigation_check") > 0) return;

$rel_path = "../../..";

//--------------------------------------------------------------------
// load some global definitions
//--------------------------------------------------------------------
include("$rel_path/definitions.inc");

//--------------------------------------------------------------------
// Site definitions
//--------------------------------------------------------------------
$title          = "FVWM - Man page - FvwmIconMan";
$heading        = "FVWM - Man page - FvwmIconMan";
$link_name      = "Man page";
$link_picture   = "pictures/icons/doc_manpages";
$parent_site    = "documentation";
$child_sites    = array();
$requested_file = basename(my_get_global("PHP_SELF", "SERVER"));
$this_site      = "manpages";

//--------------------------------------------------------------------
// load the layout file
//--------------------------------------------------------------------
if (strlen($site_has_been_loaded) == 0) {
	$site_has_been_loaded = "true";
	if (strlen($layout) > 0) {
		$file = "$rel_path/layout_$layout.inc";
		if (file_exists($file)) $layout_file = $file;
	}
	include(sec_filename($layout_file));
	exit();
}
?>

<?php decoration_window_start("Manual page for FvwmIconMan in unstable branch (2.5.7)"); ?>

<H1>FvwmIconMan</H1>
Section: FVWM Modules (1)<BR>Updated: 14 October 2002<BR><A HREF="#index">This page contents</A>
 - <a href="./">Return to main index</A><HR>


<A NAME="lbAB">&nbsp;</A>
<H2>NAME</H2>

FvwmIconMan - an Fvwm Icon Manager
<A NAME="lbAC">&nbsp;</A>
<H2>SYNOPSIS</H2>

FvwmIconMan is spawned by fvwm, so no command line invocation will work.
<P>
<A NAME="lbAD">&nbsp;</A>
<H2>DESCRIPTION</H2>

FvwmIconMan is an icon manager modeled after the TWM icon manager.
The user may have multiple icon managers, each of which armed with
a list of window types which it manages. For example, the user may
have one manager which lists only emacs windows, and another which
lists everything else. You may also specify what resolution each
icon manager uses, for example, one icon manager may manage
windows on all desks, and another may manage only those on the
current desk, page or screen. FvwmIconMan can display the
miniature icons provided by fvwm for its managed windows. The
managers may have a maximum number of columns (and so grows
vertically), a maximum number of rows (and then grows
horizontally), or stay at a fixed size, and adjust the size of the
window buttons to fit (think win95's Taskbar). And when support is
compiled in for the X Shape extension, then the manager windows
may be shaped.
<P>
You can specify actions to be run when mouse, or key events are received. For
example, you could bind the first mouse button to iconify the selected window,
and make bindings for the arrow keys to navigate the manager window without
the mouse.
<P>
FvwmIconMan can be set to display which window currently has the keyboard
focus, and by binding the select event (see below) to the fvwm Focus function,
you can emulate the TWM icon manager's behavior.
<P>
<A NAME="lbAE">&nbsp;</A>
<H2>INITIALIZATION</H2>

During initialization, FvwmIconMan searches though the fvwm configuration file
for the options which are described below. It is highly recommended that you
make FvwmIconMan be a sticky window. And if you want to make use of the
followfocus option, and/or binding an action to Focus, then you should make
FvwmIconMan clicktofocus. Also, when using the Shape option, it's recommended
that the FvwmIconMan window not be decorated at all by fvwm.
<P>
<A NAME="lbAF">&nbsp;</A>
<H2>INVOCATION</H2>

FvwmIconMan can be invoked by inserting the line 'Module FvwmIconMan' in
the .fvwm2rc file.  If FvwmIconMan is to be spawned during fvwm's
initialization, then this line should be placed in the StartFunction
declarations, or it can be bound to a menu, mouse button, or keystroke to
invoke it later.
<P>
If you wish to run FvwmIconMan in a transient mode, such as with the built in
window list, then pass Transient as an argument. The invocation &quot;Module
FvwmIconMan Transient&quot; will do nicely. In this mode, FvwmIconMan will pop up
one manager window directly under the cursor. When the mouse button is
released, it will execute the appropriate action, and then exit.  Things are
somewhat complicated by the fact that you can specify that FvwmIconMan creates
multiple manager windows, behavior which is unsuitable when running
transiently. So, when running transiently, FvwmIconMan will only create one
manager window. Use the manager id 'transient' to specify options for this
manager window.
<P>
FvwmIconMan may accept an alias name as an argument.
For example, &quot;Module FvwmIconMan FvwmIconMan-Variant2&quot;.
<P>
<A NAME="lbAG">&nbsp;</A>
<H2>CONFIGURATION OPTIONS REFERENCE CHART</H2>

FvwmIconMan has acquired quite a few options. I assume others
share my dislike of paging though a long man page, so here is a
terse reference chart describing the available options. They are
described in more detail in the next section.
<P>

<PRE>
Name            Description                Default

NumManagers     number of managers         1
Action          binds command to event     Mouse 0 N sendcommand Iconify
Background      default background         gray
ButtonGeometry  size of button in pixels
Colorset        default colorset
DontShow        list of windows to ignore
DrawIcons       use mini icons             false
FocusAndSelectButton                       flat grey black
FocusAndSelectColorset
FocusButton     style for focused buttons  up grey black
FocusColorset
FollowFocus     show which win has focus   false
Font                                       8x13
Foreground      default text color         white
Format          describes button label     &quot;%c: %i&quot;
IconName        manger icon name           FvwmIconMan
IconButton      style for icon buttons     up black grey
IconColorset
ManagerGeometry size of manager in buttons 0x1
NoIconAction    animate iconification      NOP
PlainButton     style for normal buttons   up black grey
PlainColorset
Resolution      global/desk/page/screen    page
Reverse         normal, icon or none       none
SelectButton    style for selected buttons flat black grey
SelectColorset
Shape           use shape extension        false
Show            list of windows to show
ShowOnlyIcons   only icons visible         false
ShowTransient   transient windows visible  false
Sort            keep managers sorted       name
SortWeight      weight for sorting
Title           manager title              FvwmIconMan
TitleButton     style for title button     raisededge black grey
TitleColorset
UseWinList      honor WinListSkip?         true

</PRE>

<P>
<A NAME="lbAH">&nbsp;</A>
<H2>CONFIGURATION OPTIONS</H2>

With the exception of the nummanagers option, all of the options may be
defined on a per-manager basis. So, for example, the user may have his emacs
manager with a red foreground, and his xterm manager with a blue one. A
configuration line may therefore have one of two forms:
<P>
<DL COMPACT>
<DT>*FvwmIconMan: OptionName OptionValue<DD>
To specify that the <I>OptionName</I> takes the value <I>OptionValue</I>
for all managers.
<DT>*FvwmIconMan: ManagerId OptionName OptionValue<DD>
To specify that the option <I>OptionName</I> takes the value <I>OptionValue</I>
for manager <I>ManagerId</I>. <I>MangerId</I> may either be a positive integer,
or the string &quot;transient&quot;. An integer id refers to managers which FvwmIconMan
creates when running normally, and an id of &quot;transient&quot; refers to the single
manager which FvwmIconMan creates when running transiently.
<P>
The old syntax, that uses an asterisk instead of white spaces
before <I>ManagerId</I> and <I>OptionName</I>, is supported too,
but it is obsolete now.
<P>
</DL>
<P>

The following options may be specified:
<P>
<DL COMPACT>
<DT>*FvwmIconMan: NumManagers <I>num</I><DD>
<I>num</I> is a positive integer specifying the total number of icon managers.
Since FvwmIconMan would like to know how many managers there are before
handling any manager specific options, this should come first. The default
is 1.
<P>
<DT>*FvwmIconMan: [id] Action <I>type</I> <I>binding</I><DD>
Binds an FvwmIconMan command to an event. <I>Type</I> may be one of the values:
Key, Mouse, or Select. Actions are described in the following section ACTIONS.
<P>
<DT>*FvwmIconMan: [id] Background <I>background</I><DD>
Specifies the default background color.
<P>
<DT>*FvwmIconMan: [id] ButtonGeometry <I>geometry</I><DD>
Specifies the initial geometry of an individual button in pixels. If the
specified height is 0, then the button height is determined from the font
size. X and Y coordinates are ignored.
<P>
<DT>*FvwmIconMan: [id] Colorset <I>colorset</I><DD>
The default colorset used. Overrides background and foreground. See FvwmTheme.
<P>
<DT>*FvwmIconMan: [id] DrawIcons <I>value</I><DD>
If your version of fvwm is capable of using mini icons, then this option
determines if FvwmIconMan displays the mini icons. Otherwise, it generates
an error message.  &quot;true&quot; means that mini icons are shown for iconified
windows, &quot;false&quot; that mini icons are never shown, and &quot;always&quot; that mini icons
are shown for all windows.
<P>
<DT>*FvwmIconMan: [id] FocusAndSelectButton <I>style</I> [<I>forecolor</I> <I>backcolor</I>]<DD>
Same as the plainbutton option, but specifies the look of buttons which are
both selected, and have the keyboard focus.
<P>
<DT>*FvwmIconMan: [id] FocusAndSelectColorset <I>colorset</I><DD>
Works like focusandselectbutton but uses colorsets instead.  The style setting can
still only be applied with focusandselectbutton.  See FvwmTheme.
<P>
<DT>*FvwmIconMan: [id] FocusButton <I>style</I> [<I>forecolor</I> <I>backcolor</I>]<DD>
Same as the plainbutton option, but specifies the look of buttons whose
windows have the keyboard focus.
<P>
<DT>*FvwmIconMan: [id] FocusColorset <I>colorset</I><DD>
Works like focusbutton but uses colorsets instead.  The style setting can still
only be applied with focusbutton.  See FvwmTheme.
<P>
<DT>*FvwmIconMan: [id] FollowFocus <I>boolean</I><DD>
If <I>true</I>, then the button appearance reflects
which window currently has focus.  Default is false.
<P>
<DT>*FvwmIconMan: [id] Font <I>font</I><DD>
Specifies the font to be used for labeling the buttons. The default is 8x13.
<P>
<DT>*FvwmIconMan: [id] Foreground <I>foreground</I><DD>
Specifies the default foreground color.
<P>
<DT>*FvwmIconMan: [id] Format <I>formatstring</I><DD>
A printf like format string which describes the string to be printed in the
manager window for each managed window. Possible flags are: %t, %i, %c, and
%r for the window's title, icon, class, or resource name, respectively.
The default is &quot;%c: %i&quot;. <B>Warning</B>: m4 reserves the word <I>format</I>,
so if you use m4, take appropriate action.
<P>
<DT>*FvwmIconMan: [id] IconName <I>iconstring</I><DD>
Specifies the window icon name for that manager window. <I>Iconstring</I>
may either be a single word, or a string enclosed in quotes. The default is
&quot;FvwmIconMan&quot;.
<P>
<DT>*FvwmIconMan: [id] IconButton <I>style</I> [<I>forecolor</I> <I>backcolor</I>]<DD>
Same as the plainbutton option, but specifies the look of buttons whose
windows are iconified.
<P>
<DT>*FvwmIconMan: [id] IconColorset <I>colorset</I><DD>
Works like iconbutton but uses colorsets instead.  The style setting can still
only be applied with iconbutton.  See FvwmTheme.
<P>
<DT>*FvwmIconMan: [id] ManagerGeometry <I>geometry</I><DD>
Specifies the initial geometry of the manager, in units of buttons. If
<I>height</I> is 0, then the manager will use <I>width</I> columns, and will
grow vertically once it has more than <I>width</I> windows. Likewise, if
<I>width</I> is 0, it will use <I>height</I> rows, and grow horizontally.  If
both are nonzero, then the manager window will be exactly that size, and stay
that way. As columns are created, the buttons will narrow to accommodate.  If
the geometry is specified with a negative y coordinate, then the window
manager will grow upwards. Otherwise, it will grow downwards.
<P>
<DT>*FvwmIconMan: [id] NoIconAction  <I>action</I><DD>
Tells FvwmIconMan to do <I>action</I> when a NoIcon style window is
iconified or de-iconified. Relevant coordinates are appended to <I>action</I> so
that the icon can be traced to an FvwmIconMan button. An example action
is &quot;*FvwwmIconMan: NoIconAction SendToModule FvwmAnimate animate&quot;. A blank or
null action turns this feature off.
<P>
<DT>*FvwmIconMan: [id] PlainButton <I>style</I> [<I>forecolor</I> <I>backcolor</I>]<DD>
Specifies how normal buttons look. <I>style</I> may be one of <I>flat</I>,
<I>up</I>, <I>down</I>, <I>raisededge</I>, or <I>sunkedge</I>, and describes how
the button is drawn. The color options are both optional, and if not set, then
the default colors are used. If on a monochrome screen, then the <I>style</I>
option is ignored, but must still be set.
<P>
<DT>*FvwmIconMan: [id] PlainColorset <I>colorset</I><DD>
Works like plainbutton but uses colorsets instead.  The style setting can
still only be applied with plainbutton.  See FvwmTheme.
<P>
<DT>*FvwmIconMan: [id] Resolution <I>resolution</I><DD>
Specifies when the manager will display an entry for a certain
window. <I>resolution</I> may take one of the following values:
global, desk, page, screen, !desk, !page, or !screen. If global,
then all windows of the appropriate type (see the show and
dontshow options below) will be shown. If desk, then only those
windows on the current desk are down. If page, then only those
windows on the current page are shown. If screen, then only those
windows on the current Xinerama screen are shown. !desk reverses
the sense of desk, displaying only those windows not on the
current desk. Likewise, !page shows only those windows not on the
current page and !screen shows only those windows not on the
current Xinerama screen. The default is page. If Xinerama is not
active or only a single screen is used, page and screen are
equivalent.
<P>
This configuration line is respected when FvwmIconMan is running
as well, the resolution is changed dynamically.
<P>
<DT>*FvwmIconMan: [id] Reverse <I>class</I><DD>
Causes certain classes of buttons to have their relief lines reversed so that
up and down styles are reversed. This has no affect on flat buttons. The class
can be icon, normal or none. The default is none.
<P>
<DT>*FvwmIconMan: [id] SelectButton <I>style</I> [<I>forecolor</I> <I>backcolor</I>]<DD>
Same as the plainbutton option, but specifies the look of buttons when the
mouse is over them.
<P>
<DT>*FvwmIconMan: [id] SelectColorset <I>colorset</I><DD>
Works like selectbutton but uses colorsets instead.  The style setting can
still only be applied with selectbutton.  See FvwmTheme.
<P>
<DT>*FvwmIconMan: [id] Shape <I>boolean</I><DD>
If <I>True</I>, then use make the window shaped. Probably only useful if you
have multiple columns or rows. If FvwmIconMan wasn't compiled to support the
Shape extension, this generates an error message. When using shaped windows,
it's recommended that a fvwm style is made for FvwmIconMan that has no borders.
Otherwise, fvwm will get confused.
<P>
<DT>*FvwmIconMan: [id] Sort <I>value</I><DD>
If <I>name</I>, then the manager list is sorted by name. If <I>namewithcase</I>,
then it is sorted by name sensitive to case. If <I>id</I>, then
the manager list is sorted by the window id, which never changes after the
window is created. If <I>weighted</I>, then the manager list is sorted by
weight (see the description of <I>sortweight</I> below). Or it can be set to
<I>none</I>, which results in no sorting. Default is <I>name</I>.
<P>
<DT>*FvwmIconMan: [id] SortWeight <I>weight</I> <I>pattern-list</I><DD>
Assigns the specified <I>weight</I> to windows that match <I>pattern-list</I>.
The list is made up of patterns of the form <I>type=pattern</I>, where type
is one of <I>class</I>, <I>resource</I>, <I>title</I>, or <I>icon</I>, and pattern
is an expression of the same format used in the fvwm style command
(minimalistic shell pattern matching). Multiple sort weights can be given.
Each window is matched against the list of sort weights, in order, and is
given the weight from the first match. Lower-weighted windows are placed
first in the manager list. For example:


<P>


<blockquote><PRE>*FvwmIconMan: Sort       weighted
*FvwmIconMan: SortWeight 1 class=XTerm title=special*
*FvwmIconMan: SortWeight 10 class=XTerm
*FvwmIconMan: SortWeight 5</PRE></blockquote>
<P>



In this example, xterm windows whose titles start with &quot;special&quot; (weight 1)
are listed first, followed by everything but other xterms (weight 5), and the
other xterms (weight 10) are listed last. If no default weight (empty pattern
list) is given, the default weight is 0. Only relevant if the sort type is
set to <I>weighted</I>.
<P>
<DT>*FvwmIconMan: [id] Title <I>title-string</I><DD>
Specifies the window title string for that manager window. <I>Titlestring</I>
may either be a single word, or a string enclosed in quotes. The default is
&quot;FvwmIconMan&quot;. This will be drawn in the title bar of the manager window, if
any, and in the title button, which is the button drawn when the manager is
empty.
<P>
<DT>*FvwmIconMan: [id] TitleButton <I>style</I> [<I>forecolor</I> <I>backcolor</I>]<DD>
Same as the plainbutton option, but specifies the look of the title button
(the button drawn when the manager is empty). The manager's title is drawn
in the title button.
<P>
<DT>*FvwmIconMan: [id] UseWinList <I>boolean</I><DD>
If <I>true</I>, then honor the WinListSkip style flag. Otherwise, all windows
are subject to possible management according to the show and dontshow lists.
<P>
</DL>
<P>

The two following options control which windows get handled by which
managers. A manager can get two lists, one of windows to show, and one of
windows to ignore. If only the <I>show</I> list is given, then that manager
will show only the windows in the list. If only the <I>DontShow</I> list is
given, then the manager will show all windows except those in the list. If
both lists are given, then a window will be shown if it is not in the
<I>DontShow</I> list, and in the <I>Show</I> list. And finally, if neither list
is given, then the manager will handle all windows. Each list is made up of
patterns of the form <I>type=pattern</I>, where type is one of <I>class</I>,
<I>resource</I>, <I>title</I>, or <I>icon</I>, and pattern is an expression of
the same format used in the fvwm style command (minimalistic shell pattern
matching). Quotes around the pattern will be taken as part of the
expression. If a window could be handled by more than one manager, then the
manager with the lowest id gets it.
<P>
<DL COMPACT>
<DT>*FvwmIconMan: [id] Show <I>pattern list</I><DD>
If a window matches one of the patterns in the list, then it may be handled
by this manager.
<P>
<DT>*FvwmIconMan: [id] DontShow <I>pattern list</I><DD>
If a window matches one of the patterns in the list, then it may not be
handled by this manager.
<P>
<DT>*FvwmIconMan: [id] ShowTransient <I>boolean</I><DD>
Show transient windows in the list (default false).
<P>
<DT>*FvwmIconMan: [id] ShowOnlyIcons <I>boolean</I><DD>
Only iconified windows are shown if <I>boolean</I> is true.
<P>
</DL>
<A NAME="lbAI">&nbsp;</A>
<H2>ACTIONS</H2>

Actions are commands which may be bound to an event of the type: a key press, a
mouse click, or the mouse entering a window manager button - denoted by the
action types <I>Key</I>, <I>Mouse</I>, and <I>Select</I>.
<P>
Normally, actions bound to a mouse click are executed when the button is
pressed. In transient mode, the action is executed when the button is
released, since it is assumed that FvwmIconMan was bound to some mouse
event. A tip/warning: FvwmIconMan still keeps track of the mouse button and
any modifier keys in this case, so if you bind FvwmIconMan to say,
meta-button3, then it would be wise to ensure that the action you want to
execute will be executed when the meta-button3 event occurs (which would be
the button release, assuming you kept your finger on the meta key).
<P>
The syntax for actions are:
<P>
<DL COMPACT>
<DT><B>Key actions</B>: Key <I>Keysym</I> <I>Modifiers</I> <I>FunctionList</I><DD>
<I>Keysym</I> and <I>Modifiers</I> are exactly the same as for the fvwm <I>Key</I>
command.
<P>
<DT><B>Mouse actions</B>: Mouse <I>Button</I> <I>Modifiers</I> <I>FunctionList</I><DD>
<I>Button</I> and <I>Modifiers</I> are exactly the same as for the fvwm
<I>Mouse</I> command.
<P>
<DT><B>Select actions</B>: Select <I>FunctionList</I><DD>
<P>
</DL>
<P>

A <I>FunctionList</I> is a sequence of commands separated by commas. They are
executed in left to right order, in one shared context - which currently only
contains a pointer to the &quot;current&quot; button. If a button is selected (typically
by the mouse pointer sitting on it) when the action is executed, then the
current button is initialized to that button. Otherwise, it points to nothing.
<P>
Most of the available commands then modify this &quot;current&quot; button, either by
moving it around, making it become the selected button, or sending commands
to fvwm acting on the window represented by that button. Note that while this
current button is initialized to be the selected button, the selected button
does not implicitly follow it around. This way, the user can send commands
to various windows, without changing which button is selected.
<P>
Commands take five types of arguments: <I>Integer</I>, <I>Manager</I>,
<I>Window</I>, <I>Button</I>, and <I>String</I>. A <I>String</I> is a string
specified exactly as for fvwm - either in quotes or as a single word not in
quotes. Again, you may bind a sequence of commands to an event, by listing
them separated by commas.
<P>
<I>Window</I> and <I>Button</I> types look exactly the same in the .fvwm2rc
file, but are interpreted as either specifying a managed window, or a
FvwmIconMan button representing a window. They can either be an integer (which
is interpreted module N where N is the number of buttons - so 0 is the first
and -1 is the last), or one of the strings: <I>Select</I>, <I>Focus</I>,
<I>Up</I>, <I>Down</I>, <I>Right</I>, <I>Left</I>, <I>Next</I>,
<I>Prev</I>. <I>Select</I> and <I>Focus</I> refer to the currently selected or
focused button or window. <I>Up</I>, <I>Down</I>, <I>Right</I>, and <I>Left</I>
refer to the button or window above, below, to the right of, or to the left of
the current button in the manager window, allowing navigation around the
manager window. <I>Next</I> and <I>Prev</I> designates the window, button, or
manager after or before the current button, allowing navigation of the one
dimensional list of windows which is drawn in the manager window. If the
manager is sorted, <I>Next</I> and <I>Prev</I> move through the windows in
the sorted order.
<P>
The <I>Manager</I> type can either be an integer, <I>Next</I>, or <I>Prev</I>.
The meaning is analogous to that of the <I>Button</I> type, but in terms of
the integral index of the managers, restricted to managers which are nonempty.
<P>
The following functions are currently defined:
<DL COMPACT>
<DT>bif <I>Button</I> <I>Integer/String</I><DD>
A relative branch instruction. If <I>Button</I> is <I>Select</I> or <I>Focus</I>,
then take the branch if there is a selected button or a focused button. If
<I>Button</I> is an integer, then branch if nonzero. If it is one of <I>Up</I>,
<I>Down</I>, <I>Right</I>, <I>Left</I>, <I>Next</I>, <I>Prev</I>, then the branch is
taken when the current button can move in that direction. If the branch is
taken, then <I>Integer</I> commands are skipped. No backwards branches are
allowed.
<P>
<DT>bifn <I>Button</I> <I>Integer/String</I><DD>
The complement of bif. The branch is taken if <I>Button</I> evaluates to false,
by the criteria listed for bif.
<P>
<DT>gotobutton <I>Button</I><DD>
Sets current button to <I>Button</I>. If <I>Button</I> is an integer, then
the current button is set to <I>Button</I> modulo the number of buttons,
in the whichever manager contains the selected button, if any.
<P>
<DT>gotomanager <I>Manager</I><DD>
Sets button to button 0 of <I>Manager</I>. This will only go to a visible,
nonempty manager. So an integral argument is taken modulo the number of such
managers.
<P>
<DT>jmp <I>Integer/String</I><DD>
Executes a relative jump of <I>Integer</I> instructions. Backwards jumps are
not allowed. The jump is computed relative to the instruction following the
jmp.
<P>
<DT>label <I>String</I><DD>
Provides a label that previous instructions can jump to. It will not be
visible to subsequent jump instructions, and the same label can be used
multiple times in the same instruction list (though it would be perverse
to do so.)
<P>
<DT>print <I>String</I><DD>
Prints <I>String</I> to the console. Useful for debugging actions.
<P>
<DT>quit<DD>
Quits FvwmIconMan.
<P>
<DT>ret<DD>
Stop executing the entire action.
<P>
<DT>select<DD>
Selects the current button, if any. If a select action has been specified,
it will then be run. Therefore, it is considered unwise to set the select
button in the select action.
<P>
<DT>sendcommand <I>Command</I><DD>
Sends the fvwm command <I>Command</I> to the window represented by the current
button, if any.
<P>
<DT>warp<DD>
Warps cursor to current button, if any.
<P>
</DL>
<P>

<B>Examples:</B>



<P>


<blockquote><PRE>gotobutton select, gotobutton Down, select</PRE></blockquote>
<P>



Selects the button below the currently selected button. Since the
current button is already initialized to the selected button, this may be
shortened to &quot;gotobutton Down, select&quot;.
<P>


<P>


<blockquote><PRE>gotobutton Up, select</PRE></blockquote>
<P>



Selects the button above the currently selected button.
<P>


<P>


<blockquote><PRE>gotobutton 0, select</PRE></blockquote>
<P>



Selects the first button of the current manager. If there is no current
manager, which is the case when no button is selected, then this does nothing.
<P>


<P>


<blockquote><PRE>gotobutton -1, select</PRE></blockquote>
<P>



Selects the last button of the current manager.
<P>


<P>


<blockquote><PRE>gotobutton focus, select</PRE></blockquote>
<P>



Selects the button corresponding to the focused window.
<P>


<P>


<blockquote><PRE>gotobutton focus, Iconify</PRE></blockquote>
<P>



Sends the fvwm command Iconify to the focused window. Note that this
does not change the selected button.
<P>


<P>


<blockquote><PRE>bif Next 3, gotobutton 0, select, ret, gotobutton Next, select</PRE></blockquote>
<P>



If a button is selected, and it's the last button, go to button 0. If it's
not the last button, go to the next button. Otherwise, do nothing. Basically,
this action cycles through all buttons in the current manager.
<P>


<P>


<blockquote><PRE>bif select 7, bif focus 3, gotomanager 0, select, ret, gotobutton focus, \
  select, ret, gotobutton down, select</PRE></blockquote>
<P>



This is good for sending to FvwmIconMan with a SendToModule command. If there
is a selected button, it moves down. Otherwise, if there is a focused button,
it is selected. Otherwise, button 0 of manager 0 gets selected.
<P>


<P>


<blockquote><PRE>bif select Select, bif focus Focus, gotomanager 0, select, ret, label Focus, \
  gotobutton focus, select, ret, label Select, gotobutton down, select</PRE></blockquote>
<P>



Same as previous, but using the label instruction.
<P>
<P>

In addition to being bound to keys and mice, actions can be sent from fvwm to
FvwmIconMan via the SendToModule command. Don't quote the command when using
SendToModule. Also, due to a bug in the current version of fvwm, don't quote
FvwmIconMan either.
<P>
<A NAME="lbAJ">&nbsp;</A>
<H2>SAMPLE CONFIGURATIONS</H2>

This first example is of a the simplest invocation of FvwmIconMan, which only
has one manager, and handles all windows:
<P>
<PRE>

##############################################################
# Load any modules which should be started during
# fvwm initialization
ModulePath /usr/lib/X11/fvwm:/usr/bin/X11
Module FvwmIconMan

# Make FvwmIconMan title-bar-less, sticky, and give it an icon
Style &quot;Fvwm*&quot;      Icon toolbox.xpm,NoTitle,NoHandles,Sticky
Style &quot;FvwmIconMan&quot; HandleWidth 5, Handles, BorderWidth 5


##############################################################
##############################################################
#Definitions used by the modules

*FvwmIconMan: NumManagers        1
*FvwmIconMan: Resolution         global
*FvwmIconMan: Background         slategrey
*FvwmIconMan: Foreground         white
*FvwmIconMan: Font               7x13
*FvwmIconMan: ButtonGeometry     100x0
*FvwmIconMan: ManagerGeometry    1x0-0+0

</PRE>

<P>
This example is the Reader's Digest version of my personal configuration. It
has two managers, one for emacs and one for everything else, minus things with
no icon title. Only windows on the current page are displayed. The use of the
<I>drawicons</I> and <I>shape</I> options requires that fvwm and FvwmIconMan we
compiled with the correct options. Note how the geometry and show options are
specified per manager, and the others are common to all:
<P>
<PRE>

Style &quot;FvwmIconMan&quot;  NoTitle, Sticky, WindowListSkip, BorderWidth 0
Style &quot;FvwmIconMan&quot;  HandleWidth 0


Key F8 A N SendToModule FvwmIconMan bif select Select, bif focus Focus, \
  gotomanager 0, select, sendcommand WarpToWindow, ret, label Focus, \
  gotobutton focus, select, sendcommand WarpToWindow, ret, label Select, \
  gotobutton prev, select, sendcommand WarpToWindow
Key F9 A N SendToModule FvwmIconMan bif select Select, bif focus Focus, \
  gotomanager 0, select, sendcommand WarpToWindow, ret, label Focus, \
  gotobutton focus, select, sendcommand WarpToWindow, ret, label Select, \
  gotobutton next, select, sendcommand WarpToWindow

*FvwmIconMan: NumManagers 2
*FvwmIconMan: Resolution  page
*FvwmIconMan: Background  steelblue
*FvwmIconMan: Foreground  white
*FvwmIconMan: Font        7x13
*FvwmIconMan: UseWinList  true
*FvwmIconMan: DrawIcons   true
*FvwmIconMan: Shape       true
*FvwmIconMan: FollowFocus true
*FvwmIconMan: Sort        name
*FvwmIconMan: PlainButton          up white steelblue
*FvwmIconMan: SelectButton         down white steelblue
*FvwmIconMan: FocusButton          up white brown
*FvwmIconMan: FocusAndSelectButton down white brown
*FvwmIconMan: TitleButton          raisededge white steelblue
*FvwmIconMan: NoIconAction         &quot;SendToModule FvwmAnimate animate&quot;

*FvwmIconMan: 1 Title           &quot;Emacs windows&quot;
*FvwmIconMan: 1 IconName        &quot;FvwmIconMan: Emacs&quot;
*FvwmIconMan: 1 Format          &quot;%i&quot;
*FvwmIconMan: 1 Show            resource=emacs resource=gemacs
*FvwmIconMan: 1 ManagerGeometry 1x0-400+0
*FvwmIconMan: 1 ButtonGeometry  200x0

*FvwmIconMan: 2 Title           &quot;All windows&quot;
*FvwmIconMan: 2 IconName        &quot;FvwmIconMan: all&quot;
*FvwmIconMan: 2 Format          &quot;%c: %i&quot;
*FvwmIconMan: 2 DontShow        icon=Untitled
*FvwmIconMan: 2 ManagerGeometry 2x4-0+0
*FvwmIconMan: 2 ButtonGeometry  200x0

*FvwmIconMan: transient Geometry 194x100
*FvwmIconMan: transient DontShow icon=Untitled
*FvwmIconMan: transient Action   Mouse 0 A sendcommand select select Iconify

*FvwmIconMan: Action    Mouse   1 N sendcommand Iconify
*FvwmIconMan: Action    Mouse   2 N sendcommand WarpToWindow
*FvwmIconMan: Action    Mouse   3 N sendcommand &quot;Module FvwmIdent FvwmIdent&quot;
*FvwmIconMan: Action    Key     Left  N gotobutton Left, select
*FvwmIconMan: Action    Key     Right N gotobutton Right, select
*FvwmIconMan: Action    Key     Up    N gotobutton Up, select
*FvwmIconMan: Action    Key     Down  N gotobutton Down, select
*FvwmIconMan: Action    Key     q     N quit

</PRE>

<P>
<A NAME="lbAK">&nbsp;</A>
<H2>UNFINISHED BUSINESS</H2>

There is one bug that I know of. A honest to goodness solution to this would
be appreciated. When an icon manager is set to grow upwards or leftwards, on
some machines it may wander occasionally.
<P>
It doesn't handle windows without resource names as gracefully as it should.
<P>
<A NAME="lbAL">&nbsp;</A>
<H2>AUTHOR</H2>

Brady Montz (<A HREF="mailto:bradym@cs.arizona.edu">bradym@cs.arizona.edu</A>).
<P>
<A NAME="lbAM">&nbsp;</A>
<H2>THANKS</H2>

<PRE>
Thanks to:
        David Berson &lt;<A HREF="mailto:berson@cs.pitt.edu">berson@cs.pitt.edu</A>&gt;,
        Gren Klanderman &lt;<A HREF="mailto:greg@alphatech.com">greg@alphatech.com</A>&gt;,
        David Goldberg &lt;<A HREF="mailto:dsg@mitre.org">dsg@mitre.org</A>&gt;,
        Pete Forman &lt;<A HREF="mailto:gsez020@compo.bedford.waii.com">gsez020@compo.bedford.waii.com</A>&gt;,
        Neil Moore &lt;<A HREF="mailto:amethyst@maxwell.ml.org">amethyst@maxwell.ml.org</A>&gt;,
        Josh M. Osborne &lt;<A HREF="mailto:stripes@va.pubnix.com">stripes@va.pubnix.com</A>,
        Adam Rice &lt;<A HREF="mailto:wysiwyg@glympton.airtime.co.uk">wysiwyg@glympton.airtime.co.uk</A>&gt;,
        Chris Siebenmann &lt;<A HREF="mailto:cks@hawkwind.utcs.toronto.edu">cks@hawkwind.utcs.toronto.edu</A>&gt;,
        Bjorn Victor &lt;<A HREF="mailto:victor@delial.docs.uu.se">victor@delial.docs.uu.se</A>&gt;.

for contributing either code or truly keen ideas.

</PRE>
<HR>
<A NAME="index">&nbsp;</A><H2>Index</H2>
<DL>
<DT><A HREF="#lbAB">NAME</A><DD>
<DT><A HREF="#lbAC">SYNOPSIS</A><DD>
<DT><A HREF="#lbAD">DESCRIPTION</A><DD>
<DT><A HREF="#lbAE">INITIALIZATION</A><DD>
<DT><A HREF="#lbAF">INVOCATION</A><DD>
<DT><A HREF="#lbAG">CONFIGURATION OPTIONS REFERENCE CHART</A><DD>
<DT><A HREF="#lbAH">CONFIGURATION OPTIONS</A><DD>
<DT><A HREF="#lbAI">ACTIONS</A><DD>
<DT><A HREF="#lbAJ">SAMPLE CONFIGURATIONS</A><DD>
<DT><A HREF="#lbAK">UNFINISHED BUSINESS</A><DD>
<DT><A HREF="#lbAL">AUTHOR</A><DD>
<DT><A HREF="#lbAM">THANKS</A><DD>
</DL>
<HR>
This document was created by
man2html,
using the manual pages.<BR>
Time: 01:39:55 GMT, April 19, 2003


<?php decoration_window_end(); ?>

<!-- Automatically generated by manpages2php on 19-Apr-2003 -->
