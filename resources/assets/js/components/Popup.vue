<template>

    <!-- Create Item Modal -->


</template>

<script>

    export default{


        data: {
            items: [],
            formErrors:{},
            formErrorsUpdate:{},
            newItem : {'invoice_no':'','title':''},
            fillItem : {'invoice_no':'','title':'','id':''}
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
                });
            },

        }
    }




</script>