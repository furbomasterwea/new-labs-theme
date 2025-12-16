/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './**/*.php', 
    './*.php',
    './assets/**/*.js', 
  ],
  theme: {
    extend: {
      container:{
        center: true,
        padding: '1rem',
      },
      colors: {
        'background-primary': '#000',
        'border-primary': '#e5e7eb',
       
      },
      spacing: {
        '5%': '5%',
        '18': '4.5rem',
      },
      zIndex: {
        '999': '999',
      },
      fontFamily: {
      'g-roboto-serif': ['"Roboto Serif"', 'serif'],
    },
    },
  },
  plugins: [],
}