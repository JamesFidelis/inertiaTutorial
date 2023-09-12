/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './storage/framework/views/*.php',
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        'node_modules/preline/dist/*.js',
        "./node_modules/flowbite/**/*.js"
    ],
    theme: {
        extend: {},
    },
    plugins: [
        require('@tailwindcss/forms'),
        require('flowbite/plugin'),
        require('preline/plugin'),
    ],
}
