<?php
    require_once __DIR__."/../config.php";
    class Users{
        //Attributes
        //##############################################################################################
        private $id_user;
        private $user_name;
        private $user_mail;
        private $user_pass;
        private $user_rol;
        private $user_color;

        //Metods - Add new user
        //##############################################################################################
        public function add(){
            $this->user_pass = password_hash($this->user_pass,PASSWORD_DEFAULT);
            $db = new connexio();
            $db2 = $db->query("INSERT INTO users(`user_name`, `user_mail`, `user_pass`) "
                    . "VALUES ('$this->user_name', '$this->user_mail', '$this->user_pass')");
            $db->close();
            return $db2;
        }

        //Metods - Mod user data by $id_user
        //##############################################################################################
        public function moduser_name($id_user, $user_name){
            $db = new connexio();
            $result = $db->query("UPDATE users SET  user_name='$user_name' WHERE id_user= '$id_user'");
            $db->close();
            return $result;
        }
        public function moduser_mail($id_user, $user_mail){
            $db = new connexio();
            $result = $db->query("UPDATE users SET  user_mail='$user_mail' WHERE id_user= '$id_user'");
            $db->close();
            return $result;
        }
        public function moduser_pass($id_user, $user_pass){
            $db = new connexio();
            $result = $db->query("UPDATE users SET  user_pass='$user_pass' WHERE id_user= '$id_user'");
            $db->close();
            return $result;
        }
        public function moduser_rol($id_user, $user_rol){
            $db = new connexio();
            $result = $db->query("UPDATE users SET  user_rol='$user_rol' WHERE id_user= '$id_user'");
            $db->close();
            return $result;
        }
        public function moduser_color($id_user, $user_color){
            $db = new connexio();
            $result = $db->query("UPDATE users SET  user_color='$user_color' WHERE id_user= '$id_user'");
            $db->close();
            return $result;
        }

        //Metods - Delete user by $id_user
        //##############################################################################################
        public function deleteuser($id_user){
            $db = new connexio();
            $result = $db->query("DELETE from users where id_user= '$id_user'");
            $db->close();
            return $result;
        }

        //Metods - Return True if($user_name or $user_mail already exists in the DB) else Return False
        //##############################################################################################
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

        //Metods - Verify Login and return $user or null
        //##############################################################################################
        public function verify_login($user_mail,$test_pass){

            $db = new connexio(); //connect
            $sql = "SELECT * FROM users WHERE user_mail = '$user_mail'";
            $query = $db->query($sql);
            $db->close(); //disconect

            if ($query->num_rows > 0) {
                $obj = $query->fetch_assoc();
                $users = new users($obj["id_user"],$obj["user_name"],$obj["user_mail"],$obj["user_pass"],$obj["user_rol"],$obj["user_color"]);
                if(password_verify($test_pass, $users->getuser_pass())){
                  return $users; //password valida
                }else{
                  return null;  //password no valida
                }
            } else {
                return null; //mail no existe
            }
        }


        public function view_all(){
            $db = new connexio();
            $sql = "SELECT * FROM users;";
            $query = $db->query($sql);
            $rtn = array();
            while($obj = $query->fetch_assoc()){
                $users = new users($obj["id_user"],$obj["user_name"],$obj["user_mail"],$obj["user_pass"],$obj["user_rol"],$obj["user_color"]);
                //var_dump($users);
                array_push($rtn, $users);
            }
            $db->close();
            return $rtn;
        }

        //Metods - other [Search]
        //##############################################################################################
        public function view_comp($id){
            $db = new connexio();
            $sql = "SELECT * FROM users where id_user='$id'";
            $query = $db->query($sql);
            $rtn = array();
            while($obj = $query->fetch_assoc()){
                $users = new users($obj["user_name"],$obj["user_mail"],$obj["user_pass"],$obj["user_rol"],$obj["user_color"]);
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
        public function usercolor($id_user){
            $db = new connexio();
            $sql = "SELECT user_color FROM users WHERE id_user = '$id_user'";
            $query = $db->query($sql);
            $db->close();

            if ($query->num_rows > 0) {
                $obj = $query->fetch_assoc();
                return $obj["user_color"];
            } else {
                return 0;
            }
        }

        //Metods - SET
        //##############################################################################################
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
        public function setuser_color($user_color) {
            $this->user_color = $user_color;
        }

        //Metods - GET
        //##############################################################################################
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
        public function getuser_color() {
            return $this->user_color;
        }

        //##############################################################################################
        //CONSTRUCTORS
        //##############################################################################################
        function __construct(){
            $args = func_get_args();
            $num = func_num_args();
            $f='__construct'. $num;
            if (method_exists($this, $f)) {
                call_user_func_array(array($this, $f), $args);
            }
        }
        function __construct0(){                                                // 0 atributes
            $this->setid_user(0);
            $this->setuser_name("");
            $this->setuser_mail("");
            $this->setuser_pass("");
            $this->setuser_rol("");
            $this->setuser_color("");
        }
        function __construct3($a2, $a3, $a4){                                   // 3 atributes
            $this->setid_user(0);
            $this->setuser_name($a2);
            $this->setuser_mail($a3);
            $this->setuser_pass($a4);
            $this->setuser_rol("");
            $this->setuser_color("");
        }
        function __construct5($a2, $a3, $a4, $a5, $a6){                         // 5 atributes
            $this->setid_user(0);
            $this->setuser_name($a2);
            $this->setuser_mail($a3);
            $this->setuser_pass($a4);
            $this->setuser_rol($a5);
            $this->setuser_color($a6);
        }
        function __construct6($a1, $a2, $a3, $a4, $a5, $a6){                    // 6 atributes
            $this->setid_user($a1);
            $this->setuser_name($a2);
            $this->setuser_mail($a3);
            $this->setuser_pass($a4);
            $this->setuser_rol($a5);
            $this->setuser_color($a6);
        }
    }
?>
