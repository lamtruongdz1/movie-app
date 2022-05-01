<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;
    public $movieLastUpdate;

    public function __construct($movieLastUpdate)
    {
        $this->movieLastUpdate = $movieLastUpdate;
    }
    public function getMovieLastUpdate()
    {
        return $this->movieLastUpdate;
    }
}
