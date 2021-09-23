const colors = require('tailwindcss/colors')

module.exports = {
  mode: 'jit',
  purge: [
    'source/**/*.blade.php',
    'source/**/*.md',
    'source/**/*.html',
  ],
  theme: {
    colors: {
      transparent: 'transparent',
      current: 'currentColor',
      black: colors.black,
      white: colors.white,
      gray: colors.coolGray,
      red: colors.red,
      yellow: colors.amber,
      blue: colors.blue,
      primary: {
        DEFAULT: '#2c3e50',
      },
      secondary: {
        DEFAULT: '#9fe2ae',
      },
      accent: {
        DEFAULT: '#6D1A36',
      },
    },
    extend: {
      colors: {
        change: 'transparent',
      },
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
};
