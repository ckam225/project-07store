export const state = () => ({
    devise: '₽'
})

export const mutations ={
    changeDevise(state, value){
        state.devise= value
    }
}