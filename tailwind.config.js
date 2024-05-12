import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./resources/css/app.css",
        "./resources/js/app.js",
    ],

    theme: {
        extend: {
            fontFamily: {
               "hanken-groteks": ["Hanken Groteks", "sans-serif"]
            },

            color: {
                "black": "#060606"
            },

            fontSize: {
                "2xs": "0.625rem" //10px
            }
        },
    },

    plugins: [forms],
};
