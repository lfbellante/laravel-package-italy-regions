# Italy Regions

Italy Regions is a laravel library for seeding italy regions.

## Installation

Use the following command to install italy-regions.

```bash
composer require lfbellante/italy-regions
```

## Usage
Next, you should publish the ItalyRegions configuration, migration and seeder files using the vendor:publish Artisan command.
The italy-regions configuration file will be placed in your application's config directory
The italy-regions migration and seeder files will be placed in your apllication's database directory.

```bash
# Publish config file
php artisan vendor:publish --tag=regions-config

# Load migration & run
php artisan vendor:publish --tag=regions-migrations
php artisan migrate

# Load seeder
php artisan vendor:publish --tag=regions-seeders

# Seeding Regions
php artisan db:seed --class=RegionSeeder

```

## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.

## License
[MIT](https://choosealicense.com/licenses/mit/)