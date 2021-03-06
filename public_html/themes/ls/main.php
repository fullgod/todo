<div id="toolbar" class="topbar">
<!-- http://codecanyon.net/item/freelance-manager/full_screen_preview/1225423 -->
            <div class="header-left col-sm-6 col-md-6">
                <div id="htab_newtask" class="pad"> 
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
              <div id="loading" class="center"></div>
            </div>

            <div class="header-left">
              <div class="pad">
                <div class="header-left">
                    <span id="taskview" class="mtt-menu-button">
                    <i class="icon icon-list">&#xe846;</i>
                      <span id="total">0</span>
                    </span>
					 <div id="list_all" class="mtt-tab mtt-tabs-alltasks mtt-tabs-hidden list_all">
                      <a href="#alltasks">
                        <span><?php _e('alltasks'); ?></span>
                        <div class="list-action"></div>
                      </a>
                    </div>
                  </div>
                  
                <a class="active" id="tagcloudbtn">
                  <span><i class="icon icon-tag">&#xe80b;</i></span>
                </a>
                <div id="tagcloud" style="display:none">
                  <a id="tagcloudcancel" class="mtt-img-button">
                    <span></span>
                  </a>
                    <div id="tagcloudload"></div>
                    <div id="tagcloudcontent"></div>
                </div>
              </div>
            </div>

            <div class="header-left">
              <div class="pad"> 
                  <span class="mtt-notes-showhide">
                      <?php _e('notes');?> 
                      <a href="#" id="mtt-notes-show"><?php _e('notes_show');?></a> / 
                      <a href="#" id="mtt-notes-hide"><?php _e('notes_hide');?></a>
                  </span>
              </div>
            </div>

            <div class="header-right">
              <div id="htab_search">
                <div class="mtt-searchbox-c">
                 <input type="text" name="search" class="form-control form-white" maxlength="250" id="search" autocomplete="off" />
                 <div class="mtt-searchbox-icon mtt-icon-search"></div>
                 <div id="search_close" class="mtt-searchbox-icon mtt-icon-cancelsearch"></div>
                </div> 
              </div>
            </div>
</div>
        

<div class="main-content">
	
<<<<<<< HEAD
<!--Авторизация -->
  
  <span id="bar_auth">
  				<span id="bar_public" style="display:none"><?php _e('public_tasks');?> |</span>
  				  <a href="#login" id="bar_login" class="nodecor"><u><?php _e('a_login');?></u> <span class="arrdown"></span></a>
  				  <a href="#logout" id="bar_logout"><?php _e('a_logout');?></a>
  </span>

<!--Отображение сообщений (ошибок и т.д.) -->

        <div id="bar">
            <div id="msg">
              <span class="msg-text"></span>
                <div class="msg-details"></div>
            </div>
        </div>

<!--Отображение задач по фильтрам (теги..) -->
  <span id="mtt_filters"></span>

<!-- Отображение задач -->
<div class="col-sm-7 col-md-7">
<div id="page_tasks" style="display:none">

  <div id="searchbar" style="display:none">
    <?php _e( 'searching');?> 
    <span id="searchbarkeyword"></span>
  </div>

  <div style="clear:both"></div>
<!-- Список задач -->
  <div id="taskcontainer">
    <ol id="tasklist" class="sortable"></ol>
  </div>
</div>

</div>
<div class="col-sm-5 col-md-5">
йцуй
</div>
</div>

<div style="col-sm-5 col-md-5 display:none">


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
=======
<!--    Ссылки на демо
    http://templatep2p.com/forum/index.php?topic=81577.msg422269#msg422269
>>>>>>> origin/master

    INFO: http://themeforest.net/item/pages-responsive-admin-dashboard-template/9694847

    DEMO: http://pages.revox.io/1.1.0/#usa

    DOWNLOAD v1.1.0:
    https://mega.co.nz/#!X4JQRDaB!u4-xjQSdPQPqkgtG8DtP2YpkuxorjhBDuz3UCsa3yso
    http://www48.zippyshare.com/v/T1CfmWYK/file.html


    http://material-ui.com/#/
    https://dribbble.com/shots/893089-Email-App-Design/attachments/97134

-->



<div id="page_tasks" class="col-md-7">
	<p>Поисковая форма</p>
    	<div id="searchbar" style="display:none">
    		<?php _e( 'searching');?> 
    		<span id="searchbarkeyword"></span>
    	</div>
	<div style="clear:both">
	</div>
<!-- Список задач -->
	<div id="taskcontainer">
		<ul id="tasklist" class="sortable"></ul>
	</div>
</div>

<div class="col-md-5">
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
</div>


</div>
