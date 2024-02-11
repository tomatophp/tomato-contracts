<?php

namespace TomatoPHP\TomatoContracts\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $name
 * @property string $body
 * @property mixed $placeholders
 * @property mixed $presets
 * @property string $created_at
 * @property string $updated_at
 * @property Contract[] $contracts
 */
class ContractTemplate extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['name', 'body', 'placeholders', 'presets', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function contracts()
    {
        return $this->hasMany('TomatoPHP\TomatoContracts\Models\Contract');
    }
}
