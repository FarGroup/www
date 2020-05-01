<div>
<h2>Reporting Problems and Receiving Support</h2>

<p>By following these simple rules, you have the best chances of getting your problem successfully
solved.
<p><b>1.</b> Make sure that the problem you've encountered is not an ordinary situation
or a known problem: see Far Help, FAQ, TechInfo and WhatsNew. If it's
possible, you should also search network resources for the answers (links to
the resources are located in help chapter «Overview of plugin capabilities»).
Only if the problem is not known, move to step 2, otherwise there's no need
to produce extra traffic, it does not stimulate developers in any way,
but distracts them.

<p><b>1.1.</b>Make sure that you problem you've encountered has not yet been resolved.
Check whether it is reproduced in the latest <a href="https://www.farmanager.com/download.php?l=en">nightly</a> builds.

<p><b>2.</b> Because Far is commonly used with plug-ins, first it is necessary to
locate the source of the problem.
<blockquote>
  <p><b>2.1.</b> Start Far without plug-ins. You can do it with "far.exe /p" command.
Try to reproduce the problem situation. If the problem persists, it makes
sense to inform Far developers about the problem (see step 3).
  <p><b>2.2.</b> If problem does not persist when running Far without plug-ins, you'll
have to find out which plug-in(s) are essential for the problem to emerge.
In order to do it, for example, you can remove plug-ins one by one, starting
with the most recently installed ones, and every time check whether the
problem still exists. If you have found the plugin causing the problem
and the plugin is not included in the Far distribution, you should report
the problem to the author of that plugin.
  <p><b>2.3.</b> If the found «bad» plug-in is included in the Far distribution,
or you failed to find out which plug-in is essential to reproduce the
problem, inform Far developers about it (see step 3). If the problem is
in the MultiArc plugin, see Step 4.
</blockquote>
<p><b>3.</b> You should <a href="https://bugs.farmanager.com">inform</a> the Far Group about the problem.

<blockquote>
  <p><b>3.1.</b> Follow the usual rules when reporting a problem:
  <ul>
    <li>Isolate the conditions under which the problem appears as narrow as
     you can&nbsp;&#151; it helps to find its cause faster. Try not to specify
     irrelevant information (for example, do not list all the plug-ins you
     have installed if it is not necessary to reproduce the problem).
     If you are not sure whether some condition is relevant or not, you'd
     better specify it just in case (and comment that you are not sure
     if it's relevant).
    <li>Make sure that the problem is not caused by macros you may have
     recorded. Press Ctrl-. (Ctrl-point) to switch macros off, and try to
     reproduce the problem again.
    <li>If it's possible, try to reproduce the problem on different versions
     of Far, Windows, other computers and with different Far settings.
     Include a report on these experiments in your message about the
     problem.
  </ul>
  <p><b>3.2.</b> Specify the conditions to reproduce the problem (Windows version,
type of the file system, type of the local network, Far version, versions
of installed plug-ins, macros etc&nbsp;&#151; the necessary and sufficient set of
conditions to repeat the problem).
  <p><b>3.3.</b> If some specific files are necessary to reproduce the problem, you should
attach them to your message, only if the overall message size does not exceed
80k. If the size exceeds this value, you'd better put the necessary file to
an HTTP or FTP site and just add the URL to the file to the message.
  <p><b>3.4.</b> If the problem concerns Plugins API, try to write a minimal test plug-in
which demonstrates the problem and attach the archive (compiled plug-in and
its sources) to your message.
  <p><b>3.5.</b> Answer the following questions:
  <ul>
    <li>what actions were performed?
    <li>what result did you expect?
    <li>what happened instead?
  </ul>
  <p><b>3.6.</b> Supply additional comments (if applicable).
</blockquote>
<p><b>4.</b> Additions concerning MultiArc
<blockquote>
  <p><b>4.1.</b> When describing MultiArc errors related to a specific archiver, you should also specify
  its version and command lines for it.
  <p><b>4.2.</b> A little test archive necessary to reproduce the problem (no more than 30k), or a link
  to such an archive, will be appreciated.
</blockquote>
</div>
