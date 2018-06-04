<?php
	$current_page = 10;

	include ("common.php");

	do_begin_html ();
	do_header() ;

	if ( !strcmp ($lang, "ru") )
		include ("inc/license.ru.php");
	else
		include ("inc/license.en.php");

	do_footer();
	do_end_html ();
?>
