#!/usr/bin/perl

# ##########################################################################
# This program is free software; you can redistribute it and/or modify
# it under the terms of the GNU General Public License as published by
# the Free Software Foundation; either version 2 of the License, or
# (at your option) any later version.

# This program is distributed in the hope that it will be useful,
# but WITHOUT ANY WARRANTY; without even the implied warranty of
# MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
# GNU General Public License for more details.

# You should have received a copy of the GNU General Public License
# along with this program; if not, write to the Free Software
# Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
# ##########################################################################

# Use this script after adding an image to index.html.
# This script goes thru index.html and finds the lines with the
# format:

# <a href="X.htmlY

# it then looks for an image ending in .jpg, .gif, or .png
# with the X part of the name above.

# Then it builds an html page containing the image and next and
# previous links. This way, if you select an image for viewing,
# you can easily navigate forward and backward thru all the full
# size images.

# To avoid timestamp corruption, only html pages that change are
# replaced.

#  Modification History

#  Created on 12/29/02 by Dan Espen (dane):
#  - Create pages to show full size screenshots, doubly link each page,

use strict;

my $body_prev_image='';
my $count=0;
my $found_count=0;
my $prev_image;
my $prev_height;
my $prev_width;

# Mainline
open (INPUT, "<index.html");
LINE: while (<INPUT>) {	# read index.html
  if (/<a href=.*(desk|panelup|paneldown).*html/) { # Find reference to desktop image wrapper
    &Found_Image($_);
    ++$found_count;
  }
  ++$count;
}
&Wrapper("");	# clean up the last image
print STDERR "Done, $count lines in index.html, $found_count image references checked.\n";
exit 0;


# An image line has been found
sub Found_Image {
  my $image = $_;
  chomp $image;
  $image =~ s/.*a href=\"(.*).html.*/$1/; # Pull out image base name
  if ( ! -f "$image.jpg" ) {	# Look for jpg image
    if ( ! -f "$image.gif" ) {	# or gif
      if ( ! -f "$image.png" ) {	# or png
	die "$0: Image $image(.jpg|.gif|.png) $image.png not found, giving up.\n";
      }
      $image="$image.png";
    } else {
      $image="$image.gif";
    }
  } else {
    $image="$image.jpg";
  }
  # Logic check, remove me when debugged: dje
  if ( ! -f $image ) {	# Look for jpg image
    die "$0: Image $image not found, giving up.\n";
  }
  # Get dimension of image
  my $convert = `identify $image`;
  # produces: xxx.jpg JPEG 640x480 DirectClass 8-bit 119kb 0.1u 0:01
  my ($one,$two,$three)=split(' ',$convert); # get image sizes
  my ($w,$h)=split('x',$three);
  ($h)=split(/[+]/,$h);
  #  print STDERR "Found image $image, size $w x $h\n";
  &Wrapper($image,$w,$h);	# create html wrapper file
}

# args: image, width, height
# Since the image wrappers are html pages with next and prev links,
# this routine writes pages as the next page is presented.
# There is one extra call at EOJ with the image name ""
# to flush the queue.

sub Wrapper {
  my ($image,$width,$height) = @_;
#  print "Wrapper called, image is $image, prev_image is $prev_image\n";
  if ( "$prev_image" ne "" ) {	# not first time,
    &Generate($prev_image,$prev_width,$prev_height,$image);
  }
  $prev_image=$image;
  $prev_height=$height;
  $prev_width=$width;
}

# This routine gets the same parameters as Wrapper, but they're delayed.
sub Generate {
  my ($image,$width,$height,$next_image) = @_;
  my ($title) = split(/[.]/,$image);
  # Reform the wrapper name:
  my $filename = Image_to_Html($image);
  open(IMAGE, ">$filename~")
    or die "$0: Cant open $filename~ ";
  &Header($image);
  &Body($image,$width,$height,$next_image);
  &Footer;
  close IMAGE;
  # Check to see if the wrapper is already there, and unchanged...
  if ( -f "$filename" ) {
    my $debuger = `diff "$filename" "$filename~" 2>&1`;
    if ( $? == 0 ) {
      print STDERR "Existing file $filename unchanged.\n";
      unlink "$filename~";
    } else {
      print STDERR "Existing file $filename changed, replaced.\n";
      unlink "$filename";
      rename "$filename~","$filename";
    }
  } else {
    rename "$filename~","$filename";
    print STDERR "New file $filename created.\n";
  }
}
# Generate the page header
sub Header {
  my ($title) = split(/[.]/,$_[0]);
  print IMAGE "<html>
  <head>
  <title>$title</title>
  </head>
  <body
  bgcolor=\"#000000\" text=\"#ffffff\"
  link=\"#FFFF88\" vlink=\"#EEDDDD\" alink=\"#ff0000\">
  <center>
  <h1><font color=\"pink\">$title</font></h1>
  </center>\n";
}
# Generate the page footer
sub Footer {
  print IMAGE "<hr>\n
  <!-- This file automatically generated by make-html.pl -->
  </body>
</html>";
}
# Generate the page body
sub Body {
  my ($image,$width,$height,$next_image) = @_;
  my $page;
  print IMAGE "<A href=\"index.html\">back to screenshot page</A><br>\n";
  if ( "$next_image" ne "" ) {	# If there is a next image
    $page=Image_to_Html($next_image);
    print IMAGE "<A href=\"$page\">Next image ($next_image)</A><br>\n";
  }
  if ( "$body_prev_image" ne "" ) {
    $page=Image_to_Html($body_prev_image);
    print IMAGE "<A href=\"$page\">Previous image ($body_prev_image)</A><br>\n";
  }
  print IMAGE "<hr><p>\n<IMG SRC=\"$image\" ALT=\"$image\" width=\"$width\" ";
  print IMAGE "height=\"$height\">\n<p>\n";
#  print "image is $image, prev_image is $prev_image\n";
  $body_prev_image=$image;
}
# Convert the image name to the html name
sub Image_to_Html {
  my ($root) = split(/[.]/,$_[0]);
  return ("$root" . '.html');
}

