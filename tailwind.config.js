/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        colors: {
            primary: {
                100: "#CF161C",
                200: "#980C10",
            },
            secondary: "#FFFAF0",
            white: "#FFFFFF",
            black: "#000000",
            gray: "#95989A",
            textColor: "#333333",
            transparent: "transparent",
        },

        extend: {
            fontFamily: {
                poppins: ["Poppins", "sans-serif"],
                abril: ["Abril Fatface", "sans-serif"],
            }
        },
    },
    plugins: [],
}

