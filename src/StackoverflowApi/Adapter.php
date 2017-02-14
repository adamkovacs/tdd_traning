<?php
namespace StackoverflowApi;

use StackoverflowApi\Api;

/**
 * Class Adapter
 */
class Adapter
{
    /**
     * @var Api
     */
    protected $api;

    /**
     * @param Api $api
     */
    public function __construct(Api $api)
    {
        $this->api = $api;
    }

    /**
     * @return array()
     */
    public function getFirstPopularQuestionToAnswerUserId()
    {
        $firstQuestionId = $this->getFirstQuestionId();
        $answers = $this->api->getAnswers($firstQuestionId);

        $userIds = array();
        if (!$answers) {
            return $userIds;
        }

        foreach ($answers->items as $item) {
            $userIds[] = $item->owner->user_id;
        }
        return $userIds;
    }

    /**
     * @return bool|mixed
     */
    public function getFirstQuestionId()
    {
        $questions = $this->api->getFeaturedQuestions();
        return $questions->items[0]->question_id;
    }
}
