<aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
<?php
$user=$_SESSION['login'];
?>
            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button> 
                <a class="navbar-brand" href="dashboard.php">STAFF| <?php echo $user; ?></a>
                
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="welcome.php"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
<li class="menu-item-has-children dropdown">
                        <a href="add-users.php" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-building"></i>Towns</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-building"></i><a href="add-town.php">Add Town</a></li>
                            <li><i class="fa fa-user"></i><a href="manager.php?title=town">Manage Towns</a>
                            <!--/li>
                            <li><i class="fa fa-user"></i><a href="#">View Towns</a>
                            </li-->
                          
                        </ul>
                    </li>


<li class="menu-item-has-children dropdown">
                        <a href="add-users.php" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-bars"></i>Streets</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-user"></i><a href="add-street.php">Add Street</a></li>
                            <li><i class="fa fa-user"></i><a href="manager.php?title=street">Manage Streets</a>
                            <!--/li>
                            <li><i class="fa fa-user"></i><a href="#">View  Streets</a>
                            </li-->
                          
                        </ul>
                    </li>

 <li class="menu-item-has-children dropdown">
                        <a href="add-users.php" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-car"></i>Slots</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-user"></i><a href="add-slot.php">Add Slot</a></li>
                            <li><i class="fa fa-user"></i><a href="manager.php?title=slot">Manage Slots</a>
                            </li>
                            <li><i class="fa fa-user"></i><a href="../manage-oldslots.php">View  Slots</a>
                            </li>
                          
                        </ul>
                    </li>
                    
    
  <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-tasks"></i>Reports</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-file-o"></i><a href="bwdates-report-ds.php">Between Dates Report</a></li>
                           
                        </ul>
                    </li>

                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside>