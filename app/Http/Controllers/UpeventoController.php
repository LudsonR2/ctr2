<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class UpeventoController extends Controller
{
    protected $evento;
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('vendor/adminlte/upevento');
    }

    public function pegaEvento(Request $request){
        $file = $request->file('arquivo');
        $this->evento = $request->input('evento');
        
        $handle = fopen($file->getRealPath(), "r");
        $header = fgetcsv($handle, 1000, ",");

        while ($row = fgetcsv($handle, 1000, ",")) {
            $registro = array_combine($header, $row);
           
            $itemId = $registro['id'];
            $identity = $registro['identity'];
            $preco = $registro['price']; 
            
            $eventData = array(
                "Items|item_id" => $itemId,
                "Items|item_name" => $this->evento,        
                "Items|price" => $preco,
            );

        
       
        //Procurar TAGs ENTRE
        $data = array(
            "d" => [
                    array(
                        "identity" => $identity,
                        "type" => "event",
                        "evtName" => "Charged",
                            "evtData" => 
                                $eventData
                        )
                    ]             
        ); 

        $response = Http::withOptions(["verify" => false])
        ->withHeaders([
            'Authorization' => 'Bearer ' . config('token'),
            'X-CleverTap-Account-Id' => '8RZ-RK8-W66Z',
            'X-CleverTap-Passcode' => 'SOK-IWW-YEUL',
            'Content-Type' => 'application/json'])
        ->post('https://us1.api.clevertap.com/1/upload', $data);
        }

        fclose($handle);
        return view('vendor/adminlte/upevento', compact('response') );
    }
}
