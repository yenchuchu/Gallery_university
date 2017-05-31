<?php

namespace App\Http\Controllers\frontend;

use App\Image;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use DB;

class GalleryController extends Controller
{
    public function index() {
        $images = Image::all();

        return view('frontend.gallery.index', compact('images'));
    }
}