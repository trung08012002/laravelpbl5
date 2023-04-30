<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DonHang extends Model
{
    use HasFactory;
    protected $donhang="donhang";
    protected $fillable=["id_trangthai","id_food","tongtien"];
    public function trangthai()
    {
        return $this->belongsTo(TrangThaiDonHang::class,"id_trangthai");
    }
    public function food()
    {
        
    }
}
