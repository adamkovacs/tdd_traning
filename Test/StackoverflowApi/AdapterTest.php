<?php

namespace Test\StackoverflowApi;

use StackoverflowApi\Api;
use StackoverflowApi\Adapter;

/**
 * Class AdapterTest
 */
class AdapterTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Api
     */
    protected $api;

    /**
     * @var Adapter
     */
    protected $adapter;

    /**
     * Setup
     */
    public function setUp()
    {
        $answer = file_get_contents(__DIR__ . "/TestData/Answer.json");
        $question = file_get_contents(__DIR__ . "/TestData/Question.json");

        $this->api = $this->getMockBuilder('StackoverflowApi\Api')
            ->disableOriginalConstructor()
            ->getMock();

        $this->api->expects($this->any())
            ->method('getFeaturedQuestions')
            ->will($this->returnValue(
                json_decode($question)
            ));

        $this->api->expects($this->any())
            ->method('getAnswers')
            ->will($this->returnValue(
                json_decode($answer)
            ));

        $this->adapter = new Adapter($this->api);
    }

    /**
     * Test getFirstPopularQuestionToAnswerUserId
     */
    public function testGetFirstPopularQuestionToAnswerUserId()
    {
        $this->assertEquals(
            array(
                0 => '3454860',
            ),
            $this->adapter->getFirstPopularQuestionToAnswerUserId()
        );
    }

    /**
     * Test getFirstQuestionId
     */
    public function testGetFirstQuestionId()
    {
        $this->assertEquals(
            42142712,
            $this->adapter->getFirstQuestionId()
        );
    }
}
