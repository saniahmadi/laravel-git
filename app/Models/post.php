<?php

namespace App\Models;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    use HasFactory;
    use SoftDeletes;
    public $directory="/image/";
    protected $date = ['deleted_at'];
    protected $fillable = ['title','content'];



    public function user()
    {
        return $this->belongsTo(user::class);
    }

    public function photos()
    {
        return $this->morphMany(photo::class,'imageable');
    }

    public function tags()
    {
        return $this->morphToMany(tag::class,'taggable');
    }
    //Accessor
    public function getTitleAttribute($value)
    {
//        return ucfirst($value);
        return strtoupper($value);

    }

    public function setTitleAttribute($value)
    {
        $this->attributes ['title'] = strtoupper($value);

    }

    public function getPathAttribute($value)
    {
        return $this->directory .$value;
    }
}

