<?php

namespace App;
namespace App\Models\Traits;
use App\Models\ActivityLog;

trait LogsActivity
{
    //
    public static function bootLogsActivity()
    {
        static::created(function ($model) {
            self::logActivity($model, 'created');
        });

        static::updated(function ($model) {
            self::logActivity($model, 'updated');
        });

        static::deleted(function ($model) {
            self::logActivity($model, 'deleted');
        });
    }

    protected static function logActivity($model, $action)
    {
        ActivityLog::create([
            'user_id' => auth()->user->id(),
            'action' => $action,
            'model' => get_class($model),
            'description' => "{$action} data " . class_basename($model),
            'old_data' => $action === 'updated' ? json_encode($model->getOriginal()) : null,
            'new_data' => $action !== 'deleted' ? json_encode($model->getAttributes()) : null
        ]);
    }
}
