<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="images/lg.png" type="image/png">
        <title> 5jay | Cart </title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/mobstyle.css">
        <link rel="stylesheet" href="css/animate.css">
        <link href="http://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet" type="text/css" />
        <link href="http://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <header>
        <nav class="main_nav" id="navm">   
                <ul>
                    <li>
                        <span><i class="fa fa-shopping-bag"></i></span>
                        <b>5JAYS</b>
                    </li>

                    <li>
                        <a href="index.php">Home</a>
                    </li>

                    <li>
                        <a href="#about">About</a>
                    </li>
                    <li>
                        <a href="#terms">Terms & Conditions</a>
                    </li>
                    <li>
                        <a href="#contact">Contact Us</a>
                    </li>
                    <li class="navic">
                            <a href="demand.php" target="_blank">
                                <i class="fa fa-shopping-cart"></i> 
                                <span id="cow" style="color:red; position:absolute;transform:translate(-40%,-50%);font-size:20px;"></span>
                            </a>
                    </li>
                </ul>
            </nav>


            <nav class="main_nav" id="navmm">   
                <ul>
                    <li>
                        <span><i class="fa fa-shopping-bag"></i></span>
                        <b>5JAYS</b>
                    </li>

                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    
                    <li>
                        <a href="#about">About</a>
                    </li>
                    <li>
                        <a href="#terms">Terms & Conditions</a>
                    </li>
                    <li>
                        <a href="#contact">Contact Us</a>
                    </li>
                    <li class="navic">
                            <a href="demand.php" target="_blank">
                                <i class="fa fa-shopping-cart"></i> 
                                <span id="co" style="color:red; position:absolute;transform:translate(-40%,-50%);font-size:20px;"></span>
                            </a>
                    </li>
                </ul>
            </nav>
        </header>
        <section class="demand">
            <form name="cook">
                <input type="text" placeholder="Name" name="namec" />
                <input type="text" placeholder="Email" name="emailc" />
                <input type="tel" placeholder="Phone Number" name="phnc" />
                <a href="javascript:void(0)" onclick="order()"> Order </a>
            </form>

   

            <p id="tab2" style="color:red;font-size: 30px;"> </p>
            <table id="tab">
                
            </table>
            <table id="tab1">
                
                </table>
        </section>
        <script>
            var decodedCookie = decodeURIComponent(document.cookie);
            var ca = decodedCookie.split(';');
            var u = ca.length;
            var v = ca[u-1];
            w = v.split('=');
            var x = w[0];
            document.getElementById("co").innerHTML = x;
            document.getElementById("cow").innerHTML = x;
            function demand(){
                var i=0 ;
                while(i<u){
                    var y = ca[i];
                    var z = y.split('=');
                    var zz= z[1];
                    var hr = new XMLHttpRequest();
                    hr.onreadystatechange = function() {
                        if (this.readyState == 4 && this.status == 200) {
                            document.getElementById("tab").innerHTML += this.responseText;
                                document.getElementById("tab").style.display = "block";
                        }
                    }
                    hr.open("POST", "res.php", true);
                    hr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                    var vars ="p="+zz;
                    hr.send(vars);
                    i++;
                }
            }

        demand();

            function order(){
                var i=0 ;
                var x = document.forms["cook"]["namec"].value;
                var a = document.forms["cook"]["emailc"].value;
                var b = document.forms["cook"]["phnc"].value;
                if(x == "" || a == "" || b == ""){
                    document.getElementById("tab2").innerHTML = "Please Fill in all details";
                } else{
                    while(i<u){
                        var y = ca[i];
                        var z = y.split('=');
                        var zz= z[1];
                        var hr = new XMLHttpRequest();
                        hr.onreadystatechange = function() {
                            if (this.readyState == 4 && this.status == 200) {
                                document.getElementById("tab1").innerHTML += this.responseText;
                                document.getElementById("tab").style.display = "none";
                                document.getElementById("tab2").innerHTML = "Thank you, we shall contact you";
                            }
                        }
                        hr.open("POST", "post.php", true);
                        hr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                        var vars ="p="+zz+"&r="+x+"&q="+a+"&s="+b;
                        hr.send(vars);
                        i++;
                    }
                }
            }
        </script>


            <footer>
                <div class="fflex">
                    <div id="about">
                        <h2>About 5JAYS Multi Ventures NIG</h2>
                        <p>
                                Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.
                        </p>

                        
                        <h2 id="terms">Terms & Conditions</h2>
                        <p>
                                Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.
                        </p>
                    </div>


                    <div id="contact">
                        <h2>Contact Us</h2>
                        <ul>
                            <li><i class="fa fa-home"></i>65, Marian Road, Calabar, Cross River State.</li>
                            <li><i class="fa fa-phone"></i>0811 121 5311</li>
                            <li><i class="fa fa-envelope"></i>5jayventures@gmail.com</li>
                        </ul>
                    </div>
                </div>
                <div class="ff">
                    Copyright  © 2019  | All RIghts Reserved
                </div>
            </footer>

            <script src="js/script.js"></script>
    </body>
</html>