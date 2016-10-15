Symfony project [![Build Status](https://travis-ci.org/simplonco/symfony-project.svg?branch=master)](https://travis-ci.org/simplonco/symfony-project)
===============

![Kitten GIF](http://media2.giphy.com/media/3o7qE7Hbomm69hYr04/giphy.gif)

This is just a quick example, I use the [Giphy API](https://github.com/Giphy/GiphyAPI#search-endpoint) to retreive funny images from simple keywords.

## Launch the app

```shell
cd symfony-project
php bin/console server:run
firefox "http://127.0.0.1:8000/?q=kitten"
```

Try to change the value of the `q` GET parameter in the url :wink:!

## Understand the app

Check files `app/Resources/view/default/index.html.twig` and `src/AppBundle/Controller/DefaultController.php`

## To go further

Build your own, with this cool list of public APIs: https://github.com/toddmotto/public-apis

## Todo

Try to handle properly error when there is no gif found for a given request!
