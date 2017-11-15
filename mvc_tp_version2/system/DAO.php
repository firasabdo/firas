<?php
interface DAO{
    function bddConnexion();
    function bddDeconnexion();
    function bddQuery($sql);
}

