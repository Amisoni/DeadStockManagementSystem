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
                <h3>ITEM</h3>
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
                                                    <th>Item Id</th>
                                                    <th>Item Name</th>
                                                    <th>Category</th> 
                                                </tr>
                                            </thead>
                                            <?php
                                            include '../include/connection.php';

                                            $query = "select category.cat_name, item.* from item left join category on category.cat_id=item.cat_id";

                                            $result = mysqli_query($conn, $query);
                                            if ($result) {
                                                while ($row = mysqli_fetch_array($result)) {
                                                    echo "<tr><td>$row[i_no]</td>"
                                                    . "<td>$row[i_name]</td>"
                                                    . "<td>$row[cat_name]</td>";
                                                }
                                            }
                                            ?>
                                        </table>
                                    </div>
                                    <div class="tab-pane" id="tab5" role="tabpanel">
                                        <form action="../controller/item_controller.php" method="post">
                                        <div class="form-group row">
                                            <label for="default-input" class="col-sm-2 form-control-label">Item Name </label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="dept_name" name="item_name" placeholder="Add Item Name">
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
                                        <center>  <button type="submit" class="btn btn-primary">Submit</button></center>
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
