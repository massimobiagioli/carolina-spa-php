<?php

$db = new mysqli('localhost', 'homestead', 'secret', 'carolina');

if ($db->connect_error) {
    $error = $db->connect_error;
}