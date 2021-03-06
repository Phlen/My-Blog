<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="/Test/ohana-php/Public/Home-css/reset.css">
<link rel="stylesheet" href="/Test/ohana-php/Public/css/bootstrap/css/bootstrap.css">
<link rel="stylesheet" href="/Test/ohana-php/Public/Home-css/common.css">
<link rel="stylesheet" href="/Test/ohana-php/Public/Home-css/style.css">

  <link rel="stylesheet" href="/Test/ohana-php/Public/Home-css/article.css">
  <title>Allen的个人博客</title>
</head>
<body>
<div class="login">
  <a href="/Test/ohana-php/admin">登陆</a>
  <span>|</span>
  <a href="javascript:void(0);" data-toggle="modal" data-target="#myPopwin">注册</a>

  <!--弹窗部分：-->
  <div class="modal fade" id="myPopwin" tabindex="-1"role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">注册</h4>
        </div>
        <div class="modal-body">
          <div class="col-md-4">
            <img src="/Test/ohana-php/Public/Home-images/guests.jpg" width="100%">
          </div>
          <div class="form-box col-md-8">
            <form class="form-horizontal">
              <div class="form-group">
                <label for="InputEmail" class="col-md-3">用户名:</label>
                <div class="col-md-9">
                  <input type="email" id="InputEmail" class="form-control" placeholder="Email">
                </div>
              </div>
              <div class="form-group">
                <label for="InputPassword" class="col-md-3">密码:</label>
                <div class="col-md-9">
                  <input type="password" id="InputPassword" class="form-control" placeholder="password">
                </div>
              </div>
              <div class="captcha-box">
                <div class=" form-group">
                  <label for="mobile" class="col-md-3">手机号码:</label>
                  <div class="col-md-9">
                    <input type="text" id="mobile" class="form-control" placeholder="telephone number">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-md-7">
                    <input type="text" class="form-control" maxlength="11" placeholder="请输入验证码">
                  </div>
                  <div class="col-md-5">
                    <input type="button" id="getting"  class="form-control" value="获取验证码">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="center-block submit-box">
                  <button type="submit" class="btn btn-warning">注册</button>
                  <!-- <button type="submit" class="btn btn-primary">登录</button> -->
                </div>

              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>
<div class="header">
  <h1><a href="javascript:;"><?php echo ($info["name"]); ?></a></h1>
  <a href="javascript" class="word">去留无意，看庭前花开花落；宠辱不惊，望天上云卷云舒.....</a>
</div>
<div class="nav-swf">
  <object id="customMenu" data="/Test/ohana-php/Public/Home-images/nav.swf" width="528" height="70" type="application/x-shockwave-flash"><param name="allowScriptAccess" value="always"><param name="allownetworking" value="all"><param name="allowFullScreen" value="true"><param name="wmode" value="transparent"><param name="menu" value="false"><param name="scale" value="noScale"><param name="salign" value="1">
  </object>
  <div class="nav" id="nav">
    <ul>
      <li><a href="/Test/ohana-php/index" >首页</a></li>
      <?php if(is_array($navigation)): $i = 0; $__LIST__ = $navigation;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$nav): $mod = ($i % 2 );++$i; if($nav["pid"] == 0): ?><li>

            <a href="/Test/ohana-php/article/list/<?php echo ($nav["id"]); ?>"><?php echo ($nav["name"]); ?></a>
          </li><?php endif; endforeach; endif; else: echo "" ;endif; ?>
      <li><a href="/Test/ohana-php/guestBook" title="留言版">留言版</a></li>
    </ul>
  </div>
</div>
  <div class="container">
    <div class="main" id="main">
      <div class="articleStyle">
        <h2><a href="javascript:;">逝</a></h2>
        <p>岁月就像一条河流，
          左岸是无法忘却的回忆；
          右岸是值得期待的未来；
          中间，是飞快流淌的、是隐隐的伤感和迷茫的现今。
          世界上值得我们珍惜的事物有很多，但我们真正有珍惜过的东西却不多。
          很多时候都只能在失去后自我叹息，懊悔。
          去留无意，看庭前花开花落；宠辱不惊，望天上云卷云舒。
          在纷扰的世界里，能够学会用一颗平常心来对待回忆，对待逝去的一切，也是一种境界。
          只是我们凡人难以做到！
          我想，人们最美好的回忆应该是最痛苦的时段，只是回忆起来很美。
          我们在逝去的回忆中摘取岁月的青果，尝到了酸涩，
          回忆逝去的一切，而在回忆后在努力去抓住青果的核，埋在心底，怀念逝去的一切…
        </p>
        <div class="img-box"><img src="/Test/ohana-php/Public/Home-images/shi.jpg" width="450px" height="300px"></div>
        <p class="message"><span>2014-12-30</span><span>作者：Allen</span><span>分类：
          <a href="javascript:;">心得笔记</a> </span><span>阅读（299）</span><span>评论（144）</span></p>
      </div>

      <div class="articleStyle">
        <h2><a href="javascript:;">蜗牛</a></h2>
        <p>我总在幻想
          人生或许就是一场攀登
          每个人都是一只背着重壳登高的蜗牛
          壳里装着理想、誓言
          以及所有对过去的执念、对未来的憧憬
          我们攀登着
          希望企及那传说中的天堂
          坚持到底的，很少
          半途而废的，很多
          但无论是坚持还是放弃
          他们，都不会轻松
          坚持的人，哀叹希望的渺茫
          放弃的人，却早已失去了自我
        </p>
        <div class="img-box"><img src="/Test/ohana-php/Public/Home-images/woniu.jpg" width="450px" height="300px"></div>
        <p class="message"><span>2014-12-30</span><span>作者：Allen</span><span>分类：<a href="/" target="_blank">心得笔记</a></span><span>阅读(229)</span><span>评论(124)</span></p>
      </div>

      <div class="articleStyle">
        <h2><a href="javascript:;">圆月</a></h2>
        <h3>《忆亲》</h3>
        <p>月圆独坐西窗台，薄雾笼圆月，清辉难泻。
          秋风无边，思乡正浓，又秋雨！凉彻心扉。
          此番离乡去，孤自庆仲秋，独羡南飞雁。
          昨夜幽梦忽还乡，青稻泛黄，又见母欢颜。
          泪哽咽，窗外忽作响，秋雨丝丝凉！再抬头，雾失明月，方忆，月是故乡明
        </p>
        <h3>《 忆人》</h3>
        <p>
          圆月月明唏玉影，伊人倚树叶映红，叶红思忆浓。盈泪渐消伊人容，难忘旧时欢。月圆独酌笑清凉，情归何处？？悔当初，驻步宫门却回头；怨如今，人去却留丝相牵，一语难释此番思念。今又月圆，伊人何方？月圆情缘两圆！寻好梦，梦难成，待明年月圆，能否相聚？
        </p>
        <div class="img-box"><img src="/Test/ohana-php/Public/Home-images/moon.jpg" width="450px" height="300px"></div>
        <p class="message"><span>2014-12-30</span><span>作者：Allen</span><span>分类：
          <a href="javascript:;">心得笔记</a> </span><span>阅读（299）</span><span>评论（144）</span></p>
      </div>

    </div>
    <div class="sidebar" id="sidebar">
  <div class="frame">
    <h2 class="h2"><p>个人档案</p></h2>
    <div class="personal-file">
      <div class="figure"><img src="/Test/ohana-php/Public/upload/img/<?php echo ($info["logo"]); ?>"></div>
      <p>姓名：莫伦辉</p>
      <p>网名：莫俊文</p>
      <p>主页：<a href="/Test/ohana-php/home">www.Allen.com</a> </p>
      <p>现居：肇庆市-肇庆学院</p>
      <p>职业：学生</p>
      <p>爱好：足球、动漫</p>
    </div>
  </div>

  <div class="frame">
    <h2 class="h2"><p>博客分类</p></h2>
    <ul class="list list-s1" data-role="accordion">
        <?php if(is_array($navigation)): foreach($navigation as $k=>$nav): ?><li>
            <i class="arrow_carrot-2right" data-role="click-it"></i><a href="/Test/ohana-php/article/list/<?php echo ($nav["id"]); ?>"><?php echo ($nav["name"]); ?>(<?php echo(count($nav['children:'])) ?>)</a>
            <ul class="child-list">
              <?php $__FOR_START_5369__=0;$__FOR_END_5369__=count($nav['children:']);for($i=$__FOR_START_5369__;$i < $__FOR_END_5369__;$i+=1){ ?><!--<li><a href="/Test/ohana-php/article/<?php echo ($nav["title"]); ?>" ><?php echo ($nav['children:'][$i]['name']); ?></a></li>-->
                <li><a href="/Test/ohana-php/Article2/<?php echo ($nav['children:'][$i]['name']); ?>"><?php echo ($nav['children:'][$i]['name']); ?></a> </li><?php } ?>
            </ul>
          </li><?php endforeach; endif; ?>
    </ul>
  </div>

  <div class="frame">
    <h2 class="h2"><p>近期文章</p></h2>
    <ul class="list list-s2">
      <?php if(is_array($lastArticle)): $i = 0; $__LIST__ = $lastArticle;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$art): $mod = ($i % 2 );++$i;?><li><a href="/Test/ohana-php/home/article/<?php echo ($art["id"]); ?>"><?php echo ($art["title"]); ?></a> </li><?php endforeach; endif; else: echo "" ;endif; ?>
    </ul>
  </div>

  <div class="frame">
    <h2 class="h2"><p>友情链接</p></h2>
    <ul class="list list-s2">
      <li><a href="http://weibo.com/u/2853059680/home?wvr=5&sudaref=www.hao123.com" target="_blank">我的微博</a></li>
    </ul>
  </div>
</div>
    </div>
  <div class="footer"><p>design by Allen.mo</p></div>
</body>
<script src="/Test/ohana-php/Public/Home-js/jquery-1.11.0.js"></script>
<script src="/Test/ohana-php/Public/Home-js/lte-ie7.js"></script>
<script src="/Test/ohana-php/Public/Home-js/bootstrap.min.js"></script>
<script src="/Test/ohana-php/Public/Home-js/jquery.cookie.js"></script>
<script src="/Test/ohana-php/Public/Home-js/base.js"></script>
<script src="/Test/ohana-php/Public/Home-js/setMesage.js"></script>
</html>