<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UIComponents;
class UIController extends Controller
{
    //
    public function index(){
        return UIComponents::all();
    }
    public function listaUI(){
        $uicomponenets=UIComponents::all();
        return view('uicomponents.lista')->with(['uis'=>$uicomponenets]);
    }

    public function vistaagregarui(){
        return view('uicomponents.agregar');
    }
    public function agregarui(Request $request){
        $ui= new UIComponents();
        $ui->nombre=$request->nombre;
        $ui->template=$request->template;
        $ui->descripcion=$request->descripcion;
        $ui->save();
        return redirect('/');
    }//agregarui
}
