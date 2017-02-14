<?php
namespace Test\StackoverflowApi;

use StackoverflowApi\Api;

/**
 * Class ApiTest
 */
class ApiTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Api
     */
    protected $api;

    /**
     * SetUp
     */
    public function setUp()
    {
        $this->api = $this->getMockBuilder('StackoverflowApi\Api')
            ->disableOriginalConstructor()
            ->getMock();
    }

    /**
     * Test getFeaturedQuestions
     */
    public function testGetFeaturedQuestions()
    {
        $question = file_get_contents(__DIR__ . "/TestData/Question.json");

        $this->api
            ->expects($this->once())
            ->method('getFeaturedQuestions')
            ->will($this->returnValue(
                $question
            ));

        $this->assertEquals(
            $question,
            $this->api->getFeaturedQuestions()
        );
    }

    /**
     * Test getAnswers
     */
    public function testGetAnswers()
    {
        $answer = file_get_contents(__DIR__ . "/TestData/Answer.json");

        $this->api
            ->expects($this->once())
            ->method('getAnswers')
            ->will($this->returnValue(
                $answer
            ));

        $this->assertEquals(
            $answer,
            $this->api->getAnswers('1')
        );
    }
}

