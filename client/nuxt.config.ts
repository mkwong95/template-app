// https://nuxt.com/docs/api/configuration/nuxt-config
export default defineNuxtConfig({
    compatibilityDate: '2025-07-15',
    devtools: { enabled: true },
    modules: ['@nuxtjs/tailwindcss', '@nuxtjs/i18n', '@sidebase/nuxt-auth'],
    runtimeConfig: {
        public: {
            appUrl: process.env.APP_URL,
        },
    },
    css: ['~/assets/css/fonts.css', '~/assets/css/icons.css'],
    app: {
        cdnURL: `${process.env.APP_URL}/client/${process.env.APP_ENV}/`,
    },
    nitro: {
        output: {
            publicDir: `../public/client/${process.env.APP_ENV}`,
        },
    },
});