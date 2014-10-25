<?php defined('SYSPATH') or die('No direct script access.');?><!DOCTYPE html>
<head>
  <meta charset="utf-8"/>
  <title><?php echo $core->name; ?></title>
  <link rel="shortcut icon" href="<?php echo URL::base(); ?>media/favicon.ico?ver=0.1" /> 
  <?php echo HTML::style(STATIC_HOME_URL .'r/pure/pure-min.css'); ?>
  <?php echo HTML::style(STATIC_HOME_URL .'r/awesome/css/font-awesome.min.css'); ?>
  <?php echo HTML::script('media/olark.js'); ?>
  <?php echo HTML::style('media/default.css'); ?>
</head>
<body>
<div class="pure-g main-page">     
  <div class="pure-u-1-4">     
    <h1 class='logo'><?php echo HTML::anchor('/', $core->name); ?></h1>
  </div><div class="pure-u-1-2">     
  </div><div class="pure-u-1-4 pannel">     
    <?php echo HTML::anchor('https://account.puhua.co/sigin', '登入', array('class'=>'hot')); ?>
    <?php echo HTML::anchor('https://account.puhua.co/sigup', '注册', array('class'=>'hot')); ?>
    <?php echo HTML::anchor('help', '帮助'); ?>
  </div>
</div>
<div class="pure-g">
  <div class="pure-u-1 main-menu">     
    <div class="main-page">
    <?php echo HTML::anchor('/aboutme', '关于普华'); ?>
    <?php echo HTML::anchor('/service', '服务项目'); ?>
    <?php echo HTML::anchor('/product', '产品与技术解决方案'); ?>
    <?php echo HTML::anchor('/faq', '常见问题与解答'); ?>
    <?php echo HTML::anchor('/contact', '联系方式'); ?>
    </div>
  </div>
</div>
<div class="pure-g main-page">
  <?php echo $content; ?>
  <div class="pure-u-1" id="footer">
    <div class="pure-u-1-6">
      <b><i class="icon-star"></i> 帮助中心</b> <br />
      <?php echo HTML::anchor('help/contract', '合作流程'); ?> <br />
      <?php echo HTML::anchor('help/support', '技术协助方式'); ?> <br />
      <?php echo HTML::anchor('help/user', '用户协议'); ?> <br />
      <?php echo HTML::anchor('help/free', '免责说明'); ?> <br />
    </div><div class="pure-u-1-6">
      <b><i class="icon-medkit"></i> 站点导航</b> <br />
      <?php echo HTML::anchor('http://heze.perhome.cn', '技术交流协会'); ?> <br />
      <?php echo HTML::anchor('http://puhua.co', '普华网'); ?> <br />
      <?php echo HTML::anchor('http://search.puhua.co', '本地检索'); ?> <br />
      <?php echo HTML::anchor('http://task.perhome.cn', '普华任务'); ?> <br />
    </div><div class="pure-u-1-6">
      <b><i class="icon-sitemap"></i> 开放平台</b> <br />
      <?php echo HTML::anchor('https://git.perhome.cn', '本站镜像'); ?> <br />
      <?php echo HTML::anchor('https://github.com/perhome', 'Github'); ?>
    </div><div class="pure-u-1-6">
      <b><i class="icon-sitemap"></i> 关注普华</b> <br />
      <?php echo HTML::anchor('http://blog.perhome.cn/', '博客'); ?> <br />
      <?php echo HTML::anchor('http://weibo.com/perhome', '新浪微博'); ?> <br />
      <?php echo HTML::anchor('http://t.qq.com/perhome', 'QQ微博'); ?> <br />
    </div><div class='pure-u-1-3 copyright'>
      <?php echo $core->title; ?>@菏泽 <br />
      © 2013 Perhome inc  <br />
    </div>
  </div>
</div>    
</body>
</html>
