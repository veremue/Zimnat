<?php 
include "tops.php";
$fullname = $_GET['fullname'];

	
?>

        <!-- Page Content -->
		 <!-- Services Section -->
    <section id="services">
        <div class="container">
		<hr/>
		<br/>
		<br/>
		<br/>
		<br/>
		
            <div class="row">
               <div class = "col-md-6 col-md-offset-3">
			   <div class = "panel panel-info">
			   <div class = "panel-body text-center">
					<span class="fa-stack fa-3x">
                        <i class="fa fa-circle fa-stack-2x text-success"></i>
                        <i class="fa fa-check fa-stack-1x fa-inverse"></i>
                    </span>
					<hr>
					<label>Refer and Earn Success</label>
					 <div class="tab-content">
					Dear <?php echo $fullname ?>. Thank you for participating in our refer and earn promotion. We appreciate your continued support. You will be contacted on how you can claim your points.
					Click <a href ="dashboard.php">here </a> to proceed. 
					</div>
					
					
					<hr>
			   
			   </div>
			   
			   </div>
			   </div>
            </div>
         
        </div>
    </section>


    <!-- jQuery -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="../bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="../bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>


    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>
     <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true
        });
    });
    </script>



</body>

</html>
