<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Produk extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        // 'name', 'ukuran', 'description', 'price', 'rate', 'types', 'picturePath'
        'name', 'ukuran', 'stok', 'description', 'price', 'types', 'picturePath'
    ];

    public function toArray()
    {
        $toArray = parent::toArray();
        $toArray['picturePath'] = $this->picturePath;
        return $toArray;
    }

    public function getCreatedAtAttribute($created_at)
    {
        // return Carbon::parse($created_at)
        //     ->getPreciseTimestamp(3);

        return Carbon::parse($created_at)->timestamp;
    }
    public function getUpdatedAtAttribute($updated_at)
    {
        return Carbon::parse($updated_at)->timestamp;
    }

    public function getPicturePathAttribute()
    {
        // return config('app.url') . Storage::url($this->attributes['picturePath']);
        return config('app.url') . Storage::url($this->attributes['picturePath']);
    }
}
