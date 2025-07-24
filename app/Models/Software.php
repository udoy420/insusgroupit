<?php

// namespace App\Models;

// use Illuminate\Database\Eloquent\Model;

// class Software extends Model
// {
//     protected $fillable = [
//         'title',
//         'category',
//         'image',
//         'filter',
//         'link',
//         'status',
//     ];
// }


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Software extends Model
{
    protected $table = 'softwares';

    protected $fillable = [
        'title',
        'category',
        'image',
        'filter',
        'link',
        'status',
    ];
}
