export const state = () => ({
    APP_NAME: '07Store',
    DEVISE: '₽',
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
    SET_DEVISE(state, value){
        state.DEVISE= value
    },
    SET_LANG(state, locale) {
        if (state.locales.find(el => el.code === locale)) {
          state.locale = locale
        }
    }
}