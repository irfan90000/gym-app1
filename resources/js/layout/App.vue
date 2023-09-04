
<template>
  <div class="container-scroller">
    <sidebar />
    <div class="container-fluid page-body-wrapper">
      <navbar />
    </div>
  </div>
</template>
<script>
import sidebar from '../sidebar.vue';
import navbar from '../navbar.vue';
export default {
  name: 'app',
  components: {
    navbar,
    sidebar
  }
}
</script>