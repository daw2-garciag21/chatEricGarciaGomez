<?php

class LoginDetails extends DataBoundObject{

	protected $User_Id;
	protected $Last_Activity;
	protected $Is_Type;

	protected function DefineTableName(){
		return("login_details");
	}

	protected function DefineRelationMap(){
		return(array(
			"id" => "ID",
			"user_id" => "User_Id",
			"last_activity" => "Last_Activity",
			"is_type" => "Is_Type"
		));
	}
}
?>