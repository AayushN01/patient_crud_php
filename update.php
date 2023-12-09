<?php 
    include('Patient.php');

    $patientObj = new Patient();
    if(isset($_POST['update'])){
        $patientObj->update($_POST);
    }
?>