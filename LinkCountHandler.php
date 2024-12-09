<?php

class LinkCountHandler extends AbstractCommentHandler
{
    public function handle(string $comment): ?string
    {
        $linkCount = preg_match_all('/https?:\/\/[\w\-\.]+/', $comment);

        if ($linkCount > 0) {
            return "The comment contains links.";
        }

        return parent::handle($comment);
    }
}