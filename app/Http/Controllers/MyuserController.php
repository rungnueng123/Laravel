<?php

namespace App\Http\Controllers;

use App\car;
use Illuminate\Http\Request;
use App\Userbase;
use App\userCar;

class MyuserController extends Controller
{
   public function registerpage(){
       return view('admin.registerpage');
   }

   public function loginpage(){
       return view('admin.loginpage');
   }

    public function saveregisterpage(Request $request){
        $userbase = new Userbase;
        $userbase->Username = $request->input('Username');
        $userbase->Password = $request->input('Password');
        $userbase->Email = $request->input('Email');
        $userbase->Birth = $request->input('Birth');
        $userbase->Gender = $request->input('Gender');
        $userbase->save();
        return redirect('/login');
    }

    public function checklogin(Request $request){
       $Username = $request->input('Username');
       $Password = $request->input('Password');
       //Check Found User
        $UserRecord = Userbase::where('Username',$Username)->where('Password',$Password)->first();
        if(!empty($UserRecord)){
            $request->session()->put('userinfo', $UserRecord);//SESSION
            return redirect('/profile');
        }else{
            return view('admin.loginpage');
        }
//        dd($UserRecord);

    }

    public function profilepage(Request $request){
        $userinfo = $request->session()->get('userinfo');
        $carList = car::all();
        $carUserListData = array();
        foreach($carList as $key=>$val){
            $carUserListData[$key]['car'] = $val['car'];
            $carUserListData[$key]['carID'] = $val['carID'];
            $carUserRecord = userCar::where('userID',$userinfo['UserID'])->where('carID',$val['carID'])->first();
            $carUserListData[$key]['Checked'] = '';
            if(!empty($carUserRecord)){
                $carUserListData[$key]['Checked'] = 'checked';
            }
        }
        $data = array(
            'carUserListData'=>$carUserListData,
            'userinfo'=>$userinfo
        );
        return view('admin.profilepage')->with($data);
    }

    public function saveprofile(Request $request){
        $userinfo = $request->session()->get('userinfo');
        //DELETE
        userCar::where('userID',$userinfo['UserID'])->delete();
        /// SAVE
        foreach($request->input('carList') as $key=>$val){
            $userCar = new userCar;
            $userCar->userID = $userinfo['UserID'];
            $userCar->CarID = $val;
            $userCar->save();
        }
        return redirect('/profile');
    }

}
