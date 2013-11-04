<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class Myclass {
        var $titulo = 'Mi titulo';
        var $contenido = 'Mi Contenido';
        var $fecha = 'Mi Fecha';
    }

$objeto = new Myclass;

$this->db->insert('mitabla', $objeto);

// Produce: INSERT INTO mitabla (titulo, contenido, fecha) VALUES ('Mi titulo', 'Mi Contenido', 'Mi Fecha')
