<?php

namespace TomatoPHP\TomatoContracts\Tables;

use Illuminate\Http\Request;
use ProtoneMedia\Splade\AbstractTable;
use ProtoneMedia\Splade\Facades\Toast;
use ProtoneMedia\Splade\SpladeTable;
use Illuminate\Database\Eloquent\Builder;

class ContractTable extends AbstractTable
{
    /**
     * Create a new instance.
     *
     * @return void
     */
    public function __construct(public mixed $query=null)
    {
        if(!$query){
            $this->query = \TomatoPHP\TomatoContracts\Models\Contract::query();
        }
    }

    /**
     * Determine if the user is authorized to perform bulk actions and exports.
     *
     * @return bool
     */
    public function authorize(Request $request)
    {
        return true;
    }

    /**
     * The resource or query builder.
     *
     * @return mixed
     */
    public function for()
    {
        return $this->query;
    }

    /**
     * Configure the given SpladeTable.
     *
     * @param \ProtoneMedia\Splade\SpladeTable $table
     * @return void
     */
    public function configure(SpladeTable $table)
    {
        $table
            ->withGlobalSearch(
                label: trans('tomato-admin::global.search'),
                columns: ['id',]
            )
            ->bulkAction(
                label: trans('tomato-admin::global.crud.delete'),
                each: fn (\TomatoPHP\TomatoContracts\Models\Contract $model) => $model->delete(),
                after: fn () => Toast::danger(__('Contract Has Been Deleted'))->autoDismiss(2),
                confirm: true
            )
            ->defaultSort('id', 'desc')
            ->column(
                key: 'id',
                label: __('Id'),
                sortable: true
            )
            ->column(
                key: 'user_id',
                label: __('User id'),
                sortable: true
            )
            ->column(
                key: 'contract_template_id',
                label: __('Contract template id'),
                sortable: true
            )
            ->column(
                key: 'account_id',
                label: __('Account id'),
                sortable: true
            )
            ->column(
                key: 'employee_id',
                label: __('Employee id'),
                sortable: true
            )
            ->column(
                key: 'project_id',
                label: __('Project id'),
                sortable: true
            )
            ->column(
                key: 'country_id',
                label: __('Country id'),
                sortable: true
            )
            ->column(
                key: 'city_id',
                label: __('City id'),
                sortable: true
            )
            ->column(
                key: 'area_id',
                label: __('Area id'),
                sortable: true
            )
            ->column(
                key: 'currency_id',
                label: __('Currency id'),
                sortable: true
            )
            ->column(
                key: 'approved_by_id',
                label: __('Approved by id'),
                sortable: true
            )
            ->column(
                key: 'is_active',
                label: __('Is active'),
                sortable: true
            )
            ->column(
                key: 'is_completed',
                label: __('Is completed'),
                sortable: true
            )
            ->column(
                key: 'date',
                label: __('Date'),
                sortable: true
            )
            ->column(
                key: 'time',
                label: __('Time'),
                sortable: true
            )
            ->column(
                key: 'notes',
                label: __('Notes'),
                sortable: true
            )
            ->column(
                key: 'is_approved',
                label: __('Is approved'),
                sortable: true
            )
            ->column(key: 'actions',label: trans('tomato-admin::global.crud.actions'))
            ->export()
            ->paginate(10);
    }
}
