const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: ['app/**/*.{html,js,ts,twig}'],
    theme: {
        colors: {
            transparent: 'transparent',
            white: '#f5f5f5',
            black: '#000000',
            gray: '#333333'
        },
        fontFamily: {
            sans: ['Inter var', ...defaultTheme.fontFamily.sans],
            serif: ['Luminari', ...defaultTheme.fontFamily.serif]
        },
        extend: {}
    },
    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')]
};
