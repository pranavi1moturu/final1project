<?php

class routes
{

    public static function getRoutes()
    {
        /
        
        $route = new route();
        
        $route->http_method = 'GET';
       
        $route->page = 'homepage';
       
        $route->action = 'show';
       
        $route->controller = 'homepageController';
        // name of the method that is called
        $route->method = 'show';
        //adding  route to the routes array.
        $routes[] = $route;

        //using POST method

        $route = new route();
        $route->http_method = 'POST';
        $route->action = 'create';
        $route->page = 'homepage';
        $route->controller = 'homepageController';
        $route->method = 'create';
        $routes[] = $route;

        //This is an examole of the post for tasks to show a task
        //GET METHOD index.php?page=tasks&action=show
        $route = new route();
        $route->http_method = 'GET';
        $route->action = 'show';
        $route->page = 'tasks';
        $route->controller = 'tasksController';
        $route->method = 'show';
        $routes[] = $route;

       .
        //adding routes for create, edit, and delete
        //GET METHOD 

        $route = new route();
        $route->http_method = 'GET';
        $route->action = 'all';
        $route->page = 'tasks';
        $route->controller = 'tasksController';
        $route->method = 'all';
        $routes[] = $route;
   

        $route = new route();
        $route->http_method = 'GET';
        $route->action = 'all';
        $route->page = 'accounts';
        $route->controller = 'accountsController';
        $route->method = 'all';
        $routes[] = $route;
        

        $route = new route();
        $route->http_method = 'GET';
        $route->action = 'show';
        $route->page = 'accounts';
        $route->controller = 'accountsController';
        $route->method = 'show';
        $routes[] = $route;

        //This goes in the login form action method
        //GET METHOD index.php?page=accounts&action=login


        $route = new route();
        $route->http_method = 'POST';
        $route->action = 'login';
        $route->page = 'accounts';
        $route->controller = 'accountsController';
        $route->method = 'login';
        $routes[] = $route;

        //more routes

        $route = new route();
        $route->http_method = 'POST';
        $route->action = 'delete';
        $route->page = 'tasks';
        $route->controller = 'tasksController';
        $route->method = 'delete';
        $routes[] = $route;


        $route = new route();
        $route->http_method = 'POST';
        $route->action = 'delete';
        $route->page = 'accounts';
        $route->controller = 'accountsController';
        $route->method = 'delete';
        $routes[] = $route;

        $route = new route();
        $route->http_method = 'GET';
        $route->action = 'edit';
        $route->page = 'accounts';
        $route->controller = 'accountsController';
        $route->method = 'edit';
        $routes[] = $route;

        $route = new route();
        $route->http_method = 'POST';
        $route->action = 'save';
        $route->page = 'accounts';
        $route->controller = 'accountsController';
        $route->method = 'save';
        $routes[] = $route;
       
        $route = new route();
        $route->http_method = 'GET';
        $route->action = 'register';
        $route->page = 'accounts';
        $route->controller = 'accountsController';
        $route->method = 'register';
        $routes[] = $route;
        
        $route = new route();
        $route->http_method = 'POST';
        $route->action = 'register';
        $route->page = 'accounts';
        $route->controller = 'accountsController';
        $route->method = 'store';
        $routes[] = $route;
		
		
		
		$route = new route();
        $route->http_method = 'POST';
        $route->action = 'store';
        $route->page = 'tasks';
        $route->controller = 'tasksController';
        $route->method = 'store';
        $routes[] = $route;
		
		$route = new route();
        $route->http_method = 'POST';
        $route->action = 'save';
        $route->page = 'tasks';
        $route->controller = 'tasksController';
        $route->method = 'save';
        $routes[] = $route;
		
		$route = new route();
        $route->http_method = 'GET';
        $route->action = 'create';
        $route->page = 'tasks';
        $route->controller = 'tasksController';
        $route->method = 'create';
        $routes[] = $route;
		
		$route = new route();
        $route->http_method = 'GET';
        $route->action = 'edit';
        $route->page = 'tasks';
        $route->controller = 'tasksController';
        $route->method = 'edit';
        $routes[] = $route;
		
		$route = new route();
        $route->http_method = 'GET';
        $route->action = 'logout';
        $route->page = 'accounts';
        $route->controller = 'accountsController';
        $route->method = 'logout';
        $routes[] = $route;


        return $routes;
    }

    public static function create($http_method,$action,$page,$controller,$method) {
        $route = new route();
        $route->http_method = $http_method;
        $route->action = $action;
        $route->page = $page;
        $route->controller = $controller;
        $route->method = $method;
    }
}



class route
{
    public $page;
    public $action;
    public $method;
    public $controller;
}
?>