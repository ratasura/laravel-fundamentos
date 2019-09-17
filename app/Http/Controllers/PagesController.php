<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; // clase para request
use App\Http\Requests\CreateMessageRequest;

class PagesController extends Controller
{

  //PARA USSAR EL REQUEST EN EL CONSTRUCTOR
  // protected $request;
  // public function __construct(Request $request){
  //   $this->request = $request;
  // }
  // fin
  //
  // CPNSTRUCTOR PARA USAR EL Middleware:




    public function home(){
      return view('home');
    }

    public function contact(){
      return view('contactos');
    }

    public function saludo($nombre = 'Invitado'){
      $html = "<h2>contenido HTML</h2>"; // suponiendo que se ingresa por formuario
      $script = "<script>alert('Problema XSS- Cross Site Scripting !!')</script>" ; // suponiendo que se ingresa por formuario
      $consolas = [
          "Play 4",
          "Xbox One",
          "Wii"
        ];
        return view('saludo', compact('nombre','html','script','consolas'));
    }

  //   public function mensajes(CreateMessageRequest $request){
  //   //   if ($request->has('nombre')) {
  //   //     return 'si tiene nombre, es '. $request->input('nombre');
  //   //   }
  //   //   return 'no tiene nombre';
  //   // }
  //   // para validar
  //   // $this->validate($request, [
  //   //  'nombre' =>'required',
  //     // 'email' => 'required|email',
  //     // 'mensaje' => 'required|min:5'
  //   // ]);
  //   // ya se pone las validaciones en la clase requeest CreateMessageRequest
  //     // return $request->all();
  //     // RESPONSES :
  //     $data = $request->all();
  //     // return redirect('contactanos')->with('info', 'tu mensaje ha sido enviado'); // redirecciona
  //     // envia y vuelve a la url anterior
  //     return back()->with('info', 'tu mensaje ha sido enviado');//
  // }

}
