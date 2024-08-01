import React, { useEffect, useState } from 'react';
import axios from 'axios';
import { Link } from 'react-router-dom';
import '../pages/home.css'; // Chemin d'importation correct

const NewsList = () => {
  const [news, setNews] = useState([]);
  const [error, setError] = useState(null);

  useEffect(() => {
    axios.get('http://localhost:8000/api/news')
      .then(response => {
        console.log(response.data); // Vérifiez les données reçues dans la console
        setNews(response.data);
      })
      .catch(error => {
        console.error('Error fetching news:', error);
        setError(`Error fetching news: ${error.message}`);
      });
  }, []);

  if (error) {
    return <div>{error}</div>;
  }

  return (
    <div className="news-list">
      {news.map(item => (
        <article key={item.id} className="news-item">
          <img
            src={`http://localhost:8000/images/${item.image}`} // Assurez-vous que le chemin est correct
            alt={item.title}
            className="news-image"
            onError={(e) => e.target.src = '/path/to/placeholder-image.jpg'} // Remplacez par le chemin de votre image de remplacement
          />
          <h2 className="news-title">{item.title}</h2>
          <p className="news-content">{item.content.slice(0, 100)}...</p>
          <Link to={`/news/${item.id}`} className="news-link">Read more</Link>
        </article>
      ))}
      
    </div>
  );
};

export default NewsList;
