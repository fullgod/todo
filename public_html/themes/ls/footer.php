<<<<<<< HEAD
<div class="microtime">
	<?php
	$time = microtime();
	$time = explode(' ', $time);
	$time = $time[1] + $time[0];
	$finish = $time;
	$total_time = round(($finish - $start), 30);
	echo '<small>Page generated in '.$total_time.' seconds.'."</small>\n";
	?>
</div> 
<script type='text/javascript' id="__bs_script__">//<![CDATA[
    document.write("<script async src='http://todo:3000/browser-sync/browser-sync-client.2.6.1.js'><\/script>".replace("HOST", location.hostname));
//]]></script>
=======
>>>>>>> origin/master
</body>
</html>
