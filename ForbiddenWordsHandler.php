<?php

class ForbiddenWordsHandler extends AbstractCommentHandler
{
    private array $forbiddenWords = ['slag', 'wanker', 'pisshead'];

    public function handle(string $comment): ?string
    {
        foreach ($this->forbiddenWords as $word) {
            if (strpos($comment, $word) !== false) {
                return 'Comment contains forbidden words';
            }
        }

        return parent::handle($comment);
    }
}