<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HistoriaHacker;
use App\Models\TiposHackers;
use App\Models\GruposHackers;

class HackersController extends Controller
{
    //funcion donde se llama todos los elementos del modelo y se retornan a la vista
    public function historia(){
        $historia = HistoriaHacker::all();

        return $historia;
    }

    public function tipos(){
        $tipos = TiposHackers::all();

        return $tipos;
    }

    public function grupos(){
        $grupos = GruposHackers::all();

        return $grupos;
    }

    public function mostrar(){
        return view('index',['historia'=>$this->historia(),'tipos'=>$this->tipos(), 'grupos'=>$this->grupos()]);
    }

    public function nombres(Request $nombre){
        $nombreapi=$nombre->nombre;
        $api = new \GuzzleHttp\Client();
        $response = $api->request('GET','https://api.agify.io?name='.$nombreapi);
        $datos = json_decode($response->getBody()->getContents(), true);
        return view('api',['datos' => $datos]);
    }

}
