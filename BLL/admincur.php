<?php
/* 
    *******************************************************************
    ***   CURSADA MANAGER CLASS: Clase encargada del manejo de las     ***
    ***   operaciones de negocio referentes a la entidad Aula       ***
    *******************************************************************
*/
    include_once "DAL/DALCur.php";
    class admincur {
        function listartodas(){
            try {
                $dalcur = new DALCur();
                $Cursadas = $dalcur->ReadALL();
                return ($Cursadas);
            }
            finally {
                $Cursadas = null;
                $dalcur = null;
            }
        }
        function listar($query){
            try {
                $dalcur = new DALCur();
                $Cursadas = $dalcur->Read($query);
                return ($Cursadas);
            }
            
            finally {
                $dalcur = null;
                $Cursadas = null;
            }
        }
        function alta($cursada){
            try {
                echo "arranco";
                $dalcur = new DALCur();
                $mismacursada = $this->listar(["materia" => (string) $cursada->Materia, "carrera" => (string) $cursada->Carrera , "cantalumnos" => (string) $cursada->CantAlumnos, "turno" => (string) $cursada->Turno, "dia" => (string) $cursada->Dia, "comision" => (string) $cursada->Comision, "aula" => (string) $cursada->Aula]);
                $mismacomdiaaula = $this->listar(["turno" => (string) $cursada->Turno, "dia" => (string) $cursada->Dia, "comision" => (string) $cursada->Comision, "aula" => (string) $cursada->Aula]);
                $mismamatcomdia = $this->listar(["materia" => (string) $cursada->Materia, "turno" => (string) $cursada->Turno, "dia" => (string) $cursada->Dia, "comision" => (string) $cursada->Comision]);
                echo "llegue";
                if (sizeof($mismacursada)) {
                    echo "mismacursada";
                    return(1);
                }
                else if (sizeof($mismacomdiaaula)){
                    echo "mismacomdiaaula";
                    return (2);
                }
                else if (sizeof($mismamatcomdia)) {
                    echo "mismamatcomdia";
                    return(3);
                }
                else {
                    $dalcur->Create($cursada);
                    return(0);
                }
            }
            finally{
                $dalcur = null;
            }
        }
    }
?>