<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeedbackUsersModel extends Model
{
    use HasFactory;
    protected $table = "feedback_users";
    protected $primaryKey = 'id';
	protected $fillable = [
                            'email',
                            'subject',
                            'message',

    ];

}
