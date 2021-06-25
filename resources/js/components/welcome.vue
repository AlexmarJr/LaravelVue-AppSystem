<template>
    <div style="font-size: 50px; color: solid black; text-align: center">
        <div>
            Bem Vindo Seu Merda
        </div>

        <div style="text-align: center">
            <li class="nav-item">
                <router-link to='/login' exact style="padding-right: 60px">  Login </router-link>
            </li>
            <li class="nav-item">
               <router-link to='/register' exact>  Register </router-link>
            </li>
        </div>
    </div>
   
</template>

<script>
export default {
    
}
</script>