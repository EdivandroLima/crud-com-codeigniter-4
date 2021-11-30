<?php

namespace App\Controllers;

use App\Models\UsuarioModel;
use App\Controllers\BaseController;

class DashboardController extends BaseController
{
    public function index()
    {
        $model = new UsuarioModel();

        $data['title'] = 'Página inicial';
        $data['users'] = $model->orderBy('created_date', 'desc')->paginate(10);
        $data['pager'] = $model->pager;

        return view('home', $data);
    }
    
}
