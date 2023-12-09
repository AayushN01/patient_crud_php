<?php
    include('db.php');

    $patientId = $_GET['id'];
    if($patientId)
    {
        $query = "DELETE  FROM patients where id=$patientId";
        $result = mysqli_query($connection, $query);

        if($result)
        {
            Header('Location: index.php?delete_success=1');
            exit();
        }
    }
?>