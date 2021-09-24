<?php
/* Smarty version 3.1.39, created on 2021-09-24 01:14:06
  from 'C:\xampp\htdocs\tp_web_1\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_614d0a3e8bc5e3_81413110',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8b6a1bd71f45a644d862a6789b3f1d5fcd0b5201' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tp_web_1\\templates\\home.tpl',
      1 => 1632438845,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_614d0a3e8bc5e3_81413110 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <section id="body">
        <section class="container_main">
            <h2> no te pierdas ningún partido</h2>
          <img src="imagen/santosvslorenzo.jpg" alt="libertadores">
        </section>

        <section class="sub-new">	
            <h2 >partidos del domingo</h2>
            <ul>
                <li>Real Madrid vs Getafe</li>
                <li>Inter vs Juventus</li>
                <li>PSG vs Lyon</li>
                <li>Leeds vs Chelsea</li>
                <li>Ajax Vs PSV</li>
            </ul>
        </section>
    
        <section  class="sub-content">
            <h1 >noticias destacadas</h1>
            <p><span>formula 1 </span>Max Verstappen triunfó en Imola a lo grande
                El neerlandés se llevó la victoria en una accidentada carrera y se acercó al liderato del campeonato mundial que tiene Lewis Hamilton.
            </p>
            <img src="imagen/formulauno.jpg" alt="formula 1">
        </section>

        <aside class="container-titulares">
            <h2>titulares</h2>
            <article>
                <a href="https://www.ole.com.ar/" target="_blank">Di María alcanzó un récord en el PSG y hasta lo elogió Puyol</a>
                <p>
                    El Fideo metió el centro del gol de Marquinhos ante Manchester City y alcanzó la cima de los máximos asistidores de la historia del club.
                </p>	
            </article>

            <article>
                <a href="https://www.ole.com.ar/" target="_blank">¿Cómo se define Manchester City vs. PSG?</a>
                <p>
                    Tras la victoria del equipo de Guardiola en París, te contamos cuándo es la revancha y cómo se dirime al finalista.
                </p>
            </article> 

            <article>
                <a href="https://www.ole.com.ar/" target="_blank">Ajax homenajeará a Bob Marley en su camiseta</a>
                <p>
                    El Ajax tiene un vínculo particular con el jamaiquino y, a 40 años de su muerte, se filtró la casaca que usarían en su memoria.
                </p>
            </article>

            <article>
                <a href="https://www.ole.com.ar/" target="_blank">Muchos cambios en San Lorenzo</a>
                <p>
                    Dabove guarda jugadores: ocho cambios y cinco defensores para jugar con Central por la Sudamericana.
                </p>
            </article>    
        </aside>
        <?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>;<?php }
}
