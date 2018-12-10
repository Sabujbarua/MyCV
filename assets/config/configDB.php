<?php

$pdo = new PDO('mysql:host=localhost;dbname=db_site_cv',
                'root',
                '',
                array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND => 'set NAMES utf8')
);