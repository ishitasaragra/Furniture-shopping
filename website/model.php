<?php
class model
{
public $conn="";
function __construct()
{
  $this->conn=new Mysqli('localhost','root','','furniture shopping');
  }
  
  function select($tbl)
  {
  
  }
}
$obj=new model;

?>