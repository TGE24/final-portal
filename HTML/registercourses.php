<?php
require 'core.inc.php';
require '../init.php';
function mysqli_result($res,$row=0,$col=0){ 
    $numrows = mysqli_num_rows($res); 
    if ($numrows && $row <= ($numrows-1) && $row >=0){
        mysqli_data_seek($res,$row);
        $resrow = (is_numeric($col)) ? mysqli_fetch_row($res) : mysqli_fetch_assoc($res);
        if (isset($resrow[$col])){
            return $resrow[$col];
        }
    }
    return false;
}


if(loggedin() ) {
      //  echo "You are Logged In";
} else {
   header('Location: login.php');
}


?>
<?php
if (isset($_POST['submit'])) {
    if(isset($_POST['table_records[]'])) {
        foreach ($_POST['table_records[]'] as $i => $s) {
            $query = "INSERT INTO `coursesregistered` (`regnum` ,`courseCode`) VALUES (' ".$regnum." ', ' ".$userInfo['course title'][$i]." ')";
$result = mysqli_query($link, $query);
        }
    if (!$result) {
echo 'Query Failed ';
           }
if (mysqli_affected_rows($link) == 1) {
echo '<div class="success">Thank you for registering!</div>';
        }
       }

    }
?>