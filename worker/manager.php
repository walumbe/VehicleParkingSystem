<?php
include('library.php');
$title=$_GET['title'];
switch ($title) {
    case 'town':
        $data= getTown();
        break;
    case 'street':
        $data= getStreet();
        break;
    default:
        $title="street";
        $data= getStreet();
        break;
}
  ?>
<!doctype html>
<html class="no-js" lang="en">
<head>
    <title><?=$title;?></title>
    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="stylesheet" href="../vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="../vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="../vendors/selectFX/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
</head>
<body>
    <!-- Left Panel -->
    <?php include_once('sidebar.php');?>
    <div id="right-panel" class="right-panel">
        <!-- Header-->
        <?php include_once('header.php');?>
        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1><?=$title;?></h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Dashboard</a></li>
                            <li><a href="#"><?=$title;?></a></li>
                            <li class="active"> <?=$title;?></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title"><?=$title;?></strong>
                            </div>
                            <div class="card-body">
<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <?php
            foreach ($data[0] as $key => $value) {
                ?><th><?= $key; ?></th><?php
                }
                ?>
            <th>Action</th>
        </tr>
    </thead>
    <?php
    $cnt = 1;
    foreach ($data as $row) {
        
    } {
        ?>
        <tr>
            <td><?= $cnt; ?></td>
            <?php
            foreach ($row as $value) {
                ?><td><?= $value; ?></td><?php
            }
            ?>
            <td ><a href="view-<?=$title;?>-detail.php?upid=<?=$row[$title.'_id']; ?>">Update</a>
        </tr>
        <?php
        $cnt = $cnt + 1;
    }
    ?>
</table>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- .animated -->
        </div><!-- .content -->

    </div><!-- /#right-panel -->
    <!-- Right Panel -->

    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <script src="../vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../assets/js/main.js"></script>
</body>
</html>
