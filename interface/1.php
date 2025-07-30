<?php

	interface Notification{
		public function send($message);
}
	class whatsupNotification implements notification{
		public function send($message){
			echo "message sent:$message<br>";
		}
	} 
	class emailNotification implements notification{
		public function send($message){
			echo "email sent:$message<br>";
		}
	}
$whatsup = new whatsupNotification();
$whatsup->send("hyy...shiya");

$email = new emailNotification();
$email->send("hyy...shiya");

?>