<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient List - BC Health COVID-19</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/bootstrap.css">

    <link rel="stylesheet" href="../assets/iconly/bold.css">

    <link rel="stylesheet" href="../assets/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="../assets/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="../assets/app.css">
    <link rel="shortcut icon" href="../assets/images/favicon.svg" type="image/x-icon">
</head>

<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <div class="d-flex justify-content-between">
                        <div class="logo">
                            <a href="nurse_main.html"><img src="../medical.png" alt="Logo" srcset=""></a>
                        </div>
                        <div class="toggler">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">
                        <li class="sidebar-title">Menu</li>

                        <li class="sidebar-item ">
                            <a href="nurse_main.html" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li class="sidebar-item  ">
                            <a href="appointment_summary.html" class='sidebar-link'>
                                <i class="bi bi-stack"></i>
                                <span>Upcoming Appointments</span>
                            </a>
                        </li>
                        <li class="sidebar-item  ">
                            <a href="application-gallery.html" class='sidebar-link'>
                                <i class="bi bi-pen-fill"></i>
                                <span>Job Signup</span>
                            </a>
                        </li>

                        <li class="sidebar-item">
                            <a href="vaccination_centres.php" class='sidebar-link'>
                                <i class="bi bi-hexagon-fill"></i>
                                <span>Vaccination Centres</span>
                            </a>
                        </li>

                        <li class="sidebar-item  ">
                            <a href="testing_centres.php" class='sidebar-link'>
                                <i class="bi bi-egg-fill"></i>
                                <span>Testing Centres</span>
                            </a>
                        </li>


                        <li class="sidebar-title">Records</li>
                        
                        <li class="sidebar-item  active">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-file-earmark-medical-fill"></i>
                                <span>Patient List</span>
                            </a>
                        </li>
                        <li class="sidebar-item  ">
                            <a href="n_vaccine_inventory.html" class='sidebar-link'>
                                <i class="bi bi-collection-fill"></i>
                                <span>Vaccine Inventory</span>
                            </a>
                        </li>
                        <li class="sidebar-item  ">
                            <a href="n_testingkit_inventory.html" class='sidebar-link'>
                                <i class="bi bi-collection-fill"></i>
                                <span>Testing Kit Inventory</span>
                            </a>
                        </li>
                        <li class="sidebar-title"> </li>
                        
                        <li class="sidebar-item  ">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-person-badge-fill"></i>
                                <span>Logout</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>
        <div id="main">
		   <div class="page-heading">
			 <div class="page-title">
                <div class="row">
                    <div class="col-12 col-md-6 order-md-1 order-last">
                        <h3>Patient List</h3>
                    </div>
                    <div class="col-12 col-md-6 order-md-2 order-first">
                        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="nurse_main.html">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Patients</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
		  <br>
		  <section id="input-group-buttons">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Find a Patient</h4>
							 <p> Look up a patient with their name <span style="font-weight:bold;"> OR </span> personal health number </p>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        
                                        <div class="row">
                                            <div class="col-md-6 mb-1">
                                                <div class="input-group mb-3">
									   		<span class="input-group-text" id="basic-addon1"><i
                                                            class="bi bi-search"></i></span>
                                                    	<input type="text" class="form-control"
                                                        	placeholder="Name"
                                                       	aria-label="Recipient's username"
                                                        	aria-describedby="button-addon2">
                                                    	<button class="btn btn-outline-secondary" type="button"
                                                        id="button-addon2">Search</button>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-1">
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text" id="basic-addon1"><i
                                                            class="bi bi-search"></i></span>
                                                    <input type="text" class="form-control"
                                                        placeholder="Personal Health Number"
                                                        aria-label="Recipient's username"
                                                        aria-describedby="button-addon2">
                                                    <button class="btn btn-outline-secondary" type="button"
                                                        id="button-addon2">Search</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
			 <section id="multiple-column-form">
			<div class="row match-height">
			    <div class="col-12">
				   <div class="card">
					  <div class="card-content">
						 <div class="card-body">
							<form class="form">
							    <table class="table table-striped" id="table1">
								    <tr>
									   <th>PHN</th>
									   <th>Name</th>
									   <th>Age</th>
									   <th>Manage Records</th>
								    </tr>
								    <?php
								   include '../connect.php';
                                   	$conn = OpenCon();
								   $sql = "SELECT * FROM Patient";
								   $result = $conn->query($sql);
								   if ($result->num_rows > 0) {
								   // output data of each row
								   while($row = $result->fetch_assoc()) {
                                        echo "<tr><td class='border-class'>".$row["phn"].
                                   	"</td><td class='border-class'>".$row["name"].
                                   	"</td><td class='border-class'>".$row["age"].
                                   	"</td></tr>";
								   }
								   echo "</table>";
								   } else {
								   echo "0 results";
								   }
								   CloseCon($conn);
								    ?>
								</tbody>
							 </table>
							</form>
						 </div>
					  </div>
				   </div>
			    </div>
			</div>
				   
			    </div>
			</div>

		 </section>
    </div>
</body>
</html>