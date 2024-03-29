<?php
include 'library.php';
$streets = getStreet();
if (isset($_POST['submit'])) {

    $worker = $_SESSION['id'];
    $street_id = $_POST['street_id'];
    $slot_name = $_POST['slot_name'];
    $result = insertSlot($street_id, $slot_name, $worker);
    if ($result) {
        echo '<script>alert("Slot Detail has been added.")</script>';
        echo "<script>window.location.href ='add-slot.php'</script>";
    } else {
        echo '<script>alert("Something Went Wrong. Please try again.")</script>';
    }
}
?>

<!doctype html>
<html class="no-js" lang="en">

    <head>

        <title>Parking Slot Details</title>
        <?php include 'header-links.php'; ?>
    </head>
    <body>
<?php include_once('sidebar.php'); ?>

        <div id="right-panel" class="right-panel">
            <!-- Header-->
<?php include_once('../header.php'); ?>

            <div class="breadcrumbs">
                <div class="col-sm-4">
                    <div class="page-header float-left">
                        <div class="page-title">
                            <h1>Slot Detail</h1>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="page-header float-right">
                        <div class="page-title">
                            <ol class="breadcrumb text-right">
                                <li><a href="add-slots.php">Dashboard</a></li>
                                <li><a href="add-slots.php">Slot Detail</a></li>
                                <li class="active">Add</li>
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
                                <div class="card-header"><strong>Slot</strong><small> Details</small></div>
                                <form name="computer" method="post" action="">
                                    <p style="font-size:16px; color:red" align="center"> <?php
if ($msg) {
    echo $msg;
}
?> </p>
                                    <div class="card-body card-block">

                                        <div class="form-group">
                                            <label for="company" class=" form-control-label">Street ID</label>
                                            <select name="street_id" class="form-control">
                                            <?php
                                            foreach ($streets as $value) {
                                            ?>
                                            <option value="<?= $value['street_id']; ?>"><?= $value['street_name']; ?></option>
                                            <?php
                                            }
                                            ?>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="street" class=" form-control-label">Slot Name</label>
                                            <input type="text" name="slot_name" value="" id="slot_name" class="form-control" required="true"/>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-12">

                                            </div>
                                            <div class="col-12">
                                            </div>

                                            </select></div>
                                    </div>
                            </div>

                        </div>

                    </div>

                    <div class="card-footer">
                        <p style="text-align: center;"><button type="submit" class="btn btn-primary btn-sm" name="submit" id="submit">
                                <i class="fa fa-dot-circle-o"></i>  Add
                            </button></p>

                    </div>
                </div>
                </form>
            </div>
        </div>
    </div><!-- .animated -->
</div><!-- .content -->
</div><!-- /#right-panel -->
<!-- Right Panel -->
<?php include 'bottom-links.php'; ?>
</body>
</html>
