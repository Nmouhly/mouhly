import React, { useEffect, useState } from 'react';
import axios from 'axios';
import { useParams } from 'react-router-dom';
import './NewsDetail.css'; // Importer les styles CSS

const NewsDetail = () => {
  const { id } = useParams();
  const [newsItem, setNewsItem] = useState(null);
  const [error, setError] = useState(null);

  useEffect(() => {
    axios.get(`http://localhost:8000/api/news/${id}`)
      .then(response => {
        console.log(response.data); // Vérifiez les données reçues dans la console
        setNewsItem(response.data);
      })
      .catch(error => {
        console.error('Error fetching news details:', error);
        setError(`Error fetching news details: ${error.message}`);
      });
  }, [id]);

  if (error) {
    return <div>{error}</div>;
  }

  if (!newsItem) {
    return <div>Loading...</div>;
  }

  return (
    <div className="news-detail-container">
      <h1 className="news-detail-title">{newsItem.title}</h1>
      {newsItem.image && (
        <div className="news-detail-image-wrapper">
          <img 
            src={`http://localhost:8000/images/${newsItem.image}`} 
            alt={`Image de ${newsItem.title}`} 
            className="news-detail-image"
          />
        </div>
      )}
      <div className="news-detail-content-wrapper">
        <p className="news-detail-date">Publié le: {new Date(newsItem.created_at).toLocaleDateString()}</p>
        <p className="news-detail-content">{newsItem.content}</p>
      </div>
    </div>
  );
};

export default NewsDetail;
