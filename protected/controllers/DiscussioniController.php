<?php

class DiscussioniController extends Controller
{
	public function actionIndex()
	{
		$argomenti = Argomenti::model()->FindAll(array('order'=>'Titolo'));
		$moderatori = Utenti::model()->getNamesById();
		$i=0;
		foreach ($argomenti as $argomento){
			$discussioni[$i++] = Discussioni::model()->findAll('Argomento ='.$argomento->ID);
		}
		$data['argomenti'] = $argomenti;
		$data['moderatori'] = $moderatori;
		$data['discussioni'] = $discussioni;
		
		$this->render('index',$data);
	}
}