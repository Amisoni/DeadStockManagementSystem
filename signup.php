<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title> Deadstock Managment System</title>
        <meta http-equiv="X-UA-Compatible" content=="IE=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="libs/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="assets/fonts/line-awesome/css/line-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="assets/fonts/open-sans/styles.css">
        <link rel="stylesheet" type="text/css" href="libs/tether/css/tether.min.css">
        <link rel="stylesheet" type="text/css" href="assets/styles/common.min.css">
        <link rel="stylesheet" type="text/css" href="assets/styles/pages/auth.min.css">
    </head>
    <body>
        <div class="ks-page">
            <div class="ks-page-header">
                <a href="#" class="ks-logo">Dead Stock Managment System</a>
            </div>
            <div class="ks-page-content">
                <!--<div style="margin-top: 40px;"><h2>Deadstock Managment System </h2></div>-->
                <div class="card panel panel-default ks-light ks-panel ks-signup">
                    <div class="card-block">
                        <form class="form-container" name="fregister" action="controller/registration_coontroller.php"  method="post" onsubmit="return validateForm();" enctype="multipart/form-data">
                            <h3 class="ks-header"><center>Sign Up</center></h3>
                            <div class="form-group" style="height: 25px;">
                                <label>Profile Image</label>
                                <button class="btn btn-primary ks-btn-file">
                                    <span class="la la-cloud-upload ks-icon"></span>
                                    <span class="ks-text">Choose file</span>
                                    <input type="file"
                                           data-validation="mime size required"
                                           data-validation-allowing="jpg, png"
                                           data-validation-max-size="300kb"
                                           data-validation-error-msg-required="No image selected" name="flUserPhoto" id="flUserPhoto"/>
                                </button>
                            </div>
                            <div class="form-group row" style="height: 25px;">
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <input type="text" class="form-control" placeholder="First name" name="InputFName" id="InputFName" required>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <input type="text" class="form-control" placeholder="Middle name" name="InputMName" id="InputMName" required>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <input type="text" class="form-control" placeholder="Last name" name="InputLName" id="InputLName" required>
                                </div>
                            </div>
                            <div class="form-group"style="height: 25px;" >
                                <div class="input-icon icon-left icon-lg icon-color-primary">
                                    <input type="text" class="form-control" placeholder="Phone" name ="txtNo" required>
                                    <label class="error" for="txtNo" id="mobileno_error" style="display: none"> Enter valid Mobile Number</label>
                                    <span class="icon-addon">
                                        <span class="la la-phone"></span>
                                    </span>
                                </div>
                            </div>
                            <div class="form-group" style="height: 25px;">
                                <div class="input-icon icon-left icon-lg icon-color-primary">
                                    <input type="email" class="form-control" placeholder="Email" name="InputEmail" id="InputEmail" aria-describedby="emailHelp" data-validation="email" required>
                                    <small class="form-text text-muted">We'll never share your email with anyone else.</small>
                                    <label class="error" for="InputEmail" id="email_error" style="display: none">E-mail is required.</label>
                                    <span class="icon-addon">
                                        <span class="la la-at"></span>
                                    </span>
                                </div>
                            </div>
                            <div class="form-group" style="height: 25px;">
                                <div class="input-icon icon-left icon-lg icon-color-primary">
                                    <input type="password" class="form-control" placeholder="Password" name="txtPassword" id="txtPassword"  data-validation="strength"
                                           data-validation-strength="2" required>
                                    <span class="icon-addon">
                                        <span class="la la-key"></span>
                                    </span>
                                    <label class="error" for="txtPassword" id="password_error" style="display: none">Password is required.</label> 
                                </div>
                            </div>
                            <div class="form-group row" style="height: 5px;">
                                <label class="col-sm-2 form-control-label p-t-0">Gender</label>
                                <div class="col-sm-10">
                                    <label class="custom-control custom-radio">
                                        <input id="radio1"  type="radio" class="custom-control-input" name="optradio" value="F">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description">Female</span>
                                    </label>
                                    <label class="custom-control custom-radio">
                                        <input id="radio1"  type="radio" class="custom-control-input" name="optradio" value="M">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description">Male</span>
                                    </label>
                                    <label class="error" for="optradio" id="gender_error" style="display: none">Select Gender.</label>
                                </div>
                            </div>
                            <div class="form-group" style="height: 25px;">
                                <div class="input-icon icon-left icon-lg icon-color-primary">
                                    <input type="date" class="form-control" placeholder="Birth Date" name="date" id="date">
                                    <label class="error" for="date" id="date_error" style="display: none">date is required.</label>
                                    <span class="icon-addon">
                                        <span class="la la-calendar-minus-o"></span>
                                    </span>
                                </div>
                            </div>
                            <div class="form-group" style="height: 25px;">
                                <div class="input-icon icon-left icon-lg icon-color-primary">
                                    <input type="text" class="form-control" placeholder="Address Line One" name="txtAdd" required>
                                    <span class="icon-addon">
                                        <span class="ks-icon la la-envelope-o"></span>
                                    </span>
                                </div>
                            </div>
                            <div class="form-group" style="height: 25px;">
                                <div class="input-icon icon-left icon-lg icon-color-primary">
                                    <input type="text" class="form-control" placeholder="Address Line Two" name="txtAdd2">
                                    <span class="icon-addon">
                                        <span class="ks-icon la la-envelope-o"></span>
                                    </span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <!--<label>Select Your Type</label>-->
                                <div class="col-sm-7">
                                    <!--<div class="input-group">-->
                                    <div class="input-group-btn">
                                        <!--<button type="button" class="btn btn-secondary-outline ks-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">-->
                                        <!--Select Type-->

                                        <!--<div class="dropdown-menu" name="type" value="type" id="type">-->
                                        <select  class="btn btn-secondary-outline ks-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" name="type" value="type" id="type" required> 
                                            <option value = '0'>----Select Type----</option>  
                                            <?php
                                            include './include/connection.php';
                                            $query = "select * from user_type";
                                            $result = mysqli_query($conn, $query);
                                            if ($result) {
                                                while ($show = mysqli_fetch_array($result)) {
                                                    echo "<option value='" . $show['no'] . "'> $show[type]</option>";
                                                }
                                            }
                                            ?>
                                        </select>
                                        <label class="error" for="type" id="type_error" style="display: none">Select User Type</label>
                                        <!--</div>-->
                                        <!--</button>-->
                                    </div>
                                </div>
                                <!--</div>-->
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <button type="reset" class="btn btn-primary-outline ks-light">Reset</button>
                            </div>
                        </form>
                        <form action="login.php">
                        <lable> Already Register</lable> <button type="submit" class="btn btn-primary">SignIn</button>
                        </form>
                        <script>
                            function validateForm() {
                                var flag = true;

                                if ($("#date").val() === '') {
                                    $("#date_error").show();
                                    flag = false;
                                }

                                if ($("#InputEmail").val() === '') {
                                    $("#email_error").show();
                                    flag = false;
                                }
                                if ($("#txtPassword").val() === '') {
                                    $("#password_error").show();
                                    flag = false;
                                }
                                if (!$("input[name=optradio]").is(":checked")) {
                                    $("#gender_error").show();
                                    flag = false;
                                }
                                if ($("#txtNo").val().length !== 10) {
                                    $("#mobileno_error").show();
                                    flag = false;
                                }
                                alert($("#type").val());
                                if ($("#type").val() === '0') {
                                    $("#type_error").show();
                                    flag = false;
                                }

                                return flag;

                            }
                        </script>
                    </div>
                </div>
            </div>
        </div>
        <script src="/libs/jquery/jquery.min.js"></script>
        <script src="libs/tether/js/tether.min.js"></script>
        <script src="libs/bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>
