<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller {

    private $model;

    function __construct() {
        $this->model = new User();
    }

    public function setData(Request $request) {
        $data = [
            'name' => $request['name'],
            'email' => $request['email'],
            'tipo' => $request['tipo'],
            'password' => bcrypt($request['password']),
        ];
        return $data;
    }

    public function updateSenha(Request $request, $id) {
        if ($request['password'] != $request['password_confirmation']) {
            return redirect()->back()->with('error', 'Os passwords não são iguais');
        } else {
            $this->model->updateSemModel($id, $this->setData($request));
            return redirect('/home')->with('success', 'Senha redefinida com sucesso');
        }
    }

    public function setSenha($email, $password) {
        $user = $this->model->getUserEmail($email);
        $password = str_replace('jumanjo','/',$password);
        if ($user->password == $password) {
            return view('users.setsenha', compact('user'));
        } else {
            return view('users.setsenha');
        }
    }
    public function emailSend() {
        return view('users.emailsend');
    }

    public function ressetSenha(Request $request) {
        //Variaveis de POST, Alterar somente se necessário 
        //====================================================
        $email = $request['email'];
        $falha=true;
        $user = $this->model->getUserEmail($email);
        if ($user != null) {
            $nome = $user->name;
            $email = $user->email;
            $mensagem = '<h1>Recuperação de senha</h1>';
            $mensagem .= '<b>Copie o link abaixo no navegador para recuperar sua senha.</p>';
            $mensagem .= '<br>'.url('/').'/users/setsenha/' . $user->email . '/' . str_replace('/','jumanjo', $user->password);
//              $mensagem = url('/').'/users/setsenha/' . $user->email . '/' . str_replace('/','jumanjo',$user->password);
            //====================================================
            //REMETENTE --> ESTE EMAIL TEM QUE SER VALIDO DO DOMINIO
            //==================================================== 
            $email_remetente = "fabricio@fabricioweb.net"; // deve ser uma conta de email do seu dominio 
            //====================================================
            //Configurações do email, ajustar conforme necessidade
            //==================================================== 
            $email_destinatario = $user->email; // pode ser qualquer email que receberá as mensagens
            $email_reply = "fabricio@fabricioweb.net";
            $email_assunto = "Contato formmail"; // Este será o assunto da mensagem
            //====================================================
            //Monta o Corpo da Mensagem
            //====================================================
            $email_conteudo = "Nome = $nome \n";
            $email_conteudo .= "Email = $email \n";
            $email_conteudo .= "Mensagem = $mensagem \n";
            //====================================================
            //Seta os Headers (Alterar somente caso necessario) 
            //==================================================== 
            $email_headers = implode("\n", array("From: $email_remetente", "Reply-To: $email_reply", "Subject: $email_assunto", "Return-Path: $email_remetente", "MIME-Version: 1.0", "X-Priority: 3", "Content-Type: text/html; charset=UTF-8"));
            //====================================================
            //Enviando o email 
            //==================================================== 
            if (mail($email_destinatario, 'Recuperação de Senha', $mensagem, $email_headers)) {
                return view('users.senhasend');
            } else {
                $falha = true;
                return view('users.senhasend', compact('falha'));
            }
        }
        else{
            return view('users.senhasend', compact('falha'));
        }
    }

    public function index() {
        $users = $this->model->getAllUsers();
        return view('users.index', compact('users'));
    }

    public function create() {
        return view('users.registerautor');
    }

    public function createAdmin() {
        return view('users.register');
    }

    public function store(Request $request) {
        if ($request['password'] != $request['password_confirmation']) {
            return redirect()->back()->with('error', 'Os passwords não são iguais');
        } else {
            $this->model->store($this->setData($request));
            return redirect('/admin/users')->with('success', 'Usuário adicionado');
        }
    }

    public function storeGoogle($email, $nome) {
        //Teste do login do google
        dd($nome, $email);
        $this->model->store(['name' => $nome, 'email' => $email, 'tipo' => 'autor']);
        return redirect('/google/' . $email . '/' . $nome);
    }

    public function mostrarLoginGoogle() {
        return view('users.google');
    }

    public function show($id) {
        
    }

    public function loginGoogle($email, $nome) {
        $user = $this->model->getUserEmail($email);
        if ($user != null && Auth::loginUsingId($user->id)) {
            return redirect('/home');
        } else {
            return redirect('/users/creategoogle/' . $email . '/' . $nome);
        }
    }

    public function edit($id) {
        $user = $this->model->getUser($id);
        return view('users.edit', compact('user'));
    }

    public function editautor($id) {
        $user = $this->model->getUser($id);
        return view('users.editautor', compact('user'));
    }

    public function update(Request $request, $id) {
        if ($request['password'] != $request['password_confirmation']) {
            return redirect()->back()->with('error', 'Os passwords não são iguais');
        } else {
            $this->model->updateSemModel($id, $this->setData($request));
            return redirect('/admin/users')->with('success', 'Usuário alterado com sucesso');
        }
    }

    public function updateautor(Request $request, $id) {
        if ($request['password'] != $request['password_confirmation']) {
            return redirect()->back()->with('error', 'Os passwords não são iguais');
        } else {
            $this->model->updateSemModel($id, $this->setData($request));
            return redirect('/home')->with('success', 'Usuário alterado com sucesso');
        }
    }

    public function destroy($id) {
        $this->model->remove($id);
        return redirect('/admin/users')->with('success', 'Usuário eliminado');
    }

}
