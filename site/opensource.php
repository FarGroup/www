<?php
	$current_page = 9;

	include ("common.php");

	do_begin_html ();
	do_header() ;

	if ( !strcmp ($lang, "ru") )
		include ("inc/opensource.ru.php");
	else
		include ("inc/opensource.en.php");

	do_footer();
	do_end_html ();
?>
