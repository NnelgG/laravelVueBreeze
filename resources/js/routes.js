import Dashboard from './components/Dashboard';
import Profile from './components/Profile';

export default{
  mode: 'history',
  routes: [
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