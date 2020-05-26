<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class area extends Model
{
    protected $table = "Area"; //Kết nối tới bảng Area

    use SoftDeletes;

    protected $date = ['deleted_at']; //Tạo thêm cột Deleted_at trong db

    public function classes()
    {
    	return $this -> hasMany('App\classes','area_id', 'id');
    }
}
