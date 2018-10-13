<?php
    require_once __DIR__."/../config.php";
    class Users{
        /*Atributs*/
        private $id_user;
        private $user_name;
        private $user_mail;
        private $user_pass;
        private $user_rol;

        //METODES
        public function add(){
            $db = new connexio();
            $db2 = $db->query("INSERT INTO users(`user_name`, `user_mail`, `user_pass`, `user_rol`) "
                    . "VALUES ('$this->user_name', '$this->user_mail', '$this->user_pass', '$this->user_rol')");
            $db->close();
            return $db2;
        }
        public function moduser_pass($id, $pass){
            $db = new connexio();
            $result = $db->query("UPDATE users SET  user_pass='$pass' WHERE id_user= '$id'");
            $db->close();
            return $result;
        }
        public function moduser_mail($id, $user_mail){
            $db = new connexio();
            $result = $db->query("UPDATE users SET  user_mail='$user_mail' WHERE id_user= '$id'");
            $db->close();
            return $result;
        }
        public function moduser_name($id, $user_name){
            $db = new connexio();
            $result = $db->query("UPDATE users SET  user_name='$user_name' WHERE id_user= '$id'");
            $db->close();
            return $result;
        }
        public function delete($var){
            $db = new connexio();
            $result = $sql = "delete from users where id_user = $var";
            $db->query($sql);
            return $result;
        }

        public function userflag($id, $user_name){
            $db = new connexio();
            $sql = "SELECT * FROM users WHERE user_name = '$user_name' and id_user= '$id'";
            $query = $db->query($sql);
            $db->close();
            if ($query->num_rows > 0) {
                return 'yes';
            } else {
                return 'no';
            }
        }
        public function userexiste($user_name){
            $db = new connexio();
            $sql = "SELECT * FROM users WHERE user_name = '$user_name'";
            $query = $db->query($sql);
            $db->close();
            if ($query->num_rows > 0) {
                return true;
            } else {
                return false;
            }
        }

        public function mailflag($id, $user_mail){
            $db = new connexio();
            $sql = "SELECT * FROM users WHERE user_mail = '$user_mail' and id_user= '$id'";
            $query = $db->query($sql);
            $db->close();
            if ($query->num_rows > 0) {
                return 'yes';
            } else {
                return 'no';
            }
        }
        public function mailexiste($user_mail){
            $db = new connexio();
            $sql = "SELECT * FROM users WHERE user_mail = '$user_mail'";
            $query = $db->query($sql);
            $db->close();
            if ($query->num_rows > 0) {
                return true;
            } else {
                return false;
            }
        }

        public function verificar_login($user_mail,$user_pass){
            $db = new connexio();
            $sql = "SELECT * FROM users WHERE user_mail = '$user_mail' and user_pass = '$user_pass'";
            $query = $db->query($sql);
            $count = 0;
            $datos = "";
            if ($query->num_rows > 0) {
                while($row = $query->fetch_assoc()) {
                    $count++;
                    $datos = $row;
                }
            } else {
                $count = 0;
            }
            $db->close();
            if($count == 1){
                return $datos;
            }else{
                return null;
            }
        }
        public function view_all(){
            $db = new connexio();
            $sql = "SELECT * FROM users;";
            $query = $db->query($sql);
            $rtn = array();
            while($obj = $query->fetch_assoc()){
                $users = new users($obj["id_user"],$obj["user_name"],$obj["user_mail"],$obj["user_pass"],$obj["user_rol"]);
                //var_dump($users);
                array_push($rtn, $users);
            }
            $db->close();
            return $rtn;
        }
        public function view_comp($id){
            $db = new connexio();
            $sql = "SELECT * FROM users where id_user='$id'";
            $query = $db->query($sql);
            $rtn = array();
            while($obj = $query->fetch_assoc()){
                $users = new users($obj["user_name"],$obj["user_mail"],$obj["user_pass"],$obj["user_rol"]);
                //var_dump($users);
                array_push($rtn, $users);
            }
            $db->close();
            return $rtn;
        }
        public function return_user($id){
            $db = new connexio();
            $sql = "SELECT * FROM users WHERE id_user = '$id'";
            $query = $db->query($sql);
            $count = 0;
            if ($query->num_rows > 0) {
                while($row = $query->fetch_assoc()) {
                    $count++;
                    $datos = $row;
                }
            } else {
                $count = 0;
            }
            $db->close();
            if($count == 1){
                return $datos;
            }else{
                return "error";
            }
        }

        public function buscusers($search){
            $db = new connexio();
            $sql = "SELECT id_user, user_name FROM users where user_name  LIKE '%".$search."%' LIMIT 5";
            $query = $db->query($sql);
            $rtn = array();
            while($obj = $query->fetch_assoc()){
                array_push($rtn, $obj);
            }
            $db->close();
            return $rtn;
        }


        //CONSTRUCTORS
        function __construct(){
            $args = func_get_args();
            $num = func_num_args();
            $f='__construct'. $num;
            if (method_exists($this, $f)) {
                call_user_func_array(array($this, $f), $args);
            }
        }
        function __construct0(){
            $this->id_user=0;
            $this->user_name = "";
            $this->user_mail = "";
            $this->user_pass = "";
            $this->user_rol = "";
        }

        function __construct4($a2, $a3, $a4, $a5){
            $this->id_user=0;
            $this->user_name = $a2;
            $this->user_mail = $a3;
            $this->user_pass = $a4;
            $this->user_rol = $a5;
        }

        //METODES SET
        public function setid_user($id_user) {
            $this->id_user = $id_user;
        }
        public function setuser_name($user_name) {
            $this->user_name = $user_name;
        }
        public function setuser_mail($user_mail) {
            $this->user_mail = $user_mail;
        }
        public function setuser_pass($user_pass) {
            $this->user_pass = $user_pass;
        }
        public function setuser_rol($user_rol) {
            $this->user_rol = $user_rol;
        }

        //METODES GET
        public function getid_user() {
            return $this->id_user;
        }
        public function getuser_name() {
            return $this->user_name;
        }
        public function getuser_mail() {
            return $this->user_mail;
        }
        public function getuser_pass() {
            return $this->user_pass;
        }
        public function getuser_rol() {
            return $this->user_rol;
        }
    }
?>
