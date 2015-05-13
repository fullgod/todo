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
</body>
</html>
