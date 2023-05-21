<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Depress extends Model
{
    use HasFactory;
    protected $table = 'depress';
    protected $fillable = [
        'depress',
        'classification',];
}
