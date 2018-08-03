<?php
$current_page = 3;
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
		<td align=\"center\">
			<h3>x64 msi</h3>
		</td>
		<td align=\"center\">
			<h3>x64 7z</h3>
		</td>
		<td align=\"center\">
			<h3>x64 pdb</h3>
		</td>
		<td align=\"center\">
			<h3>x86 msi</h3>
		</td>
		<td align=\"center\">
			<h3>x86 7z</h3>
		</td>
		<td align=\"center\">
			<h3>x86 pdb</h3>
		</td>
	</tr>
	<tr valign=\"top\">
		<td>
";

foreach (array_reverse(glob($directory."/Far30b*.x64.????????.msi")) as $filename)
{
	print "			<a class=\"body_link\" href=\"".$filename."\">".basename($filename)."</a><br>
";
}

	print "		</td>
		<td>
";

foreach (array_reverse(glob($directory."/Far30b*.x64.????????.7z")) as $filename)
{
	print "			<a class=\"body_link\" href=\"".$filename."\">".basename($filename)."</a><br>
";
}


	print "		</td>
		<td>
";

foreach (array_reverse(glob($directory."/Far30b*.x64.????????.pdb.7z")) as $filename)
{
	print "			<a class=\"body_link\" href=\"".$filename."\">".basename($filename)."</a><br>
";
}

	print "		</td>
		<td>
";

foreach (array_reverse(glob($directory."/Far30b*.x86.????????.msi")) as $filename)
{
	print "			<a class=\"body_link\" href=\"".$filename."\">".basename($filename)."</a><br>
";
}

	print "		</td>
		<td>
";

foreach (array_reverse(glob($directory."/Far30b*.x86.????????.7z")) as $filename)
{
	print "			<a class=\"body_link\" href=\"".$filename."\">".basename($filename)."</a><br>
";
}

	print "		</td>
		<td>
";

foreach (array_reverse(glob($directory."/Far30b*.x86.????????.pdb.7z")) as $filename)
{
	print "			<a class=\"body_link\" href=\"".$filename."\">".basename($filename)."</a><br>
";
}

	print "		</td>
	</tr>
</table>
";

do_footer();
do_end_html ();

?>
