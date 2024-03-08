<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

//    /**
//     * The table associated with the model.
//     *
//     * @var string
//     */
//    protected $table = 'orders';
//
//    /**
//     * The primary key associated with the table.
//     *
//     * @var string
//     */
//    protected $primaryKey = 'id';
//
//    /**
//     * Indicates if the model's ID is auto-incrementing.
//     *
//     * @var bool
//     */
//    public $incrementing = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'price',
    ];
}
