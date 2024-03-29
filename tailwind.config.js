import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                'appMain': '#FE3529',
                base: {
                    blue: '#061D39',
                    red: '#FE3529',
                },
                txt: {
                    title: '#061D39',
                    subtitle: '#262626',
                    base: '#606060',
                },
                secondary: '#EE3737'
            },
        },
    },
    darkMode: 'class',
    plugins: [forms, typography, require('flowbite/plugin')],
};
