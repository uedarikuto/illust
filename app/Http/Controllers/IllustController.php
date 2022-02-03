<?php

namespace App\Http\Controllers;

use App\Illust;
use Illuminate\Http\Request;

class IllustController extends Controller
{
    public function index(Illust $users)
    {
        return $users->get();
    }
}
