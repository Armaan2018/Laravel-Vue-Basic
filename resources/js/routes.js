import Teacher from './components/TeacherComponent.vue';
import Card    from './components/CardComponent.vue';
import Single    from './components/SingleComponent.vue';

export const routes = [
    {
        name: 'teacher',
        path: '/teacher',
        component: Teacher
    },
    {
        name: 'card',
        path: '/card',
        component: Card
    },    

    {
        name: 'single',
        path: '/single/:id',
        component: Single
    }
];