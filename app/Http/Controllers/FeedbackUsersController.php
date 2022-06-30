<?php

namespace App\Http\Controllers;

use App\Models\FeedbackUsersModel;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class FeedbackUsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['data'] = FeedbackUsersModel::orderBy('id','DESC')->paginate(6);
        return view('admin.feedback.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([

            'subject' => 'required|string|max:100',
            'email' => 'required|string|max:255|unique:feedback_users,email',
            'message' => 'required|string|max:255',
      ]);

      try {
        $guestbook = new FeedbackUsersModel();
        $guestbook->email = $request->email;
        $guestbook->subject = $request->subject;
        $guestbook->message = $request->message;
        $guestbook->save();
          Alert::success('Success', 'Thank You!');
          return redirect('/');
        } catch (\Throwable $th) {
          Alert::error('Error','Sorry!! data failed', ['error' => $th->getMessage()]);
        } return redirect()->back();


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{
            $guestbook = FeedbackUsersModel::find($id);
            $guestbook->delete();
            Alert::success('Success', 'Deleted Successfully');
            return redirect()->back();
        }catch (\Throwable $th) {
            Alert::error('Failed','Failed to Delete', ['error' => $th->getMessage()]);
        }
        return redirect()->back();
    }
}
