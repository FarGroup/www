<?php
	$current_page = 3;

	include ("common.php");

	do_begin_html ();
	do_header() ;

	if ( !strcmp ($lang, "ru") )
		include ("inc/plugins.ru.php");
	else
		include ("inc/plugins.en.php");

	do_footer();
	do_end_html ();
?>
