/** @type {import('tailwindcss').Config} */
export default {
  content: ['./src/**/*.{html,js,svelte,ts}'],
  theme: {
    letterSpacing:{
      tight: '-.0125em',
      tighter: '-.0250em'
    },
    extend: {
      lineHeight: {
        'big-title': '1.15'
      }
    },
    fontFamily: {
      geist: ['Geist', 'sans-serif']
    }
  },
  plugins: [],
}

