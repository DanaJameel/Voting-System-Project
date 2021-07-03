<?php
  	session_start();
  	if(isset($_SESSION['admin'])){
    	header('location:home.php');
  	}
?>


<?php include 'includes/header.php'; ?>


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>CR Voting | Green Syntax</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>

    <style>

    body{
      margin:0px;
      padding:0px;
    }
      .headerFont{
        font-family: 'Ubuntu', sans-serif;
        font-size: 24px;
      }

      .subFont{
        font-family: 'Raleway', sans-serif;
        font-size: 14px;
        
      }
      
      .specialHead{
        font-family: 'Oswald', sans-serif;
      }

      .normalFont{
        font-family: 'Roboto Condensed', sans-serif;
      }

      a {
        color: #FFFFFF;
        text-decoration: none;
      }

      a:link {
        color: #FFFFFF;
        text-decoration: none;
      }

      /* visited link */
      a:visited {
          color: #FFFFFF;
          text-decoration: none;
      }

      /* mouse over link */
      a:hover {
          color: #FFFFFF;
          text-decoration: none;
      }

      /* selected link */
      a:active {
          color: #FFFFFF;
          text-decoration: none;
      }
    </style>



</head>


<body class="hold-transition login-page">

    <div class="container">
        <nav class="navbar navbar-default navbar-fixed-top navbar-inverse
        " role="navigation">
          <div class="container">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example-nav-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <div class="navbar-header">
              
              <a href="../index.html" class="navbar-brand headerFont text-lg"><strong>eVoting</strong></a>
            </div>

            <div class="collapse navbar-collapse" id="example-nav-collapse">
              <ul class="nav navbar-nav">
                <li><a href="../index.php"><span class="subFont"><strong >Vote</strong></span></a></li>
              
              </ul>
              
              
            </div>

          </div>
          <!-- end of container -->
        </nav>
        </div>




    <!----------------------------------------------->


    <div class="login-box">
        <div class="login-logo">
          <b>Voting System</b>
        </div>
      
        <div class="login-box-body">
          <p class="login-box-msg">Sign in to start your session</p>

          <form action="login.php" method="POST">
              <div class="form-group has-feedback">
                <input type="text" class="form-control" name="username" placeholder="Username" required>
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
              </div>
              <div class="form-group has-feedback">
                <input type="password" class="form-control" name="password" placeholder="Password" required>
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
              </div>
              <div class="row">
              <div class="col-xs-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat" name="login"><i class="fa fa-sign-in"></i> Sign In</button>
                </div>
              </div>
          </form>
        </div>
        <?php
          if(isset($_SESSION['error'])){
            echo "
              <div class='callout callout-danger text-center mt20'>
                <p>".$_SESSION['error']."</p> 
              </div>
            ";
            unset($_SESSION['error']);
          }
        ?>
    </div>
      
    <?php include 'includes/scripts.php' ?>
</body>
<footer>
<p><center>Login Details Are Provided Inside README.txt File<center></p></footer>
</html>