<?php

namespace App\Http\Controllers;
use App\Message;
use DB;
use Carbon\Carbon;
use Illuminate\Http\Request;

class MessagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

      function  __construct()
     {
       $this->middleware('auth', ['except' => ['create', 'store']]);
     }


    public function index()
    {
        //$messages = DB::table('messages')->get();
        // return view('messages.index', ['messages' => $messages]);
        $messages = Message::all();
        return view('messages.index', compact('messages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('messages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request->all();
        // return $request->input('nombre');
        // PARA USUAR ELEQUENT
        // DB::table('messages')->insert([
        //   'nombre' => $request->input('nombre'),
        //   'email' => $request->input('email'),
        //   'mensaje' => $request->input('mensaje'),
        //   'created_at' => Carbon::now(),
        //   'updated_at' => Carbon::now(),
        //
        // ]); FIN PARA USAR ELOQUENT

        // CON Eloquent
                  // $message =  New Message;
									// $message->nombre=$request->input('nombre');
									// $message->email=$request->input('email');
									// $message->mensaje=$request->input('mensaje');
									// $message->save();
        // FIN CON Eloquent

        // ASIGNACION MASIVA
        Message::create($request->all());
        // FIN ASIGNACION MASIVA
        return redirect()->route('mensajes.create')->with('info','hemos recibido tu mensaje'  );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      // $message = DB::table('messages')->where('id', $id)->first();
      $message = Message::findOrFail($id);
        return view('messages.show', compact('message'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //$message = DB::table('messages')->where('id', $id)->first();
          $message = Message::findOrFail($id);
        return view('messages.edit', compact('message'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // actualizar
        // DB::table('messages')->where('id', $id)->update([
        //   'nombre' => $request->input('nombre'),
        //   'email' => $request->input('email'),
        //   'mensaje' => $request->input('mensaje'),
        //   //'created_at' => Carbon::now(),
        //   'updated_at' => Carbon::now(),
        // ]);
        // CON Eloquent
         Message::findOrFail($id)->update($request->all());
         // FIN CON Eloquent

        //  redireccionar
        return redirect()->route('mensajes.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // DB::table('messages')->where('id', $id)->delete();
        //con Eloquent
        Message::findOrFail($id)->delete();
        // fin con Eloquent
        return redirect()->route('mensajes.index');
    }
}
