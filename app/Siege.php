<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Siege extends Model
{
    protected $table = "sieges";
    protected $primaryKey = "id";
    public $timestamps = false;
    protected $fillable = ['nom', 'ville', 'pays', 'budget'];
}
