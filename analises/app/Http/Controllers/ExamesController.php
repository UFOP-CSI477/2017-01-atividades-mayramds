<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exame;

class ExamesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $procedimentos = Procedimento::all();
        return view ('procedimentos.index') ->with('procedimento', $procedimento);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
      return view('procedimentos.create');
    }

    /** {
     if(auth()->user()->type ==1)
      {
          return view('procedimentos.create');
      }
      else
      {
        $mensagem = "Desculpe, você não tem permissão para criar um procedimento.";
        flash($mensagem, 'danger');
        return redirect()->route('procedimentos.index');
      }
    } */




    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      Procedimento::create($request->all());
      return redirect('/procedimentos');
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Procedimento $procedimento)
    {
      return view('procedimentos.show') ->with('procedimento',$procedimento);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function edit(procedimento $procedimento)
    {
      return view('procedimentos.edit') ->with('procedimento',$procedimento);
    }

/**  {
      if(auth()->user()->type ==1)
      {
        return view('procedimentos.edit')->withProcedimento($procedimento);
      }
      else
      {

        $mensagem = "Desculpe, você não tem permissão para editar um produto.";
        flash($mensagem, 'danger');
        return redirect()->route('procedimentos.index');
      }
  } */

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, Procedimento $procedimento)
    {
      $procedimento->nome = $request->nome;
      $procedimento->preco = $request->preco;
      $procedimento->save();
      return redirect('/procedimentos');
    }

  /**{
      if(auth()->user()->type ==1)
      {
      $procedimento->update($request->all());
      $mensagem = "Procedimento " . $request->input('nome') . " alterado com sucesso.";
      flash($mensagem, 'success');
      }
      elseif (auth()->user()->type ==2)
      {
        $procedimento->preco = $request->input('preco');
        $procedimento->update();
        $mensagem = "Procedimento " . $request->input('nome') . " alterado com sucesso.";
        flash($mensagem, 'success');
      }
      else
      {
        $mensagem = "Desculpe, você não tem permissão para editar um procedimento.";
        flash($mensagem, 'danger');
      }

      return view('procedimentos.edit')->withProcedimento($procedimento);
  }*/

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function destroy(Procedimento $procedimento)

     {
             $procedimento->delete();
             return redirect('/procedimentos');
         }



   /**{
     if(auth()->user()->type ==1)
     {
       $exames = DB::table('exame')->where('procedimento_id', $procedimento_id->id)->first();

       if($exames)
       {
         debug($exames);
         flash('Procedimento aparece em um exame.','danger');

       }
       else{
         $procedimento->delete();
         flash('Procedimento deletado com sucesso.','success');
       }

     }
     else
     {
       $mensagem = "Desculpe, você não tem permissão para deletar procedimentos.";
       flash($mensagem, 'danger');
     }
       return redirect()->route('procedimentos.index');*/

}
