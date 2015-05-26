<div class="logopanel">
  <h1>
   <a href="/"><?php mttinfo('title'); ?></a>
  </h1>
</div>

<div class="sidebar-inner">

<!--
<div id="slmenucontainer" class="mtt-menu-container">
    <ul>
     <li id="slmenu_list:-1" class="list-id--1 mtt-need-list" <?php if(is_readonly()) echo 'style="display:none"' ?>><div class="menu-icon"></div><a href="#alltasks"><?php _e('alltasks'); ?></a></li>
     <li class="mtt-menu-delimiter slmenu-lists-begin mtt-need-list" <?php if(is_readonly()) echo 'style="display:none"' ?>></li>
    </ul>
</div>
-->
<div id="slmenucontainer" class="mtt-menu-container">
    <ul>
     <a href="#alltasks"><?php _e('alltasks'); ?></a></li>
    </ul>
</div>

	
<div id="lists" class="item_list">
    <ul class="mtt-tabs"></ul>
	<!--
	<div id="tabs_buttons">
		<div class="mtt-tabs-select-button mtt-tabs-button" title="<?php _e('list_select'); ?>">
			<span><a title="Ещё">Ещё</a></span>
		</div>
    </div>
	-->
</div> 
 

 <!--
<div id="slmenucontainer" class="mtt-menu-container projects-block" style="display:none">
    <ul>
		<li id="slmenu_list:-1" class="list-id--1 mtt-need-list" <?php if(is_readonly()) echo 'style="display:none"' ?>>
			<div class="menu-icon"></div>
				<a href="#alltasks"><?php _e('alltasks'); ?></a></li>
		<li class="mtt-menu-delimiter slmenu-lists-begin mtt-need-list" <?php if(is_readonly()) echo 'style="display:none"' ?>></li>
    </ul>
</div>	
-->

	
<div class="sidebar-footer">
      <a href="#settings" id="settings" class="pull-left footer-settings" title="<?php _e('a_settings');?>">
        <i class="icon icon-cog">&#xe810;</i>
      </a>
      <a class="mtt-tabs-add-button tipN pull-left footer-settings" href="#" title="<?php _e('list_new'); ?>">
        <i class="icon icon-list-add">&#xe847;</i>
      </a>
      <a class="pull-left footer-settings" data-original-title="Settings" data-rel="tooltip" href="#">
        <i class="icon icon-plus-circled">&#xe804;</i>
      </a>
      <a class="pull-left footer-settings" data-original-title="Settings" data-rel="tooltip" href="#">
        <i class="icon icon-login">&#xe823;</i>
      </a>
  </div>

</div>
