CREATE DATABASE IF NOT EXISTS bd_animaster;
USE bd_animaster;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


CREATE TABLE IF NOT EXISTS Users (
  id_user       int NOT NULL AUTO_INCREMENT,
  user_name     varchar(50) UNIQUE,
  user_mail     varchar(100),
  user_pass     varchar(255),
  user_rol      int NOT NULL DEFAULT 0, -- 0 -> User 1 -> Admin
  user_color    int NOT NULL DEFAULT 6,
  PRIMARY KEY (`id_user`)
);

CREATE TABLE IF NOT EXISTS Games (
  id_game       int NOT NULL AUTO_INCREMENT,
  game_name     varchar(100),
  game_dess     varchar(1000),
  game_master   int NOT NULL,
  PRIMARY KEY (`id_game`),
  FOREIGN KEY (game_master) REFERENCES Users (id_user)
);

CREATE TABLE IF NOT EXISTS Game_User (
  id_game    int NOT NULL,
  id_user    int NOT NULL,
  granted    varchar(50) DEFAULT 'false',
  PRIMARY KEY (id_game,id_user),
  FOREIGN KEY (id_game) REFERENCES Games (id_game),
  FOREIGN KEY (id_user) REFERENCES Users (id_user)
);
