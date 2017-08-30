<?php
namespace TecnoAgenda\Http\Controllers;

class AgendaController extends Controller{
    
    function index(){
        return view('agenda');
    }
}
