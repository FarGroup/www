<?php
	$current_page = 2;

	include ("common.php");

	do_begin_html ();
	do_header() ;

	if ( !strcmp ($lang, "ru") )
		include ("inc/download.ru.php");
	else
		include ("inc/download.en.php");

	include ("inc/download.php");

	do_footer();
	do_end_html ();
?>
