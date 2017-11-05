
<?php
 include "tops.php";
$email = $_GET['email'];
$qry = "SELECT * FROM  tbl_direct_debits WHERE  email = '$email'";
//echo $qry;
$resu = @mysqli_query($db,$qry);
$row = mysqli_fetch_array($resu,MYSQLI_ASSOC);
   
   $fullname = $row['fullname'];
   $bankname = $row['bank_name'];
   $accountname = $row['account_name'];
   $accountnumber = $row['account_number'];
   $branchcode = $row['branch_code'];
   $convenientdate = $row['convenient_date'];
   

?>

        <!-- Page Content -->

        <div id="page-wrapper">
        <hr>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">

                        <h4 class="page-header">Payments Details - <?php echo $fullname ;?> </h4>

                        
                        <p></p>
                        <p></p>
                        <p></p>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->


                <div class = "row">
                <div class = "col-lg-2"></div>

                <div class = "col-lg-8">
                <div class = "panel panel-success">
                <div class = "panel-heading">
                Payments Details 
                </div>
                <div class = "panel-body">
                 <?php
                    echo '<table class="table table-bordered table-hover" >
                                    <tbody>
                                        ';
                 
                    echo '<tr>
                    <th> Account Name: </th>
                    <td> '.$accountname.'</td>
                    </tr>';
                    echo '<tr>
                    <th> Bank Name: </th>
                    <td> '.$bankname.'
                    
                    </td>
                    </tr>';
                    echo '<tr>
                    <th> Account Number: </th>
                    <td> '.$accountnumber.'</td>
                    </tr>';
                    echo '<tr>
                    <th> Branch Code: </th>
                    <td> '.$branchcode.'</td>
                    </tr>';
                    echo '<tr>
                    <th> Convenient Date: </th>
                    <td> '.$convenientdate.'</td>
                    </tr>';
                    
                    echo '</tbody></table>';
  
                ?>
				
                </div>
                </div>
               
                

                </div>
                <div class = "col-lg-12">

                <hr>
                </div>
                </div>

            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->



  

</body>

</html>
