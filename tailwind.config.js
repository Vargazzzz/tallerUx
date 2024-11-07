/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    colors: {
      link: '#0284c7',
      white: '#ffffff',
      gray: '#f7f7f7',
      'gray-light': '#d9d9d9',
      'gray-dark': '#888888',
      'gray-darkest': '#545454',
      black: '#000000',
      transparent: 'transparent',
      'gray-bike': {
        '50': '#f7f7f7',
        '100': '#ededed',
        '200': '#d9d9d9', //base
        '300': '#c8c8c8',
        '400': '#adadad',
        '500': '#999999',
        '600': '#888888',
        '700': '#7b7b7b',
        '800': '#676767',
        '900': '#545454',
        '950': '#363636',
      },
      'gray-bike-clear':{
        '50': '#f6f6f6',
        '100': '#e7e7e7',
        '200': '#d1d1d1',
        '300': '#b0b0b0',
        '400': '#888888',
        '500': '#6d6d6d',
        '600': '#5d5d5d',
        '700': '#4f4f4f',
        '800': '#454545',
        '900': '#3d3d3d',
        '950': '#292929', //base
      }
    },
    extend: {
      backgroundImage:{
        index: "url(/public/css/bg/fondo.webp)",
        login_register: "url(/public/css/bg/fondoLR.webp)",
      },
      FontFamily:{
        nunito: ['Nunito'],
        lato: ['Lato'],
      }
    },
  },
  plugins: [],
}