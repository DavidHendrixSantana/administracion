import AppListing from '../app-components/Listing/AppListing';

Vue.component('person-listing', {
    mixins: [AppListing],

    data() {
        return {
            showTeachersFilter: false,
            teachersMultiselect: {},
    
            showSchedulesFilter: false,
            schedulesMultiselect: {},
    
            filters: {
                teachers: [],
                schedules:[],
            },
        }
    },
    
    watch: {
        showTeachersFilter: function (newVal, oldVal) {
            this.teachersMultiselect = [];
        },
        teachersMultiselect: function(newVal, oldVal) {
            this.filters.teachers = newVal.map(function(object) { return object['key']; });
            this.filter('teachers', this.filters.teachers);
        },

        showSchedulesFilter: function (newVal, oldVal) {
            this.schedulesMultiselect = [];
        },
        schedulesMultiselect: function(newVal, oldVal) {
            this.filters.schedules = newVal.map(function(object) { return object['key']; });
            this.filter('schedules', this.filters.schedules);
        }
    }
});