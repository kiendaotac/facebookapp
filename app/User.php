<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Trebol\Entrust\Traits\EntrustUserTrait;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
{
    use Notifiable;
    use EntrustUserTrait; // add this trait to your user model
//    use SoftDeletes;
    use SoftDeletes, EntrustUserTrait {
        SoftDeletes::restore as sfRestore;
        EntrustUserTrait::restore as euRestore;

    }
    protected $adminRoles = ['Owner', 'Admin'];
    protected $appends = ['isOnline'];

    /* Cường's code */

    /* where get data user is owner */
    public function scopeListowner($query)
    {
        return $query->join('role_user', 'users.id','role_user.user_id')->where('role_user.user_id',1);
    }

    /* where get data user is admin */
    public function scopeListadmin($query)
    {
        return $query->join('role_user', 'users.id','role_user.user_id')->where('role_user.role_id','!=',1);
    }

    /* get data profile */
    public function profile()
    {
        return $this->hasMany('App\UserProfile','user_id','id');
    }

    /* check user is admin */
    public function isAdmin()
    {
       foreach ($this->adminRoles as $role){
           if (Auth::user()->hasRole($role)){
               return true;
           }
       }
       return false;
    }

    /* Kiên's code */

    public function restore() {
        $this->sfRestore();
        Cache::tags(Config::get('entrust.role_user_table'))->flush();
    }
    public static function funcIds(){
        $roles = Auth::user()->roles;
        $permissions    =   array();
        $functionsId    =   array();
        if (!empty($roles)){
            foreach ($roles as $role){
                $newPermissions =   $role->permissions;
                if (!empty($newPermissions)){
                    foreach ($newPermissions as $newPermission){
                        array_push($permissions, $newPermission);
                    }
                }
            }
        }

        if (!empty($permissions)){
            foreach ($permissions as $permission){
                array_push($functionsId,explode('-',$permission->name)[1]);
            }
        }

//        /* Function need login */
//        $funcLogin    =   Functions::where('state',1)->where('access',2)->select('id')->get()->toArray();
//        $funcLogin    =   array_column($funcLogin,'id');
//        foreach ($funcLogin as $item){
//            array_push($functionsId,$item);
//        }

        /* Function don't need login */
        $funcGuest    =   Functions::where('state',1)->where('access',3)->select('id')->get()->toArray();
        $funcGuest    =   array_column($funcGuest,'id');
        foreach ($funcGuest as $item){
            array_push($functionsId,$item);
        }
        return array_unique($functionsId);
    }

    public function info(){
        return $this->hasOne(UserInfo::class, 'user_id', 'id');
    }

    public function Account()
    {
        return $this->hasMany(Account::class, 'user_id', 'id');
    }

    public function isOnline(){
        return Cache::has('user-online-'.$this->id);
    }

    public function getIsOnlineAttribute(){
        return $this->isOnline();
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $dates = ['deleted_at'];
    protected $fillable = [
        'name', 'email', 'display_name', 'state', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
