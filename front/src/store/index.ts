import { InjectionKey } from 'vue'
import { createStore, Store } from 'vuex'
import type {Feedback, FeedbackList} from "@/types/feedback";
import axios, {AxiosResponse} from "axios";

export interface State {
  feedbackList: FeedbackList
}

export const store = createStore<State>({
  state: {
    feedbackList: []
  },
  getters: {
    feedbackList(state): FeedbackList {
      return state.feedbackList;
    }
  },
  mutations: {
    saveFeedback(state, feedback: Feedback) {
      state.feedbackList.push(feedback);
    }
  },
  actions: {
    async saveFeedback(context, feedback: Feedback) {
      const data: AxiosResponse = await axios.post('http://localhost:9000/feedback', {
        ...feedback
      });
      if (data.status === 201) {
        context.commit('saveFeedback', feedback);
      } else {
        alert('error');
      }
    },
  },
  modules: {
  }
})

export const key: InjectionKey<Store<State>> = Symbol()