<?php

    class Users extends Connection{

        public function login($logindata){
            session_start();
            //print_r($logindata);
            $useremail = $logindata['email'];
            $userpass = $logindata['password'];
            $query = "select * from user";
            $result = $this->con->query($query);
            if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        if($row['email'] === $useremail && $row['password'] === $userpass){
                            echo 'ok';
                            $_SESSION['userEmail'] = $row['email'];
                            $_SESSION['userId'] = $row['id'];
                            header('Location:./pages/view_blog_posts.php');
                        }
                    }
                }else{
                    echo "No found records";
                }
        }

        public function register($data){
            //print_r($data);
            $prefix= $data['prefix'];
            $fname = $data['fname'];
            $lname = $data['lname'];
            $email = $data['email'];
            $contact = $data['contact'];
            $pass = md5($data['password']);
            $cpass = md5($data['cpassword']);
            $info = $data['information'];


            if(!empty($prefix) && !empty($fname) && !empty($lname) && !empty($email) && !empty($contact) && !empty($pass) && !empty($cpass) && !empty($info)){
                
                if($pass === $cpass){
                    $query1 = "select * from user";
		            $result1 = $this->con->query($query1);
                    if ($result1->num_rows) {
                        while ($row = $result1->fetch_assoc()) {
                          
                            if($email === $row['email']){
                                header("Location:register.php?reg_msg=User Already Exist..");
                            }
                            else{            
                                echo $sql = "insert into user(prefix,firstname,lastname,email,mobile,password,information)values('$prefix','$fname','$lname','$email','$contact','$pass','$info')";
                                $result2 = $this->con->query($sql);
                                
                                if ($result2 > 0) {
                                    header("Location:register.php?reg_msg=User Registration Successfully..");
                                }else{
                                    header("Location:register.php?reg_msg=User Registration Falled..");
                                }
                            }
                        }
                    }
                }
                else{
                    $text = 'password must same as confirm password';
                }
            }
            else{
                echo 'Please Fillout Fields..';
            }
        }
    }

?>