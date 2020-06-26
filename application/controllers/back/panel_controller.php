<?php

	class Panel_controller extends CI_Controller{
		
		function __construct() 
		{
			parent::__construct();
		}
		
		/**
	    * Si existe sesión activa muestra la vista del panel general.
	    * Si no hay sesión, redirige a la ruta panel
	    */
		function index()
		{
			if($this->session->userdata('logged_in'))
        	{
	            $session_data = $this->session->userdata('logged_in');

	            $data['titulo'] = 'Mi cuenta';
	            $data['perfil_id'] = $session_data['perfil_id'];
				$data['usuario'] = $session_data['usuario'];
				$data['id_usuario'] = $session_data['id_usuario'];

	            $this->load->view('partes/header_view', $data);
	            $this->load->view('partes/navbar_view', $data);
	            $this->load->view('back/usuarios/panel_view', $data);
	            $this->load->view('partes/footer_view');
        	}
        	else
        	{
            	redirect('no_sesion', 'refresh');
        	}
		}
		
		/*
	    * Función para cerrar la sesión activa.
	    * Muestra la vista de login al cerrar sesión
	    */
		function logout()
		{
			$this->session->unset_userdata('logged_in');
        	session_destroy();
			//Pagina que carga despues del logout
			
			redirect('Welcome');
		}
		
	}

/* End of file login_controller.php */
/* Location: ./application/controllers/back/login_controller.php */