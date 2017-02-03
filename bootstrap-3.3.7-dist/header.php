<!DOCtype html>
<html class="full" lang="en">
	<head>
		<meta charset="utf-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
    	<title>Internshipja</title>
    	<link rel="icon" href="img/tab_icon2.png">
    	<link href="css/bootstrap.min.css" rel="stylesheet">
    	<link rel="stylesheet" type="text/css" href="css/style.css">
    	<link rel="stylesheet" type="text/css" href="css/animate.css">
    	<link rel="stylesheet" type="text/css" href="css/hover.css">
    	<link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300" rel="stylesheet">
	</head>
	<body>
		<nav class="navbar navbar-blue">
			<div class="container-fluid">
				<div class="navbar-header">
      				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav-bar-mobile-menu">
      				<div class="">
        				<span class="sr-only">Toggle navigation</span>
        				<span class="icon-bar"></span>
        				<span class="icon-bar"></span>
        			</div>
      				</button>
      				<p></p>
      				<a class="navbar-brand" href="index.php"><img src="img/logo.png"></a>
    			</div> 

    			  <div class="collapse navbar-collapse" id="nav-bar-mobile-menu">
                    <ul class="nav navbar-nav" id="nunito_Font">
                    	<li id="right_shift"><a href="Students.php"><span class="hvr-underline-from-left-white">Educators</span></a></li>
                    	<li id="right_shift" class="hvr-underline-from-left-white"><a href="Employeers.php">Employers</a></li>
				    	<li id="right_shift" class="hvr-underline-from-left-white"><a href="Students.php">Students</a></li>
                    </ul>

                    <!--nav items on the right -->

				  <ul class="nav navbar-nav navbar-right" id="nunito_Font">
				      <li id="right_shift"><a href="">Login</a></li>
				      <li><button type="button" class="btn-xs btn-default2 btn-block" data-toggle="modal" data-target="#myModal" id="nunito_Font">Get Started</button>
				      </li>
				   </ul>
                </div>
    		</div>
    	</nav>
        <!-- Modal -->
          <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog">
              <!-- Modal content-->
              <div class="modal-content">
                  <button type="button" class="close" data-dismiss="modal">&times; &nbsp;</button>
                  <br></br>
                  <center><img src="img/modal_logo copy.png" class="img-responsive" alt="" width="20%" height="40%">
                  <h5 class="modal-title" id="nunito_Font"><strong><b>CREATE&nbsp;YOUR&nbsp;ACCOUNT</b></strong></h5></center>
                  <hr>
                <div class="modal-body">

                  <!-- ** FORM ** -->

                    <form method="POST" action="get_started.php" role="form">
                      <div class="form-group">
                        <div class="row">
                          <!--First Name-->
                            <div class="col-xs-6">
                              <input name="firstName" placeholder="First Name" id="firstName" type="text">
                            </div>
                          <!--Last Name-->
                            <div class="col-xs-6">
                              <input name="lastName" placeholder="Last Name" id="lastName" type="text">
                            </div>
                        </div>
                      </div>

                      <div class="form-group">
                        <div class="row">
                          <!-- Email -->
                          <div class="col-xs-12">
                            <a href="#" data-toggle="tooltip" title="We'll never share your email with anyone else">
                              <input name="emailAddress" type="email" placeholder="Email" id="emailAddress" required>
                            </a>
                          </div>
                        </div>
                      </div>

                      <div class="form-group">
                        <div class="row">
                        <!--Password-->
                          <div class="col-xs-12">
                            <input name="password" type="Password" placeholder="Password" id="password" required>
                          </div>
                        </div>
                      </div>

                      <div class="form-group">
                        <!-- Confirm password -->
                        <div class="row">
                          <div class="col-xs-12">
                            <input name="confirmPassword" type="Password" placeholder="Confirm Password" id="confirmPassword" required>
                            <div id="checkPasswordMatch"></div>
                          </div>
                        </div>
                      </div>

                      <div class="form-group">
                        <div class="row">
                          <div class="col-xs-6">
                            <button type="reset" class="btn-xs btn-default-clearAll btn-block form-control">Clear All</button>
                          </div>

                          <div class="col-xs-6">
                            <input type="submit" class="hvr-bounce-to-bottom btn-xs btn-submit-gs btn-block form-control">
                          </div><!--End Form Group-->

                        </div><!--End row-->
                      </div><!-- End form group-->
                    </form><!--END FORM-->
                </div><!--End Modal Body-->
              </div>
            </div>
          </div>

          <script>
            $(function(){
              $("confirmPassword").keyup(function(){
                var password = $("password").val();
                  $("#checkPasswordMatch").hmtl(password == $(this).val ()? "password match" : "password not match");
              });
            });
          </script>