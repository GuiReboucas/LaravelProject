<?php

namespace App\Http\Controllers;

use App\Models\Jogo;
use Illuminate\Http\Request;

class JogosController extends Controller
{
    public function index() {
        $jogos = Jogo::all();
        return view('jogos/index', compact('jogos') );
    }

    public function create() {
        return view('jogos/create');
    }

    public function store(Request $request) {
        Jogo::create($request -> all());
        return redirect() -> route('jogos-index');
    }

    public function show($id) {
        $jogos = Jogo::findorfail($id);
        return view('jogos/show', compact('jogos'));
    }

    public function edit($id) {
        $jogos = Jogo::where('id', $id)->first();

        if (!empty($jogos)) {
            return view('jogos/edit', ['jogos' => $jogos]);
        }else {
            return redirect() -> route('jogos-index');
        }
    }

    public function update(Request $request, $id) {
        $data = [
            'nome' => $request->nome,
            'gênero' => $request->gênero,
            'ano_de_lançamento' => $request->ano_de_lançamento,
            'valor' => $request->valor,
        ];

        Jogo::where('id', $id)->update($data);
        return redirect() -> route('jogos-index');
    }

    public function destroy($id) {
        Jogo::where('id', $id)->delete();
        return redirect() -> route('jogos-index');
    }
}
