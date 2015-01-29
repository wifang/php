<?php

abstract class DB_Abstract {
    protected $_link;
    protected $_data;
    protected $_id;
    protected $_condition;

    abstract public function __construct ($host, $username, $password, $databaseName);
    abstract public function __destruct();
    abstract public function select($query);
    abstract public function query($query);
    abstract public function save();
    abstract public function delete();
    abstract public function toArray();
    abstract public function setFromArray(Array $data);
 }
 ?>