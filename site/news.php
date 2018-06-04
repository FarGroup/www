<?php
	$current_page = 1;

	include ("common.php");

	do_begin_html ();
	do_header() ;

	if ( !strcmp ($lang, "ru") )
		include ("inc/news.ru.php");
	else
		include ("inc/news.en.php");

	do_footer();
	do_end_html ();
?>
