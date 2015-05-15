<?php
  $time = microtime();
  $time = explode(' ', $time);
  $time = $time[1] + $time[0];
  $start = $time;
?>
<?php include ($template.'header.php');?>
	


	<div class="container-fluid">
      <div class="row">
        <div class="sidebar">
        	<?php include ($template.'sidebar.php');?>
        </div>
        <!--
        <div class="col-sm-3 col-md-2 sidebar">
          <?php include ($template.'sidebar2.php');?>
        </div> -->
      	<div class="main">
        	<?php include ($template.'main.php');?>
        </div>

      </div>
    </div>


<?php include ($template.'footer.php'); ?>