<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class newsController extends Controller
{
    public function news($id) {
        return view('news', ['id' => $id]);
    }
}
