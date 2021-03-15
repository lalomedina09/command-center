<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AppSetting extends Model
{
    use HasFactory;
    use SoftDeletes;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'created_at', 'updated_at',
    ];

    /**
     * Get user.
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id', 'id')->withTrashed();
    }

    /**
     * Get the user that created the user.
     */
    public function createdby()
    {
        return $this->belongsTo('App\Models\User', 'created_by', 'id')->withTrashed();
    }

    /**
     * Get the last user that updated the user.
     */
    public function updatedby()
    {
        return $this->belongsTo('App\Models\User', 'updated_by', 'id')->withTrashed();
    }

}
