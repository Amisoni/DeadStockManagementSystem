<?Php
include '../include/header.php';
include '../include/sidebar.php';
?>
<div class="form-group" hidden="room_id">
    <?php
    include '../include/connection.php';
    $query = "SELECT * from room WHERE room_id = " . $_GET['room_id'];
    $result = mysqli_query($conn, $query);
    if ($result) {
        $row = mysqli_fetch_assoc($result);
        echo "<input type ='text' name='room_id' value='$row[room_id]' />";
    }
    ?>
</div>
<div class="ks-column ks-page">
    <div class="ks-page-header">
        <section class="ks-title">
            <h3>Add Room Form</h3>
        </section>
    </div>
    <div class="ks-page-content">
        <div class="ks-page-content-body">
            <div class="ks-nav-body-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-8 ks-panels-column-section">
                            <div class="card">
                                <div class="card-block">
                                    <h5 class="card-title"></h5>
                                    <form action="../upadte_controller/room_update.php" method="post">
                                        <div class="form-group" hidden="room_id">
                                            <?php
                                            include '../include/connection.php';
                                            $query = "SELECT * from room WHERE room_id = " . $_GET['room_id'];
                                            $result = mysqli_query($conn, $query);
                                            if ($result) {
                                                $row = mysqli_fetch_assoc($result);
                                                echo "<input type ='text' name='room_id' value='$row[room_id]' />";
                                            }
                                            ?>
                                        </div>
                                        <div class="form-group row">
                                            <label for="default-input" class="col-sm-2 form-control-label">Room Name</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="room_name" name="room_name" placeholder="Add Room Name" value="<?php echo $row['room_name']; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="default-input" class="col-sm-2 form-control-label">Room Number</label>
                                            <div class="col-sm-10">
                                                <input type="number" class="form-control" id="room_no" name="room_no" placeholder="Add Room Number" value="<?php echo $row['room_no']; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="default-input" class="col-sm-2 form-control-label">Room Type</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="room_type" name="room_type" placeholder="Add Room Type" value="<?php echo $row['room_type']; ?>">
                                            </div>
                                        </div>
                                        <center><button type="submit" class="btn btn-primary">Update</button>  </center>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
