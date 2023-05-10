<?php
namespace App\Repository\Feedback;

/**
 * Static factory for feedback
 */
class FeedbackFactory
{

    public static function factory(string $type): FeedbackStoreInterface
    {
        return match ($type) {
            'database' => new FeedbackStoreDB(),
            'email' => new FeedbackStoreEmail(),
            default => throw new InvalidArgumentException('Unknown format given'),
        };
    }
}
