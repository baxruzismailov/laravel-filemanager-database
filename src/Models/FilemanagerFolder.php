<?php

namespace Baxruzismailov\Filemanager\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FilemanagerFolder extends Model
{
    use HasFactory;

    protected $table = 'filemanager_folders';
    protected $primaryKey = 'id';
    protected $guarded = [];


}
