<div class="form-group row align-items-center" :class="{'has-danger': errors.has('nombre'), 'has-success': fields.nombre && fields.nombre.valid }">
    <label for="nombre" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">Nombre de la persona:</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.nombre" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('nombre'), 'form-control-success': fields.nombre && fields.nombre.valid}" id="nombre" name="nombre" placeholder="{{ trans('admin.person.columns.nombre') }}">
        <div v-if="errors.has('nombre')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('nombre') }}</div>
    </div>
</div>
<div class="form-group row align-items-center" :class="{'has-danger': errors.has('tutor'), 'has-success': fields.tutor && fields.tutor.valid }">
    <label for="tutor" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">Nombre del tutor:</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.tutor" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('tutor'), 'form-control-success': fields.tutor && fields.tutor.valid}" id="tutor" name="tutor" placeholder="{{ trans('admin.person.columns.tutor') }}">
        <div v-if="errors.has('tutor')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('tutor') }}</div>
    </div>
</div>
<div class="form-group row align-items-center" :class="{'has-danger': errors.has('edad'), 'has-success': fields.edad && fields.edad.valid }">
    <label for="edad" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">Edad de la persona:</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.edad" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('edad'), 'form-control-success': fields.edad && fields.edad.valid}" id="edad" name="edad" placeholder="{{ trans('admin.person.columns.edad') }}">
        <div v-if="errors.has('edad')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('edad') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('telefono'), 'has-success': fields.telefono && fields.telefono.valid }">
    <label for="telefono" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">Telefono de la persona:</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.telefono" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('telefono'), 'form-control-success': fields.telefono && fields.telefono.valid}" id="telefono" name="telefono" placeholder="{{ trans('admin.person.columns.telefono') }}">
        <div v-if="errors.has('telefono')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('telefono') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('nivel'), 'has-success': fields.nivel && fields.nivel.valid }">
    <label for="nivel" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">Nivel de nado:</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.nivel" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('nivel'), 'form-control-success': fields.nivel && fields.nivel.valid}" id="nivel" name="nivel" placeholder="{{ trans('admin.person.columns.nivel') }}">
        <div v-if="errors.has('nivel')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('nivel') }}</div>
    </div>
</div>


<div class="form-group row align-items-center"
     :class="{'has-danger': errors.has('teacher_id'), 'has-success': this.fields.teacher_id && this.fields.teacher_id.valid }">
     <label for="teacher_id" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">Profesor :</label>

    <div class="col-md-8 col-lg-9">

        <multiselect
            v-model="form.teacher"
            :options="teachers"
            :multiple="false"
            track-by="id"
            label="nombre"
            tag-placeholder="{{ __('Select Teacher') }}"
            placeholder="{{ __('Teacher') }}">
        </multiselect>

        <div v-if="errors.has('teacher_id')" class="form-control-feedback form-text" v-cloak>@{{
            errors.first('teacher_id') }}
        </div>
    </div>
</div>



<div class="form-group row align-items-center"
     :class="{'has-danger': errors.has('schedule_id'), 'has-success': this.fields.schedule_id && this.fields.schedule_id.valid }">
     <label for="schedule_id" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">Horario :</label>

    <div class="col-md-8 col-lg-9">

        <multiselect
            v-model="form.schedule"
            :options="schedules"
            :multiple="false"
            track-by="id"
            label="Hora_inicio"
            tag-placeholder="{{ __('Select Schedule') }}"
            placeholder="{{ __('Schedule') }}">
        </multiselect>

        <div v-if="errors.has('schedule_id')" class="form-control-feedback form-text" v-cloak>@{{
            errors.first('schedule_id') }}
        </div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('imagen'), 'has-success': fields.imagen && fields.imagen.valid }">
    <label for="imagen" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">Foto de la persona:</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input   type="file"   @change="uploadImage" v-validate="'required'" class="form-control" id="imagen" name="imagen" >
        <div v-if="errors.has('imagen')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('imagen') }}</div>
    </div>
</div>




