import AppForm from '../app-components/Form/AppForm';

Vue.component('person-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                nombre: '',
                tutor:  '' ,
                edad:  '' ,
                telefono:  '' ,
                nivel:  '' ,
                teacher: '',
                schedule:  '' ,
                
            }
        }
        
    },
    props:[
        'teachers',
        'schedules'
    ],
   
    

});