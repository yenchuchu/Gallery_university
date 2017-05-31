<?php

namespace App\Http\Controllers\backend;

use App\Image;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use DB;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Session;

class UserController extends Controller
{
    public function index() {
      return view('backend.upload_image');
    }

    public function uploadImage(Request $request) {
        $data = $request->all();
        $today = Carbon::today();
        $year_current = $today->year;
        $ten_khoa = $data['ten_khoa'];
        $ten_lop = $data['ten_lop'];

        $path = 'image/'.$year_current.'/'.$ten_khoa.'/'.$ten_lop;

        foreach ($data['list_images'] as $img) {
            $faker = Faker::create();
            $maxTime = $faker->unixTime($max = 'now');

            $destinationPath_cover = public_path($path); // upload path
            $extension_cover = $img->getClientOriginalExtension(); // getting image extension
            $filename_cover = $maxTime.'_'. $year_current.'_'.$ten_khoa.'_'.$ten_lop.'_' . $extension_cover;
            $img->move($destinationPath_cover, $filename_cover);
            $url_img = $path. '/' . $filename_cover;

            $list_img[] = ['url'=>$url_img, 'created_at'=> $today->toDateString(), 'class_code' => $ten_lop];
        }

        Image::insert($list_img);

        Session::flash('message', trans('label.user.change_ava'));

        return Redirect()->route('backend.index');
    }

    public function createUser() {
        User::insert([
            'id' => 1,
           'user_name' => 'admin',
            'password' => Hash::make('12345admin'),
            'email' => 'admin@gmail.com',
        ]);
    }
}