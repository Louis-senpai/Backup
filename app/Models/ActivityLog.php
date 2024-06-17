<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ActivityLog
 *
 * @property $id
 * @property $log_name
 * @property $description
 * @property $subject_type
 * @property $subject_id
 * @property $causer_type
 * @property $causer_id
 * @property $properties
 * @property $created_at
 * @property $updated_at
 * @property $event
 * @property $batch_uuid
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class ActivityLog extends Model
{
    protected $table = 'activity_log';

    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['log_name', 'description', 'subject_type', 'subject_id', 'causer_type', 'causer_id', 'properties', 'event', 'batch_uuid'];


}
