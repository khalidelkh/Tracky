/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**/*.php", "./**/*.js"],
  theme: {
    extend: {
      colors: {
        white: "#fff",
        midnightblue: "#090963",
        cornflowerblue: {
          "100": "#0095f3",
          "200": "rgba(0, 149, 243, 0)",
        },
        gainsboro: "#ddd",
        darkslategray: {
          "100": "#45454d",
          "200": "#434347",
          "300": "#213430",
        },
        whitesmoke: {
          "100": "#f5f5f5",
          "200": "#f4f4f4",
        },
        gray: {
          "100": "#6f7775",
          "200": "#050527",
        },
      },
      spacing: {},
      fontFamily: {
        poppins: "Poppins",
        "work-sans": "'Work Sans'",
        "font-awesome-5-pro": "'Font Awesome 5 Pro'",
      },
      borderRadius: {
        "11xs-7": "1.7px",
        "9xs-3": "3.3px",
        "81xl": "100px",
        "3xs": "10px",
        "11xs-3": "1.3px",
        "12xs-5": "0.5px",
        "31xl": "50px",
      },
    },
    fontSize: {
      "base-2": "16.2px",
      sm: "14px",
      "xl-2": "20.2px",
      "3xl-2": "22.2px",
      "mini-1": "14.1px",
      "21xl-4": "40.4px",
      "sm-9": "13.9px",
      "5xl": "24px",
      mid: "17px",
      "lg-2": "18.2px",
      "4xl": "23px",
      "13xl": "32px",
      lg: "18px",
      "35xl-5": "54.5px",
      base: "16px",
      inherit: "inherit",
    },
  },
  corePlugins: {
    preflight: false,
  },
};
