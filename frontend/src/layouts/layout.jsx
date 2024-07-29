import { Link, Outlet, useLocation } from "react-router-dom";
import { Disclosure, DisclosureButton, DisclosurePanel, Menu, MenuButton, MenuItem, MenuItems } from '@headlessui/react';
import { Bars3Icon, BellIcon, XMarkIcon } from '@heroicons/react/24/outline';
import logo from '../assets/logo.png';
import logo1 from '../assets/l2.png';

const navigation = [
  { name: 'ACCUEIL', href: '/' },
  { name: 'ORGANISATION', href: '/organisation' },
  { name: 'EQUIPES', href: '/equipes' },
  { name: 'PERSONNEL', href: '/personnel' },
  { name: 'PUBLICATIONS', href: '/publications' },
  { name: 'PROJETS', href: '/projets' },
  { name: 'INFORMATIONS', href: '/informations' },
  { name: 'EVENEMENTS', href: '/evenements' },
  { name: 'SIGN UP', href: '/login' },

];

function classNames(...classes) {
  return classes.filter(Boolean).join(' ');
}

export default function Layout() {
  const location = useLocation();

  return (
    <div className="flex flex-col min-h-screen">
      <header>
        <Disclosure as="nav" className="bg-gray-800">
          {({ open }) => (
            <>
              <div className="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
                <div className="relative flex h-16 items-center justify-between">
                  <div className="absolute inset-y-0 left-0 flex items-center sm:hidden">
                    {/* Mobile menu button */}
                    <DisclosureButton className="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white">
                      <span className="absolute -inset-0.5" />
                      <span className="sr-only">Open main menu</span>
                      {open ? (
                        <XMarkIcon className="block h-6 w-6" aria-hidden="true" />
                      ) : (
                        <Bars3Icon className="block h-6 w-6" aria-hidden="true" />
                      )}
                    </DisclosureButton>
                  </div>
                  <div className="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
                    <div className="flex flex-shrink-0 items-center">
                      <img
                        className="h-12 w-auto"
                        src={logo}
                        alt="Laboratoire d'Ingénierie Informatique et Systèmes"
                      />
                    </div>
                    <div className="hidden sm:ml-6 sm:block">
                      <div className="flex space-x-4">
                        {navigation.map((item) => (
                          <Link
                            key={item.name}
                            to={item.href.toLowerCase()}
                            className={classNames(
                              location.pathname === item.href ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white',
                              'rounded-md px-3 py-2 text-sm font-medium',
                            )}
                            aria-current={location.pathname === item.href ? 'page' : undefined}
                          >
                            {item.name}
                          </Link>
                        ))}
                      </div>
                    </div>
                  </div>
                  <div className="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                   

                    {/* Profile dropdown */}
                    <Menu as="div" className="relative ml-3">
                    
                      <MenuItems
                        transition
                        className="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 transition focus:outline-none data-[closed]:scale-95 data-[closed]:transform data-[closed]:opacity-0 data-[enter]:duration-100 data-[leave]:duration-75 data-[enter]:ease-out data-[leave]:ease-in"
                      >
                        <MenuItem>
                          {({ focus }) => (
                            <a
                              href="#"
                              className={classNames(focus ? 'bg-gray-100' : '', 'block px-4 py-2 text-sm text-gray-700')}
                            >
                              Your Profile
                            </a>
                          )}
                        </MenuItem>
                        <MenuItem>
                          {({ focus }) => (
                            <a
                              href="#"
                              className={classNames(focus ? 'bg-gray-100' : '', 'block px-4 py-2 text-sm text-gray-700')}
                            >
                              Settings
                            </a>
                          )}
                        </MenuItem>
                        <MenuItem>
                          {({ focus }) => (
                            <a
                              href="#"
                              className={classNames(focus ? 'bg-gray-100' : '', 'block px-4 py-2 text-sm text-gray-700')}
                            >
                              Sign out
                            </a>
                          )}
                        </MenuItem>
                      </MenuItems>
                    </Menu>
                  </div>
                </div>
              </div>

              <DisclosurePanel className="sm:hidden">
                <div className="space-y-1 px-2 pb-3 pt-2">
                  {navigation.map((item) => (
                    <DisclosureButton
                      key={item.name}
                      as="a"
                      href={item.href}
                      className={classNames(
                        location.pathname === item.href ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white',
                        'block rounded-md px-3 py-2 text-base font-medium',
                      )}
                      aria-current={location.pathname === item.href ? 'page' : undefined}
                    >
                      {item.name}
                    </DisclosureButton>
                  ))}
                </div>
              </DisclosurePanel>
            </>
          )}
        </Disclosure>
      </header>

      <main className="flex-grow">
        <Outlet />
      </main>

      <footer className="bg-gray-900 text-white py-10">
        <div className="container mx-auto px-4">
          <div className="flex flex-wrap justify-between items-center">
            <div className="w-full md:w-5/12 mb-4 md:mb-0">
              <img src={logo} alt="Logo FSTG" className="h-24 w-auto mb-4"/>
              <p className="text-sm">
              Laboratoire d'Ingénierie Informatique et Systèmes (L2IS) - FST Marrakech

Le L2IS est un centre de recherche de la Faculté des Sciences et Techniques de Marrakech, dédié à l'innovation en informatique et systèmes. Nous nous engageons à avancer les connaissances scientifiques et à développer des solutions technologiques pour les défis de demain.
              </p>
            </div>
            <div className="w-full md:w-1/12 mb-4 md:mb-0">
            </div>
            <div className="w-full md:w-5/12 mb-4 md:mb-0">
              <h2 className="text-lg font-bold mb-4">CONTACTEZ NOUS</h2>
              <ul className="text-sm">
                <li>Faculté des Sciences et Techniques
                B.P 549, Av.Abdelkarim Elkhattabi, Guéliz Marrakech</li>
                <li>(+212) 5 22 70 46 71</li>
                <li>(+212) 6 61 44 24 27</li>
                <li>(+212) 5 22 70 46 75</li>
                <li>contact-L2IS@fstg-marrakech.com</li>
              </ul>
            </div>
          
          </div>
        </div>
      </footer>
    </div>
  );
}
