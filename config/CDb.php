<?php

include('CDbConnection.php');

class CDb {
  private $host;
  private $port;
  private $dbname;
  private $username;
  private $password;
  private $connection = null;

  public function __construct(){
    $this->host='localhost';
    $this->port='3306';
    $this->dbname= 'puntodeventa';
    $this->username = 'root';
    $this->password = '9un70v34t4';
    $this->connection = new CDbConnection($this->host.":". $this->port, $this->dbname, $this->username, $this->password);
    return $this->connection;
  }

  public function Select( $statement = "" , $parameters = [] ){
    try{
      return $this->connection->Select( $statement, $parameters);
    }catch(Exception $e){
      throw new Exception($e->getMessage());
    }
  }

  public function Insert( $statement = "" , $parameters = [] ){
    try{
      return $this->connection->Insert( $statement, $parameters);;
    }catch(Exception $e){
      throw new Exception($e->getMessage());
    }
  }
}
