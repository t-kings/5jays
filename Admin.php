<!Doctype html>
	<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="images/lg.png" type="image/png">
        <title> 5jay | Register Admin </title>
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
                    <li> <a href="records.php"> Back to Portal </a> </li>
                    <li> <a href="index.php"> Main Website </a> </li>
                    <li> <a href="orders.php" target="_blank">Recent Orders</a> </li>
                </ul>
            </nav>
        </header>
			
		<section style="margin-top:15%;">
				<h1>Register Admin</h1>
			
				<hr>
				<form method="post" action="Admin.php"  name="kform" class="fom">
					
					<input type="text" name="username" placeholder="Username" recquired/>
					
					<input type="password" name="password"  placeholder="Password"  recquired>
					
					<input type="password" name="confpassword"  placeholder="Confirm Password" recquired>

					<input type="password" name="Regkey" placeholder="Manager's Registration Key"  recquired>
					<div class="ksubbmit" id="ksubmit"></div>
				</form>
			
				<a class="kinput" href="javascript:void(0)" onclick="kret()">Register</a>
        </section>

        <footer>
                <div class="ff">
                    Copyright  © 2019  | All RIghts Reserved
                </div>
        </footer>
            <script src="js/script.js"></script>
			
		</body>
	</html>