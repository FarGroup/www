<?php

$header_pages = array ("index.php?l=ru", "screenshots.php?l=ru", "download.php?l=ru", "plugins.php?l=ru", "problems.php?l=ru", "links.php?l=ru", "https://plugring.farmanager.com/index.php?l=ru", "https://forum.farmanager.com", "opensource.php?l=ru", "license.php?l=ru");
$header_pages_strip = array ("index.php", "screenshots.php", "download.php", "plugins.php", "problems.php", "links.php", "https://plugring.farmanager.com/index.php", "https://forum.farmanager.com", "opensource.php", "license.php");
$header_descriptions = array ("главная", "галерея", "загрузить", "плагины", "проблемы", "ссылки", "plugring", "форум", "исходный&nbsp;код", "лицензия");
$current_page_opensource = 8;

function do_footer ()
{
	print "<p><div class=\"footer\">&nbsp;</div>";

	print "<table width=\"100%\"><tr><td>";
	do_comment ("Far Manager &copy; 1996—2000 Eugene Roshal, &copy; 2000—".date("Y")." Far Group<br>Site design &copy 2006—".date("Y")." WARP ItSelf");
	print "</td><td>";
	do_comment ("Hosted by<br><br><a class=\"body_link\" href=\"http://www.trunkmobile.ru/\"><img src=\"img/host.png\" alt=\"www.trunkmobile.ru\"></img></a>", "right");
	print "</td></tr></table>";

}
?>
