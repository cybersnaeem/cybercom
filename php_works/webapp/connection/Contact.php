<?php
    class Contact {
        private $servername = "localhost";
		private $username   = "root";
		private $password   = "";
		private $database   = "contactdb";
		public  $con;

		public function __construct()
		{
		    $this->con = new mysqli($this->servername, $this->username,$this->password,$this->database);
		    if(mysqli_connect_error()) {
			 trigger_error("Failed to connect to MySQL: " . mysqli_connect_error());
		    }else{
			    return $this->con;
		    }
		}

        public function displayData()
		{
		    $query = "select * from contacts";
		    $result = $this->con->query($query);
		    if ($result->num_rows > 0) {
                $data = array();
                    while ($row = $result->fetch_assoc()) {
                        $data[] = $row;
                    }
                    return $data;
                    
                }else{
                    echo "No found records";
                }
		}

        public function insertData($post)
        {
            //print_r($post);
            $name = $this->con->real_escape_string($_POST['uname']);
            $email = $this->con->real_escape_string($_POST['uemail']);
            $phone = $this->con->real_escape_string($_POST['phone']);
            $title = $this->con->real_escape_string($_POST['title']);
            $datetime = $this->con->real_escape_string($_POST['udatetime']);
            
            if(!empty($name) && !empty($email) && !empty($phone) && !empty($title) && !empty($datetime)){
                $query="insert into contacts (cname,cemail,cphone,ctitle,datetime)values('$name','$email','$phone','$title','$datetime')";
                $sql = $this->con->query($query);
                if ($sql==true) {
                    header("Location:contacts.php?insert_msg=Contact Saved Successfully..");
                }else{
                    echo "Registration failed try again!";
                }
            }
            else{
                echo 'please Fillup All Fields';
            }   
        }

        public function editData($id)
		{
		    $query = "select * FROM contacts WHERE id = '$id'";
		    $result = $this->con->query($query);
		    if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                return $row;
		    }else{
			    echo "Record not found";
		    }
		}

        public function updateData($contact)
		{
            $name = $this->con->real_escape_string($_POST['uname']);
		    $email = $this->con->real_escape_string($_POST['uemail']);
		    $phone = $this->con->real_escape_string($_POST['uphone']);
            $title = $this->con->real_escape_string($_POST['utitle']);
            $datetime = $this->con->real_escape_string($_POST['udatetime']);
		    $id = $this->con->real_escape_string($_POST['uid']);

            if(!empty($name) && !empty($email) && !empty($phone) && !empty($title) && !empty($datetime)){
                if (!empty($id) && !empty($contact)) {
                    $query = "update contacts set cname ='$name',cemail ='$email',cphone ='$phone',ctitle ='$title',datetime = '$datetime'  where id = '$id'";
                    $sql = $this->con->query($query);
                    if ($sql==true) {
                        header("Location:contacts.php?update_msg=Contact Updated Successfully..");
                    }else{
                        echo "Contact update failed!!";
                    }
                }
            }
            else{
                echo 'please Fillup All Fields';
            }
		}

    }
?>