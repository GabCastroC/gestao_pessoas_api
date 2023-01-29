<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PessoaController extends Controller{
    public function listarPessoas() {
        $query = 'SELECT * FROM pessoas'; //consulta
        $listaPessoas = DB::select($query);
        return $listaPessoas;
    }

    public function cadastrarPessoa(Request $request){
        $nome = $request->input('nome');
        $cpf = $request->input('cpf');
        $email = $request->input('email');
        $celular = $request->input('celular');
        $script = "INSERT INTO pessoas (nome, cpf, email, celular) VALUES ('$nome', '$cpf', '$email', '$celular')";
        DB::statement($script); //código que vai executado
    }

    public function deletarPessoa(Request $request){
        $id = $request->input('pessoaId');
        $script = "DELETE FROM pessoas WHERE id = $id";
        DB::statement($script);
    }
} 

