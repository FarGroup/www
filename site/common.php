<?php
	include ("getlang.php");

	$lang = GetClientLang ();

	function do_begin_html ()
	{
		GLOBAL $current_page;
		GLOBAL $header_descriptions;

		//<!--<meta http-equiv=\"Cache-Control\" content=\"no-cache\">-->

		print "<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.0 Transitional//EN\">
			<html>
			<head>
			<!-- Google Analytics -->
			<script>
			window.ga=window.ga||function(){(ga.q=ga.q||[]).push(arguments)};ga.l=+new Date;
			ga('create', 'UA-XXXXX-Y', 'auto');
			ga('send', 'pageview');
			</script>
			<script async src='https://www.google-analytics.com/analytics.js'></script>
			<!-- End Google Analytics -->
			<meta http-equiv=\"Content-Type\" content=\"text/html; charset=windows-1251\">
			<link rel=\"STYLESHEET\" href=\"css/default.css\" type=\"text/css\">
			<link rel=\"stylesheet\" type=\"text/css\" href=\"css/lightbox.css\" media=\"screen\">

			<link rel=\"icon\" sizes=\"256x256\" href=\"https://farmanager.com/favicon/256.png\" />
			<link rel=\"icon\" sizes=\"192x192\" href=\"https://farmanager.com/favicon/192.png\" />
			<link rel=\"icon\" sizes=\"160x160\" href=\"https://farmanager.com/favicon/160.png\" />
			<link rel=\"icon\" sizes=\"128x128\" href=\"https://farmanager.com/favicon/128.png\" />
			<link rel=\"icon\" sizes=\"96x96\" href=\"https://farmanager.com/favicon/96.png\" />
			<link rel=\"icon\" sizes=\"64x64\" href=\"https://farmanager.com/favicon/64.png\" />
			<link rel=\"icon\" sizes=\"32x32\" href=\"https://farmanager.com/favicon/32.png\" />
			<link rel=\"icon\" sizes=\"16x16\" href=\"https://farmanager.com/favicon/16.png\" />

			<title>Far Manager Official Site : ".$header_descriptions[$current_page]."</title>
			<script type=\"text/javascript\" src=\"jscript/jquery.js\" defer></script>
			<script type=\"text/javascript\" src=\"jscript/jquery.lightbox.js\" defer></script>
			</head>
			<body>";
	}

	function do_end_html ()
	{
		print "</body></html>";
	}

	function do_comment ($comment, $align = "left")
	{
		print "<div align=\"".$align."\" class=\"body_comment\">";

		print "<p>".$comment;

		print "</div>";
	}


	function do_header_link ($href, $description, $current, $opensource)
	{
		if ( !$current )
			if ($opensource)
				print "<td align=\"right\"><a class=\"opensource_link\" href=\"".$href."\">".$description."</a>&nbsp;</td>";
			else
				print "<td align=\"right\"><a class=\"header_link\" href=\"".$href."\">".$description."</a>&nbsp;</td>";
		else
			print "<td align=\"right\"><font color=\"white\">".$description."&nbsp;</font></td>";
	}

	if ( !strcmp ($lang, "ru") )
		include ("inc/common.ru.php");
	else
		include ("inc/common.en.php");


	function do_header ()
	{
		GLOBAL $current_page;
		GLOBAL $current_page_opensource;
		GLOBAL $header_pages;
		GLOBAL $header_descriptions;
		GLOBAL $header_pages_strip;
		GLOBAL $lang;

		$current_page_string = "";

		print "<div class=\"top\">&nbsp;</div>";

		//B1BBD3
		//a7b0c4

		print "<table class=\"header_table\" align=\"right\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
				<tr>
					<td><img src=\"img/link_left3.jpg\" alt=\"\"></td><td>&nbsp;</td>";

		for ($i = 0; $i < 10; $i++)
		{
			do_header_link ($header_pages[$i], $header_descriptions[$i], $i == $current_page, $i == $current_page_opensource);

			if ( $i == $current_page )
				$current_page_string = $header_pages_strip[$i];
		}

		print "</tr></table><br><br>";

		print "<div>
				<table width=\"100%\" cellspacing=\"0\" border=\"0\" cellpadding=\"0\">
				<tr>
					<td><img src=\"img/title_light.png\" alt=\"Far Manager&nbsp;&#151; file and archive manager\"></td>
					<td valign=\"top\">
					<td align=\"right\" valign=\"top\" class=\"body_comment\">";

					if ( !strcmp ($lang, "ru") )
						print "русский&nbsp;|&nbsp;<a class=\"body_comment\" href=\"".$current_page_string."?l=en\">english</a>";
					else
						print "<a class=\"body_comment\" href=\"".$current_page_string."?l=ru\">русский</a>&nbsp;|&nbsp;english";

		print "</td></tr>
				</table>
			</div>";

//<td align=right valign=top><a class=\"body_comment\" href=\"".$current_page_string."?l=ru\">русский</a><font size=1>|</font><a class=\"body_comment\" href=\"".$current_page_string."?l=en\">english</a></td>

		print "<div align=\"right\"><h2>".$header_descriptions[$current_page]."</h2></div>";
		print "<div class=\"footer\">&nbsp;</div>";
	}

?>
