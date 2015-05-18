    <div id="mtt_body">

        <div class="topbar">

            <div id="toolbar" class="header-left col-sm-6 col-md-6">
                <div id="htab_newtask">
                    <form id="newtask_form" method="post">
                        <label id="task_placeholder" class="placeholding" for="task">
                          <div class="append-icon">
                            <input id="task" class="form-control form-white" type="text" autocomplete="off" maxlength="250"  placeholder="Новая задача">
                            <i id="newtask_submit" class="icon icon-list-add" title="Add">&#xe847;</i>
                          </div>
                        </label>
                    </form>
                </div>
            </div>
            
            <div class="header-left">
              <a href="#" id="newtask_adv" title="<?php _e('advanced_add');?>">
                  <i class="icon icon-publish">&#xe824;</i>
              </a>
            </div>

            <div class="header-right">

              <div id="htab_search">
                <div class="mtt-searchbox-c">
                 <input type="text" name="search" class="form-control form-white" maxlength="250" id="search" autocomplete="off" />
                 <div class="mtt-searchbox-icon mtt-icon-search"></div>
                 <div id="search_close" class="mtt-searchbox-icon mtt-icon-cancelsearch"></div>
                </div> 
              </div>

              <div id="page_tasks" style="display:none">
                <div id="searchbar" style="display:none">
                    <?php _e( 'searching');?> <span id="searchbarkeyword"></span>
                </div>
                <div style="clear:both"></div>
              </div>

            </div>
        </div>
        
        <div class="main-content">
		
	
	<div class="row page-settings">
		<div class="col-sm-4">
		bootstrap switch
			<span id="bar_auth">
				<span id="bar_public" style="display:none"><?php _e('public_tasks');?> |</span>
				  <a href="#login" id="bar_login" class="nodecor"><u><?php _e('a_login');?></u> <span class="arrdown"></span></a>
				  <a href="#logout" id="bar_logout"><?php _e('a_logout');?></a>
			</span>
		</div>
	</div>
	
	<div class="row page-settings">
		
		<div class="col-sm-4">
		    <h6>Текущие задачи</h6>
			http://themes-lab.com/make/admin/layout2/mailbox.html
			<div class="titleOpt">
				<a><span id="taskview" class="mtt-menu-button"><span id="total">0</span></span></a>  
				<div id="list_all" class="mtt-tab mtt-tabs-alltasks mtt-tabs-hidden list_all">
					<a href="#alltasks">
						<span><?php _e('alltasks'); ?></span>
						<div class="list-action"></div>
					</a>
				</div>
			</div>
		</div>
		
		<div class="col-sm-4">
			<a class="active" id="tagcloudbtn"><span>Теги</span></a>
				<div id="tagcloud" style="display:none">
					<a id="tagcloudcancel" class="mtt-img-button"><span></span></a>
					<div id="tagcloudload"></div>
					<div id="tagcloudcontent"></div>
				</div>
		</div>		
		
		<div class="col-sm-4">
			<span class="mtt-notes-showhide">
				<?php _e('notes');?> 
				<a href="#" id="mtt-notes-show"><?php _e('notes_show');?></a> / 
				<a href="#" id="mtt-notes-hide"><?php _e('notes_hide');?></a>
			</span>
		</div>
	
	</div>

		
		
		
        <div id="loading" class="center"></div>
        <div id="bar">
            <div id="msg"><span class="msg-text"></span>
                <div class="msg-details"></div>
            </div>
        </div>

<!--Отображение задач по фильтрам (теги..) -->
  <!--  
  <span id="mtt_filters"></span>
-->

<!--Отображение задач -->

     
<div id="taskcontainer">
 <ol id="tasklist" class="sortable"></ol>
</div>
</div>  


<!--Создание задачи-->

    <div id="page_taskedit" style="display:none">

        <form id="taskedit_form" name="edittask" method="post"> 
            <div class="mtt-back-button">
                <a href="#" class="mtt-back-button">
                    <?php _e( 'go_back');?>
                </a>
            </div>

                       
            <h3 class="mtt-inadd"><?php _e('add_task');?></h3>
            <h3 class="mtt-inedit"><?php _e('edit_task');?>
              <div id="taskedit-date" class="mtt-inedit">
                (<span class="date-created" title="<?php _e('taskdate_created');?>"><span></span></span><span class="date-completed" title="<?php _e('taskdate_completed');?>"> &mdash; <span></span></span>)
            </div>
            </h3>

                <input type="hidden" name="isadd" value="0" />
                <input type="hidden" name="id" value="" />
                <div class="form-row form-row-short">
                    <span><?php _e('priority');?></span>
                    <select class="selectpicker" name="prio">
                        <option value="2">+2</option>
                        <option value="1">+1</option>
                        <option value="0" selected="selected">&plusmn;0</option>
                        <option value="-1">&minus;1</option>
                    </select>
                </div>
                <div class="form-row form-row-short">
                    <span class="h"><?php _e('due');?> </span>
                    <input name="duedate" id="duedate" value="" class="in100" title="Y-M-D, M/D/Y, D.M.Y, M/D, D.M" autocomplete="off" />
                </div>
                <div class="form-row-short-end"></div>
                <div class="form-row">
                    <div class="h">
                        <?php _e( 'task');?>
                    </div>
                    <input type="text" name="task" value="" class="in500" maxlength="250" />
                </div>
                <div class="form-row">
                    <div class="h">
                        <?php _e( 'note');?>
                    </div>
                    <textarea name="note" class="in500"></textarea>
                </div>
                <div class="form-row">
                    <div class="h">
                        <?php _e( 'tags');?>
                    </div>
                    <table cellspacing="0" cellpadding="0" width="100%">
                        <tr>
                            <td>
                                <input type="text" name="tags" id="edittags" value="" class="in500" maxlength="250" />
                            </td>
                            <td class="alltags-cell">
                                <a href="#" id="alltags_show">
                                    <?php _e( 'alltags_show');?>
                                </a>
                                <a href="#" id="alltags_hide" style="display:none">
                                    <?php _e( 'alltags_hide');?>
                                </a>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="form-row" id="alltags" style="display:none;">
                    <?php _e( 'alltags');?> <span class="tags-list"></span>
                </div>
                <div class="form-row form-bottom-buttons">
                    <input type="submit" value="<?php _e('save');?>" />
                    <input type="button" id="mtt_edit_cancel" class="mtt-back-button" value="<?php _e('cancel');?>" />
                </div>
            </form>

    </div>

<!-- end of page_taskedit -->


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


    </div>
 
 </div>