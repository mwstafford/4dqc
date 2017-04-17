<?php
$title='Videos';
include($_SERVER['DOCUMENT_ROOT'].'/includes/config1.php');
include($_SERVER['DOCUMENT_ROOT'].'/includes/header1.php');
include($_SERVER['DOCUMENT_ROOT'].'/includes/menu1.php');
?>

<div class="content">
<div class="content-sub1">
<div class="content-sub2">

<p>Click to play: <a href="javascript:void(0)" onclick="document.getElementById('light').style.display='block';document.getElementById('fade').style.display='block';document.getElementById('video1').play();">4DQC Whitebaord Video</a></p>

<div id="light" class="white_content">Click to close: <a href="javascript:void(0)" onclick="document.getElementById('video1').pause();document.getElementById('light').style.display='none';document.getElementById('fade').style.display='none';">Close</a>

<div>
<video id="video1" controls="controls" style="width=:720px; height:400px;">
<source src="4dqc-whiteboard-video.webm" type="video/webm" />
<source src="4dqc-whiteboard-video.mp4" type="video/mp4" />
Your browser does not support the video tag.
</video>
</div>


</div>

<div id="fade" class="black_overlay"></div>



</div>
</div>
</div>

<?php
include($_SERVER['DOCUMENT_ROOT'].'/includes/footer1.php');
?>
