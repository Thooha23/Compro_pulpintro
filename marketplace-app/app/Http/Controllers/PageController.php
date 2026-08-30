<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        
        $keyMoments = [
            [
                'title' => 'Childhood Cancer',
                'description' => 'In collaboration with Lions Club Victory Pioneer, serving children with cancer through play and creative arts.',
                'image' => null, // placeholder, isi asset path nanti
            ],
            [
                'title' => 'Childhood Cancer',
                'description' => 'In collaboration with Lions Club Victory Pioneer, serving children with cancer through play and creative arts.',
                'image' => null,
            ],
            [
                'title' => 'Childhood Cancer',
                'description' => 'In collaboration with Lions Club Victory Pioneer, serving children with cancer through play and creative arts.',
                'image' => null,
            ],
        ];

        return view('pages.home', compact('keyMoments'));
    }

    
    public function about()
    {
        return view('pages.about');
    }

    
    public function service()
    {
        return view('pages.service');
    }

    
    public function partnership()
    {
        return view('pages.partnership');
    }

    public function join()
    {
        return view('pages.join');
    }
}