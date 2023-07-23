import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    darkMode: 'class',
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            gridTemplateColumns: {
                'frame-auto': '1fr auto',
                'auto-frame': 'auto 1fr',
                'auto2frame': 'auto auto 1fr',
                'auto-fill': 'repeat(auto-fill, minmax(20rem, 1fr))',
                'journey-auto-fill': 'repeat(auto-fill, minmax(24rem, 1fr))',
                'auto-auto': 'auto auto',
            },
            gridTemplateRows: {
                'frame-auto': '1fr auto',
                'auto-frame': 'auto 1fr',
                'auto-auto': 'auto auto',
            },
        },
        screens: {
            'xs': '360px',
            ...defaultTheme.screens,
        },
    },

    plugins: [forms],
};
