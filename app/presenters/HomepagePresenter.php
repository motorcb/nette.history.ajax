<?php

namespace App\Presenters;

use Nette,
    App\Model;

/**
 * Homepage presenter.
 */
class HomepagePresenter extends BasePresenter
{

    public function actionDefault()
    {
        if ($this->isAjax())
        {
            $this->redrawControl('content');
        }
    }
    
    public function renderTwo()
    {
        if ($this->isAjax())
        {
            $this->redrawControl('content');
        }
    }
    
    public function renderThree()
    {
        $this->template->date = date("d.m.Y H:i:s");
        if ($this->isAjax())
        {
            $this->redrawControl('content');
        }
    }    

}
