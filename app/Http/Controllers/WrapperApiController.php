<?php

namespace App\Http\Controllers;

use GuzzleHttp\Psr7\Uri;
use http\Url;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WrapperApiController extends Controller
{
    public function provinsi()
    {
        $json = Http::get( 'https://dev.farizdotid.com/api/daerahindonesia/provinsi')->json();
        return response()->json($json);
    }

    public function DetailProvinsi()
    {
        $json = Http::get( 'https://dev.farizdotid.com/api/daerahindonesia/provinsi/32')->json();
        return response()->json($json);
    }

    public function DetailKota()
    {
        $json = Http::get( 'https://dev.farizdotid.com/api/daerahindonesia/kota/3210')->json();
        return response()->json($json);
    }

    public function DetailKecamatan()
    {
        $json = Http::get( 'https://dev.farizdotid.com/api/daerahindonesia/kecamatan/3210010')->json();
        return response()->json($json);
    }

    public function DetailDesa()
    {
        $json = Http::get( 'https://dev.farizdotid.com/api/daerahindonesia/kelurahan/3210010005')->json();
        return response()->json($json);
    }

}
