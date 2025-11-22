<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class Animal extends Model
{
    use HasFactory;

    protected $fillable = [
        'status',
        'report_date',
        'user_id',
        'guest_email',
        'guest_phone',
        'name',
        'species',
        'breed',
        'sex',
        'location_city',
        'location_region',
        'description',
        'image_path',
    ];

    /**
     * Automatically converts data types.
     */
    protected $casts = [
        'report_date' => 'datetime',
    ];

    /**
     * Defines the relationship that an Advertisement (Animal) belongs to one User (User).
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function getImageUrlAttribute(): string
    {
        // 1. If there is no path in the database, we return a generic placeholder
        if (!$this->image_path) {
            return 'https://via.placeholder.com/600x400.png?text=Chyb%C3%AD+foto';
        }

        // 2. check if it's our "fake" (Seeder) photo
        if (Str::startsWith($this->image_path, 'images/placeholders/')) {
            // Pokud ano, vrátíme cestu přímo z 'public/'
            return asset($this->image_path);
        }

        // 3. If it's not a fake photo, it's an upload from 'storage/'
        return Storage::disk('public')->url($this->image_path);
    }
    public function getSexInCzechAttribute(): string
    {
        return match ($this->sex) {
            'male' => 'Samec',
            'female' => 'Samice',
            default => 'Neznámé',
        };
    }
}
