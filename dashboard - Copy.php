<?php include "top-page.php";?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Zimnat Dashboard</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Set height of the grid so .sidenav can be 100% (adjust if needed) */
    .row.content {height: 1500px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height: auto;} 
    }
  </style>
</head>
<body>

<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav">
      <h4><b><?php echo $myuser ?> <i>[M121234756]</i></b></h4>
      <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="#section1">Home</a></li>
        <li><a href="#section2">Policies</a></li>
        <li><a href="#section3">Claims</a></li>
        <li><a href="#section4">Points</a></li>
		<li><a href="settings.php">Settings</a></li>
		<li><a href="logout.php">Logout</a></li>
      </ul><br>
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search ...">
        <span class="input-group-btn">
          <button class="btn btn-default" type="button">
            <span class="glyphicon glyphicon-search"></span>
          </button>
        </span>
      </div>
    </div>

    <div class="col-sm-9" id="section1">      
      <p>
	  <table class="table table-striped table-bordered table-hover" id="dataTables-example">
		<thead>
		<tr>
		<th>Policy #</th>
		<th>Product </th>
		<th>Insured Amount</th>
		<th>Description</th>
		<th></th>
		</tr>
		</thead>
		<tbody>
	  
		<tr>
		<td>CR3469</td>		
		<td>Car Full Cover</td>
		<td>$50000.00</td>
		<td>AEE-1111 Toyota Fortuner</td>
		<td><a href="#" class="btn btn-success" role="button">view</a></td>
		</tr>
		
		<tr>
		<td>FN3794</td>		
		<td>Funeral Cover</td>
		<td>$3200.00</td>
		<td>4 people covered</td>
		<td><a href="#" class="btn btn-success" role="button">view</a></td>
		</tr>
		
		<tr>
		<td>HM7789</td>		
		<td>Home Insurance</td>
		<td>$15000.00</td>
		<td>Address: 352 Mainway Meadows</td>
		<td><a href="#" class="btn btn-success" role="button">view</a></td>
		</tr>
		
		<tr>
		<td>TRI889</td>		
		<td>Travel Insurance</td>
		<td>$2000.00</td>
		<td>All travel abroad</td>
		<td><a href="#" class="btn btn-success" role="button">view</a></td>
		</tr>
		
		</tbody>
		</table>
	  </p>
      <br>
      <hr> 
      </div>
	  
    </div>
  </div>

<footer class="container-fluid">
  <p>&copy;	Zimnat</p>
</footer>

</body>
</html>
