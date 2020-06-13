<?php
//Admin login for unemployment portal
?>
<html>
    <head>
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
      </head>
    <style>
      #main {
            height:500px;
        }
    </style>
        <title>AdminViewAllClaims</title>
        <!-- CSS only -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    </head>
    <body>
    <div class="jumbotron">
            <p class="jumbotron" style="font-size:40px; background-color: #E50000; text-align:center; color:white;">Admin View All claims </p>



</div><br><br><br><br>
  <div class="well" style="background-color:#E50000; border-radius:20px">
  <table style="color:white;width:100%; ">
  <tr>
    <h2 style="color:white;">Claim 1</h2>
    <th>First-Name</th>
    <td>Jill</td>
    </tr>
    <tr>
    <th>Last-Name</th>
    <td>Scott</td>
    </tr>
    <tr>
    <th>Claim ID</th>
    <td>12345</td>
    </tr>
    <tr>
    <th>Last day of Employment</th>
    <td>04/04/20</td>
    </tr>
    <tr>
    <th>Salary</th>
    <td>5000</td>
    </tr>
    <tr>
    <th>SSn</th>
    <td>123456789</td>
</tr>
<tr>
    <th>Employer Name</th>
    <td>Jack Beanstock</td>
    </tr>
    <tr>
    <th>Employer Address</th>
    <td>Someplace st</td>
    </tr>
    <tr>
    <th>Department</th>
    <td>retail</td>
    </tr>
    <tr>
    <th>City</th>
    <td>Gotham</td>
    </tr>
    <tr>
    <th>Zipcode</th>
    <td>56789</td>
    </tr>
    <tr>
    <th>Email</th>
    <td>fefifofum@gmail.com</td>
    </tr>
    <th>Status</th>
    <td>Aproved</td>
  </tr>


</table><br>

          <button type="button" style="border-radius: 12px">DELETE</button>  <br><br>       </div>
          <br><br><br><br>
            <div class="well" style="background-color:#E50000; border-radius:20px">
            <table style="color:white;width:100%; ">
            <tr>
              <h2 style="color:white;">Claim 2</h2>
              <th>First-Name</th>
              <td>Jill</td>
              </tr>
              <tr>
              <th>Last-Name</th>
              <td>Scott</td>
              </tr>
              <tr>
              <th>Claim ID</th>
              <td>12345</td>
              </tr>
              <tr>
              <th>Last day of Employment</th>
              <td>04/04/20</td>
              </tr>
              <tr>
              <th>Salary</th>
              <td>5000</td>
              </tr>
              <tr>
              <th>SSn</th>
              <td>123456789</td>
          </tr>
          <tr>
              <th>Employer Name</th>
              <td>Jack Beanstock</td>
              </tr>
              <tr>
              <th>Employer Address</th>
              <td>Someplace st</td>
              </tr>
              <tr>
              <th>Department</th>
              <td>retail</td>
              </tr>
              <tr>
              <th>City</th>
              <td>Gotham</td>
              </tr>
              <tr>
              <th>Zipcode</th>
              <td>56789</td>
              </tr>
              <tr>
              <th>Email</th>
              <td>fefifofum@gmail.com</td>
              </tr>
              <th>Status</th>
              <td>Aproved</td>
            </tr>


          </table><br>

                    <button type="button" style="border-radius: 12px">DELETE</button>  <br><br>       </div><br><br><br><br>
                      <div class="well" style="background-color:#E50000; border-radius:20px">
                      <table style="color:white;width:100%; ">
                      <tr>
                        <h2 style="color:white;">Claim 3</h2>
                        <th>First-Name</th>
                        <td>Jill</td>
                        </tr>
                        <tr>
                        <th>Last-Name</th>
                        <td>Scott</td>
                        </tr>
                        <tr>
                        <th>Claim ID</th>
                        <td>12345</td>
                        </tr>
                        <tr>
                        <th>Last day of Employment</th>
                        <td>04/04/20</td>
                        </tr>
                        <tr>
                        <th>Salary</th>
                        <td>5000</td>
                        </tr>
                        <tr>
                        <th>SSn</th>
                        <td>123456789</td>
                    </tr>
                    <tr>
                        <th>Employer Name</th>
                        <td>Jack Beanstock</td>
                        </tr>
                        <tr>
                        <th>Employer Address</th>
                        <td>Someplace st</td>
                        </tr>
                        <tr>
                        <th>Department</th>
                        <td>retail</td>
                        </tr>
                        <tr>
                        <th>City</th>
                        <td>Gotham</td>
                        </tr>
                        <tr>
                        <th>Zipcode</th>
                        <td>56789</td>
                        </tr>
                        <tr>
                        <th>Email</th>
                        <td>fefifofum@gmail.com</td>
                        </tr>
                        <th>Status</th>
                        <td>Aproved</td>
                      </tr>


                    </table><br>

                              <button type="button" style="border-radius: 12px">DELETE</button>  <br><br>       </div>
                        </div>
            <div class="col-md-3"></div>
        </div>
</div><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <div class="jumbotron footer" style="margin-bottom:0; background-color: #E50000;">
        <p style="color:white"> ©BdpaUnemploymentInc.</p>
        </div>
       </div>
    </body>
</html>
