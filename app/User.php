<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

use App\Models\Pedido;
use App\Models\Role;
use App\Models\Permission;
use App\Models\Address;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function roles() {
        return $this->belongsToMany(Role::class);
    }

    public function addresses() {
        return $this->hasMany(Address::class);
    }

    public function pedidos() {
        return $this->hasMany(Pedido::class);
    }

    public function hasPermission(Permission $permission) {
        $roles = $permission->roles;
    
        return $this->hasAnyRoles($roles);
    }

    public function hasAnyRoles($roles) {

        if (is_array($roles) || is_object($roles)) {
            return !! $roles->intersect($this->roles)->count();
        }

        return $this->roles->contains('name', $roles);

    }
}
