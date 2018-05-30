<?php

namespace App;

use App\Filters\Filters;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use \Spatie\Tags\HasTags;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'price', 'description', 'photo', 'photo_description', 'category_id', 'user_id'
    ];

    public function scopeFilter($builder, Filters $filters){
        return $filters->apply($builder);
    }

    /**
     * A thread belongs to a creator.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function creator()
    {
        return $this->belongsTo(User::class, 'user_id');
    }


}
