<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function create()
    {
        return view('admin.notification.notification-create');
    }
    public function store(Request $request)
    {
        dd('notification store create ');
    }
    public function show()
    {
        return view('admin.notification.notification-show');
    }
    public function edit($id)
    {
        dd('notifaction record has been update');
    }
    public function destroy($id)
    {
        dd('notification Destroy');
    }
}