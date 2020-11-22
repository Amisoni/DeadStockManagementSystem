<?Php
include '../include/header.php';
//include '../include/sidebar.php';
?>
<!--<script>
    function generate(dsn)
    {
        alert(dsn)
        window.location.href = "../demoo.php?dsn=" + dsn;
    }
</script>-->

<div class="ks-column ks-page">
    <div class="ks-page-header">
        <section class="ks-title">
            <h3>Barcode</h3>
        </section>
    </div>
   
    <div class="ks-page-content">
        <div class="ks-page-content-body ks-content-nav">
            <div class="ks-nav-body">
                <div class="ks-nav-body-wrapper">
                    <div class="container-fluid">
                        <table id="ks-datatable" class="table table-striped table-bordered" width="100%">
                            <thead> 
                                <tr>
                                    <th>Id</th>
                                    <th>Category</th>
                                    <th>Item Name</th>
                                    <th>Location</th>
                                    <th>Dead stock Number</th>
                                    <!--<th>Generate Barcode</th>-->
                                </tr>
                            </thead>
                            <?php
                            include '../include/connection.php';

                            $query = "select barcode.*,category.*,room.* from barcode left join category  on category.cat_id=barcode.category left join room on room.room_id=barcode.location";

                            $result = mysqli_query($conn, $query);
                            if ($result) {
                                while ($row = mysqli_fetch_array($result)) {
                                    echo "<tr><td>$row[id]</td>"
                                    . "<td> $row[cat_name]</td>"
                                    . "<td> $row[item]</td>"
                                    . "<td> $row[room_name]</td>"
                                    . "<td> $row[dsn]</td></tr>";
//                                    . "<tr><td> <i class='la la-barcode' onclick='../demo.php' value='Generate'> </i> </td> </tr>";
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
