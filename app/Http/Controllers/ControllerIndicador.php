<?php

namespace App\Http\Controllers;

use App\Models\Indicadores;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ControllerIndicador extends Controller
{
    public function verCrud()
    {
        $indicadores = DB::table('indicadores')->orderby('fechaIndicador','DESC')->paginate(10);

        return view('verCrud',['indicadores'=>$indicadores]);
    }

    public function verGrafico(Request $request)
    {
        $desde = $request->input('desde');
        $hasta = $request->input('hasta');

        if ($request->desde != '' || $request->desde != null ) {
            $libra_cobre = DB::table('indicadores')->where('codigoIndicador','LIBRA_COBRE')->where('fechaIndicador','>=',$desde)->where('fechaIndicador','<=',$hasta)->get();
            $euro = DB::table('indicadores')->where('codigoIndicador','EURO')->where('fechaIndicador','>=',$desde)->where('fechaIndicador','<=',$hasta)->get();
            $dolar = DB::table('indicadores')->where('codigoIndicador','DOLAR')->where('fechaIndicador','>=',$desde)->where('fechaIndicador','<=',$hasta)->get();
            $tpm = DB::table('indicadores')->where('codigoIndicador','TPM')->where('fechaIndicador','>=',$desde)->where('fechaIndicador','<=',$hasta)->get();
            $utm = DB::table('indicadores')->where('codigoIndicador','UTM')->where('fechaIndicador','>=',$desde)->where('fechaIndicador','<=',$hasta)->get();
            $uf = DB::table('indicadores')->where('codigoIndicador','UF')->where('fechaIndicador','>=',$desde)->where('fechaIndicador','<=',$hasta)->get();
            $ivp = DB::table('indicadores')->where('codigoIndicador','IVP')->where('fechaIndicador','>=',$desde)->where('fechaIndicador','<=',$hasta)->get();
            $bitcoin = DB::table('indicadores')->where('codigoIndicador','BITCOIN')->where('fechaIndicador','>=',$desde)->where('fechaIndicador','<=',$hasta)->get();
            $ipc = DB::table('indicadores')->where('codigoIndicador','IPC')->where('fechaIndicador','>=',$desde)->where('fechaIndicador','<=',$hasta)->get();
        }else {
            $libra_cobre = DB::table('indicadores')->where('codigoIndicador','LIBRA_COBRE')->get();
            $euro = DB::table('indicadores')->where('codigoIndicador','EURO')->get();
            $dolar = DB::table('indicadores')->where('codigoIndicador','DOLAR')->get();
            $tpm = DB::table('indicadores')->where('codigoIndicador','TPM')->get();
            $utm = DB::table('indicadores')->where('codigoIndicador','UTM')->get();
            $uf = DB::table('indicadores')->where('codigoIndicador','UF')->get();
            $ivp = DB::table('indicadores')->where('codigoIndicador','IVP')->get();
            $bitcoin = DB::table('indicadores')->where('codigoIndicador','BITCOIN')->get();
            $ipc = DB::table('indicadores')->where('codigoIndicador','IPC')->get();
        }

        return view('verGrafico',['libra_cobre'=>$libra_cobre , 'euro'=>$euro , 'dolar'=>$dolar, 'tpm'=>$tpm , 'utm'=>$utm, 'uf'=>$uf , 'ivp'=>$ivp , 'bitcoin'=>$bitcoin , 'ipc'=>$ipc]);
    }

    public function tabla()
    {
        return view('tabla');
    }
    
    public function crearIndicador(Request $request){
        $indicador = new Indicadores();
        //recibir
        $nombreIndicador = $request->input('nombreIndicador');
        $codigoIndicador = $request->input('codigoIndicador');
        $unidadMedidaIndicador = $request->input('unidadMedidaIndicador');
        $valorIndicador = $request->input('valorIndicador');
        $fechaIndicador = $request->input('fechaIndicador');
        $tiempoIndicador = $request->input('tiempoIndicador');
        $origenIndicador = $request->input('origenIndicador');
        //asignar valores
        $indicador->nombreIndicador = $nombreIndicador;
        $indicador->codigoIndicador = $codigoIndicador;
        $indicador->unidadMedidaIndicador = $unidadMedidaIndicador;
        $indicador->valorIndicador = $valorIndicador;
        $indicador->fechaIndicador = $fechaIndicador;
        $indicador->tiempoIndicador = $tiempoIndicador;
        $indicador->origenIndicador = $origenIndicador;
        //Guaradar
        
        $indicador->save();

    }
    public function editarIndicador(Request $request)
    {
        //conseguir usuario identificado
        $indicador = new Indicadores();
        //recoger datos
        $id = $request->input('id');
        $nombreIndicador = $request->input('nombreIndicador');
        $codigoIndicador = $request->input('codigoIndicador');
        $unidadMedidaIndicador = $request->input('unidadMedidaIndicador');
        $valorIndicador = $request->input('valorIndicador');
        $fechaIndicador = $request->input('fechaIndicador');
        $tiempoIndicador = $request->input('tiempoIndicador');
        $origenIndicador = $request->input('origenIndicador');
        //asignar valores
        $indicador->id = $id;
        $indicador->nombreIndicador = $nombreIndicador;
        $indicador->codigoIndicador = $codigoIndicador;
        $indicador->unidadMedidaIndicador = $unidadMedidaIndicador;
        $indicador->valorIndicador = $valorIndicador;
        $indicador->fechaIndicador = $fechaIndicador;
        $indicador->tiempoIndicador = $tiempoIndicador;
        $indicador->origenIndicador = $origenIndicador;
        //ejecutar
        $affected = DB::table('indicadores')
              ->where('id', $id)
              ->update(['nombreIndicador' => $nombreIndicador, 'codigoIndicador' => $codigoIndicador , 'unidadMedidaIndicador'=>$unidadMedidaIndicador, 'valorIndicador'=> $valorIndicador, 'fechaIndicador'=> $fechaIndicador, 'tiempoIndicador'=>$tiempoIndicador, 'origenIndicador'=>$origenIndicador ]);
        
        
    }

    public function eliminarIndicador(Request $request)
    {
        $id = $request->input('id');
        $deleted = DB::table('indicadores')->where('id', '=', $id)->delete();
    }

    public function verIndicador(Request $request)
    {
        // $term = $request->get('term');
        // $querys = Indicadores::where('id','LIKE','%'.$term.'%')->get();
        // $data = [];
        // foreach ($querys as $query) {
        //     $data[] = [
        //      'label' => $query->email,
        //     ];

        //     }
        //     print_r($data) ;
        //     die;
        //     return $data;
        $indicadores = DB::table('indicadores')->orderby('fechaIndicador','DESC')->paginate(10);

        $id = $request->input('id');
        $buscador = Indicadores::find($id);
        return view('verCrud',['indicadores'=>$indicadores, 'buscador'=>$buscador]);

    }
}
