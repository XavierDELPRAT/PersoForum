<?php
    function connectBDD($host, $bdd, $user, $password)
    {
        try
        {
            $bdd = new PDO("mysql:host=$host;dbname=$bdd;charset=utf8",$user,$password);
            $bdd->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
	        $bdd->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
            return $bdd;
        }
        catch(Exception $e)
        {
            die("Erreur BDD: ".$e->getMessage());
        }
    }

    function auth($lvl)
    {
        if(isset($_SESSION['lvl']) && $_SESSION['lvl'] >= $lvl)
        {
            return true;
        }
        else
        {
            header("Location: login");
            die();
        }
    }

    function setFlash($message,$type = "success")
    {
      $_SESSION['flash']['message'] = $message;
      $_SESSION['flash']['type'] = $type;
    }

    function getFlash()
    {
        if(isset($_SESSION['flash']))
		{
			extract($_SESSION['flash']);
			unset($_SESSION['flash']);
			return "<div class='alert alert-$type alert-dismissible fade show' role='alert'>
                        $message
                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                    </div>";
		}
    }
?>