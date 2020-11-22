<?php
include '../include/header.php';
include '../include/sidebar.php';
?>
<script>
    function updaterow(room_id)
    {
//        alert(room_id);
        window.location.href = "../update_forms/room_update.php?room_id=" + room_id;
    }
    function deleterow(room_id)
    {
//        alert(room_id);
        window.location.href = "../delete_controller/room_delete.php?room_id=" + room_id;
    }
</script>
<div class="ks-column ks-page">
    <div class="ks-page-header">
        <section class="ks-title">
            <!--<hs3>Tabs</h3>-->
        </section>
    </div>
    <div class="ks-page-content">
        <div class="ks-page-content-body ks-tabs-page-container">
            <div class="ks-tabs-container-description">
                <h3>Location</h3>
            </div>
            <div class="tab-content">
                <div class="tab-pane active ks-column-section" id="in-patient" role="tabpanel">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="ks-tabs-container ks-tabs-default ks-tabs-with-separator ks-tabs-header-default ks-tabs-primary tabs-bordered">
                                <ul class="nav ks-nav-tabs">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#" data-toggle="tab" data-target="#tab4">
                                            <span class="ks-icon la la-th text-success"></span>
                                            List
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#" data-toggle="tab" data-target="#tab5">
                                            <span class="ks-icon la la-file-text-o text-danger"></span>
                                            Add
                                        </a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab4" role="tabpanel">
                                        <table id="ks-datatable" class="table table-striped table-bordered" width="100%">
                                            <thead>    
                                                <tr>
                                                    <th> Location Id</th>
                                                    <th> Location Name</th>
                                                    <th> Location No</th>
                                                    <th> Location Type</th> 
                                                    <th>Update</th>
                                                    <th>Delete</th>
                                                </tr>
                                            </thead>
                                            <?php
                                            include '../include/connection.php';

                                            $query = "select * from room";

                                            $result = mysqli_query($conn, $query);
                                            if ($result) {
                                                while ($row = mysqli_fetch_array($result)) {
                                                    echo "<tr><td>$row[room_id]</td>"
                                                    . "<td>$row[room_name]</td>"
                                                    . "<td>$row[room_no]</td>"
                                                    . "<td>$row[room_type]</td>"
                                                    . " <td> <i class='la la-pencil' onclick='updaterow($row[room_id])' value='Update'></i> </td>"
                                                    . " <td> <i class='la la-trash' onclick='deleterow($row[room_id])' value='Delete'> </i></td> </tr>";
                                                }
                                            }
                                            ?>
                                        </table>
                                    </div>
                                    <div class="tab-pane" id="tab5" role="tabpanel">
                                        <form action="../controller/room_controller.php" method="post">
                                            <div class="form-group row">
                                                <label for="default-input" class="col-sm-2 form-control-label"> Location Name</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="room_name" name="room_name" placeholder="Add Location Name" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="default-input" class="col-sm-2 form-control-label"> Location Number</label>
                                                <div class="col-sm-10">
                                                    <input type="number" class="form-control" id="room_no" name="room_no" placeholder="Add Location Number" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="default-input" class="col-sm-2 form-control-label"> Location Type</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="room_type" name="room_type" placeholder="Add Location Type" required>
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
</div>
