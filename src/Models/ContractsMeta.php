<?php

namespace TomatoPHP\TomatoContracts\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $contract_id
 * @property integer $user_id
 * @property string $model
 * @property integer $model_id
 * @property string $key
 * @property mixed $value
 * @property string $type
 * @property string $group
 * @property string $created_at
 * @property string $updated_at
 * @property Contract $contract
 * @property User $user
 */
class ContractsMeta extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['contract_id', 'user_id', 'model', 'model_id', 'key', 'value', 'type', 'group', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function contract()
    {
        return $this->belongsTo('TomatoPHP\TomatoContracts\Models\Contract');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
