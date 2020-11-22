<?Php
include '../include/header.php';
include '../include/sidebar.php';
?>
<div class="ks-column ks-page">
    <div class="ks-page-header">
        <section class="ks-title">
            <h3>Allotment Form</h3>
        </section>
    </div>
    <div class="ks-page-content">
        <div class="ks-page-content-body">
            <div class="ks-nav-body-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 ks-panels-column-section">
                            <div class="card">
                                <div class="card-block">
                                    <h5 class="card-title"></h5>
                                    <form action="../controller/allotment_controller.php" method="post">
                                        <div class="form-group row">
                                            <label for="default-input" class="col-sm-2 form-control-label">GPR Number</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="gpr" name="gpr" placeholder="Add GPR Number">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="default-input" class="col-sm-2 form-control-label">Item Name</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="i_name" name="i_name" placeholder="Add Item Name">
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
                                                <input type="text" class="form-control val1"  name="qty" id="qty" placeholder="Add Quantity">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="default-input" class="col-sm-2 form-control-label">Add Price Per Unit</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control val2"  name="price_p_unit"  id="price_p_unit" placeholder="Add Price Per Unit">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="default-input" class="col-sm-2 form-control-label">Total Price</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control val2"  name="mul"  id="mul" placeholder="Add Price Per Unit" >
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="default-input" class="col-sm-2 form-control-label">Order No</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control txt"  name="order_no" id="order_no" placeholder="Add Order Number">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="default-input" class="col-sm-2 form-control-label">Order Date</label>
                                            <div class="col-sm-10">
                                                <input type="date" class="form-control txt"  name="order_date" id="order_date" placeholder="Add Order Date">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="default-input" class="col-sm-2 form-control-label">Specification</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="specification" name="specification" placeholder=" Add Specification">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="default-input" class="col-sm-2 form-control-label"> Manufacturer </label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="manufacturer" name="manufacturer" placeholder=" Add Manufecturer Name">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="default-input" class="col-sm-2 form-control-label">Invoice Detail</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="in_detail" name="in_detail" placeholder=" Add Invoice Detail">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="default-input" class="col-sm-2 form-control-label">Attechment</label>
                                            <div class="col-sm-10">
                                                <input type="file" class="form-control" id="file" name="file" placeholder=" Add Invoice Detail">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="default-input" class="col-sm-2 form-control-label">Select Department</label>
                                            <div class="col-sm-10">
                                                <div class="input-group">
                                                    <div class="input-group-btn">
                                                        <select  class="btn btn-secondary-outline ks-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" name="dept_type" id="dept_type"> 
                                                            <option value = '0'>----Select Department----</option>  
                                                            <?php
                                                            include '../include/connection.php';
                                                            $query = "select * from department";
                                                            $result = mysqli_query($conn, $query);
                                                            if ($result) {
                                                                while ($show = mysqli_fetch_array($result)) {
                                                                    echo "<option value='" . $show['dept_id'] . "'> $show[dept_name]</option>";
                                                                }
                                                            }
                                                            ?>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <center>  <button type="submit" class="btn btn-primary">Allot</button></center>
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
<script>
$(function() {
    $("#qty, #price_p_unit").on("keydown keyup", mul);
 function mul() {
 $("#mul").val(Number($("#qty").val())  * Number($("#price_p_unit").val()));
// $("#subt").val(Number($("#num1").val()) - Number($("#num2").val()));
 }
});
</script>