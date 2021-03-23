<?php

namespace App\Models;

use App\Models\Tag;
use App\Models\User;
use App\Models\Image;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Article extends Model
{
    use HasFactory;

    protected $fillable=[
        'title','slug','body','user_id','category_id',
    ];

    public function user(){
       return $this->belongsTo(User::class);
    }

    public function category(){
       return $this->belongsTo(Category::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function images(){
        return $this->hasMany(Image::class);
    }

    
    public function getCover()
    {
        $img=$this->images->first();
        if($img==null){
            return '/default/default.jpg';
        }else{
            return Storage::url($img->url);
            
        }
    } 
}
