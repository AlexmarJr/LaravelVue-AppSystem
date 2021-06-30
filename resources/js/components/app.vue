<template>
    <div class="container boxcontainer">
        <div class="row">
            <div class="col-6">
                <label class="text-label">Saldo</label><br>
                <label class="sifrao">R$: </label>

                <input class="balance"
                 v-model="bankData.balance" 
                 :type="[is_private == false ? 'text' : 'password']" readonly>

                <i class="icon" style="float-left" 
                :class="[is_private == false ? 'fa fa-eye' : 'fa fa-eye-slash']"
                @click="changeViewBalance()"></i>
            </div>
            <div class="col-6">
                <label class="text-label">Investimentos</label><br>
                <label class="sifrao">R$: </label>
                
                <input class="balance"
                 v-model="bankData.balance" 
                 :type="[is_private == false ? 'text' : 'password']" readonly>

                <i class="icon" style="float-left" 
                :class="[is_private == false ? 'fa fa-eye' : 'fa fa-eye-slash']"
                @click="changeViewBalance()"></i>
            </div>
        </div>
        <hr>

        <div class="row">
            <div class="col-4">
                <router-link to='/pix' exact>  
                    <div class="card bg" style="width: 18rem;align-items: center">
                        <img class="card-img-top" src="img/pix.png" alt="Card image cap" style="width: 80px">
                        <div class="card-body">
                            <p class="card-text">PIX</p>
                        </div>
                    </div>
                </router-link>
            </div>
            <div class="col-4">
                <a href="">
                    <div class="card bg" style="width: 18rem;align-items: center">
                        <img class="card-img-top" src="img/pix.png" alt="Card image cap" style="width: 80px">
                        <div class="card-body">
                            <p class="card-text">PIX</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-4">
                <a href="">
                    <div class="card bg" style="width: 18rem;align-items: center">
                        <img class="card-img-top" src="img/pix.png" alt="Card image cap" style="width: 80px">
                        <div class="card-body">
                            <p class="card-text">PIX</p>
                        </div>
                    </div>
                </a>
            </div>


            <div class="col-4 pdt">
                <a href="">
                    <div class="card bg" style="width: 18rem;align-items: center">
                        <img class="card-img-top" src="img/pix.png" alt="Card image cap" style="width: 80px">
                        <div class="card-body">
                            <p class="card-text">PIX</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-4 pdt">
                <a href="">
                    <div class="card bg" style="width: 18rem;align-items: center">
                        <img class="card-img-top" src="img/pix.png" alt="Card image cap" style="width: 80px">
                        <div class="card-body">
                            <p class="card-text">PIX</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-4 pdt">
                <a href="">
                    <div class="card bg" style="width: 18rem;align-items: center">
                        <img class="card-img-top" src="img/pix.png" alt="Card image cap" style="width: 80px">
                        <div class="card-body">
                            <p class="card-text">PIX</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data: function(){
        return {
           bankData:{
               balance: '999.999.999',
               investments: '',
           },
           is_private: false
        }
    },
    methods: {
        changeViewBalance(){
            if(this.is_private == true){
                this.is_private = false;
            }
            else{
                this.is_private = true;
            }
        }
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
.balance{
    border: none;
    outline: none;
    background: wheat;
    margin-top: 30px;
    margin-left: 30px;
    font-size: 42px;
    width: 50%;

}
.bg{
    background-color: wheat;
      border: none;
}
.pdt{
    padding-top: 80px;
}
.sifrao{
    font-size: 35px;
}
.icon{
    font-size: 45px;
}
.text-label{
    font-size: 30px;
    font-family: sans-serif;
}

.card:hover {
  background-color: white;
  opacity: 1;
  border-radius: 100%;
  transition: 1s;
}

</style>