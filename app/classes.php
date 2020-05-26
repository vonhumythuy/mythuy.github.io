<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class classes extends Model
{
	protected $table = "classes"; //Kết nối tới bảng Area

    use SoftDeletes;
    protected $date = ['deleted_at']; //Tạo thêm cột Deleted_at trong db
    
    public function area()
    {
    	return $this -> belongsTo('App\area', 'area_id', 'id');
    }

    public function day()
    {
    	return $this -> BelongsTo('App\day','day_id','id');
    }

    public function time()
    {
    	return $this -> belongsTo ('App\time','time_id','id');
    }

    public function courses()
    {
    	return $this -> belongsTo('App\courses','courses_id','id');
    }

    public function teachers()
    {
    	return $this -> belongsTo ('App\teachers','teachers_id','id');
    }

    public function user()
    {
    	return $this -> hasMany ('App\user','user_id','id');
    }
}
