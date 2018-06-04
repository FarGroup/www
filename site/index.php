<?php
	$current_page = 0;

	include ("common.php");

	do_begin_html ();
	do_header() ;

	if ( !strcmp ($lang, "ru") )
		include ("inc/index.ru.php");
	else
		include ("inc/index.en.php");

	do_footer();
	do_end_html ();
?>
