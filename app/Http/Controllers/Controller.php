<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Configuration;
use Carbon\Carbon;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function App(){

        $defaultPaymentdate = null();
        $payementNotif = "";

        $currenDate = Carbon::now()->day();

        $defaultPaymentdateQuerry = Configuration::where('type' , 'Date_Paiement')->first();

        if($defaultPaymentdateQuerry){
            $defaultPaymentdate = $defaultPaymentdateQuerry->value;
            $convertPayementDate = intval($defaultPaymentdate);
            if($currenDate < $convertPayementDate){
                $payementNotif = "le prochain Paiement avoir lieu le".$defaultPaymentdate."de ce mois";
            }
            else{
                $nextMonth = Carbon::now()->addMonth();
                $nextMonthName = $nextMonth->format('F');

                $payementNotif = "le prochain Paiement avoir lieu le".$defaultPaymentdate."de mois de".$nextMonthName;
            }
        }
    }
}
