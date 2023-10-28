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
            $errors[''] = 'Please Enter Valid Email Address.';
        }

        //check email already exist
        $sql = "select * from customers where Email = :email limit 1";
        $arr['email'] = $_POST['reg-email'];

        $check = $db->read($sql,$arr);

        if(is_array($check) && count($check) > 0){
           $errors[''] = "This email is already in use";
            // show($check);
        }

        if (! Validator::string($_POST['reg-phone'], 5, 50)) {
            $errors[''] = 'Please Enter Valid Phone number';
        }

        if (! Validator::date($_POST['reg-dob'], '1900-01-01', '2024-01-01')) {
            $errors[''] = 'Please Enter Date of Birth Phone number';
        }

        //check user entered the right branch number

        $branch = new Branch();
        
        if(! $branch->branch_exists($_POST['res-branch'])){
            $errors[''] = 'Please select Valid Branch';
        }

        if( ! Validator::string($_POST['NIC'], 6, 20)) {
            $errors[''] = 'Please Enter Valid NIC Number';
        }

        if( ! Validator::password($_POST['reg-pass'])) {
            $errors[''] = 'password must have more than 6 characters, must have Capital and Simple letters with numbers and special Characters';
        }

        if( $_POST['reg-pass'] !== $_POST['reg-pass2']) {
            $errors[''] = 'Password didn\'t match';
        }

        if( ! Validator::string($_POST['reg-Address'], 10, 300)) {
            $errors[''] = 'Please Enter Valid Address';
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
            
                $_SESSION['temp_msg'] = "Sign up success! Please Login to continue shopping..";
                header("Location: /login");
                die;
            }
            else{
                return $errors;
            }
        }


    }

	
}