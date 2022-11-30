# Laravel Tutorial by Brade Trasersy, v2

This tutorial includes a whole lot of branches who represent the different steps in Brad Traversy's tutorial, [Laravel From Scratch 2022 | 4+ Hour Course](https://www.youtube.com/watch?v=MYyJ4PuL4pY).

## Extensions recommended by Bray Traversy for Laravel

- Laravel Blade Snippets by Winnie Lin
- PHP Namespace Resolver by Mehedi Hassan
- PHP Intelephense by Ben Mewburn

## Time codes

1. ??.??.??. Routing.
1. 00.38.00. Creating models.
1. 00.43.51. Setting up the database. The database was already set up in this project from the start.
1. 00.49.00. Using migrations.
1. 00.58.00. Creating an eloquent model.

        php artisan make:model Listing

1. 1.00.00. Adding static data with a seeder.

        php artisan migrate:refresh --seed

1. 1.03.00. Creating your own factory. Brad Traversy describes this as absolutely optional. The first command create the factory, the second one refreshed the database once you have inserted the info about the factory you want to create.

        php artisan make:factory ListingFactory

        php artisan migrate:refresh --seed

1. 01.07.30. Creating a layout for you site, the HTML wrapper that is going to be on every page of the site.

1. 01.09.54. Creating a more advanced layout with prettier HTML. Working on listings.blade.php.

1. 01.18.23. Loading an image with the asset helper.

1. 01.19.10. Adding the hero and search bar HTML. Creating a partial.

1. 01.23.00. Doing the single-listing formatting.

1. 01.26.00. Handling non-existent IDs for existing routes or route-model binding.

1. 01.28.30. Creating a component and using props.

1. 01.30.45. Creating a component with a slot.

1. 01.32.30. Creating a component with a dynamic class that you pass.

1. 01.35.15. Creating a component for the tags.

1. 01.40.30. Separating routes and controllers.

        php artisan make:controller ListingController -r

1. 01.45.25. Create folder for listing views and link to new folder.
 
1. 01.46.30. Turn layout into actual component and avoid having to extend layout in each view. You don't have to do this. There is no "better" way. Basically, using $slot instead of @yield.

1. 01.49.00. Filtering tags with tag links. There are many ways to do this. Brad Traversy uses a scope filter. Make sure you have different tags for different listings or the filtering won't really be visible.

1. 01.57.30. Filtering tags with search bar.