<?php

namespace App\Http\Controllers;

use App\Jobs\SendTag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Queue;


class UplistaController extends Controller

{
    protected $tag;

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
        return view('vendor/adminlte/uplista');
    }

    public function pegaArquivo(Request $request){
    $file = $request->file('arquivo');
        $this->tag = $request->input('tag');

        $handle = fopen($file->getRealPath(), "r");
        $header = fgetcsv($handle, 1000, ",");


        
        while ($row = fgetcsv($handle, 1000, ",")) {
            $registro = array_combine($header, $row);

            $identity = $registro['identity'];

            $profileData = array(
                "Email" => $identity
            );

            $eventData = array(
                "name" => $this->tag
            );
    
        //Procurar TAGs ENTRE
        $data = array(
            "d" => [
                array(
                    "identity" => $identity,
                    "type" => "profile",
                    "profileData" => 
                            $profileData
                ), array(
                    "identity" => $identity,
                    "type" => "event",
                    "evtName" => "Tag",
                        "evtData" => 
                            $eventData
                    )
                ]            
        ); 
        //Dispatch
        SendTag::dispatch($data);
        }
        fclose($handle);
        
        return view('vendor/adminlte/uplista' );
    }
}
