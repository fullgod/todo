<nav class="main-nav" id="secondary">
	<div class="profile-menu">
    <div class="pull-left">
      <div class="avatar">
        <img src="../../images/avatar.png">
      </div>
    </div>

    <div class="pull-left">
      <div class="title">
		<a href="http://ui0.ru/"><?php mttinfo('title'); ?></a> 
      </div>
	<div class="btn-group center">
    <span class="mtt-notes-showhide">
        <button class="button mini inset black"><?php _e('notes'); ?></button>
        <button class="button mini inset black"><a href="#" id="mtt-notes-show" title="<?php _e('notes_show'); ?>"><i class="icon-eye-open"></i></a></button>
        <button class="button mini inset black"><a href="#" id="mtt-notes-hide" title="<?php _e('notes_hide'); ?>"><i class="icon-eye-close"></i></a></button>
    </span>
    </div>
	  
    </div>

    <div class="pull-right profile-menu-nav-collapse">
      <button class="button black"><i class="icon-reorder"></i></button>
    </div>

  </div>
	<span id="bar_auth">
		<span id="bar_public" style="display:none"><?php _e('public_tasks'); ?> |</span>
		  <a href="#login" id="bar_login" class="nodecor"><u><?php _e('a_login'); ?></u> <span class="arrdown"></span></a>
		  <a href="#logout" id="bar_logout"><?php _e('a_logout'); ?></a>
		</span>
	<div class="divider"><span></span></div>
	<!--
		<div class="sidePad">
			<div class="searchLine">
			<form action="">
			<input class="ac ui-autocomplete-input" type="text" placeholder="Enter search text..." name="search" autocomplete="off" role="textbox" aria-autocomplete="list" aria-haspopup="true">
			<button value="" name="find" type="submit">
			<span class="icos-search"></span>
			</button>
			</form>
			</div>
		</div>
		<div class="divider"><span></span></div>
		
		-->		
	<div id="list_all" class="mtt-tab mtt-tabs-alltasks mtt-tabs-hidden list_all">
			<a class="sideB bLightBlue" href="#alltasks">
				<span><?php _e('alltasks'); ?></span>
				<div class="list-action"></div>
			</a>
	</div>
	<!--
		
		<div id="slmenucontainer" class="mtt-menu-container">
		<ul>
		 <li id="slmenu_list:-1" class="list-id--1 mtt-need-list" <?php if (is_readonly())  echo 'style="display:none"' ?>><div class="menu-icon"></div><a href="#alltasks"><?php _e('alltasks'); ?></a></li>
		 <li class="mtt-menu-delimiter slmenu-lists-begin mtt-need-list" <?php if (is_readonly())  echo 'style="display:none"' ?>></li>
		</ul>
		</div>
		
		
		-->
	
	
	<ul class="secondary-nav-menu">
	<li>
	  <a id="modal-link" href="#"><i class="icon-random"></i> Open Modal </a>
	</li>
	</ul>
	
		
	<div id="lists" class="item_list">
			<ul class="mtt-tabs secondary-nav-menu"></ul>
			<div class="padd">
			<div class="mtt-tabs-select-button mtt-tabs-button" title="<?php _e('list_select'); ?>">
			<span><a class="sideB bLightBlue" title="Ещё">Ещё</a></span>
			</div>
			
			</div>
		</div>	
	<div id="slmenucontainer" class="mtt-menu-container projects-block" style="display:none">
			<ul>
			 <li id="slmenu_list:-1" class="list-id--1 mtt-need-list" <?php if (is_readonly
())
  echo 'style="display:none"' ?>><div class="menu-icon"></div><a href="#alltasks"><?php _e('alltasks'); ?></a></li>
			 <li class="mtt-menu-delimiter slmenu-lists-begin mtt-need-list" <?php if (is_readonly
())
  echo 'style="display:none"' ?>></li>
			</ul>
		</div>
	<div class="divider"><span></span></div>
</nav>


		<!--
		<div class="sidePad">
			<div class="searchLine">
			<form action="">
			<input class="ac ui-autocomplete-input" type="text" placeholder="Enter search text..." name="search" autocomplete="off" role="textbox" aria-autocomplete="list" aria-haspopup="true">
			<button value="" name="find" type="submit">
			<span class="icos-search"></span>
			</button>
			</form>
			</div>
		</div>
		<div class="divider"><span></span></div>
		
		-->	


	<!--
		
		<div class="widget">
		<div class="whead">
			<h6>Website statistics</h6>
			<div class="titleOpt">
				<a data-toggle="dropdown" href="#">
				<span class="iconb" data-icon=""></span>
				<span class="clear"></span>
				</a>
				<ul class="dropdown-menu pull-right">
					<li>
					<a class="" href="#">
					<span class="icon-plus"></span>
					Add
					</a>
					</li>
					<li>
					<a class="" href="#">
					<span class="icon-remove"></span>
					Remove
					</a>
					</li>
					<li>
					<a class="" href="#">
					<span class="icon-pen_alt2"></span>
					Edit
					</a>
					</li>
					<li>
					<a class="" href="#">
					<span class="icon-heart"></span>
					Do whatever you like
					</a>
					</li>
					</ul>
			</div>
		<div class="clear"></div>
		</div>
		</div>
				-->
