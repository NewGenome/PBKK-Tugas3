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
            'its-green': '#0e7a3b',
            'its-dark': '#0a5c2c',
        }
    },
  },
  plugins: [],
}