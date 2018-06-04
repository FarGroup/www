<?php
  $current_page = 3;

  include ("common.php");

  if ( !strcmp ($lang, "ru") )
    include ("inc/download.ru.php");
  else
    include ("inc/download.en.php");

  do_begin_html ();
  do_header();

print '
<pre>
/history&gt;<b>ls -o</b>

drwxrwxrwx         0             <a class="body_link" href="../download.php">..</a>
-rw-rw-r--    102263 Sep 10 1996 <a class="body_link" href="history/far100b.rar">far100b.rar</a>
-rw-rw-r--    111366 Oct  8 1996 <a class="body_link" href="history/far100b2.rar">far100b2.rar</a>
-rw-rw-r--    123901 Nov  5 1996 <a class="body_link" href="history/far100b3.rar">far100b3.rar</a>
-rw-rw-r--    194436 Nov 10 1996 <a class="body_link" href="history/far100b4.exe">far100b4.exe</a>
-rw-rw-r--    218450 Dec 23 1996 <a class="body_link" href="history/far110b.exe">far110b.exe</a>
-rw-rw-r--    271013 Mar 15 1997 <a class="body_link" href="history/far120b.exe">far120b.exe</a>
-rw-rw-r--      2020 Jun 26 1997 <a class="body_link" href="history/far130b.html" target="_blank">far130b.exe</a>
-rw-rw-r--    430069 Jun 27 1997 <a class="body_link" href="history/far140b.exe">far140b.exe</a>
-rw-rw-r--    467940 Oct  6 1997 <a class="body_link" href="history/far150b.exe">far150b.exe</a>
-rw-rw-r--    503535 Feb 15 1998 <a class="body_link" href="history/far150.exe">far150.exe</a>
-rw-rw-r--    508726 Mar 30 1998 <a class="body_link" href="history/far151.exe">far151.exe</a>
-rw-rw-r--    535757 Jul  1 1998 <a class="body_link" href="history/far152.exe">far152.exe</a>
-rw-rw-r--    581215 Oct 19 1998 <a class="body_link" href="history/far160.exe">far160.exe</a>
-rw-rw-r--    579519 Feb 27 1999 <a class="body_link" href="history/far161.exe">far161.exe</a>
-rw-rw-r--    582505 Apr 24 1999 <a class="body_link" href="history/far162b.exe">far162b.exe</a>
-rw-rw-r--    582779 May 10 1999 <a class="body_link" href="history/far162b2.exe">far162b2.exe</a>
-rw-rw-r--    583494 May 24 1999 <a class="body_link" href="history/far162.exe">far162.exe</a>
-rw-rw-r--    581008 Aug 20 1999 <a class="body_link" href="history/far163b.exe">far163b.exe</a>
-rw-rw-r--    582374 Sep  6 1999 <a class="body_link" href="history/far163b2.exe">far163b2.exe</a>
-rw-rw-r--    579021 Sep 19 1999 <a class="body_link" href="history/far163b3.exe">far163b3.exe</a>
-rw-rw-r--    579555 Oct  7 1999 <a class="body_link" href="history/far163b4.exe">far163b4.exe</a>
-rw-rw-r--    579342 Oct 19 1999 <a class="body_link" href="history/far163.exe">far163.exe</a>
-rw-rw-r--    579046 May 22 2000 <a class="body_link" href="history/far164b.exe">far164b.exe</a>
-rw-rw-r--    579010 May 27 2000 <a class="body_link" href="history/far164b2.exe">far164b2.exe</a>
-rw-rw-r--    579874 Jun  3 2000 <a class="body_link" href="history/far164b3.exe">far164b3.exe</a>
-rw-rw-r--    579963 Jun 15 2000 <a class="body_link" href="history/far164.exe">far164.exe</a>
-rw-rw-r--    579986 Jun 15 2000 <a class="body_link" href="history/far1641.exe">far1641.exe</a>
-rw-rw-r--    580020 Aug 17 2000 <a class="body_link" href="history/far165.exe">far165.exe</a>
-rw-rw-r--    785529 Nov 20 2000 <a class="body_link" href="history/far170b1.exe">far170b1.exe</a>
-rw-rw-r--    848323 Dec 16 2000 <a class="body_link" href="history/far170b2.exe">far170b2.exe</a>
-rw-rw-r--    961039 Apr 19 2001 <a class="body_link" href="history/far170b3.exe">far170b3.exe</a>
-rw-rw-r--   1240451 Apr 13 2002 <a class="body_link" href="history/far170b4.exe">far170b4.exe</a>
-rw-rw-r--   1418369 Apr  9 2003 <a class="body_link" href="history/far170b5.exe">far170b5.exe</a>
-rw-rw-r--   1205296 Mar 29 2006 <a class="body_link" href="history/FarManager170.exe">FarManager170.exe</a>
-rw-rw-r--   2164599 Mar 29 2006 <a class="body_link" href="history/FarManager170DevPack.exe">FarManager170DevPack.exe</a>
-rw-rw-r--   3491328 Feb  3 2011 <a class="body_link" href="history/far175.x86.msi">far175.x86.msi</a>
-rw-rw-r--   3305984 Feb  3 2011 <a class="body_link" href="history/far175.x64.msi">far175.x64.msi</a>
-rw-rw-r--   3596288 Feb  3 2011 <a class="body_link" href="history/far2.x86.msi">far2.x86.msi</a>
-rw-rw-r--   3506176 Feb  3 2011 <a class="body_link" href="history/far2.x64.msi">far2.x64.msi</a>
/history&gt;<b><u>&nbsp;</u></b>';

  do_footer();
  do_end_html ();
?>