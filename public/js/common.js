/**
 ** Search
 **/

$('.pt_search > ul > li').on('click',function () {
    var $this = $(this);
    var $index = $this.index();
    $this.addClass('pt_search_title_ctr_active').siblings().removeClass('pt_search_title_ctr_active');
    $('.pt_search_content_ctr').find('div.pt_search_item_chunk').eq($index).show().siblings().hide();
})

$('.excellent_companys_nav > ul > li').on('mousemove click',function () {
    var $this = $(this);
    var $index = $this.index();
    $this.addClass('excellent_companys_nav_li_active').siblings().removeClass('excellent_companys_nav_li_active');
    $('.excellent_companys_content').find('div.excellent_companys_content_item').eq($index).show().siblings().hide();
    return false;
})


$('.demand_nav > ul > li').on('mousemove click',function () {
    var $this = $(this);
    var $index = $this.index();
    $this.addClass('demand_nav_li_active').siblings().removeClass('demand_nav_li_active');
    $('.demand_content').find('div.demand_content_item').eq($index).show().siblings().hide();
    return false;
})

$('.demand_title > ul > li').on('click',function () {
    var $this = $(this);
    var $index = $this.index();
    $this.addClass('demand_title_li_active').siblings().removeClass('demand_title_li_active');
    return false;
})

$(function () {
    window.onresize = function(){
        var win = $(window).width(),
            main = $('#main');
        if(win < 800){
            main.addClass('min-800');
        }
    }
})