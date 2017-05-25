<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>家具网 - 后台管理系统</title>

    <!-- Bootstrap -->
    <link href="/admin/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="/admin/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="/admin/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="/admin/vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="/admin/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form>
              <h1>登录家具网后台</h1>
              <div>
                <input type="text" name="username" class="form-control" placeholder="用户名" required="" />
              </div>
              <div>
                <input type="password" name="password" class="form-control" placeholder="密码" required="" />
              </div>
              <div>
                <a class="btn btn-default submit" href="#">登录</a>
              </div>
              <div class="clearfix"></div>
              <div class="separator">
                <div>
                  <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
                  <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
    <script src="/admin/vendors/jquery/dist/jquery.min.js"></script>
    <script>
        $('.submit').on('click', function() {
            var username = $('input[name="username"]').val()
            var password = $('input[name="password"]').val()

            if (!username) {
                alert('请输入用户名')
                return
            }
            else if (!password) {
                alert('请输入密码')
                return
            }

            $.ajax({
                url: '/admin/login',
                type: 'post',
                data: {
                    username: username,
                    password: password
                },
                success: function(data) {
                    alert(data.message)

                    if (data.status === 1) {
                        window.location.href = '/admin'
                    }
                }
            })
        })
    </script>
  </body>
</html>
