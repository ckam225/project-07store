<template>
  <div>
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
export default {
  components: { Top, Bottom }
}
</script>
