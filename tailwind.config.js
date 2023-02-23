/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        "primary-clr": "var(--clr-primary)",
        "secondary-clr": "var(--clr-secondary)",
        "terziary-clr": "var(--clr-terziary)",
        "bg-clr": "var(--clr-bg)",
      },
      fontFamily: {
        "title-fnt": "var(--fnt-title)",
        "subtitle-fnt": "var(--fnt-subtitle)",
        "text-fnt": "var(--fnt-text)",
      }
    },
  },
  plugins: [],
}