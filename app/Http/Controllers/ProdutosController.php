<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutosController extends Controller
{
    public function index() {

        $produtos = Produto::all();
        // $produto = new Produto();
        // $produto->nompro = "Teclado";
        // $produto->estpro = 120;
        // $produto->save();

        return view('produtos.index', compact('produtos'));
    }

    public function add() {
        $produto = new Produto();
        return view('produtos.add', compact('produto'));
    }

    public function store(Request $request) {

        $produto = new Produto();

        if($request->get('codpro') == null) {
            $produto->nompro = $request->get("nompro");
            $produto->estpro = $request->get("estpro");
            $produto->save();

            return redirect()->route('lista-produtos');
        } else {
            $produto = Produto::find($request->get('codpro'));
            $produto->nompro = $request->get("nompro");
            $produto->estpro = $request->get("estpro");
            $produto->save();
        }

        $produto->nompro = $request->get("nompro");
        $produto->estpro = $request->get("estpro");
        $produto->save();

        return redirect()->route('lista-produtos');
    }

    public function destroy(Request $request) {
        $produto = Produto::find($request->get('codpro'));
        $produto->delete();
        return redirect()->route('lista-produtos');
    }

    public function edit(Request $request) {
        $produto = Produto::find($request->get('codpro'));
        return view('produtos.add', compact('produto'));
    }

}
