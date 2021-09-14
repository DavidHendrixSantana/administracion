<div class="form-group row align-items-center" :class="{'has-danger': errors.has('Hora_inicio'), 'has-success': fields.Hora_inicio && fields.Hora_inicio.valid }">
    <label for="Hora_inicio" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.schedule.columns.Hora_inicio') }}</label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <div class="input-group input-group--custom">
            <div class="input-group-addon"><i class="fa fa-clock-o"></i></div>
            <datetime v-model="form.Hora_inicio" :config="timePickerConfig" v-validate="'required|date_format:HH:mm:ss'" class="flatpickr" :class="{'form-control-danger': errors.has('Hora_inicio'), 'form-control-success': fields.Hora_inicio && fields.Hora_inicio.valid}" id="Hora_inicio" name="Hora_inicio" placeholder="{{ trans('brackets/admin-ui::admin.forms.select_a_time') }}"></datetime>
        </div>
        <div v-if="errors.has('Hora_inicio')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('Hora_inicio') }}</div>
    </div>
</div>


<div class="form-group row align-items-center" :class="{'has-danger': errors.has('Hora_final'), 'has-success': fields.Hora_final && fields.Hora_final.valid }">
    <label for="Hora_final" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.schedule.columns.Hora_final') }}</label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <div class="input-group input-group--custom">
            <div class="input-group-addon"><i class="fa fa-clock-o"></i></div>
            <datetime v-model="form.Hora_final" :config="timePickerConfig" v-validate="'required|date_format:HH:mm:ss'" class="flatpickr" :class="{'form-control-danger': errors.has('Hora_final'), 'form-control-success': fields.Hora_final && fields.Hora_final.valid}" id="Hora_final" name="Hora_final" placeholder="{{ trans('brackets/admin-ui::admin.forms.select_a_time') }}"></datetime>
        </div>
        <div v-if="errors.has('Hora_final')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('Hora_final') }}</div>
    </div>
</div>



