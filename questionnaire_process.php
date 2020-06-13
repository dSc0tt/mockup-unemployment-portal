<?php
echo 'Happy';  
//if(isset($_POST['submit'])){
if(isset($_POST['submit'])){
    echo 'happy';
$Applying= $_POST['Applying'];
$Relocate= $_POST['Relocate'];
$RegularC= $_POST['RegularC'];
$ContinueC= $_POST['ContinueC'];
$WorkedS= $_POST['WorkedS'];
$DeniedJ= $_POST['DeniedJ'];
$MultipleQ= $_POST['MultipleQ'];

if($Applying == 'null')
    {
        echo '<div class="alert alert-danger" role="alert">
        You must select an answer choice for Question 1.
          <!--Close button on alert-->
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
                </button>
                  </div>';
                  header('location:cant_file_claim.php');
    }
if($Relocate == 'null')
    {
        echo '<div class="alert alert-danger" role="alert">
        You must select a choice for Question 2.
          <!--Close button on alert-->
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
                </button>
         </div>';
         header('location:cant_file_claim.php');
    }
if($RegularC == 'null')
    {
        echo '<div class="alert alert-danger" role="alert">
        You must select an answer choice for Question 3.
        <!--Close button on alert-->
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
                </button>
        </div>';
        header('location:cant_file_claim.php');
    }
if($ContinueC == 'null')
    {
    echo '<div class="alert alert-danger" role="alert">
    You must select an answer choice for Question 4.
    <!--Close button on alert-->
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
                </button>
        </div>';
        header('location:cant_file_claim.php');
    }
if($WorkedS == 'null')
    {
    echo '<div class="alert alert-danger" role="alert">
    You must select an answer choice for Question 5.
    <!--Close button on alert-->
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
                </button>
        </div>';
        header('location:cant_file_claim.php');
    }
if($DeniedJ == 'null')
    {
    echo '<div class="alert alert-danger" role="alert">
    You must select an answer choice for Question 6.
    <!--Close button on alert-->
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
                </button>
        </div>';
        header('location:cant_file_claim.php');
    }
if($MultipleQ == 'null')
    {
    echo '<div class="alert alert-danger" role="alert">
    You must select an answer choice for Question 6.
    <!--Close button on alert-->
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
                </button>
        </div>';
        header('location:cant_file_claim.php');
        }
        if($Applying !== 'Yes')
            {
                header('location:cant_file_claim.php');
            }
        if($Relocate !== 'No'){
            header('location:cant_file_claim.php');
        }
        if($RegularC !== 'Yes'){
            header('location:cant_file_claim.php');
        }
        if($ContinueC !== 'Yes'){
            header('location:cant_file_claim.php');
        }
        if($WorkedS !== 'No'){
            header('location:cant_file_claim.php');
        }
        if($DeniedJ !== 'No'){
            header('location:cant_file_claim.php');
        }
        if($MultipleQ !== 'No'){
            header('location:cant_file_claim.php');
        }
        else{
            header('location: appRegister.php');
        }
}


?>