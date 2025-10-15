/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/views/**/*.blade.php",
    "./resources/js/**/*.js"
  ],
  darkMode: 'class',
  theme: {
    extend: {
      colors: {
        bgdark: '#0d1117',
        highlight: '#58a6ff',
        textmuted: '#c9d1d9',
      },
      boxShadow: {
        'neon': '0 8px 30px rgba(88,166,255,0.12), 0 0 12px rgba(88,166,255,0.14)'
      }
    },
  },
  plugins: [],
}
