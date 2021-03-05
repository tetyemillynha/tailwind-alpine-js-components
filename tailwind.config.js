module.exports = {
  purge: [
    './app/**/*.php',
    './resources/**/*.php'
  ],
  theme: {
    container: {
      center: true,
      padding: {
        default: '1rem',
        sm: '2rem',
        lg: '4rem',
        xl: '5rem',
      }
    },
    minWidth:{
      '0': '0',
      '1/4': '25%',
      '1/2': '50%',
      '3/4': '75%',
      'full': '100%',
      'btn' : '8.125rem',
      'btn-sm' : '6.25rem',
      'btn-lg' : '8.125rem',
    },
    letterSpacing: {
      tightest: '-.075em',
      tighter: '-.05em',
      tight: '-.025em',
      normal: '0',
      wide: '.025em',
      wider: '.05em',
      widest: '.1em',
      widest: '.25em',
      btn: '.03125rem',
    },
    height: {
      screen: '100vh',
      full: '100%',
      auto: 'auto',
      0: '0',
      1: '0.25rem',
      2: '0.5rem',
      3: '0.75rem',
      4: '1rem',
      5: '1.25rem',
      6: '1.5rem',
      7: '1.75rem',
      8: '2rem',
      9: '2.25rem',
      10: '2.5rem',
      12: '3rem',
      14: '3.5rem',
      15: '3.875rem',
      16: '4.6875rem',
      20: '5rem',
      22: '5.937rem',
      48: '12rem'
    },
    borderRadius: {
      'none': '0',
       'sm': '0.125rem',
       default: '0.25rem',
       default: '4px',
       'md': '0.375rem',
       'lg': '0.5rem',
       'xl': '.625rem',
       'full': '9999px'
    },
    extend:{
      colors:{
        indigo: {
          '900': '#0e0025'
        }
      }
    },
    animation: {
      'show-up': 'showUp .3s forwards'
    },
    keyframes: {
      showUp:{
        '0%' : {opacity: 0, transform: 'translate3d(0,30px,0)'},
        '100%' : {opacity: 1, transform: 'translate3d(0,0,0)'}
      }
    }
  },
  variants: {},
  plugins: []
}