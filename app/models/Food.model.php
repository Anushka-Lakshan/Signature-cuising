<?php

class Food
{


    public static function get_all()
    {

        $DB = Database::getInstance();
        return $DB->read("select * from products order by id asc");
    }

    public static function add_item()
    {
        $DB = Database::getInstance();

        $errors = array();

        include "app/core/Validator.php";

        if (!Validator::string($_POST['name'], 1, 50)) {
            array_push($errors, 'The Name of no more than 50 characters is required.');
        }

        if (!Validator::string($_POST['price'], 1)) {
            array_push($errors, 'The Price is required.');
        }

        if (!Validator::string($_POST['Desc'], 1, 200)) {
            array_push($errors, 'The Description of no more than 200 characters is required.');
        }

        if ($_POST['Visibility'] === true || $_POST['Visibility'] === false) {
            array_push($errors, 'The Visibility is required.');
        }

        if ($_POST['cat'] == "") {
            array_push($errors, 'The Category is required.');
        }

        if (!isset($_FILES['image'])) {
            array_push($errors, 'The Image is required.');
        }

        $file = $_FILES['image'];
        $fileExtension = pathinfo($file['name'], PATHINFO_EXTENSION);

        // Check if the file is an image (you can use additional checks)
        $imageInfo = @getimagesize($file['tmp_name']);
        if ($imageInfo === false) {
            array_push($errors, 'The file is not an image.');
        }

        // Set a maximum file size (in bytes)
        $maxFileSize = 2 * 1024 * 1024; // 5MB
        if ($file['size'] > $maxFileSize) {
            array_push($errors, 'The file is too large. (Max size is 2MB)');
        }

        // Define the allowed file extensions
        $allowedExtensions = array('jpg', 'jpeg', 'png');

        // Check if the file extension is in the allowed list
        if (!in_array($fileExtension, $allowedExtensions)) {
            array_push($errors, 'The file extension is not allowed.');
        }

        if (count($errors) > 0) {
            return $errors;
        } else {
            // Generate a unique file name
            $newFileName = "Food_img_" . uniqid() . '.' . $fileExtension;

            // Define the upload directory outside of the web root
            $uploadDirectory = 'assets/images/Foods/' . $newFileName;

            if (!move_uploaded_file($file['tmp_name'], $uploadDirectory)) {
                array_push($errors, 'Failed to upload the file.');

                return $errors;
            }

            $DBdata = array(
                'name' => $_POST['name'],
                'price' => $_POST['price'],
                'description' => $_POST['Desc'],
                'visibility' => $_POST['Visibility'],
                'image' => $uploadDirectory,
                'category' => $_POST['cat']
            );

            $query = "insert into products (name, price, description, visibility, image, category) values 
            (:name, :price, :description, :visibility, :image, :category)";

            $result = $DB->write($query, $DBdata);

            if ($result) {
                return array('success' => true);
            } else {
                return array('Failed to add the item.');
            }
        }

    }

    public static function edit_category($id, $name)
    {
        $DB = Database::getInstance();

        $DBdata = array(
            'name' => $name,
            'id' => $id
        );


        $query = "update categories set name = :name where id = :id";

        $result = $DB->write($query, $DBdata);

        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public static function delete_category($id)
    {
        $DB = Database::getInstance();

        $DBdata = array(
            'id' => $id
        );


        // $query = "update categories set name = :name where id = :id";
        $query = "delete from categories where id = :id";

        $result = $DB->write($query, $DBdata);

        if ($result) {
            return true;
        } else {
            return false;
        }
    }
}
