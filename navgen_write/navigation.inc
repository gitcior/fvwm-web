<?php
//=============================================================
// This file has been generated automatically
// by 
// Created at 31/03/03 04:59
// You should change the order of $top_array only !!!
// Uwe Pross 2002
//=============================================================

// names of the top sites - you may change the order if you like
$top_array = array(
                   "home",
                   "news",
                   "features",
                   "screenshots",
                   "download",
                   "documentation",
                   "contact",
                   "links"
                   );

$fvwm_cats["file"]         = "fvwm_cats/index.php";
$fvwm_cats["rel_path"]     = "./..";
$fvwm_cats["link_name"]    = "Cats";
$fvwm_cats["link_chapter"] = "";
$fvwm_cats["link_pic"]     = "pictures/icons/fvwm_cats";
$fvwm_cats["parent_site"]  = "home";
$fvwm_cats["child_sites"]  = array();

$home["file"]         = "index.php";
$home["rel_path"]     = ".";
$home["link_name"]    = "Home";
$home["link_chapter"] = "";
$home["link_pic"]     = "pictures/icons/home";
$home["parent_site"]  = "top";
$home["child_sites"]  = array("fvwm_cats");

$news["file"]         = "news.php";
$news["rel_path"]     = ".";
$news["link_name"]    = "News";
$news["link_chapter"] = "";
$news["link_pic"]     = "pictures/icons/news";
$news["parent_site"]  = "top";
$news["child_sites"]  = array();

$features["file"]         = "features.php";
$features["rel_path"]     = ".";
$features["link_name"]    = "Features";
$features["link_chapter"] = "";
$features["link_pic"]     = "pictures/icons/features";
$features["parent_site"]  = "top";
$features["child_sites"]  = array();

$desktops["file"]         = "screenshots/desktops.php";
$desktops["rel_path"]     = "./..";
$desktops["link_name"]    = "Desktops";
$desktops["link_chapter"] = "";
$desktops["link_pic"]     = "pictures/icons/screenshots_desks";
$desktops["parent_site"]  = "screenshots";
$desktops["child_sites"]  = array();

$menus["file"]         = "screenshots/menus.php";
$menus["rel_path"]     = "./..";
$menus["link_name"]    = "Menus";
$menus["link_chapter"] = "";
$menus["link_pic"]     = "pictures/icons/screenshots_menu";
$menus["parent_site"]  = "screenshots";
$menus["child_sites"]  = array();

$screenshots["file"]         = "screenshots/index.php";
$screenshots["rel_path"]     = "./..";
$screenshots["link_name"]    = "Screenshots";
$screenshots["link_chapter"] = "";
$screenshots["link_pic"]     = "pictures/icons/screenshots";
$screenshots["parent_site"]  = "top";
$screenshots["child_sites"]  = array("desktops", "menus");

$icons["file"]         = "download/icons.php";
$icons["rel_path"]     = "./..";
$icons["link_name"]    = "Icons";
$icons["link_chapter"] = "";
$icons["link_pic"]     = "pictures/icons/download_icons";
$icons["parent_site"]  = "download";
$icons["child_sites"]  = array();

$download["file"]         = "download/index.php";
$download["rel_path"]     = "./..";
$download["link_name"]    = "Download";
$download["link_chapter"] = "";
$download["link_pic"]     = "pictures/icons/download";
$download["parent_site"]  = "top";
$download["child_sites"]  = array("icons");

$faq["file"]         = "documentation/faq.php";
$faq["rel_path"]     = "./..";
$faq["link_name"]    = "FAQ";
$faq["link_chapter"] = "";
$faq["link_pic"]     = "pictures/icons/doc_faq";
$faq["parent_site"]  = "documentation";
$faq["child_sites"]  = array();

$manpages["file"]         = "documentation/manpages.php";
$manpages["rel_path"]     = "./..";
$manpages["link_name"]    = "Man Pages";
$manpages["link_chapter"] = "";
$manpages["link_pic"]     = "pictures/icons/doc_manpages";
$manpages["parent_site"]  = "documentation";
$manpages["child_sites"]  = array();

$documentation["file"]         = "documentation/index.php";
$documentation["rel_path"]     = "./..";
$documentation["link_name"]    = "Docs";
$documentation["link_chapter"] = "";
$documentation["link_pic"]     = "pictures/icons/documentation";
$documentation["parent_site"]  = "top";
$documentation["child_sites"]  = array("faq", "manpages");

$mail_archive["file"]         = "contact/mail_archive.php";
$mail_archive["rel_path"]     = "./..";
$mail_archive["link_name"]    = "Mail Archive";
$mail_archive["link_chapter"] = "";
$mail_archive["link_pic"]     = "pictures/icons/contact_mail_archive";
$mail_archive["parent_site"]  = "contact";
$mail_archive["child_sites"]  = array();

$mailing_lists["file"]         = "contact/mailing_lists.php";
$mailing_lists["rel_path"]     = "./..";
$mailing_lists["link_name"]    = "Mailing List";
$mailing_lists["link_chapter"] = "";
$mailing_lists["link_pic"]     = "pictures/icons/contact_mailing_list";
$mailing_lists["parent_site"]  = "contact";
$mailing_lists["child_sites"]  = array();

$contact["file"]         = "contact/index.php";
$contact["rel_path"]     = "./..";
$contact["link_name"]    = "Contact";
$contact["link_chapter"] = "";
$contact["link_pic"]     = "pictures/icons/contact";
$contact["parent_site"]  = "top";
$contact["child_sites"]  = array("mail_archive", "mailing_lists");

$links["file"]         = "links.php";
$links["rel_path"]     = ".";
$links["link_name"]    = "Links";
$links["link_chapter"] = "";
$links["link_pic"]     = "pictures/icons/links";
$links["parent_site"]  = "top";
$links["child_sites"]  = array();

?>