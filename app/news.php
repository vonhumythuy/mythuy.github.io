<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class news extends Model
{
     protected $table = "news"; //Kết nối tới bảng Area

    use SoftDeletes;
    protected $date = ['deleted_at']; //Tạo thêm cột Deleted_at trong db

    public function images()
    {
    	return $this -> hasMany ('App\images','images_id', 'id');
    }

    public function comments()
    {
    	return $this -> hasMany ('App\comments','comments_id', 'id');
    }
}
