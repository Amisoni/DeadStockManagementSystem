<?php
include './include/header.php';
include './include/sidebar.php';
?>

<div class="ks-column ks-page">
    <div class="ks-page-header">
        <section class="ks-title-and-subtitle">
            <div class="ks-title-block">
                <h3 class="ks-main-title">Dashboard</h3>
            </div>
        </section>
    </div>
    <div class="ks-page-content">
        <div class="ks-page-content-body">
            <div class="ks-dashboard-tabbed-sidebar">
                <div class="ks-dashboard-tabbed-sidebar-widgets">
                    <div class="row">

                        <div class="col-lg-6 col-md-6">
                            <div class="card ks-widget-payment-simple-amount-item ks-orange">
                                <a href="Tabs/category.php"><div class="payment-simple-amount-item-icon-block">
                                        <span class="la la-th-list ks-icon"></span>
                                    </div></a>
                                <a href="Tabs/category.php">
                                    <div class="payment-simple-amount-item-body">
                                        <div class="payment-simple-amount-item-amount">
                                            <span class="ks-amount"> 
                                                <?php
                                                include './include/connection.php';
                                                $query = "select count(*) as count from category where cat_id";
                                                $result = mysqli_query($conn, $query);
                                                if ($result) {
                                                    $row = mysqli_fetch_assoc($result);
                                                    echo $row['count'];
                                                }
                                                ?>
                                            </span>
                                        </div>
                                        <div class="payment-simple-amount-item-description">
                                            Total Category
                                        </div>
                                    </div></a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="card ks-widget-payment-simple-amount-item ks-orange">
                                <a href="Tabs/department.php"><div class="payment-simple-amount-item-icon-block">
                                        <span class="la la-building ks-icon"></span>
                                    </div></a>
                                <a href="Tabs/department.php">
                                    <div class="payment-simple-amount-item-body">
                                        <div class="payment-simple-amount-item-amount">
                                            <span class="ks-amount">
                                            <!--<span class="ks-amount-icon ks-icon-circled-up-right"></span>-->
                                                <?php
                                                include './include/connection.php';
                                                $query = "select count(*) as count from department where dept_id";
                                                $result = mysqli_query($conn, $query);
                                                if ($result) {
                                                    $row = mysqli_fetch_assoc($result);
                                                    echo $row['count'];
                                                }
                                                ?>
                                            </span>
                                        </div>

                                        <div class="payment-simple-amount-item-description">
                                            Total Department 
                                            <!--<span class="ks-progress-type">(+$1.89)</span>-->
                                        </div>
                                    </div></a>
                            </div>
                        </div>
                    </div>
                        <!--                        <div class="col-lg-4 col-md-6">
                                                    <div class="card ks-widget-payment-simple-amount-item ks-orange">
                                                        <a href="Tables/registration.php"><div class="payment-simple-amount-item-icon-block">
                                                                <span class="ks-icon-user ks-icon"></span>
                                                            </div></a>
                                                        <a href="Tables/registration.php">
                                                            <div class="payment-simple-amount-item-body">
                                                                <div class="payment-simple-amount-item-amount">
                                                                    <span class="ks-amount"> <?php
                        include './include/connection.php';
                        $query = "select count(*) as count from registration where no !=1";
                        $result = mysqli_query($conn, $query);
                        if ($result) {
                            $row = mysqli_fetch_assoc($result);
                            echo $row['count'];
                        }
                        ?></span>
                                                                </div>
                                                                <div class="payment-simple-amount-item-description">
                                                                    Total Users 
                                                                </div>
                                                            </div></a>
                                                    </div>
                                                </div>
                                            </div>-->
                        <div class="row">
                            <!--                        <div class="col-lg-4 col-md-6">
                                                        <div class="card ks-widget-payment-simple-amount-item ks-orange">
                                                            <a href="Tabs/item.php"> <div class="payment-simple-amount-item-icon-block">
                                                                    <span class="la la-list ks-icon"></span>
                                                                </div></a>
                                                            <a href="Tabs/item.php">
                                                                <div class="payment-simple-amount-item-body">
                                                                    <div class="payment-simple-amount-item-amount">
                                                                        <span class="ks-amount">
                            <?php
                            include './include/connection.php';
                            $query = "select count(*) as count from item where i_no";
                            $result = mysqli_query($conn, $query);
                            if ($result) {
                                $row = mysqli_fetch_assoc($result);
                                echo $row['count'];
                            }
                            ?>
                                                                        </span>
                                                                        <span class="ks-amount-icon ks-icon-circled-up-right"></span>
                                                                    </div>
                                                                    <div class="payment-simple-amount-item-description">
                                                                        Total Items 
                                                                    </div>
                                                                </div></a>
                                                        </div>
                                                    </div>-->
                            <!--                        <div class="col-lg-4 col-md-6">
                                                        <div class="card ks-widget-payment-simple-amount-item ks-orange">
                                                            <a href="Tables/inword.php">  <div class="payment-simple-amount-item-icon-block">
                                                                    <span class="la la-cart-plus ks-icon"></span>
                                                                </div></a>
                                                            <a href="Tables/inword.php">
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
                                                                        Total Order
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>-->
                            <div class="col-lg-6 col-md-6">
                                <div class="card ks-widget-payment-simple-amount-item ks-orange">
                                    <a href="Tables/registration.php"><div class="payment-simple-amount-item-icon-block">
                                            <span class="ks-icon-user ks-icon"></span>
                                        </div></a>
                                    <a href="Tables/registration.php">
                                        <div class="payment-simple-amount-item-body">
                                            <div class="payment-simple-amount-item-amount">
                                                <span class="ks-amount"> <?php
                                                    include './include/connection.php';
                                                    $query = "select count(*) as count from registration where no !=1";
                                                    $result = mysqli_query($conn, $query);
                                                    if ($result) {
                                                        $row = mysqli_fetch_assoc($result);
                                                        echo $row['count'];
                                                    }
                                                    ?></span>
                                            </div>
                                            <div class="payment-simple-amount-item-description">
                                                Total Users 
                                            </div>
                                        </div></a>
                                </div>
                            </div>
                            <!--</div>-->
                            <div class="col-lg-6 col-md-6">
                                <div class="card ks-widget-payment-simple-amount-item ks-orange">
                                    <a href="Tabs/room.php"><div class="payment-simple-amount-item-icon-block">
                                            <span class="la la-university ks-icon"></span>
                                        </div></a>
                                    <a href="Tabs/room.php">
                                        <div class="payment-simple-amount-item-body">
                                            <div class="payment-simple-amount-item-amount">
                                                <span class="ks-amount">
                                                <!--<span class="ks-amount-icon ks-icon-circled-up-right"></span>-->
                                                    <?php
                                                    include './include/connection.php';
                                                    $query = "select count(*) as count from room where room_id";
                                                    $result = mysqli_query($conn, $query);
                                                    if ($result) {
                                                        $row = mysqli_fetch_assoc($result);
                                                        echo $row['count'];
                                                    }
                                                    ?>
                                                </span>
                                            </div>
                                            <div class="payment-simple-amount-item-description">
                                                Total Locations
                                                <!--<span class="ks-progress-type">(+$1.89)</span>-->
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!--</div>-->