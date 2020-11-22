<?Php
include '../include/header.php';
include '../include/sidebar.php';
?>
<div class="ks-column ks-page">
    <div class="ks-page-header">
        <section class="ks-title">
            <h3>Items</h3>
        </section>
    </div>
    <div class="ks-page-content">
        <div class="ks-page-content-body ks-content-nav">
            <div class="ks-nav-body">
                <div class="ks-nav-body-wrapper">
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
            </div>
        </div>
    </div>
</div>
