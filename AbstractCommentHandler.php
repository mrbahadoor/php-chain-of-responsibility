<?php

class AbstractCommentHandler implements CommentHandlerInterface
{
    private ?CommentHandlerInterface $nextHandler = null;

    public function setNext(CommentHandlerInterface $handler): CommentHandlerInterface
    {
        $this->nextHandler = $handler;
        return $handler; // allows chaining
    }

    public function handle(string $comment): ?string
    {
        if ($this->nextHandler) {
            return $this->nextHandler->handle($comment);
        }        
        return null;
    }
}