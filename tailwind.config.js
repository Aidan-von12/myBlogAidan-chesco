const { listStyleType } = require('tailwindcss/defaultTheme');

module.exports = {
  purge: [
    './resources/views/**/*.blade.php',
    './resources/css/**/*.css',
  ],
  theme: {
      extend: {
          listStyleType: {
        none: 'none',
       disc: 'disc',
       decimal: 'decimal',
       square: 'square',
       roman: 'upper-roman',
      }
      }


  },
    variants: {
      extend: {
        // ...
       listStyleType: ['hover', 'focus'],
      }
  },
  plugins: [
    require('@tailwindcss/ui'),
  ]
}
