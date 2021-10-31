<template>
    <div class="x-container-shadow"> 
        <div class="x-shadow"></div>
       
        <div class="x-form-account">
            <transition name="bounce">
                <div class="x-form box-shadow ">
                    <div class="x-form-right-actions">
                        <button  class="link-btn close-btn" @click="closeForm">
                            <i class="ic-cancel-circled"></i>
                        </button>
                    </div>
                    <!-- <img src="/img/logo.png" width="150" class="x-form-logo"/> -->
                     <!-- logo -->
                    <logo :fontSize="logoSize" />

                    <div class="x-form-center-actions">
                        <button class="link-btn account-btn" @click="selectAction(0)" :class="{selected: isRegister}">INSCRIPTION</button>
                        <button class="link-btn account-btn" @click="selectAction(1)" :class="{selected: isLogin}">SE CONNECTER</button>
                    </div>
                    <div>
                         <span class="has-form-error"  v-if="formError">{{ formErrorMessage }}</span>
                    </div>
                    <div class="x-form-register" v-if="isRegister">
                        <input type="email" class="textbox" placeholder="E-mail"  v-model="registerEmail"/>
                        <span class="has-form-error" v-if="emailError">{{ emailErrorMessage }}</span>
                        <input type="password" class="textbox" placeholder="Password"  v-model="registerPassword"/>
                        <span class="has-form-error"  v-if="passError">{{ passErrorMessage }}</span>
                        <button type="submit" class="btn btn-form">CREER COMPTE</button>
                        <div class="x-form-licence">
                            <p>
                                 En créant un compte 07Store, vous acceptez 
                                 <a href="#">Contrat d'adhésion gratuite à 07Store.com</a> et <a href="#">la Politique de confidentialité </a>
                            </p>
                        </div>
                    </div>
                     <div class="x-form-register" v-else>
                        <input type="email" class="textbox" placeholder="E-mail" v-model="loginEmail"/>
                        <input type="password" class="textbox" placeholder="Password" v-model="loginPassword"/>
                        <button type="submit" class="btn btn-form">CONNEXION</button>
                        <div  class="x-form-forgot">
                           <a href="" class="x-reset-pass-link">Mot de passe oublié ?</a>
                        </div>
                    </div>
                </div>
            </transition>
        </div>
    </div>
</template>
<script>
import Logo from '@/components/partials/Logo'
export default {
    components:{Logo},
    data(){
        return {
            logoSize:"25px",
            isRegister: true,
            isLogin: false,
            emailError: false,
            emailErrorMessage: '',
            passError: false,
            passErrorMessage: '',
            formError: false,
            formErrorMessage: '',
            registerEmail:'',
            registerPassword: '',
            loginEmail:'',
            loginPassword: '',

        }
    },
    methods: {
        selectAction(a){
            if(a==0){
                this.isRegister = true;
                this.isLogin = false;
            }else{
                this.isRegister = false;
                this.isLogin = true;
            }
        },
        closeForm(){
            this.$store.commit('auth/SHOW_AUTH_FORM', false)
        }
    }
}
</script>

<style>
.x-container-shadow{
    position: fixed;
    margin: 0;
    padding: 0;
    background: transparent;
    width: 100%;
    height: 100%;
    z-index: 99999;
}
.x-shadow{
    position: absolute;
    z-index: 0;
    background: rgba(0, 0, 0, 0.3);
    width: 100%;
    height: 100%;
}
.x-form-account{
    position: fixed;
    z-index: 1;
    width: 100%;
    height: 100%;
    display: flex;
    justify-content: center;
}
.x-form-account .x-form{
    margin-top: 50px;
    width: 380px;
    height: 518px;
    background: #fff;
    display: flex;;
    flex-direction: column;
    align-items: center;
    border: 0px solid #ccc;
    /* box-shadow: 2px 2px 2px 2px rgba(0, 0, 0, 0.2); */

}.x-form .x-form-logo{
    margin: 5px;
}
.x-form .has-form-error{
    color: tomato;
    font-size: 12px
}
.x-form-right-actions{
    display: flex;
    width: 100%;
    justify-content: flex-end;
    align-items: center;
    padding: 5px;
}
.x-form-right-actions .close-btn{
    font-size: 25px;
    color: #888;
}
.x-form-right-actions .close-btn:hover{
    color: red;
}
.x-form-center-actions{
    margin-top: 30px;
}
.x-form-center-actions .account-btn{
    color: #555;
    font-size: 14px;
}
 .x-form-center-actions .account-btn.selected{
    color: var(--blue-1);
    padding-bottom: 7px;
    border-bottom: 2px solid var(--blue-1);
}
.x-form-register, .x-form-login{
    display: flex;
    flex-direction: column;
    width: 100%;
    padding: 10px;
}
.x-form-register .textbox, .x-form-login.textbox{
    padding: 13px 10px;
}
.x-form-register .textbox:focus, .x-form-login.textbox:focus{
    border-color: #888;
}
.x-form-register, .x-form-login{
    display: flex;
    flex-direction: column;
    width: 100%;
    padding: 10px;
}
.x-form-licence{
    margin: 10px 0;
    font-size: 14px;
}
.x-form-licence a{
    color: var(--blue-1)
}
.x-reset-pass-link{
    margin: 20px 0px;
     color: var(--blue-1)
}
.bounce-enter-active {
  animation: bounce-in .5s;
}
.bounce-leave-active {
  animation: bounce-in .5s reverse;
}
@keyframes bounce-in {
  0% {
    transform: scale(0);
  }
  50% {
    transform: scale(1.5);
  }
  100% {
    transform: scale(1);
  }
}
</style>
