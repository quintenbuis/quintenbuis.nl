module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
    ],
  theme: {
    extend: {
        colors: {
            'primary': '#9DD1FF',
            'secondary': '#EEF7FF',
        }
    },
  },
  plugins: [
      require('@tailwindcss/typography'),
  ],
}
