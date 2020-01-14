<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Service extends Model
{
    protected $table = "services";
    protected $primaryKey = "id";
    public $timestamps = false;
    protected $fillable = ['nom', 'budget', 'siege_id'];
    public function personnels(){
        return $this->belongsToMany(User::class,'user_services');
    }
    public function depenses(){
        return $this->hasMany(Depense::class, 'service_id', 'id' );
    }
    public function siege(){
        return $this->belongsTo(Siege::class, 'siege_id', 'id' );
    }
}
