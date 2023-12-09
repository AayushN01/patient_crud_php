<?php 
    class Patient{
        private $connection;

        public function __construct()
        {
            $this->connection = new mysqli('127.0.0.1','root','','sdd_assignment');

            if($this->connection->connect_error)
            {
                die("Connection Failed" . $this->connection->connect_error);
            }
        }

        public function store($request)
        {
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
                
                try{
                    $query = "INSERT INTO patients(first_name, middle_name, last_name, dob, gender, nationality, address,contact_no,contact_alternate,email,occupation,medical_history,created_at,appointment_datetime) VALUES ('$first_name','$middle_name','$last_name','$dob','$gender','$nationality','$address','$contact_no','$contact_alternate','$email','$occupation','$medical_history','$created_at','$appointment')";  
                    $result = mysqli_query($this->connection, $query); 
        
                    if($result)
                    {   
                        header('Location: index.php?success=1');
                        exit();
                    }
                }catch(Exception $e){
                    $_SESSION['error'] = "Error: " . mysqli_error($this->connection);
                }
            }
        }

        public function getAllRecords()
        {
            $query = "SELECT * FROM patients ORDER BY created_at DESC";
            $result = $this->executeQuery($query);
            $result = $result->fetch_all(MYSQLI_ASSOC);
            return $result;
        }

        public function update($request)
        {
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
                $appointment_datetime = $_REQUEST['appointment_datetime'];
        
        
                    try{
                        $query = "UPDATE patients SET first_name='$first_name',middle_name='$middle_name',last_name='$last_name',dob='$dob',gender='$gender',nationality='$nationality',address='$address',contact_no='$contact_no',contact_alternate='$contact_alternate',email='$email',occupation='$occupation',medical_history='$medical_history',updated_at='$updated_at',appointment_datetime='$appointment_datetime' WHERE id=$patientId";
                        $result = mysqli_query($this->connection, $query); 
            
                        if($result)
                        {   
                            header('Location: index.php?update_success=1');
                            exit();
                        }
                    }catch(Exception $e){
                        $_SESSION['error'] = "Error: " . mysqli_error($this->connection);
                    }
            }
        }

        private function executeQuery($query)
        {
            $stmt = $this->connection->prepare($query);       
            $stmt->execute();
            if ($stmt->errno) {
                die('Error: ' . $stmt->error);
            }
        
            $result = $stmt->get_result();
            return $result;
        }
        
        public function __destruct()
        {
            $this->connection->close();
        }

    }

?>