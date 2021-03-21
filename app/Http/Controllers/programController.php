<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class programController extends Controller
{
    public function program() {
        return view('program', ['program' => 'Makan Gratis']);
    }
}
