<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model extends CI_Model 
{

  public function Add($table,$data)
  {
  	$sqll=$this->db->insert($table,$data);
      return $sqll;
  }
  public function insert_last_id($table, $data) 
    {

        $query=$this->db->insert($table, $data);

        if ($query) 
        { 
            return $this->db->insert_id();
        }
    }

  public function readRequete($requete)
    {
      $query=$this->db->query($requete);
      if ($query)
      {
        return $query->result_array();
      }
     }

  public function CesarCrypt($message)
  {
  	//cle =2000 
    $cle=-10000;
    $messagecrypte="";
    $messagecraire=($message);
    $message1[]=str_split($messagecraire);
    foreach($message1 as $subject)
    {
           
      $variable=($subject);

    }
    foreach ($variable as $value) 
    {
         	
       $position=ord($value);
       $nouvelle_position=($position+$cle)%256;
       $variablecrypte=chr($nouvelle_position);
       $messagecrypte .=$variablecrypte;
    }
     return $messagecrypte;
  }

    public function CesarDecrypt($message)
  {  
       //cle =2000 
    	 $cle=-10000;
       $messagecrypte="";
       $messagecraire=($message);
       $message1[]=str_split($messagecraire);
       foreach($message1 as $subject)
      {
           
          $variable=($subject);
      }
      foreach ($variable as $value) 

      {
         	
        $position=ord($value);
        $nouvelle_position=($position-$cle)%256;
        //print_r($nouvelle_position);
        //exit();
        $variablecrypte=chr($nouvelle_position);
        $messagecrypte .=$variablecrypte;
      }
      return $messagecrypte;
  }
}?>