<?php

namespace App\Http\Controllers\Selecao;

use App\Http\Controllers\Controller;
use App\Models\Selecao;
use Illuminate\Http\Request;

class ControleSelecao extends Controller
{
    public function detalheSelecao($id) {

        $selecao = Selecao::where('id', $id)->first();
        $jogadores = $selecao->jogadordaSelecao()->where('selecao_id', $selecao->id)->get();

        return view('acessoSelecao', ['jogadores' => $jogadores, 'selecao' => $selecao]);
    }

    public function delete($id) {

        Selecao::where('id', $id)->delete();

        return redirect()->route('home');
    }

    public function create() {
            return view('registroSelecao');
    }

    public function store(Request $request) {
        $nova_selecao = new Selecao();

        $validate = $request->validate([
            'nome_selecao' => 'string|required',
        ]);

        if($validate){
            $nova_selecao->nome_selecao = $request->nome_selecao;
            $nova_selecao->save();
        }
        else{
            echo 'Erro ao registrar seleção. Tente novamente';
        }

        return redirect()->route('home');
    }
}
