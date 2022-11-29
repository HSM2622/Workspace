const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
    ],
    theme: {
        extend: {
            colors: {
                menuitem: "#23E0E2",
                button: "#01919e",
                hover: "#8EC1C6",
            },
            backgroundImage: {
                banner: "url(/images/banner.png)",
                icon: "url(/images/title.png)",
                login: "url(/images/login.png)",
                title: "url(/images/title.png)"
            },
            boxShadow: {
                shadow: "0px 0px 12px -2px rgba(0, 0, 0, 0.5)",
            },
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
