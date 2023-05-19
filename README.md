# ShoeWare Product Inventory Management System
Product inventory management system for ShoeWare. 

## About The Project
This system is designed to help our client, ShoeWare, keep track of their inventory in real time, so that they can always ensure that they have the products that their customers want in stock.

### Supported Platforms
Any Windows 7, 8, 10, and 11 commputer with a browser.

### Screenshots

##### Login Page
![login-page](https://github.com/rafimps18/ShoeWare-PIMS/assets/114292899/b283f7e5-4e82-4dc8-94ea-1b63df38936e)

##### Landing Page
![landing-page](https://github.com/rafimps18/ShoeWare-PIMS/assets/114292899/67edbda8-0743-4571-bd16-0bdb06d91775)

##### Product Information Form 
![info-form](https://github.com/rafimps18/ShoeWare-PIMS/assets/114292899/bf0be168-b4c7-422d-8cf5-fdc0a58189e4)

##### Product Catalog
![prod-catalog](https://github.com/rafimps18/ShoeWare-PIMS/assets/114292899/ad4e2284-630d-45ac-a654-9f76ab4fb92c)

##### Account Settings Page
![acc-setting-page](https://github.com/rafimps18/ShoeWare-PIMS/assets/114292899/e05939a9-4384-48d1-aa3d-8bf0850f9cb9)


## Getting Started

### Installation

###### 1. Download and Install XAMPP for Windows on your windows machine
Download it through this website: https://www.apachefriends.org/download.html

###### 2. Download this project's source code through this link: https://github.com/rafimps18/PIMS-SWE/archive/refs/heads/qaFix.zip

###### 3. Navigate to the htdocs directory
It is located in "C:\xampp\htdocs"

###### 4. Move this project's files to the htdocs directory

###### 5. Open XAMPP and start the Apache and MySQL modules

###### 6. Open your browser and enter this url: http://localhost/phpmyadmin/index.php?route=/

###### 7. On the navigation bar on the left, click New

###### 8. On the Create database section, on the Database name input box, enter 'product_inventory' then click Create

###### 9. On the top navigation bar, click Import

###### 10. Import the products2.sql file from the SQL directory

###### 11.  Go to product_inventory and import 'loginsystem.sql'

### Accessing the website

###### 1.  Open your browser and enter this url: http://localhost/PIMS-SWE/index.php

###### 2.  Once you are in the login page, you can login to the system with valid credentials.

## Project folder structure

-  📁 `PIMS-SWE` - Contains the source codes for the project. This directory also contains the PHP files of the website's pages.
    -  📁 `css` - Contains the css files for the website's styling and layout.
    -  📁 `dbconfig` - Contains the code that enables the website to connect to the database.
    -  📁 `images` - Contains the image files for the site's favicon and the company logo.
    -  📁 `includes` - Contains three subfolders that contain code that does the CRUD functions as well as other functions.
        -  📁 `account-settings` - Contains codes that support operations concerned with the user's account.
        -  📁 `database` - Contains codes that execute the delete, insert/entry, and update functions of the product database
        -  📁 `login` - Contains codes that support and execute the operations and functions concerned with user sign-up, sign-in, and sign out. 

