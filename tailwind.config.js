/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "index.php",
    "./src/pages/*.php",
    "./src/**/*.{js,ts,php}",
    "./includes/templates/*.php",
    "./includes/**/*.php",
  ],
  theme: {
    extend: {},
  },
  plugins: [],
};
