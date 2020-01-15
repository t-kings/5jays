<!Doctype html>
	<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="images/lg.png" type="image/png">
        <title> 5jay | Admin</title>
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
                    <li> <a href="index.php" target="_blank"> Main Website </a> </li>
                    <li> <a href="orders.php" target="_blank"> New Orders </a> </li>

                </ul>
            </nav>
        </header>
			
		<section style="margin-top:10%;">
				<h1> Upload Item</h1>
			
                <hr>
                
                <p class="red" style="text-align:center;" > 
                    <?php
                        // connect to the database
                        $db = mysqli_connect('localhost', 'root', '', '5jays');
                        if(isset($_POST["psubmit"])) {
                            $tdate = date("Y-m-d h:i:sa");
                            $error7 = "";
                            $errors = array();
                            $tdr = "items images/";
                            $trf = $tdr . basename($_FILES["ppf"]["name"]);
                            $uk = 1;
                            $ift = strtolower(pathinfo($trf,PATHINFO_EXTENSION));
                            $check = getimagesize($_FILES["ppf"]["tmp_name"]);
                            $jn = mysqli_real_escape_string($db, $_POST['jn']);
                            $jd = mysqli_real_escape_string($db, $_POST['jd']);
                            $id = mysqli_real_escape_string($db, $_POST['id']);
                            $js = mysqli_real_escape_string($db, $_POST['js']);
                            $iq = mysqli_real_escape_string($db, $_POST['iq']);
                            $ra = 5;

                            $innn = mb_substr($jn, 0, 3);
                            $in = $innn ."-". date("mihYds");
                                      
                            if (empty($jn)) {
                                array_push($errors, "Username is required");
                                echo  "Enter Item Name <br />";
                            }
                            if (empty($iq)) {
                                array_push($errors, "Username is required");
                                echo  "Enter Quantity <br />";
                            }
                            if (empty($id)) {
                                array_push($errors, "Username is required");
                                echo  "Enter Item Description <br />";
                            }
                            if (empty($jd)) {
                                array_push($errors, "Password is required");
                                echo "Item Description is Needed <br />";
                            }

                            if ($js == "select")  {
                                array_push($errors, "Password is required");
                                echo  "Select Category <br />";
                            }
                                        
                            if($check !== false) {
                                echo "File is an image - " . $check["mime"] . ". <br />";
                                $uk = 1;
                                } else {
                                    echo "";
                                    $uk = 0;
                                }

                            // Check file size
                            if ($_FILES["ppf"]["size"] > 5000000) {
                                echo "Sorry, your file is too large. <br />";
                                $uk = 0;
                            }

                            // Allow certain file formats
                            if($ift != "jpg" && $ift != "png" && $ift != "jpeg" && $ift!= "gif" ) {
                                echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed. <br />";
                                $uk = 0;
                            }
                            // Check if $uploadOk is set to 0 by an error
                            if ($uk == 0) {
                                echo "Sorry, your file was not uploaded.  <br />";
                                // if everything is ok, try to upload file
                            } else {
                                if (move_uploaded_file($_FILES["ppf"]["tmp_name"], $trf)) {
                                    $jc = basename( $_FILES["ppf"]["name"]);
                                    echo "The file ". basename( $_FILES["ppf"]["name"]). " has been uploaded.  <br />";
                                } else {
                                    echo "Sorry, there was an error uploading your file.  <br />";
                                }
                            }

                                      
                            if (count($errors) == 0 && $uk == 1) {
                                $depquery = "INSERT INTO items (ItemName, ItemDescription, ItemNumber, ItemDate, Categories, Pic, Amount, ItemQty, Ratings) 
                                    VALUES('$jn', '$id', '$in', '$tdate', '$js', '$jc', '$jd', '$iq', '$ra')";
                                if ($db->query($depquery) === TRUE) {
                                    echo "Uploaded successfully <br />";
                                }
                            }
                        }

                    ?>
                </p>
				<form method="post" class="fom" name="porf" enctype="multipart/form-data">
					<input type="text" name="jn" placeholder="Item Name" recquired />
					<input type="text" name="id" placeholder="Item Description" recquired />
                    <input type="number" name="jd" placeholder="Amount" recquired /> 
                    <input type="number" name="iq" placeholder="Quantity" recquired /> 
                    <select  name="js">
                        <option value="select">Select Category</option>
                        <option value="Plates">Plates </option>
                        <option value="Bowls">Bowls</option>
                        <option value="Pots">Pots</option>
                        <option value="Pressure Cookers">Cookers</option>
                        <option value="Cutleries">Cutleries</option>
                        <option value="Laddles">Laddles</option>
                        <option value="Rollin Pins">Rollin Pins</option>
                        <option value="Cups">Cups</option>
                        <option value="Shoes">Shoes</option>
                        <option value="Bags">Bags</option>
                        <option value="others"> Others  </option>
                    </select>
                    <span>Upload image</span> <input type="file" name="ppf" accept="image/*" />
                    <button name="psubmit" type="submit" value="psubmit"> Post</button>
                </form>

        </section>

        

        <section style="margin-top:15%;" id="deal">
				<h1 style="font-size: 6vw"> Upload Deal Of the Day</h1>
			
                <hr>

                
                
                <p class="red" style="text-align:center;" > 
                    <?php
                        if(isset($_POST["psubmitt"])) {
                            $tdate = date("Y-m-d h:i:sa");
                            $error7 = "";
                            $errors = array();
                            $tdr = "items images/";
                            $trf = $tdr . basename($_FILES["ppf"]["name"]);
                            $uk = 1;
                            $ift = strtolower(pathinfo($trf,PATHINFO_EXTENSION));
                            $check = getimagesize($_FILES["ppf"]["tmp_name"]);
                            $jn = mysqli_real_escape_string($db, $_POST['jn']);
                            $jd = mysqli_real_escape_string($db, $_POST['jd']);
                            $id = mysqli_real_escape_string($db, $_POST['id']);
                            $ed = mysqli_real_escape_string($db, $_POST['ed']);
                            $js = mysqli_real_escape_string($db, $_POST['js']);
                            $iq = mysqli_real_escape_string($db, $_POST['iq']);
                            $ra = 5;
                            $ed1 = date('M', strtotime($ed));
                            $ed2 = date('d', strtotime($ed));
                            $ed3 = date('Y', strtotime($ed));
                            $edd = $ed1 . " " . $ed2 . ", " . $ed3 . " 00:00:00";

                            $innn = mb_substr($jn, 0, 3);
                            $in = $innn ."-". date("mihYds");
                                      
                            if (empty($jn)) {
                                array_push($errors, "Username is required");
                                echo  "Enter Item Name <br />";
                            }
                            if (empty($iq)) {
                                array_push($errors, "Username is required");
                                echo  "Enter Quantity <br />";
                            }
                            if (empty($id)) {
                                array_push($errors, "Username is required");
                                echo  "Enter Item Description <br />";
                            }
                            if (empty($jd)) {
                                array_push($errors, "Password is required");
                                echo "Item Description is Needed <br />";
                            }
                            if (empty($ed)) {
                                array_push($errors, "Password is required");
                                echo "Expiry Date is Needed <br />";
                            }

                            if ($js == "select")  {
                                array_push($errors, "Password is required");
                                echo  "Select Category <br />";
                            }
                                        
                            if($check !== false) {
                                echo "File is an image - " . $check["mime"] . ". <br />";
                                $uk = 1;
                                } else {
                                    echo "";
                                    $uk = 0;
                                }

                            // Check file size
                            if ($_FILES["ppf"]["size"] > 5000000) {
                                echo "Sorry, your file is too large. <br />";
                                $uk = 0;
                            }

                            // Allow certain file formats
                            if($ift != "jpg" && $ift != "png" && $ift != "jpeg" && $ift!= "gif" ) {
                                echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed. <br />";
                                $uk = 0;
                            }
                            // Check if $uploadOk is set to 0 by an error
                            if ($uk == 0) {
                                echo "Sorry, your file was not uploaded.  <br />";
                                // if everything is ok, try to upload file
                            } else {
                                if (move_uploaded_file($_FILES["ppf"]["tmp_name"], $trf)) {
                                    $jc = basename( $_FILES["ppf"]["name"]);
                                    echo "The file ". basename( $_FILES["ppf"]["name"]). " has been uploaded.  <br />";
                                } else {
                                    echo "Sorry, there was an error uploading your file.  <br />";
                                }
                            }

                                      
                            if (count($errors) == 0 && $uk == 1) {
                                $depquery = "INSERT INTO items (ItemName, ItemDescription, ItemNumber, ItemDate, Categories, Pic, Amount, ItemQty, Ratings) 
                                    VALUES('$jn', '$id', '$in', '$tdate', '$js', '$jc', '$jd', '$iq', '$ra')";
                                if ($db->query($depquery) === TRUE) {
                                    echo "Uploaded successfully <br />";
                                    

                                    $depqueryy = "INSERT INTO Deals (ItemName, ItemT, ItemDescription, ItemNumber, ItemDate, Categories, Pic, Amount, ItemQty, Ratings) 
                                    VALUES('$jn', '$edd', '$id', '$in', '$tdate', '$js', '$jc', '$jd', '$iq', '$ra')";
                                if ($db->query($depqueryy) === TRUE) {
                                    echo "Uploaded successfully <br />";
                                }
                            }
                        }

                        }

                    ?>
                </p>

                <form method="post" class="fom" name="porff" enctype="multipart/form-data" action="records.php#deal">
					<input type="text" name="jn" placeholder="Item Name" recquired />
					<input type="text" name="id" placeholder="Item Description" recquired />
                    <input type="number" name="jd" placeholder="Amount" recquired /> 
                    <input type="number" name="iq" placeholder="Quantity" recquired /> 
                    <p style="margin-bottom:0px" > Enter Expiration Date </p>
                    <input type="date" name="ed" id="mindateu" min="" placeholder="Expiry Date" recquired  style="margin-top:0px" /> 
                    <script> 
                        var today = new Date();
                        var dd = today.getDate();
                        var mm = today.getMonth()+1;
                        var yyyy = today.getFullYear();
                        if(dd<10){
                                dd='0'+dd
                            } 
                            if(mm<10){
                                mm='0'+mm
                            } 

                        today = yyyy+'-'+mm+'-'+dd;
                        document.getElementById("mindateu").setAttribute("min", today);
                    </script>
                    <select  name="js">
                        <option value="select">Select Category</option>
                        <option value="Enamel Plates">Enamel Plates </option>
                        <option value="Serving Bowls">Serving Bowls</option>
                        <option value="Pots">Pots</option>
                        <option value="Pressure Cookers">Pressure Cookers</option>
                        <option value="Cutleries">Cutleries</option>
                        <option value="Pots">Pots</option>
                        <option value="Laddles">Laddles</option>
                        <option value="Rollin Pins">Rollin Pins</option>
                        <option value="Cups">Cups</option>
                        <option value="Shoes">Shoes</option>
                        <option value="Bags">Bags</option>
                        <option value="others"> Others  </option>
                    </select>
                    <span>Upload image</span> <input type="file" name="ppf" accept="image/*" />
                    <button name="psubmitt" type="submit" value="psubmit"> Post Deal</button>
                </form>


        </section>

        <footer>
                <div class="ff">
                    Copyright  © 2019  | All RIghts Reserved
                </div>
        </footer>
            <script src="js/script.js"></script>
			
		</body>
    </html>