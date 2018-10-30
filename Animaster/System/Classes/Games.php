<?php
    require_once __DIR__."/../config.php";
    class Games{
        //Attributes
        //##############################################################################################
        private $id_game;
        private $game_name;
        private $game_dess;
        private $game_master;
        private $game_img;

        //Metods - Add new game
        //##############################################################################################
        public function add(){
            $db = new connexio();
            $rtn = $db->query("INSERT INTO games(`game_name`, `game_dess`, `game_master`) "
                    . "VALUES ('$this->game_name', '$this->game_dess', '$this->game_master')");
            $db->close();
            return $rtn;
        }

        //Metods - Mod Game data by $id_game and $game_master
        //##############################################################################################
        public function modgame_name($id_game, $game_master, $game_name){
            $db = new connexio();
            $rtn = $db->query("UPDATE games SET  game_name='$game_name' WHERE id_game= '$id_game' AND game_master= '$game_master'");
            $db->close();
            return $rtn;
        }
        public function modgame_dess($id_game, $game_master, $game_dess){
            $db = new connexio();
            $rtn = $db->query("UPDATE games SET  game_dess='$game_dess' WHERE id_game= '$id_game' AND game_master= '$game_master'");
            $db->close();
            return $rtn;
        }
        public function modgame_img($id_game, $game_master, $game_img){
            $db = new connexio();
            $rtn = $db->query("UPDATE games SET  game_img='$game_img' WHERE id_game= '$id_game' AND game_master= '$game_master'");
            $db->close();
            return $rtn;
        }

        //Metods - Delete game by $id_game and $game_master
        //##############################################################################################
        public function deletegame($id_game, $game_master){
            $db = new connexio();
            $rtn = $db->query("DELETE from games where id_game = '$id_game' AND game_master= '$game_master'");
            $db->close();
            return $rtn;
        }

        //Metods - view all games
        //##############################################################################################
        public function view_all(){
            $db = new connexio();
            $query = $db->query("SELECT * FROM games");
            $rtn = array();
            while($obj = $query->fetch_assoc()){
              //Get user_name of the Game_master
              $db2 = new connexio();
              $query2 = $db->query("SELECT user_name FROM users WHERE id_user='$obj["game_master"]'");
              $db2->close();
              $obj2 = $query2->fetch_assoc();

              //Make game object with all data
              $games = new games($obj["id_game"],$obj["game_name"],$obj["game_dess"],$obj2["user_name"],$obj["game_img"]);
              array_push($rtn, $games);

              //var_dump($games);
            }
            $db->close();
            return $rtn;
        }

        //Metods - other [Search]
        //##############################################################################################
        public function view_master($game_master){
            $db = new connexio();
            $query = $db->query("SELECT * FROM games where game_master='$game_master'");
            $rtn = array();
            while($obj = $query->fetch_assoc()){
                $games = new games($obj["id_game"],$obj["game_name"],$obj["game_dess"],$obj["game_master"],$obj["game_img"]);
                array_push($rtn, $games);
                //var_dump($games);
            }
            $db->close();
            return $rtn;
        }

        //Metods - SET
        //##############################################################################################
        public function setid_game($id_game) {
            $this->id_game = $id_game;
        }
        public function setgame_name($game_name) {
            $this->game_name = $game_name;
        }
        public function setgame_dess($game_dess) {
            $this->game_dess = $game_dess;
        }
        public function setgame_master($game_master) {
            $this->game_master = $game_master;
        }
        public function setgame_img($game_img) {
            $this->game_img = $game_img;
        }

        //Metods - GET
        //##############################################################################################
        public function getid_game() {
            return $this->id_game;
        }
        public function getgame_name() {
            return $this->game_name;
        }
        public function getgame_dess() {
            return $this->game_dess;
        }
        public function getgame_master() {
            return $this->game_master;
        }
        public function getgame_img() {
            return $this->game_img;
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
            $this->setid_game(0);
            $this->setgame_name("");
            $this->setgame_dess("");
            $this->setgame_master("");
            $this->getgame_img("");
        }
        function __construct3($a2, $a3, $a4){                                   // 3 atributes
            $this->setid_game(0);
            $this->setgame_name($a2);
            $this->setgame_dess($a3);
            $this->setgame_master($a4);
            $this->getgame_img("");
        }
        function __construct3($a1, $a2, $a3, $a4, $a5){                         // 5 atributes
            $this->setid_game($a1);
            $this->setgame_name($a2);
            $this->setgame_dess($a3);
            $this->setgame_master($a4);
            $this->getgame_img($a5);
        }
    }
?>
