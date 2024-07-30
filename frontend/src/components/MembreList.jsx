import React, { useEffect, useState } from 'react';
import axios from 'axios';
import { Link } from 'react-router-dom';
import '../pages/home.css'; // Chemin d'import correct

const MembresList = () => {
  const [members, setMembers] = useState([]);
  const [error, setError] = useState(null);

  useEffect(() => {
    axios.get('http://localhost:8000/api/membres')
      .then(response => {
        console.log(response.data); // Vérifiez les données reçues dans la console
        setMembers(response.data);
      })
      .catch(error => {
        console.error('Error fetching members:', error);
        setError(`Error fetching members: ${error.message}`);
      });
  }, []);

  if (error) {
    return <div>{error}</div>;
  }

  return (
    <div className="container">
      <h1 className="header">Membres du L2IS</h1>
      <table>
        <thead>
          <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Courriel</th>
            <th>Statut</th>
          </tr>
        </thead>
        <tbody>
          {members.map(member => (
            <tr key={member.id} className="member-row">
              <td>{member.last_name}</td>
              <td>{member.first_name}</td>
              <td>{member.email}</td>
              <td>{member.status}</td>
            </tr>
          ))}
        </tbody>
      </table>
    </div>
  );
};

export default MembresList;
