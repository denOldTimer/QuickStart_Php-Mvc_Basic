## Quickstart_Php-Mvc_Basic !

[![Greenkeeper badge][greenkeeper-image]][greenkeeper-url] [![Build Status][travis-image]][travis-url] [![Dependencies][dep-image]][dep-url] [![devDependencies][devdep-image]][devdep-url]

Is an automated workflow with Npm & Webpack-Encore.
Upon build it will create a complete php-mvc distribution folder.
All you have to do is publish the contents of the dist folder into the root of your webser.

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
- Stylint & ESLint

`https://github.com/ScorpioCoding/Quickstart_Php-Mvc_basic.git`

[greenkeeper-url]: https://greenkeeper.io/
[greenkeeper-image]: https://badges.greenkeeper.io/ScorpioCoding/Quickstart_Php-Mvc_basic.svg?style=flat-square
[travis-url]: https://travis-ci.org/ScorpioCoding/Quickstart_Php-Mvc_basic
[travis-image]: https://travis-ci.org/ScorpioCoding/Quickstart_Php-Mvc_basic.svg?branch=master
[dep-url]: https://david-dm.org/ScorpioCoding/Quickstart_Php-Mvc_basic
[dep-image]: https://david-dm.org/ScorpioCoding/Quickstart_Php-Mvc_basic/status.svg?style=flat
[devdep-url]: https://david-dm.org/ScorpioCoding/Quickstart_Php-Mvc_basic?type=dev
[devdep-image]: https://david-dm.org/ScorpioCoding/Quickstart_Php-Mvc_basic/dev-status.svg?style=flat

## Version Control

- 1.0.0 - Origin Version
- 2.0.0 - [30-04-2019] Dependency Updates
- 2.1.0 - [17-05-2019] Dependency Updates
- 2.1.1 - [18-05-2019] Webpack SingleRunTime Error

## Updates

- 2019-05-17
  1. Dependency Updates
     - eslint-plugin-node ^8.0.1 → ^9.0.1
     - jquery ^3.4.0 → ^3.4.1
- 2019-05-18
  1.  Webpack SingleRuntime Error
