    function scrolll(){
        document.getElementById("nas").scrollBy(200,0);
    }

    setInterval(scrolll, 10000);

    function scrollll(){
        document.getElementById("nass").scrollBy(200,0);
    }

    setInterval(scrollll, 9000);

    function plates() {
        document.getElementById("fetch").style.display="block";
        document.getElementById("itemhead1").style.display="block";
        document.getElementById("itemhead").innerHTML ="Plates";
        var hr = new XMLHttpRequest();
        document.getElementById("fetch").innerHTML = "<img src='gifspin.gif'  style='width: 30%;'/>";
        hr.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("fetch").innerHTML = this.responseText;
            }
        }
        hr.open("POST", "plates.php", true);
        hr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        hr.send();
    }

    function bowls() {
        document.getElementById("fetch").style.display="block";
        document.getElementById("itemhead1").style.display="block";
        document.getElementById("itemhead").innerHTML ="Serving Bowls";
        var hr = new XMLHttpRequest();
        document.getElementById("fetch").innerHTML = "<img src='gifspin.gif'  style='width: 30%;'/>";
        hr.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("fetch").innerHTML = this.responseText;
            }
        }
        hr.open("POST", "bowls.php", true);
        hr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        hr.send();
    } 
    
    
    function pots() {
        document.getElementById("fetch").style.display="block";
        document.getElementById("itemhead1").style.display="block";
        document.getElementById("itemhead").innerHTML ="Pots";
        var hr = new XMLHttpRequest();
        document.getElementById("fetch").innerHTML = "<img src='gifspin.gif'  style='width: 30%;'/>";
        hr.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("fetch").innerHTML = this.responseText;
            }
        }
        hr.open("POST", "pots.php", true);
        hr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        hr.send();
    }

    function cookers() {
        document.getElementById("fetch").style.display="block";
        document.getElementById("itemhead1").style.display="block";
        document.getElementById("itemhead").innerHTML ="Pressure Cookers";
        var hr = new XMLHttpRequest();
        document.getElementById("fetch").innerHTML = "<img src='gifspin.gif'  style='width: 30%;'/>";
        hr.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("fetch").innerHTML = this.responseText;
            }
        }
        hr.open("POST", "cookers.php", true);
        hr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        hr.send();
    }

    function cutl() {
        document.getElementById("fetch").style.display="block";
        document.getElementById("itemhead1").style.display="block";
        document.getElementById("itemhead").innerHTML ="Cuttleries";
        var hr = new XMLHttpRequest();
        document.getElementById("fetch").innerHTML = "<img src='gifspin.gif'  style='width: 30%;'/>";
        hr.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("fetch").innerHTML = this.responseText;
            }
        }
        hr.open("POST", "cutl.php", true);
        hr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        hr.send();
    } 


    
    function laddles() {
        document.getElementById("fetch").style.display="block";
        document.getElementById("itemhead1").style.display="block";
        document.getElementById("itemhead").innerHTML ="Laddles";
        var hr = new XMLHttpRequest();
        document.getElementById("fetch").innerHTML = "<img src='gifspin.gif'  style='width: 30%;'/>";
        hr.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("fetch").innerHTML = this.responseText;
            }
        }
        hr.open("POST", "laddles.php", true);
        hr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        hr.send();
    }

    function pins() {
        document.getElementById("fetch").style.display="block";
        document.getElementById("itemhead1").style.display="block";
        document.getElementById("itemhead").innerHTML ="Rolling Pins";
        var hr = new XMLHttpRequest();
        document.getElementById("fetch").innerHTML = "<img src='gifspin.gif'  style='width: 30%;'/>";
        hr.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("fetch").innerHTML = this.responseText;
            }
        }
        hr.open("POST", "pins.php", true);
        hr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        hr.send();
    } 
    
    function others() {
        document.getElementById("fetch").style.display="block";
        document.getElementById("itemhead1").style.display="block";
        document.getElementById("itemhead").innerHTML ="Uncategorised";
        var hr = new XMLHttpRequest();
        document.getElementById("fetch").innerHTML = "<img src='gifspin.gif'  style='width: 30%;'/>";
        hr.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("fetch").innerHTML = this.responseText;
            }
        }
        hr.open("POST", "others.php", true);
        hr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        hr.send();
    } 
    
    function shoes() {
        document.getElementById("fetch").style.display="block";
        document.getElementById("itemhead1").style.display="block";
        document.getElementById("itemhead").innerHTML ="Shoes";
        var hr = new XMLHttpRequest();
        document.getElementById("fetch").innerHTML = "<img src='gifspin.gif'  style='width: 30%;'/>";
        hr.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("fetch").innerHTML = this.responseText;
            }
        }
        hr.open("POST", "shoes.php", true);
        hr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        hr.send();
    }

    function cups() {
        document.getElementById("fetch").style.display="block";
        document.getElementById("itemhead1").style.display="block";
        document.getElementById("itemhead").innerHTML ="Cups";
        var hr = new XMLHttpRequest();
        document.getElementById("fetch").innerHTML = "<img src='gifspin.gif'  style='width: 30%;'/>";
        hr.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("fetch").innerHTML = this.responseText;
            }
        }
        hr.open("POST", "cups.php", true);
        hr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        hr.send();
    }

    function bags() {
        document.getElementById("fetch").style.display="block";
        document.getElementById("itemhead1").style.display="block";
        document.getElementById("itemhead").innerHTML ="Bags";
        var hr = new XMLHttpRequest();
        document.getElementById("fetch").innerHTML = "<img src='gifspin.gif'  style='width: 30%;'/>";
        hr.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("fetch").innerHTML = this.responseText;
            }
        }
        hr.open("POST", "bags.php", true);
        hr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        hr.send();
    } 


    function kret(){
        var x = document.forms["kform"]["username"].value;
        var a = document.forms["kform"]["password"].value;
        var b = document.forms["kform"]["confpassword"].value;
        var c = document.forms["kform"]["Regkey"].value;
        var errors = [];
        document.getElementById("ksubmit").style.display="block";							
        if (x == "" ) {
            errors.push("*** Username is recquired");
        }
        if (a == "" ) {
            errors.push("*** Please Input Password");
        }
        if (a !== b ) {
            errors.push("*** The Two Passwords Does Not Match");
        }
    
        if (c !== "Register5jays" ) {
            errors.push("*** Wrong Manager's Registration Key ");
        }
        
        if (errors.length == 0) {
             document.getElementById("ksubmit").innerHTML =
                "You will be creating an admin with the name <b style='color:green'>"+ x + " </b> </br> <a class='kinputt' href='javascript:void(0)' onclick='kkksubmit()'> Proceed </a> or <a class='kinputt' href='javascript:void(0)' onclick='kksubmit()'> Cancel </a>" ;
        
         }
        else { document.getElementById("ksubmit").innerHTML = "<p style='color:red'>"+  errors.join('<br>')+"<br /> <a href='javascript:void(0)' onclick='kksubmit()'> Back </a> </p>";
      
        }
    }

    function kksubmit(){
        document.getElementById("ksubmit").style.display="none";
        
    }

    function kkksubmit(){
        var x = document.forms["kform"]["username"].value;
        var a = document.forms["kform"]["password"].value;
        var hr = new XMLHttpRequest();
        hr.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("ksubmit").innerHTML = this.responseText;
            }
        }
        hr.open("POST", "kreg.php", true);
        hr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        var vars ="p="+x+"&r="+a;
        hr.send(vars);
            document.getElementById("ksubmit").innerHTML = "<p style='color:red'> processing </p> <img src='gifspin.gif' style='height: 70px; width: 70px;' />";
    }

    let l = 0;
    function load(){
        l = l+8;
            var hr = new XMLHttpRequest();
            hr.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("loadm").innerHTML += this.responseText;
                    document.getElementById("ls").style.display = "none";	
                }
            }
            hr.open("POST", "loadm.php", true);
            hr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
            var vars ="p="+l;
            hr.send(vars);
                document.getElementById("ls").style.display = "block";	
        }

        function shert(){
            if (document.getElementById("she").style.display==="none"){
            document.getElementById("she").style.display="block";
            }else{
                document.getElementById("she").style.display="none";
            }
        }
        


    
    
    

