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
$title          = "FVWM - Man page - FvwmTabs";
$heading        = "FVWM - Man page - FvwmTabs";
$link_name      = "Man page";
$link_picture   = "pictures/icons/doc_manpages";
$parent_site    = "documentation";
$child_sites    = array();
$requested_file = basename(my_get_global("PHP_SELF", "SERVER"));
$this_site      = "manpages_unstable_FvwmTabs";

//--------------------------------------------------------------------
// load the layout file
//--------------------------------------------------------------------
if(!isset($site_has_been_loaded)) {
	$site_has_been_loaded = "true";
	include_once(sec_filename($layout_file));
	exit();
}
?>

<?php decoration_window_start("Manual page for FvwmTabs in unstable branch (2.5.22)"); ?>

<H1>FvwmTabs</H1>
Section: Fvwm Modules (1)<BR>Updated: 2006-10-23<BR><A HREF="#index">This page contents</A>
 - <a href="<?php echo conv_link_target('./');?>">Return to main index</A><HR>

<A NAME="lbAB">&nbsp;</A>
<H2>NAME</H2>

<B><u>FvwmTabs</u></B> - a generic tabbing module for the fvwm window manager.
<A NAME="lbAC">&nbsp;</A>
<H2>SYNOPSIS</H2>

<A NAME="ixAAC"></A>
<B><u>FvwmTabs</u></B> is spawned by <FONT>fvwm</FONT>, so no command line invocation is possible.
<A NAME="lbAD">&nbsp;</A>
<H2>DESCRIPTION</H2>

<A NAME="ixAAD"></A>
The <B><u>FvwmTabs</u></B> module is capable of swallowing any <FONT>fvwm</FONT> window &amp; treating it as a tab in a <I>tab-manager</I> window. A tab-manager is sometimes called a <I>tabber</I>.
<P>

Each tab-manager can store any number of windows, each in its own <I>tab</I>. The number of tab-managers is limited only by system resources. Tab-managers can even be nested/swallowed within other tab-managers. (ie. a tab-manager can be added as an individual tab to another tab-manager.)
<A NAME="lbAE">&nbsp;</A>
<H2>INVOCATION</H2>

<A NAME="ixAAE"></A>
<B><u>FvwmTabs</u></B> can be invoked by inserting the line <TT>&quot;Module FvwmTabs&quot;</TT> in your .fvwmrc file. This can be placed on a line by itself, if <B><u>FvwmTabs</u></B> is to be spawned during <FONT>fvwm</FONT>'s initialization, or can be bound to a menu or mouse button or keystroke to invoke it later.
<A NAME="lbAF">&nbsp;</A>
<H2>INSTALLING DEPENDENCIES</H2>

<A NAME="ixAAF"></A>
<B><u>FvwmTabs</u></B> requires 2 <FONT>CPAN</FONT> modules (that are <FONT>NOT</FONT> distributed with <FONT>fvwm</FONT>) to be installed on your system. They are <I>Tk</I> and <I>X11::Protocol</I>.
<P>

They are available at: &lt;<A HREF="http://search.cpan.org/CPAN/authors/id/N/NI/NI-S/Tk-804.027.tar.gz">http://search.cpan.org/CPAN/authors/id/N/NI/NI-S/Tk-804.027.tar.gz</A>&gt; and &lt;<A HREF="http://search.cpan.org/~smccam/X11-Protocol-0.56/">http://search.cpan.org/~smccam/X11-Protocol-0.56/</A>&gt;.
<P>

To install either package:
<P>

tar zxvf <TT>$name</TT>.tar.gz ; cd <TT>$name</TT> ; perl Makefile.PL ; make install
<P>

<B><u>FvwmTabs</u></B> will tell you if you do not have these packages installed when you (try to) start it.
<A NAME="lbAG">&nbsp;</A>
<H2>CONFIGURATION OPTIONS</H2>

<A NAME="ixAAG"></A>
<B><u>FvwmTabs</u></B> reads the same config file as <FONT>fvwm</FONT> when it starts up.
<P>

The following options are recognised by <B><u>FvwmTabs</u></B>:
<DL COMPACT>
<DT>*FvwmTabs: activeFG <I>color</I><DD>
<A NAME="ixAAH"></A>
The text color of the button for the visible tab. The default color is yellow.
<DT>*FvwmTabs: activeBG <I>color</I><DD>
<A NAME="ixAAI"></A>
The backgound color of the button for the visible tab. The default color is MidnightBlue.
<DT>*FvwmTabs: inactiveFG <I>color</I><DD>
<A NAME="ixAAJ"></A>
The text color of the buttons for the invisible tabs. The default color is antiquewhite.
<DT>*FvwmTabs: inactiveBG <I>color</I>&gt;<DD>
<A NAME="ixAAK"></A>
The backgound color of the buttons for the invisible tabs. The default color is royalblue.
<DT>*FvwmTabs: titleFG <I>color</I><DD>
<A NAME="ixAAL"></A>
The text color used in the titlebar. The default color is black.
<DT>*FvwmTabs: titleBG <I>color</I><DD>
<A NAME="ixAAM"></A>
The background color used in the titlebar. The default color is antiquewhite.
<DT>*FvwmTabs: activeRelief <I>style</I><DD>
<A NAME="ixAAN"></A>
The relief style to use for active buttons. <I>style</I> can be either <I>raised</I>, <I>flat</I> or <I>sunken</I>. The default style is <I>sunken</I>.
<DT>*FvwmTabs: inactiveRelief <I>style</I><DD>
<A NAME="ixAAO"></A>
The relief style to use for inactive buttons. <I>style</I> can be either <I>raised</I>, <I>flat</I> or <I>sunken</I>. The default style is <I>flat</I>.
<DT>*FvwmTabs: buttonYPadding <I>pixels</I><DD>
<A NAME="ixAAP"></A>
How much padding to use around top and bottom of tab buttons. The default value is <I>3</I> pixels.
<DT>*FvwmTabs: pollRate <I>ms</I><DD>
<A NAME="ixAAQ"></A>
Specifies how often to check for X events. <I>ms</I> is time in milliseconds. The default value, <I>250</I>, should be fine for most users. If you are on a very slow machine you may wish to increase this.
<DT>*FvwmTabs: buttonFont <I>font</I><DD>
<A NAME="ixAAR"></A>
The font to use on the tab buttons. The default font is <I>Helvetica -12 bold</I>.
<DT>*FvwmTabs: titleFont <I>font</I><DD>
<A NAME="ixAAS"></A>
The font to use on the titlebar. The default font is <I>Helvetica -12</I>.
<DT>*FvwmTabs: menuFont <I>font</I><DD>
<A NAME="ixAAT"></A>
The font to use on the menus. The default font is <I>Helvetica -12</I>.
<DT>*FvwmTabs: fontSelector <I>fontProgram</I><DD>
<A NAME="ixAAU"></A>
The external font chooser program to launch when dynamically changing fonts. The default <I>fontProgram</I> is <I>gfontsel --print -f ``%f''</I>. Anti-gnome users might try <I>xfontsel -print -pattern ``%f''</I>. If set to <I>none</I>, no font menu options will appear.
<DT>*FvwmTabs: autoSwallowClass <I>className</I> [<I>tabManagerId</I>], ...<DD>
<A NAME="ixAAV"></A>

<DT>*FvwmTabs: autoSwallowResource <I>resourceName</I> [<I>tabManagerId</I>], ...<DD>
<A NAME="ixAAW"></A>
<DT>*FvwmTabs: autoSwallowName <I>name</I> [<I>tabManagerId</I>], ...<DD>
<A NAME="ixAAX"></A>

Specify windows to swallow automatically. These are comma-separated lists that specify the class/resource/name of a window &amp; an optional tab-manager id into which the window should be swallowed. By default, the tab-manager id increments from zero - ie. 0 is the first tab-manager created, 1 the second, etc, but it may be overriden by specifying an argument to the <I>NewTabber</I> function. (No whitespace is allowed in tabber ids.) You can alternatively specify 'any' or 'lastFocus' which will put the window in the tab-manager with the least number of tabs or the last focused tab-manager, respectively. If no tab-manager number is specified, an implicit default value of 'any' is used. Note that <I>className</I>/<I>resourceName</I>/<I>name</I> can be a (Perl) regular expression.
<DT>*FvwmTabs: balloonBG <I>color</I><DD>
<A NAME="ixAAY"></A>
The backgound color of the balloon popups that appear over the tab buttons. The default color is <I>#C0C080</I>.
<DT>*FvwmTabs: balloonFont <I>font</I><DD>
<A NAME="ixAAZ"></A>
The font to use on the balloon popups. The default font is <I>Helvetica -12</I>.
<DT>*FvwmTabs: balloonWait <I>ms</I><DD>
<A NAME="ixABA"></A>
How long the mouse cursor must pause (in milliseconds) over a tab button before the balloon pops up. The default value is <I>250</I>.
<DT>*FvwmTabs: balloonMsg <I>msg</I><DD>
<A NAME="ixABB"></A>
Message to display in balloon popups. The default value is <I>%tabNo:\n%iconText\n%title</I>.
<DT>*FvwmTabs: autoResize <I>bool</I><DD>
<A NAME="ixABC"></A>
<I>bool</I> can be either <I>true</I> or <I>false</I>. If true, windows in the tab-manager automatically resize to the dimensions of the largest window in the tab-manager. The default value is <I>false</I>. If the user performs an explicit resize of a tab-manager window, all windows in the tab-manager are resized to the new window size.
<DT>*FvwmTabs: stateFile <I>file</I><DD>
<A NAME="ixABD"></A>
<B><u>FvwmTabs</u></B> has the ability to preserve its state (ie. remember the windows it has swallowed as tabs) b/w <FONT>fvwm</FONT> restarts. <I>file</I> specifies the name of a temporary file to record the state in, so it can be reconstructed when <B><u>FvwmTabs</u></B> restarts. The default file is <TT>&quot;$FVWM_USERDIR/.fvwmtabs.state&quot;</TT>.
<DT>*FvwmTabs: fixedSizeTabs <I>bool</I><DD>
<A NAME="ixABE"></A>
<I>bool</I> can be either <I>true</I> or <I>false</I>. If true, the tab-manager will ensure each tab-button has the same dimensions. If false, the selected tab is expanded so that it is fully visible. The default value is <I>false</I>.
<DT>*FvwmTabs: showTitlebar <I>bool</I><DD>
<A NAME="ixABF"></A>
Show internal titlebar. If set to <I>true</I> a titlebar appears below the row of tab-buttons &amp; displays the title associated with the current window. This titlebar is capable of displaying long or multi-line titles. The default value is <I>true</I>.
<DT>*FvwmTabs: useTMTitlebar <I>bool</I><DD>
<A NAME="ixABG"></A>
Add the title associated with the selected tab to the tab-manager titlebar. (ie. the titlebar at the top of the window, distinct from the titlebar below the tab-buttons.) Default value is <I>true</I>.
<DT>*FvwmTabs: dragDropIcon <I>imageFile</I><DD>
<A NAME="ixABH"></A>
Specify the icon to display when performing a drag-&amp;-drop operation to reorder the tab-buttons. FvwmTabs will search the ImagePath for this image unless an absolute filename (ie. filename begins with '/') is specified. The default value is <I>none</I>. If <I>none</I> (or an invalid file) is specified a * is used.
<DT>*FvwmTabs: bBuggyFocus <I>bool</I><DD>
<A NAME="ixABI"></A>
FvwmTabs tries to work around a limitation in Perl/Tk (there is no way to access the timestamp associated with <FONT>WM_TAKE_FOCUS</FONT> events). On some systems this doesn't work and sometimes tab-managers have trouble acquiring the focus. If this happens to you, try setting this option to <I>true</I>. This can lead to focussing race-conditions (tab-managers temporarily ``steal'' focus in some situations) but this is less annoying than not being able to focus at all.
<DT>*FvwmTabs: enableSwallowDND <I>bool</I><DD>
<A NAME="ixABJ"></A>
Swallow windows that (are moved to) overlap a tabber.
Note: drag-&amp;-drop can be enabled for individual tabbers via the menu.
The default value is <I>true</I>.
<DT>*FvwmTabs: swallowDNDTolerance <I>tol</I><DD>
<A NAME="ixABK"></A>
Determines how much a window must overlap a tabber
for it to be swallowed when drag-&amp;-drop is enabled. If the value has a
%-sign appended to it, windows must overlap by the specified percentage
of the current size of the tabber. If no %-sign is present, the value
is treated in units of pixels.
The default value is <I>10</I> (pixels).
<DT>*FvwmTabs: useIconsOnTabs <I>bool</I><DD>
<A NAME="ixABL"></A>
Show the mini icon associated with each window on its tab button.
Note: mini icons for apps that use <FONT>EWMH</FONT> icons look a bit distorted.
This is because of the poor image resizing algorithm used in Tk. This
should be rectified in the near future.
The default value is <I>true</I>.
<DT>*FvwmTabs: killIcon <I>image</I><DD>
<A NAME="ixABM"></A>
Image to use on kill toolbar button. Default is <I>none</I>.
<DT>*FvwmTabs: addIcon <I>image</I><DD>
<A NAME="ixABN"></A>
Image to use on add toolbar button. Default is <I>none</I>.
<DT>*FvwmTabs: swallowIcon <I>image</I><DD>
<A NAME="ixABO"></A>
Image to use on add toolbar button when tabber will swallow next window to popup. Default is <I>none</I>. By using a separate icon to <I>addIcon</I>, this option provides visual feedback on when a tabber will unconditionally swallow the next window to popup.
<DT>*FvwmTabs: releaseIcon <I>image</I><DD>
<A NAME="ixABP"></A>
Image to use on release toolbar button. Default is <I>none</I>.
<DT>*FvwmTabs: menuIcon <I>image</I><DD>
<A NAME="ixABQ"></A>
Image to use on menu toolbar button. Default is <I>none</I>.
</DL>
<A NAME="lbAH">&nbsp;</A>
<H2>FVWM FUNCTIONS FOR KEY BINDINGS</H2>

<A NAME="ixABR"></A>
A number of <FONT>fvwm</FONT> functions are available once the <B><u>FvwmTabs</u></B> module is started.
<DL COMPACT>
<DT>NewTabber<DD>
<A NAME="ixABS"></A>
Create a new tabber. Optional argument is tabber name. No whitespace is allowed in the tabber name. Can also prefix --geometry argument.


<P>


Example: NewTabber --geometry=+200+400 scottie
<DT>Tabize<DD>
<A NAME="ixABT"></A>
Add a window (as a tab) to a tabber.
<DT>NextTab<DD>
<A NAME="ixABU"></A>
Show/select the next tab.
<DT>PrevTab<DD>
<A NAME="ixABV"></A>
Show/select the previous tab.
<DT>LastTab<DD>
<A NAME="ixABW"></A>
Show/select the last selected tab (if there was one).
<DT>ReleaseTab<DD>
<A NAME="ixABX"></A>
Release a tabbed window back to <FONT>fvwm</FONT>.
<DT>ReleaseIconifyTab<DD>
<A NAME="ixABY"></A>
Release a tabbed window back to <FONT>fvwm</FONT> &amp; iconify it.
<DT>ReleaseAllTabs<DD>
<A NAME="ixABZ"></A>
Release all windows in a tab-manager back to <FONT>fvwm</FONT>.
<DT>ReleaseIconifyAllTabs<DD>
<A NAME="ixACA"></A>
Release all windows in a tab-manager back to <FONT>fvwm</FONT> &amp; iconify them.
<DT>CloseTabber<DD>
<A NAME="ixACB"></A>
Destroy a tab-manager. All windows in the tab-manager are released back to <FONT>fvwm</FONT>.
<DT>AddTab<DD>
<A NAME="ixACC"></A>
Pick a new window to add to a tab-manager. Selecting this option &amp; clicking on a window will add the selected window to the tab-manager.
<DT>MultiAddTab<DD>
<A NAME="ixACD"></A>
Pick &amp; add new windows to a tab-manager until <FONT>ESC</FONT> is pressed.
<DT>ShowTab <I>tabNo</I><DD>
<A NAME="ixACE"></A>
Show/select tab <I>tabNo</I> in the tab-manager. <I>tabNo</I> is zero-based. ie. 0 is the first tab, 1 is the second, etc.
<DT>AddToTabber<DD>
<A NAME="ixACF"></A>
Add a window (as a tab) to a tab-manager.
<DT>SwapLeft<DD>
<A NAME="ixACG"></A>
Swap the selected window with the window on its immediate left.
<DT>SwapRight<DD>
<A NAME="ixACH"></A>
Swap the selected window with the window on its immediate right.
<DT>SelectTabber<DD>
<A NAME="ixACI"></A>
Select a tab-manager for a new window to be added to.
<DT>EnableDND<DD>
<A NAME="ixACJ"></A>
Swallow windows that (are moved to) overlap a tabber.
</DL>
<A NAME="lbAI">&nbsp;</A>
<H2>KEY BINDINGS</H2>

<A NAME="ixACK"></A>
By default, <B><u>FvwmTabs</u></B> reads a default user configuration file <I>FvwmTabs-DefaultSetup</I> which defines several useful key-bindings for <B><u>FvwmTabs</u></B>. You can tell <B><u>FvwmTabs</u></B> <FONT>NOT</FONT> to read this file with <TT>&quot;SetEnv FvwmTabs_NoDefaultSetup&quot;</TT> - this environment variable must be set <I>before</I> starting the module.
<P>

All of the key bindings can be changed using the standard <FONT>fvwm</FONT> <I>Key</I> command &amp; making use of the aforementioned <FONT>fvwm</FONT> functions. ie.
<P>

Key (FvwmTabs*) A A <FONT>CM</FONT> Function AddTab
<P>

Then, pressing Ctrl-Alt-a (when the focus is in a tab-manager) will allow you to click on a window to add to the tab-manager.
<P>

The default key bindings (set in the <I>FvwmTabs-DefaultSetup</I> file) are:
<DL COMPACT>
<DT>Ctrl-Alt-a<DD>
<A NAME="ixACL"></A>
AddTab
<DT>Ctrl-Alt-c<DD>
<A NAME="ixACM"></A>
CloseTabber
<DT>Ctrl-Alt-i<DD>
<A NAME="ixACN"></A>
ReleaseIconifyTab
<DT>Ctrl-Alt-Shift-I<DD>
<A NAME="ixACO"></A>
ReleaseIconifyAllTabs
<DT>Ctrl-Alt-l<DD>
<A NAME="ixACP"></A>
LastTab
<DT>Ctrl-Alt-m<DD>
<A NAME="ixACQ"></A>
MultiAddTab
<DT>Ctrl-Alt-n &amp; Ctrl-Alt-Tab<DD>
<A NAME="ixACR"></A>
NextTab
<DT>Ctrl-Alt-p<DD>
<A NAME="ixACS"></A>
PrevTab
<DT>Ctrl-Alt-r<DD>
<A NAME="ixACT"></A>
ReleaseTab
<DT>Ctrl-Alt-Shift-R<DD>
<A NAME="ixACU"></A>
ReleaseAllTabs
<DT>Ctrl-Alt-t<DD>
<A NAME="ixACV"></A>
NewTabber
<DT>Ctrl-Alt-<I>num</I><DD>
<A NAME="ixACW"></A>
ShowTab <I>num</I>.
<DT>Ctrl-Alt-Left<DD>
<A NAME="ixACX"></A>
SwapLeft
<DT>Ctrl-Alt-Right<DD>
<A NAME="ixACY"></A>
SwapRight
</DL>
<A NAME="lbAJ">&nbsp;</A>
<H2>MOUSE BINDINGS</H2>

<A NAME="ixACZ"></A>
<A NAME="lbAK">&nbsp;</A>
<H2>Mouse bindings on Tab Buttons</H2>

<A NAME="ixADA"></A>
<I>Mouse-1</I> on a tab-button displays the window associated with the tab.
<P>

<I>Mouse-2</I> on a tab-button releases the window associated with the tab back to the window manager as a standalone window.
<P>

<I>Mouse-3</I> on a tab-button releases the window associated with the tab back to the window manager &amp; iconifies it.
<P>

The tab-buttons can be reordered with a drag-&amp;-drop operation initiated with <I>Ctrl-Mouse-2</I>. A dragged tab is inserted before the tab-button onto which it is dropped.
<A NAME="lbAL">&nbsp;</A>
<H2>Mouse bindings on Toolbar Icons</H2>

<A NAME="ixADB"></A>
<I>Mouse-1</I> on the ``menu'' button will bring up a menu of options. See <FONT>MENU</FONT> <FONT>BINDINGS</FONT>.
<P>

<I>Mouse-1</I> on the ``release'' button will release the selected window from the tabber.
<P>

<I>Mouse-2</I> on the ``release'' button will release all windows from the tabber, and iconify them.
<P>

<I>Mouse-3</I> on the ``release'' button will release all windows from the tabber.
<P>

<I>Mouse-1</I> on the ``add'' button will add the next window you click on to the tabber.
<P>

<I>Mouse-2</I> on the ``add'' button will add the next window to popup to the tabber.
<P>

<I>Mouse-3</I> on the ``add'' button will add every window you click on (until you press Esc) to the tabber.
<P>

<I>Mouse-1</I> on the ``kill'' button will <I>Close</I> the selected window.
<P>

<I>Mouse-2</I> on the ``kill'' button causes <I>FvwmTabs</I> to try to kill the selected window itself.
<P>

<I>Mouse-3</I> on the ``kill'' button will <I>Kill</I> the selected window.
<A NAME="lbAM">&nbsp;</A>
<H2>MENU BINDINGS</H2>

<A NAME="ixADC"></A>
<I>Mouse-1</I> on the ``menu'' button will bring up a menu of options:
<P>

<I>Release All</I> will release all tabbed programs back to the window manager as standalone windows.
<P>

<I>Release All (Iconify)</I> will release all tabbed programs back to the window manager as iconised standalone windows.
<P>

<I>Add</I> will add the next mouse-clicked window to the tab-manager.
<P>

<I>Add Next</I> will add the next window that is created to the tab-manager.
<P>

<I>Multi Add</I> keeps adding mouse-clicked windows to a tab-manager until the escape key is pressed. Useful for adding multiple windows to a tab-manager at once.
<P>

<I>Font</I> shows a sub-menu enabling you to dynamically configure the button/title/menu fonts, using the external program identified by the <I>fontSelector</I> option.
<P>

<I>Show Titlebar</I> toggles the display of the titlebar below the tab-buttons.
<P>

<I>Window Tabizer Dialog</I> will popup a dialog box for specifying windows to swallow. Windows can be specified explicitly (by name) or by using a (Perl) regular expression matcher. (Note: / character is automatically escaped.)
<P>

The menu options between the separators will display the window/tab associated with the text. (The menu text is actually the title associated with the window. The text on each tab-button is the icon name.)
<P>

<I>About</I> pops up a dialog with version/developer information.
<P>

<I>Close</I> will close the <B><u>FvwmTabs</u></B> window, invoking Release All in the process.
<A NAME="lbAN">&nbsp;</A>
<H2>BUGS</H2>

<A NAME="ixADD"></A>
<DL COMPACT>
<DT>* Tab-managers don't take focus when iconified.<DD>
<A NAME="ixADE"></A>

<DT>* FvwmTabs doesn't obey ClickToFocus mode.<DD>


<A NAME="ixADF"></A>
<DT>* FvwmTabs has a problem swallowing shaded windows.<DD>
<A NAME="ixADG"></A>
<DT>* Using Maximise to resize tab-manager windows prevents dynamic resizing from working.<DD>


<A NAME="ixADH"></A>

</DL>
<P>

Please send bug reports, feature requests &amp; queries about <B><u>FvwmTabs</u></B> to the <FONT>fvwm</FONT> Mailing list: <I><A HREF="mailto:fvwm@fvwm.org">fvwm@fvwm.org</A></I>. Be sure to include the word ``FvwmTabs'' somewhere in the subject line.
<A NAME="lbAO">&nbsp;</A>
<H2>TODO</H2>

<A NAME="ixADI"></A>
Features to be added to <B><u>FvwmTabs</u></B> in the future (in no particular order):
<DL COMPACT>
<DT>* Colorset support. (use Colorset tracker from fvwm-perllib)<DD>
<A NAME="ixADJ"></A>

<DT>* Use Ctrl-Mouse-1 instead of Ctrl-Mouse-2 to reorder (drag-&amp;-drop) windows.<DD>
<A NAME="ixADK"></A>
<DT>* option: menu item to sort tabs by name, file extension, etc.<DD>
<A NAME="ixADL"></A>
<DT>* For autoSwallow options that specify a tab-manager, create the tab-manager if it doesn't already exist. (default behaviour is not to swallow it)<DD>
<A NAME="ixADM"></A>

</DL>
<A NAME="lbAP">&nbsp;</A>
<H2>FVWMTABS HOMEPAGE</H2>

<A NAME="ixADN"></A>
There is some useful information about FvwmTabs, including a short tutorial, on the authors website:
<P>

&lt;<A HREF="http://members.optusnet.com.au/~scottsmedley/fvwmtabs/">http://members.optusnet.com.au/~scottsmedley/fvwmtabs/</A>&gt;.
<A NAME="lbAQ">&nbsp;</A>
<H2>LICENSING</H2>

<A NAME="ixADO"></A>
<B><u>FvwmTabs</u></B> is <FONT>GPL</FONT> software.
<P>

See &lt;<A HREF="http://www.gnu.org/licenses/gpl.html">http://www.gnu.org/licenses/gpl.html</A>&gt;
<A NAME="lbAR">&nbsp;</A>
<H2>AUTHOR</H2>

<A NAME="ixADP"></A>
Scott Smedley
&lt;<A HREF="mailto:ss@aao.gov.au">ss@aao.gov.au</A>&gt;
<P>

<HR>
<A NAME="index">&nbsp;</A><H2>Index</H2>
<DL>
<DT><A HREF="#lbAB">NAME</A><DD>
<DT><A HREF="#lbAC">SYNOPSIS</A><DD>
<DT><A HREF="#lbAD">DESCRIPTION</A><DD>
<DT><A HREF="#lbAE">INVOCATION</A><DD>
<DT><A HREF="#lbAF">INSTALLING DEPENDENCIES</A><DD>
<DT><A HREF="#lbAG">CONFIGURATION OPTIONS</A><DD>
<DT><A HREF="#lbAH">FVWM FUNCTIONS FOR KEY BINDINGS</A><DD>
<DT><A HREF="#lbAI">KEY BINDINGS</A><DD>
<DT><A HREF="#lbAJ">MOUSE BINDINGS</A><DD>
<DT><A HREF="#lbAK">Mouse bindings on Tab Buttons</A><DD>
<DT><A HREF="#lbAL">Mouse bindings on Toolbar Icons</A><DD>
<DT><A HREF="#lbAM">MENU BINDINGS</A><DD>
<DT><A HREF="#lbAN">BUGS</A><DD>
<DT><A HREF="#lbAO">TODO</A><DD>
<DT><A HREF="#lbAP">FVWMTABS HOMEPAGE</A><DD>
<DT><A HREF="#lbAQ">LICENSING</A><DD>
<DT><A HREF="#lbAR">AUTHOR</A><DD>
</DL>
<HR>
This document was created by
man2html,
using the manual pages.<BR>
Time: 12:36:11 GMT, August 29, 2007


<?php decoration_window_end(); ?>

<!-- Automatically generated by manpages2php on 29-Aug-2007 -->
