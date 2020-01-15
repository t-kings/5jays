<?php include('mainserver.php'); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="images/lg.png" type="image/png">
        <title> 5jay </title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/mobstyle.css">
        <link rel="stylesheet" href="css/animate.css">
        <link href="http://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet" type="text/css" />
        <link href="http://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <header>
            <nav class="main_nav">      
                
                <ul>
                    <li>
                        <span><i class="fa fa-shopping-bag"></i></span>
                        <b>5JAYS</b>
                    </li>
                    <li> <a href="index.php" target="_blank"> Main Website </a> </li>
                </ul>
            </nav>
         </header>

            <section style="margin-top:12%;margin-bottom:12%;">
				<form method="post" action="portal.php" name="kklog" class="fom">
					<span style="color:red;">
			
											<?php 
										if ($error5 ==! "" ) :?>
											<?php	echo $error5; ?>
											</br>
									<?php endif ?>
																		<?php 
										if ($error6 ==! "" ) :?>
											<?php	echo $error6; ?>
											</br>
									<?php endif ?>
																		<?php 
										if ($error7 ==! "" ) :?>
											<?php	echo $error7; ?>
											</br>
									<?php endif ?>
                                    </span>
                                    
					
                    <input type="text" placeholder="Username" name="logusername" recquired/>
					<input type="password" placeholder="Password" name="logpassword" recquired/>
					
					<button type="submit" class="btn btn-success kinput" name="login"> Login </button>
					
                </form>
            </section>


            <footer style="position:fixed;bottom:0;right:0; left:0;">
                <div class="ff">
                    Copyright  © 2019  | All RIghts Reserved
                </div>
            </footer>

            <script src="js/script.js"></script>
    </body>
</html>