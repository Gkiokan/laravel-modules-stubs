# Laravel Modules Stubs

This stubs repository can be used with laravel modules from nWidart.
https://github.com/nWidart/laravel-modules

After installing this package you can you should configure your config/modules.php configuration to use this stubs.
There will be an update soon that will change this automatically for you.

However there are currently some handycaps due the missing Ressource management.
If you are going for Vue you must use the basePath from $LOWER_NAME$.


## Create new Module  
```
php artisan modules:make ModuleName
```


## Create new Vue Project
```
cd Modules/$LOWER_NAME$
cd Ressource
vue create js
// merge options  
cd js && npm i && npm run build 

```

## Vue Router configuration
```
// VueRouter Configuration path
const router = new VueRouter({
  mode: 'history',
  base: '/core2/', // this is the basePath variable of $LOWER_NAME$
  routes
})
```
