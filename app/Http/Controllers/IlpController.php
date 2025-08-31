<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Barryvdh\DomPDF\Facade\Pdf as PDF;

class IlpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    
    /**
     * Generate PDF hasil pemeriksaan
     *
     * @param  int  $id
     * @return \Barryvdh\DomPDF\PDF
     */
    private function generatePdf($id)
    {
        try {
            // Ambil data pemeriksaan dari tabel ilp_dewasa
            $pemeriksaan = DB::table('ilp_dewasa')
                ->where('id', $id)
                ->first();
                
            if (!$pemeriksaan) {
                return null;
            }
            
            // Ambil data pasien
            $pasien = DB::table('pasien')
                ->where('no_rkm_medis', $pemeriksaan->no_rkm_medis)
                ->first();
                
            // Format tanggal pemeriksaan
            $tanggal = date('d-m-Y', strtotime($pemeriksaan->tanggal_pemeriksaan ?? now()));
            
            // Siapkan data untuk view PDF
            $data = [
                'pemeriksaan' => $pemeriksaan,
                'pasien' => $pasien,
                'tanggal' => $tanggal
            ];
            
            // Generate PDF
            $pdf = PDF::loadView('ilp.pdf.hasil_pemeriksaan', $data);
            return $pdf;
            
        } catch (\Exception $e) {
            Log::error('Error generating PDF: ' . $e->getMessage());
            return response()->json(['error' => 'Gagal membuat PDF'], 500);
        }
    }
    
    /**
     * Cetak hasil pemeriksaan dalam bentuk PDF
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function cetak($id)
    {
        try {
            $pdf = $this->generatePdf($id);
            
            if ($pdf instanceof \Illuminate\Http\JsonResponse) {
                return redirect()->back()->with('error', 'Gagal membuat file PDF');
            }
            
            return $pdf->stream('hasil_pemeriksaan_' . $id . '.pdf');
            
        } catch (\Exception $e) {
            Log::error('Error printing PDF: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }
    

}
