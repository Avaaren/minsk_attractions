<?php
require_once 'baseApi.php';
require_once($_SERVER['DOCUMENT_ROOT'].'/services/db_layer/db_query_builder.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/services/auth/login.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/services/auth/registration.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/services/auth/AuthClass.php');

class authApi extends baseApi
{
    public $apiName = 'auth';
    public $urlTemplates = [
        'login' => 'loginHandler',
        'logout' => 'logoutHandler',
        'registration' => 'registrationHandler',
    ];
    /**
     * Метод POST
     * http://ДОМЕН/auth/login/
     * @return string
     */
    public function loginHandler()
    {
        if ($this->method === "POST"){
            $log = new Login();
            $isSuccess = $log->loginRequestHandler();
            return $this->response(['errors' => $log->errors, 'success' => $isSuccess], 200);
        }
        return $this->response('Wrong method', 405);
    }
    /**
     * Метод POST
     * http://ДОМЕН/auth/logout/
     * @return string
     */
    public function logoutHandler()
    {
        if (Auth\AuthClass::isAuthorized()){
            unset($_SESSION['is_auth']);
            unset($_SESSION['username']);
            return $this->response(['success' => $true], 200);
        }
        return $this->response('Not authorized', 404);
    }
    /**
     * Метод POST
     * http://ДОМЕН/auth/registration/
     * @return string
     */
    public function registrationHandler()
    {
        if ($this->method === "POST"){
            $reg = new Registration();
            $isSuccess = $reg->registrationRequestHandler();
            return $this->response(['errors' => $reg->errors, 'success' => $isSuccess], 200);
        }
        return $this->response('Wrong method', 405);
    }

}