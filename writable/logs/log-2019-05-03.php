<?php defined('SYSTEMPATH') || exit('No direct script access allowed'); ?>

CRITICAL - 2019-05-03 01:01:38 --> Invalid file: content/home/index.php
#0 G:\xampp\htdocs\project\ci4-tracking\system\View\View.php(221): CodeIgniter\Exceptions\FrameworkException::forInvalidFile('content/home/in...')
#1 G:\xampp\htdocs\project\ci4-tracking\system\Common.php(166): CodeIgniter\View\View->render('content/home/in...', Array, NULL)
#2 G:\xampp\htdocs\project\ci4-tracking\app\Controllers\Home.php(10): view('content/home/in...')
#3 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(825): App\Controllers\Home->index()
#4 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(325): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#5 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(235): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 G:\xampp\htdocs\project\ci4-tracking\public\index.php(45): CodeIgniter\CodeIgniter->run()
#7 {main}
CRITICAL - 2019-05-03 01:14:37 --> Unknown column 'barangs.id' in 'order clause'
#0 G:\xampp\htdocs\project\ci4-tracking\system\Database\MySQLi\Connection.php(325): mysqli->query('SELECT *\nFROM `...')
#1 G:\xampp\htdocs\project\ci4-tracking\system\Database\BaseConnection.php(705): CodeIgniter\Database\MySQLi\Connection->execute('SELECT *\nFROM `...')
#2 G:\xampp\htdocs\project\ci4-tracking\system\Database\BaseConnection.php(633): CodeIgniter\Database\BaseConnection->simpleQuery('SELECT *\nFROM `...')
#3 G:\xampp\htdocs\project\ci4-tracking\system\Database\BaseBuilder.php(1450): CodeIgniter\Database\BaseConnection->query('SELECT *\nFROM `...', Array, false)
#4 G:\xampp\htdocs\project\ci4-tracking\system\Model.php(409): CodeIgniter\Database\BaseBuilder->get()
#5 G:\xampp\htdocs\project\ci4-tracking\app\Controllers\Barang.php(27): CodeIgniter\Model->first()
#6 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(825): App\Controllers\Barang->edit('1')
#7 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(325): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Barang))
#8 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(235): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#9 G:\xampp\htdocs\project\ci4-tracking\public\index.php(45): CodeIgniter\CodeIgniter->run()
#10 {main}
CRITICAL - 2019-05-03 01:17:27 --> Unknown column 'barangs.id' in 'order clause'
#0 G:\xampp\htdocs\project\ci4-tracking\system\Database\MySQLi\Connection.php(325): mysqli->query('SELECT *\nFROM `...')
#1 G:\xampp\htdocs\project\ci4-tracking\system\Database\BaseConnection.php(705): CodeIgniter\Database\MySQLi\Connection->execute('SELECT *\nFROM `...')
#2 G:\xampp\htdocs\project\ci4-tracking\system\Database\BaseConnection.php(633): CodeIgniter\Database\BaseConnection->simpleQuery('SELECT *\nFROM `...')
#3 G:\xampp\htdocs\project\ci4-tracking\system\Database\BaseBuilder.php(1450): CodeIgniter\Database\BaseConnection->query('SELECT *\nFROM `...', Array, false)
#4 G:\xampp\htdocs\project\ci4-tracking\system\Model.php(409): CodeIgniter\Database\BaseBuilder->get()
#5 G:\xampp\htdocs\project\ci4-tracking\app\Controllers\Barang.php(27): CodeIgniter\Model->first()
#6 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(825): App\Controllers\Barang->edit('1')
#7 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(325): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Barang))
#8 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(235): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#9 G:\xampp\htdocs\project\ci4-tracking\public\index.php(45): CodeIgniter\CodeIgniter->run()
#10 {main}
CRITICAL - 2019-05-03 01:17:59 --> Unknown column 'barangs.id' in 'order clause'
#0 G:\xampp\htdocs\project\ci4-tracking\system\Database\MySQLi\Connection.php(325): mysqli->query('SELECT *\nFROM `...')
#1 G:\xampp\htdocs\project\ci4-tracking\system\Database\BaseConnection.php(705): CodeIgniter\Database\MySQLi\Connection->execute('SELECT *\nFROM `...')
#2 G:\xampp\htdocs\project\ci4-tracking\system\Database\BaseConnection.php(633): CodeIgniter\Database\BaseConnection->simpleQuery('SELECT *\nFROM `...')
#3 G:\xampp\htdocs\project\ci4-tracking\system\Database\BaseBuilder.php(1450): CodeIgniter\Database\BaseConnection->query('SELECT *\nFROM `...', Array, false)
#4 G:\xampp\htdocs\project\ci4-tracking\system\Model.php(409): CodeIgniter\Database\BaseBuilder->get()
#5 G:\xampp\htdocs\project\ci4-tracking\app\Controllers\Barang.php(27): CodeIgniter\Model->first()
#6 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(825): App\Controllers\Barang->edit('1')
#7 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(325): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Barang))
#8 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(235): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#9 G:\xampp\htdocs\project\ci4-tracking\public\index.php(45): CodeIgniter\CodeIgniter->run()
#10 {main}
CRITICAL - 2019-05-03 01:18:13 --> Unknown column 'barangs.id' in 'order clause'
#0 G:\xampp\htdocs\project\ci4-tracking\system\Database\MySQLi\Connection.php(325): mysqli->query('SELECT *\nFROM `...')
#1 G:\xampp\htdocs\project\ci4-tracking\system\Database\BaseConnection.php(705): CodeIgniter\Database\MySQLi\Connection->execute('SELECT *\nFROM `...')
#2 G:\xampp\htdocs\project\ci4-tracking\system\Database\BaseConnection.php(633): CodeIgniter\Database\BaseConnection->simpleQuery('SELECT *\nFROM `...')
#3 G:\xampp\htdocs\project\ci4-tracking\system\Database\BaseBuilder.php(1450): CodeIgniter\Database\BaseConnection->query('SELECT *\nFROM `...', Array, false)
#4 G:\xampp\htdocs\project\ci4-tracking\system\Model.php(409): CodeIgniter\Database\BaseBuilder->get()
#5 G:\xampp\htdocs\project\ci4-tracking\app\Controllers\Barang.php(27): CodeIgniter\Model->first()
#6 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(825): App\Controllers\Barang->edit('1')
#7 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(325): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Barang))
#8 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(235): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#9 G:\xampp\htdocs\project\ci4-tracking\public\index.php(45): CodeIgniter\CodeIgniter->run()
#10 {main}
CRITICAL - 2019-05-03 01:18:31 --> Unknown column 'barangs.id' in 'order clause'
#0 G:\xampp\htdocs\project\ci4-tracking\system\Database\MySQLi\Connection.php(325): mysqli->query('SELECT *\nFROM `...')
#1 G:\xampp\htdocs\project\ci4-tracking\system\Database\BaseConnection.php(705): CodeIgniter\Database\MySQLi\Connection->execute('SELECT *\nFROM `...')
#2 G:\xampp\htdocs\project\ci4-tracking\system\Database\BaseConnection.php(633): CodeIgniter\Database\BaseConnection->simpleQuery('SELECT *\nFROM `...')
#3 G:\xampp\htdocs\project\ci4-tracking\system\Database\BaseBuilder.php(1450): CodeIgniter\Database\BaseConnection->query('SELECT *\nFROM `...', Array, false)
#4 G:\xampp\htdocs\project\ci4-tracking\system\Model.php(409): CodeIgniter\Database\BaseBuilder->get()
#5 G:\xampp\htdocs\project\ci4-tracking\app\Controllers\Barang.php(27): CodeIgniter\Model->first()
#6 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(825): App\Controllers\Barang->edit('1')
#7 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(325): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Barang))
#8 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(235): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#9 G:\xampp\htdocs\project\ci4-tracking\public\index.php(45): CodeIgniter\CodeIgniter->run()
#10 {main}
CRITICAL - 2019-05-03 01:19:36 --> Unknown column 'barangs.id' in 'order clause'
#0 G:\xampp\htdocs\project\ci4-tracking\system\Database\MySQLi\Connection.php(325): mysqli->query('SELECT *\nFROM `...')
#1 G:\xampp\htdocs\project\ci4-tracking\system\Database\BaseConnection.php(705): CodeIgniter\Database\MySQLi\Connection->execute('SELECT *\nFROM `...')
#2 G:\xampp\htdocs\project\ci4-tracking\system\Database\BaseConnection.php(633): CodeIgniter\Database\BaseConnection->simpleQuery('SELECT *\nFROM `...')
#3 G:\xampp\htdocs\project\ci4-tracking\system\Database\BaseBuilder.php(1450): CodeIgniter\Database\BaseConnection->query('SELECT *\nFROM `...', Array, false)
#4 G:\xampp\htdocs\project\ci4-tracking\system\Model.php(409): CodeIgniter\Database\BaseBuilder->get()
#5 G:\xampp\htdocs\project\ci4-tracking\app\Controllers\Barang.php(27): CodeIgniter\Model->first()
#6 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(825): App\Controllers\Barang->edit('1')
#7 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(325): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Barang))
#8 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(235): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#9 G:\xampp\htdocs\project\ci4-tracking\public\index.php(45): CodeIgniter\CodeIgniter->run()
#10 {main}
CRITICAL - 2019-05-03 01:21:07 --> Unknown column 'barangs.id' in 'order clause'
#0 G:\xampp\htdocs\project\ci4-tracking\system\Database\MySQLi\Connection.php(325): mysqli->query('SELECT *\nFROM `...')
#1 G:\xampp\htdocs\project\ci4-tracking\system\Database\BaseConnection.php(705): CodeIgniter\Database\MySQLi\Connection->execute('SELECT *\nFROM `...')
#2 G:\xampp\htdocs\project\ci4-tracking\system\Database\BaseConnection.php(633): CodeIgniter\Database\BaseConnection->simpleQuery('SELECT *\nFROM `...')
#3 G:\xampp\htdocs\project\ci4-tracking\system\Database\BaseBuilder.php(1450): CodeIgniter\Database\BaseConnection->query('SELECT *\nFROM `...', Array, false)
#4 G:\xampp\htdocs\project\ci4-tracking\system\Model.php(409): CodeIgniter\Database\BaseBuilder->get()
#5 G:\xampp\htdocs\project\ci4-tracking\app\Controllers\Barang.php(27): CodeIgniter\Model->first()
#6 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(825): App\Controllers\Barang->edit('1')
#7 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(325): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Barang))
#8 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(235): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#9 G:\xampp\htdocs\project\ci4-tracking\public\index.php(45): CodeIgniter\CodeIgniter->run()
#10 {main}
CRITICAL - 2019-05-03 01:21:46 --> Unknown column 'barangs.id' in 'order clause'
#0 G:\xampp\htdocs\project\ci4-tracking\system\Database\MySQLi\Connection.php(325): mysqli->query('SELECT *\nFROM `...')
#1 G:\xampp\htdocs\project\ci4-tracking\system\Database\BaseConnection.php(705): CodeIgniter\Database\MySQLi\Connection->execute('SELECT *\nFROM `...')
#2 G:\xampp\htdocs\project\ci4-tracking\system\Database\BaseConnection.php(633): CodeIgniter\Database\BaseConnection->simpleQuery('SELECT *\nFROM `...')
#3 G:\xampp\htdocs\project\ci4-tracking\system\Database\BaseBuilder.php(1450): CodeIgniter\Database\BaseConnection->query('SELECT *\nFROM `...', Array, false)
#4 G:\xampp\htdocs\project\ci4-tracking\system\Model.php(409): CodeIgniter\Database\BaseBuilder->get()
#5 G:\xampp\htdocs\project\ci4-tracking\app\Controllers\Barang.php(27): CodeIgniter\Model->first()
#6 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(825): App\Controllers\Barang->edit('1')
#7 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(325): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Barang))
#8 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(235): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#9 G:\xampp\htdocs\project\ci4-tracking\public\index.php(45): CodeIgniter\CodeIgniter->run()
#10 {main}
CRITICAL - 2019-05-03 01:21:49 --> Unknown column 'barangs.id' in 'order clause'
#0 G:\xampp\htdocs\project\ci4-tracking\system\Database\MySQLi\Connection.php(325): mysqli->query('SELECT *\nFROM `...')
#1 G:\xampp\htdocs\project\ci4-tracking\system\Database\BaseConnection.php(705): CodeIgniter\Database\MySQLi\Connection->execute('SELECT *\nFROM `...')
#2 G:\xampp\htdocs\project\ci4-tracking\system\Database\BaseConnection.php(633): CodeIgniter\Database\BaseConnection->simpleQuery('SELECT *\nFROM `...')
#3 G:\xampp\htdocs\project\ci4-tracking\system\Database\BaseBuilder.php(1450): CodeIgniter\Database\BaseConnection->query('SELECT *\nFROM `...', Array, false)
#4 G:\xampp\htdocs\project\ci4-tracking\system\Model.php(409): CodeIgniter\Database\BaseBuilder->get()
#5 G:\xampp\htdocs\project\ci4-tracking\app\Controllers\Barang.php(27): CodeIgniter\Model->first()
#6 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(825): App\Controllers\Barang->edit('1')
#7 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(325): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Barang))
#8 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(235): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#9 G:\xampp\htdocs\project\ci4-tracking\public\index.php(45): CodeIgniter\CodeIgniter->run()
#10 {main}
CRITICAL - 2019-05-03 01:22:44 --> Unknown column 'barangs.id' in 'order clause'
#0 G:\xampp\htdocs\project\ci4-tracking\system\Database\MySQLi\Connection.php(325): mysqli->query('SELECT *\nFROM `...')
#1 G:\xampp\htdocs\project\ci4-tracking\system\Database\BaseConnection.php(705): CodeIgniter\Database\MySQLi\Connection->execute('SELECT *\nFROM `...')
#2 G:\xampp\htdocs\project\ci4-tracking\system\Database\BaseConnection.php(633): CodeIgniter\Database\BaseConnection->simpleQuery('SELECT *\nFROM `...')
#3 G:\xampp\htdocs\project\ci4-tracking\system\Database\BaseBuilder.php(1450): CodeIgniter\Database\BaseConnection->query('SELECT *\nFROM `...', Array, false)
#4 G:\xampp\htdocs\project\ci4-tracking\system\Model.php(409): CodeIgniter\Database\BaseBuilder->get()
#5 G:\xampp\htdocs\project\ci4-tracking\app\Controllers\Barang.php(27): CodeIgniter\Model->first()
#6 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(825): App\Controllers\Barang->edit('1')
#7 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(325): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Barang))
#8 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(235): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#9 G:\xampp\htdocs\project\ci4-tracking\public\index.php(45): CodeIgniter\CodeIgniter->run()
#10 {main}
CRITICAL - 2019-05-03 01:23:37 --> Unknown column 'barangs.id' in 'order clause'
#0 G:\xampp\htdocs\project\ci4-tracking\system\Database\MySQLi\Connection.php(325): mysqli->query('SELECT *\nFROM `...')
#1 G:\xampp\htdocs\project\ci4-tracking\system\Database\BaseConnection.php(705): CodeIgniter\Database\MySQLi\Connection->execute('SELECT *\nFROM `...')
#2 G:\xampp\htdocs\project\ci4-tracking\system\Database\BaseConnection.php(633): CodeIgniter\Database\BaseConnection->simpleQuery('SELECT *\nFROM `...')
#3 G:\xampp\htdocs\project\ci4-tracking\system\Database\BaseBuilder.php(1450): CodeIgniter\Database\BaseConnection->query('SELECT *\nFROM `...', Array, false)
#4 G:\xampp\htdocs\project\ci4-tracking\system\Model.php(409): CodeIgniter\Database\BaseBuilder->get()
#5 G:\xampp\htdocs\project\ci4-tracking\app\Controllers\Barang.php(28): CodeIgniter\Model->first()
#6 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(825): App\Controllers\Barang->edit('1')
#7 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(325): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Barang))
#8 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(235): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#9 G:\xampp\htdocs\project\ci4-tracking\public\index.php(45): CodeIgniter\CodeIgniter->run()
#10 {main}
CRITICAL - 2019-05-03 01:24:20 --> You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ')barang = '1'
ORDER BY `barangs`.`id` ASC
 LIMIT 1' at line 3
#0 G:\xampp\htdocs\project\ci4-tracking\system\Database\MySQLi\Connection.php(325): mysqli->query('SELECT *\nFROM `...')
#1 G:\xampp\htdocs\project\ci4-tracking\system\Database\BaseConnection.php(705): CodeIgniter\Database\MySQLi\Connection->execute('SELECT *\nFROM `...')
#2 G:\xampp\htdocs\project\ci4-tracking\system\Database\BaseConnection.php(633): CodeIgniter\Database\BaseConnection->simpleQuery('SELECT *\nFROM `...')
#3 G:\xampp\htdocs\project\ci4-tracking\system\Database\BaseBuilder.php(1450): CodeIgniter\Database\BaseConnection->query('SELECT *\nFROM `...', Array, false)
#4 G:\xampp\htdocs\project\ci4-tracking\system\Model.php(409): CodeIgniter\Database\BaseBuilder->get()
#5 G:\xampp\htdocs\project\ci4-tracking\app\Controllers\Barang.php(28): CodeIgniter\Model->first()
#6 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(825): App\Controllers\Barang->edit('1')
#7 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(325): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Barang))
#8 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(235): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#9 G:\xampp\htdocs\project\ci4-tracking\public\index.php(45): CodeIgniter\CodeIgniter->run()
#10 {main}
CRITICAL - 2019-05-03 01:24:20 --> You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ')barang = '1'
ORDER BY `barangs`.`id` ASC
 LIMIT 1' at line 3
#0 G:\xampp\htdocs\project\ci4-tracking\system\Database\MySQLi\Connection.php(325): mysqli->query('SELECT *\nFROM `...')
#1 G:\xampp\htdocs\project\ci4-tracking\system\Database\BaseConnection.php(705): CodeIgniter\Database\MySQLi\Connection->execute('SELECT *\nFROM `...')
#2 G:\xampp\htdocs\project\ci4-tracking\system\Database\BaseConnection.php(633): CodeIgniter\Database\BaseConnection->simpleQuery('SELECT *\nFROM `...')
#3 G:\xampp\htdocs\project\ci4-tracking\system\Database\BaseBuilder.php(1450): CodeIgniter\Database\BaseConnection->query('SELECT *\nFROM `...', Array, false)
#4 G:\xampp\htdocs\project\ci4-tracking\system\Model.php(409): CodeIgniter\Database\BaseBuilder->get()
#5 G:\xampp\htdocs\project\ci4-tracking\app\Controllers\Barang.php(28): CodeIgniter\Model->first()
#6 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(825): App\Controllers\Barang->edit('1')
#7 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(325): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Barang))
#8 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(235): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#9 G:\xampp\htdocs\project\ci4-tracking\public\index.php(45): CodeIgniter\CodeIgniter->run()
#10 {main}
CRITICAL - 2019-05-03 01:24:21 --> You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ')barang = '1'
ORDER BY `barangs`.`id` ASC
 LIMIT 1' at line 3
#0 G:\xampp\htdocs\project\ci4-tracking\system\Database\MySQLi\Connection.php(325): mysqli->query('SELECT *\nFROM `...')
#1 G:\xampp\htdocs\project\ci4-tracking\system\Database\BaseConnection.php(705): CodeIgniter\Database\MySQLi\Connection->execute('SELECT *\nFROM `...')
#2 G:\xampp\htdocs\project\ci4-tracking\system\Database\BaseConnection.php(633): CodeIgniter\Database\BaseConnection->simpleQuery('SELECT *\nFROM `...')
#3 G:\xampp\htdocs\project\ci4-tracking\system\Database\BaseBuilder.php(1450): CodeIgniter\Database\BaseConnection->query('SELECT *\nFROM `...', Array, false)
#4 G:\xampp\htdocs\project\ci4-tracking\system\Model.php(409): CodeIgniter\Database\BaseBuilder->get()
#5 G:\xampp\htdocs\project\ci4-tracking\app\Controllers\Barang.php(28): CodeIgniter\Model->first()
#6 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(825): App\Controllers\Barang->edit('1')
#7 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(325): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Barang))
#8 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(235): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#9 G:\xampp\htdocs\project\ci4-tracking\public\index.php(45): CodeIgniter\CodeIgniter->run()
#10 {main}
CRITICAL - 2019-05-03 01:24:21 --> You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ')barang = '1'
ORDER BY `barangs`.`id` ASC
 LIMIT 1' at line 3
#0 G:\xampp\htdocs\project\ci4-tracking\system\Database\MySQLi\Connection.php(325): mysqli->query('SELECT *\nFROM `...')
#1 G:\xampp\htdocs\project\ci4-tracking\system\Database\BaseConnection.php(705): CodeIgniter\Database\MySQLi\Connection->execute('SELECT *\nFROM `...')
#2 G:\xampp\htdocs\project\ci4-tracking\system\Database\BaseConnection.php(633): CodeIgniter\Database\BaseConnection->simpleQuery('SELECT *\nFROM `...')
#3 G:\xampp\htdocs\project\ci4-tracking\system\Database\BaseBuilder.php(1450): CodeIgniter\Database\BaseConnection->query('SELECT *\nFROM `...', Array, false)
#4 G:\xampp\htdocs\project\ci4-tracking\system\Model.php(409): CodeIgniter\Database\BaseBuilder->get()
#5 G:\xampp\htdocs\project\ci4-tracking\app\Controllers\Barang.php(28): CodeIgniter\Model->first()
#6 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(825): App\Controllers\Barang->edit('1')
#7 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(325): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Barang))
#8 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(235): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#9 G:\xampp\htdocs\project\ci4-tracking\public\index.php(45): CodeIgniter\CodeIgniter->run()
#10 {main}
CRITICAL - 2019-05-03 01:24:21 --> You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ')barang = '1'
ORDER BY `barangs`.`id` ASC
 LIMIT 1' at line 3
#0 G:\xampp\htdocs\project\ci4-tracking\system\Database\MySQLi\Connection.php(325): mysqli->query('SELECT *\nFROM `...')
#1 G:\xampp\htdocs\project\ci4-tracking\system\Database\BaseConnection.php(705): CodeIgniter\Database\MySQLi\Connection->execute('SELECT *\nFROM `...')
#2 G:\xampp\htdocs\project\ci4-tracking\system\Database\BaseConnection.php(633): CodeIgniter\Database\BaseConnection->simpleQuery('SELECT *\nFROM `...')
#3 G:\xampp\htdocs\project\ci4-tracking\system\Database\BaseBuilder.php(1450): CodeIgniter\Database\BaseConnection->query('SELECT *\nFROM `...', Array, false)
#4 G:\xampp\htdocs\project\ci4-tracking\system\Model.php(409): CodeIgniter\Database\BaseBuilder->get()
#5 G:\xampp\htdocs\project\ci4-tracking\app\Controllers\Barang.php(28): CodeIgniter\Model->first()
#6 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(825): App\Controllers\Barang->edit('1')
#7 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(325): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Barang))
#8 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(235): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#9 G:\xampp\htdocs\project\ci4-tracking\public\index.php(45): CodeIgniter\CodeIgniter->run()
#10 {main}
CRITICAL - 2019-05-03 01:24:21 --> You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ')barang = '1'
ORDER BY `barangs`.`id` ASC
 LIMIT 1' at line 3
#0 G:\xampp\htdocs\project\ci4-tracking\system\Database\MySQLi\Connection.php(325): mysqli->query('SELECT *\nFROM `...')
#1 G:\xampp\htdocs\project\ci4-tracking\system\Database\BaseConnection.php(705): CodeIgniter\Database\MySQLi\Connection->execute('SELECT *\nFROM `...')
#2 G:\xampp\htdocs\project\ci4-tracking\system\Database\BaseConnection.php(633): CodeIgniter\Database\BaseConnection->simpleQuery('SELECT *\nFROM `...')
#3 G:\xampp\htdocs\project\ci4-tracking\system\Database\BaseBuilder.php(1450): CodeIgniter\Database\BaseConnection->query('SELECT *\nFROM `...', Array, false)
#4 G:\xampp\htdocs\project\ci4-tracking\system\Model.php(409): CodeIgniter\Database\BaseBuilder->get()
#5 G:\xampp\htdocs\project\ci4-tracking\app\Controllers\Barang.php(28): CodeIgniter\Model->first()
#6 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(825): App\Controllers\Barang->edit('1')
#7 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(325): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Barang))
#8 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(235): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#9 G:\xampp\htdocs\project\ci4-tracking\public\index.php(45): CodeIgniter\CodeIgniter->run()
#10 {main}
CRITICAL - 2019-05-03 01:24:57 --> Unknown column 'barangs.id' in 'order clause'
#0 G:\xampp\htdocs\project\ci4-tracking\system\Database\MySQLi\Connection.php(325): mysqli->query('SELECT *\nFROM `...')
#1 G:\xampp\htdocs\project\ci4-tracking\system\Database\BaseConnection.php(705): CodeIgniter\Database\MySQLi\Connection->execute('SELECT *\nFROM `...')
#2 G:\xampp\htdocs\project\ci4-tracking\system\Database\BaseConnection.php(633): CodeIgniter\Database\BaseConnection->simpleQuery('SELECT *\nFROM `...')
#3 G:\xampp\htdocs\project\ci4-tracking\system\Database\BaseBuilder.php(1450): CodeIgniter\Database\BaseConnection->query('SELECT *\nFROM `...', Array, false)
#4 G:\xampp\htdocs\project\ci4-tracking\system\Model.php(409): CodeIgniter\Database\BaseBuilder->get()
#5 G:\xampp\htdocs\project\ci4-tracking\app\Controllers\Barang.php(28): CodeIgniter\Model->first()
#6 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(825): App\Controllers\Barang->edit('1')
#7 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(325): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Barang))
#8 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(235): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#9 G:\xampp\htdocs\project\ci4-tracking\public\index.php(45): CodeIgniter\CodeIgniter->run()
#10 {main}
CRITICAL - 2019-05-03 01:37:25 --> Unknown column 'barangs.id' in 'where clause'
#0 G:\xampp\htdocs\project\ci4-tracking\system\Database\MySQLi\Connection.php(325): mysqli->query('UPDATE `barangs...')
#1 G:\xampp\htdocs\project\ci4-tracking\system\Database\BaseConnection.php(705): CodeIgniter\Database\MySQLi\Connection->execute('UPDATE `barangs...')
#2 G:\xampp\htdocs\project\ci4-tracking\system\Database\BaseConnection.php(633): CodeIgniter\Database\BaseConnection->simpleQuery('UPDATE `barangs...')
#3 G:\xampp\htdocs\project\ci4-tracking\system\Database\BaseBuilder.php(2008): CodeIgniter\Database\BaseConnection->query('UPDATE `barangs...', Array, false)
#4 G:\xampp\htdocs\project\ci4-tracking\system\Model.php(778): CodeIgniter\Database\BaseBuilder->update()
#5 G:\xampp\htdocs\project\ci4-tracking\app\Controllers\Barang.php(77): CodeIgniter\Model->update(Array, Array)
#6 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(825): App\Controllers\Barang->put()
#7 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(325): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Barang))
#8 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(235): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#9 G:\xampp\htdocs\project\ci4-tracking\public\index.php(45): CodeIgniter\CodeIgniter->run()
#10 {main}
CRITICAL - 2019-05-03 01:43:56 --> Duplicate entry '1' for key 'PRIMARY'
#0 G:\xampp\htdocs\project\ci4-tracking\system\Database\MySQLi\Connection.php(325): mysqli->query('INSERT INTO `ba...')
#1 G:\xampp\htdocs\project\ci4-tracking\system\Database\BaseConnection.php(705): CodeIgniter\Database\MySQLi\Connection->execute('INSERT INTO `ba...')
#2 G:\xampp\htdocs\project\ci4-tracking\system\Database\BaseConnection.php(633): CodeIgniter\Database\BaseConnection->simpleQuery('INSERT INTO `ba...')
#3 G:\xampp\htdocs\project\ci4-tracking\system\Database\BaseBuilder.php(1806): CodeIgniter\Database\BaseConnection->query('INSERT INTO `ba...', Array, false)
#4 G:\xampp\htdocs\project\ci4-tracking\system\Model.php(649): CodeIgniter\Database\BaseBuilder->insert()
#5 G:\xampp\htdocs\project\ci4-tracking\system\Model.php(484): CodeIgniter\Model->insert(Array)
#6 G:\xampp\htdocs\project\ci4-tracking\app\Controllers\Barang.php(78): CodeIgniter\Model->save(Array)
#7 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(825): App\Controllers\Barang->put()
#8 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(325): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Barang))
#9 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(235): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#10 G:\xampp\htdocs\project\ci4-tracking\public\index.php(45): CodeIgniter\CodeIgniter->run()
#11 {main}
CRITICAL - 2019-05-03 01:44:52 --> Duplicate entry '1' for key 'PRIMARY'
#0 G:\xampp\htdocs\project\ci4-tracking\system\Database\MySQLi\Connection.php(325): mysqli->query('INSERT INTO `ba...')
#1 G:\xampp\htdocs\project\ci4-tracking\system\Database\BaseConnection.php(705): CodeIgniter\Database\MySQLi\Connection->execute('INSERT INTO `ba...')
#2 G:\xampp\htdocs\project\ci4-tracking\system\Database\BaseConnection.php(633): CodeIgniter\Database\BaseConnection->simpleQuery('INSERT INTO `ba...')
#3 G:\xampp\htdocs\project\ci4-tracking\system\Database\BaseBuilder.php(1806): CodeIgniter\Database\BaseConnection->query('INSERT INTO `ba...', Array, false)
#4 G:\xampp\htdocs\project\ci4-tracking\system\Model.php(649): CodeIgniter\Database\BaseBuilder->insert()
#5 G:\xampp\htdocs\project\ci4-tracking\system\Model.php(484): CodeIgniter\Model->insert(Array)
#6 G:\xampp\htdocs\project\ci4-tracking\app\Controllers\Barang.php(78): CodeIgniter\Model->save(Array)
#7 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(825): App\Controllers\Barang->put()
#8 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(325): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Barang))
#9 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(235): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#10 G:\xampp\htdocs\project\ci4-tracking\public\index.php(45): CodeIgniter\CodeIgniter->run()
#11 {main}
CRITICAL - 2019-05-03 01:45:07 --> Duplicate entry '1' for key 'PRIMARY'
#0 G:\xampp\htdocs\project\ci4-tracking\system\Database\MySQLi\Connection.php(325): mysqli->query('INSERT INTO `ba...')
#1 G:\xampp\htdocs\project\ci4-tracking\system\Database\BaseConnection.php(705): CodeIgniter\Database\MySQLi\Connection->execute('INSERT INTO `ba...')
#2 G:\xampp\htdocs\project\ci4-tracking\system\Database\BaseConnection.php(633): CodeIgniter\Database\BaseConnection->simpleQuery('INSERT INTO `ba...')
#3 G:\xampp\htdocs\project\ci4-tracking\system\Database\BaseBuilder.php(1806): CodeIgniter\Database\BaseConnection->query('INSERT INTO `ba...', Array, false)
#4 G:\xampp\htdocs\project\ci4-tracking\system\Model.php(649): CodeIgniter\Database\BaseBuilder->insert()
#5 G:\xampp\htdocs\project\ci4-tracking\system\Model.php(484): CodeIgniter\Model->insert(Array)
#6 G:\xampp\htdocs\project\ci4-tracking\app\Controllers\Barang.php(78): CodeIgniter\Model->save(Array)
#7 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(825): App\Controllers\Barang->put()
#8 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(325): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Barang))
#9 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(235): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#10 G:\xampp\htdocs\project\ci4-tracking\public\index.php(45): CodeIgniter\CodeIgniter->run()
#11 {main}
CRITICAL - 2019-05-03 01:46:55 --> Duplicate entry '1' for key 'PRIMARY'
#0 G:\xampp\htdocs\project\ci4-tracking\system\Database\MySQLi\Connection.php(325): mysqli->query('UPDATE `barangs...')
#1 G:\xampp\htdocs\project\ci4-tracking\system\Database\BaseConnection.php(705): CodeIgniter\Database\MySQLi\Connection->execute('UPDATE `barangs...')
#2 G:\xampp\htdocs\project\ci4-tracking\system\Database\BaseConnection.php(633): CodeIgniter\Database\BaseConnection->simpleQuery('UPDATE `barangs...')
#3 G:\xampp\htdocs\project\ci4-tracking\system\Database\BaseBuilder.php(2008): CodeIgniter\Database\BaseConnection->query('UPDATE `barangs...', Array, false)
#4 G:\xampp\htdocs\project\ci4-tracking\system\Model.php(778): CodeIgniter\Database\BaseBuilder->update()
#5 G:\xampp\htdocs\project\ci4-tracking\app\Controllers\Barang.php(80): CodeIgniter\Model->update()
#6 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(825): App\Controllers\Barang->put()
#7 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(325): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Barang))
#8 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(235): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#9 G:\xampp\htdocs\project\ci4-tracking\public\index.php(45): CodeIgniter\CodeIgniter->run()
#10 {main}
CRITICAL - 2019-05-03 01:47:59 --> Unknown column 'barangs.id' in 'where clause'
#0 G:\xampp\htdocs\project\ci4-tracking\system\Database\MySQLi\Connection.php(325): mysqli->query('UPDATE `barangs...')
#1 G:\xampp\htdocs\project\ci4-tracking\system\Database\BaseConnection.php(705): CodeIgniter\Database\MySQLi\Connection->execute('UPDATE `barangs...')
#2 G:\xampp\htdocs\project\ci4-tracking\system\Database\BaseConnection.php(633): CodeIgniter\Database\BaseConnection->simpleQuery('UPDATE `barangs...')
#3 G:\xampp\htdocs\project\ci4-tracking\system\Database\BaseBuilder.php(2008): CodeIgniter\Database\BaseConnection->query('UPDATE `barangs...', Array, false)
#4 G:\xampp\htdocs\project\ci4-tracking\system\Model.php(778): CodeIgniter\Database\BaseBuilder->update()
#5 G:\xampp\htdocs\project\ci4-tracking\app\Controllers\Barang.php(78): CodeIgniter\Model->update(Array, Array)
#6 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(825): App\Controllers\Barang->put()
#7 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(325): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Barang))
#8 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(235): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#9 G:\xampp\htdocs\project\ci4-tracking\public\index.php(45): CodeIgniter\CodeIgniter->run()
#10 {main}
CRITICAL - 2019-05-03 01:56:24 --> Uncaught ErrorException: include(G:\xampp\htdocs\project\ci4-tracking\app\Views/errors/html/error_404.php): failed to open stream: No such file or directory in G:\xampp\htdocs\project\ci4-tracking\system\Debug\Exceptions.php:285
Stack trace:
#0 G:\xampp\htdocs\project\ci4-tracking\system\Debug\Exceptions.php(285): CodeIgniter\Debug\Exceptions->errorHandler(2, 'include(G:\\xamp...', 'G:\\xampp\\htdocs...', 285, Array)
#1 G:\xampp\htdocs\project\ci4-tracking\system\Debug\Exceptions.php(285): include()
#2 G:\xampp\htdocs\project\ci4-tracking\system\Debug\Exceptions.php(156): CodeIgniter\Debug\Exceptions->render(Object(CodeIgniter\Exceptions\PageNotFoundException), 404)
#3 [internal function]: CodeIgniter\Debug\Exceptions->exceptionHandler(Object(CodeIgniter\Exceptions\PageNotFoundException))
#4 {main}
  thrown
#0 [internal function]: CodeIgniter\Debug\Exceptions->shutdownHandler()
#1 {main}
CRITICAL - 2019-05-03 02:50:01 --> Uncaught ErrorException: include(G:\xampp\htdocs\project\ci4-tracking\app\Views/errors/html/error_404.php): failed to open stream: No such file or directory in G:\xampp\htdocs\project\ci4-tracking\system\Debug\Exceptions.php:285
Stack trace:
#0 G:\xampp\htdocs\project\ci4-tracking\system\Debug\Exceptions.php(285): CodeIgniter\Debug\Exceptions->errorHandler(2, 'include(G:\\xamp...', 'G:\\xampp\\htdocs...', 285, Array)
#1 G:\xampp\htdocs\project\ci4-tracking\system\Debug\Exceptions.php(285): include()
#2 G:\xampp\htdocs\project\ci4-tracking\system\Debug\Exceptions.php(156): CodeIgniter\Debug\Exceptions->render(Object(CodeIgniter\Exceptions\PageNotFoundException), 404)
#3 [internal function]: CodeIgniter\Debug\Exceptions->exceptionHandler(Object(CodeIgniter\Exceptions\PageNotFoundException))
#4 {main}
  thrown
#0 [internal function]: CodeIgniter\Debug\Exceptions->shutdownHandler()
#1 {main}
CRITICAL - 2019-05-03 02:52:02 --> Uncaught ErrorException: include(G:\xampp\htdocs\project\ci4-tracking\app\Views/errors/html/error_404.php): failed to open stream: No such file or directory in G:\xampp\htdocs\project\ci4-tracking\system\Debug\Exceptions.php:285
Stack trace:
#0 G:\xampp\htdocs\project\ci4-tracking\system\Debug\Exceptions.php(285): CodeIgniter\Debug\Exceptions->errorHandler(2, 'include(G:\\xamp...', 'G:\\xampp\\htdocs...', 285, Array)
#1 G:\xampp\htdocs\project\ci4-tracking\system\Debug\Exceptions.php(285): include()
#2 G:\xampp\htdocs\project\ci4-tracking\system\Debug\Exceptions.php(156): CodeIgniter\Debug\Exceptions->render(Object(CodeIgniter\Exceptions\PageNotFoundException), 404)
#3 [internal function]: CodeIgniter\Debug\Exceptions->exceptionHandler(Object(CodeIgniter\Exceptions\PageNotFoundException))
#4 {main}
  thrown
#0 [internal function]: CodeIgniter\Debug\Exceptions->shutdownHandler()
#1 {main}
CRITICAL - 2019-05-03 02:52:22 --> Class 'App\Models\Lokasis' not found
#0 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(825): App\Controllers\Tracking->index('1')
#1 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(325): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Tracking))
#2 G:\xampp\htdocs\project\ci4-tracking\system\CodeIgniter.php(235): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 G:\xampp\htdocs\project\ci4-tracking\public\index.php(45): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2019-05-03 06:28:31 --> Uncaught ErrorException: include(G:\xampp\htdocs\project\ci4-tracking\app\Views/errors/html/error_404.php): failed to open stream: No such file or directory in G:\xampp\htdocs\project\ci4-tracking\system\Debug\Exceptions.php:285
Stack trace:
#0 G:\xampp\htdocs\project\ci4-tracking\system\Debug\Exceptions.php(285): CodeIgniter\Debug\Exceptions->errorHandler(2, 'include(G:\\xamp...', 'G:\\xampp\\htdocs...', 285, Array)
#1 G:\xampp\htdocs\project\ci4-tracking\system\Debug\Exceptions.php(285): include()
#2 G:\xampp\htdocs\project\ci4-tracking\system\Debug\Exceptions.php(156): CodeIgniter\Debug\Exceptions->render(Object(CodeIgniter\Exceptions\PageNotFoundException), 404)
#3 [internal function]: CodeIgniter\Debug\Exceptions->exceptionHandler(Object(CodeIgniter\Exceptions\PageNotFoundException))
#4 {main}
  thrown
#0 [internal function]: CodeIgniter\Debug\Exceptions->shutdownHandler()
#1 {main}
