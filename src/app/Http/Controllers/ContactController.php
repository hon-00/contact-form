<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function confirm(Request $request)
    {
        $contact = $request->only(['name', 'email', 'tel', 'content']);
        /*ノーマル
        return view('confirm', [
            'contact' => $contact
        ]);*/

        return view('confirm', compact('contact'));
        // 上記のように、compact関数を使用して変数を渡すこともできる。
    }
}
