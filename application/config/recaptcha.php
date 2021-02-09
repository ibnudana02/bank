<?php
defined('BASEPATH') or exit('No direct script access allowed');

// To use reCAPTCHA, you need to sign up for an API key pair for your site.
// link: http://www.google.com/recaptcha/admin

$config['recaptcha_site_key'] = '6LeKx04aAAAAAAjk2kBzU0ePUrTNPvjcOUTC_D9P'; //localhost
// $config['recaptcha_site_key'] = '6Lccx04aAAAAAIhVDEkFpfRhorCCXAhE7LfCO34d';
$config['recaptcha_secret_key'] = '6LeKx04aAAAAAMbXOWEaQYSOshS2feyqEedjlCaw'; //localhost
// $config['recaptcha_secret_key'] = '6Lccx04aAAAAAMX_ZeAcahR-cZDl4nqzPo6S-9JT';
// reCAPTCHA supported 40+ languages listed here:
// https://developers.google.com/recaptcha/docs/language
$config['recaptcha_lang'] = 'en';

/* End of file recaptcha.php */
/* Location: ./application/config/recaptcha.php */
