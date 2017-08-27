<?php
namespace TecnoAgenda\Http\Controllers;

class AgendaController extends Controller{
    
    function index(){
        return view('layout');
    }

    function cadastro(){
        return view('cadastros.cadastro');
    }
}
