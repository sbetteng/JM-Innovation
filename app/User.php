<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'cabang_id','name','username','email', 'password', 'role'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function cabang()
    {
        return $this->belongsTo('App\Cabang','cabang_id');
    }

//    public function infok3l()
//    {
//        return $this->hasOne('App\Infok3l');
//    }
//
//    public function draft()
//    {
//        return $this->hasOne('App\DraftP2K3');
//    }

//    public function created_laporan()
//    {
//        return $this->hasOne('App\LaporanP2K3', 'id', 'created_by');
//    }

//    public function approved_laporan()
//    {
//        return $this->hasOne('App\LaporanP2K3','id','approved_by');
//    }

    public function isGM(){
        $check = User::where([
            ['role','=','GM'],
            ['id','=',$this->id]
        ])->first();
        return $check != null;
    }

//    public function isSecretary(){
//        $check = User::where([
//            ['role','=','sekretaris'],
//            ['id','=',$this->id]
//        ])->first();
//        return $check != null;
//    }
//
//    public function isAdmin(){
//        $check = User::where([
//            ['role','=','admin'],
//            ['id','=',$this->id]
//        ])->first();
//        return $check != null;
//    }
//
//    public function isSuperadmin(){
//        $check = User::where([
//            ['role','=','superadmin'],
//            ['id','=',$this->id]
//        ])->first();
//        return $check != null;
//    }

    public function IsAdmin(){
        $check = User::where([
            ['role','=','admin'],
            ['id','=',$this->id]
        ])->first();
        return $check != null;
    }
    public function IsUser()
    {
        $check = User::where([
            ['role', '=', 'user'],
            ['id', '=', $this->id]
        ])->first();
        return $check != null;
    }
}
