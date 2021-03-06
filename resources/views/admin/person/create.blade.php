@extends('brackets/admin-ui::admin.layout.default')

@section('title', trans('admin.person.actions.create'))

@section('body')

    <div class="container-xl">

                <div class="card">
        
        <person-form
            :teachers="{{$teachers->toJson()}}"
            :schedules="{{$schedules->toJson()}}"
            :action="'{{ url('admin/people') }}'"
            v-cloak
            inline-template>

            <form class="form-horizontal form-create" method="post" @submit.prevent="onSubmit" :action="action"  enctype="multipart/form-data" novalidate>
                
                <div class="card-header">
                    <i class="fa fa-plus"></i> {{ trans('admin.person.actions.create') }}
                </div>

                <div class="card-body">
                    @include('admin.person.components.form-elements')
                </div>
                                
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary" :disabled="submiting">
                        <i class="fa" :class="submiting ? 'fa-spinner' : 'fa-download'"></i>
                        {{ trans('brackets/admin-ui::admin.btn.save') }}
                    </button>
                </div>
                
            </form>

        </person-form>

        </div>

        </div>

    
@endsection