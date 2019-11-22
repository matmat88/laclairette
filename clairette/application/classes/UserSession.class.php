<?php

class UserSession
{
	public function __construct()
	{
		if(session_status() == PHP_SESSION_NONE)
		{
      // Démarrage du module PHP de gestion des sessions.
			session_start();
		}
	}

    public function create($userId, $userLogin, $role)
    {
        // Construction de la session utilisateur.
        $_SESSION['user'] =
        [
            'userId'    => $userId,
            'login' => $userLogin,
            'role'     => $role
        ];
    }

    public function destroy()
    {
        // Destruction de l'ensemble de la session.
        $_SESSION = array();
        session_destroy();
    }

    public function getLogin()
    {
        if($this->isAuthenticated() == false) {
            return null;
        }
        return $_SESSION['user']['login'];
    }

    public function getRole()
    {
        if($this->isAuthenticated() == false) {
            return null;
        }
        return $_SESSION['user']['role'];
    }

    public function getUserId() {
        if($this->isAuthenticated() == false)
        {
            return null;
        }
        return $_SESSION['user']['UserId'];
    }


	public function isAuthenticated()
	{
		if(array_key_exists('user', $_SESSION) == true)
		{
			if($_SESSION['user'] == 33)
			{
                return 33;
            }
            elseif (empty($_SESSION['user']) == false) {
				return true;
            }
        }
		return false;
	}
}
