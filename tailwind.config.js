/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
  ],
  theme: {
    extend: {
      animation: {
        'slide-in-out': 'slide-in-out 2s ease-in-out'
      },
      keyframes: {
        'slide-in-out': {
          '0%, 100%': { transform: 'translate(-50%, 0)' },
          '25%, 75%': { transform: 'translate(-50%, 25vh)' }
        }
      }
    },
  },
  plugins: [],
}