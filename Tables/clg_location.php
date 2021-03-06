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
<div class="ks-column ks-page">
    <div class="ks-page-header">
        <section class="ks-title">
            <!--<hs3>Tabs</h3>-->
        </section>
    </div>

    <div class="ks-page-content">
        <div class="ks-page-content-body ks-tabs-page-container">
            <div class="ks-tabs-container-description">
                <h3>Locations</h3>
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
                                    <div class="tab-pane" id="tab5" role="tabpanel">
                                        <form action="../controller/barcode.php" method="post">
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
                                                <label for="default-input" class="col-sm-2 form-control-label">Item Name </label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="item_name" name="item_name" placeholder="Enter Item Name" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="default-input" class="col-sm-2 form-control-label">Select Your Location</label>
                                                <div class="col-sm-10">
                                                    <div class="input-group">
                                                        <div class="input-group-btn">
                                                            <select  class="btn btn-secondary-outline ks-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" name="loc_type" id="loc_type"> 
                                                                <option value = '0'>----Select location----</option>  
                                                                <?php
                                                                include '../include/connection.php';
                                                                $query = "select * from room";
                                                                $result = mysqli_query($conn, $query);
                                                                if ($result) {
                                                                    while ($show = mysqli_fetch_array($result)) {
                                                                        echo "<option value='" . $show['room_id'] . "'> $show[room_name]</option>";
                                                                    }
                                                                }
                                                                ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="default-input" class="col-sm-2 form-control-label">Enter Dead stock Number</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="dsn" name="dsn" placeholder="Enter Dead stock Number" required>
                                                    <!--<input type="submit"  class="btn btn-primary" name="generate_barcode" value="GENERATE">-->
                                                </div>
                                            </div>
                                            <center>  <button type="submit" class="btn btn-primary">Submit</button></center>
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
