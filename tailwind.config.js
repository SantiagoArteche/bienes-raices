/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "index.php",
    "./src/pages/*.php",
    "./includes/**/*.php",
    "./admin/**/*.php",
    "./admin/index.php",
  ],
  theme: {
    extend: {},
  },
  plugins: [],
};
