<?php if (!defined('THINK_PATH')) exit();?>﻿     <div class="us_rb5">
     
      <div class="us_rb5_upper">
       <div class="us_rb5_upper_l"></div>
       <div class="us_rb5_upper_r">
        <h2>邀请好友送奖金</h2>
        <p>邀请好友成功投标（不包含秒还标、净值标交易），立即送您<span>千分之<?php echo ($reward["award_invest"]); ?></span>的奖金，赶快行动吧。</p>
       </div>
      </div>
      <ul>
       <li><p>您的邀请链接：</p><input id="txt_links" readonly="readonly" class="invi_text" value="http://<?php echo $_SERVER['HTTP_HOST'];?>/member/common/register?invite=<?php echo session('u_id');?>" type="text" /></li>
       <li><input type="button" class="invi_but" value="复制" id="copy_button"/></li>
       <li><p>您的推广码：<samp><?php echo ($expand_num); ?></samp></p></li>
       <li><h6>您可以通过QQ，MSN等IM工具或者微博与邮件把上面的推广码告诉您的好友。</h6></li>
      </ul>
      
     </div>
<script type="text/javascript" src="__ROOT__/Style/ZeorClipboard/ZeroClipboard.js"></script>
<script type="text/javascript" src="__ROOT__/Style/ZeorClipboard/mod_showcodes.js"></script>
<script type="text/javascript">
        var newTitle = '<?php echo ($glo["web_name"]); ?>提醒您：';
        function copyToClipboard(obj) {
            if (obj) {
                var clipBoardContent = obj.value;
                $(obj).select();
                try {
                    window.clipboardData.setData("Text", clipBoardContent);
                    $.jBox.tip("您好，链接复制成功!",'info');
                }
                catch (e) {
                    $.jBox.tip("您好，链接复制失败，请手动复制!",'fail');
                }
            }
        }
    	function b(f) {
    		if(f){
                $.jBox.tip("您好，链接复制失败，请手动复制!",'fail');
    		}else{
                $.jBox.tip("您好，链接复制成功!",'info');
    		}
    	}
        $(function() {
            $("#txt_links").click(function() { $(this).select(); });
        });
    	ZeroClipboard.setMoviePath("__ROOT__/Style/ZeorClipboard/ZeroClipboard.swf");
        initClipBoard(1);
</script>