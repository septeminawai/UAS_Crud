<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GuestBookModel extends Model
{
    use HasFactory;

    protected $table = "guest_book";
    protected $primaryKey = 'id';
	protected $fillable = [
                            'name',
                            'mobile_phone_number',
                            'institution',
                            'position',
                            'necessities',
                            'dates',
                            'times',
                            'slug',
                            'status',
    ];
}
