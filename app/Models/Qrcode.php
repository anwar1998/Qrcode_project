<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Qrcode extends Model
{
    use SoftDeletes;
    use HasFactory;

    const TYPE_SITE= 'SITE';
    const TYPE_NUMBER = 'NUMBER';
    const TYPE_PAGE = 'PAGE';

    protected $fillable = ['name','type','description','qrcode_value','user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
