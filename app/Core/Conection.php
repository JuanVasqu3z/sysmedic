<?php

namespace App\Core;

use \PDO;

function conection()
{
    try {
        $dns = "" . DB['gsdb'] . ":host=" . DB['host'] . ";dbname=" . DB['name'] . ";";
        $db = new PDO($dns, DB['user'], DB['pass']);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $db;
    } catch (Exception $e) {
        die('Error' . $e->getMessage());
    }
}
