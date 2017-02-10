new Vue({

    el: '#manage-vue',

    data: {
        items: [],
        formErrors:{},
        formErrorsUpdate:{},
        newItem : {'invoice_no':'','title':''},


    },

    methods : {

        createItem: function(){
            var input = this.newItem;
            this.$http.post('/inovoices',input).then((response) => {
                this.newItem = {'invoice_no':'','title':''};
            $("#create-item").modal('hide');
            toastr.success('Item Created Successfully.', 'Success Alert', {timeOut: 5000});
        }, (response) => {
                this.formErrors = response.data;
                console.log( this.formErrors)
            });
        },


        


    }

});

