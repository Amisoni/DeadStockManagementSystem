<?Php
include '../include/header.php';
include '../include/sidebar.php';
?>
<div class="ks-column ks-page">
    <div class="ks-page-header">
        <section class="ks-title">
            <h3>Register Users</h3>
        </section>
    </div>
    <div class="ks-page-content">
        <div class="ks-page-content-body ks-content-nav">
            <div class="ks-nav-body">
                <div class="ks-nav-body-wrapper">
                    <table id="ks-datatable" class="table table-striped table-bordered" width="100%">
                        <thead>
                            <tr>
                                <th>Profile Photo</th>
                                <th>First Name</th>
                                <th>Middle Name</th>
                                <th>Last Name</th>
                                <th>Gender</th>
                                <th>Birth Date</th>
                                <th>Email</th>
                                <th>Mobile Number</th>
                                <th>Address</th>
                                <!--<th>Address Line Two</th>-->
                                <th>User Type</th>
                            </tr>
                        </thead>
                        <?php
                        include '../include/connection.php';

                        $query = "select user_type.type , registration.* from registration left join user_type on user_type.no=registration.no where reg_id!=4 and is_active=1";

                        $result = mysqli_query($conn, $query);
                        if ($result) {
                            while ($row = mysqli_fetch_array($result)) {
                                echo "<tr><td><img src=$row[profile_photo] width='70' height='70'></td>"
                                . "<td>$row[firstname]</td>"
                                . "<td>$row[middlename]</td>"
                                . "<td>$row[lastname]</td>"
                                . "<td>$row[gender]</td>"
                                . "<td>$row[birthdate]</td>"
                                . "<td>$row[email]</td>"
                                . "<td>$row[mobile_no]</td>"
//                                        . "<td>$row[add_line1]</td>"
//                                        . "<td>$row[add_line2]</td>"
                                . " <td>" . $row['add_line1'] . " " . $row['add_line2'] . "</td>"
                                . "<td>$row[type]</td>";
                            }
                        }
                        ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

