<?php

namespace App\Http\Controllers;

use App\Models\Plane;
use App\Models\Suscripcione;
use App\Models\Bimer;
use App\Models\Fichero;
use App\Models\Rede;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

/**
 * Class SuscripcioneController
 * @package App\Http\Controllers
 */
class SuscripcioneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $suscripciones = Suscripcione::paginate();
        return view('suscripcione.index', compact('suscripciones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $suscripcione = new Suscripcione();
        return view('suscripcione.create', compact('suscripcione'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //request()->validate(Suscripcione::$rules);
        $idPlan = $request->id_plan;

        $plan = Plane::find($idPlan);
        $nombrePlan = $plan->nombre;


        $cantidad = $request->cantidad;
        $precio_neto = $plan->precio;
        $descuento = $plan->descuento;

        $cantidad = $request->cantidad;

        $precio_real = $precio_neto * $cantidad - $precio_neto * $descuento * $cantidad;

        $inicio_en = Carbon::parse($request->inicio_en);
        $finaliza_en = $inicio_en->copy()->addYear();

        $suscripcione = Suscripcione::create(array_merge($request->all(), [
            'precio_real' => $precio_real,
            'precio_neto' => $precio_neto,
            'inicio_en' => $inicio_en,
            'descuento' => $descuento,
            'finaliza_en' => $finaliza_en,
            'id_cliente' => $request->id_cliente
        ]));
        //$suscripcione = Suscripcione::create($request->all());


        for ($i = 0; $i < $request->cantidad; $i++) {
            // Crear un nuevo registro en la tabla redes
            $redes = Rede::create([
                // Asignar los valores correspondientes para los campos en la tabla redes
                'facebook' => 'vacio', 'linkedin' => 'vacio', 'twitter' => 'vacio', 'youtube' => 'vacio', 'tiktok' => 'vacio', 'whatsapp' => 'vacio', 'indeed' => 'vacio', 'instagram' => 'vacio', 'pagina_web' => 'vacio'
            ]);

            // Crear un nuevo registro en la tabla ficheros
            $fichero = Fichero::create([
                // Asignar los valores correspondientes para los campos en la tabla ficheros
                'foto_perfil' => 'vacio', 'banner' => 'vacio', 'foto_1' => 'vacio', 'foto_2' => 'vacio', 'foto_3' => 'vacio', 'foto_4' => 'vacio', 'foto_5' => 'vacio', 'qr' => 'vacio', 'pdf' => 'vacio', 'video_link' => 'vacio'
            ]);

            // Crear un nuevo registro en la tabla bimers y establecer la relación con suscripciones, redes y ficheros
            $bimer = Bimer::create([
                // Asignar los valores correspondientes para los campos en la tabla bimers
                'id_suscripcion' => $suscripcione->id,
                'id_redes' => $redes->id,
                'id_ficheros' => $fichero->id
            ]);
        }

        return redirect()->route('suscripciones.index')
            ->with('success', 'Suscripcione created successfully.');
    }





    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $suscripcione = Suscripcione::find($id);

        return view('suscripcione.show', compact('suscripcione'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $suscripcione = Suscripcione::find($id);

        return view('suscripcione.edit', compact('suscripcione'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Suscripcione $suscripcione
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Suscripcione $suscripcione)
    {
        //request()->validate(Suscripcione::$rules);
        $idPlan = $request->id_plan;
        $plan = Plane::find($idPlan);

        $cantidad = $request->cantidad;
        $precio_neto = $plan->precio;
        $descuento = $plan->descuento;
        $parts = explode('@', Auth::user()->email);
        $domain = end($parts);
        $domainParts = explode('.', $domain);
        $emailProvider = reset($domainParts);
        if(($emailProvider === 'binmotion')){
            $precio_neto=0;
        }

        $cantidad = $request->cantidad;

        $precio_real = $precio_neto * $cantidad - $precio_neto * $descuento * $cantidad;

        $inicio_en = Carbon::parse($request->inicio_en); // Fecha actual
        $finaliza_en = $inicio_en->copy()->addYear(); // Suma un año a partir de la fecha actual

        $suscripcione->id_plan = $idPlan;
        $suscripcione->precio_real = $precio_real;
        $suscripcione->precio_neto = $precio_neto;
        $suscripcione->inicio_en = $inicio_en;
        $suscripcione->descuento = $descuento;
        $suscripcione->finaliza_en = $finaliza_en;
        $suscripcione->id_cliente = $request->id_cliente;
        $suscripcione->save();
        //$suscripcione->update($request->all());

        return redirect()->route('suscripciones.index')
            ->with('success', 'Suscripcione updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $suscripcione = Suscripcione::find($id);
        $bimers = Bimer::where('id_suscripcion', $id)->get();
        foreach ($bimers as $bimer) {
            Fichero::where('id', $bimer->id_ficheros)->delete();
            Rede::where('id', $bimer->id_redes)->delete();
            $bimer->delete();
            $user = User::find($suscripcione->id_cliente);

            // Inicializar la sesión cURL
            $ch = curl_init();

            // Establecer la URL de destino
            $url = env('URL_BIMER') . '/ficher/' . $user->email . '/' . $id;

            // Configurar las opciones de la solicitud cURL
            curl_setopt($ch, CURLOPT_URL, $url);

            // Ejecutar la solicitud cURL (GET)
            curl_exec($ch);

            // Cerrar la sesión cURL
            curl_close($ch);
        }
        $suscripcione->delete();

        return redirect()->route('suscripciones.index')
            ->with('success', 'Suscripcione deleted successfully');
    }
}
