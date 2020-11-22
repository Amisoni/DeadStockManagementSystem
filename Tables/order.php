<?Php
include '../include/header.php';
include '../include/sidebar.php';
?>
<div class="ks-column ks-page">
    <div class="ks-page-header">
        <section class="ks-title">
            <h3>Order Table</h3>
        </section>
    </div>
    <div class="ks-page-content">
        <div class="ks-page-content-body ks-content-nav">
            <div class="ks-nav-body">
                <div class="ks-nav-body-wrapper">
                    <table id="ks-datatable" class="table table-striped table-bordered" width="100%">
                        <thead>
                            <tr>
                                <th>Order Id</th>
                                <th>Item No</th>
                                <th>Item Name</th>
                                <th>Category</th> 
                                <th>Quantity</th>
                                <th>Price Per Unitas</th> 
                                <th>Total Price</th> 
                                <th>Specification</th> 
                                <th>Manufecturer</th> 
                                <th>Date</th> 
                            </tr>
                        </thead>
                        <?php
                        include '../include/connection.php';

                        $query = "select * from order";

                        $result = mysqli_query($conn, $query);
                        if ($result) {
                            while ($row = mysqli_fetch_array($result)) {
                                echo "<tr><td>$row[order_no]</td>"
                                . "<td>$row[item_no]</td>"
                                . "<td>$row[item_name]</td>"
                                . "<td>$row[category]</td>"
                                . "<td>$row[quantity]</td>"
                                . "<td>$row[price_per_unit]</td>"
                                . "<td>$row[total_price]</td>"
                                . "<td>$row[specification]</td>"
                                . "<td>$row[manufecturer]</td>"
                                . "<td>$row[date]</td>";
                            }
                        }
                        ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
