<?php
/**
 * @version     0.0.1
 * @package     
 * @subpackage  
 * @author      Fabrika Dev <david.snege@gmail.com>
 * @copyright   2021 Fabrika Dev (Campings Place)
 * @license     Licença de uso Somente para Campings Place!
 * 
 **/

class login {

    public function login($user, $pass, $secondaryDB){

        $this->user = $user;
        $this->pass = $pass;

        $connection = new mysqli ($secondaryDB->host, $secondaryDB->user, $secondaryDB->pass, $secondaryDB->db);
        $sql =  "SELECT * FROM users WHERE email = '$this->user' ";
        $result = mysqli_query($connection, $sql);
      
        while ($row = mysqli_fetch_array($result)){
            // Seteamos las variables
            $this->name = $row['name'];
            $this->email = $row['email'];
            $this->role = $row['role'];
            $this->password = $row['password'];
        }

        $this->hash = $this->password;
        $this->auth = true;

        if (password_verify($this->pass, $this->hash)) {
            // $this->auth = '¡La contraseña es válida!';
            setcookie("auth", $this->auth, time() + 3600);
            setcookie("hola", $this->name, time() + 3600);
        } else {
            // $this->auth = 'La contraseña no es válida.';
            setcookie("auth", "", time() - 3600);
            setcookie("hola", "", time() - 3600);
        }

        echo "<br><br>";

        return  $this;
    }
}
