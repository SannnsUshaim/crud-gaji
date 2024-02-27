/** @type {import('tailwindcss').Config} */
module.exports = {
content: ["./**/*.php"],
  theme: {
    extend: {
      colors: {
        primary:"#86B6F6",
        dark:"#176B87",
        light:"#B4D4FF",
        lighter:"#EEF5FF",
        red:"#D80032",
        darker:"#00101D"
      },
      container: {
        center:true,
        padding:' 16px',
      },
      screens: {
        '2xl' : '1320px',
      }
    },
  },
  plugins: [],
}

