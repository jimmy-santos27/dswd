<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">


<title>My Sample Login</title>
<link rel="shortcut icon" href="images/solution.png">

<!-- Bootstrap core CSS -->
<link href="/css/bootstrap.min.css" rel="stylesheet">
<link href="/css/bootstrap.css" rel="stylesheet" media="screen">
<link href="/fonts/font-awesome.min.css" rel="stylesheet" media="screen">
<!-- Plugins -->
<script type="text/javascript" language="javascript" src="/js/jquery.js"></script>


<style>
@CHARSET "UTF-8";
/*
over-ride "Weak" message, show font in dark grey
*/

.progress-bar {
    color: #333;
}

/*
Reference:
http://www.bootstrapzen.com/item/135/simple-login-form-logo/
*/

* {
    -webkit-box-sizing: border-box;
     -moz-box-sizing: border-box;
          box-sizing: border-box;
  outline: none;
}

    .form-control {
    position: relative;
    font-size: 16px;
    height: auto;
    padding: 10px;
    @include box-sizing(border-box);

    &:focus {
      z-index: 2;
    }
  }

body {
  background: url(../img/bgadmin5.jpg) no-repeat center center fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
}

.login-form {
  margin-top: 60px;
}

form[role=login] {
  color: #5d5d5d;
  background: #f2f2f2;
  padding: 26px;
  border-radius: 10px;
  -moz-border-radius: 10px;
  -webkit-border-radius: 10px;
}
  form[role=login] img {

    width: 300px;
      border-radius: 5px;
      background: #fff ;
    margin: 0 auto;
    margin-bottom: 10px;
  }
  form[role=login] input,
  form[role=login] button {
    font-size: 18px;
    margin: 16px 0;
  }
  form[role=login] > div {
    text-align: left;
      font-size: x-large;
      color: #2e6da4;
    margin-top: 10px ;
  }

.form-links {
  text-align: center;
  margin-top: 1em;
  margin-bottom: 50px;
}
  .form-links a {
    color: #fff;
  }

</style>

<body  >


<div class="container">
  
  <div class="row" id="pwd-container">
    <div class="col-md-4">


    </div>
    
    <div class="col-md-4">

      <section class="login-form"> <? echo check_message(); ?>;
        <form method="post" action="" role="login">
          <!-- <img src="http://i.imgur.com/RcmcLv4.png" class="img-responsive" alt="" /> -->

            <div>
                <span>
                <img src="/images/solution.png" width="100%" height="100px">
                </span>
            </div>



          <input type="input" name="user_email" placeholder="Username" required class="form-control input-lg" value="" />
          
          <input type="password" name="user_pass" class="form-control input-lg" id="password" placeholder="Password" required  />
          
          
          <div class="pwstrength_viewport_progress"></div>
          
          
          <button type="submit" name="btnLogin" class="btn btn-lg btn-primary btn-block">Sign in</button>
          <!-- <div>
            <a href="#">Create account</a> or <a href="#">reset password</a>
          </div>
           -->
        </form>
        
        <div class="form-links">
          <!-- <a href="#">www.website.com</a> -->
        </div>
      </section>  
      </div>
      
      <div class="col-md-4"></div>
      

  </div>
  
     
  
  
</div>
   

</body>

  
</head>
</html>
