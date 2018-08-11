<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Accueil extends CI_Controller {

	/**
	 * Constructeur pour effectuer des taches d'initialisation
	 */
	public function __construct()
	{
		//	Obligatoire
		parent::__construct();
		$this->load->model('Registration_Model');
	
	}

	/**
	 * Méthode pour afficher la page d'acceuil
	 *En appelant la methode home
	 */
	public function index()
	{
		$this->home();
	}

	public function home(){
		$this->load->view('layout/header');
		$this->load->view('home');
		$this->load->view('layout/footer');
	}

	//methode pour la lancer la page de connexion
	public function creationCompte(){
		$typeUser = $this->input->post('centre');

		if($typeUser == "Pharmacie" || $typeUser == "CentreHospita"){
			//Les regles pour la validation du formulaire
        	$this->form_validation->set_rules('nomCommercial','nom commercial', 'trim|required');
        	$this->form_validation->set_rules('email','email', 'trim|required|valid_email');

        	if($this->form_validation->run() == false){
        		$msg_comme = form_error('nomCommercial');
        		$msg_email = form_error('email');

        		if (form_error('nomCommercial') || ($msg_email=="Le champ email est requis.")) {
        			//echo 'Error : '.form_error('email');
        			$msg = "Veuillez remplir tout les champs!";
                	$this->session->set_flashdata('msg', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
						  <strong>Champ(s) vide(s)! </strong>'. $msg .'<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						    <span aria-hidden="true" style="color:black;">&times;</span>
						  </button>
						</div>'
					);

        		}
        		elseif ($msg_email="Le champ email doit contenir une adresse email valide") {
        			$msg = form_error('email');
                	$this->session->set_flashdata('msg', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
						  <strong>Email invalide! </strong>'. $msg .'<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						    <span aria-hidden="true" style="color:black;">&times;</span>
						  </button>
						</div>'
					);
        		}
        	
		        $this->signup();
	        }else{

	            $data = array(
	                'nomCommercial' => $this->input->post('nomCommercial'),
	                'email' => $this->input->post('email')
	            ); 

	           if ($this->Registration_Model->insertUSer($data, $typeUser)){
	           		//echo $this->Registration_Model->insertUSer($data, $typeUser);
	           		
	           		if($this->Registration_Model->sendEmail($this->input->post('email'), $typeUser)){
	           			$msg = "Un lien de confirmation a été envoyé à: ".$this->input->post('email');
	                	$this->session->set_flashdata('msg', '<div class="alert alert-success text-center">S\'il vous plaît confirmer le mail qui a été envoyé à votre email en cliquant sur le lien. '.$msg.'</div>');

	                	$this->signup();
	           		}	
	           }
	           else{
	           		$this->session->set_flashdata('msg', '<div class="alert alert-danger text-center">Enregistrement échoué! Veuillez réessayer.</div>');
	           		$this->signup();
	           }
	        }
		}
		elseif ($typeUser == "Professionnel") {
			$this->form_validation->set_rules('nom','nom', 'trim|required');
        	$this->form_validation->set_rules('prenom','prenom', 'trim|required');
        	$this->form_validation->set_rules('email','email', 'trim|required|valid_email');

        	if($this->form_validation->run() == false){
	            
		        $this->signup();
	        }else{
		        
	            //on prend la valeur du champ select(Pharmacie, Centre hospitalier, Professionnel de santé, Assuré SantePam)
	           // $typeUser = $this->input->post('centre');
	            //print_r("type 1 : ".$typeUser);

		      	/*$data = array(
	                //'nomCommercial' => $this->input->post('nomCommercial'),
	                'nom' => $this->input->post('nom'),
	                'prenom' => $this->input->post('prenom'),
	                'email' => $this->input->post('email')
            	);   */
	        }
		}  

		
	}

	//Methode pour afficher la vue de creation de compte
	public function signup(){
		//print_r($this->Registration_Model->getIdTypeCentreHospitalier('Hopital'));
		$this->load->view('layout/header');
        $this->load->view('signup_view');
        $this->load->view('layout/footer');  
        
    }//Fin Methode Signup

    //Methode pour envoyer les mail d'activation de compte
    function sendEmail($typeUser){
    	//pour envoyer l'email
    	$this->Registration_Model->sendEmail($this->input->post('email'), $typeUser);
    	/*if($this->Registration_Model->insertUSer($data, $typeUser)){
    		$this->Registration_Model->sendEmail($this->input->post('email'), $typeUser);
    	}
		if($this->Registration_Model->insertUSer($data, $typeUser)){
	                
            //send confirm mail
            if($this->Registration_Model->sendEmail($this->input->post('email'), $typeUser)){
                //redirect('Login_Controller/index');
                $msg = "Successfully registered with the sysytem.Conformation link has been sent to: ".$this->input->post('email');
                $this->session->set_flashdata('msg', '<div class="alert alert-success text-center">Successfully registered. Please confirm the mail that has been sent to your email. '.$msg.'</div>');

                $this->signup();
            }else{
                
                //$error = "Error, Cannot insert new user details!";
                $this->session->set_flashdata('msg', '<div class="alert alert-danger text-center">Failed!! Please try again.</div>');
                $this->load->view('header');
                $this->load->view('signup_view');
                $this->load->view('footer');
            } 
    	}*/  
    }

    //Methode pour confirmation email
    function confirmEmail($receiver, $typeUserP){
    	//echo 'Test';
        if($this->Registration_Model->verifyEmail($receiver, $typeUserP)){
            $msg = "Veuillez définir un mot de passe et completer votre profil. ";
	        $this->session->set_flashdata('msg', '<div class="alert alert-success text-center">Votre adresse mail a été validé. <br/>'.$msg.'</div>');
	        $this->setPassword();
           // redirect('Login_Controller/index');
        }else{
            $this->session->set_flashdata('verify', '<div class="alert alert-danger text-center">Email address is not confirmed. Please try to re-register.</div>');
            //redirect('Login_Controller/index');
        }
    }//Fin methode confirmation email

    //Methode pour lancer la page password
    function setPassword(){
    	$this->load->view('layout/header');
        $this->load->view('password_view');
        $this->load->view('layout/footer');  
    }

    //Methode pour lancer la page pharmacie
    function getPharmacie(){
    	$this->load->view('layout/header');
        $this->load->view('pharmacie_view');
        $this->load->view('layout/footer');  
    }


    //Methode pour lancer la page compte/profil
    function monCompte(){
    	$this->load->view('layout/header_compte');
        $this->load->view('profil_view');
        $this->load->view('layout/footer');  
    }

    //Methode pour lancer la page compte/adresse
    function adresse(){
    	$this->load->view('layout/header_compte');
        $this->load->view('adresse_view');
        $this->load->view('layout/footer');  
    }

    //Methode pour lancer la page compte/medicament
    function medicament(){
    	$this->load->view('layout/header_compte');
        $this->load->view('medicament_view');
        $this->load->view('layout/footer');  
    }
}
