<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WrapperApiController extends Controller
{
    public function hero()
    {
        $json = Http::get('https://api.dazelpro.com/mobile-legends/hero')->json();
        return response()->json($json);
    }
    public function role()
    {
        $json = Http::get('https://api.dazelpro.com/mobile-legends/role')->json();
        return response()->json($json);
    }
    public function specially()
    {
        $json = Http::get('https://api.dazelpro.com/mobile-legends/specially')->json();
        return response()->json($json);
    }
    public function tertentu()
    {
        $json = Http::get('https://api.dazelpro.com/mobile-legends/hero/44')->json();
        return response()->json($json);
    }
    public function rolehero()
    {
        $json = Http::get('https://api.dazelpro.com/mobile-legends/role?roleName=Marksman')->json();
        return response()->json($json);
    }
}
