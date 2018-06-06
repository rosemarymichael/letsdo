<?php 
	
	class Message{


		public function set($message,$type = 's'){

			$ci =& get_instance();

			if($type == 's')
				$ci->session->set_userdata('success_msg',$message);
			else if($type == 'e')
				$ci->session->set_userdata('error_msg',$message);
			else if($type == 'i')
				$ci->session->set_userdata('info_msg',$message);

		}
		

	}

?>