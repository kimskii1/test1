<script lang="ts">
import {defineComponent} from "vue";
import {mapGetters} from "vuex";

export default defineComponent({
  computed: {
    ...mapGetters({
      feedbackList: 'feedbackList'
    })
  }
});
</script>

<template>
  <div class="list">
    <div
        class="list-item"
        v-for="(feedback, index) in feedbackList" :key="index"
    >
      <div>Author: {{ feedback.author }}</div>
      <div>Text: {{ feedback.text }}</div>
    </div>
  </div>
</template>

<style scoped>
.list-item {
  margin-bottom: 15px;
}
</style>