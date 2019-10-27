<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>
    登陆
  </title>
  <link href="/Public/Admin/css/bootstrap.min.css" rel="stylesheet">
  <link href="/Public/Admin/css/font-awesome.min.css" rel="stylesheet">
  <link href="/Public/Admin/css/fonts.googleapis.com.css" rel="stylesheet">
  <link href="/Public/Admin/css/ace.css" rel="stylesheet">
</head>
<body class="login-layout">
<div class="main-container">
  <div class="main-content">
    <div class="row">
      <div class="col-sm-10 col-sm-offset-1">
        <div class="login-container">
          <div class="center">
            <h1>
              <i class="ace-icon fa fa-leaf green"></i>
              <span class="red">文君</span>
              <span class="white" id="id-text2">电商项目</span>
            </h1>
            <h4 class="blue" id="id-company-text">© Company Name</h4>
          </div>
          <div class="space-6"></div>
          <div class="position-relative">
            <div class="login-box visible widget-box no-border" id="login-box">
              <div class="widget-body">
                <div class="widget-main">
                  <h4 class="header blue lighter bigger">
                    <i class="ace-icon fa fa-coffee green"></i>
                    欢迎您登陆，亲爱的管理员！
                  </h4>
                  <div class="space-6"></div>
                  <form action="" method="post">
                    <fieldset>
                      <label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input class="form-control" placeholder="用户名" type="text" name="username">
															<i class="ace-icon fa fa-user"></i>
														</span>
                      </label>

                      <label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input class="form-control" placeholder="密码" type="password">
															<i class="ace-icon fa fa-lock"></i>
														</span>
                      </label>
                      <div class="block clearfix">
                        <div class="row">
                          <div class="col-xs-6">
                          	<span class="block input-icon input-icon-right">
															<input class="form-control" placeholder="请输入验证码" type="text" name="captcha">
															<i class="ace-icon fa fa-lock"></i>
														</span>
                          </div>
                          <div class="col-xs-6">
                            <img alt="" src="<?php echo U('verify');?>" id="verify" style="cursor: pointer">
                            <script src="/Public/Admin/Js/jquery-2.1.4.min.js"></script>
                            <script>
                              $(function () {
                                $("#verify").on("click",function () {
                                  var url = "<?php echo U('verify');?>"+"?date="+new Date().getTime();
                                  $(this).attr("src",url)
                                })
                              })
                            </script>
                          </div>
                        </div>
                      </div>
                      <div class="space"></div>

                      <div class="clearfix">
                        <label class="inline">
                          <input class="ace" type="checkbox">
                          <span class="lbl">记住我</span>
                        </label>

                        <button class="width-35 pull-right btn btn-sm btn-primary" type="submit">
                          <i class="ace-icon fa fa-key"></i>
                          <span class="bigger-110">登陆</span>
                        </button>
                      </div>

                      <div class="space-4"></div>
                    </fieldset>
                  </form>

                  <div class="social-or-login center">
                    <span class="bigger-110">或者用一下登陆</span>
                  </div>

                  <div class="space-6"></div>

                  <div class="social-login center">
                    <a class="btn btn-primary">
                      <i class="ace-icon fa fa-facebook"></i>
                    </a>

                    <a class="btn btn-info">
                      <i class="ace-icon fa fa-twitter"></i>
                    </a>

                    <a class="btn btn-danger">
                      <i class="ace-icon fa fa-google-plus"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>