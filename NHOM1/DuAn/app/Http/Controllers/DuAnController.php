<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\model\model_NhanVien;
use app\model\model_ChucVu;
use app\model\model_CongCu;
use app\model\model_KyNang;
use app\model\model_NgoaiNgu;
use app\mode\model_DuAn;

class DuAnController extends Controller
{
    public function ThongTin()
    {
        $NhanVien = model\model_NhanVien::all()->toArray();
        return view()->with('nhanvien',$NhanVien);
    }
}
