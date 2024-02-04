<x-tomato-admin-container label="{{trans('tomato-admin::global.crud.edit')}} {{__('Contract')}} #{{$model->id}}">
    <x-splade-form class="flex flex-col space-y-4" action="{{route('admin.contracts.update', $model->id)}}" method="post" :default="$model">
        
          <x-splade-select :label="__('User id')" :placeholder="__('User id')" name="user_id" remote-url="/admin/users/api" remote-root="data" option-label="name" option-value="id" choices/>
          <x-splade-select :label="__('Approved by id')" :placeholder="__('Approved by id')" name="approved_by_id" remote-url="/admin/users/api" remote-root="data" option-label="name" option-value="id" choices/>
          <x-splade-select :label="__('Account id')" :placeholder="__('Account id')" name="account_id" remote-url="/admin/accounts/api" remote-root="data" option-label="name" option-value="id" choices/>
          <x-splade-select :label="__('Employee id')" :placeholder="__('Employee id')" name="employee_id" remote-url="/admin/users/api" remote-root="data" option-label="name" option-value="id" choices/>
          <x-splade-select :label="__('Project id')" :placeholder="__('Project id')" name="project_id" remote-url="/admin/projects/api" remote-root="data" option-label="name" option-value="id" choices/>
          <x-splade-input :label="__('Type')" name="type" type="text"  :placeholder="__('Type')" />
          <x-splade-input :label="__('Title')" name="title" type="text"  :placeholder="__('Title')" />
          <x-tomato-admin-rich :label="__('Body')" name="body" :placeholder="__('Body')" autosize />
          <x-splade-checkbox :label="__('Is active')" name="is_active" label="Is active" />
          <x-splade-checkbox :label="__('Is completed')" name="is_completed" label="Is completed" />
          <x-splade-checkbox :label="__('Is approved')" name="is_approved" label="Is approved" />
          

        <div class="flex justify-start gap-2 pt-3">
            <x-tomato-admin-submit  label="{{__('Save')}}" :spinner="true" />
            <x-tomato-admin-button danger :href="route('admin.contracts.destroy', $model->id)"
                                   confirm="{{trans('tomato-admin::global.crud.delete-confirm')}}"
                                   confirm-text="{{trans('tomato-admin::global.crud.delete-confirm-text')}}"
                                   confirm-button="{{trans('tomato-admin::global.crud.delete-confirm-button')}}"
                                   cancel-button="{{trans('tomato-admin::global.crud.delete-confirm-cancel-button')}}"
                                   method="delete"  label="{{__('Delete')}}" />
            <x-tomato-admin-button secondary :href="route('admin.contracts.index')" label="{{__('Cancel')}}"/>
        </div>
    </x-splade-form>
</x-tomato-admin-container>
