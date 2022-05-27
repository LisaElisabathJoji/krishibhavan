<?php
require('stripe-php-master/init.php');
$publishableKey = "pk_test_51KwKdgSHpm3yWhc7X02172Ew8ZzWiqS7AGX6rvnjZR0tdfwV2HTXpDj0UuTPLCB9ARIirf2TegBedIIWhv3QcmKq00nlxbF9Ks";
$secretKey = "sk_test_51KwKdgSHpm3yWhc7CiF0uBrHGWCmcruk1h7fPZSvDxxochcoCAkuCKBN2gcGDMzWYJE4dv4fJnDiHjuex7R47ABy00A2TJRFQv";
\Stripe\Stripe::setApiKey($secretKey);

?>