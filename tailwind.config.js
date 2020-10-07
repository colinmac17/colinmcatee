module.exports = {
   future: {
        removeDeprecatedGapUtilities: true,
        purgeLayersByDefault: true,
   },
  purge: [
     './source/**/*.php',
  ],
  variants: {},
  plugins: [
    require('@tailwindcss/ui'),
  ],
}