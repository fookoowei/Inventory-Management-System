<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $primaryKey = 'order_id';
    public $timestamps = true;

    protected $fillable = [
        'date', 
        'client_name', 
        'client_contact', 
        'sub_total', 
        'vat', 
        'total_amount', 
        'discount', 
        'grand_total', 
        'paid', 
        'due', 
        'payment_type', 
        'payment_status', 
        'payment_place', 
        'gstn', 
        'order_status', 
        'user_id'
    ];

    protected $guarded = [
        'order_id'
    ];
}