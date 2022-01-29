Laravel Blog

##Features:

**Routing and Controllers**	

- Callback Functions and Route::view()
- Routing to a Single Controller Method	
- Route Parameters
- Route Naming	
- Route Groups	
- Route Model Binding
- Route Redirect 


**Blade**

- Displaying Variables in Blade
- Blade If-Else and Loop Structures
- Blade Loops
- Layout: @include, @extends, @section, @yield
- Blade Components


**Auth**	

- Laravel UI (Bootstrap)
- Default Auth Model and Access its Fields from Anywhere
- Check Auth in Controller / Blade
- Auth Middleware
- TODO Authorization: Roles/Permissions (admin and simple users), Gates, Policies with Spatie Permissions package
- TODO Authentication: Email Verification


**API**

- API Routes and Controllers
- API Eloquent Resources
- API Auth with Sanctum
- Override API Error Handling and Status Codes


**Database**	

- Database Migrations
- Basic Eloquent Model and MVC: Controller -> Model -> View
- Eloquent Relationships: belongsTo / hasMany / belongsToMany
- Database Seeders and Factories
- TODO Eloquent Query Scopes - show only active clients, for example
- TODO Eloquent Accessors and Mutators - view all date values in m/d/Y format
- TODO Soft Deletes on any Eloquent models
- TODO Eloquent Observers


**Full CRUD**	

- Route Resource and Resourceful Controllers
- Forms, Validation and Form Requests
- File Uploads and Storage Folder
- Table Pagination


---

## How to use

- Download the archive or clone the project using git `git clone https://github.com/drajin/run.git`
- Rename `.env.example` file to `.env` and edit database credentials there
- Run `composer install`
- Run `php artisan migrate --seed`
- Run `php artisan key:generate`
- Run `php artisan serve`

