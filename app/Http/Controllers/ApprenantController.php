<?php

namespace App\Http\Controllers;
use App\Models\Apprenant;

use Illuminate\Http\Request;

class ApprenantController extends Controller
{
    public function liste()
    {
        return view('apprenant.liste');
    }

    public function add()
    {
        return view('apprenant.add');
    }

    public function enregistrer(Request $request, Apprenant $apprenant)
    {
        $apprenant->matricule = $request->matricule;
        $apprenant->nom = $request->nom;
        $apprenant->prenom = $request->prenom;
        $apprenant->niveau = $request->niveau;
        $apprenant->save();
        if ($apprenant) {
            return redirect('apprenant/liste')->with(['status' => "Apprenant enregistrer avec succes " . $apprenant->matricule]);
        } else {
            return view('enregistrer-apprenant', ['status' => "Echec d'enregistrement"]);
        }
    }
}
