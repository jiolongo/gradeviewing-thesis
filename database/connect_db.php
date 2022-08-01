<?php

 
class DbClass{ 

  private $servername;

  private $username;

  private $password;

  private $dbname;

 

  protected function connect(){ 

 

  // $this->servername="sql207.epizy.com";

  // $this->username="epiz_30492962";

  // $this->password="eIV2W30zeEzv";

  // $this->dbname="epiz_30492962_dbmonitor	";


  $this->servername="localhost";

  $this->username="root";

  $this->password="";

  $this->dbname="dbmonitor";
 

 

  $conn=new mysqli($this->servername,$this->username,$this->password,$this->dbname); 
	  


  return $conn;

 

  }

 

}

?>