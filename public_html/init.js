$().ready(function(){

	<?php if(isset($_GET['pda'])): ?>

	$('body').width(screen.width);
	$(window).resize(function() {
		$('body').width(screen.width);
	});
		
	<?php endif; ?>

	mytinytodo.mttUrl = "<?php mttinfo('mtt_url'); ?>";
	mytinytodo.templateUrl = "<?php mttinfo('template_url'); ?>";
	mytinytodo.db = new mytinytodoStorageAjax(mytinytodo);
	mytinytodo.init({
		needAuth: <?php echo $needAuth ? "true" : "false"; ?>,
		isLogged: <?php echo ($needAuth && is_logged()) ? "true" : "false"; ?>,
		showdate: <?php echo (Config::get('showdate') && !isset($_GET['pda'])) ? "true" : "false"; ?>,
		singletab: <?php echo (isset($_GET['singletab']) || isset($_GET['pda'])) ? "true" : "false"; ?>,
		duedatepickerformat: "<?php echo htmlspecialchars(Config::get('dateformat2')); ?>",
		firstdayofweek: <?php echo (int) Config::get('firstdayofweek'); ?>,
		autotag: <?php echo Config::get('autotag') ? "true" : "false"; ?>
		<?php if(isset($_GET['list'])) echo ",openList: ". (int)$_GET['list']; ?>
		<?php if(isset($_GET['pda'])) echo ", touchDevice: true"; ?>
	})
	.loadLists(1);
	});