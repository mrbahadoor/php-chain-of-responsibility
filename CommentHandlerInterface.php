<?php

interface CommentHandlerInterface
{
    public function setNext(CommentHandlerInterface $handler): CommentHandlerInterface;
    public function handle(string $comment): ?string;
}