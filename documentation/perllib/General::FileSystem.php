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
$title          = "FVWM - Perl library - General::FileSystem";
$heading        = "FVWM - Perl library - General::FileSystem";
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
	include(sec_filename($layout_file));
	exit();
}
?>

<?php decoration_window_start("Manual page for General::FileSystem in unstable branch (2.5.8)"); ?>

<H1>General::FileSystem</H1>
Section: FVWM Perl library (3)<BR>Updated: 2003-10-26<BR>Source: <a href="ftp://ftp.fvwm.org/pub/fvwm/devel/sources/perllib/General/FileSystem.pm">General/FileSystem.pm</a><br>
<A HREF="#index">This page contents</A>
 - <a href="./">Return to main index</A><HR>

<A NAME="lbAB">&nbsp;</A>
<H2>NAME</H2>

General::FileSystem - file system specific functions
<A NAME="lbAC">&nbsp;</A>
<H2>SYNOPSIS</H2>

<A NAME="ixAAC"></A>
<blockquote><pre>  use General::FileSystem &quot;-die&quot;, &quot;-debug&quot;;  # die on errors</pre></blockquote>
<P>

<blockquote><pre>  eval {
    makePath(&quot;/tmp/my-own/dir&quot;);</pre></blockquote>
<P>

<blockquote><pre>    my $fileContentRef = loadFile(&quot;/etc/issue&quot;);
    saveFile(&quot;/tmp/my-own/dir/issue&quot;, $fileContentRef);</pre></blockquote>
<P>

<blockquote><pre>    # This is equivalent to the previous two lines, but optimized
    copyFile(&quot;/etc/issue&quot;, &quot;/tmp/my-own/dir/issue&quot;);</pre></blockquote>
<P>

<blockquote><pre>    makeDir(&quot;/tmp/my-own/dir2&quot;, 0711);
    copyFile(&quot;/etc/issue&quot;, &quot;/tmp/my-own/dir2/issue&quot;);
    moveFile(&quot;/tmp/my-own/dir2/issue&quot;, &quot;/tmp/my-own/dir2/issue2&quot;);
    removeFile(&quot;/tmp/my-own/dir2/issue2&quot;);
    cleanDir(&quot;/tmp/my-own/dir2&quot;); # no effect, it's empty already</pre></blockquote>
<P>

<blockquote><pre>    removeDir(&quot;/tmp/my-own&quot;);
  };
  if ($@) {
    print &quot;File System Error: $@&quot;;
  };</pre></blockquote>
<P>

or just:
<P>

<blockquote><pre>  use General::FileSystem;
  copyFile(&quot;origin.txt&quot;, &quot;backup.txt&quot;);</pre></blockquote>
<A NAME="lbAD">&nbsp;</A>
<H2>DESCRIPTION</H2>

<A NAME="ixAAD"></A>
This package contains common file operation functions:
<P>

<B>loadFile</B>, <B>saveFile</B>, <B>appendFile</B>, <B>removeFile</B>, <B>copyFile</B>, <B>moveFile</B>,
<B>makeDir</B>, <B>makePath</B>, <B>cleanDir</B>, <B>removeDir</B>, <B>copyDir</B>, <B>moveDir</B>,
<B>listFileNames</B>, <B>findFile</B>, <B>findExecutable</B>,
<B>defaultDirPerm</B>, <B>preserveStat</B>, <B>parsePath</B>, <B>getCwd</B>.
<P>

On fatal file system errors all functions call the error handler, that may
throw exception (die), issue a warning or quietly return undef.
You may control this by passing one of the arguments <I>-die</I>, <I>-warn</I>
or <I>-quiet</I> in <B>use</B> or by setting <TT>$ERROR_HANDLER</TT> to one of these
values (don't specify a dash in this case).
<A NAME="lbAE">&nbsp;</A>
<H2>REQUIREMENTS</H2>

<A NAME="ixAAE"></A>
Cwd, File::Basename, File::Copy.
<A NAME="lbAF">&nbsp;</A>
<H2>FUNCTIONS</H2>

<A NAME="ixAAF"></A>
<A NAME="lbAG">&nbsp;</A>
<H2>loadFile</H2>

<A NAME="ixAAG"></A>
<DL COMPACT>
<DT>usage<DD>
<A NAME="ixAAH"></A>
<blockquote><pre>  $contentRef = loadFile($fileName)</pre></blockquote>
<DT>description<DD>
<A NAME="ixAAI"></A>
Loads file with given file-name from local filesystem.
<DT>parameters<DD>
<A NAME="ixAAJ"></A>
<blockquote><pre>  * fileName - name of the file to be loaded.</pre></blockquote>
<DT>returns<DD>
<A NAME="ixAAK"></A>
Reference to file content string on success, otherwise either dies or warns
and returns undef as configured.
</DL>
<A NAME="lbAH">&nbsp;</A>
<H2>saveFile</H2>

<A NAME="ixAAL"></A>
<DL COMPACT>
<DT>description<DD>
<A NAME="ixAAM"></A>
Saves file-content to local filesystem with given file-name.
<DT>usage<DD>
<A NAME="ixAAN"></A>
<blockquote><pre>  saveFile($fileName, \$fileContent);</pre></blockquote>
<DT>parameters<DD>
<A NAME="ixAAO"></A>
<blockquote><pre>  * fileName - name of the file to be saved into
  * fileContentRef - reference to file-content string
  * createSubdirs - optional flag (default is 0 - don't create subdirs)</pre></blockquote>
<DT>returns<DD>
<A NAME="ixAAP"></A>
<TT>1</TT> on success, otherwise either dies or warns and returns undef as configured.
</DL>
<A NAME="lbAI">&nbsp;</A>
<H2>appendFile</H2>

<A NAME="ixAAQ"></A>
<DL COMPACT>
<DT>description<DD>
<A NAME="ixAAR"></A>
Appends file-append-content to local filesystem with given file-name.
<DT>usage<DD>
<A NAME="ixAAS"></A>
<blockquote><pre>  appendFile($fileName, \$fileAppendContent);</pre></blockquote>
<DT>parameters<DD>
<A NAME="ixAAT"></A>
<blockquote><pre>  * fileName - name of the file to be saved into
  * fileAppendContentRef - reference to file-append-content string</pre></blockquote>
<DT>returns<DD>
<A NAME="ixAAU"></A>
<TT>1</TT> on success, otherwise either dies or warns and returns undef as configured.
</DL>
<A NAME="lbAJ">&nbsp;</A>
<H2>removeFile</H2>

<A NAME="ixAAV"></A>
<DL COMPACT>
<DT>description<DD>
<A NAME="ixAAW"></A>
Removes all files from given directory.
<DT>usage<DD>
<A NAME="ixAAX"></A>
<blockquote><pre>  removeFile($fileName);</pre></blockquote>
<DT>parameters<DD>
<A NAME="ixAAY"></A>
<blockquote><pre>  * fileName - name of the file to be deleted</pre></blockquote>
<DT>returns<DD>
<A NAME="ixAAZ"></A>
<TT>1</TT> on success, otherwise either dies or warns and returns undef as configured.
</DL>
<A NAME="lbAK">&nbsp;</A>
<H2>makeDir</H2>

<A NAME="ixABA"></A>
<DL COMPACT>
<DT>description<DD>
<A NAME="ixABB"></A>
Removes all files from given directory.
<DT>usage<DD>
<A NAME="ixABC"></A>
<blockquote><pre>  makeDir($PREVIEW_DIR);</pre></blockquote>
<DT>parameters<DD>
<A NAME="ixABD"></A>
<blockquote><pre>  * directory to make
  * optional creating dir permissions (default is $DEFAULT_DIR_PERM)</pre></blockquote>
<DT>returns<DD>
<A NAME="ixABE"></A>
<TT>1</TT> on success, otherwise either dies or warns and returns undef as configured.
</DL>
<A NAME="lbAL">&nbsp;</A>
<H2>makePath</H2>

<A NAME="ixABF"></A>
<DL COMPACT>
<DT>description<DD>
<A NAME="ixABG"></A>
Removes all files from given directory.
<DT>usage<DD>
<A NAME="ixABH"></A>
<blockquote><pre>  makePath($PUBLISH_DIR);</pre></blockquote>
<DT>parameters<DD>
<A NAME="ixABI"></A>
<blockquote><pre>  * path to make
  * optional creating dir permissions (default is $DEFAULT_DIR_PERM)</pre></blockquote>
<DT>returns<DD>
<A NAME="ixABJ"></A>
<TT>1</TT> on success, otherwise either dies or warns and returns undef as configured.
</DL>
<A NAME="lbAM">&nbsp;</A>
<H2>copyFile</H2>

<A NAME="ixABK"></A>
<DL COMPACT>
<DT>description<DD>
<A NAME="ixABL"></A>
Copies a file to another location.
<DT>usage<DD>
<A NAME="ixABM"></A>
<blockquote><pre>  copyFile($from, $to);</pre></blockquote>
<DT>parameters<DD>
<A NAME="ixABN"></A>
<blockquote><pre>  * file name to copy from
  * file name to copy to</pre></blockquote>
<DT>returns<DD>
<A NAME="ixABO"></A>
<TT>1</TT> on success, otherwise either dies or warns and returns undef as configured.
</DL>
<A NAME="lbAN">&nbsp;</A>
<H2>moveFile</H2>

<A NAME="ixABP"></A>
<DL COMPACT>
<DT>description<DD>
<A NAME="ixABQ"></A>
Moves (or renames) a file to another location.
<DT>usage<DD>
<A NAME="ixABR"></A>
<blockquote><pre>  moveFile($from, $to);</pre></blockquote>
<DT>parameters<DD>
<A NAME="ixABS"></A>
<blockquote><pre>  * file name to move from
  * file name to move to</pre></blockquote>
<DT>returns<DD>
<A NAME="ixABT"></A>
<TT>1</TT> on success, otherwise either dies or warns and returns undef as configured.
</DL>
<A NAME="lbAO">&nbsp;</A>
<H2>cleanDir</H2>

<A NAME="ixABU"></A>
<DL COMPACT>
<DT>description<DD>
<A NAME="ixABV"></A>
Removes all files from given directory.
<DT>usage<DD>
<A NAME="ixABW"></A>
<blockquote><pre>  cleanDir($PREVIEW_DIR);</pre></blockquote>
<DT>parameters<DD>
<A NAME="ixABX"></A>
<blockquote><pre>  * directory to clean
  * optional flag:
    0 - don't go recursively, unlink files in first level only
    1 - recursively clean subdirs (default)
    2 - unlink subdirs
    3 - unlink given directory</pre></blockquote>
<DT>returns<DD>
<A NAME="ixABY"></A>
<TT>1</TT> on success, otherwise either dies or warns and returns undef as configured.
</DL>
<A NAME="lbAP">&nbsp;</A>
<H2>removeDir</H2>

<A NAME="ixABZ"></A>
<DL COMPACT>
<DT>description<DD>
<A NAME="ixACA"></A>
Entirely removes given directory and its content (if any).
This is an alias to <TT>cleanDir(3)</TT>.
<DT>usage<DD>
<A NAME="ixACB"></A>
<blockquote><pre>  removeDir($TMP_DIR);</pre></blockquote>
<DT>parameters<DD>
<A NAME="ixACC"></A>
<blockquote><pre>  * directory to clean</pre></blockquote>
<DT>returns<DD>
<A NAME="ixACD"></A>
<TT>1</TT> on success, otherwise either dies or warns and returns undef as configured.
</DL>
<A NAME="lbAQ">&nbsp;</A>
<H2>copyDir</H2>

<A NAME="ixACE"></A>
<DL COMPACT>
<DT>description<DD>
<A NAME="ixACF"></A>
Recursively copies all files and subdirectories inside given directory
to new location.


<P>


Destination directory must not exist. Use: <TT>&quot;trap { removeDir($dest); };&quot;</TT>
to remove it before copying.
<DT>usage<DD>
<A NAME="ixACG"></A>
<blockquote><pre>  copyDir($dirFrom, $dirTo);</pre></blockquote>
<DT>parameters<DD>
<A NAME="ixACH"></A>
<blockquote><pre>  * source directory to copy
  * destination directory to copy to (may not exist)
  * optional creating dir permissions (default is $DEFAULT_DIR_PERM)</pre></blockquote>
<DT>returns<DD>
<A NAME="ixACI"></A>
<TT>1</TT> on success, otherwise either dies or warns and returns undef as configured.
</DL>
<A NAME="lbAR">&nbsp;</A>
<H2>moveDir</H2>

<A NAME="ixACJ"></A>
<DL COMPACT>
<DT>description<DD>
<A NAME="ixACK"></A>
Moves (or actually renames) a directory to another location.


<P>


Destination directory must not exist. Use: <TT>&quot;trap { removeDir($dest); };&quot;</TT>
to remove it before copying.
<DT>usage<DD>
<A NAME="ixACL"></A>
<blockquote><pre>  moveDir($dirFrom, $dirTo);</pre></blockquote>
<DT>parameters<DD>
<A NAME="ixACM"></A>
<blockquote><pre>  * source directory to move from
  * destination directory to move to (must not exist)</pre></blockquote>
<DT>returns<DD>
<A NAME="ixACN"></A>
<TT>1</TT> on success, otherwise either dies or warns and returns undef as configured.
</DL>
<A NAME="lbAS">&nbsp;</A>
<H2>listFileNames</H2>

<A NAME="ixACO"></A>
<DL COMPACT>
<DT>description<DD>
<A NAME="ixACP"></A>
Returns the file names in the given directory including all types of files
(regular, directory, link, other), not including '.' and '..' entries.
<DT>usage<DD>
<A NAME="ixACQ"></A>
<blockquote><pre>  # mini file lister
  $dir = '/home/ftp';
  foreach my $file (@{listFileNames($dir)}) {
    print &quot;File $file\n&quot; if -f &quot;$dir/$file&quot;;
    print &quot;Dir  $file\n&quot; if -d &quot;$dir/$file&quot;;
  }</pre></blockquote>
<DT>parameters<DD>
<A NAME="ixACR"></A>
<blockquote><pre>  * directory to list (or array ref of directories)
  * optional flag, 1 means work recursively, the default is 0</pre></blockquote>
<DT>returns<DD>
<A NAME="ixACS"></A>
Array ref of scalars (file names) on success.
Otherwise either dies or warns and returns undef as configured.
</DL>
<A NAME="lbAT">&nbsp;</A>
<H2>findFile</H2>

<A NAME="ixACT"></A>
<DL COMPACT>
<DT>description<DD>
<A NAME="ixACU"></A>
Searches for the given file in the given directories.


<P>


Returns the fully qualified file name.
<DT>usage<DD>
<A NAME="ixACV"></A>
<blockquote><pre>  my $gtkrc = findFile(&quot;.gtkrc&quot;, [$home, &quot;$home/.gnome&quot;]);</pre></blockquote>
<DT>parameters<DD>
<A NAME="ixACW"></A>
<blockquote><pre>  * file name to search for
  * array ref of directories to search in</pre></blockquote>
<DT>returns<DD>
<A NAME="ixACX"></A>
File name with full path if found, or undef if not found.
</DL>
<A NAME="lbAU">&nbsp;</A>
<H2>findExecutable</H2>

<A NAME="ixACY"></A>
<DL COMPACT>
<DT>description<DD>
<A NAME="ixACZ"></A>
Searches for the given executable file in the directories that are in the
environmebt variable <TT>$PATH</TT> or in the additional parameter.


<P>


Returns the fully qualified file name.
<DT>usage<DD>
<A NAME="ixADA"></A>
<blockquote><pre>  my $gzipExe = findExecutable(&quot;gzip&quot;, [&quot;/usr/gnu/bin&quot;, &quot;/gnu/bin&quot;]);</pre></blockquote>
<DT>parameters<DD>
<A NAME="ixADB"></A>
<blockquote><pre>  * file name to search for (only executables are tested)
  * optional array ref of directories to search in</pre></blockquote>
<DT>returns<DD>
<A NAME="ixADC"></A>
File name with full path if found, or undef if not found.
</DL>
<A NAME="lbAV">&nbsp;</A>
<H2>defaultDirPerm</H2>

<A NAME="ixADD"></A>
<DL COMPACT>
<DT>description<DD>
<A NAME="ixADE"></A>
This functions changes default directory permissions, used in
<TT>&quot;makeDir&quot;</TT>, <TT>&quot;makePath&quot;</TT>, <TT>&quot;copyDir&quot;</TT> and <TT>&quot;moveDir&quot;</TT> functions.


<P>


The default of this package is 0775.


<P>


If no parameters specified, the current value is returned.
<DT>usage<DD>
<A NAME="ixADF"></A>
<blockquote><pre> defaultDirPerm(0700);</pre></blockquote>
<DT>parameters<DD>
<A NAME="ixADG"></A>
<blockquote><pre>  * optional default directory permission (integer)</pre></blockquote>
<DT>returns<DD>
<A NAME="ixADH"></A>
Previous value.
</DL>
<A NAME="lbAW">&nbsp;</A>
<H2>preserveStat</H2>

<A NAME="ixADI"></A>
<DL COMPACT>
<DT>description<DD>
<A NAME="ixADJ"></A>
This functions changes behavior of <TT>&quot;copyFile&quot;</TT> and <TT>&quot;copyDir&quot;</TT> functions.
If 0 is given as a parameter stats will not be preserved.


<P>


<FONT>TODO:</FONT> specify values for diferent preserves:


<P>


<blockquote><pre>  0 nothing
  1 mode   file mode  (type and permissions)
  2 uid    numeric user ID of file's owner
  4 gid    numeric group ID of file's owner
  8 atime  last access time since the epoch
 16 mtime  last modify time since the epoch
 32 ctime  inode change time (NOT creation time!) since the epo</pre></blockquote>


<P>


The default of this package is 0.


<P>


If no parameters specified, nothing is set (only current value is returned).
<DT>usage<DD>
<A NAME="ixADK"></A>
<blockquote><pre>  preserveStat(1);</pre></blockquote>
<DT>parameters<DD>
<A NAME="ixADL"></A>
<blockquote><pre>  * optional flag (currently 0 or 1)</pre></blockquote>
<DT>returns<DD>
<A NAME="ixADM"></A>
Previous value.
</DL>
<A NAME="lbAX">&nbsp;</A>
<H2>parsePath</H2>

<A NAME="ixADN"></A>
<DL COMPACT>
<DT>usage<DD>
<A NAME="ixADO"></A>
<blockquote><pre>  my ($dirName, $baseName) = parsePath($fileName);</pre></blockquote>
<DT>examples<DD>
<A NAME="ixADP"></A>
<blockquote><pre>  # in: &quot;/data/projects/magazine&quot;  out: (&quot;/data/projects&quot;, &quot;magazine&quot;)
  # in: &quot;/magazine&quot;                out: (&quot;&quot;, &quot;magazine&quot;)
  # in: &quot;dir/&quot;                     out: (dir&quot;, &quot;&quot;)
  # in: &quot;magazine&quot;                 out: (&quot;.&quot;, &quot;magazine&quot;)</pre></blockquote>


<P>


<blockquote><pre>  # in: &quot;c:\projects\magazine&quot;     out: (&quot;c:\projects&quot;, &quot;magazine&quot;)
  # in: &quot;c:\magazine&quot;              out: (&quot;c:&quot;, &quot;magazine&quot;)
  # in: &quot;c:magazine&quot;               out: (&quot;c:.&quot;, &quot;magazine&quot;)</pre></blockquote>
<DT>description<DD>
<A NAME="ixADQ"></A>
Returns a list of 2 scalars: directory name and base name. All unix and dos
file names supported.


<P>


Note, the rule is this: you can join both scalars using a directory delimiter
(slash or backslash) and you will always get the the original (logical)
file name.
</DL>
<A NAME="lbAY">&nbsp;</A>
<H2>getCwd</H2>

<A NAME="ixADR"></A>
<DL COMPACT>
<DT>usage<DD>
<A NAME="ixADS"></A>
<blockquote><pre>  my $cwd = getCwd();</pre></blockquote>
<DT>description<DD>
<A NAME="ixADT"></A>
Returns the current working directory.
</DL>
<A NAME="lbAZ">&nbsp;</A>
<H2>BUGS</H2>

<A NAME="ixADU"></A>
All global functions and constants in this package should probably be
instantiated into a class object. As usual there are pros and cons.
<A NAME="lbBA">&nbsp;</A>
<H2>AUTHOR</H2>

<A NAME="ixADV"></A>
Mikhael Goikhman &lt;<A HREF="mailto:migo@homemail.com">migo@homemail.com</A>&gt;
<P>

<HR>
<A NAME="index">&nbsp;</A><H2>Index</H2>
<DL>
<DT><A HREF="#lbAB">NAME</A><DD>
<DT><A HREF="#lbAC">SYNOPSIS</A><DD>
<DT><A HREF="#lbAD">DESCRIPTION</A><DD>
<DT><A HREF="#lbAE">REQUIREMENTS</A><DD>
<DT><A HREF="#lbAF">FUNCTIONS</A><DD>
<DT><A HREF="#lbAG">loadFile</A><DD>
<DT><A HREF="#lbAH">saveFile</A><DD>
<DT><A HREF="#lbAI">appendFile</A><DD>
<DT><A HREF="#lbAJ">removeFile</A><DD>
<DT><A HREF="#lbAK">makeDir</A><DD>
<DT><A HREF="#lbAL">makePath</A><DD>
<DT><A HREF="#lbAM">copyFile</A><DD>
<DT><A HREF="#lbAN">moveFile</A><DD>
<DT><A HREF="#lbAO">cleanDir</A><DD>
<DT><A HREF="#lbAP">removeDir</A><DD>
<DT><A HREF="#lbAQ">copyDir</A><DD>
<DT><A HREF="#lbAR">moveDir</A><DD>
<DT><A HREF="#lbAS">listFileNames</A><DD>
<DT><A HREF="#lbAT">findFile</A><DD>
<DT><A HREF="#lbAU">findExecutable</A><DD>
<DT><A HREF="#lbAV">defaultDirPerm</A><DD>
<DT><A HREF="#lbAW">preserveStat</A><DD>
<DT><A HREF="#lbAX">parsePath</A><DD>
<DT><A HREF="#lbAY">getCwd</A><DD>
<DT><A HREF="#lbAZ">BUGS</A><DD>
<DT><A HREF="#lbBA">AUTHOR</A><DD>
</DL>
<HR>
This document was created by
man2html,
using the manual pages.<BR>
Time: 00:49:08 GMT, November 01, 2003


<?php decoration_window_end(); ?>

<!-- Automatically generated by perllib2php on 01-Nov-2003 -->
