<?php
$p = $_POST['p'];
$r = $_POST['r'];
$q = $_POST['q'];
$s = $_POST['s'];
$cbb = date("Y-m-d h:i:sa");
$db = mysqli_connect('localhost', 'root', '', '5jays'); 
                    $queryqq = "SELECT * FROM items  WHERE id='$p'";
                    $resultrr = mysqli_query($db, $queryqq);
                    $kountt = mysqli_num_rows($resultrr); 
                    if ( $kountt >0) :
                    $rowww = mysqli_fetch_array($resultrr) ;?>
                            <tr>
                                <td> <img src="items images/<?php echo $rowww["Pic"];?>" alt="item image" style="width:100px;" /> </td>
                                <td><?php echo $rowww["ItemName"] ;?></td>
                                <td> N <?php echo $rowww["Amount"] ;?> </td>
                                <td> 
                                    <?php 
                                    $c = $rowww["ItemName"] ;
                                    $cb = $rowww["Pic"];
                                    $query = "INSERT INTO Orders (CustormerName, CustomerPhoneNumber, CustomerEmail, OrderDate, ItemNumber, ItemStatus) 
  			                                VALUES('$r', '$s', '$q', '$cbb', '$c', '$cb')";
                                            if ($db->query($query) === TRUE) {
                                                echo "<p style='color:red'>Ordered</p>";
                                            } else {
                                                echo "Try again";
                                            } ?> </td>
                                                                        </tr>
                                                                <?php endif  ?>