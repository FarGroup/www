<?php
  extract($_REQUEST);

  $platform = "32";
  if (!empty($_REQUEST["p"]))
  {
    if ($_REQUEST["p"]=="64")
      $platform = "64";
    //else if ($_REQUEST["p"]=="IA64")
      //$platform = "IA64";
  }

  include ("FarW." . $platform . ".php");

  print "[info]\r\n";
  print "version=\"1.0\"\r\n";
  print "\r\n";

  print "[far]\r\n";
  print "major=\"" . $farnew_major . "\"\r\n";
  print "minor=\"" . $farnew_minor . "\"\r\n";
  print "build=\"" . $farnew_build . "\"\r\n";
  print "platform=\"" . $farnew_platform . "\"\r\n";
  print "arc=\"" . $farnew_arc . "\"\r\n";
  print "msi=\"" . $farnew_msi . "\"\r\n";
  print "pdb=\"" . $farnew_pdb . "\"\r\n";
  print "date=\"" . $farnew_date . "\"\r\n";
  print "lastchange=\"" . $farnew_lastchange . "\"\r\n";
?>
