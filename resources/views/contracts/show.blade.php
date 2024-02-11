<x-tomato-admin-container label="{{trans('tomato-admin::global.crud.view')}} {{__('Contract')}} #{{$model->id}}">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
        
          <x-tomato-admin-row :label="__('User')" :value="$model->User->name" type="text" />

          <x-tomato-admin-row :label="__('Contract template')" :value="$model->Contract_template->name" type="text" />

          <x-tomato-admin-row :label="__('Account')" :value="$model->Account->name" type="text" />

          <x-tomato-admin-row :label="__('Employee')" :value="$model->Employee->id" type="text" />

          <x-tomato-admin-row :label="__('Project')" :value="$model->Project->name" type="text" />

          <x-tomato-admin-row :label="__('Country')" :value="$model->Country->name" type="text" />

          <x-tomato-admin-row :label="__('City')" :value="$model->City->name" type="text" />

          <x-tomato-admin-row :label="__('Area')" :value="$model->Area->name" type="text" />

          <x-tomato-admin-row :label="__('Currency')" :value="$model->Currency->name" type="text" />

          <x-tomato-admin-row :label="__('Approved by')" :value="$model->Approved_by->name" type="text" />

          <x-tomato-admin-row :label="__('Is active')" :value="$model->is_active" type="bool" />

          <x-tomato-admin-row :label="__('Is completed')" :value="$model->is_completed" type="bool" />

          <x-tomato-admin-row :label="__('Date')" :value="$model->date" type="text" />

          <x-tomato-admin-row :label="__('Time')" :value="$model->time" type="text" />

          <x-tomato-admin-row :label="__('Notes')" :value="$model->notes" type="rich" />

          <x-tomato-admin-row :label="__('Is approved')" :value="$model->is_approved" type="bool" />

    </div>
    <div class="flex justify-start gap-2 pt-3">
        <x-tomato-admin-button warning label="{{__('Edit')}}" :href="route('admin.contracts.edit', $model->id)"/>
        <x-tomato-admin-button danger :href="route('admin.contracts.destroy', $model->id)"
                               confirm="{{trans('tomato-admin::global.crud.delete-confirm')}}"
                               confirm-text="{{trans('tomato-admin::global.crud.delete-confirm-text')}}"
                               confirm-button="{{trans('tomato-admin::global.crud.delete-confirm-button')}}"
                               cancel-button="{{trans('tomato-admin::global.crud.delete-confirm-cancel-button')}}"
                               method="delete"  label="{{__('Delete')}}" />
        <x-tomato-admin-button secondary :href="route('admin.contracts.index')" label="{{__('Cancel')}}"/>
    </div>
</x-tomato-admin-container>
