export const state = () =>({
    cart: [],
    favorites: [],
    smartphones: [
          {
            thumb: 'https://raw.githubusercontent.com/msi89/07shop/master/img/products/01.webp',
            price: '61 900',
            title: 'Смартфон Google Pixel 3 XL 128Gb Black (Черный)',
            inSolde: false,
            solde: "355545",
            likes: "",
            ribbon: ''
          }, 
          {
            thumb: 'https://raw.githubusercontent.com/msi89/07shop/master/img/products/02.webp',
            price: '61 900',
            title: 'Смартфон Google Pixel 3 XL 128Gb Black (Черный)',
            inSolde: false,
            ribbon: ''
          },
          {
            thumb: 'https://raw.githubusercontent.com/msi89/07shop/master/img/products/03.webp',
            price: '68 990',
            title: 'iPhone X 256GB как новый (серый космос)',
            inSolde: true,
            ribbon: 'New'
          },
          {
            thumb: 'https://raw.githubusercontent.com/msi89/07shop/master/img/products/04.webp',
            price: '63 990',
            title: 'Смартфон Apple iPhone X 64GB Silver (MQAD2RU/A)',
            inSolde: false,
            ribbon: ''
          },
          {
            thumb: 'https://raw.githubusercontent.com/msi89/07shop/master/img/products/02.webp',
            price: '61 900',
            title: 'Смартфон Google Pixel 3 XL 128Gb Black (Черный)',
            inSolde: false,
            ribbon: ''
          },
          {
            thumb: 'https://raw.githubusercontent.com/msi89/07shop/master/img/products/03.webp',
            price: '68 990',
            title: 'iPhone X 256GB как новый (серый космос)',
            inSolde: false,
            ribbon: ''
          },
          {
            thumb: 'https://raw.githubusercontent.com/msi89/07shop/master/img/products/04.webp',
            price: '63 990',
            title: 'Смартфон Apple iPhone X 64GB Silver (MQAD2RU/A)',
            inSolde: true,
            ribbon: 'Solde'
          },
          {
            thumb: 'https://raw.githubusercontent.com/msi89/07shop/master/img/products/04.webp',
            price: '61 900',
            title: 'Смартфон Google Pixel 3 XL 128Gb Black (Черный)',
            inSolde: false,
            ribbon: ''
          },
          {
            thumb: 'https://raw.githubusercontent.com/msi89/07shop/master/img/products/03.webp',
            price: '68 990',
            title: 'iPhone X 256GB как новый (серый космос)',
            inSolde: false,
            ribbon: ''
          },
          {
            thumb: 'https://raw.githubusercontent.com/msi89/07shop/master/img/products/01.webp',
            price: '63 990',
            title: 'Смартфон Apple iPhone X 64GB Silver (MQAD2RU/A)',
            inSolde: false,
            ribbon: ''
          }
    ]
})

export const mutations = {
    addToCart(state, product){
        state.cart.push(product)
    },
    removeFromCart(state, product){
        state.cart.splice(state.cart.indexOf(product), 1)
    },
    addToFavorite(state, product){
        state.favorites.push(product)
    },
    removeFromFavorite(state, product){
        state.favorites.splice(state.favorites.indexOf(product), 1)
    },
}