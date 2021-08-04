<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class SendGrid 
{
	function __construct($config = array())
	{
		
	}

	public function load()
    {
        require_once(APPPATH."third_party/sendgrid-php/vendor/autoload.php");

		$email = new \SendGrid\Mail\Mail(); 
		$email->setFrom("marlon.garing@organicosupport.com", "Example User");
		$email->setSubject("Sending with SendGrid is Fun");
		$email->addTo("johngaring@gmail.com", "Exampleasd User");
		$email->addContent("text/plain", "and easy to do anywhere, even with PHP");
		$email->addContent(
		    "text/html", "<strong>and easy to do anywhere, even with PHP</strong>"
		);
		$sendgrid = new \SendGrid(getenv('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'));
		try {
		    $response = $sendgrid->send($email);
		    print $response->statusCode() . "\n";
		    print_r($response->headers());
		    print $response->body() . "\n";
		} catch (Exception $e) {
		    echo 'Caught exception: '. $e->getMessage() ."\n";
		}
    }
}

