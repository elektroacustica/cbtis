<?php

class HomeController extends BaseController {

	public function index()
	{
		return View::make('index');
	}

	public function login()
	{
		$data = [
			'usuario' => Input::get('usuario'),
			'password' => Input::get('password')
		];

		if (Auth::attempt($data)) // Como segundo par�metro pas�mos el checkbox para sabes si queremos recordar la contrase�a
		{
			// Si nuestros datos son correctos mostramos la p�gina de inicio
			return Redirect::route('root');
		}
		// En caso de que la autenticaci�n haya fallado manda un mensaje al formulario de login y tambi�n regresamos los valores enviados con withInput().
		return Redirect::route('root')
			->with('mensaje_error', 'Tus datos son incorrectos')
			->withInput();
	}

	public function logout()
	{
		Auth::logout();
		return Redirect::route('root');
	}

}
