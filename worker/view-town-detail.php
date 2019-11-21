<?php
session_start();
error_reporting(0);
include('../dbconnection.php');
if (strlen($_SESSION['id']==0)) {
  header('location:logout.php');
  } else{
   if(isset($_POST['submit']))
  {
    
      $town_name=$_POST['town_name'];
      $created_by=$_POST['created_by'];
      $is_deleted=$_POST['is_deleted'];
    
   $query=mysqli_query($con, "update  town set town_name='$town_name',created_by='$created_by',is_deleted='$is_deleted' ");
    if ($query) {
echo '<script>alert("Details updated")</script>';
echo "<script>window.location.href ='manage-old-town.php'</script>";
  }
  else
    {
      $msg="Something Went Wrong. Please try again";
    }

  
} 

?>

<!doctype html>
<html class="no-js" lang="en">

<head>
    
    <title>Streets</title>
    

    <link rel="apple-touch-icon" href="apple-icon.png">
  

    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">

    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>



</head>

<body>
    <!-- Left Panel -->

    <?php include_once('sidebar.php');?>

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <?php include_once('../header.php');?>

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>View Towns</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="view-town-detail.php">Dashboard</a></li>
                            <li><a href="view-town-detail.php">View Towns</a></li>
                            <li class="active">Towns</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">


                <div class="row">
                    <div class="col-lg-6">
                       <!-- .card -->

                    </div>
                    <!--/.col-->

                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header"><strong>View</strong><small> Towns</small></div>
                           
                                <p style="font-size:16px; color:red" align="center"> 
                                  <?php 
                                    if($msg){
                                      echo $msg;
                                    }  
                                  ?> 
                                </p>
                            <div class="card-body card-block">
 <?php
$ret=mysqli_query($con,"SELECT * FROM town WHERE town_name = '$town_name' AND created_by='$created_by' AND is_deleted='$is_deleted'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>                       <table border="1" class="table table-bordered mg-b-0">
   
                                  <tr>
                                  <th>StreetID</th>
                                   <td><?php  echo $row['town_name'];?></td>
                                  </tr> 

                                  <tr>
                                <th>SlotName</th>
                                   <td><?php  echo $row['created_by'];?></td>
                                   </tr>

                                   <tr>
                                <th>is_deleted</th>
                                   <td><?php  echo $row['is_deleted'];?></td>
                                   </tr>
                                    
                  
           
<?php  
if($row['created_by']=="")
{
  echo "Not Updated Yet";
}

     ;?></td>
  </tr>
</table>
                                                    </div>
                                                    
                                                    
                                                    
                                                    
                                                </div>
                                                </table>
<table class="table mb-0">

<?php if($row['town_name']==""){ ?>


<form name="submit" method="post" enctype="multipart/form-data"> 


<tr>
<th>Town Name </th>
<td>
  <input type="text" name="town_name" id="town_name" class="form-control wd-450" >
</td>
</tr>

<tr>
<th>Created By </th>
<td>
  <input type="text" name="created_by" id="created_by" class="form-control wd-450" >
</td>
</tr>

<tr>
<th>IsDeleted </th>
<td>
  <input type="text" name="is_deleted" id="is_deleted" class="form-control wd-450" >
</td>
</tr>

 

  <tr align="center">
    <td colspan="2"><button type="submit" name="submit" class="btn btn-primary btn-sm">
      <i class="fa fa-dot-circle-o"></i> Update</button>
    </td>
  </tr>
  </form>
<?php } else { ?>
    <table border="1" class="table table-bordered mg-b-0">
  <tr>
    <th>TownName</th>
    <td><?php echo $row['TownName']; ?></td>
  </tr>

  
 <tr>
    <th></th>
    <td><?php echo $row['created_by']; ?></td>
  </tr>

<tr>
<th>is_deleted</th>
<td><?php echo $row['is_deleted']; ?>  </td></tr>
<?php } ?>
</table>


  

  

<?php } ?>

                                            </div>



                                           
                                            </div>
                                        </div><!-- .animated -->
                                    </div><!-- .content -->
                                </div><!-- /#right-panel -->
                                <!-- Right Panel -->


                            <script src="vendors/jquery/dist/jquery.min.js"></script>
                            <script src="vendors/popper.js/dist/umd/popper.min.js"></script>

                            <script src="vendors/jquery-validation/dist/jquery.validate.min.js"></script>
                            <script src="vendors/jquery-validation-unobtrusive/dist/jquery.validate.unobtrusive.min.js"></script>

                            <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
                            <script src="assets/js/main.js"></script>
</body>
</html>
<?php }  ?>
