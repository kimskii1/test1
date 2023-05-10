<template>
  <div class="home">
    <div>
      <input type="text" v-model="feedback.author" placeholder="Author">
    </div>
    <div>
      <textarea v-model="feedback.text" placeholder="Text"></textarea>
    </div>
    <div>
      <button @click="send">Send</button>
    </div>
  </div>
</template>

<script lang="ts">
import { defineComponent } from 'vue';
import {Feedback} from "@/types/feedback";

export default defineComponent({
  data() {
    return {
      feedback: {
        author: '' as string,
        text: '' as string
      } as Feedback
    };
  },
  methods: {
    async send() {
      await this.$store.dispatch('saveFeedback', this.feedback);
      this.feedback.author = '';
      this.feedback.text = '';
    }
  }
});
</script>
