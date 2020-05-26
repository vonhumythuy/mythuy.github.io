<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class images extends Model
{
     protected $table = "images"; //Kết nối tới bảng Area

    use SoftDeletes;
    protected $date = ['deleted_at']; //Tạo thêm cột Deleted_at trong db

    public function news()
    {
    	return $this -> belongsTo ('App\news','news_id', 'id');
    }
}
