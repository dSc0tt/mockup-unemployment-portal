<?php
//User registration form for unemployment portal
include("appProcessRegister.php");
//include('db.php');
?>
<?php
//Admin login for unemployment portal
?>
<html>
    <head>
    <style>
        #main {
                height:500px;
        }
    </style>
        <title>Bootstrap</title>
        <!-- CSS only -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    </head>
    <body>
        <!-- Adds a navbar-->
        <?php include('guestNavbar.php');?>
        <p class="jumbotron" style="font-size:40px; background-color:#ffe5ea; text-align:center; color:black;">Register As New Applicant</p>    
        <div class="container">
        <div class="row" id="main">
            <div class="col-md-1"></div>
            <div class="col-md-10">
            <form method="POST">
            <div class="input-group">
                <div class="form-group">
                    <label for="fName">First Name</label>
                    <input type="text" class="form-control col-md-10" id="fName" name="firstname" placeholder="Enter First Name" value="<?php echo $fname ; ?>">
                    <div class="invalid-feedback">
                        Please provide a valid city.
                    </div>
                </div>
                <div class="form-group">
                    <label for="lName">Last Name</label>
                    <input type="text" class="form-control col-md-10" id="f\lName" name="lastname" placeholder="Enter LastName" value="<?php echo $lname ; ?>">
                </div>
                <div class="form-group">
                    <label for="Username">Username</label>
                    <input type="text" class="form-control col-md-10" id="Username" name="username" placeholder="johndoe123" value="<?php echo $uname ; ?>">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control col-md-10" id="email" name="email" placeholder="janedoe@email.org" value="<?php echo $email ; ?>">
                </div>
                <div class="form-group col-md-3">
                    <label for="Gender">Select a Gender</label>
                    <select class="form-control col-md-12" id="Gender" name="gender">
                        <option value="null">Select A Gender</option>
                        <option value="F">Female</option>
                        <option value="M">Male</option>
                        <option value="O">Non-Binary</option>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="DOB">D.O.B</label>
                    <div class="input-group">
                        <input type="text" class="form-control col-md-2" id="DOBM" maxlength="2" name="Month" placeholder="MM">
                        <input type="text" class="form-control col-md-2" id="DOBD" maxlength="2" name="Day" placeholder="DD">
                        <input type="text" class="form-control col-md-2" id="DOBY" maxlength="4" name="Year" placeholder="YYYY">
                    </div>
                </div>
            </div>
            <div class="input-group">
                <div class="form-group">
                    <label for="Address">Address</label>
                    <input type="text" class="form-control col-md-10" id="Address" name="address" placeholder="123 Sesame St" value="<?php echo $address ; ?>">
                </div>
                <div class="form-group">
                    <label for="City">City</label>
                    <input type="text" class="form-control col-md-10" id="City" name="city" placeholder="Marlowe" value="<?php echo $city ; ?>">
                </div>
                <div class="form-group">
                    <label for="zip">Zip Code</label>
                    <input type="text" class="form-control  col-md-6" id="zip" name="zipcode" placeholder="30987" value="<?php echo $zip ; ?>">
                </div>
                <div class="form-group">
                <label for="Gender">Select a State</label>
                <?php
                    $query = "SELECT * from states";
                    $results= mysqli_query($conn,$query);
                    $row= mysqli_fetch_assoc($results);
                ?>
                    <select class="form-control col-md-6" id="State" name="states" value="<?php echo $states ; ?>">
                        <option value="null">Select A State</option>
                        <?php while($row = mysqli_fetch_assoc($results))
                        {
                        ?>
                        <option value="<?php echo $row['id']; ?>"> <?php echo $row['name']; ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>
            <!--<div class="input-group">-->
                <div class="form-group">
                    <label for="SSN">Social Security Number</label>
                    <div class="col-md-6">
                        <div class="input-group">
                            <input type="password" class="form-control" id="SSN1" maxlength="3" name="SSN1" placeholder="SSN">
                            <input type="password" class="form-control" id="SSN2" maxlength="2" name="SSN2" placeholder="SSN">
                            <input type="password" class="form-control" id="SSN3" maxlength="4" name="SSN3" placeholder="SSN">
                        </div>
                    </div>
                </div>
            <!--</div>-->
            <button type="submit" class="btn btn-primary" style=" background-color: #809fff; color:white;" name="submit">Register</button>   
            <br><p>Already filed a claim? <a href="userLogin.php">Log in here</a> to check its status or file an appeal.</br></p>
            </div>
        </div>
        <div class="col-md-1"></div>
        </div>
        <br>
        <br>
        <br>
        <div class="jumbotron footer" style="margin-bottom:0; background-color:#ffe5ea;text-align:center">
            <p style="text-align: Center"><center>©BdpaUnemploymentInc.</center></p>
            <p style="text-align: Center"><center>Hours of Operation: 24/7 Monday-Sunday</center></p>
            <p style="text-align: Center"><center>Phone Number: 1-240-XXX-XXXX</center></p>
        </div>
    </body>
</html>