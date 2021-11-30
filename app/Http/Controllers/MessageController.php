<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function add_message_view(){
        return view('admin/messages');
    }
    public function get_messages(){
        return view('admin/messages');
    }
    public function get_message(){
        return view('admin/messages');
    }
    public function add_message(){
        return view('admin/messages');
    }
    public function delete_message(){
        return view('admin/messages');
    }
    public function edit_message(){
        return view('admin/messages');
    }
}
