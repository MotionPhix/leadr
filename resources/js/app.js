import '@protonemedia/laravel-splade/dist/jodit.css';
import "@protonemedia/laravel-splade/dist/style.css";
import "../css/app.css";
import "../css/line-scale.css";
import "./bootstrap";

import { renderSpladeApp, SpladePlugin } from "@protonemedia/laravel-splade";
import { createApp } from "vue/dist/vue.esm-bundler.js";

import 'vfonts/Inter.css';

import InputError from './components/InputError.vue';
import PhoneInput from './components/PhoneInput.vue';

import mask from '@alpinejs/mask';
import Alpine from 'alpinejs';

Alpine.plugin(mask)

const el = document.getElementById("app");

createApp({
  render: renderSpladeApp({ el })
})
  .use(SpladePlugin, {
    "max_keep_alive": 10,
    "transform_anchors": false,
    "progress_bar": true,
    "components": {
      PhoneInput,
      InputError,
    }
  })
  .mount(el);
