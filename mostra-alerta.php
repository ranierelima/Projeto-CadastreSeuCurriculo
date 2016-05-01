<?php 
session_start();
function mostraAlerta($tipo){
                    if(isset($_SESSION[$tipo])){
                    ?>
                    <p class="alert alert-<?=$tipo?>" style="text-align: center;"><?= $_SESSION[$tipo]?></p>

                <?php
                        }
                 
                    unset($_SESSION[$tipo]);                                     
}