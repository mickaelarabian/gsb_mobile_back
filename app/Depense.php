<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Depense extends Model
{
    protected $table = "depenses";
    // protected $primaryKey = ['personnel_id', 'service_id'];
    public $timestamps = false;
    protected $fillable = ['service_id', 'user_id', 'date', 'libelle', 'description', 'prix'];
}
