<?php

namespace App\Http\Controllers\Torneio;

use App\Http\Controllers\Controller;
use App\Models\Selecao;
use App\Models\Torneio;
use Illuminate\Http\Request;

class ControleTorneio extends Controller
{

    public function index(){

        //Tabela time_torneio
        $torneios  = Torneio::all();

        //select com todas as seleções do banco
        $selecoes = Selecao::all();

        //Envia os dois objetos para a pagina 'home'
        return view('home', ['torneios' => $torneios, 'selecoes' => $selecoes]);

    }

    public function create(){
        //redireciona para view
        return view('/criartorneio');
    }

    public function store(Request $request){

        $torneio = new Torneio;

        $validate = $request->validate([
            'nome_torneio' => 'required',
            'pais' => 'required'
        ]);
        //valido os dados

        if($validate){  //se validade

            $torneio->nome_torneio = $request->nome_torneio;
            $torneio->pais_torneio = $request->pais;
            $torneio->save(); //salvo os campos da tabela do banco, com os dados que trouxe da request
            $msg = "Torneio criado com sucesso";

            return redirect()->route('acessoTorneio', ['id' => $torneio->id]);
        }else{
            $msg = "Erro!";
            return redirect()->route('home', ['msg' => $msg]);
        }

    }

    public function detalheTorneio($torneioId){

        //Detalhe dados do torneio em questão, como por exemplo os times incritos

        $torneio = Torneio::where('id', $torneioId)->first();
        //dentro do model Torneio, pegue o primeiro registro onde a coluna 'id' é igual a variavel $torneioId

        $times = $torneio->equipes()->get();
        //Com o id do torneio em questão, vá no método equipes, já com a relação declarada no model Torneio, e obtenha os dados

        return view('torneio', [
            'torneio' => $torneio,
            'equipes' => $times
            ]);
        // Retorne para a view Torneio, o id do torneio em questão e seus times
    }

    public function delete($id_torneio){

        //Seleciono o torneio pelo ID
        $torneio = Torneio::where('id', $id_torneio)->first();

        //Se o torneio for encontrado
        if($torneio){
            //Pegue os times inscritos no torneio(com o id do torneio), através de um relacionamento
            $times = $torneio->equipes;
            //Para cada time inscrito no torneio
            foreach($times as $time){
                //Acesse os jogadores registrados no time(com o id do time), através de um relacionamento
                $jogadores = $time->jogadores;

                //para cada jogador presente no time, com o id do time(que por sua vez tem o id do torneio)
                foreach($jogadores as $jogador){
                    //exclua da tabela  Player
                    $jogador->delete();
                }
                //Exclua o time da tabela Equipes
                $time->delete();
            }
            //Exclua o torneio da tabela Torneios
            $torneio->delete();

        }

        return redirect()->route('home');
        }


}
