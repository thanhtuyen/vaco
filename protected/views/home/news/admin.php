<body>
<section id="t3-mainbody" class="container t3-mainbody">
  <div class="row">
    <div id="t3-content" class="t3-content span12">

      <div id="system-message-container">
      </div>
      <script type="text/javascript">
        Joomla.submitbutton = function(pressbutton) {
          var form = document.getElementById('mailtoForm');

          // do field validation
          if (form.mailto.value == "" || form.from.value == "") {
            alert('Vui lòng nhập địa chỉ Email hợp lệ.');
            return false;
          }
          form.submit();
        }
      </script>

      <div id="mailto-window">
        <h2>
          Gửi Email địa chỉ này cho bạn bè.	</h2>
        <div class="mailto-close">
          <a href="javascript: void window.close()" title="Đóng cửa sổ này lại">
            <span>Đóng cửa sổ này lại </span></a>
        </div>

        <form action="http://aasc.com.vn/web/index.php" id="mailtoForm" method="post">
          <div class="formelm">
            <label for="mailto_field">Gửi Email đến</label>
            <input type="text" id="mailto_field" name="mailto" class="inputbox" size="25" value=""/>
          </div>
          <div class="formelm">
            <label for="sender_field">
              Người gửi</label>
            <input type="text" id="sender_field" name="sender" class="inputbox" value="" size="25" />
          </div>
          <div class="formelm">
            <label for="from_field">
              Địa chỉ Email của bạn</label>
            <input type="text" id="from_field" name="from" class="inputbox" value="" size="25" />
          </div>
          <div class="formelm">
            <label for="subject_field">
              Tiêu đề (lời nhắn)</label>
            <input type="text" id="subject_field" name="subject" class="inputbox" value="" size="25" />
          </div>
          <p>
            <button class="button" onclick="return Joomla.submitbutton('send');">
              Gửi			</button>
            <button class="button" onclick="window.close();return false;">
              Hủy			</button>
          </p>
          <input type="hidden" name="layout" value="default" />
          <input type="hidden" name="option" value="com_mailto" />
          <input type="hidden" name="task" value="send" />
          <input type="hidden" name="tmpl" value="component" />
          <input type="hidden" name="link" value="55ce0cdbe34fa775c09e530ace02e48cec7400be" />
          <input type="hidden" name="8affd551bbdf8a96010c7848eca72f68" value="1" />
        </form>
      </div>

    </div>
  </div>
</section>
</body>
