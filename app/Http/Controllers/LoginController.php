<?php

namespace App\Http\Controllers;

use Illuminate\Container\Attributes\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use PhpParser\Node\Stmt\Return_;

class LoginController extends Controller
{

    public function index(){
        return view('collection.login');
    }

    public function login (Request $request){
        try {   
            $data = [
                'username' => $request->username,
                'password' => $request->password,
            ];
        
            $apiUrl = "https://armor.on.joget.cloud/jw/api/list/list_app001_frm003?d-4723718-fn_username=" . $data['username'];
            $headers = [
                'api_id' => 'API-9bfb0dc3-5f97-4bfd-b898-03996499babd',
                'api_key' => 'b899cbf5232942358b17acfcb0261961',
                'token' => '5cd8aec52d58223cfb12586b71a646de9ab5a31199a7fe5b34a5ab4d0ea51ed4',
            ];
        
            $response = Http::withHeaders($headers)->withOptions(['verify' => false,'timeout' => 30])->post($apiUrl, $data);
            if ($response->successful()) {
                $apiData = $response->json();
        
                foreach ($apiData['data'] as $user) {
                    if ($user['username'] === $request->username && $user['password'] === $request->password) {
                        $userData = [
                            'id' => $user['id'],      
                            'username' => $user['username'],
                            'nama_karyawan' => $user['nama_karyawan'],
                            'initial' => $user['initial'],     
                        ];
                        session(['id' => $user['id']]);
                        session(['initial' => $user['initial']]);
                        session(['user_data' => $userData]);
                        return redirect()->route('home.index');
                    }
                }
        
                return redirect()->back()->withErrors(['login' => 'Username atau password salah.']);
                
            } else {
                return redirect()->back()->withErrors(['login' => 'Login gagal.']);
            }
        
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['login' => 'Terjadi kesalahan: ' . $e->getMessage()]);
        }        
    }

    public function logout(Request $request){
        Session::flush();
        return redirect()->route('login.index');
    }
}
