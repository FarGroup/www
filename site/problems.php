<?php
	$current_page = 5;

	include ("common.php");

	do_begin_html ();
	do_header() ;

	if ( !strcmp ($lang, "ru") )
		include ("inc/problems.ru.php");
	else
		include ("inc/problems.en.php");

	do_footer();
	do_end_html ();
?>
