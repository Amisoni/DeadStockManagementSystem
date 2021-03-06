<?Php
include '../include/header.php';
include '../include/sidebar.php';
?>
<div class="ks-column ks-page">
    <div class="ks-page-header">
        <section class="ks-title">
            <h3>Add Usertype Form</h3>
        </section>
    </div>
    <div class="ks-page-content">
        <div class="ks-page-content-body">
            <div class="ks-nav-body-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-10 ks-panels-column-section">
                            <div class="card">
                                <div class="card-block">
                                    <h5 class="card-title"></h5>
                                    <form action="../controller/usertype_controller.php" method="post">
                                        <div class="form-group row">
                                            <label for="default-input" class="col-sm-2 form-control-label">Usertype</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="default-input" placeholder="Add Usertype" name="type">
                                            </div>
                                        </div>
                                        <center><button type="submit" class="btn btn-primary">Submit</button></center>
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
            <h3>User Type Table</h3>
        </section>
    </div>

    <div class="ks-page-content">
        <div class="ks-page-content-body tables-page">
            <div class="ks-nav-body-wrapper">
                <div class="container-fluid ks-rows-section">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-lg-10">
                                    <div class="card panel panel-default panel-table">
                                        <div class="card-block demo-table-scrollable ks-scrollable">
                                            <table class="table table-bordered table-striped">
                                                <tr>
                                                    <th>User Type Id</th>
                                                    <th>User Type Name</th>
                                                    <!--<th>Update</th>-->
                                                    <!--<th>Delete</th>--> 
                                                </tr>
                                                <?php
                                                include '../include/connection.php';

                                                $query = "select * from user_type";

                                                $result = mysqli_query($conn, $query);
                                                if ($result) {
                                                    while ($row = mysqli_fetch_array($result)) {
                                                        echo "<tr><td>$row[no]</td>"
                                                        . "<td>$row[type]</td>";
                                                        //   . "<td> <i class='fa fa-pencil' onclick='updaterow($row[cat_id])' value='update'/> </td>"
                                                        // . "<td> <i class='glyphicon glyphicon-trash' onclick='deleterow($row[cat_id])' value='delete'/> </td></tr>";
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

