<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\model\User;

class UserController extends Controller
{
    public function login(Request $request)
    {
       if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect('/dashboard')->with(['color' => 'success', 'msg' => 'Login Berhasil']);
       }else{
            return back()->with(['color' => 'error', 'msg' => 'Login Gagal'])->withInput();
       }
    }
    
    public function register(Request $request)
    {
       if ($request->password != $request->cpassword) {
          return back()->with(['color' => 'error', 'msg' => 'Password dan Confirm Password Tidak Sesuai'])->withInput();
       }

       if (User::where('email','=',$request->email)->count() > 0 || User::where('nim','=',$request->nim)->count() > 0) {
          return back()->with(['color' => 'error', 'msg' => 'User Sudah Ada Bung!'])->withInput();
       }else{
          $user = new User();
          $user->nim = $request->nim;
          $user->nama = $request->nama;
          $user->email = $request->email;
          $user->tipe = 0;
          $user->password = bcrypt($request->password);
          $user->save();

          return redirect('/')->with(['color' => 'success', 'msg' => 'Register Berhasil, Konfirmasi Emailmu dan Tunggu Approve dari Ketua']);

       }
    }

    public function newPassword(Request $request)
    {
       $user = User::find($request->id);
       if($request->password != $request->cpassword){
         return back()->with(['color' => 'error', 'msg' => 'Password dan Confirm Password Tidak Sesuai']);
       }elseif(!Hash::check($request->oldPassword, $user->password)){
         return back()->with(['color' => 'error', 'msg' => 'Password Salahh']);
       }else{
         $user->password = bcrypt($request->password);
         $user->save();
         return back()->with(['color' => 'success', 'msg' => 'Password Berhasil Diganti']);

       }
    }

    public function file(Request $req)
    {
       echo $req->check;
      // $path = $req->file('avatar')->store('public');
      // return redirect('/file')->with(['msg' => 'Berhasil Upload','color' => 'success']);
    }

    public function logout()
    {
         Auth::logout();
         return redirect('/')->with(['msg' => 'Berhasil Keluar','color' => 'success']);
    }

    public function insertUser(Request $req)
    {
      $cek = User::where('email','=',$req->email)->count();
      echo $cek;
      if($cek == 0){
         $user = new User();
         $user->fullname = $req->fullname;
         $user->email = $req->email;
         $user->password = bcrypt($req->password);
         $user->type = $req->type;
         if ($req->has('desc')) {
            $user->desc = $req->desc;
         }
         $user->save();
         // echo "Here";
         return redirect('/users/')->with(['msg' => 'User Added!','color' => 'success']);
      }else{
         // echo "Nowhere";
         return redirect('/users/')->with(['msg' => 'Duplicate User','color' => 'danger']);
      }
    }
    public function updateUser(Request $req)
    {
      $id = decrypt($req->token);
      $user = User::find($id);
      $user->fullname = $req->fullname;
      $user->email = $req->email;
      if ($req->has('desc')) {
         $user->desc = $req->desc;
      }
      $user->save();
      return redirect('/users/')->with(['msg' => 'User Updated!','color' => 'success']);
    }
    public function deleteUser(Request $req)
    {
      $id = decrypt($req->token);
      $user = User::find($id);
      $user->delete();
      return redirect('/users/')->with(['msg' => 'User Deleted!','color' => 'success']);
    }

    public function updateProfile(Request $req)
    {
       $id = decrypt($req->token);
       $user = User::find($id);
       $user->email = $req->email;
       $user->fullname = $req->fullname;
       if($req->nPassword != ""){
          $user->password = bcrypt($req->nPassword);
       }
       if($req->has('image')){
         $code = rand(0,1000);
         $file = $req->image;
         $name = $file->getClientOriginalName();
         $tName = str_replace(" ","_",$name);
         $dest = "upload/profile";
         $filename = $code."-".$tName;
         $file->move($dest,$filename);
         $user->image = $filename;
       }
       $user->save();
       return redirect('/dashboard/')->with(['msg' => 'Profile Updated!','color' => 'success']);
    }

    public function geDebug()
    {
   //           //Data Pemilik
   //    $pemilik = array(
   //       'nama' => Input::get('pemilik_nama'),
   //       'ttl' => Input::get('tmpt_lahir').", ".Input::get('tgl_lahir'),
   //       'alamat' => Input::get('pemilik_alamat'),
   //       'nik' => Input::get('nik'),
   //       'jk' => Input::get('jk'),
   //       'kontak' => Input::get('kontak'),
   //       'ahli_waris' => Input::get('ahli_waris'),
   //       'pekerjaan' => Input::get('pekerjaan'),
   //       'pAhli_waris' => Input::get('pAhli_waris')
   //   );
   //   if (Input::hasFile('foto')) {
   //     $code = rand(0,1000);
   //     $file = Input::file('foto');
   //     $name = $file->getClientOriginalName();
       
   //     $dest = "upload";
   //     $filename = $code." - ".$name;
   //     $file->move($dest,$filename);
   //     $pemilik['foto'] = $filename;
   //   }
   //   DB::table('pemilik')->insert($pemilik);
    }
}
