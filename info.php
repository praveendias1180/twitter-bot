<?php
require_once('vendor/autoload.php');

use Coderjerk\BirdElephant\BirdElephant;
require_once('config.php');

$credentials = array(
    'bearer_token' => TWITTER_BEARER_TOKEN,
    'consumer_key' => TWITTER_API_KEY,
    'consumer_secret' => TWITTER_API_SECRET,
);

//instantiate the object
$twitter = new BirdElephant($credentials);

$user = 'official_php';

//get a user's followers using the handy helper methods
$followers = $twitter->user($user)->followers();

echo '<pre>';
print_r($followers);

//pass your query params to the methods directly
$following = $twitter->user($user)->following([
    'max_results' => 20,
    'user.fields' => 'profile_image_url'
]);

print_r($following);
echo '</pre>';

?>