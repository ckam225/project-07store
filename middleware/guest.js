export default function({ store, redirect }) {
    if (store.state.auth.user == null) {
      store.commit('auth/SHOW_AUTH_FORM', true);
      return redirect("/");
    }
}