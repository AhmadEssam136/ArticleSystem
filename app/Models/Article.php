<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Article
 * @package App\Models
 * @version July 21, 2018, 12:02 pm UTC
 *
 * @property string title
 * @property string description
 */
class Article extends Model
{
    use SoftDeletes;

    public $table = 'articles';
    

    protected $dates = ['deleted_at'];

    public function user(){
        return $this->belongsTo('app\User');
    }

    public $fillable = [
        'title',
        'description',
        'image',
        'user_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'title' => 'string',
        'description' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required',
        'description' => 'required',
        'image'=> 'mimes:jpg,png,jpeg',
    ];

    
}
