<?php
$pdo = new PDO('mysql:host=campingluarecrea.mysql.db;dbname=campingluarecrea;charset=utf8', 'campingluarecrea', 'Enzo1998');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
