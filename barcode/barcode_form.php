<?php
include '../include/header.php';
include '../include/department_sidebar.php';
?>
<html>
    <div class="ks-page-content">
        <div class="ks-page-content-body ks-tabs-page-container">
            <div class="ks-tabs-container-description">
                <h3>Generate Barcode</h3>
            </div>
            <div class="tab-content">
                <div class="tab-pane active ks-column-section" id="in-patient" role="tabpanel">
                    <div class="row">
                        <div class="col-lg-12 ks-panels-column-section">
                            <form method="post" action="barcode_controller.php">
                                <label for="default-input" class="col-sm-2 form-control-label">Enter DeadStock Number</label>
                                <!--<input type="text" name="barcode_text" required>-->
<!--                                <input type="submit" name="generate_barcode" value="GENERATE">-->
                                <select  class="btn btn-secondary-outline ks-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"  name="barcode_text" id="barcode_text"> 
                                    <option value = '0'>----Select----</option>  
                                    <?php
                                    include '../include/connection.php';
                                    $query = "select * from barcode";
                                    $result = mysqli_query($conn, $query);
                                    if ($result) {
                                        while ($show = mysqli_fetch_array($result)) {
                                            echo "<option value='" . $show['dsn'] . "'> $show[dsn]</option>";
                                        }
                                    }
                                    ?>
                                </select>
                                <input type="submit" name="generate_barcode" value="Generate">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</html>


