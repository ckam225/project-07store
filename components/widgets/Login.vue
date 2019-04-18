<template>
    <form class="login" @submit.prevent="signIn">
        <div class="form">
            <h3 class="form-title">Welcome to 07shopp</h3>
            <label for="email">Email или ID пользователя:</label>
            <input type="text" name="email"  class="textbox" placeholder="Ваш адрес эл. почты или ID пользователя" required>
            <div class="double-label">
                <label for="password">Пароль:</label>
                <a href="#" class="link">Забыли пароль?</a>
            </div>
            <input type="password" name="password" class="textbox" placeholder="Ваш пароль" required>
            <button class="btn"  v-if="!isSubmit" >Войти</button>
             <loader :type="loaderType" :color="loaderColor" v-else/>
            <div class="group-action-right">
                <a href="#" class="link">Зарегистрироваться!</a>
            </div>
            
        </div>
     
       
    </form>
</template>
<script>
import Loader from '@/components/widgets/Loader'
export default {
    components: { Loader },
    data(){
        return{
            loaderColor: 'yellowgreen',
            loaderType: 'default', /* default, ellipsis, facebook, spinner, roller, ring, heart */
            isSubmit: false
        }
    },
    methods: {
        signIn(){
            this.isSubmit = !this.isSubmit;
        }
    }
}
</script>

<style>
.login{
    cursor: default;
    display: flex;
    flex-direction: column;
    width: 300px;
    min-height: 276px;
    background: #fff;
    position: absolute;
    /* border: 1px solid #eee; */
    border-top: 0;
    box-shadow: 2px 2px 4px 1px rgba(0, 0, 0, 0.2);
    top: 61px;
    right: 5px;
    z-index: 999;
    color: black;
}
.login .loader{
    position: absolute;
     top: 50%;
    -webkit-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    transform: translateY(-50%);
    left: 50%;
    -webkit-transform: translateX(-50%);
    -ms-transform: translateX(-50%);
    transform: translateX(-50%);
}
.login .form{
    display: flex;
    flex-direction: column;
        padding: 20px 20px;
}
.login .form-title{
    text-align: center;
    margin: 20px 0;
    color: #5b87e9
}
.login label{
    margin-bottom: 5px
}
.login .double-label{
    display: flex;
    justify-content: space-between
}
.login .link{
    color: #5b87e9;
    font-size: 12px
}
.login .link:hover{
    text-decoration: underline
}
.login .textbox{
    margin-bottom: 10px;
}
.login .btn{
    background: var(--main-color);
    color: #fff;
    cursor: pointer;
    outline: none;
}
.login .group-action-right{
    margin-top: 20px;
    display: flex;
    justify-content: flex-end;
}
</style>
