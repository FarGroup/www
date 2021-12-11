<?php
$current_page = 2;
include ("common.php");

if ( !strcmp ($lang, "ru") )
	include ("inc/download.ru.php");
else
	include ("inc/download.en.php");

do_begin_html();
do_header();

print "
<table align=\"center\" border=\"0\" cellspacing=\"20\">
	<tr>
		<td colspan=4>
			<h2>Far Manager v3.0</h2>
		</td>
	</tr>
	<tr>
";

$platform = array("x64", "x86", "ARM64");

foreach ($platform as &$p)
{
	print "
		<td align=\"center\">
			<h3>{$p} msi</h3>
		</td>
		<td align=\"center\">
			<h3>{$p} 7z</h3>
		</td>
		<td align=\"center\">
			<h3>{$p} pdb</h3>
		</td>";
}

print "
	</tr>
	<tr valign=\"top\">
";

$ext = array("msi", "7z", "pdb.7z");

foreach ($platform as &$p)
{
	foreach ($ext as &$e)
	{
		print "
		<td>";

		foreach (array_reverse(glob($directory."/Far30b*.{$p}.????????.{$e}")) as $filename)
		{
			print "
			<a class=\"body_link\" href=\"".$filename."\">".basename($filename)."</a><br>";
		}

		print "
		</td>";
	}
}

print "
	</tr>
</table>
";

do_footer();
do_end_html ();

?>
