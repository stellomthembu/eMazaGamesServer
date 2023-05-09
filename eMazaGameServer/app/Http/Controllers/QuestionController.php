<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Traits\HelperTrait;
use Illuminate\Http\Request;

class QuestionController extends Controller
{

use HelperTrait;

       public function index (Request $request) {

        return $this->processQuestions($request);


       }



public function store (Request $request) {

    return response()->json(['error' => 'Do momento nao e possivel adicionar perguntas'], status: 403);


   }

   public function show (Request $request, Question $question) {

    return response()->json(['error' => 'Do momento, nao e possivel mostrar detalhes de uma pergunta!'], status: 403);


   }

   public function update (Request $request, Question $question) {

    return response()->json(['error' => 'Do momento, nao e possivel actualizar a pergunta!'], status: 403);

   }

    public function destroy (Request $request, Question $question) {

        return response()->json(['error' => 'Do momento, nao e possivel remover a pergunta!'], status: 403);


       }





}
