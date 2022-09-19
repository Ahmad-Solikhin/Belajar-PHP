<?php

//Ini digunakan sebagai kontrak untuk repository nya

 namespace Repository{

     use Model\Comment;

     interface CommentRepository{

         function insert(Comment $comment): comment;

         function findById(int $id): ?comment;

         function findAll(): array;

     }

     //Selanjutnya adalah pembuatan dari impelemntasi commentRepositorynya

     class CommentRepositoryImpl implements CommentRepository{

         function __construct(private \PDO $connection){

         }

         public function insert(Comment $comment): comment
         {
             $sql = "INSERT INTO comments(email, comment) VALUES (?, ?)";
             $statement = $this->connection->prepare($sql);
             $statement->execute([$comment->getEmail(), $comment->getComment()]);
             $id = $this->connection->lastInsertId();
             $comment->setId($id);

             return $comment;
         }

         public function findById(int $id): ?comment
         {
             $sql = "SELECT * FROM comments WHERE id = ?";
             $statement = $this->connection->prepare($sql);
             $statement->execute([$id]);

             if ($row = $statement->fetch()){
                return new Comment(
                    id: $row['id'],
                    email: $row['email'],
                    comment: $row['comment']
                );
             }else{
                 return null;
             }
         }

         public function findAll(): array
         {
             $sql = "SELECT * FROM comments";
             $statement = $this->connection->query($sql);

             return $statement->fetchAll();
         }
     }
 }


