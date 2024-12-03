<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    // If your 'roles' table has additional columns (like description, etc.), you'd define them here.
    protected $fillable = ['name'];

    /**
     * Get the users associated with the role.
     */
    public function users()
    {
        return $this->hasMany(User::class); // Many-to-many relationship with User model
    }
}
