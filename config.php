<?php
    //define('HOST', 'localhost');
    const HOST = 'localhost';

    //define('USER','root');
    const USER = 'root';

    //define('PASS','');
    const PASS = '';

    //define('BASE','cadastro');
    const BASE = 'cadastro';

    $conn = new MySQLi(HOST,USER,PASS,BASE);
