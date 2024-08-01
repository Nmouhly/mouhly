import React, { useEffect, useState } from 'react';
import axios from 'axios';
import '../pages/home.css';

const InstagramFeed = () => {
  const [posts, setPosts] = useState([]);
  const [error, setError] = useState(null);

  useEffect(() => {
    axios.get('https://graph.instagram.com/me/media', {
      params: {
        fields: 'id,caption,media_type,media_url,thumbnail_url,permalink',
        access_token: 'YOUR_ACCESS_TOKEN' // Remplace par ton token d'accès
      }
    })
    .then(response => {
      setPosts(response.data.data);
    })
    .catch(error => {
      console.error('Error fetching Instagram posts:', error);
      setError(`Error fetching Instagram posts: ${error.message}`);
    });
  }, []);

  if (error) {
    return <div>{error}</div>;
  }

  return (
    <div className="instagram-feed">
      {posts.map(post => (
        <a key={post.id} href={post.permalink} target="_blank" rel="noopener noreferrer">
          <img
            src={post.media_url}
            alt={post.caption}
            className="instagram-image"
            onError={(e) => e.target.src = '/path/to/placeholder-image.jpg'}
          />
        </a>
      ))}
    </div>
  );
};

export default InstagramFeed;
