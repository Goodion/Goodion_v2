const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    purge: [
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php'
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Montserrat', ...defaultTheme.fontFamily.sans]
            },
            colors: {
                'graphite-light': '#a1a1a1',
                'graphite': '#434343',
                'graphite-dark': '#323232',
                'forest-light': '#d4e36b',
                'forest': '#b6c63b',
                'forest-dark': '#748113',
                'sky-light': '#a1b8e3',
                'sky': '#7a95c7',
                'sky-dark': '#284781',
                'sand-light': '#f4d7b7',
                'sand': '#eac59b',
                'sand-dark': '#986832',
                'main-bg-color': '#f7f7f7'
            },
            border: ['hover'],
            backgroundImage: theme => ({
                'green-arrow': "url('/img/green_arrow.svg')",
            })
        },
    },

    variants: {
        opacity: ['responsive', 'hover', 'focus', 'disabled'],
        outline: ["focus"]
    },

    plugins: [
        // require('@tailwindcss/forms'),
        require('@tailwindcss/typography'),
        require('@tailwindcss/aspect-ratio')
    ],
};
