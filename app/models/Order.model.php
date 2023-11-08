<?php

class Order
{


    public static function get_all($cartData,$location = [])
    {

        $DB = Database::getInstance();
        return $DB->read("select * from orders order by id asc");
    }

    public static function get_item_by_id($id)
    {
        $DB = Database::getInstance();

        return $DB->read("select * from orders where id = :id limit 1", array('id' => $id));
    }

    public static function add_order($cartData, $location = [])
    {
        $DB = Database::getInstance();

        $errors = array();

        include "app/core/Validator.php";

        if (!Validator::string($_POST['ord-name'], 1, 50)) {
            array_push($errors, 'The Name of no more than 50 characters is required.');
        }

        if (!Validator::string($_POST['ord-Address'], 1, 200)) {
            array_push($errors, 'The Address of no more than 200 characters is required.');
        }

        if (!Validator::string($_POST['ord-note'], 0, 400)) {
            array_push($errors, 'The Note of no more than 400 characters');
        }

        if (!Validator::string($_POST['payment'], 1, 50) && ($_POST['payment'] == "Cash" || $_POST['payment'] == "Online")) {
            array_push($errors, 'The Payment method is required.');
            
        }

        if(is_numeric($_POST['ord-branch'])) {
            
            include "app/models/Branch.model.php";
            $branch = new Branch();

            if($branch::branch_exists($_POST['ord-branch'])) {
                array_push($errors, 'The Branch is not exist.');
            }
        }
        else{
            array_push($errors, 'The Branch is required.');
        }

        
        
        if(count($errors) > 0) {
            return $errors;
        }
        else{

            $DBdata = array(
                'customer_id' => $_SESSION['Customer_Id'],
                'name' => $_POST['ord-name'],
                'branch_id' => $_POST['ord-branch'],
                'order_details' => $cartData,
                'status' => 'Pending',
                'ordered_dt' => date('Y-m-d H:i:s'),
                'location' => $location,
                'user_note' => $_POST['ord-note'],
                'payment_method' => $_POST['payment'],
                'address' => $_POST['ord-Address'],
                'confirmed_by' => "",
                'canceled_by' => "",
                'admin_note' => ""
            );

            $query = "insert into orders 
                (customer_id, name, branch_id, order_details, status, ordered_dt, location, user_note, payment_method, address, confirmed_by, canceled_by, admin_note) values 
                (:customer_id, :name, :branch_id, :order_details, :status, :ordered_dt, :location, :user_note,:payment_method, :address, :confirmed_by, :canceled_by, :admin_note)";

            $result = $DB->write($query, $DBdata);

            if($result) {
                return array('success' => true);
            } else {
                return array('Failed to add the item.');
            }
                
        }


    }


}
