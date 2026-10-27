<?php

namespace App\Http\Controllers;

use App\Models\DigitalArt;
use Illuminate\Http\Request;

class DigitalArtController extends Controller
{
    public function welcome()
    {
        $featuredArtworks = DigitalArt::take(4)->get();
        return view('digital_art.welcome', compact('featuredArtworks'));
    }

    public function index()
    {
        $artworks = DigitalArt::paginate(8);
        return view('digital_art.index', compact('artworks'));
    }

    public function show(DigitalArt $digitalArt)
    {
        return view('digital_art.show', compact('digitalArt'));
    }
}