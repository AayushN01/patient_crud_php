<?php 
    include('db.php');

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $first_name = $_REQUEST['first_name'];
        $middle_name = $_REQUEST['middle_name'] ?? null;
        $last_name = $_REQUEST['last_name'];
        $dob = $_REQUEST['dob'];
        $gender = $_REQUEST['gender'];
        $nationality = $_REQUEST['nationality'];
        $address = $_REQUEST['address'];
        $contact_no = $_REQUEST['contact_no'];
        $contact_alternate = $_REQUEST['contact_alternate'] ?? null;
        $email = $_REQUEST['email'];
        $occupation = $_REQUEST['occupation'] ?? null;
        $medical_history = $_REQUEST['medical_history'] ?? null;
        $appointment = $_REQUEST['appointment_datetime'];
        $created_at = date("Y-m-d H:i:s");
        $updated_at = date("Y-m-d H:i:s");

            try{
                $query = "INSERT INTO patients(first_name, middle_name, last_name, dob, gender, nationality, address,contact_no,contact_alternate,email,occupation,medical_history,created_at,updated_at,appointment_datetime) VALUES ('$first_name','$middle_name','$last_name','$dob','$gender','$nationality','$address','$contact_no','$contact_alternate','$email','$occupation','$medical_history','$created_at','$updated_at','$appointment')";  
                $result = mysqli_query($connection, $query); 
    
                if($result)
                {   
                    $_SESSION['success'] = "Patient added successfully!";
                    header('Location: index.php');
                    exit();
                }
            }catch(Exception $e){
                $_SESSION['error'] = "Error: " . mysqli_error($connection);
            }
    }
?>