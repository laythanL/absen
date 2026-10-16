<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Hidden;
use Illuminate\Database\Eloquent\Model;


#[Fillable(['nis', 'nama', 'kelas','password'])]
#[Hidden(["password"])]
class Siswa extends Model
{

}
