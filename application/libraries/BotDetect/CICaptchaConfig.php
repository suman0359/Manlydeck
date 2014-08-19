<?php

$CI =& get_instance();
$CI_Base_Url = $CI->config->base_url();

$LBD_CaptchaConfig = CaptchaConfiguration::GetSettings();
$LBD_Resource_Url = $CI_Base_Url . 'BotDetect/Public/';

$LBD_CaptchaConfig->HandlerUrl = $CI_Base_Url . 'botdetect/captchahandler/index';
$LBD_CaptchaConfig->ReloadIconUrl = $LBD_Resource_Url . 'LBD_ReloadIcon.gif';
$LBD_CaptchaConfig->SoundIconUrl = $LBD_Resource_Url . 'LBD_SoundIcon.gif';
$LBD_CaptchaConfig->LayoutStylesheetUrl = $LBD_Resource_Url . 'LBD_Layout.css';
$LBD_CaptchaConfig->ScriptIncludeUrl = $LBD_Resource_Url . 'LBD_Scripts.js';

?>