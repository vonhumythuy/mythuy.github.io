<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class teachers extends Model
{
     protected $table = "teachers"; //Kết nối tới bảng Area

    use SoftDeletes;

    protected $date = ['deleted_at']; //Tạo thêm cột Deleted_at trong db

    public function classes()
    {
    	return $this -> hasMany ('App\classes','classes_id', 'id');
    }
}
