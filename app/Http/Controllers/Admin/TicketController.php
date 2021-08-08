<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TicketController extends Controller
{
    public function add()
  {
      return view('admin.ticket.index');
  }
  
  public function create(Request $request)
  {
      return redirect('admin/ticket/index');
  }  
  
  public function edit()
  {
      return view('admin.ticket.post');
  }
}
