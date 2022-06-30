<?php

namespace App\Http\Controllers;

use App\Models\employeeModel;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class EmployeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['data'] = employeeModel::orderBy('id','DESC')->paginate(6);
        return view('admin.employe.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.employe.create');
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

            'name' => 'required|string|max:100',
            'email' => 'required|string|max:255|unique:employee,email',
            'mobile_phone_number' => 'required|numeric|min:14|unique:employee,mobile_phone_number',
            'gender' => 'required|string',
            'place_of_date' => 'required|string',
            'date_of_birth' => 'required|string',
            'position' => 'required|string',
            'jobdesk' => 'required|string',
      ]);


      try {
        $employe = new employeeModel();
        $employe->email = $request->email;
        $employe->name = $request->name;
        $employe->mobile_phone_number = $request->mobile_phone_number;
        $employe->gender = $request->gender;
        $employe->date_of_birth = $request->date_of_birth;
        $employe->place_of_date = $request->place_of_date;
        $employe->position = $request->position;
        $employe->jobdesk = $request->jobdesk;
        $employe->slug = Str::slug($request->get('name'));
        $employe->save();
          Alert::success('Success', 'Data is successfully input!');
          return redirect()->route('employee.index');
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
        $employe = employeeModel::where('slug', $id)->first();
        return view('admin.employe.details',compact('employe'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employe = employeeModel::where('slug', $id)->first();
        return view('admin.employe.edit',compact('employe'));
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
        $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|string|max:255|unique:employee,email,'.$id,
            'mobile_phone_number' => 'required|numeric|min:14|unique:employee,mobile_phone_number,'.$id,
            'gender' => 'required|string',
            'place_of_date' => 'required|string',
            'date_of_birth' => 'required|string',
            'position' => 'required|string',
            'jobdesk' => 'required|string',
      ]);

      try {
        $employe = employeeModel::find($id);
        $employe->email = $request->input('email');
        $employe->name = $request->input('name');
        $employe->mobile_phone_number = $request->input('mobile_phone_number');
        $employe->gender = $request->input('gender');
        $employe->date_of_birth = $request->input('date_of_birth');
        $employe->place_of_date = $request->input('place_of_date');
        $employe->position = $request->input('position');
        $employe->jobdesk = $request->input('jobdesk');
        $employe->slug = Str::slug($request->get('name'));
        $employe->update();

        Alert::success('Success', 'Data has been successfully updated!');
        return redirect()->route('employee.index');
     }catch (\Throwable $e) {
      Alert::error('Error','Failed to update data!',['error' => $e->getMessage()]);
  }
  return redirect()->back();
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
            $employe = employeeModel::find($id);
            $employe->delete();
            Alert::success('Success', 'Deleted Successfully');
            return redirect()->back();
        }catch (\Throwable $th) {
            Alert::error('Failed','Failed to Delete', ['error' => $th->getMessage()]);
        }
        return redirect()->back();
    }
}
