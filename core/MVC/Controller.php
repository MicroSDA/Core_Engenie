<?php

/**
 * Class controller
 *
 */
class controller
{

    /**
     * @var
     */
    private $model;


    /**
     * controller constructor.
     * @param $url_data
     * @param $request_url
     * @throws ErrorException
     */
    public function __construct($url_data, $request_url)
    {


        if (is_file(URL_ROOT . '/core/Models/' . $url_data['model'] . '.php')) {

            require_once URL_ROOT . '/core/Models/' . $url_data['model'] . '.php';

            $this->model = new $url_data['model']($request_url, $url_data);
            $method = $url_data['method'];

            if (method_exists($this->model, $method)) {

                $this->model->$method();


            } else {

                throw new ErrorException(sprintf('METHOD "%s" IS NOT FOUND IN "%s"', $url_data['method'], URL_ROOT . '/core/Models/' . $url_data['model'] . '.php'));
            }

        } else {

            throw new ErrorException(sprintf('MODEL "%s" IS NOT FOUND IN "%s"', $url_data['model'], URL_ROOT . '/core/Models/'));
        }


    }

}