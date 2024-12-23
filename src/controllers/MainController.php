<?php

class MainController
{
    // Page d'accueil
    public function home()
    {
        $this->render('home');
    }
    // Page Man
    public function man()
    {
        $this->render('man');
    }  // Page Woman
    public function woman()
    {
        $this->render('woman');
    }
      // Page Panier
      public function panier()
      {
          $this->render('panier');
      }
        // Page Connexion
      public function connexion()
      {
          $this->render('connexion');
      }
        // Page Inscription
      public function inscription()
      {
        
        $this->render('inscription');
      }
    // Page Details
    public function details()
        {
        $this->render('details');
    }
    // Page Brandss
    public function brands()
        {
        $this->render('brands');
    }
    // Page Types
    public function types()
        {
        $this->render('types');
    }
    // Page "About"
    public function about()
    {
        $this->render('about');
    }

    // Page 404
    public function notFound()
    {
        http_response_code(404);
        echo "404 - Page Not Found!";
    }

    // Méthode pour inclure une vue
    private function render($view, $data = [])
    {
        // Transmet les données aux vues
        extract($data);

        // Inclut la vue demandée
        $viewFile = __DIR__ . '/../views/' . $view . '.php';
        if (file_exists($viewFile)) {
            require_once __DIR__ . '/../views/partials/header.php';
            require_once $viewFile;
            require_once __DIR__ . '/../views/partials/footer.php';
        } else {
            echo "View not found: $view";
        }
    }
}
