<?php
 require_once __DIR__."/Model/Comment.php";
 require_once __DIR__."/Repository/CommentRepository.php";
 require_once  __DIR__."/GetConnection.php";

 use Repository\CommentRepositoryImpl;
 use Model\Comment;

 $connection = getConnection();
 $repository = new CommentRepositoryImpl($connection);

// $comment = new Comment(email: "huwaa@gmail.com",comment: "hi");
//
// $newComment = $repository->insert($comment);
//
// var_dump($newComment->getId());

 $comment = $repository->findAll();

 var_dump($comment);

 $connection = null;