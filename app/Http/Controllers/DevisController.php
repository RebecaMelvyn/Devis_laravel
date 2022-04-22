<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDevisRequest;
use App\Models\Mission;
use FPDF;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class DevisController extends Controller
{
    public function create ()
    {
        return view("devis.create");
    }

    public function store (StoreDevisRequest $request, Mission $mission)
    {
        $input = $request->only(['title', 'ref']);
        $githubUser = Auth::user()->id;
        $mission = Mission::create(
            ['client_id' => $githubUser],
            [$input]
        );
        $mission->update($input);
        return $request->user()->downloadInvoice($mission);
    }

    public function show(){
        //
    }

    public function createPdf(Mission $mission)
    {
    header("Content-Type: text/html;charset=UTF-8");
    // --- La bibliotheque
    //require_once("../../../fpdf/fpdf.php");
    // --- Instancie un objet fpdf
    $pdf = new FPDF();
    // --- Cree une page
    $pdf->AddPage();
    $pdf->SetFont('Arial','B',16);
    $pdf->SetXY(10, 5);
    $pdf->Write(10,'Mon pdf!');
    // --- Stocke le PDF sur le disque
    $pdf->Output(".pdf");
    }
}
