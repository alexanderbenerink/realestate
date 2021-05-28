<p align="center"><a href="https://realestate.benerink.online" target="_blank"><img src="https://i.imgur.com/3R6h9lx.png" width="300"></a></p>


## About this project

This project serves as an excercise in getting to know the Laravel stack. The following tools are used during development:

- [Laravel Breeze](https://github.com/laravel/breeze)
- [Tailwind CSS](https://tailwindcss.com/)
- MySQL

You can register an account, search and filter real estate offers and save up to a dozen results inside a wishlist.

## Installation instructions

### Pre-requisites
I strongly recommend running this (or any other local Laravel project) inside [Homestead](https://laravel.com/docs/8.x/homestead), a pre-packaged Vagrant Box
that allows you to run projects made using PHP frameworks inside a convenient, all-in-one development environment.

You can follow the official instructions for installing Homestead [here](https://laravel.com/docs/8.x/homestead#installation-and-setup).
Or you can follow the steps below.

Make sure you have the following globally installed:

- [Vagrant](https://www.vagrantup.com/downloads)
- Either [VirtualBox](https://www.virtualbox.org/wiki/Downloads) or [Parallels](https://www.parallels.com/products/desktop/)
- Composer
- NodeJS
- Git Bash (Or any other Git supported command line editor)
- Optionally, a MySQL Database Administration tool such as PHPMyAdmin (which I used for this project)

### Installation

#### 1. Installing Homestead

Preferably you'd want to install the Homestead repository inside a Homestead folder within your 'Home' directory 
(for example on Windows it'd be in: `C:\Users\[Username]\ `):

```
git clone https://github.com/laravel/homestead.git ~/Homestead

cd ~/Homestead

git checkout release
```

Then, execute the init file inside the Homestead directory from the command line to create the homestead.yaml
configuration file:

```
// macOS / Linux...
bash init.sh

// Windows...
init.bat
```

##### 1.1. Clone Git Repo

Clone the git repo into `C:\Users\[Username]\Projects ` using:

```
git clone https://github.com/alexanderbenerink/realestate.git --recursive
```

#### 2. Configuring Homestead

For more information, you can use the [official documentation](https://laravel.com/docs/8.x/homestead#configuring-homestead) for configuring
Homestead.

The gist of it is:

- Set the provider key inside homestead.yaml to the corresponding Vagrant provider which you have downloaded
```
provider: virtualbox

// or

provider: paralells
```
- Set the Projects folder that we've previously made in _section 1.2_ inside the homestead.yaml file
```
// Windows example...

folders: 
    - map: C:/Users/[Username]/Projects
      to: /home/vagrant/code
```
- Declare the site and location
```
sites:
    - map: phpmyadmin.test
      to: /home/vagrant/code/phpmyadmin
    - map: realestate.test
      to: /home/vagrant/code/realestate/public
```
- Redirect the domain name(s) to the Homestead virtual machine inside the hosts file
(On Windows it's found at: `C:\Windows\System32\drivers\etc\hosts`)

```
# Put at the end of the file

192.168.10.10 phpmyadmin.test
192.168.10.10 realestate.test 
```

#### 3. Starting Homestead

##### 3.1. First time startup
For first time startup, do the following:

- Go to the Homestead directory
- Open a command-line editor
- Generate an SSH key using `ssh-keygen -t rsa -b 4096 -C "your_email@example.com"` (when asked, leave the options empty by pressing enter)

##### 3.2. Startup Homestead and install dependencies

Start vagrant up and SSH to it by running the following command line instructions inside the Homestead directory:

```
vagrant up

vagrant ssh
```
Then, use `dir` and `cd` to navigate to the project.
Example:

```
cd code/realestate/
```

Inside the project directory, `composer update`, `npm install` and/or `yarn install`.

##### 3.3. Create database & run migrations and seeders

Create a database and configure your .env file accordingly. Don't manually add tables.

Because you want to run the database migrations and seed the database using the following instructions:
```
php artisan migrate

php artisan db:seed

// Alternatively, you can run both (will rebuild the database)

php artisan migrate:fresh --seed

// When all is migrated, you can run this command to refresh and reseed the test data

php artisan migrate:refresh --path=/database/migrations/2021_05_18_091339_create_houses_table.php --seed

```
Now the database has the necessary tables, and is populated with test data.

##### 3.4. FINISHED
Compile assets:
```
npm install

// First try it on ssh, then locally if it doesn't work. It works inside PHPStorm though.
npm run dev

//clear cache and optimize autoload files
composer dump-autoload

```

Go to `realestate.test` inside your browser and you're finished.
## License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
