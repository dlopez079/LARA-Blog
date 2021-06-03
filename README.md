# LARA-Blog

This project is to practice creating a blog that will have multiple users with multiple roles signing into it.  I did not focus on design of the pages.  I focused on how the blade views worked after having multiple users with multiple roles authenticating with the web application.  For this exercise, I created four test accounts, admin, blogwriter, user1, and user2.  Admin, blogwriters, and users see a different dashboard once they log in. The instructions below are very vague and I'm assuming that you have knowledge of the Laravel framework.  You can revert to the video below under acknowledgements.

## Getting Started

	1. Create Laravel Application with Docker Desktop and WSL2.0.  The WSL2.0 is backed by a virtual instance of Ubuntu.  From that environment, you handle Docker Desktop with Laravel Sail.   You are basically jumping 2 virtual instances.  Once instance for the Ubuntu OS and the other for the Docker containers. (I used a Windows environment.  If you use another OS, it may be different.)
	2. Install Laravel Breeze into application then run migrations.  You are doing this after you connect to your Ubuntu Distro (Not locally).
	3. Run NPM Install within the project folder that was created on the Ubuntu Distro.
	4. Install Laratrust -> Run Migrations - > Run db:seed 
	5. Add default Role to the RegisteredUserController.php
	6. Create a different view for the different user accounts and their specific roles (I copied the existing dashboard and changed the title.)
		a. Add a new route group for the views to the web.php.  The new route group will use middleware.
		b. We will forward authenticated users to their dashboard based on their roles.
	7. Create a Dashboard Controller using sail artisan make:controller
	8. Within the index of the Dashboard Controller, you will create an if statement that will search for user's roles and forward them to the appropriate blade view.
	9. Create the 3 different dashboard views in the views folder.
	10. After your views a correctly displaying for each user and their roles, we will create a profile tab within the dashboard navigation. 
		a. Create a link in the navigation
		b. Create a route for the link in the navigation
        c. Create a blade for the tab


### Installing

## Windows Envrionment
1. Download and install WSL 2.0 onto your computer. 
2. Download and install Docker Desktop on your computer. (If you download Docker Desktop before the WSL, The Docker Desktop installation will enable WSL on your machine).
3. Download and install Visual Studio Code.
    a. Extensions for VSCode: 
        1. Beautify css/sass/scss/less
        2. Command Alias
        3. Docker
        4. Emmet Live
        5. Getter and Setter Generator
        6. Laravel Artisan
        7. VS Code Great Icons
        8. Remote - WSL >>> SUPER IMPORTANT IF YOU WANT YOUR VS CODE TO CONNECT TO YOUR VIRTUAL ENVIRONMENT
        9. Open in Browser
        10.Live Snippets
        11.Javascript(ES6) code snippets
        12. Bracket Pair Colorizer

4. Download and install Ubuntu for WSL 2.0
5. Within the Ubuntu virtual instance created by WSL 2.0, (Use Linux installation methods when within the virtual Ubuntu operating system)
    a. Download and install git.
    b. Download and install node.js.
    c. Download and install composer.
    d. Create your Laravel Project 
        1. When creating a new project, Laravel Sail is already packaged in.
        2. When you are cloning an already existing project, you must require Laravel Sail using composer. 
    c. Download and install Laravel Breeze
    d. Download and install Laratrust

## Built With

* [Windows WSL 2.0](https://docs.microsoft.com/en-us/windows/wsl/install-win10) - Windows Subsystem for Linux 
* [Docker Desktop](https://www.docker.com/products/docker-desktop) - The containerize your application.
* [Ubuntu Virtual OS](https://www.microsoft.com/en-us/p/ubuntu/9nblggh4msv6?ocid=9nblggh4msv6_ORSEARCH_Bing&rtc=1&activetab=pivot:overviewtab) - The virtual Linix operating system for Windows
* [Visual Studio Code](https://code.visualstudio.com/Download) - The code editor - Integrated Git, debugging and extensions. (IDE)
* [Laravel 8](https://laravel.com/docs/8.x) - The web framework used
* [Laravel Sail](https://laravel.com/docs/8.x/sail) - Package to help work with docker containers.
* [Laravel Breeze](https://laravel.com/docs/8.x/starter-kits#laravel-breeze) - Used for front end authentication.
* [Laratrust](https://laratrust.santigarcor.me/) - Used for multi-roles and multi-user authentication.


## Authors

* **David Lopez** - *Initial work* - [dlopez079](https://github.com/dlopez079)


## Acknowledgments

* Shout out to Code Fisher aka Norbertho (https://github.com/Norbertho).  This Youtube video help me get the multi-user/multi-role authentication successfully completed. (https://www.youtube.com/watch?v=VHhmfjhu_1g&t=26s)

