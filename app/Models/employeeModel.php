<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employeeModel extends Model
{
    use HasFactory;
    protected $table = "employee";
    protected $primaryKey = 'id';
	protected $fillable = [
                            'name',
                            'mobile_phone_number',
                            'email',
                            'gender',
                            'place_of_date',
                            'date_of_birth',
                            'position',
                            'jobdesk',
                            'slug',

    ];
}
