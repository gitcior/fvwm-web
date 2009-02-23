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
$title          = "FVWM - Man page - FvwmConsoleC.pl";
$heading        = "FVWM - Man page - FvwmConsoleC.pl";
$link_name      = "Man page";
$link_picture   = "pictures/icons/doc_manpages";
$parent_site    = "documentation";
$child_sites    = array();
$requested_file = basename(my_get_global("PHP_SELF", "SERVER"));
$this_site      = "manpages_unstable_FvwmConsoleC.pl";

//--------------------------------------------------------------------
// load the layout file
//--------------------------------------------------------------------
if(!isset($site_has_been_loaded)) {
	$site_has_been_loaded = "true";
	include_once(sec_filename($layout_file));
	exit();
}
?>

<?php decoration_window_start("Manual page for FvwmConsoleC.pl in unstable branch (2.5.27)"); ?>

<H1>FvwmConsoleC.pl</H1>
Section: Fvwm Modules (1)<BR>Updated: 23 Feb 2009 (2.5.27)<BR><A HREF="#index">This page contents</A>
 - <a href="<?php echo conv_link_target('./');?>">Return to main index</A><HR>


<P>
<A NAME="lbAB">&nbsp;</A>
<H2>NAME</H2>

FvwmConsoleC.pl - Command editor for fvwm command input interface
<A NAME="lbAC">&nbsp;</A>
<H2>SYNOPSIS</H2>

FvwmConsole -e /usr/X11/lib/fvwm/FvwmConsoleC.pl
<P>
<A NAME="lbAD">&nbsp;</A>
<H2>COPYRIGHT</H2>

Copyright 1996, Toshi Isogai. No guarantees or warranties are provided.
Use this program at your own risk. Permission to use this program for
any purpose is given, as long as the copyright is kept intact.
<P>
<P>
<A NAME="lbAE">&nbsp;</A>
<H2>DESCRIPTION</H2>

FvwmConsoleC.pl offers editing capabilities  while  the  user  is
entering  the line.  By default, the line editing commands
are similar to those of emacs. It also offers
<B>substitution</B>

, which replaces a pattern to a string before it sends the command.
<P>
<A NAME="lbAF">&nbsp;</A>
<H2>FUNCTIONS</H2>

Functions are bound to a key or key combination to be
invoked. The followings are functions available and their
default key bindings.
<DL COMPACT><DT><DD>
<DL COMPACT>
<DT><B>bind</B><DD>
<I>Meta-k, Ctrl-x Ctrl-b</I>
<BR>


List up key bindings and substitutions.
<DT><B>boh</B><DD>
<BR>

Move to the beginning of history.
<DT><B>boh_ign_mode</B>  <I>Esc-&lt;</I><DD>
<BR>

Move to the beginning of history. If it is in search mode,
continue.
<DT><B>bol</B><DD>
<I>Home, Ctrl-a</I>
<BR>

Move cursor to the beginning of the line.
<DT><B>bs[(n)]</B> <I>BackSpace, Ctrl-h</I><DD>
<BR>

Backspace n times. default of n is 1.
<DT><B>cancel</B><DD>
<I>Ctrl-x Ctrl-k</I>
<BR>

Cancel the current input.
<DT><B>del_back_line</B><DD>
<BR>

Delete the line from the beginning to the cursor.
<DT><B>del_back_word</B> <I>Ctrl-w</I><DD>
<BR>

Delete the word from the beginning to the cursor.
<DT><B>del_char [(n)]</B> <I>Delete, Ctrl-d</I><DD>
Delete n characters from the cursor to the right. Default of n
is 1.
<DT><B>del_forw_line</B> <I>Ctrl-k</I><DD>
<BR>

Delete the line from the cursor to the end.
<DT><B>del_forw_word</B> <I>Meta-d</I><DD>
<BR>

Delete the word from the cursor to the end.
<DT><B>del_line</B> <I>Ctrl-u</I><DD>
<BR>

Delete the entire line.
<DT><B>enter</B><DD>
<I>Enter, Ctrl-j, Ctrl-m</I>
<BR>

Perform substitution if applicable and send the line to fvwm.
<DT><B>enter_wo_subst</B> <I>Meta-Enter</I><DD>
<BR>

Send the line to fvwm without any substitution.
<DT><B>eoh</B><DD>
<BR>

Move to the end of history.
<DT><B>eoh_ign_mode</B> <I>Esc-&gt;</I><DD>
<BR>

Move to the end of history. If it is in search mode, continue.
<DT><B>eol</B><DD>
<I>End, Ctrl-e</I>
<BR>

Move the cursor to the end of line.
<DT><B>ins_char (str)</B><DD>
<BR>

Insert string at the cursor.
<DT><B>ins_last_word</B> <I>Esc-.</I><DD>
<BR>

Insert the last argument of the previous command at the cursor.
<DT><B>ins_nth_word</B> <I>Meta-[1..9]</I><DD>
<BR>

Insert the n-th argument of the previous command at the cursor.
<DT><B>list_func</B> <I>Meta-l</I><DD>
<BR>

List up available editing functions.
<DT><B>next_char</B> <I>Right, Ctrl-f</I><DD>
<BR>

Move the cursor to the next character.
<DT><B>next_line</B> <I>Down, Ctrl-n</I><DD>
<BR>

Move to the next line in history.
<DT><B>next_word</B> <I>Meta-f</I><DD>
<BR>

Move the cursor to the next word.
<DT><B>prefix</B><DD>
<BR>

Wait for the next character typed in  for multi-key binding.
<DT><B>prev_char</B> <I>Left, Ctrl-b</I><DD>
<BR>

Move the cursor to the previous character.
<DT><B>prev_line</B> <I>Up, Ctrl-p</I><DD>
<BR>

Move to the previous line in history.
<DT><B>prev_word</B> <I>Meta-b</I><DD>
<BR>

Move the cursor to the previous word.
<DT><B>quote</B><DD>
<I>Ctrl-q</I>
<BR>

Insert the next character  typed  into  the  buffer literally.
<DT><B>search</B><DD>
<I>Ctrl-s</I>
<BR>

Search pattern in history.
<DT><B>search_rev</B> <I>Ctrl-r</I><DD>
<BR>

Search pattern in history in reverse order.
<DT><B>subst</B><DD>
<I>Meta-s</I>
<BR>

Substitute all patterns to strings and reprint the line.
The substitutions are not nested and performed in the order
that they are defined.
</DL>
</DL>

<P>
<A NAME="lbAG">&nbsp;</A>
<H2>CONFIGURATION</H2>

The key binding can be overridden or defined
in fvwm module configuration.
<P>
<DL COMPACT><DT><DD>
*FvwmConsole: Key \ck prev_line
</DL>

<P>
Non-space character sequence need not be quoted.
In order to undefine, omit the last argument.
<P>
<DL COMPACT><DT><DD>
*FvwmConsole: Key \ck
</DL>

<P>
Note that non-meta character is case sensitive.
\c means control key, \e means escape, and \m is alt key.
<BR>

It also accepts Subst configuration. Users often input long fvwm command
repeatedly. Subst will replace particular input sequence to user defined
string. Example:
<P>
<DL COMPACT><DT><DD>
*FvwmConsole: Subst '^bigx' 'Exec xterm -g 120x60+0+0 -fn 10x20 -fg black -bg lemonchiffon'
</DL>

<P>
Typing 'bigx&lt;return&gt;' in FvwmConsole will launch xterm. '^' denotes
the beginning of line in
<B>regular expression.</B>

'pl' in the middle
of the command will not be replaced. Although the format looks different,
it takes Perl regular expression.
It just uses single or double quote as the delimiter.
Single or double quotes have no difference, although they have to match,
and cannot include itself in the string.
<P>
<DL COMPACT><DT><DD>
*FvwmConsole: Subst '^g\s*(\d+)' 'Desk 0 0\nGotoPage 0 $1\nFocus'
</DL>

<P>
Entering 'g4' or 'g  4' will jump to desk 0 page 0 4 and focus.
<P>
<A NAME="lbAH">&nbsp;</A>
<H2>INVOCATION</H2>

FvwmConsoleC.pl should be invoked by FvwmConsole.
<P>
<A NAME="lbAI">&nbsp;</A>
<H2>SEE ALSO</H2>

<A HREF="/cgi-bin/man/man2html/1x+FvwmConsole">FvwmConsole</A>(1x), <A HREF="/cgi-bin/man/man2html/1+perlre">perlre</A>(1)
<P>
<A NAME="lbAJ">&nbsp;</A>
<H2>AUTHOR</H2>

Toshi Isogai
<P>

<HR>
<A NAME="index">&nbsp;</A><H2>Index</H2>
<DL>
<DT><A HREF="#lbAB">NAME</A><DD>
<DT><A HREF="#lbAC">SYNOPSIS</A><DD>
<DT><A HREF="#lbAD">COPYRIGHT</A><DD>
<DT><A HREF="#lbAE">DESCRIPTION</A><DD>
<DT><A HREF="#lbAF">FUNCTIONS</A><DD>
<DT><A HREF="#lbAG">CONFIGURATION</A><DD>
<DT><A HREF="#lbAH">INVOCATION</A><DD>
<DT><A HREF="#lbAI">SEE ALSO</A><DD>
<DT><A HREF="#lbAJ">AUTHOR</A><DD>
</DL>
<HR>
This document was created by
<A HREF="/cgi-bin/man/man2html">man2html</A>,
using the manual pages.<BR>
Time: 22:35:20 GMT, February 23, 2009


<?php decoration_window_end(); ?>

<!-- Automatically generated by manpages2php on 23-Feb-2009 -->
