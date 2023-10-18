<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Laravel Vue Inertia: Food Ordering Project

## Step By Step

1. **Setup: Install Breeze and ESLint**
    - **Install Laravel Breeze**
        ```
            composer require laravel/breeze
            php artisan breeze:install vue
        ```
    - **Install/Configure ESLint**
        ```
            npm install --save-dev \
                        @rushstack/eslint-patch \
                        @vue/eslint-config-prettier \
                        eslint \
                        eslint-plugin-vue \
                        prettier
        ```
    - **Configure ESLint:**
      - Create a new `.eslintrc.cjs` file
      - Create a new `.prettierrc.jso`n file
      - Run ESLint `npm run lint`
2. **Users, Roles and Permissions**
    - **Create Permissions Model:** `php artisan make:model Permission -ms`
    - **Create Roles Model:**
        ```
            php artisan make:model Role -ms
            php artisan make:migration create_permission_role_table
            php artisan make:migration create_role_user_table
        ```
    - **Add Roles To User**
    - **Add Admin User:** `php artisan make:seed UserSeeder`
    - **Seed Database**
    - **Register Auth Gates**
3. **Restaurants DB Schema**
    - **Create a City Model** `php artisan make:model City -ms`
    - **Create a Restaurant Model** `php artisan make:model Restaurant -m`
4. **Restaurants Index Table**
    - **Seed Vendor Role**
    - **Seed Vendor User**
    - **Create Index View Restaurant** `php artisan make:controller Admin/RestaurantController`
5. **Create Restaurant Form**
    - **Create Method in Controller**
    - **Restaurant Create View Component**
    - **SelectInput Component**
    - **Form Submit: Validation in Form Request** `php artisan make:request Admin/StoreRestaurantRequest`
    - **Store Method in Controller**
    - **Sending Email Invitation to Restaurant Owner** `php artisan make:notification RestaurantOwnerInvitation`
6. **Edit Restaurant Form**
    - **Edit method in Controller**
    - **Edit Restaurant: Vue Component**
    - **Submit Form: Controller and Validation** `php artisan make:request Admin/UpdateRestaurantRequest`
    - **Display Success and Status Messages**
7. **Front-end Permissions: Show/Hide Buttons**
8. **Category/Product DB and "Menu" Item**
    - **Category/Product Database Structure**
        ```
            php artisan make:model Category -m
            php artisan make:model Product -m
        ```
    - **Adding Category/Product to Permissions**
    - **Menu item "Menu"** `php artisan make:controller Vendor/MenuController`
9. **Categories Create/Edit/Delete**
    ```
        php artisan make:controller Vendor/CategoryController
        php artisan make:controller Vendor/ProductController
    ```
    - **Category Create Form**
    - **Save New Category**
    - **Edit Category**
    - **Delete Categories**
10. **Products Create/Edit/Delete**
    - **Product Create Form**
    - **Save New Product**
    - **Edit Product**
11. **Public Homepage and Restaurant Page**
    - **Homepage View**
    - **Seed More Restaurants With Categories And Products**
    - **Restaurant View**
