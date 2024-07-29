// NewsList.jsx
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
    <div>
      <ul>
        {news.map(item => (
          <li key={item.id} className="news-item">
            <Link to={`/news/${item.id}`} className="news-link">{item.title}</Link>
          </li>
        ))}
      </ul>
    </div>
  );
};

export default NewsList;
