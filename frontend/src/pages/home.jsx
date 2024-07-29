import React from 'react';
import './home.css'; // Assurez-vous que ce fichier existe et contient les styles appropriés
import NewsList from '../components/NewsList'; // Importer le composant NewsList

const Home = () => {
  return (
    <div className="container">
      <h1 className="header">
        Bienvenue au Laboratoire d'Ingénierie Informatique et Systèmes (L2IS)
      </h1>
      <p className="paragraph">
        Le L2IS est un centre de recherche de la Faculté des Sciences et Techniques de Marrakech,
        dédié à l'innovation en informatique et systèmes. Nous nous engageons à avancer les
        connaissances scientifiques et à développer des solutions technologiques pour les défis de demain.
      </p>
      <br />
      <p className="paragraph">
        Découvrez les dernières nouvelles et événements importants du laboratoire. Restez informé des développements récents dans nos projets de recherche, des collaborations en cours et des annonces importantes.
      </p>
      <h2 className="newsHeader">Actualités récentes:</h2>
      <NewsList /> {/* Utilisation du composant NewsList pour afficher les actualités */}
    </div>
  );
}

export default Home;
