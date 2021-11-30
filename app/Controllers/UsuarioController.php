<?php

namespace App\Controllers;

use App\Models\UsuarioModel;
use App\Controllers\BaseController;
use App\Validation\UsuarioValidate;

class UsuarioController extends BaseController
{
    protected $model;
    protected $usuarioValidate;

    public function __construct()
    {
        $this->model = new UsuarioModel();
        $this->usuarioValidate = new UsuarioValidate();
    }
    public function index()
    {
    }

    /**
     * View com formulário para inserir usuários
     *
     * @return void
     */
    public function create()
    {
        return view('create_usuario', ['title' => 'Adicionar usuário']);
    }

    /**
     * View com formulário para editar usuários
     *
     * @return void
     */
    public function edit($id = null)
    {
        $user = $this->model->find($id);
        return view('edit_usuario', ['title' => 'Editar Usuário', 'user' => $user]);
    }

    /**
     * store - Salvar dados
     *
     * @return void
     */
    public function store()
    {
        $this->usuarioValidate->store($this->request);


        $user = $this->model->save([
            'nome' => $this->request->getPost('nome'),
            'email' => $this->request->getPost('email'),
        ]);

        return redirect()->back()->with('success', true);
    }


    /**
     * update
     *
     * @return redirect
     */
    public function update($id = null)
    {
        $validacao = $this->validate([
            'id' => 'required|alpha_numeric',
            'nome' => ['label' => 'Nome Completo', 'rules' => 'required|min_length[3]'],
            'email' => ['label' => 'E-mail', 'rules' => 'required|valid_email|is_unique[usuarios.email,id,{id}]'],
        ]);

        if ($validacao === false) {
            return redirect()->back()->withInput()->with('errors', $this->validator->listErrors());
        }

        if (!empty($this->model->find($this->request->getPost('id')))) {
            $this->model->save([
                'id' => $this->request->getPost('id'),
                'nome' => $this->request->getPost('nome'),
                'email' => $this->request->getPost('email'),
            ]);
        }

        return redirect()->back()->with('success', true);
    }


    /**
     * delete
     *
     * @param  mixed $id
     * @return void
     */
    public function delete($id = null)
    {
        if ($this->model->delete($id)) {
            return redirect()->back()->with('usuario_removido', true);
        }
    }
}
