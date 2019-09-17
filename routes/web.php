<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//1*****************************************************************
// Route::get('/', function () {
//     //return view('welcome');
//     return 'hola desde la raiz ';
// });*****************************************************************
// 2*****************************************************************
// Route::get('/', function(){
// echo "<a href='contactanos'>Contacto</a><br>";
// echo "<a href='contactanos'>Contacto</a><br>";
// echo "<a href='contactanos'>Contacto</a><br>";
// echo "<a href='contactanos'>Contacto</a><br>";
// });
// *****************************************************************
// 3*****************************************************************
// Route::get('/', ['as' => 'home', function(){
//   return view('home');
// }]);

// duplicamos ruta para mostrar ejemplo del controlador
  Route::get('/', ['as' => 'home', 'uses' => 'PagesController@home']);

// duplicamos ruta para mostrar ejemplo del controlador
// Route::get('/contactanos', [ 'as' => 'contactos', function(){
//   return view('contactos');
// }]);
// Route::get('/contactanos', [ 'as' => 'contactos', 'uses' => 'PagesController@contact']);


//1********************************************************************************************
// Route::get('saludos/{nombre?}', function ($nombre = 'Invitado'){
//   return 'hola ' .  $nombre;
// });
// ********************************************************************************************
// 2********************************************************************************************
// // duplicamos ruta para mostrar ejemplo del controlador
// Route::get('saludos/{nombre?}', ['as'=> 'saludos', function($nombre = 'Invitado'){
//   $html = "<h2>contenido HTML</h2>"; // suponiendo que se ingresa por formuario
//   $script = "<script>alert('Problema XSS- Cross Site Scripting !!')</script>" ; // suponiendo que se ingresa por formuario
//   // para hacer un loop:
//   $consolas = [
//     "Play 4",
//     "Xbox One",
//     "Wii"
//   ];
//   // return view('saludo', ['nombre' => $nombre]);
//   // return view('saludo')->with(['nombre' => $nombre]);
//   return view('saludo', compact('nombre', 'html', 'script','consolas'));
// }]);
  Route::get('saludos/{nombre?}', ['as'=> 'saludos', 'uses'=>'PagesController@saludo']);

// ruta para procesar el formukario
// Route::post('contacto', 'PagesController@mensajes');

//******************************RUTAS DE MENSAJES*****************************************//
//******************************RUTAS DOCUMENTADAS PARA UTILIZAR RESORUCE
// Route::get('mensajes', ['as'=>'messages.index', 'uses' => 'MessagesController@index'] );
// Route::get('mensajes/create', ['as'=>'messages.create', 'uses' => 'MessagesController@create'] );
// Route::post('mensajes', ['as'=>'messages.store', 'uses' => 'MessagesController@store'] );
// Route::get('mensajes/{id}/edit', ['as'=>'messages.edit', 'uses' => 'MessagesController@edit'] );
// Route::put('mensajes/{id}', ['as'=>'messages.update', 'uses' => 'MessagesController@update'] );
// Route::get('mensajes/{id}', ['as'=>'messages.show', 'uses' => 'MessagesController@show'] );
// Route::delete('mensajes/{id}', ['as'=>'messages.destroy', 'uses' => 'MessagesController@destroy'] );
//****************************** FIN RUTAS DOCUMENTADAS PARA UTILIZAR RESORUCE*****************//

// utilizando route resource*************************
    Route::resource('mensajes', 'MessagesController');
//FIN  utilizando route resource*************************

//ruta para el login
    Route::get('login', 'Auth\LoginController@showLoginForm');
    Route::post('login', 'Auth\LoginController@login');
//FIN   ruta para el login

//ruta para el logout
    Route::get('logout', 'Auth\LoginController@logout');
//FIN   ruta para el logout

//ruta tempora para cargar usuarios a la bbdd
    // Route::get('test', function(){
    //   $user = new App\User;
    //   $user->name = "Luis mario";
    //   $user->email = "tiburcio2409@gmail.com";
    //   $user->password = bcrypt("123123");
    //   $user->save();
    //   return $user;
    // });
//fin ruta tempora para cargar usuarios a la bbdd
