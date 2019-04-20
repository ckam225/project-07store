<template>
  <div>
    <account  v-if="$store.state.auth.AUTH_FORM"/>
    <!-- topbar -->
    <top />
    <!-- main -->
    <main>
       <nuxt/>
    </main>
    <!-- footer -->
    <bottom/>
    
  </div>
</template>

<script>
import Top from '@/components/partials/Top'
import Bottom from '@/components/partials/Bottom'
import Account from '@/components/partials/Account'

export default {
  components: { Top, Bottom, Account }
}
</script>
