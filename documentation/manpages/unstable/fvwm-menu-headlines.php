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
$title          = "FVWM - Man page - fvwm-menu-headlines";
$heading        = "FVWM - Man page - fvwm-menu-headlines";
$link_name      = "Man page";
$link_picture   = "pictures/icons/doc_manpages";
$parent_site    = "documentation";
$child_sites    = array();
$requested_file = basename(my_get_global("PHP_SELF", "SERVER"));
$this_site      = "manpages_unstable_fvwm-menu-headlines";

//--------------------------------------------------------------------
// load the layout file
//--------------------------------------------------------------------
if(!isset($site_has_been_loaded)) {
	$site_has_been_loaded = "true";
	include_once(sec_filename($layout_file));
	exit();
}
?>

<?php decoration_window_start("Manual page for fvwm-menu-headlines in unstable branch (2.7.1)"); ?>

<H1>fvwm-menu-headlines</H1>
Section: Fvwm Utilities (1)<BR>Updated: 2009-03-22<BR><A HREF="#index">This page contents</A>
 - <a href="<?php echo conv_link_target('./');?>">Return to main index</A><HR>






<A NAME="lbAB">&nbsp;</A>
<H2>NAME</H2>

fvwm-menu-headlines - builds headlines menu definition for fvwm
<A NAME="lbAC">&nbsp;</A>
<H2>SYNOPSIS</H2>



<B><u>fvwm-menu-headlines</u></B> [ <B>--help</B>|<B>-h</B>|<B>-?</B> ] [ <B>--version</B>|<B>-V</B> ] [ <B>--info</B> [site] ] [ <B>--site</B>|<B>-s</B> site ] [ <B>--name</B>|<B>-n</B> name ] [ <B>--title</B>|<B>-t</B> title ] [ <B>--item</B> item ] [ <B>--exec</B>|<B>-e</B> exec-command ] [ <B>--command</B>|<B>-e</B> fvwm-command ] [ <B>--icon-title</B> icon ] [ <B>--icon-item</B> icon ] [ <B>--icon-home</B> icon ] [ <B>--icon-error</B> icon ] [ <B>--wm-icons</B> ] [ <B>--frontpage</B> [where] ] [ <B>--proxy</B>|<B>-p</B> host:port ] [ <B>--file</B> [file] ] [ <B>--fake</B> [file] ] [ <B>--timeout</B> seconds ]
<A NAME="lbAD">&nbsp;</A>
<H2>DESCRIPTION</H2>



This configurable perl script builds an fvwm menu definition for headlines of popular news web sites: FreshMeat, Slashdot, LinuxToday, DaemonNews, GNOME-News, KDE-News, RootPrompt, LinuxFr, ThinkGeek, <FONT>CNN</FONT>, <FONT>BBC</FONT> and more.
<P>

It is possible to specify a customized menu item format, change a command (usually launching a browser) and add menu icons (there is a support for the wm-icons package).
<A NAME="lbAE">&nbsp;</A>
<H2>OPTIONS</H2>



<DL COMPACT>
<DT><B>--help</B><DD>


show the help and exit
<DT><B>--version</B><DD>


show the version and exit
<DT><B>--info</B> [site]<DD>


if site name is given print the site specific info, otherwise print all site names
<DT><B>--site</B> site<DD>


defile a web site, headlines of which to show, this option also can be used together with --help to get new defaults. Default site: freshmeat.
<DT><B>--name</B> name<DD>


define menu name (default is ``MenuHeadlinesFreshmeat'')
<DT><B>--title</B> title<DD>


define menu title (default is ``Freshmeat Headlines'').
<DT><B>--item</B> label-format<DD>



<DT><B>--exec</B> command-format<DD>



define format for menu item or command (what is shown and what is executed when the item is chosen). Default label is '%h\t%[(%Y-%m-%d <TT>%H:</TT>%M)]'. <FONT>TAB</FONT> can be specified as '\t', but in .fvwm2rc you should specify a double backslash or a real <FONT>TAB</FONT>.


<P>


Format specifiers for a headline format:


<P>


<blockquote><pre>  %h - headline
  %u - url
  %d - date in the native format (that site backend supplied)
  %[strftime-argument-string] - date/time, see <A HREF="/cgi-bin/man/man2html/3+strftime">strftime</A>(3)
    the date/time is represented according to the local time;
    date and/or time fields that can't be guessed are stripped
    Example: %[|%d %B %Y| %H:%M %S]
      If site supplied only date - this becomes %[|%d %B %Y|],
      if site supplied no date - this becomes an empty string.
  %{name} - site specific named value, like %{comments}
  %(text) - arbitrary text, good for escaping or aligning</pre></blockquote>


<P>


These specifiers can receive an optional integer size, positive for right adjusted string or negative for left adjusted, example: <TT>%8x</TT>; and optional *num or *-num, which means to leave only the first or last (if minus) num of chars, the num must be greater than 3, since the striped part is replaced with ``...'', example: %*30x. Both can be combined: %-10*-20x, this instructs to get only the 20 last characters, but if the length is less then 10 - to fill with up to 10 spaces on the right.


<P>


Example:


<P>


<blockquote><pre>  --exec &quot;iceweasel -remote 'openURL(%u, new-window)' || iceweasel '%u'&quot;</pre></blockquote>
<DT><B>--command</B> command-format<DD>


like <B>--exec</B> above, but enables to specify any fvwm command, for example, ``Function FuncFvwmShowURL '%u''' not only Exec.


<P>


In fact, --exec=``mozilla '%u''' is equivalent to --command=``Exec mozilla '%u'''
<DT><B>--icon-title</B> icon<DD>



<DT><B>--icon-item</B> icon<DD>


<DT><B>--icon-home</B> icon<DD>


<DT><B>--icon-error</B> icon<DD>



define menu icon for title, regular item, frontpage item and error item respectively. Default is no menu icons (equivalent to an empty icon argument).
<DT><B>--wm-icons</B><DD>


define icon names suitable for use with wm-icons package. Currently this is equivalent to: --icon-title '' --icon-item menu/information.xpm --icon-home menu/home.xpm --icon-error menu/choice-no.xpm.
<DT><B>--frontpage</B> [where]<DD>


add the site frontpage item to the menu. Optional value can be used to specify where this item will be placed in the menu - 'top' or 't', 'bottom' or 'b'.
<DT><B>--proxy</B> host[:port]<DD>


define a proxy to use. Example: --proxy proxy.inter.net:3128
<DT><B>--file</B> [file]<DD>


write the menu output to specified file. If no filename is given with this option (or empty filename), the default filename <FONT>WORK_HOME/SITE</FONT>.menu is used. Without this option or with '-' filename, the menu output is written to standard output.
<DT><B>--fake</B> [file]<DD>


don't connect to the host using <FONT>HTTP</FONT> protocol, instead, read from <FONT>WORK_HOME/SITE</FONT>.in file. The following reads input from freshmeat.in (downloaded <A HREF="http://freshmeat.net/backend/recentnews.txt)">http://freshmeat.net/backend/recentnews.txt)</A> and saves output to segfault.menu (both files are in <FONT>WORK_HOME</FONT>): fvwm-menu-headlines --site freshmeat --fake --file
<DT><B>--timeout</B> seconds<DD>


limit a line reading from a socket to this timeout, the default timeout is 20 seconds.
</DL>
<P>

<FONT>WORK_HOME</FONT> of this script is ~/.fvwm/.fvwm-menu-headlines. It is created if needed.
<P>

Option parameters can be specified either using '=' or in the next argument. Short options are ok if not ambiguous: <TT>&quot;-h&quot;</TT>, <TT>&quot;-t&quot;</TT>; but be careful with short options, what is now unambiguous, can become ambiguous in the next versions.
<A NAME="lbAF">&nbsp;</A>
<H2>USAGE</H2>



1. One of the ways to use this script is to define a crontab entry to run the script every hour or so for every monitored site:
<P>

<blockquote><pre>  0,30 * * * * fvwm-menu-headlines --file --site freshmeat
  1,31 * * * * fvwm-menu-headlines --file --site linuxtoday
  2,32 * * * * fvwm-menu-headlines --file --site slashdot</pre></blockquote>
<P>

Then add these lines to your fvwm configuration file:
<P>

<blockquote><pre>  DestroyFunc FuncFvwmMenuHeadlines
  AddToFunc   FuncFvwmMenuHeadlines
  + I Read &quot;$HOME/.fvwm/.fvwm-menu-headlines/$0.menu&quot;

  DestroyMenu MenuHeadlines
  AddToMenu   MenuHeadlines &quot;Headlines&quot; Title
  + MissingSubmenuFunction FuncFvwmMenuHeadlines
  + &quot;FreshMeat&quot;  Popup freshmeat
  + &quot;LinuxToday&quot; Popup linuxtoday
  + &quot;Slashdot&quot;   Popup slashdot</pre></blockquote>
<P>

2. Another way to use this script (only if you have fast network/proxy) is to run it every time you want to open your Headlines submenus. (Note, the submenu that is once created is not reloaded, use ``Reset all''.)
<P>

In this case your fvwm configuration lines could be:
<P>

<blockquote><pre>  DestroyFunc FuncFvwmMenuHeadlines
  AddToFunc   FuncFvwmMenuHeadlines
  + I PipeRead &quot;fvwm-menu-headlines --site $0&quot;
  #+ I Schedule 900000 DestroyMenu $0  # reset generated menu in 15 minutes

  DestroyMenu MenuHeadlines
  AddToMenu   MenuHeadlines &quot;Headlines&quot; Title
  + MissingSubmenuFunction FuncFvwmMenuHeadlines
  + &quot;FreshMeat&quot;  Popup freshmeat
  + &quot;Slashdot&quot;   Popup slashdot
  + &quot;LinuxToday&quot; Popup linuxtoday
  + &quot;GNOME News&quot; Popup gnome-news
  + &quot;KDE News&quot;   Popup kde-news
  + &quot;&quot; Nop
  + &quot;Reset all&quot;  FuncResetHeadlines

  DestroyFunc FuncResetHeadlines
  AddToFunc   FuncResetHeadlines
  + I DestroyMenu freshmeat
  + I DestroyMenu linuxtoday
  + I DestroyMenu slashdot
  + I DestroyMenu gnome-news
  + I DestroyMenu kde-news</pre></blockquote>
<P>

And finally, add ``Popup MenuHeadlines'' somewhere.
<P>

3. Here is a usual usage. Use FvwmConsole or FvwmCommand to run fvwm commands from a shell script. Every time you want headlines from some site, execute (give any additional options if you want):
<P>

<blockquote><pre>  PipeRead &quot;fvwm-menu-headlines --site newsforge --name MenuHeadlinesNewsForge&quot;
  # this may take several seconds, you may use: BusyCursor Read true
  Popup MenuHeadlinesNewsForge</pre></blockquote>
<A NAME="lbAG">&nbsp;</A>
<H2>HOW TO ADD SITE HEADLINES</H2>



It is possible to add user defined site headlines without touching the script itself. Put your perl extensions to the file WORK_HOME/extension.pl. For each site add something similar to:
<P>

<blockquote><pre>  $site_info-&gt;{'myslashdot'} = {
    'name' =&gt; &quot;MySlashdot&quot;,
    'host' =&gt; &quot;myslashdot.org&quot;,
    'path' =&gt; &quot;/myslashdot.xml&quot;,
    'func' =&gt; \&amp;process_my_slashdot,
    # the following string is only used in --info
    'flds' =&gt; 'time, title, department, topic, author, url',
  };

  sub process_my_slashdot () {
    return process_xml(
      'story',
      # mandatory 'h', 'u' and 'd' aliases or undef
      { 'h' =&gt; 'title', 'u' =&gt; 'url', 'd' =&gt; 'time' },
      sub ($) {  # convert 'd' string to (y, m, d, H, M, S)
        $_[0] =~ /(\d+)-(\d+)-(\d+) (\d+):(\d+):(\d+)/;
        ($1, ($2 || 0) - 1, $3, $4, $5, $6);
      }, +0,  # timezone offset; already in UTC
    );
  }

  1;</pre></blockquote>
<A NAME="lbAH">&nbsp;</A>
<H2>AUTHORS</H2>



This script is inspired by WMHeadlines v1.3 by:
<P>

<blockquote><pre>  Jeff Meininger &lt;<A HREF="mailto:jeffm@boxybutgood.com">jeffm@boxybutgood.com</A>&gt;
  (<A HREF="http://rive.boxybutgood.com/WMHeadlines/).">http://rive.boxybutgood.com/WMHeadlines/).</A></pre></blockquote>
<P>

Reimplemented for fvwm and heavily enhanced by:
<P>

<blockquote><pre>  Mikhael Goikhman &lt;<A HREF="mailto:migo@homemail.com">migo@homemail.com</A>&gt;, 16 Dec 1999.</pre></blockquote>
<A NAME="lbAI">&nbsp;</A>
<H2>COPYING</H2>



The script is distributed by the same terms as fvwm itself. See <FONT>GNU</FONT> General Public License for details.
<A NAME="lbAJ">&nbsp;</A>
<H2>BUGS</H2>



I try to keep all supported site info up to date, but sites often go down, change their backend formats, change their httpd responses, just stop to post news and so on; the script in the latest cvs may be more up to date.
<P>

The headline times may be off by one hour or more, since the time is displayed for your local time zone, and the time zone of the original time in the site backend output is often guessed (sometimes incorrectly); similarly it is guessed whether to apply the daylight saving correction.
<P>

Report bugs to <A HREF="mailto:fvwm-bug@fvwm.org">fvwm-bug@fvwm.org</A>.
<P>

<HR>
<A NAME="index">&nbsp;</A><H2>Index</H2>
<DL>
<DT><A HREF="#lbAB">NAME</A><DD>
<DT><A HREF="#lbAC">SYNOPSIS</A><DD>
<DT><A HREF="#lbAD">DESCRIPTION</A><DD>
<DT><A HREF="#lbAE">OPTIONS</A><DD>
<DT><A HREF="#lbAF">USAGE</A><DD>
<DT><A HREF="#lbAG">HOW TO ADD SITE HEADLINES</A><DD>
<DT><A HREF="#lbAH">AUTHORS</A><DD>
<DT><A HREF="#lbAI">COPYING</A><DD>
<DT><A HREF="#lbAJ">BUGS</A><DD>
</DL>
<HR>
This document was created by
<A HREF="/cgi-bin/man/man2html">man2html</A>,
using the manual pages.<BR>
Time: 16:23:05 GMT, April 15, 2011


<?php decoration_window_end(); ?>

<!-- Automatically generated by manpages2php on 15-Apr-2011 -->
