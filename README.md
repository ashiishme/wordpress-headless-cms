# WordPress Server

WordPress server that prevents server theme access and customize api requests.

This is a theme file for WordPress which works like a server if you want to use it with front-end frameworks or library like **Anuglar / React**.

## Setup

<a href="https://wordpress.org/download/">Download</a> & Install WordPress on your server. ( same directory to your Angular or React application )

Download `wordpress-server` and upload it to themes directory.

Activate this theme.

Open `index.php` file and update the `header location url` to your own application url.

Now use WordPress api url in your any application.

## About WordPress Server

This project is a WordPress theme that prevents user from accessing home url of api. It redirects to app url specified in header method.

- Prevent user from accessing server url.
- Enables post thumbnail option in WordPress post.
- Adds post thumbnail in rest api json response. ( use field name `featured_image_src` or change from `functions.php` file )
- Custom excerpt length.

## WordPress Rest API

https://developer.wordpress.org/rest-api/
