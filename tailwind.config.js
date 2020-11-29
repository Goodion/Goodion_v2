const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    purge: [
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                // sans: ['Nunito', ...defaultTheme.fontFamily.sans],
                sans: ['Montserrat', ...defaultTheme.fontFamily.sans]
            },
            colors: {
                'main-black': '#434343',
                'main-green': '#b6c63b',
                'main-blue': '#7a95c7',
                'main-orange': '#eac59b',
                'main-gray': '#f7f7f7',
                'main-bg-color': '#f7f7f7'
            },
            border: ['hover'],
        },
    },

    variants: {
        opacity: ['responsive', 'hover', 'focus', 'disabled'],
    },

    plugins: [require('@tailwindcss/ui')],
};
