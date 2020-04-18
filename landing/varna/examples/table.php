<!--


 The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.  -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Varna</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/css/light-bootstrap-dashboard.css?v=2.0.0 " rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="../assets/css/demo.css" rel="stylesheet" />
</head>

<body>
    <div class="wrapper">
        <div class="sidebar" data-image="../assets/img/sidebar-5.jpg">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

        Tip 2: you can also add an image using data-image tag
    -->
            <div class="sidebar-wrapper">
                <div class="logo">
                <a href="http://localhost/covid19/landing/index.html" class="simple-text">
                        <img src="../assets/img/VarnaLogo.JPG"
                    style="float: middle;
                        position: relative;
                        display: block;
                        margin-left: auto;
                        margin-right: auto;
                        z-index: 1;"
                    height="100"
                    width="100"
                    />
                    </a>
                </div>
                <ul class="nav">
                    <li>
                        <a class="nav-link" href="dashboard.html">
                            <i class="nc-icon nc-chart-pie-35"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="./user.html">
                            <i class="nc-icon nc-circle-09"></i>
                            <p>User Profile</p>
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="./table.html">
                            <i class="nc-icon nc-notes"></i>
                            <p>List</p>
                        </a>
                    </li>
                    
                    <li>
                        <a class="nav-link" href="./notifications.html">
                            <i class="nc-icon nc-bell-55"></i>
                            <p>Notifications</p>
                        </a>
                    </li>
                    <li class="nav-item active active-pro">
                        <a class="nav-link active" href="upgrade.html">
                            <i class="nc-icon nc-alien-33"></i>
                            <p>Hospitals near me</p>
                        </a>
                        <a class="nav-link active" href="upgrade.html">
                            <i class="nc-icon nc-alien-33"></i>
                            <p>shelters near me</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg " color-on-scroll="500">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#pablo"> Table List </a>
                    <button href="" class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <ul class="nav navbar-nav mr-auto">
                            <li class="nav-item">
                                <a href="#" class="nav-link" data-toggle="dropdown">
                                    <i class="nc-icon nc-palette"></i>
                                    <span class="d-lg-none">Dashboard</span>
                                </a>
                            </li>
                            <li class="dropdown nav-item">
                                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                                    <i class="nc-icon nc-planet"></i>
                                    <span class="notification">5</span>
                                    <span class="d-lg-none">Notification</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Spike in temperature, patient in Room#14 Bed#2</a>
                                    <a class="dropdown-item" href="#">Adam Jones en-route to shelter</a>
                                    <a class="dropdown-item" href="#">New EHR created</a>
                                    <a class="dropdown-item" href="#">Emergency care requested for Bed#42</a>
                                    <a class="dropdown-item" href="#">Spike in temperature, patient in Room#22 Bed#6</a>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nc-icon nc-zoom-split"></i>
                                    <span class="d-lg-block">&nbsp;Search</span>
                                </a>
                            </li>
                        </ul>
                        <ul class="navbar-nav ml-auto">
                            
                            <li class="nav-item">
                                <a class="nav-link" href="http://localhost/covid19/landing/index.html">
                                    <span class="no-icon">Log out</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card strpied-tabled-with-hover">
                                <div class="card-header ">
                                    <h4 class="card-title">HIGH RISK</h4>
                                    <p class="card-category">Take to hospital immediately</p>
                                </div>
                                <div class="card-body table-full-width table-responsive">
                                
                                    <table class="table table-hover table-striped">
                                        <thead>
                                            <th>Cell Phone</th>
                                            <th>Name</th>
                                            <th>Cough</th>
                                            <th>Temperature</th>
                                            <th>Sore Throat</th>
                                            <th>Shortness of Breath</th>
                                            <th>Room Number</th>
                                            <th>Bed Number</th>
                                        </thead>

                                        <?php
                                            $mysql_host = 'localhost';
                                            $mysql_user = 'root';
                                            $mysql_password = '';
                                            $mysql_databasename = 'Varna';

                                            $conn = new mysqli($mysql_host, $mysql_user, $mysql_password, $mysql_databasename);

                                            if ($conn->connect_error) {
                                                die("Connection failed: " . $conn->connect_error);
                                            }
                                            $sql = "SELECT * FROM `total_patient_details` WHERE `Risk_factor` LIKE 'High'";
                                            $result = $conn->query($sql);
                                        
                                            while($rows= $result->fetch_assoc())
                                            {
                                        ?>
                                        <tbody>
                                            <tr>
                                                <td><?php echo $rows['Cell_Phone']; ?></td>
                                                <td><?php echo $rows['Name']; ?></td>
                                                <td><?php echo $rows['Cough']; ?></td>
                                                <td><?php echo $rows['Temperature']; ?></td>
                                                <td><?php echo $rows['Sore_Throat']; ?></td>
                                                <td><?php echo $rows['Shortness_of_Breath']; ?></td>
                                                <td><?php echo $rows['Room']; ?></td>
                                                <td><?php echo $rows['Bed']; ?></td>
                                            </tr>
                                            
                                        </tbody>
                                        <?php
                                            }
                                            ?>
                                    </table>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="card strpied-tabled-with-hover">
                                <div class="card-header ">
                                    <h4 class="card-title">MEDIUM RISK</h4>
                                    <p class="card-category">Monitor temperature with wearable</p>
                                </div>
                                <div class="card-body table-full-width table-responsive">
                                
                                    <table class="table table-hover table-striped">
                                        <thead>
                                            <th>Cell Phone</th>
                                            <th>Name</th>
                                            <th>Cough</th>
					    <th>Temperature</th>
                                            <th>Sore Throat</th>
                                            <th>Shortness of Breath</th>
                                            <th>Room Number</th>
                                            <th>Bed Number</th>
                                        </thead>

                                        <?php
                                            $mysql_host = 'localhost';
                                            $mysql_user = 'root';
                                            $mysql_password = '';
                                            $mysql_databasename = 'Varna';

                                            $conn = new mysqli($mysql_host, $mysql_user, $mysql_password, $mysql_databasename);

                                            if ($conn->connect_error) {
                                                die("Connection failed: " . $conn->connect_error);
                                            }
                                            $sql = "SELECT * FROM `total_patient_details` WHERE `Risk_factor` LIKE 'mid'";
                                            $result = $conn->query($sql);
                                        
                                            while($rows= $result->fetch_assoc())
                                            {
                                        ?>
                                        <tbody>
                                            <tr>
                                                <td><?php echo $rows['Cell_Phone']; ?></td>
                                                <td><?php echo $rows['Name']; ?></td>
                                                <td><?php echo $rows['Cough']; ?></td>
						<td><?php echo $rows['Temperature']; ?></td>
                                                <td><?php echo $rows['Sore_Throat']; ?></td>
                                                <td><?php echo $rows['Shortness_of_Breath']; ?></td>
                                                <td><?php echo $rows['Room']; ?></td>
                                                <td><?php echo $rows['Bed']; ?></td>
                                            </tr>
                                            
                                        </tbody>
                                        <?php
                                            }
                                            ?>
                                    </table>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="card card-plain table-plain-bg">
                                <div class="card-header ">
                                    <h4 class="card-title">LOW RISK</h4>
                                    <p class="card-category">Cleared to enter</p>
                                </div>
                                <div class="card-body table-full-width table-responsive">
                                    <table class="table table-hover">
                                    <thead>
                                            <th>Cell Phone</th>
                                            <th>Name</th>
                                            <th>Cough</th>
                                            <th>Temperature</th>
                                            <th>Sore Throat</th>
                                            <th>Shortness of Breath</th>
                                            <th>Room Number</th>
                                            <th>Bed Number</th>
                                        </thead>

                                        <?php
                                            $mysql_host = 'localhost';
                                            $mysql_user = 'root';
                                            $mysql_password = '';
                                            $mysql_databasename = 'Varna';

                                            $conn = new mysqli($mysql_host, $mysql_user, $mysql_password, $mysql_databasename);

                                            if ($conn->connect_error) {
                                                die("Connection failed: " . $conn->connect_error);
                                            }
                                            $sql = "SELECT * FROM `total_patient_details` WHERE `Risk_factor` LIKE 'low'";
                                            $result = $conn->query($sql);
                                        
                                            while($rows= $result->fetch_assoc())
                                            {
                                        ?>
                                        <tbody>
                                            <tr>
                                                <td><?php echo $rows['Cell_Phone']; ?></td>
                                                <td><?php echo $rows['Name']; ?></td>
                                                <td><?php echo $rows['Cough']; ?></td>
                                                <td><?php echo $rows['Temperature']; ?></td>
                                                <td><?php echo $rows['Sore_Throat']; ?></td>
                                                <td><?php echo $rows['Shortness_of_Breath']; ?></td>
                                                <td><?php echo $rows['Room']; ?></td>
                                                <td><?php echo $rows['Bed']; ?></td>
                                            </tr>
                                            
                                        </tbody>
                                        <?php
                                            }
                                            ?>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer">
                <div class="container-fluid">
                    <nav>
                        <ul class="footer-menu">
                            <li>
                                <a href="#">
                                    Home
                                </a>
                            </li>
                        </ul>
                        <p class="copyright text-center">
                            ©
                            <script>
                                document.write(new Date().getFullYear())
                            </script>
                            <a href="http://www.varna.com">Varna</a>, made with love for a better world
                        </p>
                    </nav>
                </div>
            </footer>
        </div>
    </div>
    <!--   -->
    <!-- <div class="fixed-plugin">
    <div class="dropdown show-dropdown">
        <a href="#" data-toggle="dropdown">
            <i class="fa fa-cog fa-2x"> </i>
        </a>

        <ul class="dropdown-menu">
			<li class="header-title"> Sidebar Style</li>
            <li class="adjustments-line">
                <a href="javascript:void(0)" class="switch-trigger">
                    <p>Background Image</p>
                    <label class="switch">
                        <input type="checkbox" data-toggle="switch" checked="" data-on-color="primary" data-off-color="primary"><span class="toggle"></span>
                    </label>
                    <div class="clearfix"></div>
                </a>
            </li>
            <li class="adjustments-line">
                <a href="javascript:void(0)" class="switch-trigger background-color">
                    <p>Filters</p>
                    <div class="pull-right">
                        <span class="badge filter badge-black" data-color="black"></span>
                        <span class="badge filter badge-azure" data-color="azure"></span>
                        <span class="badge filter badge-green" data-color="green"></span>
                        <span class="badge filter badge-orange" data-color="orange"></span>
                        <span class="badge filter badge-red" data-color="red"></span>
                        <span class="badge filter badge-purple active" data-color="purple"></span>
                    </div>
                    <div class="clearfix"></div>
                </a>
            </li>
            <li class="header-title">Sidebar Images</li>

            <li class="active">
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="../assets/img/sidebar-1.jpg" alt="" />
                </a>
            </li>
            <li>
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="../assets/img/sidebar-3.jpg" alt="" />
                </a>
            </li>
            <li>
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="..//assets/img/sidebar-4.jpg" alt="" />
                </a>
            </li>
            <li>
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="../assets/img/sidebar-5.jpg" alt="" />
                </a>
            </li>

            

            <li class="header-title pro-title text-center">Want more components?</li>

            

            <li class="header-title" id="sharrreTitle">Thank you for sharing!</li>

            <li class="button-container">
				<button id="twitter" class="btn btn-social btn-outline btn-twitter btn-round sharrre"><i class="fa fa-twitter"></i> · 256</button>
                <button id="facebook" class="btn btn-social btn-outline btn-facebook btn-round sharrre"><i class="fa fa-facebook-square"></i> · 426</button>
            </li>
        </ul>
    </div>
</div>
 -->
</body>
<!--   Core JS Files   -->
<script src="../assets/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="../assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="../assets/js/plugins/bootstrap-switch.js"></script>
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!--  Chartist Plugin  -->
<script src="../assets/js/plugins/chartist.min.js"></script>
<!--  Notifications Plugin    -->
<script src="../assets/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Light Bootstrap Dashboard: scripts for the example pages etc -->
<script src="../assets/js/light-bootstrap-dashboard.js?v=2.0.0 " type="text/javascript"></script>
<!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->
<script src="../assets/js/demo.js"></script>

</html>
