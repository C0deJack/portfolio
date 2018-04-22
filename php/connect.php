<?php

/**
 * Connects to the database for all subsequent sql queries
 *
 * @return PDO
 */

function connect(){
    $db = new PDO('mysql:host=127.0.0.1; dbname=jackWPdb', 'root');
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return $db;
}