<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\chapter;
use Illuminate\Http\Request;

class ChapterController extends Controller
{
    public function index()
    {
        $data = chapter::all();
        return view('admin.chapter.index', compact('data'));
    }
}
