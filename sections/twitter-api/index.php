<?php
ini_set('display_errors', 1);
require_once('TwitterAPIExchange.php');

/** Set access tokens here - see: https://dev.twitter.com/apps/ **/
$settings = array(
    'oauth_access_token' => "223989074-b9DHhJXo6r8mqEkJ2pR30lUh8EbAVinfwZgzKnH9",
    'oauth_access_token_secret' => "HczEvYnzEhCQKTRupxKOtIMCKvTbGepDSFfkelhdUvr15",
    'consumer_key' => "	nozVn1vhMxT41S0todj1wqinQ",
    'consumer_secret' => "sFMH8hIQ9Eh5dgxae6aYX7NnnbViVVnsfw9ADvma49SQpR0iX8"
);

/** URL for REST request, see: https://dev.twitter.com/docs/api/1.1/ **/
$url = 'https://api.twitter.com/1.1/blocks/create.json';
$requestMethod = 'POST';

/** POST fields required by the URL above. See relevant docs as above **/
$postfields = array(
    'screen_name' => 'NaturalStoreFHS', 
    'skip_status' => '1'
);

/** Perform a POST request and echo the response **/
$twitter = new TwitterAPIExchange($settings);
echo $twitter->buildOauth($url, $requestMethod)
             ->setPostfields($postfields)
             ->performRequest();

/** Perform a GET request and echo the response **/
/** Note: Set the GET field BEFORE calling buildOauth(); **/
$url = 'https://api.twitter.com/1.1/followers/ids.json';
$getfield = '?screen_name=NaturalStoreFHS';
$requestMethod = 'GET';
$twitter = new TwitterAPIExchange($settings);
echo $twitter->setGetfield($getfield)
             ->buildOauth($url, $requestMethod)
             ->performRequest();
