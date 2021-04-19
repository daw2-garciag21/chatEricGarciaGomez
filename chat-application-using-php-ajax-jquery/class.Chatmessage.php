<?php

class ChatMessage extends DataBoundObject{

	protected $To_User_id;
	protected $From_User_id;
	protected $Chat_Message;
	protected $Timestamp;
	protected $Status;

	protected function DefineTableName(){
		return("chat_message");
	}

	protected function DefineRelationMap(){
		return(array(
			"id" => "ID",
			"to_user_id" => "To_User_id",
			"from_user_id" => "From_User_id",
			"chat_message" => "Chat_Message",
			"timestamp" => "Timestamp",
			"status" => "Status"
		));
	}
}
?>