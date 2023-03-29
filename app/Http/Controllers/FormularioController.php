<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Formulario;

/**
 * Class FormularioController
 * @package App\Http\Controllers
 */
class FormularioController extends Controller
{
    public function showForm()
    {
        return view('solicitud');
    }


    public function submitForm(Request $request)
{
    $nombre = $request->input('nombre');
    $email = $request->input('email');
    $numero = $request->input('numero');
    $puesto = $request->input('puesto');
    // Aquí puedes hacer lo que quieras con los datos del formulario, como guardarlos en la base de datos.

    return redirect('/solicitud')->with('success', 'Form submitted successfully!');
}
}
