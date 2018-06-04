<?php
  include ("files/FarW.32.php");

  copy("files/FarW.32.php.bak", "files/FarW.32.php");
  unlink("files/" . $farnew_arc);
  unlink("files/" . $farnew_msi);
  unlink("files/" . $farnew_pdb);

  include ("files/FarW.64.php");

  copy("files/FarW.64.php.bak", "files/FarW.64.php");
  unlink("files/" . $farnew_arc);
  unlink("files/" . $farnew_msi);
  unlink("files/" . $farnew_pdb);

  print "Ok.";
?>
