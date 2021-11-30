<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UsuarioSeeder extends Seeder
{
    public function run()
    {
        $data = [];
        for ($i=0; $i < 30 ; $i++) {
           $data[]= [
                'nome' => static::faker()->name,
                'email' => static::faker()->email,
           ];
        }

        $this->db->table('usuarios')->insertBatch($data);
    }
}
