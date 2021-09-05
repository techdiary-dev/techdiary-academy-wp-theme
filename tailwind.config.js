module.exports = {
  mode: "jit",
  purge: ["./**/*.php"],
  theme: {
    extend: {
      colors: {
        primary: "#8A9CFE",
        secondary: "#FDF9F3",
        typography: "#0A083B",
      },
      fontFamily: {
        "operator-mono": ["Operator Mono"],
        roboto: ["Roboto", "sans-serif"],
      },
      spacing: {
        "50vh": "50vh",
        "60vh": "60vh",
        "70vh": "70vh",
        "80vh": "80vh",
        "90vh": "90vh",
      },
    },
  },
  variants: {
    extend: {},
  },
  plugins: [
    require("@tailwindcss/aspect-ratio"),
    require("@tailwindcss/typography"),
  ],
};
