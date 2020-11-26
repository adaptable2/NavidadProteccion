<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imagen;
use App\Remitente;
use App\Destinatario;
use App\Mail\SendUserCard;
use Illuminate\Support\Facades\Mail;


class GetImage extends Controller
{
    public function ReceiveImage(Request $request)
    {

		// $remitente = new Remitente;
		// $remitente->nombre = $request->get('name');
		// $remitente->correo = $request->get('mail');
		// $remitente->mensaje = $request->get('message');
		// $remitente->save();		

		// $destinatario = new Destinatario;
		// $destinatario->correo_remitente = $remitente->correo;
		// $destinatario->nombre_destinatario = $request->get('nombreDestinatario');
		// $destinatario->correo_destinatario = $request->get('mailDestinatario');
        // $destinatario->save();


        // $img = new Imagen;
		// $img->correo_remitente = $remitente->correo;
        //$img->path = $request->get('img');
        // $img->save();

		Mail::to("kmilo-gutierrez@hotmail.com")->send(new SendUserCard($request->get('img')));


        return response()->json([
			'data' => $request->get('img')
        ]);
    }
}
