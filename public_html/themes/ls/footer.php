

<script type="text/javascript" src="<?php mttinfo('mtt_url'); ?>js/jquery-1.4.4.min.js"></script>
<script type="text/javascript" src="<?php mttinfo('mtt_url'); ?>js/jquery-ui-1.8.7.custom.min.js"></script>
<script type="text/javascript" src="<?php mttinfo('mtt_url'); ?>js/jquery.autocomplete-1.1.js"></script>
<script type="text/javascript" src="<?php mttinfo('mtt_url'); ?>js/mytinytodo.js?v=1.4.2"></script>
<script type="text/javascript" src="<?php mttinfo('mtt_url'); ?>js/mytinytodo_lang.php?v=1.4.2"></script>
<script type="text/javascript" src="<?php mttinfo('mtt_url'); ?>js/mytinytodo_ajax_storage.js?v=1.4.2"></script>
<?php
$time = microtime();
$time = explode(' ', $time);
$time = $time[1] + $time[0];
$finish = $time;
$total_time = round(($finish - $start), 30);
echo '<small>Page generated in '.$total_time.' seconds.'."</small>\n";
?>
</body>
</html>