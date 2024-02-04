<?php

namespace TomatoPHP\TomatoContracts\Models;

use Illuminate\Database\Eloquent\Model;
use TomatoPHP\TomatoPms\Models\Project;

/**
 * @property integer $id
 * @property integer $user_id
 * @property integer $approved_by_id
 * @property integer $account_id
 * @property integer $employee_id
 * @property integer $project_id
 * @property string $type
 * @property string $title
 * @property string $body
 * @property boolean $is_active
 * @property boolean $is_completed
 * @property boolean $is_approved
 * @property mixed $placeholders
 * @property string $created_at
 * @property string $updated_at
 * @property Account $account
 * @property User $user
 * @property User $approvedBy
 * @property Project $project
 * @property User $user
 */
class Contract extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['user_id', 'approved_by_id', 'account_id', 'employee_id', 'project_id', 'type', 'title', 'body', 'is_active', 'is_completed', 'is_approved', 'placeholders', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function account()
    {
        return $this->belongsTo(config('tomato-crm.model'));
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function approvedBy()
    {
        return $this->belongsTo('App\Models\User', 'approved_by_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function employee()
    {
        return $this->belongsTo('App\Models\User', 'employee_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function project()
    {
        return $this->belongsTo(Project::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
