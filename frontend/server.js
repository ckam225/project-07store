const { Nuxt, Builder } = require('nuxt')

const app = require('express')
const isProd = process.env.NODE_ENV === 'production'
const config = require('./nuxt.config.js')

config.dev = !(isProd)
const nuxt = new Nuxt(config)


if (!isProd) {
    const builder = new Builder(nuxt)
    builder.build()
}

app.request(nuxt.render)
app.listen(3000)
console.log('Server is running on http://0.0.0.0:3000')