<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Project extends Model {
    protected $fillable = ['title','slug','thumbnail','description','tech','url'];
    protected $casts = ['tech'=>'array'];
}
