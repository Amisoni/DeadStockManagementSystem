<?php
include './include/storekeeper_sidebar.php';
include './include/header.php';
?>
<div class="ks-page-content">
    <div class="ks-page-content-body">
        <div class="ks-dashboard-tabbed-sidebar">
            <div class="ks-dashboard-tabbed-sidebar-widgets">
                <div class="row">

                    <div class="col-lg-6 col-md-6">
                        <div class="card ks-widget-payment-simple-amount-item ks-orange">
                            <a href="Tabs/inward.php"><div class="payment-simple-amount-item-icon-block">
                                    <span class="la la-th-list ks-icon"></span>
                                </div></a>
                            <a href="Tabs/inward.php">
                                <div class="payment-simple-amount-item-body">
                                    <div class="payment-simple-amount-item-amount">
                                        <span class="ks-amount"> 
                                            <?php
                                            include './include/connection.php';
                                            $query = "select count(*) as count from inward where no";
                                            $result = mysqli_query($conn, $query);
                                            if ($result) {
                                                $row = mysqli_fetch_assoc($result);
                                                echo $row['count'];
                                            }
                                            ?>
                                        </span>
                                    </div>
                                    <div class="payment-simple-amount-item-description">
                                        Inward
                                    </div>
                                </div></a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="card ks-widget-payment-simple-amount-item ks-orange">
                            <a href="Tables/allotedlist.php"><div class="payment-simple-amount-item-icon-block">
                                    <span class="la la-university ks-icon"></span>
                                </div></a>
                            <a href="Tables/allotedlist.php">
                                <div class="payment-simple-amount-item-body">
                                    <div class="payment-simple-amount-item-amount">
                                        <span class="ks-amount">
                                            <?php
                                            include './include/connection.php';
                                            $query = "select count(*) as count from allotment where allot_id";
                                            $result = mysqli_query($conn, $query);
                                            if ($result) {
                                                $row = mysqli_fetch_assoc($result);
                                                echo $row['count'];
                                            }
                                            ?>
                                        </span>
                                    </div>

                                    <div class="payment-simple-amount-item-description">
                                        Allotment
                                    </div>
                                </div></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


