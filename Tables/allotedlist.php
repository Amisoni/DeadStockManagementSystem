<?php
include '../include/header.php';
include '../include/storekeeper_sidebar.php';
?>
<style>
    .scroll
    {
        width: 100%;
        max-height: 780px;
        overflow-x: scroll;
    }
</style>
<div class="ks-column ks-page">
    <div class="ks-page-header">
        <section class="ks-title">
            <h3>Allotment Status</h3>
        </section>
    </div>
    <div class="ks-page-content">
        <div class="ks-page-content-body ks-content-nav">
            <div class="ks-nav-body">
                <div class="ks-nav-body-wrapper">
                    <div class="scroll">
                        <table id="ks-datatable" class="table table-striped table-bordered" width="100%">
                            <thead>
                                <tr>
                                    <th>Allot Id</th>
                                    <th>GPR No</th>
                                    <th>Item Name</th>
                                    <th>Category</th> 
                                    <th>QTY</th>
                                    <th>Unit Per Price</th> 
                                    <th>Total Price</th> 
                                    <th>Order No</th> 
                                    <th>Order Date</th> 
                                    <th>Specification</th> 
                                    <th>Manufacturer</th> 
                                    <th>Invoice Detail</th> 
                                    <th>File</th> 
                                    <th>Date</th> 
                                    <th>Department</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <?php
                            include '../include/connection.php';

                            $query = "SELECT department.*,allotment.* from allotment left join department on department.dept_id=allotment.department";

                            $result = mysqli_query($conn, $query);
                            if ($result) {
                                while ($row = mysqli_fetch_array($result)) {
                                    echo "<tr><td>$row[allot_id]</td>"
                                    . "<td>$row[gpr]</td>"
                                    . "<td>$row[item_name]</td>"
                                    . "<td>$row[category]</td>"
                                    . "<td>$row[quantity]</td>"
                                    . "<td>$row[price_per_unit]</td>"
                                    . "<td>$row[total_price]</td>"
                                    . "<td>$row[order_no]</td>"
                                    . "<td>$row[order_date]</td>"
                                    . "<td>$row[specification]</td>"
                                    . "<td>$row[manufacturer]</td>"
                                    . "<td>$row[invoicedetail]</td>"
                                    . "<td><a href='$row[file]' target='_blank'>download</a></td>"
                                    . "<td>$row[date]</td>"
                                    . "<td>$row[dept_name]</td>"
                                    . "<td>$row[status]</td></tr>";
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
