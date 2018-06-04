<?php
  include ("nightly/FarW.32.php");

  copy("files/FarW.32.php", "files/FarW.32.php.bak");
  copy("nightly/FarW.32.php", "files/FarW.32.php");
  copy("nightly/" . $farnew_arc, "files/" . $farnew_arc);
  copy("nightly/" . $farnew_msi, "files/" . $farnew_msi);
  copy("nightly/" . $farnew_pdb, "files/" . $farnew_pdb);

  include ("nightly/FarW.64.php");

  copy("files/FarW.64.php", "files/FarW.64.php.bak");
  copy("nightly/FarW.64.php", "files/FarW.64.php");
  copy("nightly/" . $farnew_arc, "files/" . $farnew_arc);
  copy("nightly/" . $farnew_msi, "files/" . $farnew_msi);
  copy("nightly/" . $farnew_pdb, "files/" . $farnew_pdb);

  print "Ok.";
?>
