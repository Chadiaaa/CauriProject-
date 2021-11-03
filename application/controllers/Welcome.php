<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller 
{
  public function index()
	{
		$this->load->view('Client_Add_View');
		
	}
   
    public function enregistrement()
	{
		$nom=$this->input->post('nom');
		$prenom=$this->input->post('prenom');
		$telephone=$this->input->post('telephone');
		$addresse=$this->input->post('addresse');
		$compte=$this->input->post('compte');
		$solde=$this->input->post('solde');
		$type=$this->input->post('type');
		
    //Chiffrement des valeurs recuperees

    $nomchiffre=$this->Model->CesarCrypt($nom);
		$prenomchiffre=$this->Model->CesarCrypt($prenom);
		$telephonechiffre=$this->Model->CesarCrypt($telephone);
		$addressechiffre=$this->Model->CesarCrypt($addresse);
		$comptechiffre=$this->Model->CesarCrypt($compte);
		$soldechiffre=$this->Model->CesarCrypt($solde);
		$typechiffre=$this->Model->CesarCrypt($type);
		 // print_r($telephonechiffre);
   //   exit();
	    $data=array('NOM_CLIENT'=>$nomchiffre,
        'PRENOM_CLIENT'=>$prenomchiffre,
        'TELEPHONE_CLIENT'=>$telephonechiffre,
        'ADRESSE_CLIENT'=>$addressechiffre);
		
         $ID_CLIENT=$this->Model->insert_last_id('client',$data);
         $data1=array('ID_CLIENT' =>$ID_CLIENT,
         'NUM_COMPTE'=>$comptechiffre,
         'SOLDE_COMPTE'=>$soldechiffre,
         'TYPE_COMPTE'=>$typechiffre);

         $this->Model->Add('compte',$data1);
         redirect(base_url('Welcome/ListClient'));
	}
    public function employe_view($value='')
    {
        $this->load->view('Employe_Add_View');
    }
    public function save_employe($value='')
   {
       $matricule=$this->input->post('matricule');
       $nom=$this->input->post('nom');
       $prenom=$this->input->post('prenom');
       $AnneeNaissance=$this->input->post('anne');
       $role=$this->input->post('role');
       $username=$this->input->post('username');
       $password=$this->input->post('password');
       $telephone=$this->input->post('telephone');
       

       $matriculechiffre=$this->Model->CesarCrypt($matricule);
       $nomchiffre=$this->Model->CesarCrypt($nom);
       $prenomchiffre=$this->Model->CesarCrypt($prenom);
       $Anneechiffre=$this->Model->CesarCrypt($AnneeNaissance);
       $rolechiffre=$this->Model->CesarCrypt($role);
       $usernamechiffre=$this->Model->CesarCrypt($username);
       $telephonechiffre=$this->Model->CesarCrypt($telephone);
       //print_r($telephonechiffre);
       //exit();
       //$passwordchiffre=$this->Model->CesarCrypt($password);
       //print_r($Anneechiffre);
       //exit();
       $data=array('MATRICULE_EMPLOYE'=>$matriculechiffre,'NOM_EMPLOYE'=>$nomchiffre,'PRENOM_EMPLOYE'=>$prenomchiffre,'ANNEE_NAISSANCE'
           =>$Anneechiffre,'TELEPHONE_EMPLOYE'=>$telephonechiffre);
       $ID_Employe=$this->Model->insert_last_id('employe',$data);
       $data1=array('ID_EMPLOYE'=>$ID_Employe,'USERNAME_EMPLOYE'=>$usernamechiffre,'PASSWORD'=>$password,'ROLE_EMPLOYE'=>$rolechiffre);
       $this->Model->Add('login',$data1);
       redirect(base_url('/Welcome/ListEmploye/'));
 }

public function ListClient()
{
	$query='SELECT * FROM client ORDER BY ID_CLIENT DESC';
    $fetch_categ = $this->Model->readRequete($query);

    $data=array();
    $i=1;
    foreach($fetch_categ as $row)

    {
        $categ_array = array(); 
        $categ_array[]=$i++;
        $categ_array[]=$this->Model->CesarDecrypt($row['NOM_CLIENT']);
        $categ_array[]=$this->Model->CesarDecrypt($row['PRENOM_CLIENT']);
        $categ_array[]=$this->Model->CesarDecrypt($row['TELEPHONE_CLIENT']);
        $categ_array[]=$this->Model->CesarDecrypt($row['ADRESSE_CLIENT']);
        $data[]= $categ_array;
    }
        $data['client']=$data;
        $template=array('table_open'=>'<table id="mytable" class="table table-bordered table-striped table-hover table-condensed">','table_close');
        $this->table->set_heading('#','NOM','PRENOM','TELEPHONE','ADRESSE');
        $this->table->set_template($template);
        $this->load->view('Client_Liste_View',$data);
}

public function ListCompte()
{
  $query='SELECT * FROM compte JOIN client ON compte.ID_CLIENT=client.ID_CLIENT';
      $fetch_categ = $this->Model->readRequete($query);

    $data=array();
    $i=1;
    foreach($fetch_categ as $row)

    {
        $categ_array = array(); 
        $categ_array[]=$i++;
        
        $categ_array[]=$this->Model->CesarDecrypt($row['PRENOM_CLIENT']);
        $categ_array[]=$this->Model->CesarDecrypt($row['NUM_COMPTE']);
        $categ_array[]=$this->Model->CesarDecrypt($row['SOLDE_COMPTE']);
        $categ_array[]=$this->Model->CesarDecrypt($row['TYPE_COMPTE']);
        $data[]= $categ_array;
    }
        $data['compte']=$data;
        $template=array('table_open'=>'<table id="mytable" class="table table-bordered table-striped table-hover table-condensed">','table_close');
        $this->table->set_heading('#','NOMCLIENT','NUMERODECOMPTE','SOLDECOMPTE','TYPECOMPTE');
        $this->table->set_template($template);
        $this->load->view('Compte_Liste_View',$data);
}
public function ListEmploye()
{
    $query='SELECT * FROM employe JOIN login ON  employe.ID_EMPLOYE=login.ID_EMPLOYE';
    $fetch_categ = $this->Model->readRequete($query);
    $data=array();
    $i=1;
    foreach($fetch_categ as $row)

    {
        $categ_array = array(); 
        $categ_array[]=$i++;
        $categ_array[]=$this->Model->CesarDecrypt($row['MATRICULE_EMPLOYE']);
        $categ_array[]=$this->Model->CesarDecrypt($row['NOM_EMPLOYE']);
        $categ_array[]=$this->Model->CesarDecrypt($row['PRENOM_EMPLOYE']);
        $categ_array[]=$this->Model->CesarDecrypt($row['ANNEE_NAISSANCE']);
        $categ_array[]=$this->Model->CesarDecrypt($row['TELEPHONE_EMPLOYE']);
        $categ_array[]=$this->Model->CesarDecrypt($row['USERNAME_EMPLOYE']);
        //$categ_array[]=$this->Model->$row['DATE_DEBUT'];
        $categ_array[]=$this->Model->CesarDecrypt($row['ROLE_EMPLOYE']);
        $data[]= $categ_array;
    }
        $data['employe']=$data;
        $template=array('table_open'=>'<table id="mytable" class="table table-bordered table-striped table-hover table-condensed">','table_close');
        $this->table->set_heading('#','MATRICULE','NOM','PRENOM','ANNEDENAISSANCE','TELEPHONE','USERNAME','STATUT');
        $this->table->set_template($template);
        $this->load->view('Employe_Liste_View',$data);
}

public function do_login() 
{
        
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        //$criteresmail['LOG_EMAIL']=$login;
        $user=$this->Model->Get_data('login');  

        
        if (!empty($user)) 
        {

            
       if($user['PASSWORD']==($password) AND $user['USERNAME_EMPLOYE']==($username))

             {
                        $session=array(

                        'ID_LOG' => $user['ID_LOGIN'],
                        'LOG_USERNAME'=> $user['USERNAME'],
                        'LOG_PASSWORD'=> $user['PASSWORD'],
                        'LOG_STATUS'=> $user['ROLE_EMPLOYE']
                        

                    );
                     $this->session->set_userdata($session);

                    if($user['ROLE_EMPLOYE']==Admin) 
                    {
                      
                      redirect(base_url(''));
                    }
                    else
                    {
                       $this->session->set_userdata($session);
                       redirect(base_url());
                        
                    }
                   
            }

             else
                $message = "<div class='alert alert-danger'> Le nom d'utilisateur ou/et le mot de passe incorect(s) !</div>";
        }
         else
            $message = "<div class='alert alert-danger'> L'utilisateur n'existe pas/plus dans notre système informatique !</div>";
       $this->index($message);

    }

}
