import Foo from '@/components/Foo.vue';
import Bar from '@/components/Bar.vue';

new Vue({
    el: '#app-title',

    render(h) {
        return h(Foo);
    },
});

new Vue({
    el: '#app-content',

    render(h) {
        return h(Bar);
    },
});
