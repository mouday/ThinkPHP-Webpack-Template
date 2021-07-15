<template>
  <div
    class="title"
    @click="handleClick"
  >{{title}}</div>
</template>

<script>
// created at 2021-07-14
export default {
  name: 'Foo',

  props: {},

  components: {},

  data() {
    return {
      title: 'title',
    };
  },
  computed: {},

  methods: {
    async getData() {},
    handleClick() {
      alert('handleClick');
    },
  },

  created() {
    this.getData();
  },
};
</script>

<style lang="less" scoped>
.title {
  color: @themeColor;
  background-color: @themeBackgroundColor;
}
</style>