<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sendemail
{
	
	public function notification($to, $message, $subject, $mail){
		$Emailfrom = "no-reply@kfinsolutions.com";
		$Emailto = $to;
		$Subject = $subject;
		$mail = $mail;
 
		// send email
		$status = $this->_send($Emailfrom,$Emailto,$Subject,$message,$mail);

		// redirect to success page
		if ($status){
			$resp = ['status' => true, 'error' =>''];
			return $resp;
		}else{
			$resp = ['status' => false, 'error' => 'Send failed'];
			return $resp;
		}
	}

	private function _send($from, $to, $subject, $message, $mail) {
		$CI =& get_instance();
		$data['message'] = $message;
		$body = $CI->load->view($mail, $data, TRUE);
        $CI->load->config('email');
        $CI->email->set_newline("\r\n");
        $CI->email->from($from,"Fu-Gen Capital");
        $CI->email->to($to);
        $CI->email->reply_to('support@fu-gencapital.com', 'Fu-Gen Support');
        $CI->email->subject($subject);
        $CI->email->message($body);
        $CI->email->send();
        echo $CI->email->print_debugger();

	}
}