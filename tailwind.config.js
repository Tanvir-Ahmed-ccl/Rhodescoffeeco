/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    'node_modules/flowbite-vue/**/*.js',
    'node_modules/flowbite/**/*.js'
  ],
  theme: {
    extend: {
      
      // that is animation class
      animation: {
        fade: 'fadeIn 4s',
      },

      // that is actual animation
      keyframes: theme => ({
        fadeIn: {
					from: { opacity: 0 },
					to: { opacity: 1 },
				},
      }),
    },
  },
  plugins: [
    require('flowbite/plugin'),
  ]
}
