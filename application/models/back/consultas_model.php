<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
class Consultas_model extends CI_Model{
		
	/**
    * Constructor de la clase
    */
    public function __construct() {
        parent::__construct();
    }

    /**
    * Retorna todos las consultas activas
    */
    function get_consultas()
    {
        $query = $this->db->get_where('consultas', array('archivado' => 'NO'));
        
        if($query->num_rows()>0) {
            return $query;
        } else {
            return FALSE;
        }        
    }

    /**
    * Inserta una nuevas consulta en la base de datos
    */
    public function add_consultas($data){
        $this->db->insert('consultas', $data);
    }

    /**
    * Retorna todos los datos de un producto
    
    function edit_producto($id){

        $query = $this->db->get_where('productos', array('id' => $id),1);
                
        if($query->num_rows() == 1) {
            return $query;
        } else {
            return FALSE;
        }
    }*/

    /**
    * Actualiza los datos de un producto
    *//*
    function update_consultas($id, $data){
        $this->db->where('id_mensaje', $id);
        $query = $this->db->update('consultas', $data);
        if($query) {
            return TRUE;
        } else {
            return FALSE;
        }
    }*/

    /**
    * Eliminación y activación logica de una consulta*/
    
    function estado_consulta($id, $data){
        $this->db->where('id_mensaje', $id);
        $query = $this->db->update('consultas', $data);
        if($query) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    /**
    * Retorna todas las consultas archivadas
    */
    function ver_archivados()
    {
        $query = $this->db->get_where('consultas', array('archivado' => 'SI'));
        if($query->num_rows()>0) {
            return $query;
        } else {
            return FALSE;
        }       
}

} 