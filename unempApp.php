<?php
//unemployment application (filing a claim) form for unemployment portal
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
        <title>DC Unemployment Portal</title>
        <!-- CSS only -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    </head>
    <body>
    <div class="">
            <p class="jumbotron" style="font-size:40px; background-color: #809fff; text-align:center; color:white;">Unemployment Claims</p>
    <form class="col-lg-6 offset-lg-3">
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
        <!--<div class="row" id="main">
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
</div> --!>
        </div>
       </div> 
    </body>
</html> 