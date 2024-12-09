<?php

class MinimumLengthHandler extends AbstractCommentHandler
{
    private int $minLength = 10;

    public function handle(string $comment): ?string
    {
        if (strlen($comment) < $this->minLength) {
            return 'Comment is too short';
        }

        return parent::handle($comment);
    }
}