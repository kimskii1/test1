<?php
namespace App\Repository\Feedback;

interface FeedbackStoreInterface
{
    public function save(array $feedbackData);
}
