module.exports = {
  theme: {
    pagination: theme => ({
      color: theme("colors.teal.600")
    })
  },
  plugins: [require("tailwindcss-plugins/pagination")]
};
