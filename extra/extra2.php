<?php
	$f = fopen("/var/www/revertrel", "w+");
	if ($f) {
		fwrite($f, "run");
		fclose($f);
		print "Ok.";
	} else {
		print "Error.";
	}
?>
