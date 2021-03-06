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
$title          = "FVWM - Perl library - General::Parse";
$heading        = "FVWM - Perl library - General::Parse";
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

<?php decoration_window_start("Manual page for General::Parse in unstable branch (2.5.14)"); ?>

<H1>General::Parse</H1>
Section: FVWM Perl library (3)<BR>Updated: 2005-08-24<BR>Source: <a href="ftp://ftp.fvwm.org/pub/fvwm/devel/sources/perllib/General/Parse.pm">General/Parse.pm</a><br>
<A HREF="#index">This page contents</A>
 - <a href="./">Return to main index</A><HR>

<A NAME="lbAB">&nbsp;</A>
<H2>NAME</H2>

General::Parse - parsing functions
<A NAME="lbAC">&nbsp;</A>
<H2>SYNOPSIS</H2>

<A NAME="ixAAC"></A>
<blockquote><pre>  use General::Parse;</pre></blockquote>
<P>

<blockquote><pre>  my $string = q{Some &quot;not very long&quot; string of 6 tokens.};
  my $token1 = cutToken(\$string);          # $token1 = &quot;Some&quot;;
  my ($token2, $token3) = cutTokens(\$string, 2);
  my @subtokens = getTokens($token2);       # (&quot;not&quot;, &quot;very&quot;, &quot;long&quot;)
  my $subtoken1 = getToken($token2);        # the same as $subtokens[0]
  my $endingArrayRef = getTokens($string);  # [&quot;of&quot;, &quot;6&quot;, &quot;tokens.&quot;]</pre></blockquote>
<A NAME="lbAD">&nbsp;</A>
<H2>DESCRIPTION</H2>

<A NAME="ixAAD"></A>
This package may be used for parsing a string into tokens (quoted words).
<A NAME="lbAE">&nbsp;</A>
<H2>FUNCTIONS</H2>

<A NAME="ixAAE"></A>
<A NAME="lbAF">&nbsp;</A>
<H2>getToken</H2>

<A NAME="ixAAF"></A>
<DL COMPACT>
<DT>description<DD>
<A NAME="ixAAG"></A>
Returns the first token of the given string without changing the string itself.


<P>


If the string is empty or consists of only spaces the returned token is undef.


<P>


If the caller expects a scalar - the token is returned. If it expects an
array - 2 values returned, the token and the rest of the string.
<DT>parameters<DD>
<A NAME="ixAAH"></A>
String (scalar) to be parsed.
<DT>returns<DD>
<A NAME="ixAAI"></A>
Token (scalar).
Or, in array context, array of 2 scalars: token and the rest of string.
</DL>
<A NAME="lbAG">&nbsp;</A>
<H2>cutToken</H2>

<A NAME="ixAAJ"></A>
<DL COMPACT>
<DT>description<DD>
<A NAME="ixAAK"></A>
Returns the first token of the given string, the input string is cut to
contain tokens starting from the second one.


<P>


If the string is empty or consists of only spaces the returned token is undef
and the string is changed to an empty string.
<DT>parameters<DD>
<A NAME="ixAAL"></A>
String (scalar) to be parsed.
<DT>returns<DD>
<A NAME="ixAAM"></A>
Token (scalar).
</DL>
<A NAME="lbAH">&nbsp;</A>
<H2>getTokens</H2>

<A NAME="ixAAN"></A>
<DL COMPACT>
<DT>description<DD>
<A NAME="ixAAO"></A>
Returns all or the requested number of tokens of the given string without
changing the string itself.


<P>


The returned array may contain less tokens than requested if the string
is too short. Particularly, the returned array is empty if the string is empty
or consists of only spaces.


<P>


If the caller expects a scalar - a reference to the token array is returned.
If it expects an array - the token array is returned.
<DT>parameters<DD>
<A NAME="ixAAP"></A>
String (scalar) to be parsed, and optional limit (integer) for number of
returned tokens.
<DT>returns<DD>
<A NAME="ixAAQ"></A>
Tokens (array of scalars or array ref of scalars depending on context).
</DL>
<A NAME="lbAI">&nbsp;</A>
<H2>cutTokens</H2>

<A NAME="ixAAR"></A>
<DL COMPACT>
<DT>description<DD>
<A NAME="ixAAS"></A>
Returns the requested number of tokens of the given string, the string is cut
to contain the tokens starting from the first non returned token.


<P>


The returned array may contain less tokens than requested if the string
is too short. Particularly, the returned array is empty if the string is empty
or consists of only spaces.


<P>


If the caller expects a scalar - a reference to the token array is returned.
If it expects an array - the token array is returned.
<DT>parameters<DD>
<A NAME="ixAAT"></A>
String (scalar) to be parsed, and limit (integer) for number of
returned tokens.
<DT>returns<DD>
<A NAME="ixAAU"></A>
Tokens (array of scalars or array ref of scalars depending on context).
</DL>
<A NAME="lbAJ">&nbsp;</A>
<H2>eqi</H2>

<A NAME="ixAAV"></A>
<DL COMPACT>
<DT>description<DD>
<A NAME="ixAAW"></A>
Similar to <B>eq</B>, but case-insensitive, gets 2 strings, returns boolean.
</DL>
<A NAME="lbAK">&nbsp;</A>
<H2>nei</H2>

<A NAME="ixAAX"></A>
<DL COMPACT>
<DT>description<DD>
<A NAME="ixAAY"></A>
Similar to <B>ne</B>, but case-insensitive, gets 2 strings, returns boolean.
</DL>
<A NAME="lbAL">&nbsp;</A>
<H2>AUTHOR</H2>

<A NAME="ixAAZ"></A>
Mikhael Goikhman &lt;<A HREF="mailto:migo@homemail.com">migo@homemail.com</A>&gt;
<P>

<HR>
<A NAME="index">&nbsp;</A><H2>Index</H2>
<DL>
<DT><A HREF="#lbAB">NAME</A><DD>
<DT><A HREF="#lbAC">SYNOPSIS</A><DD>
<DT><A HREF="#lbAD">DESCRIPTION</A><DD>
<DT><A HREF="#lbAE">FUNCTIONS</A><DD>
<DT><A HREF="#lbAF">getToken</A><DD>
<DT><A HREF="#lbAG">cutToken</A><DD>
<DT><A HREF="#lbAH">getTokens</A><DD>
<DT><A HREF="#lbAI">cutTokens</A><DD>
<DT><A HREF="#lbAJ">eqi</A><DD>
<DT><A HREF="#lbAK">nei</A><DD>
<DT><A HREF="#lbAL">AUTHOR</A><DD>
</DL>
<HR>
This document was created by
man2html,
using the manual pages.<BR>
Time: 00:51:37 GMT, August 27, 2005


<?php decoration_window_end(); ?>

<!-- Automatically generated by perllib2php on 27-Aug-2005 -->
