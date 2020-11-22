<?Php
include '../include/header.php';
include '../include/sidebar.php';
?>
<div class="ks-column ks-page">
    <div class="ks-page-header">
        <section class="ks-title">
            <h3>Item Form</h3>
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
                                    <form action="../controller/item_controller.php" method="post">
                                        <div class="form-group row">
                                            <label for="default-input" class="col-sm-2 form-control-label">Item Name </label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="item_name" name="item_name" placeholder="Add Item Name">
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
