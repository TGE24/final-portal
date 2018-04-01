<?php
include 'init.php';

if (isset($_POST['submit'])) {
    $error = array(); 
    if (empty($_POST['name'])) { 
        $error[] = 'Please Enter a Name '; 
    } else {
        $name = $_POST['name']; 
    }

        if (empty($_POST['regnum'])) { 
        $error[] = 'Please Enter Reg Number '; 
    } else {
        $regnum = $_POST['regnum']; 
    }

        if (empty($_POST['level'])) { 
        $error[] = 'Please Select Level '; 
    } else {
        $level = $_POST['level']; 
    }

        if (empty($_POST['department'])) { 
        $error[] = 'Please Select department '; 
    } else {
        $department = $_POST['department']; 
    }

        if (empty($_POST['gender'])) { 
        $error[] = 'Please Select gender '; 
    } else {
        $gender = $_POST['gender']; 
    }


    if (empty($_POST['email'])) {
        $error[] = 'Please Enter your Email ';
    } else {

        if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            //for email validation (refer: http://us.php.net/manual/en/function.filter-var.php)

            $email = $_POST['email'];
        } else {
            $error[] = 'Your EMail Address is invalid  ';
        }

    }

    if (empty($_POST['password']) && empty($_POST['passwordconfirm'])) {
        $error[] = 'Please Enter Your Password ';
    } else {
        $password = $_POST['password'];
        $passwordconfirm = $_POST['passwordconfirm'];
        //$password_hash = md5('$password')
    }

    if ($_POST['password'] === $_POST['passwordconfirm']) {
   // success!
}
else {
   echo "password do not match";
   return;
}

if (empty($error))

    { // If everything's OK...


        $query = "SELECT * FROM student WHERE name = '$name' && regnum ='$regnum' && level = '$level'";
        $result = mysqli_query($link, $query); // here $link is your mysqli $link
        if (!$result) {
            echo ' Database Error Occured ';
        }

        if (mysqli_num_rows($result) == 0) { // IF no previous user is using this username.

      $query = "INSERT INTO `student` (`name`, `regnum`, `email`, `level`, `department`, `gender`, `password`) VALUES ('".mysql_real_escape_string($name)."', '".mysql_real_escape_string($regnum)."', '".mysql_real_escape_string($email)."', '".mysql_real_escape_string($level)."', '".mysql_real_escape_string($department)."', '".mysql_real_escape_string($gender)."', '$password')";

            $result = mysqli_query($link, $query);
            if (!$result) {
                echo 'Query Failed ';
            }

            if (mysqli_affected_rows($link) == 1) { //If the Insert Query was successfull.

                // Send an email

                // Finish the page:
                header('Location:../template-master/HTML/login.php');

                echo '<div class="success">Thank you for registering! A confirmation email has been sent to ' . $email . ' Please click on the Activation Link to Activate your account </div>';

            } else { // If it did not run OK.
                echo '<div class="errormsgbox">You could not be registered due to a system error. We apologize for any inconvenience.</div>';
            }

        } else { // The username is not available.
            echo '<div class="errormsgbox" >That Reg Number has already been registered for this Level in this department.
</div>';
        }

    } else { //If the "error" array contains error msg , display them.... e.g....

        echo '<div class="errormsgbox"> <ul>';
        foreach ($error as $key => $values) {

            echo '  <li>' . $values . '</li>';

        }
        echo '</ul></div>';

    }
}
    mysqli_close($link);