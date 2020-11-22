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
                                    <div class="tab-pane" id="tab5" role="tabpanel">
                                        <form action="../controller/order_controller.php" method="post">
                                            <div class="form-group row">
                                                <label for="default-input" class="col-sm-2 form-control-label">Item Name</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="i_name" id="i_name" placeholder="Add Item Name">
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
                                                    <input type="number" class="form-control" name="qty" id="qty" placeholder="Add Quantity">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="default-input" class="col-sm-2 form-control-label">Add Price Per Unit</label>
                                                <div class="col-sm-10">
                                                    <input type="number" class="form-control" name="price_p_unit" id="price_p_unit" placeholder="Add Price Per Unit">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="default-input" class="col-sm-2 form-control-label">Total Price</label>
                                                <div class="col-sm-10">
                                                    <input type="number" class="form-control"  name="total_price" id="total_price" placeholder="Total Price">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="default-input" class="col-sm-2 form-control-label">Specification</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="specification" id="specification" placeholder=" Add Specification">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="default-input" class="col-sm-2 form-control-label">Manufecturer</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="manufecturer" id="manufecturer" placeholder=" Add Manufecturer Name">
                                                </div>
                                            </div>
                                            <center> <button type="submit" class="btn btn-primary">Submit</button> </center>
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
