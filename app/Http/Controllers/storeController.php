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
	/* いじったディレクトリ一覧→app config resources routes routes  */
	     $day = new Carbon();
             $days = $day->toDateTimeString();
             $value = $day->dayOfWeek;/*曜日番号を取得*/
	     if($value==2){
                     //火曜日
		     $value=2;

	        }elseif($value==3){
                     //水曜日
		     $value=3;

		}else{

			$value = null;

		}

	     $day_2 = new Carbon("2023-7-17");

	     if($day_2 > $days){
		     $day = 1;
	     }else{
                $day = 0;
	     }

                return view('pc.turumaki',compact('value','day'));
	}

	public function titosedai(Request $request)
	{
	     $day = new Carbon();
             $days = $day->toDateTimeString();
             $value = $day->dayOfWeek;/*曜日番号を取得*/
             if($value==4){
                     //木曜日
                     $value=4;

                }elseif($value==5){
                     //金曜日
                     $value=5;

                }else{

                        $value = null;

		}
	       $day_2 = new Carbon("2023-7-17");

                if($day_2 > $days){
                    $day = 1;
                }else{
                  $day = 0;
               }

		return view('pc.titosedai',compact('value','day'));
	}

	public function turusmart(Request $request)
	{    
	     $day = new Carbon();
             $days = $day->toDateTimeString();
             $value = $day->dayOfWeek;/*曜日番号を取得*/
	    
	     if($value==2){
                     //火曜日
                     $value=2;

                }elseif($value==3){
                     //水曜日
                     $value=3;

                }else{

                        $value = null;

		}
	       
	         $day_2 = new Carbon("2023-7-17");

                 if($day_2 > $days){
                    $day = 1;
                 }else{
                    $day = 0;
                 }
                return view('pc.turusmart',compact('value','day'));


		//return view('pc.turusmart');
	}
	public function titosesmart(Request $request)
	{
	    
	     $day = new Carbon();
             $days = $day->toDateTimeString();
	     $value = $day->dayOfWeek;/*曜日番号を取得*/
	    
             if($value==4){
                     //木曜日
                     $value=4;

                }elseif($value==5){
                     //金曜日
                     $value=5;

                }else{

                        $value = null;

		}
	     
	         $day_2 = new Carbon("2023-7-17");

                 if($day_2 > $days){
                     $day = 1;
                 }else{
                     $day = 0;
                 }
                /*曜日のロジックは上と同じにするな*/
		return view('pc.titosesmart',compact('value','day'));
	}
}
