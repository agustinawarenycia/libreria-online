<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
class Producto_model extends CI_Model{
		
	/**
    * Constructor de la clase
    */
    public function __construct() {
        parent::__construct();
    }

    /**
    * Retorna todos los productos
    */
    function get_productos()
    {
        $query = $this->db->get_where('productos', array('eliminado' => 'NO'));
        
        if($query->num_rows()>0) {
            return $query;
        } else {
            return FALSE;
        }        
    }

    /**
    *Retorna los libros de: ilustracion
    */
    function get_ilustracion()
    {
        $query = $this->db->get_where('productos', array('eliminado' => 'NO', 'categoria_id' => '1'));
        
        if($query->num_rows()>0) {
            return $query;
        } else {
            return FALSE;
        }        
    }

    /**
    * Retorna los libros de: historietas
    */
    function get_historieta()
    {
        $query = $this->db->get_where('productos', array('eliminado' => 'NO', 'categoria_id' => '2'));
        
        if($query->num_rows()>0) {
            return $query;
        } else {
            return FALSE;
        }        
    }

    /**
    * Retorna los libros de:cuento
    */
    function get_cuento()
    {
        $query = $this->db->get_where('productos', array('eliminado' => 'NO', 'categoria_id' => '3'));
        
        if($query->num_rows()>0) {
            return $query;
        } else {
            return FALSE;
        }        
    }

    /**
    * Retorna los libros de: poesia y teatro
    */    

    function get_poesiaYteatro()
    {
        $query = $this->db->get_where('productos', array('eliminado' => 'NO', 'categoria_id' => '4'));
        
        if($query->num_rows()>0) {
            return $query;
        } else {
            return FALSE;
        }        
    }   
    
     /**
    * Retorna los libros de: aventura
    */    

    function get_aventura()
    {
        $query = $this->db->get_where('productos', array('eliminado' => 'NO', 'categoria_id' => '5'));
        
        if($query->num_rows()>0) {
            return $query;
        } else {
            return FALSE;
        }        
    }  

    /**
    * Inserta un producto
    */
    public function add_producto($data){
        $this->db->insert('productos', $data);
    }

    /**
    * Retorna todos los datos de un producto
    */
    function edit_producto($id){

        $query = $this->db->get_where('productos', array('id' => $id),1);
                
        if($query->num_rows() == 1) {
            return $query;
        } else {
            return FALSE;
        }
    }

    /**
    * Actualiza los datos de un producto
    */
    function update_producto($id, $data){
        $this->db->where('id', $id);
        $query = $this->db->update('productos', $data);
        if($query) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    /**
    * Eliminación y activación logica de un producto
    */
    function estado_producto($id, $data){
        $this->db->where('id', $id);
        $query = $this->db->update('productos', $data);
        if($query) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    /**
    * Retorna todos los productos inactivos o eliminados
        */
    function not_active_productos()
    {
        $query = $this->db->get_where('productos', array('eliminado' => 'SI'));
        if($query->num_rows()>0) {
            return $query;
        } else {
            return FALSE;
        }        
    }
    
    function get_ventas_cabecera()
    {  
        $this->db->select('*');
        $this->db->from('ventas_cabecera');
        $this->db->join('usuarios','usuarios.id_usuario = ventas_cabecera.usuario_id');
        $this->db->join('ventas_detalle','ventas_detalle.venta_id = ventas_cabecera.id_ventas');
        $this->db->join('productos','productos.id = ventas_detalle.producto_id');
        $this->db->join('categorias','categorias.id = productos.categoria_id');
        $this->db->order_by('fecha', 'desc');
        $queryList = $this->db->get();
        //print_r($queryList->result());
        //select * from ventas_cabecera;
        if($queryList->num_rows()>0) {
            return $queryList;
        } else {
            return FALSE;
        }
    }
    
    function get_ventas_detalle($id)
    {
        $this->db->select('*');
        $this->db->from('ventas_cabecera');
        $this->db->join('usuarios','usuarios.id_usuario = ventas_cabecera.usuario_id');
        $this->db->join('ventas_detalle','ventas_detalle.venta_id = ventas_cabecera.id_ventas');
        $this->db->join('productos','productos.id = ventas_detalle.producto_id');
        $this->db->join('categorias','categorias.id = productos.categoria_id');
        $this->db->where('usuario_id', $id);
        $this->db->order_by('fecha', 'desc');

        //$queryList = $this->db->join('productos','productos.id = ventas_detalle.producto_id');   
        $queryList = $this->db->get();
        //print_r($queryList->result());
        //select * from ventas_detalle;
        //$query = $this->db->get_where('ventas_detalle', array('venta_id' => $id));
       
        
        if($queryList->num_rows()>0) {
            return $queryList;
        } else {
            return FALSE;
        }
    }

    	/**
		 * Llamar categorias
		 */

		 function llamar_categorias()
		 {
			$this->db->select('*');
			$this->db->from('categorias');
            
            $query = $this->db->get();
            return $query->result();
         }
         
    
    } 