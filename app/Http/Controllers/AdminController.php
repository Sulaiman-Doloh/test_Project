<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\models\admin;
use App\models\type;
use App\models\parking;
use App\models\payment_method;
use App\models\reserve_parking;
use App\models\User;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    //Index
    //แสดงหน้า Admin
    // public function index()
    // {
    //     $Type=type::get();

    //     return view('admin.type',compact('type'));
    // }

    public function admin()
    {
        // $admin=admin::get();
        // $type=type::get();
        // $parking=parking::get();
        // $payment_method=payment_method::get();
        // $userr=userr::get();
        // $reserve_parking=reserve_parking::get();
        
        // return view('admin.index',compact('type','parking','payment_method','userr','reserve_parking'));
        return view('admin.index');
    }
    
    //แสดงแบบฟอมร์
    //Create
    public function parking()
    {
        $parking = parking::get();
        // dd($parking);
        return view('admin.parking',compact('parking'));
    }

    public function type()
    {
        $type = type::get();
        // dd($type);
        return view('admin.type',compact('type'));
    }

    public function payment_method()
    {
        $payment_method = payment_method::get();
        // dd($payment_method);
        return view('admin.payment_method',compact('payment_method'));
    }

    
    public function reserve_parking()
    {
        $reserve_parking = reserve_parking::get();
        // dd($reserve_parking);
        return view('admin.reserve_parking',compact('reserve_parking'));
    }
    
    // public function User()
    // {
    //     $User = User::get();
    //     // dd($User);
    //     return view('User.userr',compact('User'));
    // }

    //test
    public function User()
    {
        $User = User::get();

        return view('admin.User',compact('User'));
    }

    //บันทึกข้อูลลงใน Database
    // public function storeAdmin(Request $request)
    // {
        // dd($request);ตรวจสอบข้อมูล
        // $request->validate([
            
        //     'AdminFName' => 'require',
        //     'AdminLName' => 'require',
        //     'AdminPhone' => 'require'

        
        // ]);

    //     $admin = new admin;

    //     $admin->AdminFName = $request->AdminFName;        
    //     $admin->AdminLName = $request->AdminLName;
    //     $admin->AdminPhone = $request->PhoneNumber;
    //     $admin->save();

    //     return redirect()->route('pro.admin')->with('success','Admin has been created successfully.');
    //  }

    //reserve_parking
    public function storeresere_parking(Request $request)
    {
        // $request->validate([
        // 'CarRegistration' =>'required',
        // 'Paystatus' =>'required',
        // 'PayID' =>'required',
        // 'Img_payment' =>'required',
        // 'Time_in' =>'required',
        // 'Time_out' =>'required',
        // 'ParkingID' =>'required',
        // 'PayTheFine' =>'required',
        // 'UserId' =>'required'

        // ]);
        //
        if ($request->hasFile("imgUpload")) {    //เช็คว่ามีรูปไหม|มีไฟล์ไหม
            $file = $request->file("imgUpload");    //ใส่รูป
                        //120552ตามด้วยชื่อรูป  ที่มันต้องมีตัวเลขก็เพราะชื่อไฟรูป
            $imageName = time() . '_' . $file->getClientOriginalName();   //เปลี่ยนชื่อรูปภาพให้เป็นตัวเลข
            $file->move(\public_path("receipt_img/"), $imageName);     //เก็บรูปเข้าในโฟร์เดอร์
        }

        //ส่งข้อมูลเข้าใน database
        $reserve_parking = new reserve_parking;
        $reserve_parking->CarRegistration = $request->CarRegistration;
        $reserve_parking->Paystatus = $request->Paystatus;
        $reserve_parking->PayID = $request->PayID;
        $reserve_parking->Img_payment = $request->Img_payment;
        $reserve_parking->Time_in = $request->Time_in;
        $reserve_parking->Time_out = $request->Time_out;
        $reserve_parking->ParkingID = $request->ParkingID;
                        //ตรงนี้เอามาจก DB   //เอามาจาก HTML
        $reserve_parking->Price = $request->pro_price;
        
        $reserve_parking->PayTheFine = $request->PayTheFine;
        $reserve_parking->Img_payment = $imageName;
        $reserve_parking->UserId =  Auth::user()->id;
        $reserve_parking->save();

        //เปลี่ยนสถานะ|เขียว|แดง
        $updatestatus = parking::find($request->ParkingID);
        $updatestatus->stetas = 1;
        $updatestatus->update();


        return redirect()->route('admin.index')->with('success', 'User has been created successfully.');


    }

    //parking
     public function storeparking(Request $request)
     {
        $request->validate([
            'TypeID' => 'required',
            //'Price' => 'required',
            'stetas' => 'required'
        ]);

        $parking = new parking;

        $parking->TypeID = $request->TypeID;
       // $parking->Price = $request->Price;
        $parking->stetas = $request->stetas;
        
        return redirect()->route('admin.parking')->with('success', 'Parking has been created successfully.');
   
     }

     //type
    public function storetype(Request $request)
    {
        // dd($request);
        // $request->validate([
        //     'id' => 'require',
        //     'TypeName' => 'require'
 
        // ]);

        $type = new type;
        $type->id = $request->id;        
        $type->TypeName = $request->TypeName;
        $type->save();

        return redirect()->route('admin.type')->with('success','Admin has been created successfully.');
     }

     //storepayment_method
     public function storepayment_method(Request $request)
     {
        // $request->validate([
        //     'name' => 'require'

        // ]);

        $storepayment_method = new storepayment_method;
        $storepayment_method->name = $request->name;
        $storepayment_method->save();

        return redirect()->route('admin.payment_method')->with('success','Admin has been created successfully.');

     }

     //User
     public function storeUser(Request $request)
     {
        $request->validate([
            'FirstName' => 'require',
            'LastName' => 'require',
            'Phone' => 'require',
            'email' => 'require',
            'password' => 'require'

        ]);

        $storeUser = new storeUser;
        $storeUser->FirstName = $request->FirstName;
        $storeUser->LastName = $request->LastName;
        $storeUser->Phone = $request->Phone;
        $storeUser->email = $request->email;
        $storeUser->password = $request->password;
        $storeUser->save();

        return redirect()->route('admin.User')->with('success','Admin has been created successfully.');

     }


public function showAdminIndex() {
    $types = Type::all(); // ดึงข้อมูล Type ทั้งหมดจากฐานข้อมูล
    return view('admin.index', ['type' => $types]);
}

     
     
     
     
     
     
     
     public function editparking(string $id)
    {
        $parking = parking::find(1);
        $par = parking::where(1)->get();

        return view('admin.editparking');
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