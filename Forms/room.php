<?Php
include '../include/header.php';
include '../include/sidebar.php';
?>
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
                                    <form action="../controller/room_controller.php">
                                        <div class="form-group row">
                                            <label for="default-input" class="col-sm-2 form-control-label">Room Name</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="room_name" name="room_name" placeholder="Add Room Name">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="default-input" class="col-sm-2 form-control-label">Room Number</label>
                                            <div class="col-sm-10">
                                                <input type="number" class="form-control" id="room_no" name="room_no" placeholder="Add Room Number">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="default-input" class="col-sm-2 form-control-label">Room Type</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="room_type" name="room_type" placeholder="Add Room Type">
                                            </div>
                                        </div>
                                          <center><button type="submit" class="btn btn-primary">Submit</button>  </center>
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
<div class="ks-column ks-page">
    <div class="ks-page-header">
        <section class="ks-title">
            <h3>Room Table</h3>
        </section>
    </div>
    <div class="ks-page-content">
        <div class="ks-page-content-body tables-page">
            <div class="ks-nav-body-wrapper">
                <div class="container-fluid ks-rows-section">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card panel panel-default panel-table">
                                        <div class="card-block demo-table-scrollable ks-scrollable">
                                            <table class="table table-bordered table-striped">
                                                <tr>
                                                    <th>Room Id</th>
                                                    <th>Room Name</th>
                                                    <th>Room No</th>
                                                    <th>Room Type</th> 
                                                </tr>
                                                <?php
                                                include '../include/connection.php';

                                                $query = "select * from room";

                                                $result = mysqli_query($conn, $query);
                                                if ($result) {
                                                    while ($row = mysqli_fetch_array($result)) {
                                                        echo "<tr><td>$row[room_id]</td>"
                                                        . "<td>$row[room_name]</td>"
                                                        . "<td>$row[room_no]</td>"
                                                        . "<td>$row[room_type]</td>";
                                                    }
                                                }
                                                ?>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

