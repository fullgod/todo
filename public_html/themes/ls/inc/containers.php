<div id="authform" style="display:none">
            <form id="login_form">
                <div class="h">
                    <?php _e( 'password');?>
                </div>
                <div>
                    <input type="password" name="password" id="password" />
                </div>
                <div>
                    <input type="submit" value="<?php _e('btn_login');?>" />
                </div>
            </form>
</div>
<div id="priopopup" style="display:none">
            <span class="prio-neg prio-neg-1">&minus;1</span>
            <span class="prio-zero">&plusmn;0</span>
            <span class="prio-pos prio-pos-1">+1</span>
            <span class="prio-pos prio-pos-2">+2</span>
</div>
<div id="taskviewcontainer" class="mtt-menu-container" style="display:none">
            <ul>
                <li id="view_tasks">
                    <?php _e( 'tasks');?> (<span id="cnt_total">0</span>)</li>
                <li id="view_past">
                    <?php _e( 'f_past');?> (<span id="cnt_past">0</span>)</li>
                <li id="view_today">
                    <?php _e( 'f_today');?> (<span id="cnt_today">0</span>)</li>
                <li id="view_soon">
                    <?php _e( 'f_soon');?> (<span id="cnt_soon">0</span>)</li>
            </ul>
</div>
<div id="listmenucontainer" class="mtt-menu-container" style="display:none">
            <ul>
                <li class="mtt-need-list mtt-need-real-list" id="btnRenameList">
                    <?php _e( 'list_rename');?>
                </li>
                <li class="mtt-need-list mtt-need-real-list" id="btnDeleteList">
                    <?php _e( 'list_delete');?>
                </li>
                <li class="mtt-need-list mtt-need-real-list" id="btnClearCompleted">
                    <?php _e( 'list_clearcompleted');?>
                </li>
                <li class="mtt-need-list mtt-need-real-list mtt-menu-indicator" submenu="listexportmenucontainer">
                    <div class="submenu-icon"></div>
                    <?php _e( 'list_export'); ?>
                </li>
                <li class="mtt-menu-delimiter mtt-need-real-list"></li>
                <li class="mtt-need-list mtt-need-real-list" id="btnPublish">
                    <div class="menu-icon"></div>
                    <?php _e( 'list_publish');?>
                </li>
                <li class="mtt-need-list mtt-need-real-list" id="btnRssFeed">
                    <div class="menu-icon"></div>
                    <?php _e( 'list_rssfeed');?>
                </li>
                <li class="mtt-menu-delimiter mtt-need-real-list"></li>
                <li class="mtt-need-list mtt-need-real-list sort-item" id="sortByHand">
                    <div class="menu-icon"></div>
                    <?php _e( 'sortByHand');?> <span class="mtt-sort-direction"></span>
                </li>
                <li class="mtt-need-list sort-item" id="sortByDateCreated">
                    <div class="menu-icon"></div>
                    <?php _e( 'sortByDateCreated');?> <span class="mtt-sort-direction"></span>
                </li>
                <li class="mtt-need-list sort-item" id="sortByPrio">
                    <div class="menu-icon"></div>
                    <?php _e( 'sortByPriority');?> <span class="mtt-sort-direction"></span>
                </li>
                <li class="mtt-need-list sort-item" id="sortByDueDate">
                    <div class="menu-icon"></div>
                    <?php _e( 'sortByDueDate');?> <span class="mtt-sort-direction"></span>
                </li>
                <li class="mtt-need-list sort-item" id="sortByDateModified">
                    <div class="menu-icon"></div>
                    <?php _e( 'sortByDateModified');?> <span class="mtt-sort-direction"></span>
                </li>
                <li class="mtt-menu-delimiter"></li>
                <li class="mtt-need-list" id="btnShowCompleted">
                    <div class="menu-icon"></div>
                    <?php _e( 'list_showcompleted');?>
                </li>
            </ul>
</div>
<div id="listexportmenucontainer" class="mtt-menu-container" style="display:none">
            <ul>
                <li class="mtt-need-list mtt-need-real-list" id="btnExportCSV">
                    <?php _e( 'list_export_csv');?>
                </li>
                <li class="mtt-need-list mtt-need-real-list" id="btnExportICAL">
                    <?php _e( 'list_export_ical');?>
                </li>
            </ul>
</div>
<div id="taskcontextcontainer" class="mtt-menu-container" style="display:none">
            <ul>
                <li id="cmenu_edit"><b><?php _e('action_edit');?></b>
                </li>
                <li id="cmenu_note">
                    <?php _e( 'action_note');?>
                </li>
                <li id="cmenu_prio" class="mtt-menu-indicator" submenu="cmenupriocontainer">
                    <div class="submenu-icon"></div>
                    <?php _e( 'action_priority');?>
                </li>
                <li id="cmenu_move" class="mtt-menu-indicator" submenu="cmenulistscontainer">
                    <div class="submenu-icon"></div>
                    <?php _e( 'action_move');?>
                </li>
                <li id="cmenu_delete">
                    <?php _e( 'action_delete');?>
                </li>
            </ul>
</div>
<div id="cmenupriocontainer" class="mtt-menu-container" style="display:none">
            <ul>
                <li id="cmenu_prio:2">
                    <div class="menu-icon"></div>+2</li>
                <li id="cmenu_prio:1">
                    <div class="menu-icon"></div>+1</li>
                <li id="cmenu_prio:0">
                    <div class="menu-icon"></div>&plusmn;0</li>
                <li id="cmenu_prio:-1">
                    <div class="menu-icon"></div>&minus;1</li>
            </ul>
</div>
<div id="cmenulistscontainer" class="mtt-menu-container" style="display:none">
            <ul>
            </ul>
</div>
<div id="slmenucontainer" class="mtt-menu-container" style="display:none">
            <ul>
                <li id="slmenu_list:-1" class="list-id--1 mtt-need-list" <?php if(is_readonly()) echo 'style="display:none"' ?>>
                    <div class="menu-icon"></div>
                    <a href="#alltasks">
                        <?php _e( 'alltasks'); ?>
                    </a>
                </li>
                <li class="mtt-menu-delimiter slmenu-lists-begin mtt-need-list" <?php if(is_readonly()) echo 'style="display:none"' ?>></li>
            </ul>
</div> 
<div id="page_ajax" style="display:none"></div>
