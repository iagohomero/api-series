<?php

namespace App\Http\Controllers;

use App\Models\Serie;
use Illuminate\Http\Request;

class SeriesController extends BaseController
{
    public function __construct(){
        $this->classe = Serie::class;
    }
}
