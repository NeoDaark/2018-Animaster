<?php
	define("FLAG","1");
	define("HOST","localhost");
	define("NOMUSUARI","animaster");
	define("CONTRASENYA","77k2K9mPLcv93JfL");
	define("NOMBDD","bd_animaster");
	class connexio extends mysqli {
		public function __construct() {
			parent::__construct(HOST,NOMUSUARI,CONTRASENYA,NOMBDD);
			parent::query("SET NAMES 'utf8'");
			if (mysqli_connect_error()) {
				die('Connect Error (' . mysqli_connect_errno() . ') '. mysqli_connect_error());
			}
		}
	}
?>