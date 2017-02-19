<template>


                <select class="form-control" id="statutHabitation" name="statutHabitation" v-model="statutHabitation" v-on:change="GetNameProprietaire">
                        <option value="Locataire">Locataire</option>
                        <option value="Propriètaire">Propriètaire</option>
                </select>


</template>

export default{

    data(){
        return{
            statutHabitation
        };
    }
}

</script>