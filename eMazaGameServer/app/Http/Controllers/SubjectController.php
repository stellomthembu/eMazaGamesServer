<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use App\Traits\HelperTrait;
use Illuminate\Http\Request;

class SubjectController extends Controller
{

    use HelperTrait;

    public function index (Request $request) {


        return $this->ProcessSubjects($request);

}



public function store (Request $request) {

 return response()->json(['error' => 'Do momento nao e possivel adicionar disciplinas'], status: 403);


}

public function show (Request $request, Subject $subject) {

 return response()->json(['error' => 'Do momento, nao e possivel mostrar detalhes de uma disciplina!'], status: 403);


}

public function update (Request $request, Subject $subject) {

 return response()->json(['error' => 'Do momento, nao e possivel actualizar a disciplina!'], status: 403);

}

 public function destroy (Request $request, Subject $subject) {

     return response()->json(['error' => 'Do momento, nao e possivel remover a disciplina!'], status: 403);


    }
}
