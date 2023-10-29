![Static Badge](https://img.shields.io/badge/Version-1.0.0-blue)
![Static Badge](https://img.shields.io/badge/Licence-GPL_3.0-yallow)
![GitHub commit activity (master)](https://img.shields.io/github/commit-activity/t/MarcoSchiavello/GBSAN?color=orange)
![GitLab stars](https://img.shields.io/github/stars/MarcoSchiavello/GBSAN?color=purple)

<details>
  <summary><h3>Table of contents</h3></summary>
  
-  [About](#about)
-  [Tech-stack](#tech-stack)
-  [Installation](#installation)
-  [Installation in shared web hosting](#installation_in_shared_web_hosting)
-  [DB-schema](#db-schema)
-  [Screenshots](#screenshots)
</details>


<h1 align="center" text-allign="center" id="about"><img src="https://github.com/MarcoSchiavello/GBSAN/blob/main/public/imgs/logo.png" style="width: 50px" /> GBSAN</h1> 

Digital hospital management application developed by students from the Amedeo Avogadro School of Turin (IT) in collaboration with a nonprofit organization Abala lite to improve the quality of health in Guinea Bissau.

## Tech-stack
- Lavavel
- MySQL
- JS vanilla
- TailwindCSS

## Installation
It's required to have <a href="https://getcomposer.org/">Composer</a> (packet manager) and <a href="https://www.php.net/">PHP</a> installed.<br/>
Then you have to :
- ```composer install``` in the root directory of the project to install PHP dependencies
- ```npm install``` in the root directory of the project to install JS dependencies
- Copy the environment config example in another file called ```.env``` in the same directory ```cp ./.env.example ./.env``` then change the config file and put at least the DB credential
- Generate the API encryption key with ```php artisan key:generate```
- Start the DB server and then run the command: ```php artisan migrate``` to create all the DB tables
<br/>

Now you can run the application by doing ```php artisan serve```

## Installation in shared web hosting
In order to let the application work in a shared web host, you have to 
- Put the content of ```public/``` in the ```htdocs/``` directory
- Create a directory in ```htdocs/``` called ```laravel/```
- Put all the content of the root directory of the project (without the ```public/``` directory) inside the newly created directory ```laravel/```
- Change every occurrence of ```__DIR__.'/../***/****'``` with ```__DIR__.'/laravel/***/****'``` in ```index.php``` inside ```htdocs/```
- Create a directory called ```storage``` and create a symlink ```ln -s ./laravel/storage ./storage``` to access all file inside the server 


## DB schema
<img src="https://github.com/MarcoSchiavello/GBSAN/blob/main/.github/img/Schema.png" >

## Screenshots
<img src="https://github.com/MarcoSchiavello/GBSAN/blob/main/.github/img/Screenshot%201.png" style="width: 80%" >
<img src="https://github.com/MarcoSchiavello/GBSAN/blob/main/.github/img/Screenshot%202.png" style="width: 80%" >

