<?php
include '../include/header.php';
include '../include/sidebar.php';
?>

<div class="ks-column ks-page">
    <div class="ks-page-header">
        <section class="ks-title">
            <!--<hs3>Tabs</h3>-->
        </section>
    </div>

    <div class="ks-page-content">
        <div class="ks-page-content-body ks-tabs-page-container">
            <div class="ks-tabs-container-description">
                <h3>USER TYPE</h3>
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
                                                        <th>User Type Id</th>
                                                        <th>User Type Name</th>
                                                    </tr>
                                                </thead>
                                                <?php
                                                include '../include/connection.php';

                                                $query = "select * from user_type";

                                                $result = mysqli_query($conn, $query);
                                                if ($result) {
                                                    while ($row = mysqli_fetch_array($result)) {
                                                        echo "<tr><td>$row[no]</td>"
                                                        . "<td>$row[type]</td>";
                                                    }
                                                }
                                                ?>
                                        </table>
                                    </div>
                                    <div class="tab-pane" id="tab5" role="tabpanel">
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
</div>
