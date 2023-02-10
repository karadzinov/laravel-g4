<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use OpenAI\Laravel\Facades\OpenAI;

class ChatGPController extends Controller
{
    public function index()
    {
        $result = OpenAI::completions()->create([
            'model' => 'text-davinci-003',
            'prompt' => 'PHP is',
        ]);

        $data = ['result' => $result['choices'][0]['text']];

        return view('frontend.index')->with($data);
    }

    public function answer(Request $request)
    {
        $question = $request->get('question');

        $result = OpenAI::completions()->create([
            'model' => 'text-davinci-003',
            'prompt' => $question,
        ]);



        $data = ['result' => $result['choices'][0]['text']];

        return view('frontend.index')->with($data);
    }
}
