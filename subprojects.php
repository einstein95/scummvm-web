<?php
// set this for position of this file relative
$file_root = ".";

// load libraries
require($file_root."/include/"."incl.php");

// start of html
html_header("ScummVM");
sidebar_start();

echo html_round_frame_start("ScummVM Subprojects","");
?>
<P>
The ScummVM team occasionally works on various subprojects, separate from the main 
ScummVM program. These projects are generally reasonably stagnant and not given a high 
priority. Regardless, this page is here to inform you of them, in the vague hope of 
attracting more developers to help maintain these side-programs.
</P>
<P>
Please do not ask where you can obtain binaries of these programs. Currently both 
subprojects are still in a state only suitable for developers... so if you can't compile 
the code yourself, then these are not really ready for you.
</P>
<H1>ScummEx (cvs module 'scummex')</H1>
<P>
ScummEx is a multi-platform SCUMM resource browser, viewer and extractor using the 
wxWindows toolkit.
</P>
<P>
Development on this project is currently stalled. The code-base needs quite some cleanup, 
and viewers for many resource types still need adding to the code. Patches and volunteers
a very welcome...
</P>

<BR>

<H1>Residual (cvs module 'residual')</H1>
<P>
Residual is a LUA-powered 3D GRIME clone, designed to run the game Grim Fandango. Why 
'Residual'? Because this engine covers games that the main ScummVM application will not 
support due to their 3D nature. Also, GRIME is a residue. Yes, we know, it's a bad word 
pun.
</P>
<P>
Residual's core is in a fairly decent state, however it is not in full-time development and 
as such is progressing slowly. Lipsync support was recently added, in case anybody checks
this page expecting news.
</P>
<P>
Some of the bigger outstanding tasks are:
<UL>
 <LI>Save/Load support! We need this, but state saving/loading needs to be hacked
     into the old LUA version we use. LUA expert wanted, apply within.
 <LI>A software renderer needs to be written as older OpenGL cards cannot blit the
     static depth-buffer used by Grim Fandango without causing major framerate impact.
</UL>
</P>
<?
echo html_round_frame_end("&nbsp;");

// end of html
sidebar_end();
html_footer();

?>
