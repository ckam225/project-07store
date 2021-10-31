export default function({ store, redirect }) {
    if (store.state.user.logged) {
      return redirect("/admin");
    }
}
  