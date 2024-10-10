<?php

namespace App\Http\Controllers;

use DateTime;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class TradeController extends Controller
{
    public function index(){
        $id = session('id');



        $apiUrl = "https://armor.on.joget.cloud/jw/api/list/list_app001_frm002?d-4723717-fn_collector=" . $id;
        $headers = [
            'api_id' => 'API-2e325620-13ad-46d5-8262-e41b12f4023a',
            'api_key' => 'b899cbf5232942358b17acfcb0261961',
            'token' => '5cd8aec52d58223cfb12586b71a646de9ab5a31199a7fe5b34a5ab4d0ea51ed4',
        ];

        $response = Http::withHeaders($headers)->withOptions(['verify' => false])->get($apiUrl);
        if($response->successful()){
            $data = $response->json();
        }
        
        return view('collection.collection', ["data" => $data]);
    }


    public function view($id){
        try{
            $apiUrl = "https://armor.on.joget.cloud/jw/api/form/app001_frm002/" . $id;
            $headers = [
                'api_id' => 'API-2e325620-13ad-46d5-8262-e41b12f4023a',
                'api_key' => 'b899cbf5232942358b17acfcb0261961',
                'token' => '5cd8aec52d58223cfb12586b71a646de9ab5a31199a7fe5b34a5ab4d0ea51ed4',
            ];
    
    
            $response = Http::withHeaders($headers)->withOptions(['verify' => false])->get($apiUrl);
    
            if($response->successful()){
                $data = $response->json();
                return view('collection.view', ["data" => $data]);
            }
        }  catch (\Exception){
             return redirect()->back();
        }
    }

    public function update($id){
        try{
            $apiUrlData = "https://armor.on.joget.cloud/jw/api/form/app001_frm002/" . $id;
            $headersData = [
                'api_id' => 'API-2e325620-13ad-46d5-8262-e41b12f4023a',
                'api_key' => 'b899cbf5232942358b17acfcb0261961',
                'token' => '5cd8aec52d58223cfb12586b71a646de9ab5a31199a7fe5b34a5ab4d0ea51ed4',
            ];
    
            $responseData = Http::withHeaders($headersData)->withOptions(['verify' => false])->get($apiUrlData);

            $apiUrlOption = "https://armor.on.joget.cloud/jw/api/list/list_app001_frm009/";
            $headersOption = [
            'api_id' => 'API-fce100df-cc6e-46a8-a15b-eef24bebc6d6',
            'api_key' => 'b899cbf5232942358b17acfcb0261961',
            'token' => '5cd8aec52d58223cfb12586b71a646de9ab5a31199a7fe5b34a5ab4d0ea51ed4',
            ];

            $responseOption = Http::withHeaders($headersOption)->withOptions(['verify' => false])->get($apiUrlOption);


            $apiUrlOptionKunjungan = "https://armor.on.joget.cloud/jw/api/list/list_app001_frm010/";
            $headersOptionKunjungan = [
            'api_id' => 'API-fce100df-cc6e-46a8-a15b-eef24bebc6d6',
            'api_key' => 'b899cbf5232942358b17acfcb0261961',
            'token' => '5cd8aec52d58223cfb12586b71a646de9ab5a31199a7fe5b34a5ab4d0ea51ed4',
            ];

            $responseOptionKunjungan = Http::withHeaders($headersOptionKunjungan)->withOptions(['verify' => false])->get($apiUrlOptionKunjungan);


    
            $data1 = $responseData->json();
            $data2 = $responseOption->json();
            $data3 = $responseOptionKunjungan->json();
            return view('collection.update', [
                'data' => $data1,
                'dataOption' => $data2,
                'kunjungan' => $data3,
            ]);
        }  catch (\Exception){
             return redirect()->back();
        }
    }


    public function store(Request $request)
    {
$data1 = [
    'no_rekening' => $request->input('no_rekening'),
    'nama_nasabah' => $request->input('nama_nasabah'),
    'alamat_nasabah' => $request->input('alamat_nasabah'),
    'no_handphone' => $request->input('no_handphone'),
    'tanggal_realisasi' => Carbon::createFromFormat('d/m/y', $request->input('tanggal_realisasi'))->format('Y-m-d'),
    'jangka_waktu' => $request->input('jangka_waktu'),
    'plafon' => $request->input('plafon'),
    'saldo_nominatif' => $request->input('saldo_nominatif'),
    'angsuran_pokok' => $request->input('angsuran_pokok'),
    'angsuran_bunga' => $request->input('angsuran_bunga'),
    'tunggakan_bunga' => $request->input('tunggakan_bunga'),
    'tunggakan_pokok' => $request->input('tunggakan_pokok'),
    'ftp' => $request->input('ftp'),
    'ftb' => $request->input('ftb'),
    'kolektibilitas' => $request->input('kolektibilitas'),
    'ao' => $request->input('ao'),
    'status_kunjungan' => $request->input('status_kunjungan'),
    'total_tunggakan' => $request->input('total_tunggakan'),
    'status_pembayaran' => $request->input('status_pembayaran'),
    'periode' => $request->input('periode'),
    'tanggal_janji_bayar' => Carbon::createFromFormat('d/m/y', $request->input('tanggal_janji_bayar'))->format('Y-m-d'),
];

    
        $data2 = [
            'nominal_pembayaran' => $request->input('nominal_pembayaran'),
            'lokasi_collection' => $request->input('lokasi_collection'),
        ];
    
        $apiConfigs = [
            [
                'url' => "https://armor.on.joget.cloud/jw/api/form/app001_frm002/saveOrUpdate",
                'headers' => [
                    'api_id' => 'API-2e325620-13ad-46d5-8262-e41b12f4023a',
                    'api_key' => 'b899cbf5232942358b17acfcb0261961',
                    'token' => '5cd8aec52d58223cfb12586b71a646de9ab5a31199a7fe5b34a5ab4d0ea51ed4',
                    'Content-Type' => 'application/x-www-form-urlencoded',
                ],
                'data' => $data1,
            ],
            [
                'url' => "https://armor.on.joget.cloud/jw/api/form/app001_frm008",
                'headers' => [
                    'api_id' => 'API-2e325620-13ad-46d5-8262-e41b12f4023a',
                    'api_key' => 'b899cbf5232942358b17acfcb0261961',
                    'token' => '5cd8aec52d58223cfb12586b71a646de9ab5a31199a7fe5b34a5ab4d0ea51ed4',
                    'Content-Type' => 'application/x-www-form-urlencoded',
                ],
                'data' => $data2,
            ],
        ];
    
        foreach ($apiConfigs as $config) {
            $response = Http::withHeaders($config['headers'])->withOptions(['verify' => false])->asForm()->put($config['url'], $config['data']);
            
            if ($response->successful()) {
                echo "Data berhasil diupdate ke " . $config['url'];
            } else {
                // Mencetak pesan kesalahan
                $errorMessage = "Gagal mengupdate data ke " . $config['url'] . ": " . $response->body();
                echo $errorMessage;
    
                // Log kesalahan untuk analisis lebih lanjut
                Log::error('API Error', [
                    'url' => $config['url'],
                    'status' => $response->status(),
                    'response' => $response->body(),
                    'data' => $config['data'],
                ]);
            }
        }
    }
}
