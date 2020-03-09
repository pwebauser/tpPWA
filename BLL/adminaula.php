<?php
/* 
    *******************************************************************
    ***   AULA MANAGER CLASS: Clase encargada del manejo de las     ***
    ***   operaciones de negocio referentes a la entidad Aula       ***
    *******************************************************************
*/
    include_once "DAL/DALAula.php";
    class adminaula {
        function listartodas(){
            try {
                $dalau = new DALAula();
                $aulas = $dalau->ReadALL();
                return ($aulas);
            }
            finally {
                $aulas = null;
                $dalau = null;
            }
        }
        function listar($query){
            try {
                $dalau = new DALAula();
                $aulas = $dalau->Read($query);
                return ($aulas);
            }
            
            finally {
                $dalau = null;
                $aulas = null;
            }
        }
        function alta($aula){
            try {
                $dalau = new DALAula();
                $res = $this->listar(["numero" => (string) $aula->Numero]);
                if ($res) {
                    return(1);
                }
                else {
                    $dalau->Create($aula);
                    return(0);
                }
            }
            finally{
                $dalau = null;
            }
        }
    }
?>