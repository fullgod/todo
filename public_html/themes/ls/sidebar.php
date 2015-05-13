<div class="logopanel">
  <h1>
   <a href="/"><?php mttinfo('title'); ?></a>
  </h1>
</div>

<div class="sidebar-inner">
  
  <ul class="nav">
    <li>
        <a href="#settings" id="settings"><?php _e('a_settings');?></a>
    </li>
    <li>
        <a class="active" id="tagcloudbtn"><span>Темы</span></a>
        <div id="tagcloud" style="display:none">
            <a id="tagcloudcancel" class="mtt-img-button"><span></span></a>
            <div id="tagcloudload"></div>
            <div id="tagcloudcontent"></div>
        </div>
    </li>
    <li>
         <div class="mtt-tabs-add-button">
        <a class="tipN" href="#"><span><?php _e('list_new'); ?></span></a>
      </div>
    </li>
    <li>
      <span class="mtt-notes-showhide"><?php _e('notes');?> <a href="#" id="mtt-notes-show"><?php _e('notes_show');?></a> / <a href="#" id="mtt-notes-hide"><?php _e('notes_hide');?></a></span>
    </li>

    <li>
    

          <h6>Текущие задачи</h6>
          <div class="titleOpt">
          <a><span id="taskview" class="mtt-menu-button"><span id="total">0</span></span></a>
              
          <div id="list_all" class="mtt-tab mtt-tabs-alltasks mtt-tabs-hidden list_all">
                <a href="#alltasks"><span><?php _e('alltasks'); ?></span>
              <div class="list-action"></div></a>
            </div>
          </div>

    </li>
  </ul>

  <div class="sidebar-footer">
      <a class="pull-left footer-settings" data-original-title="Settings" data-rel="tooltip" href="#">
        <i class="icon icon-cog">&#xe810;</i>
      </a>
      <a class="pull-left footer-settings" data-original-title="Settings" data-rel="tooltip" href="#">
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


<!--
<div class="secNav">    
 
    <div class="widget">
    <div class="whead">
      <h6>Website statistics</h6>
      <div class="titleOpt">
        <a data-toggle="dropdown" href="#">
        <span class="iconb" data-icon=""></span>
        <span class="clear"></span>
        </a>
      </div>
    <div class="clear"></div>
    </div>
    </div>
      
    <!--
    
    <div id="slmenucontainer" class="mtt-menu-container">
    <ul>
     <li id="slmenu_list:-1" class="list-id--1 mtt-need-list" <?php if(is_readonly()) echo 'style="display:none"' ?>><div class="menu-icon"></div><a href="#alltasks"><?php _e('alltasks'); ?></a></li>
     <li class="mtt-menu-delimiter slmenu-lists-begin mtt-need-list" <?php if(is_readonly()) echo 'style="display:none"' ?>></li>
    </ul>
    </div>
    
    
    
    <span id="bar_auth">
    <span id="bar_public" style="display:none"><?php _e('public_tasks');?> |</span>
      <a href="#login" id="bar_login" class="nodecor"><u><?php _e('a_login');?></u> <span class="arrdown"></span></a>
      <a href="#logout" id="bar_logout"><?php _e('a_logout');?></a>
    </span>
    <div class="divider"><span></span></div>-->
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
      
    <div id="lists" class="item_list">
      <ul class="mtt-tabs"></ul>
      <div id="tabs_buttons">
      <div class="mtt-tabs-select-button mtt-tabs-button" title="<?php _e('list_select'); ?>"><span><a title="Ещё">Ещё</a></span>
      </div>
      
      </div>
    </div>  
    <div id="slmenucontainer" class="mtt-menu-container projects-block" style="display:none">
      <ul>
       <li id="slmenu_list:-1" class="list-id--1 mtt-need-list" <?php if(is_readonly()) echo 'style="display:none"' ?>><div class="menu-icon"></div><a href="#alltasks"><?php _e('alltasks'); ?></a></li>
       <li class="mtt-menu-delimiter slmenu-lists-begin mtt-need-list" <?php if(is_readonly()) echo 'style="display:none"' ?>></li>
      </ul>
    </div>
  </div>
  -->  
