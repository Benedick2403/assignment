/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./dist/**/*.html", "./dist/**/*.php"],
  theme: {
    screens: {
      '2xl': {'max': '1535px'},

      'xl': {'max': '1279px'},

      'lg': {'max': '1023px'},

      'md': {'max': '767px'},

      'sm': {'max': '639px'},
    },
    extend: {
      backgroundImage: {
        'home-bg': "url('images/home-bg.jpg')",
        'menu-bg': "url('images/menu-bg.jpg')",
        'radial': 'radial-gradient(circle at center top,  #F9F6EE 20%,  #EDEADE 30%, #F5F5DC 20%)',
        'sched-bg': "url('images/sched-bg.jpg')",
      },
      fontFamily: {
        reenie: ['Reenie Beanie'],
        barrio: ['Barrio'],
        nerko: ['Nerko One'],
        bounce: ['Birthstone Bounce'],
        averia: ['Averia Gruesa Libre'],
        mali: ['Mali'],
        allura: ['Allura'],
      },
      height: {
        '128': '32rem',
    },
  },
  plugins: [],
}

}