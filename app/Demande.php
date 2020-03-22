<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Demande extends Model
{
    protected $table = "demandes";
    public $timestamps = false;
    protected $fillable = ['budget', 'status', 'date', 'service_id'];
}
