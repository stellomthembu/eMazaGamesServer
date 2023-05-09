<?php

namespace App\Traits;

use App\Models\Question;
use App\Models\Subject;
use Illuminate\Http\Request;

trait HelperTrait
{
    public function processSubjects(Request $request) {

        $orderDirection = $request->query(key:'direction', default:'desc');

        $orderColumn = $request->query(key:'column', default:'id');

        $totalPerPage = $request->query(key:'Per_Page', default: 3);

       $subjects = Subject::orderBy($orderColumn, $orderDirection)->paginate($totalPerPage);

    return response()->json(['success' => $subjects], status: 200);
}


public function processQuestions (Request $request) {

    $orderDirection = $request->query(key:'direction', default:'desc');

    $orderColumn = $request->query(key:'column', default:'id');

    $totalPerPage = $request->query(key:'Per_Page', default: 3);

   $question = Question::orderBy($orderColumn, $orderDirection)->paginate($totalPerPage);

return response()->json(['success' => $question], status: 200);
}

}
