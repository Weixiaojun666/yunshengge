/**

 @Name：layuiAdmin 主页示例
 @Author：star1029
 
 @License：GPL-2
    
 */


layui.define(function(exports){
  var admin = layui.admin;
  
  //区块轮播切换
  layui.use(['admin', 'carousel'], function(){
    var $ = layui.$
    ,admin = layui.admin
    ,carousel = layui.carousel
    ,element = layui.element
    ,device = layui.device();

    //轮播切换
    $('.layadmin-carousel').each(function(){
      var othis = $(this);
      carousel.render({
        elem: this
        ,width: '100%'
        ,arrow: 'none'
        ,interval: othis.data('interval')
        ,autoplay: othis.data('autoplay') === true
        ,trigger: (device.ios || device.android) ? 'click' : 'hover'
        ,anim: othis.data('anim')
      });
    });
    
    element.render('progress');
    
  });

  //八卦新闻
  layui.use(['carousel', 'echarts'], function(){
    var $ = layui.$
    ,carousel = layui.carousel
    ,echarts = layui.echarts;
    
    var echartsApp = [], options = [
      {
        title : {
          subtext: '剧本分析',
          textStyle: {
            fontSize: 14
          }
        },
        tooltip : {
          trigger: 'axis'
        },
        legend: {
          x : 'left',
          data:['已有剧本','顾客游玩']
        },
        polar : [
          {
            indicator : [
              {text : '恐怖', max  : 100},
              {text : '欢乐', max  : 100},
              {text : '推理', max  : 100},
              {text : '校园', max  : 100},
              {text : '情感', max  : 100},
              {text : '其他', max  : 100}
            ],
            radius : 130
          }
        ],
        series : [
          {
            type: 'radar',
            center : ['50%', '50%'], 
            itemStyle: {
              normal: {
                areaStyle: {
                  type: 'default'
                }
              }
            },
            data:[
              {value : [97, 42, 88, 95, 90, 94], name : '已有剧本'},
              {value : [97, 32, 74, 95, 88, 92], name : '顾客游玩'}
            ]
          }
        ]
      }
    ]
    ,elemDataView = $('#LAY-index-pageone').children('div')
    ,renderDataView = function(index){
      echartsApp[index] = echarts.init(elemDataView[index], layui.echartsTheme);
      echartsApp[index].setOption(options[index]);
      window.onresize = echartsApp[index].resize;
    };   
    //没找到DOM，终止执行
    if(!elemDataView[0]) return;
 
    renderDataView(0); 
  });

  //访问量
  layui.use(['carousel', 'echarts'], function(){
    var $ = layui.$
    ,carousel = layui.carousel
    ,echarts = layui.echarts;
    
    var echartsApp = [], options = [
      {
        tooltip : {
          trigger: 'axis'
        },
        calculable : true,
        legend: {
          data:['营业额','客流量']
        },
        
        xAxis : [
          {
            type : 'category',
            data : ['1月','2月','3月','4月','5月','6月','7月','8月','9月','10月','11月','12月']
          }
        ],
        yAxis : [
          {
            type : 'value',
            name : '营业额',
            axisLabel : {
              formatter: '{value} 元'
            }
          },
          {
            type : 'value',
            name : '客流量',
            axisLabel : {
                formatter: '{value} 人'
            }
          }
        ],
        series : [
          {
            name:'营业额',
            type:'line',
            data:[900, 850, 950, 1000, 1100, 1050, 1000, 1150, 1250, 1370, 1250, 1100]
          },
          {
            name:'客流量',
            type:'line',
            yAxisIndex: 1,
            data:[85, 85, 80, 95, 100, 95, 95, 115, 110, 124, 100, 95]
          }
        ]
      }
    ]
    ,elemDataView = $('#LAY-index-pagetwo').children('div')
    ,renderDataView = function(index){
      echartsApp[index] = echarts.init(elemDataView[index], layui.echartsTheme);
      echartsApp[index].setOption(options[index]);
      window.onresize = echartsApp[index].resize;
    };
    //没找到DOM，终止执行
    if(!elemDataView[0]) return;
    renderDataView(0);
    
  });

  exports('sample', {})
});