module.exports = {
    content: [
        "./resources/views/**/*.blade.php",
        "./resources/js/**/*.js",
        "./node_modules/flowbite/**/*.js",
    ],
    theme: {
        extend: {},
    },
    plugins: [require("@tailwindcss/typography"), require("flowbite/plugin")],
};
