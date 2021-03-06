<?php namespace App\Http\Controllers;

class FrontendController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('index');
	}

	public function login()
	{
        if (!isset($_SERVER['HTTP_X_PJAX'])) {
            return 'Простой ответ';
        }
        else {
            return view('site.partials._loginform');
        }
	}

    public function page(){
        if (!isset($_SERVER['HTTP_X_PJAX'])) {
            return 'Простой ответ';
        }
        else {
            return 'PJAX';
        }
    }
}
