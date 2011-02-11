## CodeBench

borrowed from Kohana

## Basic Usage

create controller (classes/controller/codebench.php)

	class Controller_Codebench
	{	
		public function action_index()
		{
			$class = $_GET['class'];

			if (isset($_POST['class']))
			{
				Request::redirect('codebench/'.trim($_POST['class']));
			}
			
			if(class_exists($class))
			{
				$codebench = new $class;
				$codebench = $codebench->run();
				Witty::instance('Codebench')->render(array(
					'class' => $class,
					'codebench' => $codebench,
				));
			}
			else
			{
				Witty::instance('Codebench')->render(array(
					'class' => '',
					'codebench' => array(),
				));
			}
		}
	}

There is a bench demo under demo dir. copy classes dir to app/classes
