<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MypageController extends Controller

{
     public function add()
  {
      return view('admin.mypage.index');
  }
  
  public function edit()
  {
      return view('admin.mypage.edit');
  }
}
