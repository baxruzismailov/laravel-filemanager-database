<?php

namespace Baxruzismailov\Filemanager\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FilemanagerFile extends Model
{
    use HasFactory;

    protected $table = 'filemanager_files';
    protected $primaryKey = 'id';
    protected $guarded = [];


}
