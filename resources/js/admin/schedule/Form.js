import AppForm from '../app-components/Form/AppForm';

Vue.component('schedule-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                Hora_inicio:  '' ,
                Hora_final:  '' ,
                
            }
        }
    }

});