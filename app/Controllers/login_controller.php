<?php namespace App\Controllers;

use App\Models\usuario_Model;
use CodeIgniter\Controller;

class login_controller extends Controller
{
    public function __construct() {
        helper(['form', 'url']);
    }

    public function index() {
        $data['titulo'] = 'Iniciar Sesión';
        echo view('front/head_view', $data);
        echo view('front/navbar_view');
        echo view('back/usuario/login');
        echo view('front/footer_view');
    }

    public function auth() {
        $session = session();
        $model = new usuario_Model();

        $email = $this->request->getPost('email');
        $password = $this->request->getPost('pass');

        $data = $model->where('email', $email)->first();

        if ($data) {
            $pass = $data['pass'];
            $ba = $data['baja'];
            if ($ba == "SI") {
                $session->setFlashdata('msg', 'Usuario dado de baja');
                return redirect()->to('/login');
            }

            $verify_pass = password_verify($password, $pass);
            if ($verify_pass) {
                $ses_data = [
                    'id_usuario' => $data['id_usuario'],
                    'nombre' => $data['nombre'],
                    'apellido' => $data['apellido'],
                    'email' => $data['email'],
                    'usuario' => $data['usuario'],
                    'perfil_id' => $data['perfil_id'],
                    'logged_in' => TRUE
                ];
                $session->set($ses_data);
                session()->setFlashdata('msg', 'Bienvenido!!');
                return redirect()->to('/panel');
            } else {
                $session->setFlashdata('msg', 'Password incorrecta');
                return redirect()->to('/login');
            }
        } else {
            $session->setFlashdata('msg', 'No existe el email o es incorrecto');
            return redirect()->to('/login');
        }
    }

    public function logout() {
        $session = session();
        $session->destroy();
        return redirect()->to('/');
    }
}



