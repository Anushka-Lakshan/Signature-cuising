<?php 

Class Branch
{


	public static function get_all()
	{

		$DB = Database::getInstance();
		return $DB->read("select * from Branches order by Branch_Id desc");

	}

	public static function branch_exists($branchId){

		$branches = self::get_all();
		
		if (isset($_POST['res-branch'])) {
            $selectedBranchId = $_POST['res-branch'];
            
            $branchExists = false;
            foreach ($branches as $branch) {
                if ($branch['Branch_Id'] == $selectedBranchId) {
                    $branchExists = true;
                    break;
                }
            }

            return $branchExists;
        }
	}

	
}