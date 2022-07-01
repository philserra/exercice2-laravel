<?php
 
namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GiftsCardController extends Controller
{
    public function show(){
        return view('home');
    }

    public function create(Request $request){

        $prices = htmlspecialchars($request->prices);
        $lastname = htmlspecialchars ($request->lastname);
        $firstname = htmlspecialchars ($request->firstname);
        $date = htmlspecialchars ($request->date);
        $commande = htmlspecialchars ($request->commande);
        $date = date('m-Y');
        $numero = rand(00, 99);
        $commande = $date . ' ' . $numero;

        return view('gifts-card', 
        ['prices' => $prices,
         'lastname' => $lastname,
         'firstname' => $firstname,
         'date' => $date,
         'commande' => $commande ]
    );
}

}  
