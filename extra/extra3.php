<?php
  if (!file_exists("/tmp/nightly_is_running")) {
	$f = fopen("/var/www/nightlyflag", "w+");
	if ($f) {
	  fwrite($f, "run");
	  fclose($f);
	  print "Ok.";
	} else {
	  print "Error.";
	}
  } else {
	print "Already running.";
  }
?>
