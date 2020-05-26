<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class comments extends Model
{
    protected $table = "comments"; //Kết nối tới bảng Area

    use SoftDeletes;
    protected $date = ['deleted_at']; //Tạo thêm cột Deleted_at trong db

    public function user()
    {
    	return $this -> belongsTo ('App\user','user_id', 'id');
    }

    public function news()
    {
    	return $this -> belongsTo ('App\news','news_id', 'id');
    }
}
