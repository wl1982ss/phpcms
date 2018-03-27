<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=7" />
<title><?php if(isset($SEO['title']) && !empty($SEO['title'])) { ?><?php echo $SEO['title'];?><?php } ?><?php echo $SEO['site_title'];?></title>
<meta name="keywords" content="<?php echo $SEO['keyword'];?>">
<meta name="description" content="<?php echo $SEO['description'];?>">
<link href="<?php echo CSS_PATH;?>../company/css/style.css" rel="stylesheet" type="text/css" />
<link href="../../../../statics/css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo JS_PATH;?>../company/js/jquery.js"></script>
<script type="text/javascript" src="<?php echo JS_PATH;?>../company/js/easySlider1.5.js"></script>
<script type="text/javascript" charset="utf-8">
// <![CDATA[
$(document).ready(function(){	
	$("#slider").easySlider({
		controlsBefore:	'<p id="controls">',
		controlsAfter:	'</p>',
		auto: true, 
		continuous: true
	});	
});
// ]]>
</script>
<style type="text/css">
#slider { margin:0; padding:1px; list-style:none; }
#slider ul,
#slider li { margin:0; padding:0; list-style:none; }
/* 
    define width and height of list item (slide)
    entire slider area will adjust according to the parameters provided here
*/
#slider li { width:943px; height:323px; overflow:hidden; }
p#controls { margin:0; position:relative; }
#prevBtn,
#nextBtn { display:block; margin:0; overflow:hidden; width:41px; height:41px; position:absolute; left: -50px; top:-178px; }
#nextBtn { left:965px; }
#prevBtn a { display:block; width:41px; height:41px; background:url(<?php echo IMG_PATH;?>../company/images/left_arrow.gif) no-repeat 0 0; }
#nextBtn a { display:block; width:41px; height:41px; background:url(<?php echo IMG_PATH;?>../company/images/right_arrow.gif) no-repeat 0 0; }
</style>
</head>
<body>
<div class="main">
  <?php include template("content","header"); ?>
  <div class="slider">
    <div class="slice1">
      <div class="slice2" id="slider">
        <ul>
          <li>
            <div>
              <p class="img"><img src="<?php echo IMG_PATH;?>../company/images/java_1.jpg" alt="screen 1" width="458" height="323" /></p>
              <h2>案例展示3</h2>
              <p><strong>Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words.</strong><br />
                <br />
              </p>
              <p>Lorem Ipsum, you need to be sure there isn't anything <br />
                embarrassing hidden in the middle of text. </p>
<p>&nbsp;</p>
              <p><a href="google.com"><img src="<?php echo IMG_PATH;?>../company/images/View.gif" width="122" height="32" border="0" alt="view" /></a> <a href="portfolio.html"><img src="<?php echo IMG_PATH;?>../company/images/more_info.gif" width="122" height="32" border="0"  alt="sign"/></a></p>
            </div>
          </li>
          <li>
            <div>
              <p class="img"><img src="<?php echo IMG_PATH;?>../company/images/java_2.jpg" alt="screen 2" width="458" height="323" /></p>
              <h2>案例展示2</h2>
              <p><strong>Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words.</strong><br />
                <br />
              </p>
              <p>Lorem Ipsum, you need to be sure there isn't anything <br />
                embarrassing hidden in the middle of text. </p>
<p>&nbsp;</p>
              <p><a href="google.com"><img src="<?php echo IMG_PATH;?>../company/images/View.gif" width="122" height="32" border="0" alt="view" /></a> <a href="portfolio.html"><img src="<?php echo IMG_PATH;?>../company/images/more_info.gif" width="122" height="32" border="0"  alt="sign"/></a></p>
            </div>
          </li>
          <li>
            <div>
              <p class="img"><img src="<?php echo IMG_PATH;?>../company/images/java_3.jpg" alt="screen 3" width="458" height="323" /></p>
              <h2>案例展示1</h2>
              <p><strong>Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words.</strong><br />
                <br />
              </p>
              <p>Lorem Ipsum, you need to be sure there isn't anything <br />
                embarrassing hidden in the middle of text. </p>
<p>&nbsp;</p>
              <p><a href="google.com"><img src="<?php echo IMG_PATH;?>../company/images/View.gif" width="122" height="32" border="0" alt="view" /></a> <a href="portfolio.html"><img src="<?php echo IMG_PATH;?>../company/images/more_info.gif" width="122" height="32" border="0"  alt="sign"/></a></p>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <div class="body">
    <div class="body_resize">
      <div class="Welcome">
        <h2> 欢迎使用高效的DooPHP开源框架</h2>
        <p> DooPHP 是一个敏捷的开源PHP开发框架，采用MVC设计模式和对象关系映射(ORM)技术，可以有效的提高开发效率。</p>
        <p><img src="<?php echo IMG_PATH;?>../company/images/img_1.jpg" width="214" height="177" alt="img_1" /><strong>DooPHP适合我吗？</strong></p>
        <p>—— DooPHP框架本身的设计更注重的是其核心性能 ，而不是花哨的功能 ，它更适合那些不想花太多时间学习一种框架或者一门新的语言的人，适合不喜欢某些框架产生的那些后期难以维护和修改的设计；适合时间紧任务重的项目；适合应用执行效率要求较高的项目。</p>
        <p>&nbsp;</p>
        <h2>DooPHP有什么特点?</h2>
        <div class="bloga">
        <img src="<?php echo IMG_PATH;?>../company/images/img_2.gif" width="53" height="55" alt="img_2" />
        <p><strong>1. 高性能， 高效率</strong> DooPHP 采用MVC设计模式和对象关系映射(ORM)技术，可以有效的提高开发效率。 </p>
        </div>
        <div class="bloga"> <img src="<?php echo IMG_PATH;?>../company/images/img_3.gif" width="66" height="69"  alt="img_3" />
          <p><strong>2. 较低的学习曲线</strong> DooPHP小巧易用，结构简单，没有使用经验的开发者同样可以很快上手。 </p>
        </div>
        <div class="bloga"> <img src="<?php echo IMG_PATH;?>../company/images/img_4.gif" width="46" height="49"  alt="img_4" />
          <p><strong>3. 高度灵活性</strong> 在DooPHP 的设计中，很多地方都很灵活，比如调用根目录，只需写一句“['SITE_PATH']”即可。 </p>
        </div>
        <div class="bloga"> <img src="<?php echo IMG_PATH;?>../company/images/img_5.gif" width="49" height="50"   alt="img_5"/>
          <p><strong>4. 轻量级</strong> DooPHP是一款轻量级的PHP开发框架，全部文件加起来不超过1M 。 </p>
        </div>
      </div>
      <div class="Box">
        <h2>下载DooPHP v1.4.1</h2>
        <p><img src="<?php echo IMG_PATH;?>../company/images/doodownload.png" width="311" height="76" alt="Latest" /></p>
        <div class="clr"></div>
        <p>&nbsp;</p>
        <h2>历史版本</h2>
		<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=dcd1c47627b910509414b85662be50cc&action=position&posid=1&order=listorder+DESC&thumb=1&num=5\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'1','order'=>'listorder DESC','thumb'=>'1','limit'=>'5',));}?> 
           <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
           <p><strong><a href="<?php echo $r['url'];?>" title="<?php echo str_cut($r['title'],30);?>"><?php echo $r['title'];?></a></strong><br />
        <?php echo str_cut($r[description],90);?><a href="<?php echo $r['url'];?>" class="link">详细</a></p>
		<div class="bg"></div>
           <?php $n++;}unset($n); ?>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
 <p>&nbsp;</p>
 <p><a href="#">更多版本</a></p>

      </div>
      <div class="clr"></div>
    </div>
    <div class="clr"></div>
  </div>
   <?php include template("content","footer"); ?>
</div>
</body>
</html>