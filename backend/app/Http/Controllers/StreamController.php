<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StreamController extends Controller
{
    public function show($id)
    {
        // Exibir o stream ao vivo com base no ID
        return view('stream.show', ['streamId' => $id]);
    }

    public function subscribe(Request $request)
    {
        // Processar a assinatura e o pagamento
        $user = auth()->user();
        // Processar pagamento aqui...
        return response()->json(['status' => 'success']);
    }
}
