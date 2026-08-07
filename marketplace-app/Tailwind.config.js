/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                'lions-navy': '#173a5e',
                'lions-cream': '#f3e6d6',
            },
        },
    },
    plugins: [],
}