<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AuditLog extends Model
{
    //

    // The table associated with the model
    protected $table = 'audit_logs';

    // Use timestamps for created_at and updated_at
    public $timestamps = true;

    // Mass assignable attributes
    protected $fillable = [
        'name',         // User name who performed the action
        'email',        // User email who performed the action
        'action',       // Action performed (e.g., created, updated)
        'timestamp',    // Date and time of the action
        'details',      // Details of the action (e.g., changes made)
        'user_id'       // Foreign key linking to the User model
    ];

    // Cast the timestamp to a datetime object and details to an array
    protected $casts = [
        'timestamp' => 'datetime',   // Convert the timestamp to a DateTime object
        'details' => 'array'         // Convert the details to an array
    ];

    /**
     * Get the user that owns the audit log.
     */
    public function user()
    {
        // Defines a relationship where an audit log belongs to a user
        return $this->belongsTo(User::class, 'user_id');
    }
}
