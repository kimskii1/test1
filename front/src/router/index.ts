import { createRouter, createWebHistory, RouteRecordRaw } from 'vue-router'
import FeedbackFormView from "@/views/FeedbackFormView.vue";
import FeedbackListView from "@/views/FeedbackListView.vue";

const routes: Array<RouteRecordRaw> = [
  {
    path: '/',
    name: 'feedback',
    component: FeedbackFormView
  },
  {
    path: '/list',
    name: 'feedbackList',
    component: FeedbackListView
  }
]

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes
})

export default router
