<?php

class DataBaseCon 
{
    public function masterDB() {
        $this->host = 'localhost';
        $this->user = 'root';
        $this->pass = '';
        $this->db = 'asteroid';

        return $this;
    }
}
