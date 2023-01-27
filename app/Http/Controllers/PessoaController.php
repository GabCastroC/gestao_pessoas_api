<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class PessoaController extends Controller{
    public function listarPessoas() {
        $query = 'SELECT * FROM pessoas';
        $listaPessoas = DB::select($query);
        return $listaPessoas;

    }
} 
