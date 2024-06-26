<?php
$message_id_already_exists = '';
$message_successfully_inserted_into_db = '';
$message_idnumber_thirteen_digits = '';
$message_idnumber_numeric = '';
$message_not_birthday = "";
$message_countdown = "";

if ( isset( $_POST['submit'] ) )
{
    include 'Functions.php';
    require 'dbcon.php';
    $fname=$_POST['f_name'];
    $lname=$_POST['l_name'];
    $idnumber=$_POST['id_num'];
    $date = $_POST['reg_date'];
    $new_date = date("d/m/Y", strtotime($date));
    $email=$_POST['email'];
    $mobile = $_POST['mobile'];
    $language=$_POST['language'];
    $interests = $_POST['interests'];

    $intterests = ArrCon($_POST['interests']);
    $all_int = strval ($intterests);
        echo "<pre>";
          print_r($intterests);
        echo "</pre>";

    if (is_numeric($idnumber) && strlen($idnumber) === 13) {

      /***********************************************************
			       Getting the Date of Birth from the ID Number
		  ***********************************************************/

      $dateboss = substr($idnumber, 0, 6);

      /***********************************************************
			  Splitting the string to Get the Day , Month and the Year
		  ***********************************************************/ 

      $num_array = str_split($dateboss);

      $id_year = $num_array[0] . $num_array[1];
      $id_month = $num_array[2] . $num_array[3];
      $id_day = $num_array[4] . $num_array[5];
  
      if ( $id_year < 1 || $id_year > 2022) {
        $errors = true;
        $message_not_birthday = "<center><h1 class='white-text card'>Sorry...Based on ID Number you provided , The Year Does Not Match the Date of Birth!!!</h1></center>";
        print_r($message_not_birthday);
        header( "refresh:15;url=/dev-prox/t_motsumi_test_1/reg.php" );
        exit();
      }else {
        echo "Year: " . $id_year . "<br>";
      } 
      if ( $id_month < 1 || $id_month > 12) {
        $errors = true;
        $message_not_birthday = "<center><h1 class='white-text card'>Sorry...Based on ID Number you provided , The Month Does Not Match the Date of Birth!!!</h1></center>";
        print_r($message_not_birthday);
        header( "refresh:15;url=/dev-prox/t_motsumi_test_1/reg.php" );
        exit();
      }else {
        echo "Month: " . $id_month . "<br>";
      } 
  
      if ( $id_day < 1 || $id_day > 31) {
        $errors = true;
        header( "refresh:15;url=/dev-prox/t_motsumi_test_1/reg.php" );
        exit();
      }else {
        echo "Day: " . $id_day . "<br>";
      } 

      /***********************************************************
			    Adding the correct Date of Birth in to the Database
		  ***********************************************************/

     $finalYear = "". $id_day."/". $id_month."/". $id_year."";


     if(!$finalYear === $new_date)
     {
      $message_not_birthday = "<center><h1 class='white-text card'>Sorry...ID NUmber Provided , Does Not Match the Date of Birth you entered on the system !!!</h1></center>";
      print_r($message_not_birthday);
      header( "refresh:15;url=/prop-pay/reg.php" );
      exit();
     }else{
      $errors = false;
      require 'dbcon.php';
      $sqlcheck="SELECT * FROM users WHERE id_num ='$idnumber'";
      $result=mysqli_query($conn,$sqlcheck);
      if(mysqli_num_rows($result) >= 1)
      {
        
          $message_id_already_exists = "<center><h1 class='white-text card'>Sorry...ID NUmber Provided Already Exists On the System!!!</h1></center>";
          print_r($message_id_already_exists);
          header( "refresh:15;url=/prop-pay/reg.php" );
          exit();
      }
          else{

            /**********************************************************************
                Inserting the Correct Date to the Database, After Various Checks
            ***********************************************************************/ 

              $sql="INSERT INTO `users`(`f_name`,`l_name`,`id_num`,`reg_date`,`email`,`mobile`,`language`,`interests`) 
              VALUES ('$fname','$lname','$idnumber','$finalYear','$email','$mobile','$language','$all_int')";

              include_once "./inquiries.php";
              
              if ($conn->query($sql) === TRUE) {
                $message_id_already_exists = "<center><h1 class='white-text card'>New record created successfully Created!!!</h1></center>";
                print_r($message_id_already_exists);
                header( "refresh:15;url=/prop-pay/reg.php" );
                exit();
              } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
              } 
      }
     }
     }
     else {
            /**********************************************************************
                          Failed to insert due to non valid reasons
            ***********************************************************************/ 
        $message_idnumber_thirteen_digits = "<center><h1 class='white-text card'>Sign Up Failed Either Because ==> 1 = Contains Non Numerical Characters || 2 = Not a Valid ID Number !!! Enter a Valid Record to Succeed </h1></center>";
        print_r($message_idnumber_thirteen_digits);
        header( "refresh:15;url=/prop-pay/reg.php" );
        exit();
      }

} ?>
