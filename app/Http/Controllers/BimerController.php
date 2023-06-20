<?php

namespace App\Http\Controllers;

use App\Models\Bimer;
use App\Models\Fichero;
use App\Models\Rede;
use App\Models\Suscripcione;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

/**
 * Class BimerController
 * @package App\Http\Controllers
 */
class BimerController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bimers = Bimer::all();
        return view('bimer.index', compact('bimers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $bimer = new Bimer();
        return view('bimer.create', compact('bimer'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Bimer::$rules);
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
            'id_suscripcion' => $request->id_suscripcion,
            'id_redes' => $redes->id,
            'id_ficheros' => $fichero->id
        ]);

        $suscripcion = Suscripcione::find($request->id_suscripcion);
        $suscripcion->cantidad = $suscripcion->cantidad + 1;
        $suscripcion->save();

        return redirect()->route('bimers.index')
            ->with('success', 'Bimer created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $bimer = Bimer::find($id);

        return view('bimer.show', compact('bimer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bimer = Bimer::find($id);

        return view('bimer.edit', compact('bimer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Bimer $bimer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bimer $bimer)
    {
        request()->validate(Bimer::$rules);

        $bimer->update($request->all());

        return redirect()->route('bimers.index')
            ->with('success', 'Bimer updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $bimer = Bimer::find($id);
        $fichero = Fichero::where('id', $bimer->id_ficheros)->delete();
        $redes = Rede::where('id', $bimer->id_redes)->delete();
        $suscripcione = Suscripcione::find($bimer->id_suscripcion);

        $suscripcione->cantidad = $suscripcione->cantidad - 1;

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
        $suscripcione->save();
        $bimer->delete();

        return redirect()->route('bimers.index')
            ->with('success', 'Bimer deleted successfully');
    }
}
