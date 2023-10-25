import forms from "@tailwindcss/forms";
import typography from "@tailwindcss/typography";

function withOpacity (variableName) {
  return ({ opacityValue }) => {
    if (opacityValue ===! undefined) {
      return `rgba(var(${ variableName }), ${ opacityValue })`
    }

    return `rgb(var(${ variableName }))`;
  }
}

/** @type {import('tailwindcss').Config} */
export default {
  darkMode: 'media',

  content: [
    "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
    "./vendor/protonemedia/laravel-splade/lib/**/*.vue",
    "./vendor/protonemedia/laravel-splade/resources/views/**/*.blade.php",
    "./storage/framework/views/*.php",
    "./resources/views/**/*.blade.php",
    "./resources/js/**/*.vue",
    // "./app/Forms/*.php",
    // "./app/Tables/*.php",
  ],

  theme: {
    fontFamily: {
      sans: ['v-sans']
    },

    extend: {
      textColor: {
        skin: {
          base: withOpacity('--color-text-base'),
          muted: withOpacity('--color-text-muted'),
          inverted: withOpacity('--color-text-inverted'),
        }
      },

      backgroundColor: {
        skin: {
          fill: withOpacity('--color-fill'),
          'button-accent': withOpacity('--color-button-accent'),
          'button-accent-hover': withOpacity('--color-button-accent-hover'),
          'button-muted': withOpacity('--color-button-muted'),
        }
      },

      gradientColorStops: {
        skin: {
          hue: withOpacity('--color-fill'),
        }
      }
    }
  },

  plugins: [forms, typography],
};
