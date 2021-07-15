<template>
  <div
    class="content"
    @click="handleClick"
  >{{content}}</div>
</template>

<script>
// created at 2021-07-14
export default {
  name: 'Foo',

  props: {},

  components: {},

  data() {
    return {
      content: 'content',
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
.content {
  color: red;
  background-color: green;
}
</style>