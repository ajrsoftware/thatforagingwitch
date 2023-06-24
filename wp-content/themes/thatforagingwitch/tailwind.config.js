/** @type {import('tailwindcss').Config} */
module.exports = {
    content: ['app/**/*.{html,js,ts,twig}'],
    theme: {
        extend: {}
    },
    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')]
};
