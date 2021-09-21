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
                imagen:  Object,
                
            }
        }
        
    },

    props:[
        'teachers',
        'schedules',
       
        
    ],

    methods :{
        uploadImage(e) {
            const image = e.target.files[0];
         
            this.form.imagen =e.target.files[0];
            console.log(this.form.imagen)

        }
    }
   
    

});