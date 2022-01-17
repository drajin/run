Laravel Blog

##Features:

**Routing and Controllers**	

- Callback Functions and Route::view()
- Routing to a Single Controller Method	
- Route Parameters
- Route Naming	
- Route Groups	
- Route Model Binding
- TODO Route Redirect - homepage should automatically redirect to the login form



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


**API Basics**


- API Routes and Controllers
- API Eloquent Resources
- API Auth with Sanctum
- Override API Error Handling and Status Codes


**Database**	

- Database Migrations
- Basic Eloquent Model and MVC: Controller -> Model -> View
- Eloquent Relationships: belongsTo / hasMany / belongsToMany
- Eager Loading and N+1 Query Problem
- TODO Database Seeders and Factories


**Full Simple CRUD**	

- Route Resource and Resourceful Controllers
- Forms, Validation and Form Requests
- File Uploads and Storage Folder Basics
- Table Pagination


---

## How to use

- Clone the repository with __git clone__
- Copy __.env.example__ file to __.env__ and edit database credentials there
- Run __composer install__
- Run __php artisan key:generate__
- Run __php artisan migrate --seed__ (it has some seeded data for your testing)
- That's it: launch the main URL.

