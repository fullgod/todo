<nav id="primary" class="main-nav">
<ul>
	<li>
	<a href="#settings" id="settings">
	<i class="icon-share-alt"></i>
		<?php _e('a_settings');?>
	</a>
	</li>	
	<li class="dropdown">
		<a id="tagcloudbtn" class="dropdown-toggle" data-toggle="dropdown">
		<i class="icon-dashboard"></i>
		Темы
		<span class="caret"></span>
		</a>
		<ul class="dropdown-menu">
			<li>
				<div id="tagcloud" style="display:none">
				<a id="tagcloudcancel" class="mtt-img-button"><span></span></a>
				<div id="tagcloudload"></div>
				<div id="tagcloudcontent"></div>
			</div>
			</li>
			<li class="divider"></li>

		</ul>
	</li>
<li class="dropdown">
			<a class="dropdown-toggle" data-toggle="dropdown">
			<i class="icon-share-alt"></i>
			More
			<span class="caret"></span>
			</a>
			<ul class="dropdown-menu">
			<li>
			<a href="../error_404.html">
			<i class="icon-warning-sign"></i>
			Error 404
			</a>
			</li>
			<li class="divider"></li>
			<li>
			<a href="../login/login.html">
			<i class="icon-off"></i>
			Log out (login page)
			</a>
			</li>
		</ul>
	</li> 
    <li class="mtt-tabs-add-button">
		<a class="tipN" href="#">
        <i class="icon-plus-sign"></i>
        <?php _e('list_new'); ?>
		</a>
    </li>
  		

</ul>
</nav>
