import React, { useEffect, useState } from 'react';
import axios from 'axios';

const containerStyle = {
  width: '80%',
  margin: 'auto',
  padding: '20px',
  backgroundColor: '#f9f9f9', // Light background for contrast
  borderRadius: '10px', // Rounded corners
  boxShadow: '0 4px 8px rgba(0, 0, 0, 0.1)', // Soft shadow for depth
};

const headerStyle = {
  textAlign: 'center',
  fontSize: '2rem',
  marginBottom: '20px',
  fontWeight: '600',
  color: '#333', // Dark text for contrast
};

const tableStyle = {
  width: '100%',
  borderCollapse: 'collapse',
  fontSize: '1rem',
  fontFamily: 'Arial, sans-serif',
};

const theadStyle = {
  background: 'linear-gradient(135deg, #dbe2ef, #f9f9f9)', // Gradient background
  color: '#555', // Subtle text color
  textAlign: 'left',
};

const thTdStyle = {
  padding: '12px 15px',
  border: '1px solid #ddd', // Light border for separation
};

const trStyle = {
  transition: 'background-color 0.3s ease', // Smooth transition
};

const evenRowStyle = {
  backgroundColor: '#f5f5f5', // Slightly different background for even rows
};

const hoverRowStyle = {
  backgroundColor: '#e2e2e2', // Light hover effect
};

const MembresList = () => {
  const [members, setMembers] = useState([]);
  const [error, setError] = useState(null);

  useEffect(() => {
    axios.get('http://localhost:8000/api/membres')
      .then(response => {
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
    <div style={containerStyle}>
      <h1 style={headerStyle}>Membres du L2IS</h1>
      <table style={tableStyle}>
        <thead style={theadStyle}>
          <tr>
            <th style={thTdStyle}>Nom</th>
            <th style={thTdStyle}>Prénom</th>
            <th style={thTdStyle}>Courriel</th>
            <th style={thTdStyle}>Statut</th>
          </tr>
        </thead>
        <tbody>
          {members.map((member, index) => (
            <tr
              key={member.id}
              style={{
                ...trStyle,
                ...(index % 2 === 0 ? evenRowStyle : {}),
              }}
              onMouseEnter={(e) => e.currentTarget.style.backgroundColor = hoverRowStyle.backgroundColor}
              onMouseLeave={(e) => e.currentTarget.style.backgroundColor = ''}
            >
              <td style={thTdStyle}>{member.last_name}</td>
              <td style={thTdStyle}>{member.first_name}</td>
              <td style={thTdStyle}>{member.email}</td>
              <td style={thTdStyle}>{member.status}</td>
            </tr>
          ))}
        </tbody>
      </table>
    </div>
  );
};

export default MembresList;
