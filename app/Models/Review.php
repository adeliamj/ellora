<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'reviews';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'review_text',
        'rating',
        'image', // Tambahkan 'image' ke dalam $fillable
        'video', // Tambahkan 'video' ke dalam $fillable
    ];

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($review) {
            if (auth()->check()) {
                $review->user_id = auth()->id();
            }
        });
    }

    /**
     * Get the user that owns the review.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the product that the review belongs to.
     */
    public function product()
    {
        return $this->belongsTo(Product::class, 'id');
    }
}