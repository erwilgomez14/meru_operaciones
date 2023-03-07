<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $table = "menu";

    protected $fillable = ['nombre', 'url', 'icono'];

    protected $guarded = ['id'];

    // protected $timestamp
}
