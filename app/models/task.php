<?php
    require('data_provider.php');
    class Task extends Dataprovider{
        public function addTask($content,$description){
            $db = $this->connect();
            if($db == null){
                return;
            }
            $sql = "INSERT INTO tasks (content,description) VALUES(:content,:description)";
            $stm = $db->prepare($sql);
            $stm->execute([
                'content'=> $content,
                'description'=> $description
            ]);
            $db = null;
            $stm = null;
        }
        public function getAllTasks(){
            $db = $this->connect();
            if($db==null){
                return ;
            }
            $query = $db ->query('SELECT * FROM tasks');
            $data = $query->fetchAll(PDO::FETCH_OBJ);
            $query = null;
            $db= null;
            return $data; 
        }
        public function getTaskById($id){
            $db = $this->connect();
            if($db==null){
                return;
            }
            $sql = "SELECT * FROM tasks WHERE id = :id";
            $stm = $db->prepare($sql);
            $stm->execute([
                'id' => $id
            ]);
            $data = $stm->fetch();
            $db = null;
            $stm = null;
            if(!$data){
                return 'data not found ';
            }
            return $data[1];
        }

        public function searchTasks($search){
            $db = $this->connect();
            if($db==null){
                return;
            }
            $sql = "SELECT * FROM tasks WHERE content LIKE :search OR description LIKE :search";
            $stm = $db->prepare($sql);
            $stm->execute([
                'search'=> '%' .$search. '%',
            ]);
            $data = $stm->fetchAll(PDO::FETCH_OBJ);
            $db = null;
            $stm = null;
            if(!$data){
                return [];
            }
            return $data;
        }
        public function updateTask($id,$newContent,$newDescription){
            $db = $this->connect();
            if($db == null){
                return;
            }
            $sql = "UPDATE tasks SET content = :content ,description = :description WHERE id = :id";
            $stm = $db->prepare($sql);
            $stm->execute([
                ":id"=>$id,
                ":content"=>$newContent,
                ":description"=>$newDescription
            ]);
            $db = null;
            $stm = null;
        }

        public function deleteTask($id){
            $db = $this->connect();
            if($db == null){
                return;
            }
            $sql = "DELETE FROM tasks WHERE id = :id";
            $stm = $db->prepare($sql);
            $stm->execute([
                ":id"=>$id,
            ]);
            $db = null;
            $stm = null;
        }

    }
?>