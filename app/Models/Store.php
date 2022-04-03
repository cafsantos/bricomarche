<?php

namespace App\Models;

use \DateTimeInterface;
use App\Support\HasAdvancedFilter;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Store extends Model
{
    use HasFactory;
    use HasAdvancedFilter;
    use SoftDeletes;

    public $table = 'stores';

    public $filterable = [
        'id',
        'name',
        'slug',
    ];

    public $orderable = [
        'id',
        'name',
        'slug',
        'click_collect',
    ];

    protected $casts = [
        'click_collect' => 'boolean',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name',
        'slug',
        'click_collect',
        'address',
        'locality',
        'zipcode',
        'distrito',
        'concelho',
        'phone_number',
        'fax_number',
        'main_email',
        'secundary_email',
        'recruitment_email',
        'schedule',
        'coordinates',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
