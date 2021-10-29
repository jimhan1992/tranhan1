<?php

namespace Src;

class ReaderManager
{
    public $pdo;

    public function __construct()
    {
        $database = new Database("root", "hanND92@@");
        $this->pdo = $database->connect();
    }

    public function getFullStudent()
    {
        $sql = "SELECT*FROM Students";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        $data = $stmt->fetchAll();
        return $data;
    }

    public function delete($id)
    {
        $sql = 'DELETE FROM `Books_borrow` WHERE card_id = :id';
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $sql = 'DELETE FROM `Borrow_card` WHERE student_id = :id';
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $sql = 'DELETE FROM `Students` WHERE student_id = :id';
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        header('location: ../index.php');
    }

    public function add($student1)
    {

        $sql = 'INSERT INTO `Students`(`student_id`,`student_name`,`student_birthday`,`student_address`, `email`,`phone`,`image`)
VALUES (:student_id, :student_name, :student_birthday, :student_address, :email,:phone,:image)';
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':student_id', $student1['student_id']);
        $stmt->bindParam(':student_name', $student1['student_name']);
        $stmt->bindParam(':student_birthday', $student1['student_birthday']);
        $stmt->bindParam(':student_address', $student1['student_address']);
        $stmt->bindParam(':email', $student1['email']);
        $stmt->bindParam(':phone', $student1['phone']);
        $stmt->bindParam(':image', $student1['image']);
        $stmt->execute();
    }


    public function update()
    {
        $sql = 'UPDATE Students SET student_name = ".."';
    }
}