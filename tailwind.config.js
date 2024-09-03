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
        'roboto': ['"Roboto"', 'sans-serif'],
      },

      screens: {
        'tb': {'min': '640px', 'max': '767px'}, 
      },

      dropShadow: {
        'shad': '0px 5px 20px 1px #26236b',
        'left-glow': '2px 0px 10px rgba(0, 0, 0, 0.5)',
        'left-light': '2px 0px 10px rgba(203, 203, 203, 0.5)', // Define your custom drop shadow
      },

      boxShadow: {
        'intense-glow': '0px 30px 20px 30px #26236b',
        'pglow':'0px 5px 20px 1px #26236b',
        'right-light': '5px 0px 15px rgba(32, 32, 32, 0.50)',
      },
      colors:{
        'navcolor':'#161925',
        'lb':'#235789',
        'db':'#161925',
        'cb':'#CBCBCB',
      },
    },
  },
  plugins: [
    // Uncomment if using DaisyUI
    require('daisyui'),
  ],
}
