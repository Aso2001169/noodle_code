new Vue({
  el:'#app',
  data(){
    return{
      menus:[
        {
          label:'商品追加・更新・削除',
          path:'merchandise/index.html'
        },
        {
          label:'会員管理',
          path:'user/index.html'
        },
        {
          label:'売上管理',
          path:'Earnings/index.html'
        }
      ]
    };
  }
})