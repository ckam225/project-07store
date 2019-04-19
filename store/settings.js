export const state = () => ({
    devise: '₽',
    locale: 'en',
    locales: [
        {
          code: 'fr',
          name: 'FR',
          label: 'Français'
        },
        {
          code: 'en',
          name: 'EN',
          label: 'Enghish'
        },
        {
          code: 'ru',
          name: 'RU',
          label: 'Русский'
        }
    ]
})

export const mutations ={
    changeDevise(state, value){
        state.devise= value
    },
    SET_LANG(state, locale) {
        if (state.locales.find(el => el.code === locale)) {
          state.locale = locale
        }
    }
}