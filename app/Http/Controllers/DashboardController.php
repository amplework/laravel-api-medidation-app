<?php

namespace App\Http\Controllers;

use App\Models\Admin\Categories\Categories;
use App\Models\User;
use App\Models\User\UserCategories;
use App\Models\User\UserNotification;
use App\Models\UserInformation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    // user DashBoard Function
    public function user_dashboard()
    {
        return view('user.dashboard');
    }

    // Admin DashBoard function
    public function admin_dashboard()
    {
        return view('admin.dashboard');
    }


    public function profile_info()
    {
        $categories = Categories::where('status', 1)->get();
        $data = compact('categories');
        return view('user.profile', $data);

    }
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->toArray());
        // user profiles store function


        $data = new UserInformation();
        $data->user_id = Auth::user()->id;
        $data->role = Auth::user()->role;
        $data->name = Auth::user()->name;
        $data->last_name = $request->last_name;
        $data->dob = $request->dob;
        $data->gender = $request->gender;
        $data->about_moti = $request->about_moti;

        // categories save with user function
        if (count($request->categories) > 0) {
            foreach ($request->categories as $cat) {
                // dd($cat);
                $categories = new UserCategories();
                $categories->user_id = Auth::user()->id;
                $categories->categories_id = $cat;
                $categories->status = 1;
                $categories->save();
            }
        }
        $data->exp_info_status = $request->experience;
        $data->profile_status = $request->profile_status;
        $data->status = 1;
        $data->save();
        // user Notification save function
        $notification = new UserNotification();
        $notification->user_id = Auth::user()->id;
        $notification->push_notification = $request->push_notification ? '1' : '0';
        $notification->tips_notification = $request->tips ? '1' : '0';
        $notification->reminders_notification = $request->reminders ? '1' : '0';
        $notification->when_schedule = $request->notification_schedule;
        $notification->sending_time = $request->time;
        $notification->status = 1;
        $notification->save();
        // user Model Status Update In Profiles Active
        $user = User::find(Auth::user()->id);
        $user->status = 1;
        $user->save();
        return redirect()->route('dashboard');

    }


    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}