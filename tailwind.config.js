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
    //   textColor: theme => theme('colors'),
    //  textColor: {
    //   // 'primary': '#F2CB05',
    //   // 'secondary': '#0099ff',
    //   // 'primary2': '#ffed4a',
    //   // 'danger': '#e3342f',
    //  },
    //   backgroundImage: theme => ({
    //     // 'wave-pattern': 'url(../image/wave-white.png)',
    //     // 'wave-pattern-dots': 'url(../image/pattern-white-dots.png)',
    //   }),
    //   backgroundColor: theme => ({
    //     ...theme('colors'),
    //     // 'primary': '##F2CB05',
    //     // 'secondary': '#0099ff',
    //     // 'primary2': '#ffed4a',
    //     // 'danger': '#e3342f',
    //    })
    },
  },
  variants: {
    extend: {
      backgroundColor: ['odd, even'],
    },
  },
  plugins: [],
}