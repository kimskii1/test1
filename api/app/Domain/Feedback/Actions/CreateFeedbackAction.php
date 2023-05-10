<?php

namespace App\Domain\Feedback\Actions;

use App\Repository\Feedback\FeedbackFactory;

class CreateFeedbackAction
{
    public function execute(array $fields)
    {
        FeedbackFactory::factory('database')->save($fields);
    }
}
