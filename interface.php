<?php
interface DB_Interface {
    public function save();	
    public function delete();
    public function toArray();
    public function setFromArray(Array $data);
}