<?php
include './include/header.php';
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
                                <!--<div class="card">-->
                                <!--<div class="card-block">-->
                                <!--<h5 class="card-title"></h5>-->
                                <form method="post" action="demoo.php">
                                    <label for="default-input" class="col-sm-2 form-control-label">Enter DeadStock Number</label>
                                    <input type="text" name="barcode_text">
                                    <input type="submit" name="generate_barcode" value="GENERATE">
                                </form>
                                <!--</div>-->
                                <!--</div>-->
                                <!--</div>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</html>


