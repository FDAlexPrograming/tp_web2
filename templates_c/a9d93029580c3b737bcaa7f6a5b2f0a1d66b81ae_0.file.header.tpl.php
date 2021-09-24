<?php
/* Smarty version 3.1.39, created on 2021-09-24 01:20:15
  from 'C:\xampp\htdocs\tp_web_1\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_614d0baf117be2_41910576',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a9d93029580c3b737bcaa7f6a5b2f0a1d66b81ae' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tp_web_1\\templates\\header.tpl',
      1 => 1632439012,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_614d0baf117be2_41910576 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
       
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
        <?php echo '<script'; ?>
 src="https://kit.fontawesome.com/728f81b46c.js" crossorigin="anonymous"><?php echo '</script'; ?>
>
        <link rel="stylesheet" type="text/css" href="css/normalize.css">
        <link rel="stylesheet" type="text/css" href="css/estilos.css">
    </head>
    <title><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
| Fichajes.com</title>
</head>

<body >
 <header >
            <a  href="home">fichajes.com</a>
            <div >
                <a class="btn_menu"><i class="fas fa-bars"></i></a>
            </div>
            <nav class="menu">
                <ul class="navigation">
                    <li ><a  href ="home"  class="pagina">inicio</li></a> 
                    <li ><a  href ="suscripcion"  class="pagina">suscripcion</li></a> 
                    <li ><a  href ="posiciones"  class="pagina">posiciones</li></a> 
                    <li ><a  href ="entradas"  class="pagina">entradas</li></a>   
                </ul>
            </nav>
        </header><?php }
}
