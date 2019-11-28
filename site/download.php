<?php
	$current_page = 2;

	include ("common.php");

	do_begin_html ();
	do_header() ;

	if ( !strcmp ($lang, "ru") )
		include ("inc/download.ru.php");
	else
		include ("inc/download.en.php");

/*	extract($_REQUEST);

	$platform = "32";
	if (!empty($_REQUEST["p"]))
	{
	    if ($_REQUEST["p"]=="64")
		$platform = "64";
	    //else if ($_REQUEST["p"]=="IA64")
		//$platform = "IA64";
	}

	if ($platform=="32")
	    print '<div align="center"><b>x86&nbsp;|&nbsp;</b><b><a class="body_link" href="/download.php?p=64&l='.$lang.'">x64</a></b></div>';
	else
	    print '<div align="center"><b><a class="body_link" href="/download.php?p=32&l='.$lang.'">x86</a>&nbsp;|&nbsp;</b><b>x64</b></div>';
*/
	include ("inc/download.php");

	do_footer();
	do_end_html ();
?>
