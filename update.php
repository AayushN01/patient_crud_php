<?php 
    include('db.php');
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $patientId = $_REQUEST['id'];
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
        $updated_at = date("Y-m-d H:i:s");


            try{
                $query = "UPDATE patients SET first_name='$first_name',middle_name='$middle_name',last_name='$last_name',dob='$dob',gender='$gender',nationality='$nationality',address='$address',contact_no='$contact_no',contact_alternate='$contact_alternate',email='$email',occupation='$occupation',medical_history='$medical_history',updated_at='$updated_at' WHERE id=$patientId";
                $result = mysqli_query($connection, $query); 
    
                if($result)
                {   
                    $_SESSION['success'] = "Patient updated successfully!";
                    header('Location: index.php');
                    exit();
                }
            }catch(Exception $e){
                $_SESSION['error'] = "Error: " . mysqli_error($connection);
            }
    }
?>