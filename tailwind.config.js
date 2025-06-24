import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    darkMode: 'class',
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                display: ['Orbitron', 'sans-serif'],
            },
            colors: {
                'primary': '#111111',
                'accent': {
                    DEFAULT: '#FFB300',
                    'dark': '#E6A000',
                    'light': '#FFC633'
                },
                'muted': '#999999',
            },
            clipPath: {
                'circle-out': 'circle(0% at 100% 50%)',
                'circle-in' : 'circle(120% at 100% 50%)',
            },
        },
    },
    plugins: [],
};
