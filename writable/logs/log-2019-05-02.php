<?php defined('SYSTEMPATH') || exit('No direct script access allowed'); ?>

CRITICAL - 2019-05-02 15:26:23 --> Uncaught ErrorException: include(G:\xampp\htdocs\project\ci4-tracking\app\Views/errors/html/error_404.php): failed to open stream: No such file or directory in G:\xampp\htdocs\project\ci4-tracking\system\Debug\Exceptions.php:285
Stack trace:
#0 G:\xampp\htdocs\project\ci4-tracking\system\Debug\Exceptions.php(285): CodeIgniter\Debug\Exceptions->errorHandler(2, 'include(G:\\xamp...', 'G:\\xampp\\htdocs...', 285, Array)
#1 G:\xampp\htdocs\project\ci4-tracking\system\Debug\Exceptions.php(285): include()
#2 G:\xampp\htdocs\project\ci4-tracking\system\Debug\Exceptions.php(156): CodeIgniter\Debug\Exceptions->render(Object(CodeIgniter\Exceptions\PageNotFoundException), 404)
#3 [internal function]: CodeIgniter\Debug\Exceptions->exceptionHandler(Object(CodeIgniter\Exceptions\PageNotFoundException))
#4 {main}
  thrown
#0 [internal function]: CodeIgniter\Debug\Exceptions->shutdownHandler()
#1 {main}
CRITICAL - 2019-05-02 15:26:36 --> Invalid file: {0}
#0 G:\xampp\htdocs\project\ci4-tracking\system\View\View.php(221): CodeIgniter\Exceptions\FrameworkException::forInvalidFile('content/sign_in...')
#1 G:\xampp\htdocs\project\ci4-tracking\system\Common.php(166): CodeIgniter\View\View->render('content/sign_in', Array, NULL)
#2 G:\xampp\htdocs\project\ci4-tracking\app\Controllers\Auth.php(9): view('content/sign_in')
#3 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(825): App\Controllers\Auth->index()
#4 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(325): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Auth))
#5 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(235): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 G:\xampp\htdocs\project\ci4-tracking\public\index.php(45): CodeIgniter\CodeIgniter->run()
#7 {main}
CRITICAL - 2019-05-02 15:27:52 --> Invalid file: {0}
#0 G:\xampp\htdocs\project\ci4-tracking\system\View\View.php(221): CodeIgniter\Exceptions\FrameworkException::forInvalidFile('content/sign_in...')
#1 G:\xampp\htdocs\project\ci4-tracking\system\Common.php(166): CodeIgniter\View\View->render('content/sign_in', Array, NULL)
#2 G:\xampp\htdocs\project\ci4-tracking\app\Controllers\Auth.php(9): view('content/sign_in')
#3 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(825): App\Controllers\Auth->index()
#4 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(325): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Auth))
#5 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(235): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 G:\xampp\htdocs\project\ci4-tracking\public\index.php(45): CodeIgniter\CodeIgniter->run()
#7 {main}
CRITICAL - 2019-05-02 15:28:22 --> Invalid file: {0}
#0 G:\xampp\htdocs\project\ci4-tracking\system\View\View.php(221): CodeIgniter\Exceptions\FrameworkException::forInvalidFile('content/sign_in...')
#1 G:\xampp\htdocs\project\ci4-tracking\system\Common.php(166): CodeIgniter\View\View->render('content/sign_in', Array, NULL)
#2 G:\xampp\htdocs\project\ci4-tracking\app\Controllers\Auth.php(9): view('content/sign_in')
#3 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(825): App\Controllers\Auth->index()
#4 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(325): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Auth))
#5 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(235): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 G:\xampp\htdocs\project\ci4-tracking\public\index.php(45): CodeIgniter\CodeIgniter->run()
#7 {main}
CRITICAL - 2019-05-02 15:28:23 --> Invalid file: {0}
#0 G:\xampp\htdocs\project\ci4-tracking\system\View\View.php(221): CodeIgniter\Exceptions\FrameworkException::forInvalidFile('content/sign_in...')
#1 G:\xampp\htdocs\project\ci4-tracking\system\Common.php(166): CodeIgniter\View\View->render('content/sign_in', Array, NULL)
#2 G:\xampp\htdocs\project\ci4-tracking\app\Controllers\Auth.php(9): view('content/sign_in')
#3 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(825): App\Controllers\Auth->index()
#4 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(325): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Auth))
#5 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(235): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 G:\xampp\htdocs\project\ci4-tracking\public\index.php(45): CodeIgniter\CodeIgniter->run()
#7 {main}
CRITICAL - 2019-05-02 15:28:23 --> Invalid file: {0}
#0 G:\xampp\htdocs\project\ci4-tracking\system\View\View.php(221): CodeIgniter\Exceptions\FrameworkException::forInvalidFile('content/sign_in...')
#1 G:\xampp\htdocs\project\ci4-tracking\system\Common.php(166): CodeIgniter\View\View->render('content/sign_in', Array, NULL)
#2 G:\xampp\htdocs\project\ci4-tracking\app\Controllers\Auth.php(9): view('content/sign_in')
#3 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(825): App\Controllers\Auth->index()
#4 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(325): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Auth))
#5 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(235): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 G:\xampp\htdocs\project\ci4-tracking\public\index.php(45): CodeIgniter\CodeIgniter->run()
#7 {main}
CRITICAL - 2019-05-02 15:28:24 --> Invalid file: {0}
#0 G:\xampp\htdocs\project\ci4-tracking\system\View\View.php(221): CodeIgniter\Exceptions\FrameworkException::forInvalidFile('content/sign_in...')
#1 G:\xampp\htdocs\project\ci4-tracking\system\Common.php(166): CodeIgniter\View\View->render('content/sign_in', Array, NULL)
#2 G:\xampp\htdocs\project\ci4-tracking\app\Controllers\Auth.php(9): view('content/sign_in')
#3 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(825): App\Controllers\Auth->index()
#4 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(325): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Auth))
#5 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(235): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 G:\xampp\htdocs\project\ci4-tracking\public\index.php(45): CodeIgniter\CodeIgniter->run()
#7 {main}
CRITICAL - 2019-05-02 16:19:49 --> Cannot call constructor
#0 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(800): App\Controllers\Barang->__construct()
#1 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(320): CodeIgniter\CodeIgniter->createController()
#2 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(235): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 G:\xampp\htdocs\project\ci4-tracking\public\index.php(44): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2019-05-02 16:26:36 --> Cannot call constructor
#0 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(800): App\Controllers\Barang->__construct()
#1 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(320): CodeIgniter\CodeIgniter->createController()
#2 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(235): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 G:\xampp\htdocs\project\ci4-tracking\public\index.php(44): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2019-05-02 16:28:49 --> syntax error, unexpected '$session' (T_VARIABLE), expecting function (T_FUNCTION) or const (T_CONST)
#0 G:\xampp\htdocs\project\ci4-tracking\system\Router\Router.php(196): CodeIgniter\Router\Router->autoRoute('barang')
#1 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(703): CodeIgniter\Router\Router->handle('barang')
#2 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(285): CodeIgniter\CodeIgniter->tryToRouteIt(Object(CodeIgniter\Router\RouteCollection))
#3 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(235): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 G:\xampp\htdocs\project\ci4-tracking\public\index.php(44): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2019-05-02 16:47:12 --> Call to undefined function App\Controllers\get()
#0 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(825): App\Controllers\Barang->index()
#1 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(325): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Barang))
#2 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(235): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 G:\xampp\htdocs\project\ci4-tracking\public\index.php(44): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2019-05-02 16:47:50 --> Call to undefined function App\Controllers\get()
#0 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(825): App\Controllers\Barang->index()
#1 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(325): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Barang))
#2 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(235): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 G:\xampp\htdocs\project\ci4-tracking\public\index.php(44): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2019-05-02 16:48:09 --> Call to a member function get() on null
#0 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(825): App\Controllers\Barang->index()
#1 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(325): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Barang))
#2 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(235): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 G:\xampp\htdocs\project\ci4-tracking\public\index.php(44): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2019-05-02 16:48:11 --> Call to a member function get() on null
#0 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(825): App\Controllers\Barang->index()
#1 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(325): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Barang))
#2 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(235): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 G:\xampp\htdocs\project\ci4-tracking\public\index.php(44): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2019-05-02 16:48:12 --> Call to a member function get() on null
#0 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(825): App\Controllers\Barang->index()
#1 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(325): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Barang))
#2 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(235): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 G:\xampp\htdocs\project\ci4-tracking\public\index.php(44): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2019-05-02 16:48:16 --> Argument 2 passed to view() must be of the type array, null given, called in G:\xampp\htdocs\project\ci4-tracking\app\Controllers\Barang.php on line 13
#0 G:\xampp\htdocs\project\ci4-tracking\app\Controllers\Barang.php(13): view('template/head', NULL, true)
#1 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(825): App\Controllers\Barang->index()
#2 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(325): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Barang))
#3 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(235): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 G:\xampp\htdocs\project\ci4-tracking\public\index.php(44): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2019-05-02 16:48:16 --> Argument 2 passed to view() must be of the type array, null given, called in G:\xampp\htdocs\project\ci4-tracking\app\Controllers\Barang.php on line 13
#0 G:\xampp\htdocs\project\ci4-tracking\app\Controllers\Barang.php(13): view('template/head', NULL, true)
#1 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(825): App\Controllers\Barang->index()
#2 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(325): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Barang))
#3 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(235): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 G:\xampp\htdocs\project\ci4-tracking\public\index.php(44): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2019-05-02 16:48:17 --> Argument 2 passed to view() must be of the type array, null given, called in G:\xampp\htdocs\project\ci4-tracking\app\Controllers\Barang.php on line 13
#0 G:\xampp\htdocs\project\ci4-tracking\app\Controllers\Barang.php(13): view('template/head', NULL, true)
#1 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(825): App\Controllers\Barang->index()
#2 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(325): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Barang))
#3 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(235): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 G:\xampp\htdocs\project\ci4-tracking\public\index.php(44): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2019-05-02 16:48:17 --> Argument 2 passed to view() must be of the type array, null given, called in G:\xampp\htdocs\project\ci4-tracking\app\Controllers\Barang.php on line 13
#0 G:\xampp\htdocs\project\ci4-tracking\app\Controllers\Barang.php(13): view('template/head', NULL, true)
#1 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(825): App\Controllers\Barang->index()
#2 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(325): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Barang))
#3 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(235): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 G:\xampp\htdocs\project\ci4-tracking\public\index.php(44): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2019-05-02 16:48:17 --> Argument 2 passed to view() must be of the type array, null given, called in G:\xampp\htdocs\project\ci4-tracking\app\Controllers\Barang.php on line 13
#0 G:\xampp\htdocs\project\ci4-tracking\app\Controllers\Barang.php(13): view('template/head', NULL, true)
#1 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(825): App\Controllers\Barang->index()
#2 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(325): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Barang))
#3 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(235): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 G:\xampp\htdocs\project\ci4-tracking\public\index.php(44): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2019-05-02 16:48:38 --> Call to a member function get() on null
#0 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(825): App\Controllers\Barang->index()
#1 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(325): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Barang))
#2 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(235): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 G:\xampp\htdocs\project\ci4-tracking\public\index.php(44): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2019-05-02 16:48:39 --> Call to a member function get() on null
#0 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(825): App\Controllers\Barang->index()
#1 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(325): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Barang))
#2 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(235): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 G:\xampp\htdocs\project\ci4-tracking\public\index.php(44): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2019-05-02 16:48:54 --> Call to a member function get() on null
#0 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(825): App\Controllers\Barang->index()
#1 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(325): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Barang))
#2 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(235): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 G:\xampp\htdocs\project\ci4-tracking\public\index.php(44): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2019-05-02 17:46:02 --> Class 'App\Controllers\Barangs' not found
#0 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(825): App\Controllers\Barang->index()
#1 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(325): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Barang))
#2 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(235): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 G:\xampp\htdocs\project\ci4-tracking\public\index.php(44): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2019-05-02 17:46:16 --> Class 'App\Controllers\Barangs' not found
#0 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(825): App\Controllers\Barang->index()
#1 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(325): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Barang))
#2 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(235): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 G:\xampp\htdocs\project\ci4-tracking\public\index.php(44): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2019-05-02 17:47:53 --> Class 'App\Controllers\Barangs' not found
#0 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(825): App\Controllers\Barang->index()
#1 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(325): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Barang))
#2 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(235): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 G:\xampp\htdocs\project\ci4-tracking\public\index.php(44): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2019-05-02 17:52:15 --> Class 'App\Controllers\Barangs' not found
#0 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(825): App\Controllers\Barang->index()
#1 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(325): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Barang))
#2 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(235): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 G:\xampp\htdocs\project\ci4-tracking\public\index.php(45): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2019-05-02 17:52:15 --> Uncaught ErrorException: include(G:\xampp\htdocs\project\ci4-tracking\app\Views/errors/html/error_exception.php): failed to open stream: No such file or directory in G:\xampp\htdocs\project\ci4-tracking\system\Debug\Exceptions.php:285
Stack trace:
#0 G:\xampp\htdocs\project\ci4-tracking\system\Debug\Exceptions.php(285): CodeIgniter\Debug\Exceptions->errorHandler(2, 'include(G:\\xamp...', 'G:\\xampp\\htdocs...', 285, Array)
#1 G:\xampp\htdocs\project\ci4-tracking\system\Debug\Exceptions.php(285): include()
#2 G:\xampp\htdocs\project\ci4-tracking\system\Debug\Exceptions.php(156): CodeIgniter\Debug\Exceptions->render(Object(Error), 500)
#3 [internal function]: CodeIgniter\Debug\Exceptions->exceptionHandler(Object(Error))
#4 {main}
  thrown
#0 [internal function]: CodeIgniter\Debug\Exceptions->shutdownHandler()
#1 {main}
CRITICAL - 2019-05-02 17:56:15 --> No database selected
#0 G:\xampp\htdocs\project\ci4-tracking\system\Database\MySQLi\Connection.php(325): mysqli->query('SELECT *\nFROM `...')
#1 G:\xampp\htdocs\project\ci4-tracking\system\Database\BaseConnection.php(705): CodeIgniter\Database\MySQLi\Connection->execute('SELECT *\nFROM `...')
#2 G:\xampp\htdocs\project\ci4-tracking\system\Database\BaseConnection.php(633): CodeIgniter\Database\BaseConnection->simpleQuery('SELECT *\nFROM `...')
#3 G:\xampp\htdocs\project\ci4-tracking\system\Database\BaseBuilder.php(1450): CodeIgniter\Database\BaseConnection->query('SELECT *\nFROM `...', Array, false)
#4 G:\xampp\htdocs\project\ci4-tracking\system\Model.php(372): CodeIgniter\Database\BaseBuilder->get()
#5 G:\xampp\htdocs\project\ci4-tracking\app\Controllers\Barang.php(10): CodeIgniter\Model->findAll()
#6 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(825): App\Controllers\Barang->index()
#7 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(325): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Barang))
#8 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(235): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#9 G:\xampp\htdocs\project\ci4-tracking\public\index.php(45): CodeIgniter\CodeIgniter->run()
#10 {main}
CRITICAL - 2019-05-02 17:56:15 --> Uncaught ErrorException: include(G:\xampp\htdocs\project\ci4-tracking\app\Views/errors/html/error_exception.php): failed to open stream: No such file or directory in G:\xampp\htdocs\project\ci4-tracking\system\Debug\Exceptions.php:285
Stack trace:
#0 G:\xampp\htdocs\project\ci4-tracking\system\Debug\Exceptions.php(285): CodeIgniter\Debug\Exceptions->errorHandler(2, 'include(G:\\xamp...', 'G:\\xampp\\htdocs...', 285, Array)
#1 G:\xampp\htdocs\project\ci4-tracking\system\Debug\Exceptions.php(285): include()
#2 G:\xampp\htdocs\project\ci4-tracking\system\Debug\Exceptions.php(156): CodeIgniter\Debug\Exceptions->render(Object(mysqli_sql_exception), 500)
#3 [internal function]: CodeIgniter\Debug\Exceptions->exceptionHandler(Object(mysqli_sql_exception))
#4 {main}
  thrown
#0 [internal function]: CodeIgniter\Debug\Exceptions->shutdownHandler()
#1 {main}
CRITICAL - 2019-05-02 17:56:37 --> No database selected
#0 G:\xampp\htdocs\project\ci4-tracking\system\Database\MySQLi\Connection.php(325): mysqli->query('SELECT *\nFROM `...')
#1 G:\xampp\htdocs\project\ci4-tracking\system\Database\BaseConnection.php(705): CodeIgniter\Database\MySQLi\Connection->execute('SELECT *\nFROM `...')
#2 G:\xampp\htdocs\project\ci4-tracking\system\Database\BaseConnection.php(633): CodeIgniter\Database\BaseConnection->simpleQuery('SELECT *\nFROM `...')
#3 G:\xampp\htdocs\project\ci4-tracking\system\Database\BaseBuilder.php(1450): CodeIgniter\Database\BaseConnection->query('SELECT *\nFROM `...', Array, false)
#4 G:\xampp\htdocs\project\ci4-tracking\system\Model.php(372): CodeIgniter\Database\BaseBuilder->get()
#5 G:\xampp\htdocs\project\ci4-tracking\app\Controllers\Barang.php(10): CodeIgniter\Model->findAll()
#6 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(825): App\Controllers\Barang->index()
#7 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(325): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Barang))
#8 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(235): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#9 G:\xampp\htdocs\project\ci4-tracking\public\index.php(45): CodeIgniter\CodeIgniter->run()
#10 {main}
CRITICAL - 2019-05-02 17:56:37 --> Uncaught ErrorException: include(G:\xampp\htdocs\project\ci4-tracking\app\Views/errors/html/error_exception.php): failed to open stream: No such file or directory in G:\xampp\htdocs\project\ci4-tracking\system\Debug\Exceptions.php:285
Stack trace:
#0 G:\xampp\htdocs\project\ci4-tracking\system\Debug\Exceptions.php(285): CodeIgniter\Debug\Exceptions->errorHandler(2, 'include(G:\\xamp...', 'G:\\xampp\\htdocs...', 285, Array)
#1 G:\xampp\htdocs\project\ci4-tracking\system\Debug\Exceptions.php(285): include()
#2 G:\xampp\htdocs\project\ci4-tracking\system\Debug\Exceptions.php(156): CodeIgniter\Debug\Exceptions->render(Object(mysqli_sql_exception), 500)
#3 [internal function]: CodeIgniter\Debug\Exceptions->exceptionHandler(Object(mysqli_sql_exception))
#4 {main}
  thrown
#0 [internal function]: CodeIgniter\Debug\Exceptions->shutdownHandler()
#1 {main}
CRITICAL - 2019-05-02 17:58:33 --> No database selected
#0 G:\xampp\htdocs\project\ci4-tracking\system\Database\MySQLi\Connection.php(325): mysqli->query('SELECT *\nFROM `...')
#1 G:\xampp\htdocs\project\ci4-tracking\system\Database\BaseConnection.php(705): CodeIgniter\Database\MySQLi\Connection->execute('SELECT *\nFROM `...')
#2 G:\xampp\htdocs\project\ci4-tracking\system\Database\BaseConnection.php(633): CodeIgniter\Database\BaseConnection->simpleQuery('SELECT *\nFROM `...')
#3 G:\xampp\htdocs\project\ci4-tracking\system\Database\BaseBuilder.php(1450): CodeIgniter\Database\BaseConnection->query('SELECT *\nFROM `...', Array, false)
#4 G:\xampp\htdocs\project\ci4-tracking\system\Model.php(372): CodeIgniter\Database\BaseBuilder->get()
#5 G:\xampp\htdocs\project\ci4-tracking\app\Controllers\Barang.php(10): CodeIgniter\Model->findAll()
#6 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(825): App\Controllers\Barang->index()
#7 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(325): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Barang))
#8 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(235): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#9 G:\xampp\htdocs\project\ci4-tracking\public\index.php(45): CodeIgniter\CodeIgniter->run()
#10 {main}
CRITICAL - 2019-05-02 17:58:33 --> Uncaught ErrorException: include(G:\xampp\htdocs\project\ci4-tracking\app\Views/errors/html/error_exception.php): failed to open stream: No such file or directory in G:\xampp\htdocs\project\ci4-tracking\system\Debug\Exceptions.php:285
Stack trace:
#0 G:\xampp\htdocs\project\ci4-tracking\system\Debug\Exceptions.php(285): CodeIgniter\Debug\Exceptions->errorHandler(2, 'include(G:\\xamp...', 'G:\\xampp\\htdocs...', 285, Array)
#1 G:\xampp\htdocs\project\ci4-tracking\system\Debug\Exceptions.php(285): include()
#2 G:\xampp\htdocs\project\ci4-tracking\system\Debug\Exceptions.php(156): CodeIgniter\Debug\Exceptions->render(Object(mysqli_sql_exception), 500)
#3 [internal function]: CodeIgniter\Debug\Exceptions->exceptionHandler(Object(mysqli_sql_exception))
#4 {main}
  thrown
#0 [internal function]: CodeIgniter\Debug\Exceptions->shutdownHandler()
#1 {main}
CRITICAL - 2019-05-02 18:00:44 --> No database selected
#0 G:\xampp\htdocs\project\ci4-tracking\system\Database\MySQLi\Connection.php(325): mysqli->query('SELECT *\nFROM `...')
#1 G:\xampp\htdocs\project\ci4-tracking\system\Database\BaseConnection.php(705): CodeIgniter\Database\MySQLi\Connection->execute('SELECT *\nFROM `...')
#2 G:\xampp\htdocs\project\ci4-tracking\system\Database\BaseConnection.php(633): CodeIgniter\Database\BaseConnection->simpleQuery('SELECT *\nFROM `...')
#3 G:\xampp\htdocs\project\ci4-tracking\system\Database\BaseBuilder.php(1450): CodeIgniter\Database\BaseConnection->query('SELECT *\nFROM `...', Array, false)
#4 G:\xampp\htdocs\project\ci4-tracking\system\Model.php(372): CodeIgniter\Database\BaseBuilder->get()
#5 G:\xampp\htdocs\project\ci4-tracking\app\Controllers\Barang.php(10): CodeIgniter\Model->findAll()
#6 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(825): App\Controllers\Barang->index()
#7 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(325): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Barang))
#8 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(235): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#9 G:\xampp\htdocs\project\ci4-tracking\public\index.php(45): CodeIgniter\CodeIgniter->run()
#10 {main}
CRITICAL - 2019-05-02 18:00:44 --> Uncaught ErrorException: include(G:\xampp\htdocs\project\ci4-tracking\app\Views/errors/html/error_exception.php): failed to open stream: No such file or directory in G:\xampp\htdocs\project\ci4-tracking\system\Debug\Exceptions.php:285
Stack trace:
#0 G:\xampp\htdocs\project\ci4-tracking\system\Debug\Exceptions.php(285): CodeIgniter\Debug\Exceptions->errorHandler(2, 'include(G:\\xamp...', 'G:\\xampp\\htdocs...', 285, Array)
#1 G:\xampp\htdocs\project\ci4-tracking\system\Debug\Exceptions.php(285): include()
#2 G:\xampp\htdocs\project\ci4-tracking\system\Debug\Exceptions.php(156): CodeIgniter\Debug\Exceptions->render(Object(mysqli_sql_exception), 500)
#3 [internal function]: CodeIgniter\Debug\Exceptions->exceptionHandler(Object(mysqli_sql_exception))
#4 {main}
  thrown
#0 [internal function]: CodeIgniter\Debug\Exceptions->shutdownHandler()
#1 {main}
CRITICAL - 2019-05-02 18:00:48 --> No database selected
#0 G:\xampp\htdocs\project\ci4-tracking\system\Database\MySQLi\Connection.php(325): mysqli->query('SELECT *\nFROM `...')
#1 G:\xampp\htdocs\project\ci4-tracking\system\Database\BaseConnection.php(705): CodeIgniter\Database\MySQLi\Connection->execute('SELECT *\nFROM `...')
#2 G:\xampp\htdocs\project\ci4-tracking\system\Database\BaseConnection.php(633): CodeIgniter\Database\BaseConnection->simpleQuery('SELECT *\nFROM `...')
#3 G:\xampp\htdocs\project\ci4-tracking\system\Database\BaseBuilder.php(1450): CodeIgniter\Database\BaseConnection->query('SELECT *\nFROM `...', Array, false)
#4 G:\xampp\htdocs\project\ci4-tracking\system\Model.php(372): CodeIgniter\Database\BaseBuilder->get()
#5 G:\xampp\htdocs\project\ci4-tracking\app\Controllers\Barang.php(10): CodeIgniter\Model->findAll()
#6 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(825): App\Controllers\Barang->index()
#7 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(325): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Barang))
#8 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(235): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#9 G:\xampp\htdocs\project\ci4-tracking\public\index.php(45): CodeIgniter\CodeIgniter->run()
#10 {main}
CRITICAL - 2019-05-02 18:00:48 --> Uncaught ErrorException: include(G:\xampp\htdocs\project\ci4-tracking\app\Views/errors/html/error_exception.php): failed to open stream: No such file or directory in G:\xampp\htdocs\project\ci4-tracking\system\Debug\Exceptions.php:285
Stack trace:
#0 G:\xampp\htdocs\project\ci4-tracking\system\Debug\Exceptions.php(285): CodeIgniter\Debug\Exceptions->errorHandler(2, 'include(G:\\xamp...', 'G:\\xampp\\htdocs...', 285, Array)
#1 G:\xampp\htdocs\project\ci4-tracking\system\Debug\Exceptions.php(285): include()
#2 G:\xampp\htdocs\project\ci4-tracking\system\Debug\Exceptions.php(156): CodeIgniter\Debug\Exceptions->render(Object(mysqli_sql_exception), 500)
#3 [internal function]: CodeIgniter\Debug\Exceptions->exceptionHandler(Object(mysqli_sql_exception))
#4 {main}
  thrown
#0 [internal function]: CodeIgniter\Debug\Exceptions->shutdownHandler()
#1 {main}
CRITICAL - 2019-05-02 18:00:54 --> No database selected
#0 G:\xampp\htdocs\project\ci4-tracking\system\Database\MySQLi\Connection.php(325): mysqli->query('SELECT *\nFROM `...')
#1 G:\xampp\htdocs\project\ci4-tracking\system\Database\BaseConnection.php(705): CodeIgniter\Database\MySQLi\Connection->execute('SELECT *\nFROM `...')
#2 G:\xampp\htdocs\project\ci4-tracking\system\Database\BaseConnection.php(633): CodeIgniter\Database\BaseConnection->simpleQuery('SELECT *\nFROM `...')
#3 G:\xampp\htdocs\project\ci4-tracking\system\Database\BaseBuilder.php(1450): CodeIgniter\Database\BaseConnection->query('SELECT *\nFROM `...', Array, false)
#4 G:\xampp\htdocs\project\ci4-tracking\system\Model.php(372): CodeIgniter\Database\BaseBuilder->get()
#5 G:\xampp\htdocs\project\ci4-tracking\app\Controllers\Barang.php(10): CodeIgniter\Model->findAll()
#6 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(825): App\Controllers\Barang->index()
#7 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(325): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Barang))
#8 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(235): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#9 G:\xampp\htdocs\project\ci4-tracking\public\index.php(45): CodeIgniter\CodeIgniter->run()
#10 {main}
CRITICAL - 2019-05-02 18:00:54 --> Uncaught ErrorException: include(G:\xampp\htdocs\project\ci4-tracking\app\Views/errors/html/error_exception.php): failed to open stream: No such file or directory in G:\xampp\htdocs\project\ci4-tracking\system\Debug\Exceptions.php:285
Stack trace:
#0 G:\xampp\htdocs\project\ci4-tracking\system\Debug\Exceptions.php(285): CodeIgniter\Debug\Exceptions->errorHandler(2, 'include(G:\\xamp...', 'G:\\xampp\\htdocs...', 285, Array)
#1 G:\xampp\htdocs\project\ci4-tracking\system\Debug\Exceptions.php(285): include()
#2 G:\xampp\htdocs\project\ci4-tracking\system\Debug\Exceptions.php(156): CodeIgniter\Debug\Exceptions->render(Object(mysqli_sql_exception), 500)
#3 [internal function]: CodeIgniter\Debug\Exceptions->exceptionHandler(Object(mysqli_sql_exception))
#4 {main}
  thrown
#0 [internal function]: CodeIgniter\Debug\Exceptions->shutdownHandler()
#1 {main}
CRITICAL - 2019-05-02 18:01:17 --> No database selected
#0 G:\xampp\htdocs\project\ci4-tracking\system\Database\MySQLi\Connection.php(325): mysqli->query('SELECT *\nFROM `...')
#1 G:\xampp\htdocs\project\ci4-tracking\system\Database\BaseConnection.php(705): CodeIgniter\Database\MySQLi\Connection->execute('SELECT *\nFROM `...')
#2 G:\xampp\htdocs\project\ci4-tracking\system\Database\BaseConnection.php(633): CodeIgniter\Database\BaseConnection->simpleQuery('SELECT *\nFROM `...')
#3 G:\xampp\htdocs\project\ci4-tracking\system\Database\BaseBuilder.php(1450): CodeIgniter\Database\BaseConnection->query('SELECT *\nFROM `...', Array, false)
#4 G:\xampp\htdocs\project\ci4-tracking\system\Model.php(372): CodeIgniter\Database\BaseBuilder->get()
#5 G:\xampp\htdocs\project\ci4-tracking\app\Controllers\Barang.php(10): CodeIgniter\Model->findAll()
#6 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(825): App\Controllers\Barang->index()
#7 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(325): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Barang))
#8 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(235): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#9 G:\xampp\htdocs\project\ci4-tracking\public\index.php(45): CodeIgniter\CodeIgniter->run()
#10 {main}
CRITICAL - 2019-05-02 18:01:38 --> No database selected
#0 G:\xampp\htdocs\project\ci4-tracking\system\Database\MySQLi\Connection.php(325): mysqli->query('SELECT *\nFROM `...')
#1 G:\xampp\htdocs\project\ci4-tracking\system\Database\BaseConnection.php(705): CodeIgniter\Database\MySQLi\Connection->execute('SELECT *\nFROM `...')
#2 G:\xampp\htdocs\project\ci4-tracking\system\Database\BaseConnection.php(633): CodeIgniter\Database\BaseConnection->simpleQuery('SELECT *\nFROM `...')
#3 G:\xampp\htdocs\project\ci4-tracking\system\Database\BaseBuilder.php(1450): CodeIgniter\Database\BaseConnection->query('SELECT *\nFROM `...', Array, false)
#4 G:\xampp\htdocs\project\ci4-tracking\system\Model.php(372): CodeIgniter\Database\BaseBuilder->get()
#5 G:\xampp\htdocs\project\ci4-tracking\app\Controllers\Barang.php(10): CodeIgniter\Model->findAll()
#6 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(825): App\Controllers\Barang->index()
#7 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(325): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Barang))
#8 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(235): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#9 G:\xampp\htdocs\project\ci4-tracking\public\index.php(45): CodeIgniter\CodeIgniter->run()
#10 {main}
CRITICAL - 2019-05-02 18:01:50 --> No database selected
#0 G:\xampp\htdocs\project\ci4-tracking\system\Database\MySQLi\Connection.php(325): mysqli->query('SELECT *\nFROM `...')
#1 G:\xampp\htdocs\project\ci4-tracking\system\Database\BaseConnection.php(705): CodeIgniter\Database\MySQLi\Connection->execute('SELECT *\nFROM `...')
#2 G:\xampp\htdocs\project\ci4-tracking\system\Database\BaseConnection.php(633): CodeIgniter\Database\BaseConnection->simpleQuery('SELECT *\nFROM `...')
#3 G:\xampp\htdocs\project\ci4-tracking\system\Database\BaseBuilder.php(1450): CodeIgniter\Database\BaseConnection->query('SELECT *\nFROM `...', Array, false)
#4 G:\xampp\htdocs\project\ci4-tracking\system\Model.php(372): CodeIgniter\Database\BaseBuilder->get()
#5 G:\xampp\htdocs\project\ci4-tracking\app\Controllers\Barang.php(10): CodeIgniter\Model->findAll()
#6 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(825): App\Controllers\Barang->index()
#7 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(325): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Barang))
#8 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(235): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#9 G:\xampp\htdocs\project\ci4-tracking\public\index.php(45): CodeIgniter\CodeIgniter->run()
#10 {main}
CRITICAL - 2019-05-02 18:02:07 --> No database selected
#0 G:\xampp\htdocs\project\ci4-tracking\system\Database\MySQLi\Connection.php(325): mysqli->query('SELECT *\nFROM `...')
#1 G:\xampp\htdocs\project\ci4-tracking\system\Database\BaseConnection.php(705): CodeIgniter\Database\MySQLi\Connection->execute('SELECT *\nFROM `...')
#2 G:\xampp\htdocs\project\ci4-tracking\system\Database\BaseConnection.php(633): CodeIgniter\Database\BaseConnection->simpleQuery('SELECT *\nFROM `...')
#3 G:\xampp\htdocs\project\ci4-tracking\system\Database\BaseBuilder.php(1450): CodeIgniter\Database\BaseConnection->query('SELECT *\nFROM `...', Array, false)
#4 G:\xampp\htdocs\project\ci4-tracking\system\Model.php(372): CodeIgniter\Database\BaseBuilder->get()
#5 G:\xampp\htdocs\project\ci4-tracking\app\Controllers\Barang.php(10): CodeIgniter\Model->findAll()
#6 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(825): App\Controllers\Barang->index()
#7 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(325): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Barang))
#8 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(235): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#9 G:\xampp\htdocs\project\ci4-tracking\public\index.php(45): CodeIgniter\CodeIgniter->run()
#10 {main}
CRITICAL - 2019-05-02 18:09:19 --> No database selected
#0 G:\xampp\htdocs\project\ci4-tracking\system\Database\MySQLi\Connection.php(325): mysqli->query('SELECT *\nFROM `...')
#1 G:\xampp\htdocs\project\ci4-tracking\system\Database\BaseConnection.php(705): CodeIgniter\Database\MySQLi\Connection->execute('SELECT *\nFROM `...')
#2 G:\xampp\htdocs\project\ci4-tracking\system\Database\BaseConnection.php(633): CodeIgniter\Database\BaseConnection->simpleQuery('SELECT *\nFROM `...')
#3 G:\xampp\htdocs\project\ci4-tracking\system\Database\BaseBuilder.php(1450): CodeIgniter\Database\BaseConnection->query('SELECT *\nFROM `...', Array, false)
#4 G:\xampp\htdocs\project\ci4-tracking\system\Model.php(372): CodeIgniter\Database\BaseBuilder->get()
#5 G:\xampp\htdocs\project\ci4-tracking\app\Controllers\Barang.php(10): CodeIgniter\Model->findAll()
#6 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(825): App\Controllers\Barang->index()
#7 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(325): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Barang))
#8 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(235): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#9 G:\xampp\htdocs\project\ci4-tracking\public\index.php(45): CodeIgniter\CodeIgniter->run()
#10 {main}
CRITICAL - 2019-05-02 18:10:12 --> Invalid argument supplied for foreach()
#0 G:\xampp\htdocs\project\ci4-tracking\app\Views\content\barang\index.php(50): CodeIgniter\Debug\Exceptions->errorHandler(2, 'Invalid argumen...', 'G:\\xampp\\htdocs...', 50, Array)
#1 G:\xampp\htdocs\project\ci4-tracking\system\View\View.php(233): include('G:\\xampp\\htdocs...')
#2 G:\xampp\htdocs\project\ci4-tracking\system\Common.php(166): CodeIgniter\View\View->render('content/barang/...', Array, NULL)
#3 G:\xampp\htdocs\project\ci4-tracking\app\Controllers\Barang.php(14): view('content/barang/...', Array)
#4 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(825): App\Controllers\Barang->index()
#5 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(325): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Barang))
#6 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(235): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 G:\xampp\htdocs\project\ci4-tracking\public\index.php(45): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2019-05-02 18:12:20 --> Invalid argument supplied for foreach()
#0 G:\xampp\htdocs\project\ci4-tracking\app\Views\content\barang\index.php(50): CodeIgniter\Debug\Exceptions->errorHandler(2, 'Invalid argumen...', 'G:\\xampp\\htdocs...', 50, Array)
#1 G:\xampp\htdocs\project\ci4-tracking\system\View\View.php(233): include('G:\\xampp\\htdocs...')
#2 G:\xampp\htdocs\project\ci4-tracking\system\Common.php(166): CodeIgniter\View\View->render('content/barang/...', Array, NULL)
#3 G:\xampp\htdocs\project\ci4-tracking\app\Controllers\Barang.php(14): view('content/barang/...', Array)
#4 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(825): App\Controllers\Barang->index()
#5 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(325): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Barang))
#6 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(235): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 G:\xampp\htdocs\project\ci4-tracking\public\index.php(45): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2019-05-02 18:13:08 --> Invalid argument supplied for foreach()
#0 G:\xampp\htdocs\project\ci4-tracking\app\Views\content\barang\index.php(50): CodeIgniter\Debug\Exceptions->errorHandler(2, 'Invalid argumen...', 'G:\\xampp\\htdocs...', 50, Array)
#1 G:\xampp\htdocs\project\ci4-tracking\system\View\View.php(233): include('G:\\xampp\\htdocs...')
#2 G:\xampp\htdocs\project\ci4-tracking\system\Common.php(166): CodeIgniter\View\View->render('content/barang/...', Array, NULL)
#3 G:\xampp\htdocs\project\ci4-tracking\app\Controllers\Barang.php(14): view('content/barang/...', Array)
#4 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(825): App\Controllers\Barang->index()
#5 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(325): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Barang))
#6 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(235): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 G:\xampp\htdocs\project\ci4-tracking\public\index.php(45): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2019-05-02 18:13:10 --> Invalid argument supplied for foreach()
#0 G:\xampp\htdocs\project\ci4-tracking\app\Views\content\barang\index.php(50): CodeIgniter\Debug\Exceptions->errorHandler(2, 'Invalid argumen...', 'G:\\xampp\\htdocs...', 50, Array)
#1 G:\xampp\htdocs\project\ci4-tracking\system\View\View.php(233): include('G:\\xampp\\htdocs...')
#2 G:\xampp\htdocs\project\ci4-tracking\system\Common.php(166): CodeIgniter\View\View->render('content/barang/...', Array, NULL)
#3 G:\xampp\htdocs\project\ci4-tracking\app\Controllers\Barang.php(14): view('content/barang/...', Array)
#4 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(825): App\Controllers\Barang->index()
#5 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(325): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Barang))
#6 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(235): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 G:\xampp\htdocs\project\ci4-tracking\public\index.php(45): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2019-05-02 18:14:24 --> Invalid argument supplied for foreach()
#0 G:\xampp\htdocs\project\ci4-tracking\app\Views\content\barang\index.php(50): CodeIgniter\Debug\Exceptions->errorHandler(2, 'Invalid argumen...', 'G:\\xampp\\htdocs...', 50, Array)
#1 G:\xampp\htdocs\project\ci4-tracking\system\View\View.php(233): include('G:\\xampp\\htdocs...')
#2 G:\xampp\htdocs\project\ci4-tracking\system\Common.php(166): CodeIgniter\View\View->render('content/barang/...', Array, NULL)
#3 G:\xampp\htdocs\project\ci4-tracking\app\Controllers\Barang.php(14): view('content/barang/...', Array)
#4 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(825): App\Controllers\Barang->index()
#5 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(325): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Barang))
#6 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(235): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 G:\xampp\htdocs\project\ci4-tracking\public\index.php(45): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2019-05-02 18:15:03 --> Invalid argument supplied for foreach()
#0 G:\xampp\htdocs\project\ci4-tracking\app\Views\content\barang\index.php(50): CodeIgniter\Debug\Exceptions->errorHandler(2, 'Invalid argumen...', 'G:\\xampp\\htdocs...', 50, Array)
#1 G:\xampp\htdocs\project\ci4-tracking\system\View\View.php(233): include('G:\\xampp\\htdocs...')
#2 G:\xampp\htdocs\project\ci4-tracking\system\Common.php(166): CodeIgniter\View\View->render('content/barang/...', Array, NULL)
#3 G:\xampp\htdocs\project\ci4-tracking\app\Controllers\Barang.php(14): view('content/barang/...', Array)
#4 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(825): App\Controllers\Barang->index()
#5 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(325): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Barang))
#6 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(235): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 G:\xampp\htdocs\project\ci4-tracking\public\index.php(45): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2019-05-02 18:15:33 --> Invalid argument supplied for foreach()
#0 G:\xampp\htdocs\project\ci4-tracking\app\Views\content\barang\index.php(50): CodeIgniter\Debug\Exceptions->errorHandler(2, 'Invalid argumen...', 'G:\\xampp\\htdocs...', 50, Array)
#1 G:\xampp\htdocs\project\ci4-tracking\system\View\View.php(233): include('G:\\xampp\\htdocs...')
#2 G:\xampp\htdocs\project\ci4-tracking\system\Common.php(166): CodeIgniter\View\View->render('content/barang/...', Array, NULL)
#3 G:\xampp\htdocs\project\ci4-tracking\app\Controllers\Barang.php(14): view('content/barang/...', Array)
#4 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(825): App\Controllers\Barang->index()
#5 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(325): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Barang))
#6 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(235): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 G:\xampp\htdocs\project\ci4-tracking\public\index.php(45): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2019-05-02 18:15:40 --> Call to a member function userdata() on null
#0 G:\xampp\htdocs\project\ci4-tracking\system\View\View.php(233): include()
#1 G:\xampp\htdocs\project\ci4-tracking\system\Common.php(166): CodeIgniter\View\View->render('template/conten...', Array, NULL)
#2 G:\xampp\htdocs\project\ci4-tracking\app\Controllers\Barang.php(15): view('template/conten...')
#3 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(825): App\Controllers\Barang->index()
#4 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(325): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Barang))
#5 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(235): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 G:\xampp\htdocs\project\ci4-tracking\public\index.php(45): CodeIgniter\CodeIgniter->run()
#7 {main}
CRITICAL - 2019-05-02 18:16:08 --> Call to a member function userdata() on null
#0 G:\xampp\htdocs\project\ci4-tracking\system\View\View.php(233): include()
#1 G:\xampp\htdocs\project\ci4-tracking\system\Common.php(166): CodeIgniter\View\View->render('template/conten...', Array, NULL)
#2 G:\xampp\htdocs\project\ci4-tracking\app\Controllers\Barang.php(15): view('template/conten...')
#3 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(825): App\Controllers\Barang->index()
#4 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(325): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Barang))
#5 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(235): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 G:\xampp\htdocs\project\ci4-tracking\public\index.php(45): CodeIgniter\CodeIgniter->run()
#7 {main}
CRITICAL - 2019-05-02 18:28:29 --> Call to a member function userdata() on null
#0 G:\xampp\htdocs\project\ci4-tracking\system\View\View.php(233): include()
#1 G:\xampp\htdocs\project\ci4-tracking\system\Common.php(166): CodeIgniter\View\View->render('templates/foote...', Array, NULL)
#2 G:\xampp\htdocs\project\ci4-tracking\app\Controllers\Barang.php(17): view('templates/foote...')
#3 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(825): App\Controllers\Barang->index()
#4 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(325): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Barang))
#5 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(235): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 G:\xampp\htdocs\project\ci4-tracking\public\index.php(45): CodeIgniter\CodeIgniter->run()
#7 {main}
CRITICAL - 2019-05-02 18:36:11 --> Invalid argument supplied for foreach()
#0 G:\xampp\htdocs\project\ci4-tracking\app\Views\content\barang\index.php(50): CodeIgniter\Debug\Exceptions->errorHandler(2, 'Invalid argumen...', 'G:\\xampp\\htdocs...', 50, Array)
#1 G:\xampp\htdocs\project\ci4-tracking\system\View\View.php(233): include('G:\\xampp\\htdocs...')
#2 G:\xampp\htdocs\project\ci4-tracking\system\Common.php(166): CodeIgniter\View\View->render('content/barang/...', Array, NULL)
#3 G:\xampp\htdocs\project\ci4-tracking\app\Controllers\Barang.php(14): view('content/barang/...', Array)
#4 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(825): App\Controllers\Barang->index()
#5 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(325): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Barang))
#6 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(235): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 G:\xampp\htdocs\project\ci4-tracking\public\index.php(45): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2019-05-02 18:36:16 --> Invalid argument supplied for foreach()
#0 G:\xampp\htdocs\project\ci4-tracking\app\Views\content\barang\index.php(50): CodeIgniter\Debug\Exceptions->errorHandler(2, 'Invalid argumen...', 'G:\\xampp\\htdocs...', 50, Array)
#1 G:\xampp\htdocs\project\ci4-tracking\system\View\View.php(233): include('G:\\xampp\\htdocs...')
#2 G:\xampp\htdocs\project\ci4-tracking\system\Common.php(166): CodeIgniter\View\View->render('content/barang/...', Array, NULL)
#3 G:\xampp\htdocs\project\ci4-tracking\app\Controllers\Barang.php(14): view('content/barang/...', Array)
#4 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(825): App\Controllers\Barang->index()
#5 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(325): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Barang))
#6 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(235): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 G:\xampp\htdocs\project\ci4-tracking\public\index.php(45): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2019-05-02 18:43:30 --> Invalid argument supplied for foreach()
#0 G:\xampp\htdocs\project\ci4-tracking\app\Views\content\barang\index.php(50): CodeIgniter\Debug\Exceptions->errorHandler(2, 'Invalid argumen...', 'G:\\xampp\\htdocs...', 50, Array)
#1 G:\xampp\htdocs\project\ci4-tracking\system\View\View.php(233): include('G:\\xampp\\htdocs...')
#2 G:\xampp\htdocs\project\ci4-tracking\system\Common.php(166): CodeIgniter\View\View->render('content/barang/...', Array, NULL)
#3 G:\xampp\htdocs\project\ci4-tracking\app\Controllers\Barang.php(14): view('content/barang/...', Array)
#4 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(825): App\Controllers\Barang->index()
#5 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(325): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Barang))
#6 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(235): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 G:\xampp\htdocs\project\ci4-tracking\public\index.php(45): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2019-05-02 18:45:07 --> Invalid argument supplied for foreach()
#0 G:\xampp\htdocs\project\ci4-tracking\app\Views\content\barang\index.php(50): CodeIgniter\Debug\Exceptions->errorHandler(2, 'Invalid argumen...', 'G:\\xampp\\htdocs...', 50, Array)
#1 G:\xampp\htdocs\project\ci4-tracking\system\View\View.php(233): include('G:\\xampp\\htdocs...')
#2 G:\xampp\htdocs\project\ci4-tracking\system\Common.php(166): CodeIgniter\View\View->render('content/barang/...', Array, NULL)
#3 G:\xampp\htdocs\project\ci4-tracking\app\Controllers\Barang.php(14): view('content/barang/...', Array)
#4 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(825): App\Controllers\Barang->index()
#5 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(325): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Barang))
#6 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(235): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 G:\xampp\htdocs\project\ci4-tracking\public\index.php(45): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2019-05-02 18:46:19 --> Invalid argument supplied for foreach()
#0 G:\xampp\htdocs\project\ci4-tracking\app\Views\content\barang\index.php(50): CodeIgniter\Debug\Exceptions->errorHandler(2, 'Invalid argumen...', 'G:\\xampp\\htdocs...', 50, Array)
#1 G:\xampp\htdocs\project\ci4-tracking\system\View\View.php(233): include('G:\\xampp\\htdocs...')
#2 G:\xampp\htdocs\project\ci4-tracking\system\Common.php(166): CodeIgniter\View\View->render('content/barang/...', Array, NULL)
#3 G:\xampp\htdocs\project\ci4-tracking\app\Controllers\Barang.php(14): view('content/barang/...', Array)
#4 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(825): App\Controllers\Barang->index()
#5 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(325): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Barang))
#6 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(235): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 G:\xampp\htdocs\project\ci4-tracking\public\index.php(45): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2019-05-02 18:48:43 --> syntax error, unexpected end of file, expecting elseif (T_ELSEIF) or else (T_ELSE) or endif (T_ENDIF)
#0 G:\xampp\htdocs\project\ci4-tracking\system\Common.php(166): CodeIgniter\View\View->render('content/barang/...', Array, NULL)
#1 G:\xampp\htdocs\project\ci4-tracking\app\Controllers\Barang.php(14): view('content/barang/...', Array)
#2 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(825): App\Controllers\Barang->index()
#3 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(325): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Barang))
#4 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(235): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#5 G:\xampp\htdocs\project\ci4-tracking\public\index.php(45): CodeIgniter\CodeIgniter->run()
#6 {main}
CRITICAL - 2019-05-02 18:49:10 --> syntax error, unexpected end of file, expecting elseif (T_ELSEIF) or else (T_ELSE) or endif (T_ENDIF)
#0 G:\xampp\htdocs\project\ci4-tracking\system\Common.php(166): CodeIgniter\View\View->render('content/barang/...', Array, NULL)
#1 G:\xampp\htdocs\project\ci4-tracking\app\Controllers\Barang.php(14): view('content/barang/...', Array)
#2 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(825): App\Controllers\Barang->index()
#3 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(325): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Barang))
#4 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(235): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#5 G:\xampp\htdocs\project\ci4-tracking\public\index.php(45): CodeIgniter\CodeIgniter->run()
#6 {main}
CRITICAL - 2019-05-02 18:57:23 --> Table 'trackingapps.barang' doesn't exist
#0 G:\xampp\htdocs\project\ci4-tracking\system\Database\MySQLi\Connection.php(325): mysqli->query('SELECT *\nFROM `...')
#1 G:\xampp\htdocs\project\ci4-tracking\system\Database\BaseConnection.php(705): CodeIgniter\Database\MySQLi\Connection->execute('SELECT *\nFROM `...')
#2 G:\xampp\htdocs\project\ci4-tracking\system\Database\BaseConnection.php(633): CodeIgniter\Database\BaseConnection->simpleQuery('SELECT *\nFROM `...')
#3 G:\xampp\htdocs\project\ci4-tracking\system\Database\BaseBuilder.php(1450): CodeIgniter\Database\BaseConnection->query('SELECT *\nFROM `...', Array, false)
#4 G:\xampp\htdocs\project\ci4-tracking\system\Model.php(372): CodeIgniter\Database\BaseBuilder->get()
#5 G:\xampp\htdocs\project\ci4-tracking\app\Controllers\Barang.php(10): CodeIgniter\Model->findAll()
#6 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(825): App\Controllers\Barang->index()
#7 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(325): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Barang))
#8 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(235): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#9 G:\xampp\htdocs\project\ci4-tracking\public\index.php(45): CodeIgniter\CodeIgniter->run()
#10 {main}
CRITICAL - 2019-05-02 18:57:58 --> Invalid argument supplied for foreach()
#0 G:\xampp\htdocs\project\ci4-tracking\app\Views\content\barang\index.php(50): CodeIgniter\Debug\Exceptions->errorHandler(2, 'Invalid argumen...', 'G:\\xampp\\htdocs...', 50, Array)
#1 G:\xampp\htdocs\project\ci4-tracking\system\View\View.php(233): include('G:\\xampp\\htdocs...')
#2 G:\xampp\htdocs\project\ci4-tracking\system\Common.php(166): CodeIgniter\View\View->render('content/barang/...', Array, NULL)
#3 G:\xampp\htdocs\project\ci4-tracking\app\Controllers\Barang.php(14): view('content/barang/...', Array)
#4 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(825): App\Controllers\Barang->index()
#5 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(325): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Barang))
#6 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(235): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 G:\xampp\htdocs\project\ci4-tracking\public\index.php(45): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2019-05-02 19:20:31 --> Argument 2 passed to view() must be of the type array, null given, called in G:\xampp\htdocs\project\ci4-tracking\app\Controllers\Barang.php on line 20
#0 G:\xampp\htdocs\project\ci4-tracking\app\Controllers\Barang.php(20): view('content/barang/...', NULL)
#1 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(825): App\Controllers\Barang->add()
#2 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(325): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Barang))
#3 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(235): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 G:\xampp\htdocs\project\ci4-tracking\public\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2019-05-02 19:20:57 --> Argument 2 passed to view() must be of the type array, null given, called in G:\xampp\htdocs\project\ci4-tracking\app\Controllers\Barang.php on line 20
#0 G:\xampp\htdocs\project\ci4-tracking\app\Controllers\Barang.php(20): view('content/barang/...', NULL)
#1 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(825): App\Controllers\Barang->add()
#2 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(325): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Barang))
#3 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(235): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 G:\xampp\htdocs\project\ci4-tracking\public\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2019-05-02 19:21:56 --> Argument 2 passed to view() must be of the type array, null given, called in G:\xampp\htdocs\project\ci4-tracking\app\Controllers\Barang.php on line 20
#0 G:\xampp\htdocs\project\ci4-tracking\app\Controllers\Barang.php(20): view('content/barang/...', NULL)
#1 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(825): App\Controllers\Barang->add()
#2 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(325): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Barang))
#3 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(235): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 G:\xampp\htdocs\project\ci4-tracking\public\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2019-05-02 19:31:02 --> Uncaught ErrorException: include(G:\xampp\htdocs\project\ci4-tracking\app\Views/errors/html/error_404.php): failed to open stream: No such file or directory in G:\xampp\htdocs\project\ci4-tracking\system\Debug\Exceptions.php:285
Stack trace:
#0 G:\xampp\htdocs\project\ci4-tracking\system\Debug\Exceptions.php(285): CodeIgniter\Debug\Exceptions->errorHandler(2, 'include(G:\\xamp...', 'G:\\xampp\\htdocs...', 285, Array)
#1 G:\xampp\htdocs\project\ci4-tracking\system\Debug\Exceptions.php(285): include()
#2 G:\xampp\htdocs\project\ci4-tracking\system\Debug\Exceptions.php(156): CodeIgniter\Debug\Exceptions->render(Object(CodeIgniter\Exceptions\PageNotFoundException), 404)
#3 [internal function]: CodeIgniter\Debug\Exceptions->exceptionHandler(Object(CodeIgniter\Exceptions\PageNotFoundException))
#4 {main}
  thrown
#0 [internal function]: CodeIgniter\Debug\Exceptions->shutdownHandler()
#1 {main}
CRITICAL - 2019-05-02 19:37:38 --> Call to a member function save() on null
#0 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(825): App\Controllers\Barang->post()
#1 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(325): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Barang))
#2 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(235): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 G:\xampp\htdocs\project\ci4-tracking\public\index.php(45): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2019-05-02 19:38:37 --> Call to a member function save() on null
#0 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(825): App\Controllers\Barang->post()
#1 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(325): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Barang))
#2 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(235): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 G:\xampp\htdocs\project\ci4-tracking\public\index.php(45): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2019-05-02 19:39:16 --> Call to a member function save() on null
#0 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(825): App\Controllers\Barang->post()
#1 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(325): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Barang))
#2 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(235): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 G:\xampp\htdocs\project\ci4-tracking\public\index.php(45): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2019-05-02 19:39:41 --> Call to a member function save() on null
#0 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(825): App\Controllers\Barang->post()
#1 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(325): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Barang))
#2 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(235): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 G:\xampp\htdocs\project\ci4-tracking\public\index.php(45): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2019-05-02 19:41:19 --> Call to a member function save() on null
#0 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(825): App\Controllers\Barang->post()
#1 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(325): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Barang))
#2 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(235): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 G:\xampp\htdocs\project\ci4-tracking\public\index.php(45): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2019-05-02 19:42:43 --> Call to a member function insert() on null
#0 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(825): App\Controllers\Barang->post()
#1 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(325): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Barang))
#2 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(235): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 G:\xampp\htdocs\project\ci4-tracking\public\index.php(45): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2019-05-02 19:43:53 --> Call to a member function insert() on null
#0 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(825): App\Controllers\Barang->post()
#1 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(325): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Barang))
#2 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(235): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 G:\xampp\htdocs\project\ci4-tracking\public\index.php(45): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2019-05-02 19:44:11 --> Call to a member function insert() on null
#0 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(825): App\Controllers\Barang->post()
#1 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(325): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Barang))
#2 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(235): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 G:\xampp\htdocs\project\ci4-tracking\public\index.php(45): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2019-05-02 19:44:51 --> Call to a member function insert() on null
#0 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(825): App\Controllers\Barang->post()
#1 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(325): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Barang))
#2 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(235): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 G:\xampp\htdocs\project\ci4-tracking\public\index.php(45): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2019-05-02 19:49:57 --> Unknown column 'email_pengirim' in 'field list'
#0 G:\xampp\htdocs\project\ci4-tracking\system\Database\MySQLi\Connection.php(325): mysqli->query('INSERT INTO `ba...')
#1 G:\xampp\htdocs\project\ci4-tracking\system\Database\BaseConnection.php(705): CodeIgniter\Database\MySQLi\Connection->execute('INSERT INTO `ba...')
#2 G:\xampp\htdocs\project\ci4-tracking\system\Database\BaseConnection.php(633): CodeIgniter\Database\BaseConnection->simpleQuery('INSERT INTO `ba...')
#3 G:\xampp\htdocs\project\ci4-tracking\system\Database\BaseBuilder.php(1806): CodeIgniter\Database\BaseConnection->query('INSERT INTO `ba...', Array, false)
#4 G:\xampp\htdocs\project\ci4-tracking\system\Model.php(649): CodeIgniter\Database\BaseBuilder->insert()
#5 G:\xampp\htdocs\project\ci4-tracking\app\Controllers\Barang.php(35): CodeIgniter\Model->insert(Array)
#6 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(825): App\Controllers\Barang->post()
#7 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(325): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Barang))
#8 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(235): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#9 G:\xampp\htdocs\project\ci4-tracking\public\index.php(45): CodeIgniter\CodeIgniter->run()
#10 {main}
CRITICAL - 2019-05-02 19:53:42 --> Unknown column 'email_pengirim' in 'field list'
#0 G:\xampp\htdocs\project\ci4-tracking\system\Database\MySQLi\Connection.php(325): mysqli->query('INSERT INTO `ba...')
#1 G:\xampp\htdocs\project\ci4-tracking\system\Database\BaseConnection.php(705): CodeIgniter\Database\MySQLi\Connection->execute('INSERT INTO `ba...')
#2 G:\xampp\htdocs\project\ci4-tracking\system\Database\BaseConnection.php(633): CodeIgniter\Database\BaseConnection->simpleQuery('INSERT INTO `ba...')
#3 G:\xampp\htdocs\project\ci4-tracking\system\Database\BaseBuilder.php(1806): CodeIgniter\Database\BaseConnection->query('INSERT INTO `ba...', Array, false)
#4 G:\xampp\htdocs\project\ci4-tracking\system\Model.php(649): CodeIgniter\Database\BaseBuilder->insert()
#5 G:\xampp\htdocs\project\ci4-tracking\app\Controllers\Barang.php(35): CodeIgniter\Model->insert(Array)
#6 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(825): App\Controllers\Barang->post()
#7 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(325): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Barang))
#8 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(235): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#9 G:\xampp\htdocs\project\ci4-tracking\public\index.php(45): CodeIgniter\CodeIgniter->run()
#10 {main}
CRITICAL - 2019-05-02 19:59:55 --> Call to a member function post() on null
#0 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(825): App\Controllers\Barang->post()
#1 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(325): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Barang))
#2 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(235): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 G:\xampp\htdocs\project\ci4-tracking\public\index.php(45): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2019-05-02 20:01:19 --> Maximum execution time of 30 seconds exceeded
#0 [internal function]: CodeIgniter\Debug\Exceptions->shutdownHandler()
#1 {main}
CRITICAL - 2019-05-02 20:03:24 --> Maximum execution time of 30 seconds exceeded
#0 [internal function]: CodeIgniter\Debug\Exceptions->shutdownHandler()
#1 {main}
CRITICAL - 2019-05-02 20:04:37 --> Maximum execution time of 30 seconds exceeded
#0 [internal function]: CodeIgniter\Debug\Exceptions->shutdownHandler()
#1 {main}
CRITICAL - 2019-05-02 20:13:00 --> Call to undefined method CodeIgniter\HTTP\IncomingRequest::post()
#0 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(825): App\Controllers\Barang->post()
#1 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(325): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Barang))
#2 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(235): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 G:\xampp\htdocs\project\ci4-tracking\public\index.php(45): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2019-05-02 20:13:05 --> Call to undefined method CodeIgniter\HTTP\IncomingRequest::post()
#0 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(825): App\Controllers\Barang->post()
#1 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(325): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Barang))
#2 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(235): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 G:\xampp\htdocs\project\ci4-tracking\public\index.php(45): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2019-05-02 20:13:29 --> Call to undefined method CodeIgniter\HTTP\IncomingRequest::get()
#0 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(825): App\Controllers\Barang->post()
#1 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(325): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Barang))
#2 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(235): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 G:\xampp\htdocs\project\ci4-tracking\public\index.php(45): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2019-05-02 20:13:58 --> Call to undefined method CodeIgniter\HTTP\IncomingRequest::get()
#0 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(825): App\Controllers\Barang->post()
#1 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(325): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Barang))
#2 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(235): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 G:\xampp\htdocs\project\ci4-tracking\public\index.php(45): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2019-05-02 20:15:04 --> Call to undefined method CodeIgniter\HTTP\IncomingRequest::get()
#0 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(825): App\Controllers\Barang->post()
#1 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(325): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Barang))
#2 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(235): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 G:\xampp\htdocs\project\ci4-tracking\public\index.php(45): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2019-05-02 20:16:37 --> Unknown column 'email_pengirim' in 'field list'
#0 G:\xampp\htdocs\project\ci4-tracking\system\Database\MySQLi\Connection.php(325): mysqli->query('INSERT INTO `ba...')
#1 G:\xampp\htdocs\project\ci4-tracking\system\Database\BaseConnection.php(705): CodeIgniter\Database\MySQLi\Connection->execute('INSERT INTO `ba...')
#2 G:\xampp\htdocs\project\ci4-tracking\system\Database\BaseConnection.php(633): CodeIgniter\Database\BaseConnection->simpleQuery('INSERT INTO `ba...')
#3 G:\xampp\htdocs\project\ci4-tracking\system\Database\BaseBuilder.php(1806): CodeIgniter\Database\BaseConnection->query('INSERT INTO `ba...', Array, false)
#4 G:\xampp\htdocs\project\ci4-tracking\system\Model.php(649): CodeIgniter\Database\BaseBuilder->insert()
#5 G:\xampp\htdocs\project\ci4-tracking\app\Controllers\Barang.php(37): CodeIgniter\Model->insert(Array)
#6 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(825): App\Controllers\Barang->post()
#7 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(325): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Barang))
#8 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(235): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#9 G:\xampp\htdocs\project\ci4-tracking\public\index.php(45): CodeIgniter\CodeIgniter->run()
#10 {main}
CRITICAL - 2019-05-02 20:17:06 --> Unknown column 'email_pengirim' in 'field list'
#0 G:\xampp\htdocs\project\ci4-tracking\system\Database\MySQLi\Connection.php(325): mysqli->query('INSERT INTO `ba...')
#1 G:\xampp\htdocs\project\ci4-tracking\system\Database\BaseConnection.php(705): CodeIgniter\Database\MySQLi\Connection->execute('INSERT INTO `ba...')
#2 G:\xampp\htdocs\project\ci4-tracking\system\Database\BaseConnection.php(633): CodeIgniter\Database\BaseConnection->simpleQuery('INSERT INTO `ba...')
#3 G:\xampp\htdocs\project\ci4-tracking\system\Database\BaseBuilder.php(1806): CodeIgniter\Database\BaseConnection->query('INSERT INTO `ba...', Array, false)
#4 G:\xampp\htdocs\project\ci4-tracking\system\Model.php(649): CodeIgniter\Database\BaseBuilder->insert()
#5 G:\xampp\htdocs\project\ci4-tracking\app\Controllers\Barang.php(38): CodeIgniter\Model->insert(Array)
#6 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(825): App\Controllers\Barang->post()
#7 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(325): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Barang))
#8 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(235): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#9 G:\xampp\htdocs\project\ci4-tracking\public\index.php(45): CodeIgniter\CodeIgniter->run()
#10 {main}
CRITICAL - 2019-05-02 20:23:24 --> Call to a member function getPost() on null
#0 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(825): App\Controllers\Barang->post()
#1 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(325): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Barang))
#2 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(235): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 G:\xampp\htdocs\project\ci4-tracking\public\index.php(45): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2019-05-02 20:24:49 --> Call to a member function getVar() on null
#0 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(825): App\Controllers\Barang->post()
#1 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(325): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Barang))
#2 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(235): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 G:\xampp\htdocs\project\ci4-tracking\public\index.php(45): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2019-05-02 20:27:16 --> Call to a member function getVar() on null
#0 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(825): App\Controllers\Barang->post()
#1 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(325): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Barang))
#2 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(235): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 G:\xampp\htdocs\project\ci4-tracking\public\index.php(45): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2019-05-02 20:34:47 --> Unknown column 'email_pengirim' in 'field list'
#0 G:\xampp\htdocs\project\ci4-tracking\system\Database\MySQLi\Connection.php(325): mysqli->query('INSERT INTO `ba...')
#1 G:\xampp\htdocs\project\ci4-tracking\system\Database\BaseConnection.php(705): CodeIgniter\Database\MySQLi\Connection->execute('INSERT INTO `ba...')
#2 G:\xampp\htdocs\project\ci4-tracking\system\Database\BaseConnection.php(633): CodeIgniter\Database\BaseConnection->simpleQuery('INSERT INTO `ba...')
#3 G:\xampp\htdocs\project\ci4-tracking\system\Database\BaseBuilder.php(1806): CodeIgniter\Database\BaseConnection->query('INSERT INTO `ba...', Array, false)
#4 G:\xampp\htdocs\project\ci4-tracking\system\Model.php(649): CodeIgniter\Database\BaseBuilder->insert()
#5 G:\xampp\htdocs\project\ci4-tracking\app\Controllers\Barang.php(38): CodeIgniter\Model->insert(Array)
#6 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(825): App\Controllers\Barang->post()
#7 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(325): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Barang))
#8 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(235): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#9 G:\xampp\htdocs\project\ci4-tracking\public\index.php(45): CodeIgniter\CodeIgniter->run()
#10 {main}
CRITICAL - 2019-05-02 20:36:28 --> Uncaught ErrorException: include(G:\xampp\htdocs\project\ci4-tracking\app\Views/errors/html/error_404.php): failed to open stream: No such file or directory in G:\xampp\htdocs\project\ci4-tracking\system\Debug\Exceptions.php:285
Stack trace:
#0 G:\xampp\htdocs\project\ci4-tracking\system\Debug\Exceptions.php(285): CodeIgniter\Debug\Exceptions->errorHandler(2, 'include(G:\\xamp...', 'G:\\xampp\\htdocs...', 285, Array)
#1 G:\xampp\htdocs\project\ci4-tracking\system\Debug\Exceptions.php(285): include()
#2 G:\xampp\htdocs\project\ci4-tracking\system\Debug\Exceptions.php(156): CodeIgniter\Debug\Exceptions->render(Object(CodeIgniter\Exceptions\PageNotFoundException), 404)
#3 [internal function]: CodeIgniter\Debug\Exceptions->exceptionHandler(Object(CodeIgniter\Exceptions\PageNotFoundException))
#4 {main}
  thrown
#0 [internal function]: CodeIgniter\Debug\Exceptions->shutdownHandler()
#1 {main}
CRITICAL - 2019-05-02 20:40:00 --> Unknown column 'email_pengirim' in 'field list'
#0 G:\xampp\htdocs\project\ci4-tracking\system\Database\MySQLi\Connection.php(325): mysqli->query('INSERT INTO `ba...')
#1 G:\xampp\htdocs\project\ci4-tracking\system\Database\BaseConnection.php(705): CodeIgniter\Database\MySQLi\Connection->execute('INSERT INTO `ba...')
#2 G:\xampp\htdocs\project\ci4-tracking\system\Database\BaseConnection.php(633): CodeIgniter\Database\BaseConnection->simpleQuery('INSERT INTO `ba...')
#3 G:\xampp\htdocs\project\ci4-tracking\system\Database\BaseBuilder.php(1806): CodeIgniter\Database\BaseConnection->query('INSERT INTO `ba...', Array, false)
#4 G:\xampp\htdocs\project\ci4-tracking\system\Model.php(649): CodeIgniter\Database\BaseBuilder->insert()
#5 G:\xampp\htdocs\project\ci4-tracking\app\Controllers\Barang.php(38): CodeIgniter\Model->insert(Array)
#6 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(825): App\Controllers\Barang->post()
#7 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(325): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Barang))
#8 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(235): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#9 G:\xampp\htdocs\project\ci4-tracking\public\index.php(45): CodeIgniter\CodeIgniter->run()
#10 {main}
CRITICAL - 2019-05-02 20:40:03 --> Unknown column 'email_pengirim' in 'field list'
#0 G:\xampp\htdocs\project\ci4-tracking\system\Database\MySQLi\Connection.php(325): mysqli->query('INSERT INTO `ba...')
#1 G:\xampp\htdocs\project\ci4-tracking\system\Database\BaseConnection.php(705): CodeIgniter\Database\MySQLi\Connection->execute('INSERT INTO `ba...')
#2 G:\xampp\htdocs\project\ci4-tracking\system\Database\BaseConnection.php(633): CodeIgniter\Database\BaseConnection->simpleQuery('INSERT INTO `ba...')
#3 G:\xampp\htdocs\project\ci4-tracking\system\Database\BaseBuilder.php(1806): CodeIgniter\Database\BaseConnection->query('INSERT INTO `ba...', Array, false)
#4 G:\xampp\htdocs\project\ci4-tracking\system\Model.php(649): CodeIgniter\Database\BaseBuilder->insert()
#5 G:\xampp\htdocs\project\ci4-tracking\app\Controllers\Barang.php(38): CodeIgniter\Model->insert(Array)
#6 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(825): App\Controllers\Barang->post()
#7 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(325): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Barang))
#8 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(235): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#9 G:\xampp\htdocs\project\ci4-tracking\public\index.php(45): CodeIgniter\CodeIgniter->run()
#10 {main}
CRITICAL - 2019-05-02 20:40:05 --> Unknown column 'email_pengirim' in 'field list'
#0 G:\xampp\htdocs\project\ci4-tracking\system\Database\MySQLi\Connection.php(325): mysqli->query('INSERT INTO `ba...')
#1 G:\xampp\htdocs\project\ci4-tracking\system\Database\BaseConnection.php(705): CodeIgniter\Database\MySQLi\Connection->execute('INSERT INTO `ba...')
#2 G:\xampp\htdocs\project\ci4-tracking\system\Database\BaseConnection.php(633): CodeIgniter\Database\BaseConnection->simpleQuery('INSERT INTO `ba...')
#3 G:\xampp\htdocs\project\ci4-tracking\system\Database\BaseBuilder.php(1806): CodeIgniter\Database\BaseConnection->query('INSERT INTO `ba...', Array, false)
#4 G:\xampp\htdocs\project\ci4-tracking\system\Model.php(649): CodeIgniter\Database\BaseBuilder->insert()
#5 G:\xampp\htdocs\project\ci4-tracking\app\Controllers\Barang.php(38): CodeIgniter\Model->insert(Array)
#6 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(825): App\Controllers\Barang->post()
#7 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(325): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Barang))
#8 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(235): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#9 G:\xampp\htdocs\project\ci4-tracking\public\index.php(45): CodeIgniter\CodeIgniter->run()
#10 {main}
CRITICAL - 2019-05-02 20:40:56 --> Unknown column 'email_pengirim' in 'field list'
#0 G:\xampp\htdocs\project\ci4-tracking\system\Database\MySQLi\Connection.php(325): mysqli->query('INSERT INTO `ba...')
#1 G:\xampp\htdocs\project\ci4-tracking\system\Database\BaseConnection.php(705): CodeIgniter\Database\MySQLi\Connection->execute('INSERT INTO `ba...')
#2 G:\xampp\htdocs\project\ci4-tracking\system\Database\BaseConnection.php(633): CodeIgniter\Database\BaseConnection->simpleQuery('INSERT INTO `ba...')
#3 G:\xampp\htdocs\project\ci4-tracking\system\Database\BaseBuilder.php(1806): CodeIgniter\Database\BaseConnection->query('INSERT INTO `ba...', Array, false)
#4 G:\xampp\htdocs\project\ci4-tracking\system\Model.php(649): CodeIgniter\Database\BaseBuilder->insert()
#5 G:\xampp\htdocs\project\ci4-tracking\system\Model.php(484): CodeIgniter\Model->insert(Array)
#6 G:\xampp\htdocs\project\ci4-tracking\app\Controllers\Barang.php(38): CodeIgniter\Model->save(Array)
#7 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(825): App\Controllers\Barang->post()
#8 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(325): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Barang))
#9 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(235): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#10 G:\xampp\htdocs\project\ci4-tracking\public\index.php(45): CodeIgniter\CodeIgniter->run()
#11 {main}
CRITICAL - 2019-05-02 20:43:51 --> 
#0 G:\xampp\htdocs\project\ci4-tracking\system\HTTP\RedirectResponse.php(86): CodeIgniter\HTTP\Exceptions\HTTPException::forInvalidRedirectRoute('')
#1 G:\xampp\htdocs\project\ci4-tracking\system\Common.php(870): CodeIgniter\HTTP\RedirectResponse->route(false)
#2 G:\xampp\htdocs\project\ci4-tracking\app\Controllers\Barang.php(43): redirect('/barang')
#3 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(825): App\Controllers\Barang->post()
#4 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(325): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Barang))
#5 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(235): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 G:\xampp\htdocs\project\ci4-tracking\public\index.php(45): CodeIgniter\CodeIgniter->run()
#7 {main}
CRITICAL - 2019-05-02 20:44:30 --> 
#0 G:\xampp\htdocs\project\ci4-tracking\system\HTTP\RedirectResponse.php(86): CodeIgniter\HTTP\Exceptions\HTTPException::forInvalidRedirectRoute('')
#1 G:\xampp\htdocs\project\ci4-tracking\system\Common.php(870): CodeIgniter\HTTP\RedirectResponse->route(false)
#2 G:\xampp\htdocs\project\ci4-tracking\app\Controllers\Barang.php(43): redirect('/barang')
#3 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(825): App\Controllers\Barang->post()
#4 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(325): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Barang))
#5 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(235): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 G:\xampp\htdocs\project\ci4-tracking\public\index.php(45): CodeIgniter\CodeIgniter->run()
#7 {main}
CRITICAL - 2019-05-02 20:45:01 --> 
#0 G:\xampp\htdocs\project\ci4-tracking\system\HTTP\RedirectResponse.php(86): CodeIgniter\HTTP\Exceptions\HTTPException::forInvalidRedirectRoute('')
#1 G:\xampp\htdocs\project\ci4-tracking\app\Controllers\Barang.php(43): CodeIgniter\HTTP\RedirectResponse->route(false)
#2 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(825): App\Controllers\Barang->post()
#3 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(325): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Barang))
#4 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(235): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#5 G:\xampp\htdocs\project\ci4-tracking\public\index.php(45): CodeIgniter\CodeIgniter->run()
#6 {main}
