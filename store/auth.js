export const state = () => ({
    user: null,
    AUTH_FORM: false
})

export const mutations ={
    setAuthUser(state, e){
        state.user = e
    },
    SHOW_AUTH_FORM(state, e) {
     state.AUTH_FORM = e
    }
}

export const actions = {
    nuxtServerInit ({ commit }, { req }) {
      if (req.session && req.session.user) {
        commit('setUser', req.session.user)
      }
    }
  }