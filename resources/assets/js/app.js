import Vue from 'vue';
Vue.use(require('vue-resource'));
//import Notification from './components/Notification.vue';
//import Autocomplete from './components/Autocomplete.vue';
import SelectMultiple from './components/SelectMultiple.vue'
Vue.http.headers.common['X-CSRF-TOKEN'] = $("#token").attr("value");



const app = new Vue({
    
    el: '#manage-vue',



 


});


const appli = new Vue({


   el: '#app',

    components: { SelectMultiple },




    data: {
        disableWhenSelect:false,
        locataireShow:false,
        statutHabitation:"",
        users: [],
        loading: false,
        error: false,
        query: '',

    },


    methods: {
        search: function() {
            // Clear the error message.
            this.error = '';
            // Empty the products array so we can fill it with the new products.
            this.users = [];
            // Set the loading property to true, this will display the "Searching..." button.
            this.loading = true;


            // Making a get request to our API and passing the query to it.
            this.$http.get('/api/search?q=' + this.query).then((response) => {
                // If there was an error set the error message, if not fill the products array.
                response.body.error ? this.error = response.body.error : this.users = response.body;
            // The request is finished, change the loading to false again.
            this.loading = false;
            // Clear the query.
            this.query = '';
        });
    },

    GetNameProprietaire: function(){

        if(this.statutHabitation === "Locataire"){

            this.locataireShow = true; 
           

        }else{

         this.locataireShow = false; 

        }

    }
    
   


    }

});

