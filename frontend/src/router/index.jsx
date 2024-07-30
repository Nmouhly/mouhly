// router/index.jsx
import { createBrowserRouter } from 'react-router-dom';
import Home from '../pages/home';
import Organisation from '../pages/organisation';
import Equipes from '../pages/equipes';
import Personnel from '../pages/personnel';
import Publications from '../pages/publications';
import Projets from '../pages/projets';
import Informations from '../pages/informations';
import Evenements from '../pages/evenements';
import NotFound from '../pages/NotFound';
import Layout from '../layouts/layout';
import Login from "../components/auth/Login";
import Register from "../components/auth/Register";
import NewsDetail from '../components/NewsDetail'; // Assurez-vous que le chemin est correct
export const router = createBrowserRouter([
  {
    element: <Layout />,
    children: [
      {
        path: "/",
        element: <Home />,
      },
      {
        path: "/organisation",
        element: <Organisation />,
      },
      {
        path: "/equipes",
        element: <Equipes />,
      },
      {
        path: "/personnel",
        element: <Personnel />,
      },
      {
        path: "/publications",
        element: <Publications />,
      },
      {
        path: "/projets",
        element: <Projets />,
      },
      {
        path: "/informations",
        element: <Informations />,
      },
      {
        path: "/evenements",
        element: <Evenements />,
      },
      {
        path: "/news/:id",
        element: <NewsDetail />, // Ajoutez cette ligne
      },
     
      {
        path: "/login",
        element: <Login />, // Ajoutez cette ligne
      },
      {
        path: "/register",
        element: <Register />, // Ajoutez cette ligne
      },
      {
        path: "*", 
        element: <NotFound />,
      }
    ]
  },
]);
