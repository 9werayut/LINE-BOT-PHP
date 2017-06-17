<?php 

require 'vendor/autoload.php';

const DEFAULT_URL = 'https://transportation-service-d4edc.firebaseio.com';
const DEFAULT_TOKEN = 'AIzaSyBBvj7O6UJgFx6jz-KE0VyeT_-7F8qxjT';
const DEFAULT_PATH = '/';

$firebase = new \Firebase\FirebaseLib(DEFAULT_URL, DEFAULT_TOKEN);

// --- reading the stored string ---
$name = $firebase->get(DEFAULT_PATH . '/test');

?>