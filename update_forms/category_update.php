<?Php
include '../include/header.php';
include '../include/sidebar.php';
include '../include/connection.php';
?>

<div class="ks-column ks-page">
    <div class="ks-page-header">
        <section class="ks-title">
            <h3>Update Category </h3>
        </section>
    </div>
    <div class="ks-page-content">
        <div class="ks-page-content-body">
            <div class="ks-nav-body-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-10 ks-panels-column-section">
                            <div class="card">
                                <div class="card-block">
                                    <h5 class="card-title"></h5>
                                    <form action="../upadte_controller/category_update.php" method="post">
                                        <div class="form-group" hidden="cat_id">
                                            <?php
                                            include '../include/connection.php';
                                            $query = "SELECT * from category WHERE cat_id = " . $_GET['cat_id'];
                                            $result = mysqli_query($conn, $query);
                                            if ($result) {
                                                $row = mysqli_fetch_assoc($result);
                                                echo "<input type ='text' name='cat_id' value='$row[cat_id]' />";
                                            }
                                            ?>
                                        </div>
                                        <div class="form-group row">
                                            <label for="default-input" class="col-sm-2 form-control-label">Category </label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="cat_name" placeholder="Update Category" name="cat_name" value="<?php echo $row['cat_name']; ?>">
                                            </div>
                                        </div>
                                        <center><button type="submit" class="btn btn-primary">Update</button></center>
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