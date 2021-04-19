<?php

class Login extends DataBoundObject{

	protected $Usuario;
	protected $Password;

	protected function DefineTableName(){
		return("login");
	}

	protected function DefineRelationMap(){
		return(array(
			"id" => "ID",
			"username" => "Usuario",
			"password" => "Password"
		));
	}
}
?>