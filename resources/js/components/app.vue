<template>
    <div class="row">
        <div class="col-5 boxcontainer">
            
        </div>
        <div class="col-2"></div>
        <div class="col-5 boxcontainer">
            
        </div>
    </div>
</template>

<script>
export default {
    data: function(){
        return {
           item:{
               x: 1
           }
        }
    }
}
</script>

<style scoped>
.boxcontainer{
    border-radius: 50px;
    border-color: solid red;
    background: #73AD21;
    height: 500px;
}
</style>