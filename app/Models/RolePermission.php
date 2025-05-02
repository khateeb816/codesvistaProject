<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RolePermission extends Model
{
    use HasFactory;

    protected $table = 'role_permissions';

    protected $fillable = [
        'role_name',
        'permission_name',
        'can_view',
        'can_add',
        'can_edit',
        'can_delete',
        'can_authorize',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];
}
