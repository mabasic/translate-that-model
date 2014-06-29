<?php namespace Mabasic\TranslateThatModel;

use App;
use Language;// This is a must have model

trait TranslateThatModelTrait {

    /*
    |--------------------------------------------------------------------------
    | Adds method translations to every Eloquent model
    |--------------------------------------------------------------------------
    |
    | Use this method to fetch localized columns for model.
    | If locale is not given it uses the current application locale.
    |
    */
    public function translations($locale = null)
    {
        // get user-defined locale or application current locale
        if($locale == null) $locale = App::getLocale();

        // find out language id from database
        $language_id = Language::where( Config::get('TranslateThatModel::column'), '=', $locale)
            ->remember(1440)->first()->id;

        // return hasMany with where clause from this Class
        return $this->hasMany( get_class($this).Config::get('TranslateThatModel::suffix') )
            ->where('language_id','=',$language_id);
    }

}