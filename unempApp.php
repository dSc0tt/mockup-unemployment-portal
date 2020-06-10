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
        <title>File a Claim</title>
        <!-- CSS only -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-fixed-top">
    <a class="navbar-brand" href="#">Helping Hand</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="welcome.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="userLogin.php">Sign-In</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="userRegister.php">Make A Claim</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">View Your Claims</a>
            </li>
            </ul>
        </div>
        </nav>
   <div class="jumbotron" style="font-size:40px; background-color: #809fff; text-align:center; color:white;"><p>Unemployment Claims</p>
        </div>
     <!-- <div class="row" id="main">-->
           <div class="col-md-3"></div>
            <div class="col-md-5">
           <form method="POST">
                <div class="form-group">
                        <label for="Date of Employment">Last Date of Employment</label>
                        <div class="input-group">
                            <input type="text" class="form-control col-md-3" id="MM" name="Date1" placeholder="MM">
                            <div class="col-sm-1"><p>/</p></div>
                            <input type="text" class="form-control col-md-3" id="DD" name="Date2" placeholder="DD">
                            <div class="col-sm-1"></p>/</p></div>
                            <input type="text" class="form-control col-md-3" id="YYYY" name="Date3" placeholder="YYYY">   
                        </div>
                        </div>
                        </div>
            <div class="col-md-3"></div>
            <div class="col-md-5">
            <form method="POST">
                    <div class="form-group">
                        <h6>Information about Previous Employer</h6>
                        <label for="Name of Employer">Name</label>
                        <div class="input-group">
                            <input type="text"class="form-control" id="Name" placeholder="Enter Name">
                        <br>
                        <br>
                        <br>
                            </div>
                        <label for="Department">Department</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="Dept." placeholder="Enter Dept. Name">
                        </div>
                        <br>
                        
                        <label for="Address">Address</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="Address" placeholder="Enter Address">
                        </div>
                        <br>
                        <!--<label for="State">State</label>-->
                        <br>
                    
                       <!-- <style>
                        <select class="select-css">
                            .select-css {
                            display: block;
                            font-size: 16px;
                            font-family: sans-serif;
                            font-weight: 700;
                            color: #444;
                            line-height: 1.3;
                            padding: .6em 1.4em .5em .8em;
                            width: 100%;
                            max-width: 100%;
                            box-sizing: border-box;
                            margin: 0;
                            border: 1px solid #aaa;
                            box-shadow: 0 1px 0 1px rgba(0,0,0,.04);
                            border-radius: .5em;
                            -moz-appearance: none;
                            -webkit-appearance: none;
                            appearance: none;
                            background-color: #fff;
                            background-image: url('data:image/svg+xml;charset=US-ASCII,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%22292.4%22%20height%3D%22292.4%22%3E%3Cpath%20fill%3D%22%23007CB2%22%20d%3D%22M287%2069.4a17.6%2017.6%200%200%200-13-5.4H18.4c-5%200-9.3%201.8-12.9%205.4A17.6%2017.6%200%200%200%200%2082.2c0%205%201.8%209.3%205.4%2012.9l128%20127.9c3.6%203.6%207.8%205.4%2012.8%205.4s9.2-1.8%2012.8-5.4L287%2095c3.5-3.5%205.4-7.8%205.4-12.8%200-5-1.9-9.2-5.5-12.8z%22%2F%3E%3C%2Fsvg%3E'),
                            linear-gradient(to bottom, #ffffff 0%,#e5e5e5 100%);
                            background-repeat: no-repeat, repeat;
                            background-position: right .7em top 50%, 0 0;
                            background-size: .65em auto, 100%;
                        }
                        .select-css::-ms-expand {
                            display: none;
                        }
                        .select-css:hover {
                            border-color: #888;
                        }
                        .select-css:focus {
                            border-color: #aaa;
                            box-shadow: 0 0 1px 3px rgba(59, 153, 252, .7);
                            box-shadow: 0 0 0 3px -moz-mac-focusring;
                            color: #222;
                            outline: none;
                        }
                        .select-css option {
                            font-weight:normal;
                        }
                        </style>
                    </div>
  
                            <option>This is a native select element</option>
                            <option>Apples</option>
                            <option>Bananas</option>
                            <option>Grapes</option>
                            <option>Oranges</option>
</select>-->

                     <div class="dropdown show">
                     <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dropdown link
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                               <a class="dropdown-item" href="#">Select state:</a>
                               <!--id="State"-->
                                <a class="dropdown-item" href="#">Alabama</a>
                                <a class="dropdown-item" href="#">Alaska</a>
                                <a class="dropdown-item" href="#">American Samoa</a>
                                <a class="dropdown-item" href="#">Arizona</a>
                                <a class="dropdown-item" href="#">Arkansas</a>
                                <a class="dropdown-item" href="#">California</a>
                                <a class="dropdown-item" href="#">Colorado</a>
                                <a class="dropdown-item" href="#">Connecticut</a>
                                <a class="dropdown-item" href="#">Delaware</a>
                                <a class="dropdown-item" href="#">District of Columbia</a>
                                <a class="dropdown-item" href="#">Federated States of Micronesia</a>
                                <a class="dropdown-item" href="#">Florida</a>
                                <a class="dropdown-item" href="#">Georgia</a>
                                <a class="dropdown-item" href="#">Guam</a>
                                <a class="dropdown-item" href="#">Hawaii</a>
                                <a class="dropdown-item" href="#">Idaho</a>
                                <a class="dropdown-item" href="#">Illinois</a>
                                <a class="dropdown-item" href="#">Indiana</a>
                                <a class="dropdown-item" href="#">Iowa</a>
                                <a class="dropdown-item" href="#">Kansas</a>
                                <a class="dropdown-item" href="#">Kentucky</a>
                                <a class="dropdown-item" href="#">Louisiana</a>
                                <a class="dropdown-item" href="#">Maine</a>
                                <a class="dropdown-item" href="#">Marshall Islands</a>
                                <a class="dropdown-item" href="#">Maryland</a>
                                <a class="dropdown-item" href="#">Massachusetts</a>
                                <a class="dropdown-item" href="#">Michigan</a>
                                <a class="dropdown-item" href="#">Minnesota</a>
                                <a class="dropdown-item" href="#">Mississippi</a>
                                <a class="dropdown-item" href="#">Missouri</a>
                                <a class="dropdown-item" href="#">Montana</a>
                                <a class="dropdown-item" href="#">Nebraska</a>
                                <a class="dropdown-item" href="#">Nevada</a>
                                <a class="dropdown-item" href="#">New Hampshire</a>
                                <a class="dropdown-item" href="#">New Jersey</a>
                                <a class="dropdown-item" href="#">New Mexico</a>
                                <a class="dropdown-item" href="#">New York</a>
                                <a class="dropdown-item" href="#">North Carolina</a>
                                <a class="dropdown-item" href="#">North Dakota</a>
                                <a class="dropdown-item" href="#">Northern Mariana Islands</a>
                                <a class="dropdown-item" href="#">Ohio</a>
                                <a class="dropdown-item" href="#">Oklahoma</a>
                                <a class="dropdown-item" href="#">Oregon</a>
                                <a class="dropdown-item" href="#">Palau</a>
                                <a class="dropdown-item" href="#">Pennsylvania</a>
                                <a class="dropdown-item" href="#">Puerto Rico</a>
                                <a class="dropdown-item" href="#">Rhode Island</a>
                                <a class="dropdown-item" href="#">South Carolina</a>
                                <a class="dropdown-item" href="#">South Dakota</a>
                                <a class="dropdown-item" href="#">Tennessee</a>
                                <a class="dropdown-item" href="#">Texas</a>
                                <a class="dropdown-item" href="#">Utah</a>
                                <a class="dropdown-item" href="#">Vermont</a>
                                <a class="dropdown-item" href="#">Virgin Islands</a>
                                <a class="dropdown-item" href="#">Virginia</a>
                                <a class="dropdown-item" href="#">Washington</a>
                                <a class="dropdown-item" href="#">West Virginia</a>
                                <a class="dropdown-item" href="#">Wisconsin</a>
                                <a class="dropdown-item" href="#">Wyoming</a>
                            </select>
                        </div>
                    </div>
                    </div>
                </div>
                                <!--[{"id":1	 "code":"AL"	 "name":"Alabama"}
 {"id":2	 "code":"AK"	 "name":"Alaska"}
 {"id":3	 "code":"AS"	 "name":"American Samoa"}
 {"id":4	 "code":"AZ"	 "name":"Arizona"}
 {"id":5	 "code":"AR"	 "name":"Arkansas"}
 {"id":6	 "code":"CA"	 "name":"California"}
 {"id":7	 "code":"CO"	 "name":"Colorado"}
 {"id":8	 "code":"CT"	 "name":"Connecticut"}
 {"id":9	 "code":"DE"	 "name":"Delaware"}
 {"id":10	 "code":"DC"	 "name":"District of Columbia"}
 {"id":11	 "code":"FM"	 "name":"Federated States of Micronesia"}
 {"id":12	 "code":"FL"	 "name":"Florida"}
 {"id":13	 "code":"GA"	 "name":"Georgia"}
 {"id":14	 "code":"GU"	 "name":"Guam"}
 {"id":15	 "code":"HI"	 "name":"Hawaii"}
 {"id":16	 "code":"ID"	 "name":"Idaho"}
 {"id":17	 "code":"IL"	 "name":"Illinois"}
 {"id":18	 "code":"IN"	 "name":"Indiana"}
 {"id":19	 "code":"IA"	 "name":"Iowa"}
 {"id":20	 "code":"KS"	 "name":"Kansas"}
 {"id":21	 "code":"KY"	 "name":"Kentucky"}
 {"id":22	 "code":"LA"	 "name":"Louisiana"}
 {"id":23	 "code":"ME"	 "name":"Maine"}
 {"id":24	 "code":"MH"	 "name":"Marshall Islands"}
 {"id":25	 "code":"MD"	 "name":"Maryland"}
 {"id":26	 "code":"MA"	 "name":"Massachusetts"}
 {"id":27	 "code":"MI"	 "name":"Michigan"}
 {"id":28	 "code":"MN"	 "name":"Minnesota"}
 {"id":29	 "code":"MS"	 "name":"Mississippi"}
 {"id":30	 "code":"MO"	 "name":"Missouri"}
 {"id":31	 "code":"MT"	 "name":"Montana"}
 {"id":32	 "code":"NE"	 "name":"Nebraska"}
 {"id":33	 "code":"NV"	 "name":"Nevada"}
 {"id":34	 "code":"NH"	 "name":"New Hampshire"}
 {"id":35	 "code":"NJ"	 "name":"New Jersey"}
 {"id":36	 "code":"NM"	 "name":"New Mexico"}
 {"id":37	 "code":"NY"	 "name":"New York"}
 {"id":38	 "code":"NC"	 "name":"North Carolina"}
 {"id":39	 "code":"ND"	 "name":"North Dakota"}
 {"id":40	 "code":"MP"	 "name":"Northern Mariana Islands"}
 {"id":41	 "code":"OH"	 "name":"Ohio"}
 {"id":42	 "code":"OK"	 "name":"Oklahoma"}
 {"id":43	 "code":"OR"	 "name":"Oregon"}
 {"id":44	 "code":"PW"	 "name":"Palau"}
 {"id":45	 "code":"PA"	 "name":"Pennsylvania"}
 {"id":46	 "code":"PR"	 "name":"Puerto Rico"}
 {"id":47	 "code":"RI"	 "name":"Rhode Island"}
 {"id":48	 "code":"SC"	 "name":"South Carolina"}
 {"id":49	 "code":"SD"	 "name":"South Dakota"}
 {"id":50	 "code":"TN"	 "name":"Tennessee"}
 {"id":51	 "code":"TX"	 "name":"Texas"}
 {"id":52	 "code":"UT"	 "name":"Utah"}
 {"id":53	 "code":"VT"	 "name":"Vermont"}
 {"id":54	 "code":"VI"	 "name":"Virgin Islands"}
 {"id":55	 "code":"VA"	 "name":"Virginia"}
 {"id":56	 "code":"WA"	 "name":"Washington"}
 {"id":57	 "code":"WV"	 "name":"West Virginia"}
 {"id":58	 "code":"WI"	 "name":"Wisconsin"}
 {"id":59	 "code":"WY"	 "name":"Wyoming"}]
-->
                            </select>
</div>

                    <br>
                    <br>
                    <br>

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
    <div class="jumbotron footer" style="margin-bottom:0; background-color: #809fff;text-align:center">
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
       
   