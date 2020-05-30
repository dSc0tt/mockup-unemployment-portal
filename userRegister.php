<?php
//User registration form for unemployment portal
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
    <div class="container">
            <p class="jumbotron" style="font-size:40px; background-color: #809fff; text-align:center; color:white;">Login</p>
            
        <div class="row" id="main">
            <div class="col-md-3"></div>
            <div class="col-md-6">
            <div class="well" style="background-color:#ccffff; border-radius:20px">
            <form action="#" method="POST">
                <table class="table" style="TD{font-size: 18pt;}">
                    <tr>
                        <th>First Name</th>
                        <td>
                            <input type="text" name="firstname" value="" class="form-control"/>
                        </td>
                        <th>Last Name</th>
                        <td>
                            <input type="text" name="lastname" value="" class="form-control"/>
                        </td>
                    </tr>
                    <tr>
                        <th>Email Address</th>
                        <td>
                            <input type="text" name="email" value="" placeholder='"jane@dc.gov"' class="form-control"/>
                        </td>
                        <th>Gender</th>
                        <td>
                            <select name="gender">
                                <option value="null">Select a Gender</option>
                                <option value="female">Female</option>
                                <option value="male">Male</option>
                                <option value="other">Female</option>
                                <option value="dne">Prefer Not To Say</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <th>D.O.B.</th>
                        <td>
                            <input type="text" name="month" value="" placeholder="MM" class="form-control"/>
                        </td>
                        <td>
                            <input type="text" name="day" value="" placeholder="DD" class="form-control"/>
                        </td>
                        <td>
                            <input type="text" name="year" value="" placeholder="YYYY" class="form-control"/>
                        </td>
                    </tr>
                    <br>
                    <tr>
                        <th>Street Address</th>
                        <td>
                            <input type="text" name="address" value="" placeholder='"123 Main St."'class="form-control"/>
                        </td>
                        <th>City</th>
                        <td>
                            <input type="text" name="city" value="" class="form-control"/>
                        </td>
                    </tr>
                    <tr>
                        <th>Zipcode</th>
                        <td>
                            <input type="text" name="zipcode" value="" class="form-control"/>
                        </td>
                        <th>State</th>
                        <td>
                            <select name="stateDD">
                                <option value="null">Select a State</option>
                                <option value="state1">State One</option>
                                <option value="state2">State Two</option>
                                <option value="state3">State Three</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <th>Social Security</th>
                        <td>
                            <input type="text" name="ssn1" value="" class="form-control"/>
                        </td>
                        <td>
                            <input type="text" name="ssn2" value="" class="form-control"/>
                        </td>
                        <td>
                            <input type="text" name="ssn3" value="" class="form-control"/>
                        </td>
                    </tr>
                    <tr>
                        <th colspan="2">
                            <button class="btn" style=" background-color: #809fff; color:white;" type="submit"> Register</button> &nbsp;
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
</div>
        <div class="jumbotron footer" style="margin-bottom:0; background-color: #809fff;">
        <p>This is the bottom of the page</p>
        </div>
       </div>
    </body>
</html>