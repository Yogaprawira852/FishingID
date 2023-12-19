/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      fontFamily:{
        poppins: "'Poppins', sans-serif",
        roboto: "'Roboto', sans-serif",
        lato: "'Lato', sans-serif",
        rubik:"'Rubik', sans-serif",
        outfit:"'Outfit', sans-serif"
      }
    },
  },
  plugins: [],
}

