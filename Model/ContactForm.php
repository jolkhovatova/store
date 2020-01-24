<?php
class ContactForm
{
    public $username;
    public $email;
    public $massage;

    /**
     * ContactForm constructor.
     * @param Request $request
     */
    public function __construct(Request $request)
    {
        $this->username = $request->post('username');
        $this->email = $request->post('email');
        $this->massage = $request->post('massage');
    }

    /**
     * @return bool
     */
    function isValid()
    {
      $res = $this->username !== '' && $this->email !== '' && $this->massage !== '';
      return $res;
    }
}
