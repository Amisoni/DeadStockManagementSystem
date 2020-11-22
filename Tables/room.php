<?Php
include '../include/header.php';
include '../include/sidebar.php';
?>
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
                                <div class="col-lg-6">
                                    <div class="card panel panel-default panel-table">
                                        <div class="card-block demo-table-scrollable ks-scrollable">
                                            <table class="table table-bordered table-striped">
                                                <thead>    
                                                <tr>
                                                        <th>Room Id</th>
                                                        <th>Room Name</th>
                                                        <th>Room No</th>
                                                        <th>Room Type</th> 
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




