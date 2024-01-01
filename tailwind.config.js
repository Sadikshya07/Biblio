/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./public/**/*.js",
  ],
  theme: {
    extend: {
      colors:{
      "color-primary":"#01051e",
      "color-primary-light":"#020726",
      "color-primary-dark":"#010417",
      "color-secondary":"#ff7d3b",
      "color-gray":"#333",
      "color-white":"#fff",
      "color-blob":"#A427DF",
      "color-black":"#000000"
      },
      backgroundImage:{
        'hero-pattern':"public\storage\Image\p0Qcn3xlirvejwPpztR1eBx2weOj6ZwNOZXjc3M9.jpg"
      }
    },
    container: {
      center: true,
      padding:{
        DEFAULT: '20px',
        md: '50px',
      }
    } 
  },
  plugins: [],
}

