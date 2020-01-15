<?php
$p = $_POST['p'];
     $db = mysqli_connect('localhost', 'root', '', '5jays'); 
                    $queryqq = "SELECT * FROM items WHERE id='$p'";
                    $resultrr = mysqli_query($db, $queryqq);
                    $kountt = mysqli_num_rows($resultrr); 
                    if ( $kountt >0) :
                        $rowww = mysqli_fetch_array($resultrr); ?>
                            <tr>
                                <td> <img src="items images/<?php echo $rowww["Pic"];?>" alt="item image" style="width:100px;" /> </td>
                                <td><?php echo $rowww["ItemName"] ;?></td>
                                <td> N <?php echo $rowww["Amount"] ;?> </td>
                            </tr>
                    <?php endif  ?>
