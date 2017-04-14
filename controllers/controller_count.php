<?php

class Controller_Count extends Controller
{

    function action_index()
    {
        $this->view->generate('count_view.php', 'template_view.php');
    }
}