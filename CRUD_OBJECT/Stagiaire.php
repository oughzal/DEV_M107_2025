<?php
class Stagiaire{
    public $id = 0;
    public $nom ="";
    public $prenom= "";

    public function _construct($id=0,$nom="",$prenom=""){
        $this->id = $id;
        $this->nom = $nom;
        $this->prenom=$prenom;
    }
}
class StagiaireDB{
    private static $con;

    private static function connection(){
        self::$con = mysqli_connect("localhost","root","root","tp1",33066);
    }

    public static function getAll(){
        self::connection();
        $sql = "select * from stagiaire";
        $result  = mysqli_query(self::$con, $sql);
        $out=[];
        while ($row = mysqli_fetch_assoc($result)){
            $out[] = $row;
        }
        return $out; 
    }

    public static function getId($id){
        self::connection();
        $sql = "select * from stagiaire where id=$id";
        $result  = mysqli_query(self::$con,$sql);
        if(mysqli_num_rows($result)){
            return mysqli_fetch_assoc($result);
        }else{
            return new Stagiaire();
        }
    }
    public static function insert($stagiaire){
        self::connection();
        $sql = "insert into stagiaire(id,nom,prenom) values('$stagiaire->id','$stagiaire->nom','$stagiaire->prenm')";
        $result = mysqli_query(self::$con, $sql);
        $id  = mysqli_insert_id(self::$con);
        $stagiaire->id = $id;
        return $stagiaire;

    }
        public static function update($stagiaire){
        self::connection();
        $sql = "update stagiaire set nom='$stagiaire->nom', prenom='$stagiaire->prenom' where id = $stagiaire->id";
        mysqli_query(self::$con, $sql);
        return $stagiaire;
    }

    public static function delete($id){
        self::connection();
        $sql = "delete from stagiaire where id=$id";
        mysqli_query(self::$con,$sql);
    }

    public static function searchName($name){
        self::connection();
        $sql = "select * from stagiaire where nom like %$name% ";
    }
    
}
?>