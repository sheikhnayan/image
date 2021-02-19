<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    use HasFactory;

    protected $fillable = [
        'full_name',
        'father_name',
        'mother_name',
        'email',
        'mobile',
        'alt_mobile',
        'present_address',
        'permanent_address',
        'bank_name',
        'account_number',
        'branch',
        'bank_address',
        'swift_code',
        'website_address',
        'bkash',
        'nagad',
        'rocket',
        'sure_cash',
        'whatsapp',
        'telegram',
        'viber',
        'nid',
        'passport',
        'facebook',
        'linkedin',
        'skype',
        'user_id'

    ];


    public function user(){

        return $this->belongsTo(User::class);

 }
}
