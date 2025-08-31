<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Encryption\Encrypter;
use Illuminate\Support\Facades\Log;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $config = [
            "title" => "Pilih Poliklinik",
            "liveSearch" => true,
            "liveSearchPlaceholder" => "Cari...",
            "showTick" => true,
            "actionsBox" => true,
        ];
        $poli = DB::table('poliklinik')->where('status', '1')->get();
        return view('auth.login-premium',['poli'=>$poli, 'config'=>$config]);
    }

    public function customLogin(Request $request)
    {
        try {
            $request->validate([
                'username' => 'required',
                'password' => 'required',
                'poli' => 'required',
            ]);

            // Authenticate user against database
            $user = DB::table('user')
                ->where('id_user', $request->username)
                ->first();

            if (!$user) {
                Log::warning('Login failed: User not found', [
                    'username' => $request->username,
                    'ip' => $request->ip() ?? 'unknown',
                    'user_agent' => $request->userAgent() ?? 'unknown'
                ]);

                return redirect()->route('login')
                    ->with('error', 'Username tidak terdaftar dalam sistem. Silakan periksa kembali username Anda atau hubungi administrator.');
            }

            // Decrypt and verify password
            try {
                // Try to decrypt the stored password
                $decryptedPassword = decrypt($user->password);
                
                if ($decryptedPassword !== $request->password) {
                    Log::warning('Login failed: Invalid password', [
                        'username' => $request->username,
                        'ip' => $request->ip() ?? 'unknown',
                        'user_agent' => $request->userAgent() ?? 'unknown'
                    ]);

                    return redirect()->route('login')
                        ->with('error', 'Password yang Anda masukkan salah. Silakan periksa kembali password Anda.');
                }
            } catch (\Exception $decryptError) {
                // If decryption fails, try direct comparison (for backward compatibility)
                if ($user->password !== $request->password) {
                    Log::warning('Login failed: Password mismatch (direct comparison)', [
                        'username' => $request->username,
                        'decrypt_error' => $decryptError->getMessage(),
                        'ip' => $request->ip() ?? 'unknown',
                        'user_agent' => $request->userAgent() ?? 'unknown'
                    ]);

                    return redirect()->route('login')
                        ->with('error', 'Password yang Anda masukkan salah. Silakan periksa kembali password Anda.');
                }
            }

            // Authentication successful - Set session data
            session([
                'username' => $request->username,
                'kd_poli' => $request->poli,
                'poli' => $request->poli,
                'logged_in' => true,
                'login_time' => now()->format('Y-m-d H:i:s')
            ]);

            // Pastikan session disimpan
            session()->save();

            // Log untuk debugging
            Log::info('Login: User logged in successfully', [
                'username' => $request->username,
                'kd_poli' => $request->poli,
                'poli' => $request->poli,
                'session_id' => session()->getId(),
                'ip' => $request->ip() ?? 'unknown',
                'user_agent' => $request->userAgent() ?? 'unknown'
            ]);

            return redirect()->intended('home')
                ->with('success', 'Login berhasil! Selamat datang di sistem.');
        } catch (\Exception $e) {
            Log::error('Login error: ' . $e->getMessage(), [
                'exception' => $e,
                'request' => $request->except('password'), // Don't log password
                'trace' => $e->getTraceAsString()
            ]);

            return redirect()->route('login')
                ->with('error', 'Terjadi kesalahan sistem saat login. Silakan coba lagi atau hubungi administrator jika masalah berlanjut.');
        }
    }


    public function username()
    {
        return 'username';
    }

    protected function validateLogin(Request $request)
    {
        $this->validate($request, [
            $this->username() => 'required|string',
            'password' => 'required|string',
            'poli' => 'required',
        ],[
            'username.required' => 'NIP Dokter tidak boleh kosong',
            'password.required' => 'Password tidak boleh kosong',
            'poli.required' => 'Poli tidak boleh kosong',
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
    }
}
