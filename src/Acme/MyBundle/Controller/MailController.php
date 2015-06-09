<?php

namespace Acme\MyBundle\Controller;

use Acme\MyBundle\Lib\HomePost;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Swift_Message;

class MailController extends Controller {
	public function indexAction(Request $request) {
		$name = $request->request->get ( 'input_name' );
		$email = $request->request->get ( 'input_email' );
		$phone = $request->request->get ( 'input_phone' );
		$info = $request->request->get ( 'input_info' );
		$message = Swift_Message::newInstance ()->setSubject ( 'Infomation Request from Meifang.mobi' )->setFrom ( 'meifang.mobi@gmail.com' )->setTo ( 'zixuanwang@gmail.com' )->setBody ( $this->renderView ( 
				// app/Resources/views/Emails/registration.html.twig
				'AcmeMyBundle:Emails:info.html.twig', array (
						'name' => $name,
						'email' => $email,
						'phone' => $phone,
						'info' => $info 
				) ), 'text/html' );
		$this->get ( 'mailer' )->send ( $message );
		return $this->render ( 'AcmeMyBundle:Emails:success.html.twig', array('area' => 'all') );
	}
}
