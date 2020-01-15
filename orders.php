<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="images/lg.png" type="image/png">
        <title> 5jay | Orders </title>
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
                    <li> <a href="Admin.php" target="_blank"> Register an Admin </a> </li>
                    <li> <a href="records.php" target="_blank">Back to Portal </a> </li>
                    <li> <a href="index.php" target="_blank"> Main Website </a> </li>
                    <li> <a href="orders.php" target="_blank"> New Orders </a> </li>

                </ul>
            </nav>
        </header>
        <section style="margin-top:10%">
            <?php
                $tdate = date("Y-m-d h:i:sa");
                $today1 = strtotime('-3 days',strtotime($tdate));
                $olddate = date("Y-m-d h:i:sa", $today1);
                $db = mysqli_connect('localhost', 'root', '', '5jays'); 
                $queryqq = "SELECT * FROM Orders WHERE OrderDate BETWEEN '$olddate' AND '$tdate' ";
                $resultrr = mysqli_query($db, $queryqq);
                if ( mysqli_num_rows($resultrr) >0) :
                    while($rowww = mysqli_fetch_array($resultrr))	:?>
                        <div class="order">
                            <?php 
                                echo   $rowww["ItemNumber"] ."<img src='items images/".$rowww["ItemStatus"]."' alt='pic' /> <b> ". $rowww["CustormerName"]. "</b>, <b style='color:green;'>". $rowww["CustomerPhoneNumber"]. " </b>, <i style='color:blue;'>". $rowww["CustomerEmail"]."</i>, <b style='color:red'>". $rowww["OrderDate"].  "</b>.";
                            ?>
                        </div>
                    <?php endwhile?> 
                <?php endif  ?>
        </section>

        <footer>
                <div class="ff">
                    Copyright  © 2019  | All RIghts Reserved
                </div>
        </footer>

            <script src="js/script.js"></script>
    </body>
</html>