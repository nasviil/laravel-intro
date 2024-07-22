import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],

    theme: {
        extend: {
            fontFamily: {
                poppins: ["Poppins", "sans-serif"],
                montserrat: ["Montserrat", "sans-serif"],
            },
            colors: {
                light: "#edf6ec",
                light_hover: "#e4f1e3",
                light_active: "#c8e3c5",
                normal: "#4da444",
                normal_hover: "#45943d",
                normal_active: "#3e8336",
                dark: "#3a7b33",
                dark_hover: "#2e6229",
                dark_active: "#234a1f",
                darker: "#1b3918",
                accept: "#33B249",
                accept_hover: "#2ea042",
            },
        },
        fontWeight: {
            hairline: 100,
            "extra-light": 100,
            thin: 200,
            light: 300,
            normal: 400,
            medium: 500,
            semibold: 600,
            bold: 700,
            extrabold: 800,
            "extra-bold": 800,
            black: 900,
        },
    },
    plugins: [forms],
};
