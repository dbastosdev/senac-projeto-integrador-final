<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory;

    /**
     * Summary of table
     * @var string
     */
    protected $table = 'users';

    /**
     * Summary of fillable
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * Summary of getFirstName
     * @return string
     */
    public function firstName(): string
    {
    	return ucfirst(explode(' ', $this->name)[0]);
    }


    /**
     * Summary of role
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function role(): BelongsTo
    {
        return $this->belongsTo(User::class, 'role_id', 'id');
    }

}
