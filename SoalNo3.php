<?php
$email = 'user@example.com';

// Mengekstrak domain dari alamat email
list($username, $domain) = explode('@', $email);

// Menampilkan domain
echo $domain;
?>
