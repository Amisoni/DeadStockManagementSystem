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
            <!--<hs3>Tabs</h3>-->
        </section>
    </div>

    <div class="ks-page-content">
        <div class="ks-page-content-body ks-tabs-page-container">
            <div class="ks-tabs-container-description">
                <h3>Inward</h3>
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
                                        <div class="scroll">
                                            <table id="ks-datatable" class="table table-striped table-bordered" width="100%">
                                                <thead>
                                                    <tr>
                                                        <th>NO</th>
                                                        <th>GPR No</th>
                                                        <th>Item Name</th>
                                                        <th>Category</th> 
                                                        <th>QTY</th>
                                                        <th>Unit Per Price</th> 
                                                        <th>Total Price</th> 
                                                        <th>Order No</th> 
                                                        <th>Order Date</th> 
                                                        <th>Specification</th> 
                                                        <th>Manufecturer</th> 
                                                        <th>Invoice Detail</th> 
                                                        <th>File</th> 
                                                        <th>Date</th> 
                                                    </tr>
                                                </thead>
                                                <?php
                                                include '../include/connection.php';

                                                $query = "select category.cat_name, inward.* from inward left join category on category.cat_id=inward.category order by inward.no desc";
                                                $result = mysqli_query($conn, $query);
                                                if ($result) {
                                                    while ($row = mysqli_fetch_array($result)) {
                                                        echo"<tr><td>$row[no]</td>"
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
                                                        . "<td>$row[date]</td></tr>";
                                                    }
                                                }
                                                ?>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab5" role="tabpanel">
                                        <form action="../controller/inward_controller.php" method="post" enctype="multipart/form-data">
                                            <div class="form-group row">
                                                <label for="default-input" class="col-sm-2 form-control-label">GPR Number</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="gpr" name="gpr" placeholder="Add GPR Number" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="default-input" class="col-sm-2 form-control-label">Item Name</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="i_name" name="i_name" placeholder="Add Item Name" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="default-input" class="col-sm-2 form-control-label">Select Your Category</label>
                                                <div class="col-sm-10">
                                                    <div class="input-group">
                                                        <div class="input-group-btn">
                                                            <select  class="btn btn-secondary-outline ks-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" name="c_type" id="c_type"> 
                                                                <option value = '0'>----Select Category----</option>  
                                                                <?php
                                                                include '../include/connection.php';
                                                                $query = "select * from category";
                                                                $result = mysqli_query($conn, $query);
                                                                if ($result) {
                                                                    while ($show = mysqli_fetch_array($result)) {
                                                                        echo "<option value='" . $show['cat_id'] . "'> $show[cat_name]</option>";
                                                                    }
                                                                }
                                                                ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="default-input" class="col-sm-2 form-control-label">Add Quantity</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control val1"  name="qty" id="qty" placeholder="Add Quantity" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="default-input" class="col-sm-2 form-control-label">Add Price Per Unit</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control val2"  name="price_p_unit"  id="price_p_unit" placeholder="Add Price Per Unit" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="default-input" class="col-sm-2 form-control-label">Total Price</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control val2"  name="mul"  id="mul" placeholder="total price" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="default-input" class="col-sm-2 form-control-label">Order No</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control txt"  name="order_no" id="order_no" placeholder="Add Order Number" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="default-input" class="col-sm-2 form-control-label">Order Date</label>
                                                <div class="col-sm-10">
                                                    <input type="date" class="form-control txt"  name="order_date" id="order_date" placeholder="Add Order Date" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="default-input" class="col-sm-2 form-control-label">Specification</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="specification" name="specification" placeholder=" Add Specification" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="default-input" class="col-sm-2 form-control-label"> Manufacturer </label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="manufacturer" name="manufacturer" placeholder=" Add Manufecturer Name" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="default-input" class="col-sm-2 form-control-label">Invoice Detail</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="in_detail" name="in_detail" placeholder=" Add Invoice Detail" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="default-input" class="col-sm-2 form-control-label">Attachment of Invoice</label>
                                                <div class="col-sm-10">
                                                    <input type="file" class="form-control" id="file" name="file" placeholder=" Add Invoice Detail" required>
                                                </div> 
                                            </div>
                                            <!--                                              <div class="form-group row">
                                                                                            <label for="default-input" class="col-sm-2 form-control-label">Attechment</label>
                                                                                            <div class="col-sm-10">
                                                                                                <input type="file" class="form-control" id="file" name="file" placeholder=" Add Invoice Detail">
                                                                                            </div> 
                                                                                        </div>
                                                                                          <div class="form-group row">
                                                                                            <label for="default-input" class="col-sm-2 form-control-label">Attechment</label>
                                                                                            <div class="col-sm-10">
                                                                                                <input type="file" class="form-control" id="file" name="file" placeholder=" Add Invoice Detail">
                                                                                            </div> 
                                                                                        </div>-->
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </form>                                    </div>
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
