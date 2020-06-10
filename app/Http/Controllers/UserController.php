<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\model\User;
use App\model\Project;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class UserController extends Controller
{
   //GET
   public function index()
   {
      if(!Auth::check()){
         return view('home');
      }else{
         return redirect('/dashboard');
      }
   }
   public function home(){
     return view('home');
   }
   public function v_register()
   {
      return view('register');
   }
   public function dashboard(){
      if (!Auth::check()) {
         return view('welcome');
      }
      $auth = User::find(Auth::id());
      return view("dashboard", compact('auth'));
   }
   public function logout()
   {
      Auth::logout();
      return redirect('/')->with(['msg' => 'Logged Out!','color' => 'success']);
   }
   public function view() {
      if (!Auth::check()) {
         return redirect('/');
      }
      $data = User::where('type','=',2)->orderBy('created_at','desc')->get();
      return view("user.view",["data" => $data]);
   }
   public function verify($id) {
      if (!Auth::check()) {
         return redirect('/');
      }
      $did = decrypt($id);
      $data = User::find($did);
      $data->verified = 1;
      $data->save();
      return redirect('/users')->with(['msg' => 'User Verified','color' => 'success']);
   }
   public function detail($id,$project_id = null) {
      if (!Auth::check()) {
         return redirect('/');
      }
      $did = decrypt($id);
      $data = User::find($did);
      return view("user.detail",["data" => $data, "eid" => $id, "project_id" => $project_id]);
   }
   public function editbyid($id,$project_id = null) {
      if (!Auth::check()) {
         return redirect('/');
      }
      $did = decrypt($id);
      $data = User::find($did);
      return view("user.edit",["data" => $data, "eid" => $id, "project_id" => $project_id]);
   }
   public function deletebyid($id,$project_id = null) {
      if (!Auth::check()) {
         return redirect('/');
      }
      $did = decrypt($id);
      $data = User::find($did);
      return view("user.delete",["data" => $data, "eid" => $id, "project_id" => $project_id]);
   }
   public function myProfile()
   {
      if (!Auth::check()) {
         return redirect('/');
      }
      $auth = User::find(Auth::id());
      return view("user.profile",["auth" => $auth]);
   }
   public function showNotification()
   {
      if (!Auth::check()) {
         return redirect('/');
      }
      $auth = User::find(Auth::id());
      $auth->unreadNotifications->markAsRead();
      return view("user.notification",["auth" => $auth]);
   }

   public function login(Request $request)
   {
      if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
         if(Auth::user()->verified == 1){
            return redirect('/dashboard')->with(['color' => 'success', 'msg' => 'Login Berhasil']);
         }else{
            Auth::logout();
            return redirect('/')->with(['color' => 'error', 'msg' => 'Not Verified Yet']);
         }
      }else{
         return back()->with(['color' => 'error', 'msg' => 'Login Gagal'])->withInput();
      }
   }
   public function register(Request $request)
   {
      $request->validate([
         'email' => 'required|email|max:30',
         'password' => 'required|min:8',
         'fullname' => 'required|max:50',
      ]);
      if ($request->password != $request->cpassword) {
         return back()->with(['color' => 'error', 'msg' => 'Password dan Confirm Password Not Matched'])->withInput();
      }

      if (User::where('email','=',$request->email)->count() > 0) {
         return back()->with(['color' => 'error', 'msg' => 'User Exists!'])->withInput();
      }else{
         $user = new User();
         $user->fullname = $request->fullname;
         $user->email = $request->email;
         $user->type = 2;
         $user->verified = 0;
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

   public function insertUser(Request $req)
   {
      $req->validate([
         'email' => 'required|email|max:30',
         'password' => 'required|min:8',
         'fullname' => 'required|max:50',
      ]);

      $cek = User::where('email','=',$req->email)->count();
      echo $cek;
      if($cek == 0){
         $user = new User();
         $user->fullname = $req->fullname;
         $user->email = $req->email;
         $user->password = bcrypt($req->password);
         $user->type = $req->type;
         if ($req->has('desc')) {
            $escape = htmlspecialchars($req->desc);
            $user->desc = nl2br($escape);
         }
         $user->save();
         // echo "Here";
         return redirect('/users/')->with(['msg' => 'User Added!','color' => 'success']);
      }else{
         // echo "Nowhere";
         return redirect('/users/')->with(['msg' => 'Duplicate User','color' => 'error']);
      }
   }
   public function updateUser(Request $req)
   {
      $req->validate([
         'email' => 'required|email|max:30',
         'fullname' => 'required|max:50',
         'desc' => 'nullable|max:255'
      ]);

      $id = decrypt($req->token);
      $user = User::find($id);
      $user->fullname = $req->fullname;
      $user->email = $req->email;
      if ($req->has('desc')) {
         $escape = htmlspecialchars($req->desc);
         $user->desc = nl2br($escape);
      }
      $user->save();

      if($req->project == ''){
         return redirect('/users/')->with(['msg' => 'User Updated!','color' => 'success']);
      }else{
         $data = Project::find(decrypt($req->project));
         return redirect('/projects/detail/'.$data->code)->with(['msg' => 'User Updated!','color' => 'success']);
      }
   }
   public function deleteUser(Request $req)
   {
      $id = decrypt($req->token);
      $user = User::find($id);
      $user->delete();
      if($req->project == ''){
         return redirect('/users/')->with(['msg' => 'User Deleted!','color' => 'success']);
      }else{
         return redirect('/projects/detail/'.$req->project)->with(['msg' => 'User Deleted!','color' => 'success']);
      }
   }

   public function updateProfile(Request $req)
   {
      $req->validate([
         'email' => 'required|email|max:30',
         'fullname' => 'required|max:50',
         'password' => 'nullable|max:50',
      ]);



      $id = decrypt($req->token);
      $user = User::find($id);
      if($user->email != $req->email && (User::where('email','=',$req->email)->count() > 0)){
         return back()->with(['msg' => 'Email Exists!','color' => 'error']);
      }
      $user->email = $req->email;
      $user->fullname = $req->fullname;
      if($req->password != ""){
         $user->password = bcrypt($req->password);
      }
      if ($req->has('image')) {
         $code = rand(0,1000);

         $file = $req->file('image')->storeAs(
            '/',
            $code.'_'.$req->file('image')->getClientOriginalName(),
            'profile'
         );
         if ($user->image != "/upload/profile/default.png") {
            File::delete(public_path($user->image));
         }
         $user->image = str_replace(env('APP_URL'),'',Storage::disk('profile')->url($file));

     }
      if ($req->desc != '') {
         $escape = htmlspecialchars($req->desc);
         $user->desc = nl2br($escape);
      }
      $user->save();
      return back()->with(['msg' => 'Profile Updated!','color' => 'success']);
   }
   public function file(Request $req)
   {
      // echo $req->check;
      // $code = rand(0,1000);
      // $a = "BIO100";
      // $path = $req->file('avatar')->storeAs(
      //    $a.'/Assignment/Assignment_Apa',
      //    $code.'_'.$req->file('avatar')->getClientOriginalName(),
      //    'project'
      // );
      foreach ($req->question as $question) {
         echo $question."<br>";
      }
      // return redirect('/file')->with(['msg' => 'Berhasil Upload','color' => 'success']);
   }

   public function geDebug()
   {
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
