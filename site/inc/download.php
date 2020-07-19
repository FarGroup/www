<?php
	function repository_base_url()
	{
		return "https://github.com/FarGroup/FarManager/";
	}

	function artefact_url($kind, $type, $name, $lang)
	{
		return "<a class=\"body_link\" href=\"" . $kind . "/" . $name . "\"><img style=\"margin:0px 10px 0px 0px\" src=\"img/" . $type . "." . $lang . ".png\"" . "alt=\"download\"></a>";
	}

	function commit_url($commit)
	{
		return "<a class=\"body_comment\" href=\"" . repository_base_url() . "commit/" . $commit . "\">" . $commit . "</a>";
	}

	function changelog_url($name, $label)
	{
		return "<a class=\"body_comment\" href=\"" . repository_base_url() . "raw/master/far/" . $name . "\">" . $label . "</a>";
	}

	function make_entry($kind, $bitness, $lang, $dl_last_change)
	{
		include($kind . "/FarW." . $bitness . ".php");
		return
			"<li><b>Far Manager v" . $farnew_major . "." . $farnew_minor . " build " . $farnew_build . " " . $farnew_platform . "</b> (" . $farnew_date . ")" .
			"<div class=\"body_comment\">" . $dl_last_change . ": " . commit_url($farnew_scm_revision) . "</div><br/>" .
			artefact_url($kind, "archive", $farnew_arc, $lang) .
			artefact_url($kind, "msi", $farnew_msi, $lang) .
			artefact_url($kind, "pdb", $farnew_pdb, $lang) .
			"<br/><br/></li>";
	}
?>

<br/>


<h2><?php print $dl_stable_builds;?></h2>

<div>
    <ul>
	<?php print make_entry("files", "32", $lang, $dl_last_change); ?>
	<?php print make_entry("files", "64", $lang, $dl_last_change); ?>
    </ul>
</div>
<h2><?php print $dl_nightly_builds . "&nbsp;&nbsp;" . changelog_url($dl_changelog2_file, $dl_full_changelog); ?></h2>
<div>
    <ul>
	<?php print make_entry("nightly", "32", $lang, $dl_last_change); ?>
	<?php print make_entry("nightly", "64", $lang, $dl_last_change); ?>
    </ul>
</div>

<div><h2><?php print $dl_history_msg;?></h2>
<div>
    <ul>
	<li><a class="body_link" href="history.php">1996 - 2011</a></li>
    </ul>
</div>
