<?php
    include("../conn.php");
    error_reporting(0);
    
    $data = mysqli_connect("localhost","root","","tour_bill",3307);
    

    if(isset($_POST['email']) && isset($_POST['password'])){

        function validate($conn2){
            $conn2 = trim($conn2);
            $conn2 = stripslashes($conn2);
            $conn2 = htmlspecialchars($conn2);
            return $conn2;
        }

        $username = validate($_POST['email']);
        $password = validate($_POST['password']);

        setcookie("user", "$username", time() + 86400, "/");

        $sql = "select * from login where username = '".$username."' AND password='".$password."'";

        $result = mysqli_query($conn2,$sql);

        $row = mysqli_fetch_array($result);

        if($row['usertype']=="user"){

            

            $qry = "DELETE FROM `boardingexp`";
            $result = mysqli_query($conn,$qry);
            
            $qry = "DELETE FROM `incidentalcharges`";
            $result = mysqli_query($conn,$qry);
            
            $qry = "DELETE FROM `localconveyance`";
            $result = mysqli_query($conn,$qry);
            
            $qry = "DELETE FROM `lodgingexp`";
            $result = mysqli_query($conn,$qry);
            
            $qry = "DELETE FROM `personaldetails`";
            $result = mysqli_query($conn,$qry);
            
            $qry = "DELETE FROM `travelexp`";
            $result = mysqli_query($conn,$qry);
            
            $qry = "DELETE FROM `travellingallowance`";
            $result = mysqli_query($conn,$qry);

            header("Location: ../form/home/dashboard/index.php");
            exit();
            
        }
        else if($row['usertype']=="admin"){
            header("Location: ../admin/dashboard/index.php");
            exit();
        }
        else if($row['usertype']=="approver"){
            header("Location: ../approver/index.php");
            exit();
        }
        else{
            header("Location: index.php?error=Incorrect_user_name_or_password");
            exit();
        }



    }
?>

