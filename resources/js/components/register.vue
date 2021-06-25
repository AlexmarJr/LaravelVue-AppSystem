<template>
    <div class="container-fluid" style="width: 50%">
        <div class="mb-3 input-group">
            <span for="" class="input-group-text">E-Mail</span>
            <input type="text" class="form-control" 
            v-model="data_register.email" 
            :class="[data_register.email == '' ? 'disable' : 'enable']">
        </div>
        <div class="mb-3 input-group">
            <span for="" class="input-group-text">Nome</span>
            <input type="text" class="form-control" 
            v-model="data_register.name" 
            :class="[data_register.name == '' ? 'disable' : 'enable']">
        </div>
        <div class="mb-3 input-group">
            <label for="" class="input-group-text">Senha</label>
            <input type="password" class="form-control"
            v-model="data_register.password" 
            :class="[data_register.password != data_register.check_pass || data_register.password == '' ? 'disable' : 'enable']">
        </div>
        <div class="mb-3 input-group" :class="[data_register.password != data_register.check_pass ? 'active' : 'nope']">
            <label for="" class="input-group-text">Confirmar Senha</label>
            <input type="password" class="form-control" 
            v-model="data_register.check_pass" 
            :class="[data_register.password != data_register.check_pass || data_register.password == '' ? 'disable' : 'enable']">
        </div>

        <button class="float-right" @click="create_user()" 
        :class="[data_register.password != data_register.check_pass || data_register.password == '' ? 'btn btn-danger' : 'btn btn-success']">
            Login
        </button>
    </div>
</template>

<script>
export default {
    data: function(){
        return {
            data_register: {
                email: '',
                name: '',
                password: '',
                check_pass: ''
            }
        }
    },
    methods: {
        create_user(){
            if(this.data_register.password != this.data_register.check_pass || this.data_register.password == ''){
                swal.fire('Dados incompletos, Favor verificar informações');
                return ;
            }
 
            axios.post('/register', {
                email: this.data_register.email,
                name: this.data_register.name,
                password: this.data_register.password
            })
            .then( response => {
                if(response.status == 201){
                     window.location.href = "/home";
                }
            })
            .catch(function(error){
                alert(error);
            })
        }
    }
}
</script>

<style scoped>
.nope{
    color: red
}
.active{
    color: green
}

.disable{
    border-color: red;
    border-radius: 5px;
}
.enable{
    border-color: green;
    border-radius: 5px;
}
</style>