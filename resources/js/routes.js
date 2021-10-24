import Dashboard from './components/Dashboard';
import Profile from './components/Profile';
import NotFound from './components/NotFound';

export default{
  mode: 'history',
  // linkActiveClass: 'font-semibold', // add class for active link
  routes: [
    {
      path: '*',
      component: NotFound,
    },  
    {
      path: '/dashboard',
      component: Dashboard,
      name: "Dashboard"
    },
    {
      path: '/profile',
      component: Profile,
      name: "Profile"
    }/*,
    {
      path: "/dashboard",
      name: "Dashboard",
      component: Dashboard,
      beforeEnter: (to, form, next) => {
				axios.get('/api/athenticated').then(()=> {
					next()
				}).catch(()=>{
					return next({ name: 'Login'})
				})
			}
    }*/  
  ]
}