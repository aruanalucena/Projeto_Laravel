<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\filme;

class FilmesController extends Controller
{
    public function   exibirTodos(){
        // $filmes = Filme::all();
        //$filmes = Filme::orderBy('title','desc')->get();
         
     // $filmes = Filme::where('title','like','A%')->get();
     //$filmes = Filme::where('title', 'like','A%')
     //->where ('rating','>',2)
     //->orderBy('rating','DESC')->get();

     $filmes = Filme::paginate(5);
      
        return view('filmes-todos')->with('filmes',$filmes);
     
    }
    public function exibirDetalhes($id){
        $filme = Filme::find($id);

        return view('filmes-detalhes')
        ->with('filme',$filme);
    }
    public function adicionarFilme (){
        return view('filme-adicionar');
    }
    public function salvarFilme(Request $request){
        
        $request->validate([
            
            'title'=>'required|max:20|unique:movies'
        ]);
        $filme = new Filme;
        $filme->title = $request->input('title');
        $filme->rating = 1;
        $filme->release_date=now();
        $filme->save();

        return redirect('/filmes');

        
        
    }
    public function editarFilme($id){
        $filme = Filme::find($id);
        
        return view('filme-editar')->with('filme',$filme);
        
    }
    public function gravarFilme(Request $request, $id){
       $request->validate([
           'title'=>'required|max:20|unique:movies',
           'rating'=> 'required|numeric|between:1,10'
       ]);
       
       
        $filme = Filme::find($id);
        $filme->title = $request->input('title');
        $filme->rating = $request->input('rating');
        $filme->save();

        
        return redirect('/filmes');
        
    }

        public function excluirFilme($id){
            $filme = Filme::find($id);
            $filme->delete();

            Return redirect('/filmes');
            
        }
}


