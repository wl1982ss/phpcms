<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=7" />
<title><?php if(isset($SEO['title']) && !empty($SEO['title'])) { ?><?php echo $SEO['title'];?><?php } ?><?php echo $SEO['site_title'];?></title>
<meta name="keywords" content="<?php echo $SEO['keyword'];?>">
<meta name="description" content="<?php echo $SEO['description'];?>">
<link href="<?php echo CSS_PATH;?>../company/css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="main">
  <?php include template("content","header"); ?>
  <div class="slider2">
    <div class="top">
      <h2><a href="<?php echo $CATEGORY[$catid]['‘url’'];?>"><?php echo $CATEGORY[$catid]['catname'];?></a></h2>
      <p>企业形象标语</p>
    </div>
  </div>
  <div class="body">
    <div class="body_resize">
      <div class="Welcome">
        <h2> 列表页</h2>
        <p> </p>
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=20d4e2ae1f91ae804a512503d2bd2285&action=lists&catid=%24catid&num=5&order=id+DESC&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 5;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>$catid,'order'=>'id DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>$catid,'order'=>'id DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
        <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
        <div class="bloga">
          <h4><a href="<?php echo $r['url'];?>" target="_blank"<?php echo title_style($r[style]);?>><?php echo $r['title'];?></a></h4>
          <p><?php echo str_cut($r[description],90);?></p>
        </div>
        <?php $n++;}unset($n); ?>
        <div id="pages" ><?php echo $pages;?></div>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?> </div>
      <div class="Box">
        <h2>业务简介</h2>
        <p class="clients"><em><br />
          <br />
          &quot;吉林织梦网络联合PHPCMS吧推出模板开发者合作活动，凡签约模板制作者，皆可获得PHPCMS吧及吉林织梦网络的外包业务。。。&quot;</em><br />
          <br />
          <br />
          <a href="#"><span>-PHPCMS吧</span></a><br />
          <br />
          <br />
        </p>
        <h2> 联系方式</h2>
        <p>吉林省吉林市龙潭区新山街1号</p>
        <p><strong>Tel</strong>: +123456789<br />
          <strong>Fax</strong>: +123456789<br />
          <strong>Email</strong>: webmaster@phpcms8.com </p>
      </div>
      <div class="clr"></div>
    </div>
    <div class="clr"></div>
  </div>
  <?php include template("content","footer"); ?>
</div>
</body>
</html>
