<?php
include '../include/header.php';
include '../include/department_sidebar.php';
?>

<style>
    .scroll
    {
        width: 100%;
        max-height: 780px;
        overflow-x: scroll;
    }
</style>
<script>
    function updaterow(allot_id)
    {
        alert(allot_id);
        window.location.href = "../controller/accept.php?allot_id=" + allot_id;
//        window.location.href = "../controller/accept.php?allot_id=" + Accepet;
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
                <h3>Allotment</h3>
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
                                            Status
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#" data-toggle="tab" data-target="#tab5">
                                            <span class="ks-icon la la-file-text-o text-danger"></span>
                                            List
                                        </a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab4" role="tabpanel">
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
                                    <div class="tab-pane" id="tab5" role="tabpanel">
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
                                                        <th>Accept</th>
                                                    </tr>
                                                </thead>
                                                <?php
                                                include '../include/connection.php';

                                                $query = "SELECT department.*,allotment.*,category.* from allotment left join department on department.dept_id=allotment.department left join category on category.cat_id=allotment.category";

                                                $result = mysqli_query($conn, $query);
                                                if ($result) {
                                                    while ($row = mysqli_fetch_array($result)) {
                                                        echo "<tr><td>$row[allot_id]</td>"
                                                        . "<td>$row[gpr]</td>"
                                                        . "<td>$row[item_name]</td>"
                                                        . "<td>$row[cat_name]</td>"
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
                                                        . "<td>$row[status]</td>"
                                                        . " <td> <i class='la la-edit 64px' onclick='updaterow($row[allot_id])' value='approve'/> </td> </tr>";
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
    <script>
        $(function () {
            $("#qty, #price_p_unit").on("keydown keyup", mul);
            function mul() {
                $("#mul").val(Number($("#qty").val()) * Number($("#price_p_unit").val()));
    // $("#subt").val(Number($("#num1").val()) - Number($("#num2").val()));
            }
        });
    </script>
