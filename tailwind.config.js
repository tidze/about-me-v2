/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js"
    ],
    theme: {
        extend: {
            fontFamily: {
                'Rubik': ['Rubik', 'sans-serif'],
                'Zeyada': ['Zeyada', 'cursive'],

            }
        },
        colors: {
            "customRed_1": "#D90429",
            "customRed_2": "#EF233C",
            "customGray_1": "#1A262A",
            "customGray_2": "#8D99AE",
            "customWhite_1": "#EDF2F4",
            "customBlue_1": "#2B2D42",
        },
    },
    plugins: [
        require('flowbite/plugin')
    ],
}
