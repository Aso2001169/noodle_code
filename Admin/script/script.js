new Vue({
  el:'#app',
  data(){
    return{
      menus:[
        {
          label:'商品追加・更新・削除',
          path:'merchandise/index.php'
        },
        {
          label:'[準備中]会員管理',
          path:'user/index.php'
        },
        {
          label:'[準備中]売上管理',
          path:'Earnings/index.php'
        }
      ]
    };
  }
})