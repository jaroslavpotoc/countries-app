
# Countries App 🌍
Laravel project for Holokolo
=======

This project is a web application focused on displaying information about various countries.

## Installation
* Clone the repository:  
    ```bash
    git clone <repository-url>
    ```
* Install dependencies:  
    ```bash
    cd countries-app
    composer install
    ```
* Configure the environment:
    * Create a `.env` file based on the example in `.env.example`.
    * Set up the database connection and other necessary variables.

* Migrate the database:  
    ```bash
    php artisan migrate
    ```
* Run data population commands:  
    ```bash
    php artisan populate:countries
    php artisan fetch:currency-rates
    ```
* Run the development server:  
    ```bash
    php artisan serve
    ```

## Usage
#### Country Overview: 
* After successful installation, visit the homepage (/) to see an overview of available countries.
#### ️Country Detail: 
* Click on the country name to view detailed information about that country.

## Contributing
#### To contribute to this project, follow these steps:
* Create a branch (git checkout -b my-branch)
* Make changes and commit them (git commit -am 'Add new functionality')
* Push to the branch (git push origin my-branch)
* Create a new Pull Request

## Requirements
#### Before running the application, make sure you have the following installed:
* PHP
* Composer
* Laravel
* Node.js
* Livewire

## License
This project is licensed under the XYZ License.
>>>>>>> ffee671 (Initial commit)
