<?php

/**
 * MainController shows the example page
 *
 * @author luke
 */
class MainController extends Controller
{

    public function actionIndex()
    {
        $this->render('index');
    }

}
