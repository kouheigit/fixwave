<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use Illuminate\Http\Request;

class storeController extends Controller
{
	public function turumaki(Request $request)
	{/*
	日　・・・　0
        月　・・・　1
        火　・・・　2
        水　・・・　3
        木　・・・　4
        金　・・・　5
        土　・・・　6*/
	      $day = new Carbon();
              $value = $day->dayOfWeek;/*曜日番号を取得*/

	     if($value==2){

		     $value="本日は火曜日Yシャツセールデー";

	        }elseif($value==3){

		     $value="本日は水曜日Yシャツセールデー";

		}else{

			$value = null;

	      }	
                return view('pc.turumaki',compact('value'));
	}

	public function titosedai(Request $request)
	{
		/*曜日のロジックは上と同じにするな*/
		return view('pc.titosedai');
	}
}
