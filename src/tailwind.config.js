const defaultTheme = require('tailwindcss/defaultTheme');

const colorReset = {
  color: null,
};

const colors = {
  'shuttle-gray': {
    50: '#f7f8f8',
    100: '#eff1f2',
    200: '#d8dbde',
    300: '#c1c5ca',
    400: '#929aa3',
    500: '#636e7b',
    600: '#59636f',
    700: '#4a535c',
    800: '#3b424a',
    900: '#31363c',
  },
  bombay: {
    50: '#fbfbfc',
    100: '#f7f8f9',
    200: '#ebedf0',
    300: '#dfe3e6',
    400: '#c7cdd4',
    500: '#afb8c1',
    600: '#9ea6ae',
    700: '#838a91',
    800: '#696e74',
    900: '#565a5f',
  },
  shamrock: {
    50: '#f6fcf9',
    100: '#eefaf4',
    200: '#d4f2e2',
    300: '#b9ead1',
    400: '#85daaf',
    500: '#51ca8c',
    600: '#49b67e',
    700: '#3d9869',
    800: '#317954',
    900: '#286345',
  },
  tuna: {
    50: '#f5f5f5',
    100: '#eaebeb',
    200: '#cbccce',
    300: '#abadb1',
    400: '#6c7076',
    500: '#2d333b',
    600: '#292e35',
    700: '#22262c',
    800: '#1b1f23',
    900: '#16191d',
  },
  heather: {
    50: '#fbfcfc',
    100: '#f7f8f9',
    200: '#ebeef1',
    300: '#dee3e9',
    400: '#c6cfd8',
    500: '#adbac7',
    600: '#9ca7b3',
    700: '#828c95',
    800: '#687077',
    900: '#555b62',
  },
};

module.exports = {
  mode: 'jit',
  purge: {
    content: ['./app/**/*.php', './resources/**/*.{php,vue,js}'],
  },
  darkMode: 'media', // or 'media' or 'class'
  theme: {
    screens: {
      '#sm': { max: '639px' },
      '#md': { max: '767px' },
      '#lg': { max: '1023px' },
      '#xl': { max: '1279px' },
      '#xxl': { max: '1535px' },
      sm: '640px',
      md: '768px',
      lg: '1024px',
      xl: '1280px',
      xxl: '1536px',
    },
    extend: {
      colors,
      borderColor: colors,
      container: {
        padding: {
          DEFAULT: '1rem',
          md: '2rem',
        },
      },
      typography: {
        DEFAULT: {
          css: {
            maxWidth: null,
            color: null,
            a: {
              color: null,
              '&:hover': colorReset,
            },
            strong: colorReset,
            blockquote: colorReset,
            h1: colorReset,
            h2: colorReset,
            h3: colorReset,
            h4: colorReset,
            h5: colorReset,
            h6: colorReset,
            pre: null,
            code: null,
            'code::after': null,
            'code::before': null,
            'pre code': null,
          },
        },
      },
      fontFamily: {
        sans: ['"Arita"', ...defaultTheme.fontFamily.sans],
      },
    },
  },
  plugins: [
    require('@tailwindcss/typography'),
    require('@tailwindcss/aspect-ratio'),
    require('@tailwindcss/line-clamp'),
  ],
};
