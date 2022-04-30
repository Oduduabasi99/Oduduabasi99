import { v4 as uuidv4 } from 'uuid';
import Project1 from '../images/pro4.png';
import Project2 from '../images/pro1.png';
import Project3 from '../images/pro2.png';
import Project4 from '../images/pro3.png';

const projects = [
  {
    id: uuidv4(),
    name: 'Ecommerce',
    desc:
      'An ecommerce application with stunning disign and many features using ReactJS',
    img: Project1,
    link: '',
  },
  {
    id: uuidv4(),
    name: 'Portfolio',
    desc:
      'A single page portfolio app using ReactJS that can be switch between dark and light theme.',
    img: Project2,
    link: ' https://github.com/Oduduabasi99/portfolio-designs/pull/new/first',
  },
  {
    id: uuidv4(),
    name: 'Note App',
    desc:
      'A simple note app using ReactJS that has many features such as dark and light theme, search filters, etc',
    img: Project3,
    link: '',
  },
  {
    id: uuidv4(),
    name: 'Portfolio',
    desc: 'A simple portfolio. The portfolio is made using ReactJs.',
    img: Project4,
    link: '',
  },
];

export default projects;
