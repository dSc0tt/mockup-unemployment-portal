<?php
//unemployment application (filing a claim) form for unemployment portal
include ("db.php");
?>
<html>
    <head>
    <style>
      #main {
            height:500px;
        }
    </style>
        <title>File a Claim</title>
        <!-- CSS only -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    </head>
    <body>
    <!-- Adds a navbar-->
    <?php include('appNavbar.php');?>
    <p class="jumbotron" style="font-size:40px; background-color: #ffe5ea; text-align:center; color:black;">File a Claim</p>
          <?php 
          include("appProcessFileClaim.php");
          ?>
          <center> <div class="col-md-2"></div>
            <div class="col-md-5">
            <form method="POST">
                <div class="form-group">
                    <h6>Your Information</h6>
                    <br>
                        <label for="Date of Employment">Last Date of Employment</label>
                        <div class="input-group">
                            <input type="text" class="form-control col-md-3" id="MM" name="Month" placeholder="MM">
                            <div class="col-sm-1"><p>/</p></div>
                            <input type="text" class="form-control col-md-3" id="DD" name="Day" placeholder="DD">
                            <div class="col-sm-1"></p>/</p></div>
                            <input type="text" class="form-control col-md-3" id="YYYY" name="Year" placeholder="YYYY">   
                        </div>
                        </div>
                        </div>
               
                <label for="Salary">Current Salary</label>
                <div class="input group">
                            <input type="text" class="form-control col-md-2" id="Current Salary" placeholder="$">
                </div>
                <br>
                <br>
            <div class="col-md-3"></div>
            <div class="col-md-5">
                <form method="POST">
                    <div class="form-group">
                        <h6>Information about Previous Employer</h6>
                        <br>
                        <label for="Name of Employer">Name</label>
                        <div class="input-group">
                            <input type="text"class="form-control" id="Name" name="peName" placeholder="Enter Name">
                            <br>
                            <br>
                            <br>
                        </div>
                        <label for="Department">Department</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="Dept." name="peDept" placeholder="Enter Dept. Name">
                        </div>
                        <br>
                        <label for="Address">Address</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="Address" name="peAddress" placeholder="Enter Address">
                        </div>
                        <br>               
                        <label for="State">Select a State</label>
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
                    <br>
                    <center><label for="Zip Code">Zip Code</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="Zip Code" name="peZipcode" placeholder="Enter Zip Code">
                    </div></center>
                    <br>
                    <label for="City">City</label>
                    <div class="input group">
                        <input type="text" class="form-control" id="City" name="peCity" placeholder="Enter City">
                    </div>
                    <br>
                    <label for="Email">Email</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="Email" name="peEmail" placeholder="Enter Email">
                    </div>
                    <br>
                    <label for="Phone Number">Phone Number</label>
                <div class="input-group">
                    <input type="text" class="form-control col-md-3" id="Phone Number1" maxlength="3" name="phoneNumber1" placeholder="###">
                    <div class="col-sm-1"><p>-</p></div>
                    <input type="text" class="form-control col-md-3" id="Phone Number2" maxlength="3" name="phoneNumber2" placeholder="###">
                    <div class="col-sm-1"><p>-</p></div>
                    <input type="text" class="form-control col-md-3" id="Phone Number3" maxlength="4" name="phoneNumber3" placeholder="####"> 
                </div>
                <br>
                <br>
                <br>
                <button type="submit" class="btn" style=" background-color:#e0e0e0;  height: 50px; width:100px;" name="submit">File Claim</button>
            </form>
        </div>
</center>
              <!--Laste date employment, employer name, dept, employer address, e state id, e zip code, e city, 
     e email, e phone #, salary-->   
          
        
                
               <!-- <div class="form-group">
                    <label for="SSN">Social Security Number</label>
                    <div class="input-group">
                        <input type="password" class="form-control col-md-2" id="SSN" name="SSN1" placeholder="###">
                        <div class="col-sm-1"><p>-</p></div>
                        <input type="password" class=" col-md-2 form-control" id="SSN" name="SSN2" placeholder="##">
                        <div class="col-sm-1"><p>-</p></div>
                        <input type="password" class=" col-md-2 form-control" id="SSN" name="SSN3" placeholder="####">
                    </div>
                </div>
                </div>
                </div>
                <div class="col-md-5"></div>
                <br>
    <div class="">          
    <button type="submit" class="btn" style=" background-color: #809fff; color:white;" name="submit">Submit</button>
                <br><p>Haven't filed a claim yet? <a href="userRegister.php">Register here</a> to file your first claim.</br> Admin user? <a href="adminLogin.php">Log in here</a> to manage pending applications.</p>
            </form>
            <br>
            <br>
    </div>
    <br>
    <br>
    <br>-->
    <!--<div class="jumbotron; col-md-5">-->
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="jumbotron footer" style="margin-bottom:0; background-color:#ffe5ea;text-align:center">
        <p style="text-align: Center"><center>©BdpaUnemploymentInc.</center></p>
        <p style="text-align: Center"><center>Hours of Operation: 24/7 Monday-Sunday</center></p>
        <p style="text-align: Center"><center>Phone Number: 1-240-XXX-XXXX</center></p>

        </div>
        </div>
        </div>
        </div>
    </body>
</html> 
    
        
   

    
  <!-- <form class="col-lg-6 offset-lg-3">
        <div class="row" >
            <label for="exampleInputDate">Last Date of Employment</label>
            <div class="col-3">
            <input type="text" class="form-control" id="InputMonth" aria-describedby="Date" placeholder="MM" name="MM">
           <div class="form-row">
            <input type="text" class="form-control" id="InputDay" aria-describedby="Date" placeholder="DD" name="DD">
            <div class="col-3">
            <input type="text" class="form-control" id="InputYear" aria-describedby="Date" placeholder="YYYY" name="YYYY">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="row" >
            <label for="exampleInputEmail1">Previous Employer Information</label>
            <div class="col-10">
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">

            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <div class="row" id="main">
            <div class="col-md-1.5"></div>
            <div class="col-md-11">
            <div class="well" style="background-color:#ccffff; border-radius:20px">
            <form action="#" method="POST">
                <table class="table" style="">
                    <tr>
                        <th>Last Date of Employment</th>
                        <td>
                            <input type="text" name="mm" value="MM" class="form-control"/>
                        </td>
                        <td>
                            <input type="text" name="dd" value="DD" class="form-control"/>
                        </td>
                        <td>
                            <input type="text" name="yy" value="YYYY" class="form-control"/>
                        </td>
                    </tr>
                    <tr>
                        <th>Previous Employer/Company Name</th>
                        <td>
                            <input type="text" name="titleBox13" value="" class="form-control"/>
                        </td>
                    </tr>
                    <tr>
                        <th>Previous Employer Department</th>
                        <td>
                            <input type="text" name ="titleBox14" value="" class="form-control"/>
                        </td>
                    </tr>
                    <tr>
                        <th>Previous Employer Address</th>
                        <td>
                            <input type="text" name ="titleBox15" value="" class="form-control"/>
                        </td>
                    </tr>
                    <tr>
                        <th>Previous Employer State ID</th>
                        <td>
                            <input type="text" name ="titleBox16" value="" class="form-control"/>
                        </td>
                    </tr>
                    <tr>
                        <th>Previous Employer City</th>
                        <td>
                            <input type="text" name ="titleBox17" value="" class="form-control"/>
                        </td>
                    </tr>
                    <tr>
                        <th>Previous Employer Email</th>
                        <td>
                            <input type="email" name ="titleBox18" value="janedoe@gmail.com" class="form-control"/>
                        </td>
                    </tr>
                    <tr>
                        <th>Previous Employer Phone</th>
                        <td>
                            <input type="textbox" name ="first3" value="XXX" class="form-control"/>
                        </td>
                        <td>
                            <input type="textbox" name ="second3" value="XXX" class="form-control"/>
                        </td>
                        <td>
                            <input type="textbox" name ="last4" value="XXXX" class="form-control"/>
                        </td>
                    </tr>
                    <tr>
                        <th>Estimation of Annual Salary of Last Employment</th>
                        <td>
                            <input type="text" name ="titleBox20" value="$" class="form-control"/>
                        </td>
                    </tr>
                    <tr>
                        <th>Your Social Security Number</th>
                        <td>
                            <input type="text" name ="ssn1" value="" class="form-control"/> 
                        </td>
                        <td>    
                            <input type="text" name ="ssn2" value="" class="form-control"/> 
                        </td>
                        <td>    
                            <input type="text" name ="ssn3" value="" class="form-control"/> 
                        </td>
                    </tr>
    
                    <tr>
                        <th colspan="2">
                            <button class="btn" style=" background-color: #809fff; color:white;" type="submit"> Submit</button> &nbsp;
                            <button class="btn btn-primary"  style=" background-color: #809fff; color:white;" type="reset"> Clear</button>
                        </th>
                        <td></td>
                    </tr>
                </table>
                </form>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
</div> -->
       
   