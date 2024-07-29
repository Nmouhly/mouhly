import React from 'react';

const styles = {
  container: {
    maxWidth: '800px',
    margin: '0 auto',
    padding: '20px',
    background: 'linear-gradient(135deg, #f3ec78, #0b3d91)', // Changer la couleur ici
    animation: 'backgroundAnimation 5s infinite alternate',
    borderRadius: '10px',
    boxShadow: '0 8px 16px rgba(0, 0, 0, 0.6)', // Ombre encore plus forte
  },
  header: {
    textAlign: 'center',
    marginBottom: '20px',
    fontSize: '2.5em',
    color: '#333',
    transition: 'transform 0.3s ease',
    animation: 'textFadeIn 2s ease-out',
  },
  paragraph: {
    fontSize: '1.2em',
    lineHeight: '1.8',
    textAlign: 'justify',
    animation: 'textSlideIn 2s ease-out',
  },
  newsItem: {
    marginBottom: '10px',
    listStyleType: 'none',
  },
  newsLink: {
    fontSize: '0.9em',
    color: 'black',
    textDecoration: 'none',
    transition: 'color 0.3s ease, transform 0.3s ease, box-shadow 0.3s ease',
    display: 'block',
    padding: '8px',
    borderRadius: '4px',
    backgroundColor: 'transparent', // Couleur de fond transparente
    boxShadow: '0 2px 4px rgba(0, 0, 0, 0.5)', // Ombre plus forte
  },
};

// Déclarations des keyframes pour les animations
const keyframes = `
  @keyframes backgroundAnimation {
    0% { background: linear-gradient(135deg, #f3ec78, #0b3d91); }  /* Départ jaune clair au bleu foncé */
    100% { background: linear-gradient(135deg, #89fffd, #00274d); } /* Fin cyan clair au bleu marine */
  }

  @keyframes textFadeIn {
    from { opacity: 0; transform: translateY(-10px); }
    to { opacity: 1; transform: translateY(0); }
  }

  @keyframes textSlideIn {
    from { opacity: 0; transform: translateX(-10px); }
    to { opacity: 1; transform: translateX(0); }
  }
`;

// Composant principal
const ORGANISATION = () => {
  return (
    <div>
      <style>
        {keyframes}
        {`
          .newsLinkHover {
            transform: scale(1.05);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.6); // Ombre encore plus forte lors du survol
          }
        `}
      </style>
      <div style={styles.container}>
        <h1 style={styles.header}>
          Bienvenue à notre Organisation
        </h1>
        <p style={styles.paragraph}>
          Notre organisation se compose de chercheurs passionnés et de personnel dédié, tous unis par une vision commune de l'excellence académique et scientifique. À travers nos différentes équipes de recherche et nos collaborations tant nationales qu'internationales, nous explorons des avenues nouvelles et prometteuses qui façonnent l'avenir de l'ingénierie informatique. Sous la direction de Monsieur RAKRAK Said.
        </p>
        <br />
        <ul>
          <li style={styles.newsItem}>
            <a
              href="/equipes"
              style={styles.newsLink}
              onMouseOver={(e) => e.currentTarget.classList.add('newsLinkHover')}
              onMouseOut={(e) => e.currentTarget.classList.remove('newsLinkHover')}
            >
              NOS EQUIPES
            </a>
          </li>
        </ul>
      </div>
    </div>
  );
}

export default ORGANISATION;
