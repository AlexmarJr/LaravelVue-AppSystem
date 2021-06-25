import App from './components/app'
import About from './components/About'
import Login from './components/login'
import Register from './components/register'
import Welcome from './components/welcome'
import NotFounded from './components/404'

export default{
    mode: 'history',
    linkActiveClass: 'ass',
    routes: [
        {
            path: '*',
            component: NotFounded
        },
        {
            path: '/',
            component: Welcome
        },
        {
            path: '/home',
            component: App
        },
        {
            path: '/about',
            component: About
        },
        {
            path: '/login',
            component: Login
        },
        {
            path: '/register',
            component: Register
        }
    ]
}