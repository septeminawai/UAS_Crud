<?php

namespace App\Http\Controllers;

use App\Models\FeedbackUsersModel;
use App\Models\GuestBookModel;
use App\Models\User;

use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {

        $userAll =  User::all()->count();
        $guestAll =  GuestBookModel::all()->count();
        $feedbackAll =  FeedbackUsersModel::all()->count();


        if(Auth::user()->hasRole('admin')){
            $data['data'] = GuestBookModel::orderBy('id','DESC')->paginate(4);
            return view('admin.dashboard',$data, [
                'userAll' => $userAll,
                'guestAll' => $guestAll,
                'feedbackAll' => $feedbackAll,
            ]);
        }

        elseif(Auth::user()->hasRole('user')){
            return view('users.dashboard');
        }

        elseif(Auth::user()->hasRole('')){
            return 'Hello Guest';
        }

    }


}
