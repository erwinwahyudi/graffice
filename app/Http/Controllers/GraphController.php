<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PengarsipanSuratMasuk;
use App\User;
use DB;

class GraphController extends Controller
{
    public function api()
    {
    	$data['suratmasuk']							=	DB::table('users')->select('username', 'realname')
    												  					  ->get();

        foreach ($data['suratmasuk'] as $key => $user) {
    		$count									=	PengarsipanSuratMasuk::where('username_tujuan_surat', $user->username)->count();
    		$data['suratmasuk'][$key]->total_surat	= 	$count;

            if($count !== 0) {
                $data['api_suratmasuk'][] = array(  
                                                    "nama" => $user->realname, 
                                                    "total_surat" => $user->total_surat
                                                 );
            }
    	}

        return response($data['api_suratmasuk'])
		           ->header('Content-Type', 'text/plain');
    }


    public function grafik()
    {
    	return view('admin.index', compact('data'));	
    }

    public function hichart()
    {
        $data['suratmasuk']                         =   DB::table('users')->get();

        foreach ($data['suratmasuk'] as $key => $user) {
            $count                                  =   PengarsipanSuratMasuk::where('username_tujuan_surat', $user->username)->where('tahun', '2017')->count();
            $data['suratmasuk'][$key]->total_surat  =   $count;
        }

        return view('admin.hichart', compact('data'));
    }

    public function piechart()
    {
        $data['suratmasuk']                         =   DB::table('users')->get();

        foreach ($data['suratmasuk'] as $key => $user) {
            $count                                  =   PengarsipanSuratMasuk::where('username_tujuan_surat', $user->username)->where('tahun', '2017')->count();
            $data['suratmasuk'][$key]->total_surat  =   $count;
        }

        return view('admin.piechart_suratmasuk', compact('data'));
    }

    public function hichart_disposisi()
    {
        $data['disposisi']                              =   DB::table('users')->get();

        foreach ($data['disposisi'] as $key => $user) {
            $count                                      =   DB::table('memo')->where('username_tujuan', $user->username)
                                                                             ->whereYear('timestamp', '=', 2017)
                                                                             ->count();
            $data['disposisi'][$key]->total_disposisi   =   $count;
        }

        // return $data['disposisi'];

        return view('admin.grafik_disposisi', compact('data'));
    }

    public function hichartvertikal_disposisi()
    {
        $data['disposisi']                              =   DB::table('users')->get();

        foreach ($data['disposisi'] as $key => $user) {
            $count                                      =   DB::table('memo')->where('username_tujuan', $user->username)
                                                                             ->whereYear('timestamp', '=', 2017)
                                                                             ->count();
            $data['disposisi'][$key]->total_disposisi   =   $count;
        }

        // return $data['disposisi'];

        return view('admin.grafikvertikal_disposisi', compact('data'));
    }


    public function disposisi_keluar()
    {
        $data['disposisi']                              =   DB::table('users')->get();

        foreach ($data['disposisi'] as $key => $user) {
            $count                                      =   DB::table('memo')->where('username_pembuat', $user->username)
                                                                             ->whereYear('timestamp', '=', 2017)
                                                                             ->count();
            $data['disposisi'][$key]->total_disposisi   =   $count;
        }

        // return $data['disposisi'];

        return view('admin.disposisi_keluar', compact('data'));
    }

}
		
