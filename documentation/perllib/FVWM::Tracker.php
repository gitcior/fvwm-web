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
$title          = "FVWM - Perl library - FVWM::Tracker";
$heading        = "FVWM - Perl library - FVWM::Tracker";
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

<?php decoration_window_start("Manual page for FVWM::Tracker in unstable branch (2.5.8)"); ?>

<H1>FVWM::Tracker</H1>
Section: FVWM Perl library (3)<BR>Updated: 2003-10-26<BR>Source: <a href="ftp://ftp.fvwm.org/pub/fvwm/devel/sources/perllib/FVWM/Tracker.pm">FVWM/Tracker.pm</a><br>
<A HREF="#index">This page contents</A>
 - <a href="./">Return to main index</A><HR>

<A NAME="lbAB">&nbsp;</A>
<H2>DESCRIPTION</H2>

<A NAME="ixAAC"></A>
Tracker is an object that automatically listens to certain fvwm events and
gathers an information in the background.
<P>

When a tracker is created it may enter its own event loop to gather an
initial data, so the returned tracker object already has the initial data.
It also continues to update the data automatically until it is stopped.
<P>

This package is a superclass for the concrete tracker implementations.
It defines the common Tracker <FONT>API</FONT>, including a way to access the tracked data
and to define high level events for the tracker caller to observe.
<A NAME="lbAC">&nbsp;</A>
<H2>SYNOPSYS</H2>

<A NAME="ixAAD"></A>
Using <B><a href="<?php echo conv_link_target('./FVWM::Module.php');?>">FVWM::Module</a></B> <TT>$module</TT> object:
<P>

<blockquote><pre>    my $tracker = $module-&gt;track(&quot;TrackerName&quot;, @params);
    my $initialData = $tracker-&gt;data;
    $tracker-&gt;observe(&quot;observable1&quot;, sub { shift-&gt;data });
    $tracker-&gt;observe(&quot;observable2&quot;, sub { shift-&gt;stop });</pre></blockquote>
<P>

In the future this syntax will probably work too:
<P>

<blockquote><pre>    my $tracker = new FVWM::Tracker::TrackerName($module, @params);
    my $initialData = $tracker-&gt;start;
    $tracker-&gt;observe(&quot;observable1&quot;, sub { shift-&gt;data });
    $tracker-&gt;observe(&quot;observable2&quot;, sub { shift-&gt;stop });</pre></blockquote>
<A NAME="lbAD">&nbsp;</A>
<H2>PUBLIC METHODS</H2>

<A NAME="ixAAE"></A>
<DL COMPACT>
<DT><B>start</B><DD>
<A NAME="ixAAF"></A>
Makes the tracker actually work, i.e. listen to <I><a href="<?php echo conv_link_target('./../manpages/unstable/fvwm.php');?>">fvwm</a></I> events,
gather data and forms high level events, so called observables.


<P>


This method is usually automatically called when the tracker is created
unless specifically asked not to.
<DT><B>stop</B><DD>
<A NAME="ixAAG"></A>
Stops the tracker activity. The corresponding <I><a href="<?php echo conv_link_target('./../manpages/unstable/fvwm.php');?>">fvwm</a></I> events are not listened,
data is not updated and no observers called.


<P>


To return the tracker to the normal activity, call <B>start</B> method.
<DT><B>restart</B><DD>
<A NAME="ixAAH"></A>
This is a shortcut method to <B>stop</B> and then <B>start</B> the tracker.
The following scenatio is possible. You start the tracker, read its
data and immediatelly stop it (to reduce event tracker to the module).
At some point you may want to read the updated data, so you restart the
tracker and optionally stop it again.


<P>


Note that no observers are removed during <B>stop</B>, so the tracker
theoretically may be restarted without any side effect even if some
observers are defined.
<DT><B>observe</B> [<I>observable</I>] <I>observer-callback</I><DD>
<A NAME="ixAAI"></A>
Defines an observer that will be called every time the tracker <I>observable</I>
happens. The <I>observer-callback</I> is a <FONT>CODE</FONT> reference that gets the
following parameters: <TT>$module</TT> (<B><a href="<?php echo conv_link_target('./FVWM::Module.php');?>">FVWM::Module</a></B> object), <TT>$tracker</TT> (this object),
<TT>$data</TT> (the same as returned by <B>data</B> method) and optional observable
parameters that are specific to this <I>observable</I>.


<P>


A special <I>observable</I> value ``main'' means the first observable defined
in the tracker, it is the default value when no <I>observable</I> is given.
<DT><B>unobserve</B> [<I>observable</I> [<I>observer-id</I>]]<DD>
<A NAME="ixAAJ"></A>
Stops an observing using the <I>observer-id</I> that is returned by <B>observe</B>
method.


<P>


A special <I>observable</I> value ``main'' means the first observable defined
in the tracker. A special <I>observable</I> value ``*'' means all defined
observables.
<DT><B>data</B><DD>
<A NAME="ixAAK"></A>
Returns the whole data collected by the tracker.


<P>


Usually subclasses add an optional parameter <I>key</I> that limits the whole
data to the given key.
<DT><B>dump</B><DD>
<A NAME="ixAAL"></A>
Returns the string representing the whole tracker data in the human readable
form, useful for debugging.


<P>


Usually subclasses add an optional parameter <I>key</I> that limits the whole
data to the given key.
</DL>
<A NAME="lbAE">&nbsp;</A>
<H2>METHODS FOR SUBCLASSES</H2>

<A NAME="ixAAM"></A>
<DL COMPACT>
<DT><B>observables</B><DD>
<A NAME="ixAAN"></A>
A subclass should define a list of observables that a caller may listen to
using <B>observe</B> method. It is the subclass responsiblity to actually signal
every observable listed using <B>notify</B> method.


<P>


Returns a reference to a string array.
<DT><B>new</B> <I>module</I> <I>param-hash</I><DD>
<A NAME="ixAAO"></A>
This superclass method should be called by subclasses.
Please do not use this class method in programs, use the first syntax shown
in the <I></I><FONT><I>SYNOPSYS</I></FONT><I></I> section instead.


<P>


<I>module</I> is an <B><a href="<?php echo conv_link_target('./FVWM::Module.php');?>">FVWM::Module</a></B> instance.
<I>param-hash</I> is specific to the concrete Tracker class.
<DT><B>addHandler</B> <I>type</I> <I>handler</I><DD>
<A NAME="ixAAP"></A>
A wrapper to <B><a href="<?php echo conv_link_target('./FVWM::Module.php');?>">FVWM::Module</a></B>::<B>addHandler</B>, has the same syntax, but stores
all handlers so they may be deleted at once using <B>deleteHandlers</B>.
<DT><B>deleteHandlers</B> [<I>handler-ids</I>]<DD>
<A NAME="ixAAQ"></A>
Deletes all handlers defined using addHandler or the ones specified
using an optional <I>handler-ids</I> array ref.
<DT><B>notify</B> <I>observable</I> [<I>observable-params</I>]<DD>
<A NAME="ixAAR"></A>
Notifies all listeners that were defined using <B>observe</B>, by calling their
observer function with the following parameters: <TT>$module</TT>, <TT>$tracker</TT>, <TT>$data</TT>,
<I>observable-params</I>.
<DT><B>requestWindowListEvents</B><DD>
<A NAME="ixAAS"></A>
Subclasses that work using <I><a href="<?php echo conv_link_target('./../manpages/unstable/fvwm.php');?>">fvwm</a></I> events sent in responce to
<B>Send_WindowList</B> command should call this shortcut method.
Automatically sends the needed command (after the tracker event mask is
counted) and defines a handler that terminates the initial tracker event
loop in response to <I>M_END_WINDOWLIST</I> event.
<DT><B>requestConfigInfoEvents</B><DD>
<A NAME="ixAAT"></A>
Subclasses that work using <I><a href="<?php echo conv_link_target('./../manpages/unstable/fvwm.php');?>">fvwm</a></I> events sent in responce to
<B>Send_ConfigInfo</B> command should call this shortcut method.
Automatically sends the needed command (after a tracker event mask is
counted) and defines a handler that terminates the initial tracker event
loop in response to <I>M_END_CONFIG_INFO</I> event.
<DT><B>internalDie</B><DD>
<A NAME="ixAAU"></A>
Subclasses may call this method when something wrong happens.
This is a wrapper to <B><a href="<?php echo conv_link_target('./FVWM::Module.php');?>">FVWM::Module</a></B>::<B>internalDie</B>.
<DT><B>toBeDisconnected</B><DD>
<A NAME="ixAAV"></A>
Does nothing by default. Subclasses may implement this method if something
should be sent to <I><a href="<?php echo conv_link_target('./../manpages/unstable/fvwm.php');?>">fvwm</a></I> just before the module disconnects itself.
</DL>
<A NAME="lbAF">&nbsp;</A>
<H2>AUTHOR</H2>

<A NAME="ixAAW"></A>
Mikhael Goikhman &lt;<A HREF="mailto:migo@homemail.com">migo@homemail.com</A>&gt;.
<A NAME="lbAG">&nbsp;</A>
<H2>SEE ALSO</H2>

<A NAME="ixAAX"></A>
For more information, see <a href="<?php echo conv_link_target('./FVWM::Module.php');?>">FVWM::Module</a> and the concrete tracker
implementations: <a href="<?php echo conv_link_target('./FVWM::Tracker::Colorsets.php');?>">FVWM::Tracker::Colorsets</a>, <a href="<?php echo conv_link_target('./FVWM::Tracker::GlobalConfig.php');?>">FVWM::Tracker::GlobalConfig</a>,
<a href="<?php echo conv_link_target('./FVWM::Tracker::ModuleConfig.php');?>">FVWM::Tracker::ModuleConfig</a>, <a href="<?php echo conv_link_target('./FVWM::Tracker::PageInfo.php');?>">FVWM::Tracker::PageInfo</a>,
<a href="<?php echo conv_link_target('./FVWM::Tracker::Scheduler.php');?>">FVWM::Tracker::Scheduler</a>, <a href="<?php echo conv_link_target('./FVWM::Tracker::WindowList.php');?>">FVWM::Tracker::WindowList</a>.
<P>

<HR>
<A NAME="index">&nbsp;</A><H2>Index</H2>
<DL>
<DT><A HREF="#lbAB">DESCRIPTION</A><DD>
<DT><A HREF="#lbAC">SYNOPSYS</A><DD>
<DT><A HREF="#lbAD">PUBLIC METHODS</A><DD>
<DT><A HREF="#lbAE">METHODS FOR SUBCLASSES</A><DD>
<DT><A HREF="#lbAF">AUTHOR</A><DD>
<DT><A HREF="#lbAG">SEE ALSO</A><DD>
</DL>
<HR>
This document was created by
man2html,
using the manual pages.<BR>
Time: 00:48:57 GMT, November 01, 2003


<?php decoration_window_end(); ?>

<!-- Automatically generated by perllib2php on 01-Nov-2003 -->
