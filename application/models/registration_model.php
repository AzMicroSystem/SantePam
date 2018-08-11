<?php

class Registration_Model extends CI_Model{
  protected $tableTypeCentre = 'typecentre';

  //insert pharmacie, centre de sante, professionnel de sante, assuré santePam
  public function insertUser($dataP, $typeUserP){
     if($typeUserP == "Pharmacie"){
         return $this->db->insert('pharmacie',$dataP); 
     }
     elseif ($typeUserP == "CentreHospita") {
         return $this->db->insert('centrehospitalier',$dataP);
     }
     elseif ($typeUserP == "Professionnel") {
      //print_r("Professionnel");
        return $this->db->insert('professionnelsante',$dataP);
     }
  }
    
  public function loginUser($username, $password){
      //$this->db->where(array('username' = >$username, 'password' => $password));
      $query = $this->db->get_where('employee', array('username' => $username, 'password' => $password,'status'=> 0));   //status sholud be 1
      
      if($query->num_rows() == 1){
          
          $userArr = array();
          foreach($query->result() as $row){
              $userArr[0] = $row->emp_id;
              $userArr[1] = $row->emp_name;
              
          }
          $userData = array(
              'emp_id' => $userArr[0],
              'emp_name' => $userArr[1],
              'logged_in'=> TRUE
          );
          $this->session->set_userdata($userData);
          
          return $query->result();
      }else{
          return false;
      }
  }
    
    
  //send confirm mail
  public function sendEmail($receiver, $typeUserP){
      $from = "info@santepam.com";    //senders email address
      $subject = 'Vérification d\'adresse d\'email';  //email subject
      
      //sending confirmEmail($receiver) function calling link to the user, inside message body
      $message = 'Bonjour/Bonsoir,<br><br> Veuillez cliquer sur le lien d\'activation ci-dessous pour vérifier votre adresse e-mail : <br><br>
      <a href=\'http://localhost/santepam/accueil/confirmEmail/'.md5($receiver).'/'.md5($typeUserP).'\'>http://localhost/santepam/accueil/confirmEmail/'. md5($receiver) .'/'.md5($typeUserP).'</a><br><br>Thanks';
      
      
      
      //config email settings
      /*$config['protocol'] = 'smtp';
      $config['smtp_host'] = 'ssl://smtp.googlemail.com';
      $config['smtp_port'] = '1030';
      $config['smtp_user'] = $from;
      $config['smtp_pass'] = 'vagabon4lifE'; */ 
      $config['mailtype'] = 'html';
      $config['charset'] = 'iso-8859-1';
      $config['wordwrap'] = 'TRUE';
      $config['newline'] = "\r\n"; 
      
      $this->load->library('email', $config);
	    $this->email->initialize($config);
      //send email
      $this->email->from($from);
      $this->email->to($receiver);
      $this->email->subject($subject);
      $this->email->message($message);
      
      if($this->email->send()){
          return true;
      }else{
          return false;
      }
      
     
  }
  
  //activate account
  function verifyEmail($receiver, $typeUserP){
      $data = array('status' => 1);
      $this->db->where('md5(email)',$receiver);

      if($typeUserP == md5("Pharmacie")){
         return $this->db->update('pharmacie', $data);    //update status as 1 to make active user 
     }
     elseif ($typeUserP == md5("Centre hospitalier")) {
         return $this->db->update('centrehospitalier', $data);
     }
     elseif ($typeUserP == md5("Professionnel")) {
         return $this->db->update('professionnelsante', $data);
     }  

     /*echo 'Email : '.$receiver.'<br/>';
     echo 'TypeCompte : '.$typeUserP.'<br/>';
     echo 'Nom commercial : '.$nomCommercial;*/
  }

  /**
 *  Retourne les types de centre hospitalier
 */ 
  function getIdTypeCentreHospitalier($typeCentre){
    return $this->db->select('idTypeCentre')
                ->from($this->tableTypeCentre)
                ->where('nomTypeCentre', $typeCentre)
                ->get()
                ->result();
  }
}

