<?php

require_once '../config/database.php';

class DataBase {

    public function masterDBClass($callCon){

        $connection = new mysqli ($callCon->host, $callCon->user, $callCon->pass, $callCon->db);
        $sql =  "SELECT * FROM detected ORDER BY id DESC";
        $this->result = mysqli_query($connection, $sql);
        $this->result = mysqli_fetch_all($this->result, MYSQLI_ASSOC);
        mysqli_close($connection);

        // foreach ($this->result as $key => $value) {

        //     // echo '<td>'.$value['id'].'</td>';
        //     // echo '<td>'.$value['detected_name'].'</td>';

        //     $value['json'] = json_decode($value['json'], true);

        //     // foreach ($value['json'] as $key => $value) {

        //     //     echo '<td>'.$value['name'].'</td>';

        //     // }
        // };

        return $this;

    }
}
