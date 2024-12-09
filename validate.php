<?php

require_once 'CommentHandlerInterface.php';
require_once 'AbstractCommentHandler.php';
require_once 'ForbiddenWordsHandler.php';
require_once 'MinimumLengthHandler.php';
require_once 'LinkCountHandler.php';
require_once 'EmptyCommentHandler.php';

$output = '';
if (isset($_POST['submit'])) {
    $comment = $_POST['comment'] ?? '';

    $emptyCommentHandler = new EmptyCommentHandler();
    $forbiddenWordsHandler = new ForbiddenWordsHandler();
    $minLengthHandler = new MinimumLengthHandler();
    $linkCountHandler = new LinkCountHandler();

    // Chain handlers.
    $emptyCommentHandler->setNext($forbiddenWordsHandler)->setNext($minLengthHandler)->setNext($linkCountHandler);

    // Process the comment.
    $result = $emptyCommentHandler->handle($comment);

    if ($result) {
        $output = '<span class="text-danger">'.$result.'</span>'; // Output the first validation error.
    } else {
        $output = '<span class="text-success">The comment is valid!</span>';
    }
}
