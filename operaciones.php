<?php



    class CRUD{

        private $conn;

        public function __construct($db){
            $this->conn = $db;
        }


        //Crear  - Agregar un registro
        public function insertar($nombre, $apellidos, $email){
            
            $sql = "INSERT INTO profesores (profesor_nombre, profesor_apellidos, profesor_email) VALUES (:nombre, :apellidos, :email)";
            $stmt = $this->conn->prepare($sql);
            
            $stmt->bindParam(':nombre', $nombre);
            $stmt->bindParam(':apellidos', $apellidos);
            $stmt->bindParam(':email', $email);

            if($stmt->execute()){
                return true;
            }else{
                return false;
            }

        } //Fin Crear


        //Leer - Obtener registros
        public function mostrar(){
            $sql = "SELECT * FROM profesores";
            $stmt = $this->conn->query($sql);
            return $stmt;
        }



        //Actualizar registros
        public function update($id, $nombre, $apellidos, $email)        {
            $sql = "UPDATE profesores set profesor_nombre=:nombre, profesor_apellidos=:apellidos, profesor_email=:email WHERE profesor_id=:id";
            $stmt = $this->conn->prepare($sql);
            
            $stmt->bindParam(':id', $id);
            $stmt->bindParam(':nombre', $nombre);
            $stmt->bindParam(':apellidos', $apellidos);
            $stmt->bindParam(':email', $email);

            if($stmt->execute()){
                return true;
            }else{
                return false;
            }




        }//Fin de actualizar 




        //Delete - Eliminar registro
        public function delete($id){
            $sql = "DELETE FROM profesores WHERE profesor_id=:id";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':id', $id);

            if($stmt->execute()){
                return true;
            }else{
                return false;
            }
        }


    }



?>