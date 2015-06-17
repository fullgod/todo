<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="ru">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php mttinfo('title'); ?></title>
<meta name="viewport" id="viewport" content="width=device-width" />
<!--[if lt IE 9]><script language="javascript" type="text/javascript" src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<link rel="stylesheet/less" type="text/css" href="<?php mttinfo('template_url'); ?>less/bootstrap.less" />
<script type="text/javascript" src="<?php mttinfo('mtt_url'); ?>js/less-1.7.0.min.js"></script>
<link rel="stylesheet" type="text/css" href="<?php mttinfo('template_url'); ?>style.css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php mttinfo('template_url'); ?>css/jquery.mCustomScrollbar.css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php mttinfo('template_url'); ?>css/animation.css" media="all" />
<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
<!--[if IE 7]><link rel="stylesheet" href="css/todo-ico-ie7.css"><![endif]-->
</head>
<body>
<script type="text/javascript" src="<?php mttinfo('mtt_url'); ?>jquery/jquery-1.4.4.min.js"></script>
<script type="text/javascript" src="<?php mttinfo('mtt_url'); ?>jquery/jquery-ui-1.8.7.custom.min.js"></script>
<script type="text/javascript" src="<?php mttinfo('mtt_url'); ?>jquery/jquery.autocomplete-1.1.js"></script>
<script type="text/javascript" src="<?php mttinfo('mtt_url'); ?>js/jquery.mCustomScrollbar.concat.min.js"></script>
<script type="text/javascript" src="<?php mttinfo('mtt_url'); ?>js/jquery.mousewheel.min.js"></script>
<script type="text/javascript" src="<?php mttinfo('mtt_url'); ?>mytinytodo.js?v=1.4.3"></script>
<script type="text/javascript" src="<?php mttinfo('mtt_url'); ?>mytinytodo_lang.php?v=1.4.3"></script>
<script type="text/javascript" src="<?php mttinfo('mtt_url'); ?>mytinytodo_ajax_storage.js?v=1.4.3"></script>

<script type="text/javascript">
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
</script>

