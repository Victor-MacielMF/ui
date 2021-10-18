<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Endereco;
use App\Models\User;
use Illuminate\Http\Request;

class Alter extends Controller
{

    public function index()
    {
        $user = auth()->user();
        $enderecos = $user->enderecos;
        return view('usuario.view', ['user'=>$user, 'enderecos' => $enderecos]);
    }

    public function destroy($id){
        Endereco::findOrFail($id)->delete();
        return redirect('/meus-dados')->with('msg','Endereço excluído com sucesso!');
    }

    public function updateAddress(Request $request){
        $data = $request->all();
        
        Endereco::findOrFail($request->id)->update($data);
        return redirect('/meus-dados')->with('msg', 'Evento editado com sucesso!');

    }
}
