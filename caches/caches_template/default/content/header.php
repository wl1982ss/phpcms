<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><div class="header">
    <div class="block_header">
            <div class="logo"><a href="<?php echo siteurl($siteid);?>"><img src="<?php echo IMG_PATH;?>../company/images/logo.gif" width="178" height="143" border="0" alt="logo" /></a></div>
      <div style="float:right;">
        <div class="clr"></div>
        <div class="menu">
          <ul>
		  <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=b43f1459ac702900c8d44c91a5e796dd&action=category&catid=0&num=25&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'0','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'25',));}?>
            <li><a href="<?php echo siteurl($siteid);?>" class="active"><span>首页</span></a></li>
			<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
			<li><a href="<?php echo $r['url'];?>"><span><?php echo $r['catname'];?></span></a></li>
			<?php $n++;}unset($n); ?>
          <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        </ul>
        </div>
      </div>
      <div class="clr"></div>
    </div>
  </div>