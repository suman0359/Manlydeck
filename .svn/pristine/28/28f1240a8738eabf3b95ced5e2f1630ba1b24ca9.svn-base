<?php

if (!is_readable(dirname(__FILE__) . DIRECTORY_SEPARATOR . 'CaptchaLibrary' . DIRECTORY_SEPARATOR . 'BotDetect.php'))
{
	$destination_path = dirname(__FILE__) . DIRECTORY_SEPARATOR . "CaptchaLibrary";
	echo "You have downloaded our CodeIgniter sample, but you are missing BotDetect Captcha library which comes as a separate download. To resolve the issue:
	
		<br><br>1) Download BotDetect PHP CAPTCHA Library from here: <a href=\"http://captcha.biz/captcha-download.html?version=php&amp;utm_source=installation&amp;utm_medium=php&amp;utm_campaign=CodeIgniter\">http://captcha.biz/captcha-download.html?version=php</a>

		<br><br>2) Copy (all contents of the directory)
		<br>from: &lt;BDLIB&gt;/CaptchaLibrary
		<br>to: " . $destination_path . "
		<br><i>* where &lt;BDLIB&gt; stands for the downloaded and extracted contents of the BotDetect PHP Captcha library</i>

		<br><br>Here is where you can find more details: <a href=\"http://captcha.biz/doc/php/howto/codeigniter-captcha.html?utm_source=installation&amp;utm_medium=php&amp;utm_campaign=CodeIgniter\">http://captcha.biz/doc/php/howto/codeigniter-captcha.html</a>
		<br>";

	die;
}

require_once("CaptchaLibrary/BotDetect.php");
require_once("CICaptchaConfig.php");

class BotDetectCaptcha extends Captcha {

  function __construct($config = array()) {
    if (!isset($_SESSION)) {
      session_start();
    } 
    if (count($config) > 0) {
      $this->initialize($config);
    }
  }

  public function initialize($config = array()) {
    foreach ($config as $key => $val) {
      $method = 'set_'.$key;
      if (method_exists($this, $method)) {
        $this->$method($val);
      } else {
        $this->$key = $val;
      }
    }
    parent::__construct($config['CaptchaId']);
    
    return $this;
  }
}
?>