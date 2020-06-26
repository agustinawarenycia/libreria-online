<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function _construct() {
		parent::_construct();
	}

	public function index(){
		$data['titulo']= 'Pagina Principal';//esta línea se agrega para que podamos variar el título de las páginas

		$session_data = $this->session->userdata('logged_in');
		$data['perfil_id'] = $session_data['perfil_id'];
		$data['usuario'] = $session_data['usuario'];
		$data['id_usuario'] = $session_data['id_usuario'];

		$this->load->view('partes/header_view',$data);
		$this->load->view('partes/navbar_view');
		$this->load->view('front/nueva_plantilla');
		// $this->load->view('front/Principal');

		$this->load->view('partes/footer_view');
	}

	public function login(){
		$data['titulo']= 'Iniciar Sesion';

		$session_data = $this->session->userdata('logged_in');
		$data['perfil_id'] = $session_data['perfil_id'];
		$data['usuario'] = $session_data['usuario'];
		$data['id_usuario'] = $session_data['id_usuario'];


		$this->load->view('partes/header_view',$data);
		$this->load->view('partes/navbar_view');
		$this->load->view('back/usuarios/iniciosesion_view');
		$this->load->view('partes/footer_view');
	}

		public function logout(){

		$session_data = $this->session->userdata('logged_in');
		$data['perfil_id'] = $session_data['perfil_id'];
		$data['usuario'] = $session_data['usuario'];
		$data['id_usuario'] = $session_data['id_usuario'];

		


		$data['titulo']= 'Cerrar Sesion';
		$this->load->view('partes/header_view',$data);
		$this->load->view('partes/navbar_view');
		$this->load->view('back/usuarios/cerrasesion_view');
		$this->load->view('partes/footer_view');
	}

		public function registrarse(){
		$data['titulo']= 'Registrarse';


		$session_data = $this->session->userdata('logged_in');
		$data['perfil_id'] = $session_data['perfil_id'];
		$data['usuario'] = $session_data['usuario'];
		$data['id_usuario'] = $session_data['id_usuario'];


		$this->load->view('partes/header_view',$data);
		$this->load->view('partes/navbar_view');
		$this->load->view('back/usuarios/agregausuario_view');
		$this->load->view('partes/footer_view');
	}

		public function invitado(){
		$data['titulo']= 'Error de sesion';

		$session_data = $this->session->userdata('logged_in');
		$data['perfil_id'] = $session_data['perfil_id'];
		$data['usuario'] = $session_data['usuario'];


		$this->load->view('partes/header_view',$data);
		$this->load->view('partes/navbar_view');
		$this->load->view('back/usuarios/invitado_view');
		$this->load->view('partes/footer_view');
	}

	public function quienesSomos(){
		$data['titulo']= '¿Quienes Somos?';

		$session_data = $this->session->userdata('logged_in');
		$data['perfil_id'] = $session_data['perfil_id'];
		$data['usuario'] = $session_data['usuario'];
		$data['id_usuario'] = $session_data['id_usuario'];


		$this->load->view('partes/header_view',$data);
		$this->load->view('partes/navbar_view');
		$this->load->view('front/quienes-Somos');
		$this->load->view('partes/footer_view');
	}

	public function infoContacto(){
		$data['titulo']= 'Informacion de Contacto';

		$session_data = $this->session->userdata('logged_in');
		$data['perfil_id'] = $session_data['perfil_id'];
		$data['usuario'] = $session_data['usuario'];
		$data['id_usuario'] = $session_data['id_usuario'];


		$this->load->view('partes/header_view',$data);
		$this->load->view('partes/navbar_view');
		$this->load->view('front/Info-Contacto');
		$this->load->view('partes/footer_view');
	}

	public function infoComercial(){
		$data['titulo']= 'Informacion Comercial';

		$session_data = $this->session->userdata('logged_in');
		$data['perfil_id'] = $session_data['perfil_id'];
		$data['usuario'] = $session_data['usuario'];
		$data['id_usuario'] = $session_data['id_usuario'];


		$this->load->view('partes/header_view',$data);
		$this->load->view('partes/navbar_view');
		$this->load->view('front/Info-Comercial');
		$this->load->view('partes/footer_view');
	}

	public function terminosUsos(){

		$session_data = $this->session->userdata('logged_in');
		$data['perfil_id'] = $session_data['perfil_id'];
		$data['usuario'] = $session_data['usuario'];
		$data['id_usuario'] = $session_data['id_usuario'];


		$data['titulo']= 'Terminos y Usos';
		$this->load->view('partes/header_view',$data);
		$this->load->view('partes/navbar_view');
		$this->load->view('front/Terminos-Usos');
		$this->load->view('partes/footer_view');
	}

	public function construccion(){

		$session_data = $this->session->userdata('logged_in');
		$data['perfil_id'] = $session_data['perfil_id'];
		$data['usuario'] = $session_data['usuario'];
		$data['id_usuario'] = $session_data['id_usuario'];


		$data['titulo']= 'En Mantenimiento';
		$this->load->view('partes/header_view',$data);
		$this->load->view('partes/navbar_view');
		$this->load->view('front/Construccion');
		$this->load->view('partes/footer_view');
	}

	public function consulta(){

		$session_data = $this->session->userdata('logged_in');
		$data['perfil_id'] = $session_data['perfil_id'];
		$data['usuario'] = $session_data['usuario'];
		$data['id_usuario'] = $session_data['id_usuario'];


		$data['titulo']= 'Consultas';
		$this->load->view('partes/header_view',$data);
		$this->load->view('partes/navbar_view');
		$this->load->view('front/Consultas');
		$this->load->view('partes/footer_view');
	}

}
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
