export default function({ store, redirect }) {
    if (store.state.auth.user == null) {
      alert('not logged');
      return redirect("/");
    }
}