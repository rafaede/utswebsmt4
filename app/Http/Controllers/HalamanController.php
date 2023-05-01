<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HalamanController extends Controller
{
    function index(){
        return view("halaman/index");
    }
    function tentang(){
        return view("halaman/tentang");
    }
    function kontak(){
        
        $data = [
            'judul' => 'Ini adalah Halaman Kontak', 
            'kontak' => [
                'email'=>'kevinaurelius2709@gmail.com',
                'youtube'=>'Kevin Aurelius'
            ]
        ];
        return view("halaman/kontak")->with($data);
    }

}
