<!--Авторизация -->  
    <span id="bar_auth">
      	<span id="bar_public" style="display:none"><?php _e('public_tasks');?> |</span>
      	  <a href="#login" id="bar_login" class="nodecor">
            <u><?php _e('a_login');?></u> 
            <span class="arrdown"></span>
          </a>
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
