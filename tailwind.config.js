/** @type {import('tailwindcss').Config} */
export default {
    content: [
        // "./public/**/*.js",
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.css",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            backgroundColor: {
                preload: "#E42C76",
            },
        },
    },
    plugins: [],
};
