import { addons } from "@storybook/addons";
import { create } from "@storybook/theming";

const theme = create({
  brandTitle: "999 | ui 스토리북",
  brandImage: "/storybook/logo-title.svg",
  brandUrl: "/",

  // base: 'light',

  // colorPrimary: 'hotpink',
  // colorSecondary: 'deepskyblue',

  // // UI
  // appBg: 'white',
  // appContentBg: 'silver',
  // appBorderColor: 'grey',
  // appBorderRadius: 4,

  // // Typography
  // fontBase: '"Open Sans", sans-serif',
  // fontCode: 'monospace',

  // // Text colors
  // textColor: 'black',
  // textInverseColor: 'rgba(255,255,255,0.9)',

  // // Toolbar default and active colors
  // barTextColor: 'silver',
  // barSelectedColor: 'black',
  // barBg: 'hotpink',

  // // Form colors
  // inputBg: 'white',
  // inputBorder: 'silver',
  // inputTextColor: 'black',
  // inputBorderRadius: 4,
});

addons.setConfig({
  theme,
});
