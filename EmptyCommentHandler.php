<?php

class EmptyCommentHandler extends AbstractCommentHandler
{
    public function handle(string $comment): ?string
    {
        if (empty($comment)) {
            return 'Comment is empty';
        }

        return parent::handle($comment);
    }
}