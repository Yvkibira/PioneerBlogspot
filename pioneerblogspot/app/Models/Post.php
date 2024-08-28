<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Str;
use Carbon\Carbon;

class Post extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'headline', 'alternativeHeadline', 'keywords', 'slug', 'thumbnail', 'body', 'active', 'published_at', 'user_id'];

    protected $casts = [
        'published_at' => "datetime",
        'keywords' => 'array'
    ];
    public function formatDateToIso8601($date)
    {
        // Create a Carbon instance from the provided date
        $carbonDate = Carbon::parse($date);

        // Format the date to the desired ISO 8601 format with timezone offset
        return $carbonDate->format('Y-m-d\TH:i:sP');
    }
    public function getFormattedDate()

    {

        if (!empty($this->published_at)) {
            return $this->published_at->format('F jS Y');
        }
        return "";
    }
    public function shortBody()
    {
        return Str::words(strip_tags($this->body), 30);
    }
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class);
    }
}
