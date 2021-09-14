<div class="form-group row align-items-center" :class="{'has-danger': errors.has('tutor'), 'has-success': fields.tutor && fields.tutor.valid }">
    <label for="tutor" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.person.columns.tutor') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.tutor" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('tutor'), 'form-control-success': fields.tutor && fields.tutor.valid}" id="tutor" name="tutor" placeholder="{{ trans('admin.person.columns.tutor') }}">
        <div v-if="errors.has('tutor')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('tutor') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('edad'), 'has-success': fields.edad && fields.edad.valid }">
    <label for="edad" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.person.columns.edad') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.edad" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('edad'), 'form-control-success': fields.edad && fields.edad.valid}" id="edad" name="edad" placeholder="{{ trans('admin.person.columns.edad') }}">
        <div v-if="errors.has('edad')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('edad') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('telefono'), 'has-success': fields.telefono && fields.telefono.valid }">
    <label for="telefono" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.person.columns.telefono') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.telefono" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('telefono'), 'form-control-success': fields.telefono && fields.telefono.valid}" id="telefono" name="telefono" placeholder="{{ trans('admin.person.columns.telefono') }}">
        <div v-if="errors.has('telefono')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('telefono') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('nivel'), 'has-success': fields.nivel && fields.nivel.valid }">
    <label for="nivel" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.person.columns.nivel') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.nivel" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('nivel'), 'form-control-success': fields.nivel && fields.nivel.valid}" id="nivel" name="nivel" placeholder="{{ trans('admin.person.columns.nivel') }}">
        <div v-if="errors.has('nivel')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('nivel') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('teacher_id'), 'has-success': fields.teacher_id && fields.teacher_id.valid }">
    <label for="teacher_id" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.person.columns.teacher_id') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.teacher_id" v-validate="'integer'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('teacher_id'), 'form-control-success': fields.teacher_id && fields.teacher_id.valid}" id="teacher_id" name="teacher_id" placeholder="{{ trans('admin.person.columns.teacher_id') }}">
        <div v-if="errors.has('teacher_id')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('teacher_id') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('schedule_id'), 'has-success': fields.schedule_id && fields.schedule_id.valid }">
    <label for="schedule_id" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.person.columns.schedule_id') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.schedule_id" v-validate="'integer'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('schedule_id'), 'form-control-success': fields.schedule_id && fields.schedule_id.valid}" id="schedule_id" name="schedule_id" placeholder="{{ trans('admin.person.columns.schedule_id') }}">
        <div v-if="errors.has('schedule_id')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('schedule_id') }}</div>
    </div>
</div>


