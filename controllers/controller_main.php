<?php

class Controller_Main extends Controller
{

	function action_index()
	{	
		$this->view->generate('main_view.php', 'template_view.php');
	}

	function action_family()
    {
        include "/home/admin/web/thecovergame.com/public_html/application/models/Family.php";

        $family = new Family();

        $this->view->generate(
            'main_family.php',
            'template_view.php',
            array(
                'boys' => $family->getBoysCount(),
                'girls' => $family->getGirlsCount(),
                'parrots' => $family->getParrotsCount(),
                'puppies' => $family->getPuppiesCount(),
                'totalAge' => $family->getTotalAge()
            ));
    }
}