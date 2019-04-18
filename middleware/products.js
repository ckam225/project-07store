import axios from 'axios'

export default function ({ params, store, route }) {
    return axios.get('http://my-stats-api.com')
    .then((response) => {
        store.commit('add', response.data.result);
    })
}
