<?php

$user = ['username'=>'Saman'];
$username = $user['username'] ?? 'GUEST';

//If we havent set anything in the username, it will set 'GUEST' as default username;
echo $username;