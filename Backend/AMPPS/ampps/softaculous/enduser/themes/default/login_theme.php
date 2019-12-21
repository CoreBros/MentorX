<?php

//////////////////////////////////////////////////////////////
//===========================================================
// login_theme.php
//===========================================================
// SOFTACULOUS 
// Version : 1.1
// Inspired by the DESIRE to be the BEST OF ALL
// ----------------------------------------------------------
// Started by: Alons
// Date:       10th Jan 2009
// Time:       21:00 hrs
// Site:       http://www.softaculous.com/ (SOFTACULOUS)
// ----------------------------------------------------------
// Please Read the Terms of use at http://www.softaculous.com
// ----------------------------------------------------------
//===========================================================
// (c)Softaculous Inc.
//===========================================================
//////////////////////////////////////////////////////////////

if(!defined('SOFTACULOUS')){

	die('Hacking Attempt');

}


function login_theme(){

global $user, $globals, $l, $theme, $softpanel, $iscripts, $catwise, $error;
global $insid, $backed, $software, $soft;

$current_user = $softpanel->getCurrentUser();

	login_header($l['<title>']);

	echo '
	<div class="container" style="opacity:1;">
		<div class="row col-md-offset-2 col-md-8 login-error">
			<div class="alert alert-danger" role="alert">
				<strong>
					<font size="3">'.$l['following_errors_occured'].'</font>	
				</strong>
				<font color="black" size="3">
					<ul type="square">';
					login_error();
					echo'
					</ul>
				</font>
			</div>
		</div>
	  	<div class="row-fluid">
	  		<div class="col-sm-offset-2 col-md-offset-4 col-sm-8 col-md-4 col-xs-12 login-form">
	  			<div class="row-fluid">
	  				<div class="col-sm-12 logo-login-form">
	  					<img class="img-responsive center-block"
	  					'.($globals['softpanel'] == 'ampps' ? 'src="'.$theme['a_images'].'loginlogo.gif"' : (empty($globals['logo_url']) ? ' src="'.$theme['images'].'webuzo.png"' : ' src="'.$theme['images'].'cust_panel.gif"')).' alt="Panel Logo">
	  				</div>
	  			</div>
	  			<div class="row-fluid">
	  				<div class="col-sm-12">
	  					<form accept-charset="'.$globals['charset'].'" action="" method="post" name="loginform">
							<div class="form-group">
							    <input type="text" name="username" autofocus="on" class="form-control" '.($globals['softpanel'] == 'ampps' || (!empty($globals['webuzo_disable_username'])) ? 'value="'.POSTval('username', $current_user).'" readonly': 'value="'.POSTval('username', '').'"'  ).' id="username" placeholder="'.$l['log_user'].'">
							</div>
							<div class="form-group">
							    <input type="password" name="password" class="form-control" id="password" placeholder="'.$l['log_pass'].'">
							</div>
	  						<div class="form-group">
								<button type="submit" name="login" value="'.$l['sub_but'].'" class="btn btn-default primary sub" >'.$l['sub_but'].'</button>    
					        </div>
						</form>
	  				</div>
	  			</div>
	  			<div>
	  				<div class="col-sm-12">
	  					<span class="fpass-link "'.(webuzo() ? "pull-left" : "text-center" ).'">
	  						<a href="index.php?act=login&sa=fpass">'.$l['forgot_pass'].'</a>	
	  					</span>';

	  					if(webuzo()) {
	  						echo '
	  						<span class="fpass-link pull-right">
		  						<a href="index.php?act=login&sa=fuser">'.$l['forgotuser'].'</a>	
		  					</span>';
	  					}

	  				echo '
	  				</div>
	  			</div>
	  		</div>
	  	</div>
	</div>';

	login_footer();
	
}

// Forgot Password theme
function fpass_theme(){
	
global $user, $globals, $l, $theme, $softpanel, $iscripts, $catwise, $error;
global $insid, $backed, $software, $soft, $done, $show;
	
	login_header($l['<title>']);

	echo '
	<div class="container" style="opacity:1;">
		<div class="row col-md-offset-2 col-md-8 login-error">
			<div class="alert alert-danger" role="alert">
				<strong>
					<font size="3">'.$l['following_errors_occured'].'</font>	
				</strong>
				<font color="black" size="3">
					<ul type="square">';
					login_error();
					echo'
					</ul>
				</font>
			</div>
		</div>';
		if(!empty($done)){
			echo '
			<div class="row-fluid">
		  		<div class="col-sm-offset-3 col-xs-12 col-sm-6 fpass-success">
		  			<div class="alert alert-fpass" role="alert">
		  				<div class="alert-note">
		  					Note
		  				</div>
		  				<div class="note-message">
		  					'.$l['mail_done'].'
		  				</div>
		  			</div>
		  			<div>
		  				<div class="col-sm-12 text-center">
		  					<span class="login-link">
		  						<a href="index.php?act=login"><strong><</strong>&nbsp;&nbsp;'.$l['back_to_login'].'</a>	
		  					</span>
		  				</div>
		  			</div>
		  		</div>
		  	</div>';
		}else{
			echo '
			<div class="row-fluid">
		  		<div class="col-sm-offset-2 col-md-offset-4 col-sm-8 col-md-4 col-xs-12 login-form">
		  			<div class="row-fluid">
		  				<div class="col-sm-12 logo-login-form">
		  					<img class="img-responsive center-block"
	  					'.($globals['softpanel'] == 'ampps' ? 'src="'.$theme['a_images'].'loginlogo.gif"' : (empty($globals['logo_url']) ? ' src="'.$theme['images'].'webuzo.png"' : ' src="'.$theme['images'].'cust_panel.gif"')).' alt="Panel Logo">		  				
	  					</div>
		  			</div>
		  			<div class="row-fluid">
		  				<div class="col-sm-12">
		  					<form accept-charset="'.$globals['charset'].'" action="" method="post" name="loginform">
								<div class="form-group">
								    <input type="email" name="email" autofocus="on" class="form-control" value="'.POSTval('email', '').'"  id="email" placeholder="'.$l['enteremail'].'">
								</div>
		  						<div class="form-group">
									<button type="submit" name="submitemail" value="'.$l['sub_email'].'" class="btn btn-default primary sub" >'.$l['sub_email'].'</button>    
						        </div>
							</form>
		  				</div>
		  			</div>
		  		</div>
		  	</div>';
		}

	echo '
	</div>';

	login_footer();
	
}

function fuser_theme(){
	
global $user, $globals, $l, $theme, $softpanel, $iscripts, $catwise, $error;
global $insid, $backed, $software, $soft, $done, $show;

	login_header($l['<title>']);

	echo '
	<div class="container" style="opacity:1;">
		<div class="row col-md-offset-2 col-md-8 login-error">
			<div class="alert alert-danger" role="alert">
				<strong>
					<font size="3">'.$l['following_errors_occured'].'</font>	
				</strong>
				<font color="black" size="3">
					<ul type="square">';
					login_error();
					echo'
					</ul>
				</font>
			</div>
		</div>';
		if(!empty($done)){
			echo '
			<div class="row-fluid">
		  		<div class="col-sm-offset-3 col-xs-12 col-sm-6 fpass-success">
		  			<div class="alert alert-fpass" role="alert">
		  				<div class="alert-note">
		  					Note
		  				</div>
		  				<div class="note-message">
		  					'.$l['fuser_mail_done'].'
		  				</div>
		  			</div>
		  			<div>
		  				<div class="col-sm-12 text-center">
		  					<span class="login-link">
		  						<a href="index.php?act=login"><strong><</strong>&nbsp;&nbsp;'.$l['back_to_login'].'</a>	
		  					</span>
		  				</div>
		  			</div>
		  		</div>
		  	</div>';
		}else{
			echo '
			<div class="row-fluid">
		  		<div class="col-sm-offset-2 col-md-offset-4 col-sm-8 col-md-4 col-xs-12 login-form">
		  			<div class="row-fluid">
		  				<div class="col-sm-12 logo-login-form">
		  					<img class="img-responsive center-block"
	  					'.($globals['softpanel'] == 'ampps' ? 'src="'.$theme['a_images'].'loginlogo.gif"' : (empty($globals['logo_url']) ? ' src="'.$theme['images'].'webuzo.png"' : ' src="'.$theme['images'].'cust_panel.gif"')).' alt="Panel Logo">		  				
	  					</div>
		  			</div>
		  			<div class="row-fluid">
		  				<div class="col-sm-12">
		  					<form accept-charset="'.$globals['charset'].'" action="" method="post" name="loginform">
								<div class="form-group">
								    <input type="email" name="email" autofocus="on" class="form-control" value="'.POSTval('email', '').'"  id="email" placeholder="'.$l['enteremail'].'">
								</div>
		  						<div class="form-group">
									<button type="submit" name="submitemailuser" value="'.$l['sub_email'].'" class="btn btn-default primary sub" >'.$l['sub_email'].'</button>    
						        </div>
							</form>
		  				</div>
		  			</div>
		  		</div>
		  	</div>';
		}

	echo '
	</div>';

	login_footer();

}

//Reset password
function resetpass_theme(){
	
	global $user, $globals, $l, $theme, $softpanel, $iscripts, $catwise, $error;
    global $insid, $backed, $software, $soft, $done, $show;

	login_header($l['<title>']);

	echo '
	<div class="container" style="opacity:1;">
		<div class="row col-md-offset-2 col-md-8 login-error">
			<div class="alert alert-danger" role="alert">
				<strong>
					<font size="3">'.$l['following_errors_occured'].'</font>	
				</strong>
				<font color="black" size="3">
					<ul type="square">';
					login_error();
					echo'
					</ul>
				</font>
			</div>
		</div>';
		if(!empty($done)){
			echo '
			<div class="row-fluid">
		  		<div class="col-sm-offset-3 col-xs-12 col-sm-6 fpass-success">
		  			<div class="alert alert-fpass" role="alert">
		  				<div class="alert-note">
		  					Note
		  				</div>
		  				<div class="note-message">
		  					'.$l['passchanged'].'
		  				</div>
		  			</div>
		  			<div>
		  				<div class="col-sm-12 text-center">
		  					<span class="login-link">
		  						<a href="index.php?act=login"><strong><</strong>&nbsp;&nbsp;'.$l['back_to_login'].'</a>	
		  					</span>
		  				</div>
		  			</div>
		  		</div>
		  	</div>';
		}else{
			echo '
			<div class="row-fluid">
		  		<div class="col-sm-offset-2 col-md-offset-4 col-sm-8 col-md-4 col-xs-12 login-form">
		  			<div class="row-fluid">
		  				<div class="col-sm-12 logo-login-form">
		  					<img class="img-responsive center-block"
	  					'.($globals['softpanel'] == 'ampps' ? 'src="'.$theme['a_images'].'loginlogo.gif"' : (empty($globals['logo_url']) ? ' src="'.$theme['images'].'webuzo.png"' : ' src="'.$theme['images'].'cust_panel.gif"')).' alt="Panel Logo">		  				
	  					</div>
		  			</div>
		  			<div class="row-fluid">
		  				<div class="col-sm-12">
		  					<form accept-charset="'.$globals['charset'].'" action="" method="post" name="loginform">
								<div class="form-group">
								    <input type="password" name="newpass" autofocus="on" class="form-control" value=""  id="newpass" placeholder="'.$l['log_new_pass'].'">
								</div>
								<div class="form-group">
								    <input type="password" name="reppass" class="form-control" value="" placeholder="'.$l['log_reppass'].'">
								</div>
		  						<div class="form-group">
									<button type="submit" name="changepass" value="'.$l['changepass'].'" class="btn btn-default primary sub" >'.$l['changepass'].'</button>    
						        </div>
							</form>
		  				</div>
		  			</div>
		  		</div>
		  	</div>';
		}

	echo '
	</div>';

	login_footer();

}

function login_header($title){
	
	global $user, $globals, $l, $theme, $softpanel, $iscripts, $catwise, $error;
    global $insid, $backed, $software, $soft, $done, $show;

    echo'
    <!DOCTYPE html>
	<html>
		<head>
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<meta http-equiv="Content-Type" content="text/html; charset='.$globals['charset'].'" />
			<meta name="keywords" content="softaculous, software, Webuzo" />
			<link rel="shortcut icon" href="'.$theme['a_images'].'favicon.ico" />
			<title>'.$title.'</title>
			<link rel="stylesheet" type="text/css" href="'.$theme['url'].'/bootstrap/css/bootstrap.min.css" />
			<link rel="stylesheet" type="text/css" href="'.$theme['url'].'/css/login.css" />
		</head>
		<body>
			<div class="trail">
				<canvas id="world"></canvas>
			</div>';
}

function login_footer(){
	
	global $user, $globals, $l, $theme, $softpanel, $iscripts, $catwise, $error;
    global $insid, $backed, $software, $soft, $done, $show;

    echo'
    		<script src="'.$theme['url'].'/js/trail.js"></script>
		</body>
	</html>';
}

function login_error(){

	global $user, $globals, $l, $theme, $softpanel, $iscripts, $catwise, $error;
    global $insid, $backed, $software, $soft, $done, $show;

    if (!empty($error)) {
    	foreach ($error as $value) {
    		echo "<li>".$value."</li>";
    	}
    	//show the error div
    	echo "<script>document.getElementsByClassName('login-error')[0].style.visibility='visible'</script>";
    }	
}

?>