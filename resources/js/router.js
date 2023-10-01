import {createRouter, createWebHistory} from 'vue-router'

const router = createRouter({

    history: createWebHistory(),
    routes: [
        {
              path: '/create',
              component: () => import('./components/admin/CreatePost'),
              name: 'admin.create'
        },
        {
            path: '/',
            component: () => import('./components/admin/Posts'),
            name: 'admin.posts'
        },
        {
            path: '/categories/create',
            component: () => import('./components/admin/CreateCategories'),
            name: 'admin.categories'
        },
        {
            path: '/categories',
            component: () => import('./components/admin/Categories'),
            name: 'admin.categories.create'
        },
    ]

})

export default router
