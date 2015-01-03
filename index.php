<?php
session_start();

if (isset($_GET['img']) && isset($_SESSION['image_binary'])) {
    /* initiate tweet-it */
    require_once('./twitteroauth/twitteroauth.php');

    $consumer_key = "xxxxxxxxxxxxxxxxxxxxxxxxxx"; 
    $consumer_secret = "xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx";
    $callback_url = "http://imagetweet.com?callback=1";
     
    $connection = new TwitterOAuth($consumer_key, $consumer_secret);

    $temporary_credentials = $connection->getRequestToken($callback_url);

    $_SESSION['oauth_token'] = $temporary_credentials['oauth_token']; 
    $_SESSION['oauth_token_secret'] = $temporary_credentials['oauth_token_secret']; 

    $redirect_url = $connection->getAuthorizeURL($temporary_credentials, FALSE);

    Header("Location: $redirect_url");

} else if(isset($_GET['callback']) && isset($_SESSION['oauth_token'])) {
    /* the callback phase - after twitter authorization */
    require_once('./twitteroauth/twitteroauth.php');

    $consumer_key = "xxxxxxxxxxxxxxxxxxxxxxxxxx"; 
    $consumer_secret = "xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx";


    /* Create TwitteroAuth object with app key/secret and token key/secret from default phase */
    $connection = new TwitterOAuth($consumer_key, $consumer_secret, $_SESSION['oauth_token'], $_SESSION['oauth_token_secret']);

    /* Request access tokens from twitter */
    $token_credentials = $connection->getAccessToken($_REQUEST['oauth_verifier']);

    /* Remove no longer needed request tokens */
    unset($_SESSION['oauth_token']);
    unset($_SESSION['oauth_token_secret']);

    $connection = new TwitterOAuth($consumer_key, $consumer_secret, $token_credentials['oauth_token'],
    $token_credentials['oauth_token_secret']);

    $status = $connection->upload('statuses/update_with_media', array('status' => $_SESSION['text_text'], 'media[]' => $_SESSION['image_binary']));
    /* var_dump($status); */
    $success_code = $connection->http_code;
    include_once("./index_static.php");

} else {
    /* the primary content displayed on fist time page hit */
    include_once("./index_static.php");
}
