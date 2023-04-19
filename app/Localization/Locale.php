<?php


namespace App\Localization;


use Illuminate\Support\Facades\App;

class Locale
{
    /**
     * @var \Illuminate\Session\SessionManager|\Illuminate\Session\Store|mixed
     */
    public $locale;


    /**
     * Localization constructor.
     */
    public function __construct()
    {
        $this->locale = \Session('locale');

        if (\Session('locale') != '') {
            App::setLocale(\Session('locale'));
        } else {
            \Session(['locale' => 'en']);
            App::setLocale('en');
            $this->locale = \Session('locale');
        }
    }
}
