import Route from "./Route.js";

//Définir ici vos routes
export const allRoutes = [
  new Route("/", "Accueil", "/pages/home.html"),
  new Route("/connexion", "connexion", "/pages/connexion.html"),
  new Route("/inscription", "inscription", "/pages/inscription.html"),
  new Route("/covoiturages", "covoiturages", "/pages/covoiturages.html"),
];

//Le titre s'affiche comme ceci : Route.titre - websitename
export const websiteName = "EcoRide";
