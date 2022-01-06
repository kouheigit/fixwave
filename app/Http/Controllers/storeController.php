<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class storeController extends Controller
{
	public function turumaki(Request $request)
        {
                return view('pc.turumaki');
        }
	public function titosedai(Request $request)
	{
		return view('pc.titosedai');
	}
}
