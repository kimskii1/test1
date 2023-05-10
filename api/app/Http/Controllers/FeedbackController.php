<?php

namespace App\Http\Controllers;

use App\Domain\Feedback\Actions\CreateFeedbackAction;
use App\Http\Requests\CreateFeedbackRequest;

class FeedbackController extends Controller
{
    public function create(CreateFeedbackRequest $request, CreateFeedbackAction $action)
    {
        $action->execute($request->validated());
        return response(null, 201);
    }
}
