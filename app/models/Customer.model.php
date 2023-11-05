<?php 

Class Customer
{


	public static function Reister(){

        $data = array();
        $errors = array();
        $db = Database::getInstance();

        include "app/core/Validator.php";

        $Validate = new Validator();

        if (! Validator::string($_POST['reg-name'], 1, 50)) {
            $errors[''] = 'The Name of no more than 50 characters is required.';
        }

        if (! Validator::email($_POST['reg-email'])) {
            array_push($errors, 'Please Enter Valid Email Address.');
        }

        //check email already exist
        $sql = "select * from customers where Email = :email limit 1";
        $arr['email'] = $_POST['reg-email'];

        $check = $db->read($sql,$arr);

        if(is_array($check) && count($check) > 0){
            array_push($errors, 'This email is already in use');
            // show($check);
        }

        if (! Validator::string($_POST['reg-phone'], 5, 50)) {
            array_push($errors, 'Please Enter Valid Phone number');
        }

        if (! Validator::date($_POST['reg-dob'], '1900-01-01', '2024-01-01')) {
            array_push($errors, 'Please Enter valid Date of Birth');
        }

        //check user entered the right branch number

        $branch = new Branch();
        
        if(! $branch->branch_exists($_POST['res-branch'])){
            array_push($errors, 'Please select Valid Branch');
        }

        if( ! Validator::string($_POST['NIC'], 6, 20)) {
            array_push($errors, 'Please Enter Valid NIC Number');
        }

        if( ! Validator::password($_POST['reg-pass'])) {
            array_push($errors, 'password must have more than 6 characters, must have Capital and Simple letters with numbers and special Characters');
        }

        if( $_POST['reg-pass'] !== $_POST['reg-pass2']) {
            
            array_push($errors, 'Password didn\'t match');
        }

        if( ! Validator::string($_POST['reg-Address'], 10, 300)) {
            
            array_push($errors, 'Please Enter Valid Address');
        }


        if( empty($errors)) {

            $data['Name'] = $_POST['reg-name'];
            $data['Email'] = $_POST['reg-email'];
            $data['Phone'] = $_POST['reg-phone'];
            $data['DOB'] = $_POST['reg-dob'];
            $data['PreparedBranch'] = $_POST['res-branch'];
            $data['NIC'] = $_POST['NIC'];
            $data['Password'] = $_POST['reg-pass'];
            $data['Address'] = $_POST['reg-Address'];
            $data['Reg_Date'] = date("Y-m-d H:i:s");

            //encrypt password
            $data['Password'] = hash('sha3-256',$data['Password']);

            $query = "insert into customers (Name,Email,Phone,DOB,PreparedBranch,NIC,Password,Address,Reg_Date) values
            (:Name,:Email,:Phone,:DOB,:PreparedBranch,:NIC,:Password,:Address,:Reg_Date)";

            $result = $db->write($query,$data);

            if($result){

                self::Login_to_system($data['Email'], $data['Password']);
                sweetAlert("Sign up success!","welcome to Signature Cuisine family!, Please Login to continue","success");

                header("Location: /login");
                die;
                
            }
            else{
                return $errors;
            }
        }
        else{
            return $errors;
        }


    }

    public static function Login($email, $password){

        $data = array();
        $errors = array();

        include "app/core/Validator.php";

        $Validate = new Validator();

        if (! Validator::email($email)) {
            $errors[''] = 'Please Enter Valid Email Address.';
        }

        if( ! Validator::password($password)) {
            $errors[''] = 'Please Enter Valid Password';
        }

        if(empty($errors)){

            if (self::Login_to_system($email, $password)){

                sweetAlert("Login success!","welcome back " . $_SESSION['Customer_Name'],"success");
                header("Location: /");
                die;
            }else{
                $errors[''] = "Invalid credentials, User not found";

                return $errors;
            }

        }else{
            return $errors;
        }

        
    }

    public static function Login_to_system($email, $password){

        $data = array();
        $errors = array();
        $db = Database::getInstance();

        //check user exist
        $sql = "select * from customers where Email = :email and Password = :password limit 1";
        $arr['email'] = $email;
        $arr['password'] = hash('sha3-256',$password);

        $check = $db->read($sql,$arr);


        if(is_array($check) && count($check) > 0){
           

            $_SESSION['Customer_Id'] = $check[0]['Customer_Id'];
            $_SESSION['Customer_Name'] = $check[0]['Name'];
            
            return true;
        }else{
            return false;
            
        }
    }

	
}