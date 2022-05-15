# React Headless WordPress

![](screenshot.png)

## Under the hood

- [ES6](https://github.com/lukehoban/es6features#readme) for JavaScript (transpiling with [Babel](https://babeljs.io/) and linting with [ESLint](https://eslint.org/))
- [SASS](http://sass-lang.com/) preprocessor for CSS following [SASS Guidelines](https://sass-guidelin.es/#the-7-1-pattern)
- [Gulp 4](https://gulpjs.com/) & [Webpack 5](https://webpack.js.org/) to manage, compile and optimize theme assets
- SVG Sprite : create a folder containing all your SVGs like `assets/src/svg/sprite` and run your watch or build

## Requirements

* [Node](https://nodejs.org/)
* [Yarn](https://yarnpkg.com/)

## Usage

First, clone this repository in your WordPress themes directory.

Then, run the following commands in the theme's directory:
```
yarn install
```

Launch your watch for assets with:
```
yarn start
```

For production sites, create your build with:
```
yarn build
```
