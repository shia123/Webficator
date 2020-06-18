import NavComponent from './components/NavComponent';
import HmodalComponent from './components/HmodalComponent';


export default [
    {
        path: '/webcontents',
        components: NavComponent,
        name: 'Nav',

        path: '/webcontent/test',
        components: HmodalComponent,
        name: 'Sec',

    }
]
