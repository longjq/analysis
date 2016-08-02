<?php

namespace App\Http\Controllers;

use App\Models\DataCache;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class DashController extends Controller
{
    // 首页
    public function index()
    {
        $dc = DataCache::lists('value', 'key');

        return view('webos/index', compact('dc'));
    }
    
}
