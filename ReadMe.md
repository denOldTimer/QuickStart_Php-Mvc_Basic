## Quickstart_Php-Mvc_Basic !

[![Greenkeeper badge][greenkeeper-image]][greenkeeper-url] [![Build Status][travis-image]][travis-url] [![Dependencies][dep-image]][dep-url] [![devDependencies][devdep-image]][devdep-url]

Is an automated workflow with Npm & Webpack-Encore. Upon build it will create a complete php-mvc distribution folder. All you have to do is publish the contents of the dist folder into the root of your webserver.

## How to use this project

-1 Clone the repo  
-2 Point the clone to your own repo  
-3 `npm install` -- run the command to install dependencies  
-4 Do your work in the 'src' directory  
-5 Commands build your dist folder.

- `npm run dev` -- wil do a one time dev run
- `npm run watch` -- wil run in the background and do a dev build upon file change
- `npm run build` -- wil do a one time build run and minify js and css files

Included in the Php-Mvc are:

- Routing via pattern's
- Core classes for database handling via PDO
- Core classes for session handling
- translation via JSON files
- Stylelint & ESLint

`https://github.com/ScorpioCoding/Quickstart_Php-Mvc_basic.git`

[greenkeeper-url]: https://greenkeeper.io/
[greenkeeper-image]: https://badges.greenkeeper.io/scQuickstart/Quickstart_Php-Mvc_Basic.svg?style=flat-square
[travis-url]: https://travis-ci.org/scQuickstart/Quickstart_Php-Mvc_Basic
[travis-image]: https://travis-ci.org/scQuickstart/Quickstart_Php-Mvc_Basic.svg?branch=master
[dep-url]: https://david-dm.org/scQuickstart/Quickstart_Php-Mvc_Basic
[dep-image]: https://david-dm.org/scQuickstart/Quickstart_Php-Mvc_Basic/status.svg?style=flat
[devdep-url]: https://david-dm.org/scQuickstart/Quickstart_Php-Mvc_Basic?type=dev
[devdep-image]: https://david-dm.org/scQuickstart/Quickstart_Php-Mvc_Basic/dev-status.svg?style=flat

## Version Control

- 1.0.0 - Origin Version
- 2.0.0 - [30-04-2019] Dependency Updates
- 2.1.0 - [17-05-2019] Dependency Updates
- 2.1.1 - [18-05-2019] Webpack SingleRunTime Error
- 2.3.0 - [19-06-2019] Dependency Updates
- 3.0.0 - [07-04-2020] Dependency Updates
- 4.0.0 - [05-02-2021] Dependency Updates 
                      mkdir config 
                      mv file webpack.config.js -> /config/webpack.config.js

## Updates

- 2019-05-17
  1. Dependency Updates
     - eslint-plugin-node ^8.0.1 → ^9.0.1
     - jquery ^3.4.0 → ^3.4.1
- 2019-05-18
  1.  Webpack SingleRuntime Error
- 2019-06-19
  1. Dependency Updates
- 2020-04-07
  1. Dependency Updates
- 2021-02-05
  1. Dependency Updates
     - "@symfony/webpack-encore": "^0.28.3" -> "^1.0.4",
     - "autoprefixer": "^9.7.6" -> "^10.2.4",
     - "copy-webpack-plugin": "^5.1.1" -> "^7.0.0",
     - "eslint": "^6.8.0" -> "^7.19.0",
     - "eslint-config-standard": "^14.1.1" -> "^16.0.2",
     - "eslint-plugin-import": "^2.20.2" -> "^2.22.1",
     - "eslint-plugin-standard": "^4.0.1" -> "^4.1.0",
     - "fibers": "^4.0.2" -> "^5.0.0",
     - "jquery": "^3.4.1" -> "^3.5.1",
     - "node-sass": "^4.13.1" -> "^5.0.0",
     - "postcss-loader": "^3.0.0" -> "^5.0.0",
     - "sass": "^1.26.3" -> "^1.32.6",
     - "sass-loader": "^8.0.2" -> "^10.1.1",
     - "stylelint": "^13.3.0" -> "^13.9.0",
     - "webpack-notifier": "^1.8.0" -> "^1.13.0"
