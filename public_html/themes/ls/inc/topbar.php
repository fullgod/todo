<div id="toolbar" class="topbar">

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