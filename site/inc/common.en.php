<?php

$header_pages = array ("index.php?l=en", "news.php?l=en", "screenshots.php?l=en", "download.php?l=en", "plugins.php?l=en", "problems.php?l=en", "links.php?l=en", "https://plugring.farmanager.com/index.php?l=en", "https://enforum.farmanager.com", "opensource.php?l=en", "license.php?l=en");
$header_pages_strip = array ("index.php", "news.php", "screenshots.php", "download.php", "plugins.php", "problems.php", "links.php", "https://plugring.farmanager.com/index.php", "https://enforum.farmanager.com", "opensource.php", "license.php");
$header_descriptions = array ("main", "news", "screenshots", "download", "plugins", "problems", "links", "plugring", "forum", "open&nbsp;source", "license");
$current_page_opensource = 9;

function do_footer ()
{
	print "<p><div class=\"footer\">&nbsp;</div>";

/*	print "<div valing=top border=1 align=\"center\">
		<a class=\"footer_link\" href=\"$\">plugring</a>
		&nbsp;&nbsp;|&nbsp;&nbsp;
		<a class=\"footer_link\" href=\"$\">forum</a>
		&nbsp;&nbsp;|&nbsp;&nbsp;
		<a class=\"footer_link\" href=\"$\">contact us</a>
	</div>";*/

	print "<table width=\"100%\"><tr><td>";
	do_comment ("Far Manager &copy; 1996—2000 Eugene Roshal, &copy; 2000—".date("Y")." Far Group<br>Site design &copy 2006—".date("Y")." WARP ItSelf");
	print "</td><td>";
	do_comment ("Hosted by<br><br><a class=\"body_link\" href=\"http://www.trunkmobile.ru/\"><img src=\"img/host.png\" alt=\"www.trunkmobile.ru\"></img></a>", "right");
	print "</td></tr></table>";

/*	print "<div><p><table width=40% align=left bgcolor=#B1BBD3 border=0 cellspacing=0 cellpadding=0>
			<tr>
				<td width=11>&nbsp;</td>
				<td valign=top class=\"footer_comment\">Far Manager &copy; 1996-2000 Eugene Roshal, &copy; 2000-2006 Far Group<br>Студия по производству дешевки \"Мы работаем за еду!\"</td>
				<td width=11><img src=\"img/link_right2.png\"></img>";

	print "</tr></table></div>";*/

}
?>
