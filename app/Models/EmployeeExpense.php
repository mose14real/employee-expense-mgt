<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class EmployeeExpense extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'uuid',
        'date',
        'merchant',
        'total',
        'status',
        'comment',
        'receipt',
    ];

    public static function findByUuid(string $uuid)
    {
        return self::where('uuid', $uuid)->first();
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
