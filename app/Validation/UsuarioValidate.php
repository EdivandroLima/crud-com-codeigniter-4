<?php

namespace App\Validation;

use CodeIgniter\Controller;
use App\Controllers\BaseController;
use CodeIgniter\HTTP\RedirectResponse;

class UsuarioValidate extends BaseController
{
    public function store($request)
    {
        $this->request= $request;
        $validacao = $this->validate([
            'nome' => ['label' => 'Nome Completo', 'rules' => 'required|min_length[3]'],
            'email' => ['label' => 'E-mail', 'rules' => 'required|valid_email|is_unique[usuarios.email]'],
        ]);
        
        if (!$validacao) {
            redirect()->back()->withInput()->with('errors', $this->validator->listErrors());
            header('Location: ' . $_SERVER['HTTP_REFERER']);
            exit;
        }
    }
}
