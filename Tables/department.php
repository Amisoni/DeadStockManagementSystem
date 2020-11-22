<?Php
include '../include/header.php';
include '../include/sidebar.php';
?>
<div class="ks-column ks-page">
    <div class="ks-page-header">
        <section class="ks-title">
            <h3>Department</h3>
        </section>
    </div>

    <div class="ks-page-content">
        <div class="ks-page-content-body ks-content-nav">
            <!--            <div class="ks-nav">
                        </div>-->
            <div class="ks-nav-body">
                <div class="ks-nav-body-wrapper">
                    <div class="container-fluid">
                        <table id="ks-datatable" class="table table-striped table-bordered" width="100%">
                            <thead> 
                                <tr>
                                    <th>Department Id</th>
                                    <th>Department Name</th>
                                </tr>
                            </thead>

                            <?php
                            include '../include/connection.php';

                            $query = "select * from department";

                            $result = mysqli_query($conn, $query);
                            if ($result) {
                                while ($row = mysqli_fetch_array($result)) {
                                    echo "<tr><td>$row[dept_id]</td>"
                                    . "<td>$row[dept_name]</td>";
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
