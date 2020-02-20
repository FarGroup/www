<?php
	$f = fopen("/var/www/updaterel", "w+");
	if ($f) {
		fwrite($f, "run");
		fclose($f);
		print "Ok.";
	} else {
		print "Error.";
	}
?>
