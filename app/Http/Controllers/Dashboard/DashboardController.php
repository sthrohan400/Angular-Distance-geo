<?php 

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
class DashboardController extends Controller{

	public function __construct(){
		//$this->middleware('auth');
		$this->middleware('auth');
	}

	public function index(){
		return view('backend.dashboard.index');
	}

	

}