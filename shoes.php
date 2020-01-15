<?php   
    $db = mysqli_connect('localhost', 'root', '', '5jays');
    $queryqq = "SELECT * FROM items  WHERE Categories='Shoes' ORDER BY id DESC LIMIT 8";
    $resultrr = mysqli_query($db, $queryqq);
    $kountt = mysqli_num_rows($resultrr); 
    if ( $kountt >0) :
        while($rowww = mysqli_fetch_array($resultrr))	: ?>
            <div class="slide" id="slide-1">
                <div class="cont"> <img src="items images/<?php echo $rowww["Pic"];?>" alt="item image" /> </div>
                <div class="text">
                    <h3><?php echo $rowww["ItemName"] ;?></h3>
                    <h6><?php echo $rowww["ItemDescription"] ;?></h6>
                    <span class="cost">N <?php echo $rowww["Amount"] ;?></span>
                    <a href="javascript:void(0)" onclick="ff<?php echo $rowww['id'] ;?>()"><i class="fa fa-shopping-cart"></i></a>
                    <script>
                        function ff<?php echo $rowww['id'] ;?>(){
                             ai = ai+1;
                            document.cookie = ai+ "=<?php echo $rowww['id'];?>; path=/;";
                            var decodedCookie = decodeURIComponent(document.cookie);
                            var ca = decodedCookie.split(';');
                            var u = ca.length;
                            var v = ca[u-1];
                            var w = v.split('=');
                            var x = w[0];
                            document.getElementById("co").innerHTML = x;
                            document.getElementById("cow").innerHTML = x;
                        }
                    </script>
                </div>
            </div>
		<?php endwhile?> 
	<?php endif  ?>