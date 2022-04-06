<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'fathers_name_or_husband_name_value' => ['required'],
            'gurdian_name' => ['required'],
            'mothers_name' => ['required'],
            'mobile_number' => ['required'],
            'date_of_birth' => ['required'],
            'religion' => ['required'],
            'gender' => ['required'],
            'birth_or_NID_value' => ['required'],
            'birth_or_NID' => ['required'],
            'image' => ['required'],
            'NID_front_side' => ['required'],
            'NID_back_side' => ['required'],
            'father_or_mother_image' => ['required'],
            'father_or_mother_NID_front' => ['required'],
            'father_or_mother_NID_back' => ['required'],
            'permanent_address' => ['required'],
            'present_address' => ['required'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {

        if (request()->hasFile('image')) {  // if isset or get image
            $file = request()->file('image');   // get image 
            $extension = $file->getClientOriginalExtension();  // get image extension
            $fileName = time(). '.' . $extension;  // get file name
            $file->move('uploads/employee_images', $fileName);  // configuring where image upload
            $data['image'] = $fileName;
        }

        if (request()->hasFile('NID_front_side')) {  // if isset or get image
            $file2 = request()->file('NID_front_side');   // get image 
            $extension2 = $file2->getClientOriginalExtension();  // get image extension
            $fileName2 = time(). '.' . $extension2;  // get file name
            $file2->move('uploads/employee_images', $fileName2);  // configuring where image upload
            $data['NID_front_side'] = $fileName2;
        }

        if (request()->hasFile('NID_back_side')) {  // if isset or get image
            $file3 = request()->file('NID_back_side');   // get image 
            $extension3 = $file3->getClientOriginalExtension();  // get image extension
            $fileName3 = time(). '.' . $extension3;  // get file name
            $file3->move('uploads/employee_images', $fileName3);  // configuring where image upload
            $data['NID_back_side'] = $fileName3;
        }

        if (request()->hasFile('father_or_mother_image')) {  // if isset or get image
            $file4 = request()->file('father_or_mother_image');   // get image 
            $extension4 = $file4->getClientOriginalExtension();  // get image extension
            $fileName4 = time(). '.' . $extension4;  // get file name
            $file4->move('uploads/employee_images', $fileName4);  // configuring where image upload
            $data['father_or_mother_image'] = $fileName4;
        }

        if (request()->hasFile('father_or_mother_NID_front')) {  // if isset or get image
            $file5 = request()->file('father_or_mother_NID_front');   // get image 
            $extension5 = $file5->getClientOriginalExtension();  // get image extension
            $fileName5 = time(). '.' . $extension5;  // get file name
            $file5->move('uploads/employee_images', $fileName5);  // configuring where image upload
            $data['father_or_mother_NID_front'] = $fileName5;
        }

        if (request()->hasFile('father_or_mother_NID_back')) {  // if isset or get image
            $file6 = request()->file('father_or_mother_NID_back');   // get image 
            $extension6 = $file6->getClientOriginalExtension();  // get image extension
            $fileName6 = time(). '.' . $extension6;  // get file name
            $file6->move('uploads/employee_images', $fileName6);  // configuring where image upload
            $data['father_or_mother_NID_back'] = $fileName6;
        }
        
        return User::create([
            
            'name' => $data['name'],
            'fathers_name_or_husband_name_value' => $data['fathers_name_or_husband_name_value'],
            'fathers_name_or_husband_name' => $data['gurdian_name'],
            'mothers_name' => $data['mothers_name'],

            'date_of_birth' => $data['date_of_birth'],
            'religion' => $data['religion'],
            'gender' => $data['gender'],
            'NID_NO_or_Birth_ID_value' => $data['birth_or_NID_value'],
            'NID_NO_or_Birth_ID' => $data['birth_or_NID'],

            'mobile_no' => $data['mobile_number'],
            'image' => $fileName,
            
            'NID_font_image' => $fileName2,
            'NID_back_image' => $fileName3,
            'father_or_mother_image' => $fileName4,

            'NID_font_father_or_mother_image' => $fileName5,
            'NID_back_father_or_mother_image' => $fileName6,
            'permanent_address' => $data['permanent_address'],
            'present_address' => $data['present_address'],
            'status' => $data['status'],

            'email' => $data['email'],
            'password' => Hash::make($data['password']),

        ]);
        
    }
}
