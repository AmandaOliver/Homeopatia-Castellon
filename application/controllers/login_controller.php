<?php
class Login_controller extends CI_Controller{
      function __construct() {
        parent::__construct();
        $this->load->model('login_model');
          $this->load->library(array('session','form_validation'));
    }

     public function index()
    {
        switch ($this->session->userdata('perfil')) {
            case '':
                $data['token'] = $this->token();
                $data['titulo'] = 'Login con roles de usuario';
                $this->load->view('login_view',$data);
                break;
            case 'administrador':
                redirect(base_url().'administrador_controller');
                break;
            default:
                $data['titulo'] = 'Login con roles de usuario en codeigniter';
                $this->load->view('login_view',$data);
                break;
        }
    }

    public function new_user()
    {
       // if($this->input->post('token') && $this->input->post('token') == $this->session->userdata('token'))
        {
            $this->form_validation->set_rules('usuario', 'nombre de usuario', 'required|trim|min_length[2]|max_length[150]|xss_clean');
            $this->form_validation->set_rules('contraseña', 'password', 'required|trim|min_length[5]|max_length[150]|xss_clean');

            //lanzamos mensajes de error si es que los hay

            if($this->form_validation->run() == FALSE)
            {
                $this->index();
            }else{
                $username = $this->input->post('usuario');
                $password = $this->input->post('contraseña');
                $check_user = $this->login_model->login_user($username,$password);
                if($check_user == TRUE)
                {
                    $data = array(
                    'is_logued_in'     =>         TRUE,
                    'usuario'     =>         $check_user->usuario,
                    'perfil'        =>        $check_user->perfil
                    );
                    $this->session->set_userdata($data);
                    $this->index();
                }
            }
       // }else{
    //        echo 'Error';
            //redirect(base_url().'login_controller');
        }
    }

    public function token()
    {
        $token = md5(uniqid(rand(),true));
        $this->session->set_userdata('token',$token);
        return $token;
    }

    public function logout_ci()
    {
        $this->session->sess_destroy();
        $this->index();
    }

}
?>
