<?php 
class database {
    private $host = 'localhost:1333';
    private $dbname = 'project_blog_docker';
    private $username = "root";
    private $password = "password";
    private $db;

    public function connection_to_db() {
        try {
            $this->db = new PDO('mysql:host=' . $this-$host . ';dbname=' . $this->dbname, $this->username, $this->password);
            $this->db->set_attribute( PDO::ATTR_ERRMODE,  PDO::ERRMODE_EXCEPTION);
            return  $this->db;
        }catch (PDOException $e) {
            echo 'connection failed' . $e->getMessage();
                }
            }
        }    
