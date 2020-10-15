<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sendemail
{
	
	public function notification($to, $message, $subject, $mail_template){
		$Emailfrom = "training@kfinsolutions.com";
		$Emailto = $to;
		$Subject = $subject;
 
		// send email
		$status = $this->_send($Emailfrom,$Emailto,$Subject,$message,$mail_template);

		// redirect to success page
		if ($status){
			return TRUE;
		}else{
			return FALSE;
		}
	}

	private function _send($from, $to, $subject, $message, $mail_template) {
		$CI =& get_instance();
		$data['message'] = $message;
		$body = $CI->load->view($mail_template, $data, TRUE);
        $CI->load->config('email');
        $CI->email->set_newline("\r\n");
        $CI->email->from($from,"KFIN Training");
        $CI->email->to($to);
        $CI->email->reply_to('support@kfinsolutions.com', 'KFIN Support');
        $CI->email->subject($subject);
        $CI->email->message($body);
        if ($CI->email->send()) {
        	return true;
        }
        else
        {
        	return false;
        }

	}
}