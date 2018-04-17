<?php

namespace App\Http\Controllers;

use App\Competence;
use Illuminate\Http\Request;

class CompetenceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "Lister::Compétence(s)";
        $competences = Competence::all();
        return view('index',compact('competences'))->with('title', $title);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "Ajouter::Compétence(s)";
        return view('create')->with('title', $title);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if ($request->isMethod('POST'))
        {
            $comptences = $request->input('framework');

            foreach ($comptences as $competence)
            {
                $c = new Competence();

                $c->libelle = $competence;

                $c->save();
            }
        }
        return redirect('competences')->with('success', 'Compétence(s) bien ajoutée(s)!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $title = "Modifier::Compétence(s)";

        $competence = Competence::find($id);
        return view('edit',compact('competence','id'))->with('title', $title);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $competence = Competence::find($id);
        $competence->libelle=$request->get('framework');
        $competence->save();
        return redirect('competences');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $competence = Competence::find($id);
        $competence->delete();
        return redirect('competences')->with('success','La Compétence a bien été supprimée!');
    }
}
