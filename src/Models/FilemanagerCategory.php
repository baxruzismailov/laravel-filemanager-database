<?php

namespace Baxruzismailov\Filemanager\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FilemanagerCategory extends Model
{
    use HasFactory;

    protected $table = 'filemanager_categories';
    protected $primaryKey = 'id';
    protected $guarded = [];


}
