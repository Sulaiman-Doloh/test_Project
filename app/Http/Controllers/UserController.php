<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\type;
use App\models\parking;
use App\models\reserve_parking;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
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

    public function index()
    {
        $databriks = parking::join('types','parkings.TypeID','=','types.TypeID')
        ->where('types.TypeID',1)
        ->get();
        $datacars = parking::join('types','parkings.TypeID','=','types.TypeID')
        ->where('types.TypeID',2)
        ->get();
        return view('user.index',compact('databriks','datacars'));
    }

    //แสดงแบบฟอมร์
    // public function user()
    // {

    //     return view('user.userr');
    // }
    public function form(){
        return view('user.form');
    }

    public function selectType(){
        return view('user.selectType');
    }
    public function parking(Request $request){
       
    $parkings = parking::join('types','parkings.TypeID','=','types.TypeID')
        ->where('types.TypeID',$request->selectType)
        ->get();

      $selectType = $request->selectType;
      return view('user.form',compact('selectType','parkings'));

        
    }

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


        return redirect()->route('user.index')->with('success', 'User has been created successfully.');


    }
    // บันทึกข้อมูลลงdatabes
    public function storeUser(Request $request)
    {
        $request->validate([
            'FirstName' =>'required',
            'LastName' =>'required',
            'Phone' =>'required',
            'Email_Address' =>'required',
            'Password' =>'required',
            'Confirm_Password' =>'required'
        
        ]);

        $User = new userr;

            $User->FirstName = $required->FirstName;
            $User->LastName = $required->LastName;
            $User->Phone = $required->Phone;
            $User->Email_Address = $required->Email_Address;
            $User->Password = $required->Password;
            $User->Confirm_Password = $required->Confirm_Password;
            $User->save();

            return redirect()->route('user.userr')->with('success', 'User has been created successfully.');

    }
    

}
