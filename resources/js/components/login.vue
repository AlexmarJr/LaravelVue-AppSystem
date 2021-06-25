<template>
    <div class="container-fluid" style="width: 50%">
        <div class="mb-3 input-group">
            <span for="" class="input-group-text">E-Mail</span>
            <input type="text" class="form-control" v-model="data_login.email">
        </div>
        <div class="mb-3 input-group">
            <label for="" class="input-group-text">Senha</label>
            <input type="password" class="form-control" v-model="data_login.password">
        </div>

        <button class="btn btn-primary float-right" @click="login()">
            Login
        </button>
    </div>
</template>

<script>
export default {
    data: function(){
        return {
            data_login: {
                email: "",
                password: ""
            }
        }
    },
    methods: {
        login(){
            axios.post('/login', {
                email: this.data_login.email,
                password: this.data_login.password
            })
            .then(response => {
                window.location.href = "/home";
                // this.$router.push('/');
                
            })
            .catch( function(error){
                if(error.response.status == 422){
                    swal.fire({
                        icon: 'error',
                        title: 'OPSY',
                        text: 'Credenciais não foram encontradas'
                    });
                }
            } )
        }
    }
}
</script>