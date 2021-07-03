<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->


    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>



  	<title>Voting System using PHP</title>
  	<!-- Tell the browser to be responsive to screen width -->
  	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  	<!-- Bootstrap 3.3.7 -->
  	<link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="plugins/iCheck/all.css">
  	<!-- DataTables -->
    <link rel="stylesheet" href="bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  	<!-- Font Awesome -->
  	<link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  	<!-- Theme style -->
  	<link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  	<!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  	<link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">

  	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  	<!--[if lt IE 9]>
  	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  	<![endif]-->

  	<!-- Google Font -->
  	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

  	<style>
        .mt20{
          margin-top: 20px;
        }
        .title{
          font-size: 50px;
        }
        #candidate_list{
          margin-top:20px;
        }

        #candidate_list ul{
          list-style-type:none;
        }

        #candidate_list ul li{ 
          margin:0 30px 30px 0; 
          vertical-align:top
        }

        .clist{
          margin-left: 20px;
        }

        .cname{
          font-size: 25px;
        }

        .votelist{
          font-size: 17px;
        }
        
    

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


<body>

  <div class="container">
    <nav class="navbar navbar-default navbar-fixed-top navbar-inverse" role="navigation">
      <div class="container">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example-nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <div class="navbar-header">
            
            <a href="index.html" class="navbar-brand headerFont text-lg"><strong>eVoting</strong></a>
          </div>

          <div class="collapse navbar-collapse" id="example-nav-collapse">
            <ul class="nav navbar-nav">
              <li><a href="index.php"><span class="subFont"><strong >Vote</strong></span></a></li>
              <li><a href="#featuresTab"><span class="subFont"><strong>Features</strong></span></a></li>
              <li><a href="Feedback.html"><span class="subFont"><strong>Feedback</strong></span></a></li>
            
            </ul>
            
           
          </div>

      </div>
        <!-- end of container -->
    </nav>
  </div>


</body>