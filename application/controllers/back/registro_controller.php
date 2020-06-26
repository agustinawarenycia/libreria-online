<?php 

	class Registro_controller extends CI_Controller{
		
		function __construct() 
		{
			parent::__construct();
			$this ->load->model('back/usuario_model');
		}
		
		function index()
		{
			
			//Genero las reglas de validacion
			$this->form_validation->set_rules('nombre', 'Nombre', 'required');
			$this->form_validation->set_rules('apellido', 'Apellido', 'required');
			$this->form_validation->set_rules('email', 'email', 
												'required|trim|valid_email|is_unique[usuarios.email]');
			/*$this->form_validation->set_rules('username', 'Usuario', 
											'trim|required|xss_clean|is_unique[usuarios.usuario]');*/
			$this->form_validation->set_rules('usuario', 'nombre de usuario', 
											'trim|required|is_unique[usuarios.usuario]');
			//$this->form_validation->set_rules('password', 'Contraseña','required|xss_clean');
			$this->form_validation->set_rules('pass', 'La contraseña','required');

			$this->form_validation->set_rules('re_password', 'Repetir contraseña', 'required|matches[pass]');

			//Mensaje de error si no pasan las reglas
			$this->form_validation->set_message('required',
										'<div class="alert alert-danger">%s es obligatorio</div>');

			$this->form_validation->set_message('matches',
										'<div class="alert alert-danger">Las contraseñas ingresadas no coinciden. 
																		Verifiquelas y vuelva a intentarlo.</div>');

			$this->form_validation->set_message('is_unique',
										'<div class="alert alert-danger">El %s ingresado ya se encuentra asociado a otra cuenta. 
																			Ingrese otro diferente por favor.</div>');


			$pass = $this->input->post('re_password',true);

			//Preparo los datos para guardar en la base, en caso de que pase la validacion
			$data = array(
				'nombre'=>$this->input->post('nombre',true),
				'apellido'=>$this->input->post('apellido',true),
				'email'=>$this->input->post('email',true),
				'perfil_id'=>'2',
				'usuario'=>$this->input->post('usuario',true),
				'pass'=>($pass)
			);


			//Si no pasa la validacion de datos
			if ($this->form_validation->run() == FALSE)
			{
				//Muestra la página de registro con el título de error
				$data = array('titulo' => 'Error de formulario');
				$this->load->view('partes/header_view', $data);
				$this->load->view('partes/navbar_view');
				$this->load->view('back/usuarios/agregausuario_view');
				$this->load->view('partes/footer_view');		
			}
			
			else 	//Pasa la validacion
			{
				//Envio array al metodo insert para registro de datos
				$usuario = $this->usuario_model->add_user($data);

				//Redirecciono a la pagina de inicio de sesion
				redirect('sesion'); 
			}	
		}
		
	}
/* End of file 
*/