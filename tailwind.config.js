/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      fontFamily: {
        'roboto-slab': ['"Roboto Slab"', 'serif'],
      },
      screens: {
        'tb': {'min': '640px', 'max': '767px'}, // Custom breakpoint for 640px to 767px
      },
    },
  },
  plugins: [
      ('daisyui'),
  ],
}
