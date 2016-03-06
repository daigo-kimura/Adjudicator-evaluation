<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Round extends Model
{
    protected $fillable = ['name', 'silent'];

    public static function getTableHeader() {
        $tableHeader = ['Name', 'Silent'];
        return $tableHeader;
    }
}
