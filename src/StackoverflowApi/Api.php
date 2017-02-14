<?php

namespace StackoverflowApi;

/**
 * Class Api
 */
class Api
{
    /**
     * @return mixed
     */
    public function getFeaturedQuestions()
    {
        $url = '/2.2/questions/featured?order=desc&sort=activity&site=stackoverflow';
        $result = json_decode($this->getRequest($url), true);
        return $result;
    }

    /**
     * @param $id
     * @return mixed
     */
    public function getAnswers($id)
    {
        $url = '/2.2/questions/' . $id . '/answers?order=desc&sort=activity&site=stackoverflow';
        $result = json_decode($this->getRequest($url), true);
        return $result;
    }

    /**
     * @param $url
     * @return mixed
     */
    protected function getRequest($url)
    {
        $curl = curl_init();

        curl_setopt($curl, CURLOPT_URL, 'http://api.stackexchange.com' . $url);
        curl_setopt($curl, CURLOPT_HEADER, 0);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_TIMEOUT, 30);
        curl_setopt($curl, CURLOPT_USERAGENT, 'cURL');
        curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($curl, CURLOPT_ENCODING , "gzip");

        $result = curl_exec($curl);
        curl_close($curl);

        return $result;
    }
}

