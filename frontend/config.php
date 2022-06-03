<?php 
// CONFIG - These control the look and details on your site. Consult documentation for more details.

// GENERAL

// Page title for your site
define('title', 'Netcred Encurtador'); 

// The short title of your site, used in the footer and in some sub pages
define('shortTitle', 'Netcred');

// A description of your site, shown on the homepage.
define('description', 'Bem Vindo ao Encurtador da Netcred! :)'); 

// The favicon for your site
define('favicon', '/frontend/assets/img/favicon.ico');

// Logo for your site, displayed on home page
define('logo', '/frontend/assets/img/logo-black.png');

// Enable reCAPTCHA V3
// It is highly recommended you use reCAPTCHA V3. It will stop spam. You can get a site and secret key from here: https://www.google.com/recaptcha/admin/create
define("enableRecaptcha", false);

// reCAPTCHA V3 Site Key
define("recaptchaV3SiteKey", 'YOUR_SITE_KEY_HERE');

// reCAPTCHA V3 Secret Key
define("recaptchaV3SecretKey", 'YOUR_SECRET_KEY_HERE');

// Enables the custom URL field
// true or false
define('enableCustomURL', true);

// Optional
// Set a primary colour to be used. Default: #007bff
// Here are some other colours you could try:
// #f44336: red, #9c27b0: purple, #00bcd4: teal, #ff5722: orange
define('colour', '#00507e');

// Optional
// Set a background image to be used.
// default: unsplash.com random daily photo of the day
// More possibilities of photo embedding from unsplash could be found at: https://source.unsplash.com
// define('backgroundImage', 'https://source.unsplash.com/daily');

// FOOTER

// These are the links in the footer. Add a new link for each new link.
// The array follows a title link structure:
// "TITLE" => "LINK",
$footerLinks = [
    "About"   =>  "https://netcredbrasil.com.br/",
    "Contact" =>  "https://netcredbrasil.com.br/",
    "Netcred"   =>  "https://netcredbrasil.com.br/",
    "Admin"   =>  "/admin"
];

?>
