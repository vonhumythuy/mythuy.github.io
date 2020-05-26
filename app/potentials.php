<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class potentials extends Model
{
    protected $table = "potentials"; //Kết nối tới bảng Area

    use SoftDeletes;
    protected $date = ['deleted_at']; //Tạo thêm cột Deleted_at trong db

    public function courses()
    {
    	return $this -> belongsTo ('App\courses','courses_id', 'id');
    }
}
