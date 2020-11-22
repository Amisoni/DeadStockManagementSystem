<?Php
include '../include/header.php';
include '../include/sidebar.php';
?>
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
                                <div class="col-lg-6">
                                    <div class="card panel panel-default panel-table">
                                        <div class="card-block demo-table-scrollable ks-scrollable">
                                            <table class="table table-bordered table-striped">
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




