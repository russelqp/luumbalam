module.exports = {
  mode:'jit',
  purge: [
    './public/**/*.html',
    './public/**/*.js',
    './src/**/*.{js,jsx,ts,tsx,vue}',
    "./**/*.js"
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
    //   gridTemplateColumns: {
    //     // personalizando mi listado con 4 columnas
    //   //  '4p': '150px 150px 300px auto',
    //   //  '5p': '100px 200px 100px auto 100px',
    //   //  '6p': '100px 200px 100px 100px auto 100px',
    //   },
    textColor: theme => theme('colors'),
     textColor: {
      'primary': '#F2CB05',
      'secondary': '#f78d1d',
      'secondary-light': '#f79b1f',
      'third': '#a0cf34',
      'turquesa-light': '#ace3d9',
      'turquesa-dark': '#0cc',
      'danger': '#e3342f',
     },
      backgroundImage: theme => ({
        'mrpug': 'url(https://cdn.pixabay.com/photo/2015/06/08/15/02/pug-801826_960_720.jpg)',
        // 'wave-pattern-dots': 'url(../image/pattern-white-dots.png)',
      }),
      backgroundColor: theme => ({
        ...theme('colors'),
        'primary': '#F2CB05',
        'secondary': '#f78d1d',
        'secondary-light': '#f79b1f',
        'third': '#a0FF9f',
        'turquesa-light': '#ace3d9',
        'turquesa-dark': '#0cc',
        'danger': '#e3342f',
       })
    },
  },
  variants: {
    extend: {
      backgroundColor: ['odd, even'],
    },
  },
  plugins: [
    require('daisyui'),
  ],
}