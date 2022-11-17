# Laravel Tutorial by Brade Trasersy, v2

This tutorial includes a whole lot of branches who represent the different steps in Brad Traversy's tutorial, [Laravel From Scratch 2022 | 4+ Hour Course](https://www.youtube.com/watch?v=MYyJ4PuL4pY).

## Extensions recommended by Bray Traversy for Laravel

- Laravel Blade Snippets by Winnie Lin
- PHP Namespace Resolver by Mehedi Hassan
- PHP Intelephense by Ben Mewburn

## Time codes

- 00.38.00. Creating models.
- 00.43.51. Setting up the database. The database was already set up in this project from the start.
- 00.49.00. Using migrations.
- 00.58.00. Creating an eloquent model.

        php artisan make:model Listing

- 1.00.00. Adding static data with a seeder.

        php artisan migrate:refresh --seed

- 1.03.00. Creating your own factory. Brad Traversy describes this as absolutely optional. The first command create the factory, the second one refreshed the database once you have inserted the info about the factory you want to create.

        php artisan make:factory ListingFactory

        php artisan migrate:refresh --seed

- 01.07.30. Creating a layout for you site, the HTML wrapper that is going to be on every page of the site.

- 01.09.54. Creating a more advanced layout with prettier HTML. Working on listings.blade.php.

- 01.18.23. Loasing an image with the asset helper.