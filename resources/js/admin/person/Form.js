import AppForm from '../app-components/Form/AppForm';

Vue.component('person-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                tutor:  '' ,
                edad:  '' ,
                telefono:  '' ,
                nivel:  '' ,
                teacher_id:  '' ,
                schedule_id:  '' ,
                
            }
        }
    }

});