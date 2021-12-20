  <?php
    require_once 'dbconnect.class.php';
    
    class Enseignant
    {
        private $cnct;

        public function __construct()
        {
            $db = new Database;
            $connect = $db->connectDB();
            $this->cnct = $connect;
        }

        private function execReq($sql)
        {
            $stmt = $this->cnct->prepare($sql);
            return $stmt;
        }

        public function createEnseignant($id,$num,$nom,$prenom,$tel,$email)
        {
            try {
                $sql = "INSERT INTO `enseignant` (`id`, `num`, `nom`, 'prenom', 'tel', 'email') VALUES ('$id', '$num', '$nom', '$prenom', '$tel', '$email')";
                $result = $this->execReq($sql);
                $result->$id;
                $result->$num;
                $result->$nom;
                $result->$prenom;
                $result->$tel;
                $result->$email;
                $result->execute();
                return $result;
            } catch (PDOException $ex) {
                echo $ex->getMessage();
            }
        }

        public function readAllEnseignant()
        {
            try {
                $sql = 'SELECT * FROM enseignant ';
                $result = $this->execReq($sql);
                $result->execute();
                return $result;
            } catch (PDOException $exception) {
                echo $exception->getMessage();
            }
        }

        public function readSpecificEnseignant($id)
        {
            try {
                $sql = 'SELECT * FROM enseignant  WHERE id = :num';
                $req = $this->execReq($sql);
                $req->bindparam(":num", $id);
                $req->execute();
                return $req;
            } catch (PDOException $ex) {
                echo $ex->getMessage();
            }
        }

        public function updateEnseignant($id,$num,$nom,$prenom,$tel,$email)
        {
            try {
                $sql = 'UPDATE enseignant SET num = :_num ,prenom = :_prenom,nom = :_nom,tel = :_tel,email=_email WHERE id = :_num';
                $result = $this->execReq($sql);
                $result->bindparam(":_num", $num);
                $result->bindparam(":_nom", $nom);
                $result->bindparam(":_prenom", $prenom);
                $result->bindparam(":_tel", $tel);
                $result->bindparam(":_email", $email);

                $result->execute();
                return $result;

            } catch (PDOException $exception) {
                echo $exception->getMessage();
            }
        }

        public function deleteEnseignant($id)
        {
            try {
                $sql = 'DELETE FROM enseignant WHERE id= :_num';
                $result = $this->execReq($sql);
                $result->bindparam(":_num", $id);
                $result->execute();
                return $result;
                
            } catch (PDOException $exception) {
                echo $exception->getMessage();
            }
        }

        public function deconnect()
        {
            unset($this->cnct);
        }

    }
