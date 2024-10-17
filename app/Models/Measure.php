<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Measure extends Model
{
    public static $searchable = [
        'name',
        'clause',
        'objective',
        'input',
        'attributes',
        'model',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name',
        'clause',
        'objective',
        'input',
        'attributes',
        'model',
        'periodicity'
    ];

    // Return the domain associated to this measure
    public function domain()
    {
        return $this->belongsTo(Domain::class, 'domain_id');
    }

    // check if there is an empty control associated with this measure
    public function isActive()
    {
        return DB::table('controls')
            ->where('measure_id', $this->id)
            ->whereNull('realisation_date')
            ->exists();
    }

    // check if there is an empty control associated with this measure
    public function isDisabled()
    {
        return DB::table('controls')
            ->where('measure_id', $this->id)
            ->exists()
        &&
            ! DB::table('controls')
                ->where('measure_id', $this->id)
                ->whereNull('realisation_date')
                ->exists();
    }
}
