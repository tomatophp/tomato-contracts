<?php

namespace TomatoPHP\TomatoContracts\Models;

use Illuminate\Database\Eloquent\Model;
use TomatoPHP\TomatoHr\Models\Employee;
use TomatoPHP\TomatoLocations\Models\Area;
use TomatoPHP\TomatoLocations\Models\City;
use TomatoPHP\TomatoLocations\Models\Country;
use TomatoPHP\TomatoLocations\Models\Currency;
use TomatoPHP\TomatoPms\Models\Project;

/**
 * @property integer $id
 * @property integer $user_id
 * @property integer $contract_template_id
 * @property integer $account_id
 * @property integer $employee_id
 * @property integer $project_id
 * @property integer $country_id
 * @property integer $city_id
 * @property integer $area_id
 * @property integer $currency_id
 * @property integer $approved_by_id
 * @property boolean $is_active
 * @property boolean $is_completed
 * @property string $date
 * @property string $time
 * @property string $notes
 * @property boolean $is_approved
 * @property string $created_at
 * @property string $updated_at
 * @property Account $account
 * @property User $user
 * @property Area $area
 * @property City $city
 * @property ContractTemplate $contractTemplate
 * @property Country $country
 * @property Currency $currency
 * @property Employee $employee
 * @property Project $project
 * @property User $user
 * @property ContractsMeta[] $contractsMetas
 */
class Contract extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['user_id', 'contract_template_id', 'account_id', 'employee_id', 'project_id', 'country_id', 'city_id', 'area_id', 'currency_id', 'approved_by_id', 'is_active', 'is_completed', 'date', 'time', 'notes', 'is_approved', 'created_at', 'updated_at'];

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
    public function area()
    {
        return $this->belongsTo(Area::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function city()
    {
        return $this->belongsTo(City::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function contractTemplate()
    {
        return $this->belongsTo('TomatoPHP\TomatoContracts\Models\ContractTemplate');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function currency()
    {
        return $this->belongsTo(Currency::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function employee()
    {
        return $this->belongsTo(Employee::class);
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

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function contractsMetas()
    {
        return $this->hasMany('TomatoPHP\TomatoContracts\Models\ContractsMeta');
    }
}
