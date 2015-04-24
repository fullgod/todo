<?php include ($template.'header.php');?>
	


	<div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
        	<?php include ($template.'sidebar.php');?>
        </div>
        <div class="col-sm-3 col-md-2 sidebar">
          <?php include ($template.'sidebar2.php');?>
        </div>
      	<div class="col-sm-6 col-md-8 main">
          <center><div id="loading"></div></center>
        	<?php include ($template.'main.php');?>
        </div>

      </div>
    </div>


<?php include ($template.'footer.php'); ?>