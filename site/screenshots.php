<?php
	$current_page = 2;

	include ("common.php");

	do_begin_html ();
	do_header();

	if ( !strcmp ($lang, "ru") )
		include ("inc/screenshots.ru.php");
	else
		include ("inc/screenshots.en.php");

	do_footer();
	do_end_html ();
?>
