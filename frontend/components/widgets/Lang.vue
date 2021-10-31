<template>
    <div class="x-select-box" >
      <div class="spin">
        <i class="ic-caret-up"></i>
      </div>
      <div class="languages">
        <div class="language"
          v-for="el in locales"
          :key="el.code"
          :class="{ active: (el.code === locale) }"
          @click="switchLanguage(el.code)"
          >
          <span>{{ el.label }} (<b>{{ el.name }}</b>)</span>
        </div>
      </div>
    </div>
</template>

<script>
export default {
    data(){
      return{
        visible: false 
      }
    },
     computed: {
      locales() { return this.$store.state.app.locales },
      locale() { return this.$store.state.app.locale }
    },
    methods: {
      switchLanguage (localeCode) {
        document.cookie = `locale=${localeCode}`;
        location.reload();
      }
    }
}
</script>
<style>
.x-select-box{
    position: absolute;
    display: flex;
    flex-direction: column;
    background: #fff;
    box-shadow: 4px 4px 4px -2px rgba(0, 0, 0, 0.1);
    border: 1px solid #ddd;
    margin-top: 10px;
    margin-right: 100px;
    z-index: 9999;
}
.spin{
  position: absolute;
  top: -15px;
  color: #ccc;
  font-size: 20px;
}
  .language {
    padding: 10px 45px;
    border-bottom: 1px solid #ddd;
  }
  .language:last-child{
    border-bottom: 0;
  }
  .language:hover {
    background: rgba(0, 0, 0, 0.1);
    cursor: pointer;
  }
  .language.active {
    /* text-decoration: underline; */
    color: darkslateblue
  }
</style>
