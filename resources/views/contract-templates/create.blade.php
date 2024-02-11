<x-tomato-admin-container label="{{trans('tomato-admin::global.crud.create')}} {{__('ContractTemplate')}}">
    <x-splade-form class="flex flex-col space-y-4" action="{{route('admin.contract-templates.store')}}" method="post">
        
          <x-splade-input :label="__('Name')" name="name" type="text"  :placeholder="__('Name')" />
          <x-tomato-admin-rich :label="__('Body')" name="body" :placeholder="__('Body')" autosize />
          
          

        <div class="flex justify-start gap-2 pt-3">
            <x-tomato-admin-submit  label="{{__('Save')}}" :spinner="true" />
            <x-tomato-admin-button secondary :href="route('admin.contract-templates.index')" label="{{__('Cancel')}}"/>
        </div>
    </x-splade-form>
</x-tomato-admin-container>
