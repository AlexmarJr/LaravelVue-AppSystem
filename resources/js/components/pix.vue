<template>
     <div>
        <div class="container boxcontainer">
            <h2 style="text-align:center;padding-top: 20px">PIX</h2>
            <hr>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                Launch demo modal
            </button>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Configuração das suas Chaves</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import pixKeys from './pixComponents/keys.vue'

export default {
    components: {
        pixKeys
    },
    data: function(){
        return{
            keys: []
        }
   },
   methods: {
    //    getList(){
    //        axios.get('api/items')
    //        .then( response => {
    //            this.keys = response.data
    //        })
    //        .catch( error => {
    //            alert(error);
    //        })
    //    }
   },
    created(){
        this.getList();
    }
}
</script>

<style scoped>
.boxcontainer{
    border-radius: 50px;
    border-color: solid red;
    background:wheat;
    height: 600px;
}
</style>