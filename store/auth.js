export const state = () => ({
    user: null
})

export const mutations ={
    setAuthUser(state, playload){
        state.user = playload
    }
}

export const actions = {
    nuxtServerInit ({ commit }, { req }) {
      if (req.session && req.session.user) {
        commit('setUser', req.session.user)
      }
    }
  }